<x-app-layout class="">
        <x-splade-data remember="ecoscore" local-storage :default="['name'=> null , 'section' => 'intro' ,'end'=> $end ]">
            <div v-if="data.section == 'intro'" class="w-[30%] flex flex-col h-[100%] py-52">
                <div class="w-full items-center flex justify-center flex-col space-y-16">
                    <div class="flex items-center justify-center space-x-5 text-4xl text-white font-bold">
                    <svg width="40px" height="40px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17,8C8,10,5.9,16.17,3.82,21.34L5.71,22l1-2.3A4.49,4.49,0,0,0,8,20C19,20,22,3,22,3,21,5,14,5.25,9,6.25S2,11.5,2,13.5a6.22,6.22,0,0,0,1.75,3.75C7,8,17,8,17,8Z"></path> </g></svg>
                    <p>
                        ECOSCORE
                    </p>
                    </div>
                    <input type="text" name="name" v-model="data.name" class="rounded-lg w-[100%]" autocomplete="off">
                    <button @click.prevent="data.section = 'questions'" class="rounded-md bg-green-800 bg-opacity-70 text-white p-2 font-semibold hover:bg-opacity-100 transition duration-500"> Iniciar Cuestionario</button>
                </div>
            </div>
            <div>
                <Questionario :data="@js($questions)" :params="data" />
            </div>
        </x-splade-data>
    
</x-app-layout>