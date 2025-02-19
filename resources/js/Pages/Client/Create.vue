<script setup>
import { Head } from '@inertiajs/vue3'
import Default from '@/Layouts/Default.vue'
import { UserCircleIcon } from '@heroicons/vue/24/outline';

defineOptions({ layout: Default })
</script>

<template>
    <div class="p-8 font-mono">
        <div class="max-w-5xl mx-auto md:grid grid-cols-7 gap-6">
            <div class="col-span-2 space-y-3 md:block sm:flex">
                <!-- Main Card -->
                <div class="bg-nav-blue w-fit p-2 text-sm tracking-tighter rounded-md flex items-center">
                    <UserCircleIcon class="h-4 w-4"/>&nbsp;
                    <span class="text-gray-300">Creating client</span>
                </div>
                <div class="bg-transparent-dark w-fit p-2 text-sm tracking-tighter rounded-md flex items-center">
                    <UserCircleIcon class="h-4 w-4"/>&nbsp;
                    <span class="text-gray-300">Personal information</span>
                </div>
            </div>
            <div class="col-span-5 space-y-3">
                <p class="mb-3">Personal information</p>
                <div class="">
                    <form class="space-y-3">
                        <div class="space-y-2">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" placeholder="eg. John Doe">
                        </div>
                        <div class="space-y-2">
                            <label for="name">Nin Number</label>
                            <input type="text" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" placeholder="eg. Nin Number">
                        </div>
                        <div class="space-y-2">
                            <label for="name">Others</label>
                            <input type="text" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" placeholder="eg. Other Details">
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <button class="bg-nav-blue p-2 rounded-md">previous</button>
                            <button class="bg-nav-blue p-2 rounded-md">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <Head title="Client Name" />
</template>
