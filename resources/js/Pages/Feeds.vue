<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Feeds" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <div class="flex justify-start flex-row items-center gap-4">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Feeds
                </h2>
                <button class="bg-green-700 text-white rounded-md px-3 text-lg font-bold">+</button>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Latest posts
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
