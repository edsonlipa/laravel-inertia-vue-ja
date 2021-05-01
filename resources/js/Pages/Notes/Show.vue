<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modulo Notas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md:gap-6 ">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg text-gray-900"> Detalle de una nota</h3>
                            <p class="text-sm text-gray-600"> {{note.excerpt}}</p>
                        </div>
                    </div>
                    <div class="md:col-span-2 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                            <p>{{note.content}}</p>
                            <hr class="my-6">
                            <inertia-link :href="route('notes.index')">volver</inertia-link>
                        </div>
                    </div>
                </div>
                <!-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                </div> -->
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },
        props:["note"]
        ,created: function () {
            
            this.printnota();
        },
        methods:{
            printnota(){
                console.log(this.note.content);
            }
        }
    }
</script>
