<template>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Simpsons</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">and all about them.</p>
            </div>
            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <article v-for="simpson in simpsons" :key="simpson.id" class="flex max-w-xl flex-col items-start justify-between">
                    <div class="group relative">
                        <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{ simpson.qoute }}</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://placehold.co/200x200" alt="" class="h-10 w-10 rounded-full bg-gray-50" />
                        <div class="text-sm leading-6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0" />
                                    {{ simpson.full_name }}
                                </a>
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";
export default {
    data() {
        return {
            simpsons: null,
        };
    },
    created: function() {
        axios
            .get("/api/simpsons")
            .then(result => {
                this.simpsons = result.data.data;
            })
    }
};
</script>
