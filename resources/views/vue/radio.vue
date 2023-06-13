<template>
    <div>
        <input type="radio" :name="name" :value="value" v-model="selectedOption" />
        <label :for="label">{{ label }}</label>
    </div>
</template>

<script >
// import { ref,watch } from "vue";


// const props = defineProps(['name', 'value', 'label'])
// const selectedOption = ref('');



// console.log(props.name);

export default {
    props:['name','value','label','selected'],

    data() {
        return {
            selectedOption:null
        }
    },
    watch:{
        selectedOption(){
            console.log('algo paso' , this.name);
        }
    }
}
</script>