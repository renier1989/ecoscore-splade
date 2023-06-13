<template>
<div class="h-[100%] flex items-start justify-end py-28">

<div v-if="params.section == 'questions' && section == 'questions'">
    <div v-for="question in data" :key="question.id">
        <div>
        <div v-if="question.orden == step">
            <!-- <span v-text="question.orden"></span> -->
            <p v-text="question.pregunta"></p>
            <div v-for="opcion in question.opciones" :key="opcion.id">
            <label :for="opcion.id">
            <input
                type="radio"
                :name="question.id"
                :id="opcion.id"
                :value="`${opcion.id}_${opcion.valor}`"
                v-model="selected[question.id]"
                @change="saveOptionSelected"
            />
                
                
                {{ opcion.opcion }}
                
                </label>
            </div>
        </div>
        </div>
    </div>
    <div v-if="error.show">
        <p v-text="error.msg"></p>
    </div>

    <div class="flex space-x-3">
        <button type="button" v-if="step > 1" @click.prevent="anterior" class="bg-yellow-700 text-white rounded-md p-2">Anterior</button>
        <button type="button" v-if="step < params.end" @click.prevent="siguiente" class="bg-green-700 text-white rounded-md p-2"> Siguiente</button>
        <button type="button" v-if="step == params.end" @click.prevent="finalizar" class="bg-blue-700 text-white rounded-md p-2">Finalizar</button>
    </div>
</div>
<div v-if="section == 'complete'">
    tu puntuacion fue de <p v-text="puntuacion"></p>
    <button type="button" class="bg-indigo-600 text-white rounded-md p-2" @click.prevent="resetLocalStorage()"> Reiniciar el Questionario</button>
</div>
</div>
</template>
<script>
import axios from 'axios';
export default {
props: {
    data: {
    type: Array,
    required: true,
    },
    params: {
    type: Object,
    },
},
data() {
    return {
    selected: {},
    error:{
        show : false,
        msg : ''
    },
    step:1,
    puntuacion:0,
    section : 'questions'

    };
},
mounted() {
    const savedSelectedOptions = localStorage.getItem("selectedOptions");
    const savedStep = localStorage.getItem("steps");
    const savedSection = localStorage.getItem("final_section");
    const savedPuntuacion = localStorage.getItem("final_puntuacion");
    if (savedSelectedOptions) {
    this.selected = JSON.parse(savedSelectedOptions);
    }
    if(savedStep) {
        this.step = JSON.parse(savedStep);
    }
    if(savedSection) {
        this.section = JSON.parse(savedSection);
    }
    if(savedPuntuacion) {
        this.puntuacion = JSON.parse(savedPuntuacion);
    }
},
methods: {
    saveOptionSelected() {
    localStorage.setItem("selectedOptions", JSON.stringify(this.selected));
    this.error.show=false;
    this.error.msg="";
    },
    resetLocalStorage() {
        localStorage.clear();
        this.selected = {}; // Restablecer el objeto de selecciones a un estado inicial si es necesario
        window.location.href='/';
    },
    siguiente(){
        console.log(this.selected, this.step);
        if(this.step in this.selected){
            this.step = this.step + 1;
        }else{
            this.error.show= true;
            this.error.msg = "Por favor selecione una opcion para continuar."
            console.log(this.error.msg);
        }
        localStorage.setItem('steps', JSON.stringify(this.step));
    },
    anterior(){
        this.step = this.step - 1;
        localStorage.setItem('steps', JSON.stringify(this.step));
    },
    
    finalizar(){
        let sum = 0;
        for(let key in this.selected){
            let lastValue = parseInt(this.selected[key].split('_').pop());
            sum += lastValue;
        }

        this.section = 'complete';
        this.puntuacion = sum;

        axios.post(`finish`,{
            params : this.params,
            puntuacion : this.puntuacion
        } ).then(re => {
            console.log(re);
        })
        .catch(e =>{})
        .finally(() => {
            
        })
        

        localStorage.setItem('final_section', JSON.stringify(this.section));
        localStorage.setItem('final_puntuacion', JSON.stringify(this.puntuacion));


    }

},


};
</script>