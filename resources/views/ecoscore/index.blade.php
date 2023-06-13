<x-app-layout>

    <x-splade-data remember="ecoscore" local-storage :default="['name'=> null , 'section' => 'intro' ,'end'=> $end ]">
    {{-- <x-splade-data remember="ecoscore" local-storage default="{name:null , section : false , step:1 , selected:[] }"> --}}

        <div v-if="data.section == 'intro'">

            <input type="text" name="name" v-model="data.name">
            <button @click.prevent="data.section = 'questions'"> Continue to Questions</button>

            {{-- <x-splade-defer manual method="post" url="/continue" request="{name: data.name}">
                <input type="text" name="name" v-model="data.name">
                <button @click.prevent="reload"> Continue to Questions</button>
            </x-splade-defer> --}}
        </div>
        {{-- 
        <pre>
                <span v-text="data.name"></span>
                <span v-text="data.section"></span>
                <span v-text="data.step"></span>
            </pre> --}}

        <div>
            <Questionario :data="@js($questions)" :params="data" />
            
        </div>


    </x-splade-data>

</x-app-layout>