<script setup>
import { Head } from '@inertiajs/vue3'
import Default from '@/Layouts/Default.vue'
import { UserCircleIcon, PlusCircleIcon, DocumentDuplicateIcon } from '@heroicons/vue/24/outline';

defineOptions({ layout: Default })
</script>

<template>
    <div class="p-8 font-mono">
        <div class="max-w-5xl mx-auto space-y-5">
            <div>
                <input type="text" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="Search by name or motor registration">
            </div>
            <div class="md:flex md:justify-start sm:justify-start rounded-md flex-wrap sm:gap-3 md:gap-3 gap-2 flex items-center justify-between gap-2 md:p-0 sm:p-2">
                <div class="portal relative rounded-md flex flex-col items-center space-y-1 shadow-lg">
                    <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                        <DocumentDuplicateIcon class="h-4 w-4"/>
                    </span>
                    <UserCircleIcon class="h-12 w-12"/>
                    <span class="md:text-sm sm:text-sm text-xs">Musisi Abubakr</span>
                    <span class="md:text-sm sm:text-sm text-xs">UBF 232F</span>
                    <div class="flex items-center space-x-3">
                        <span class="bg-cyan-950 p-1 rounded-md text-xs">Luganda</span>
                        <span class="bg-cyan-950 p-1 rounded-md text-xs">English</span>
                    </div>
                </div>
                <div class="portal relative rounded-md flex flex-col items-center space-y-1 shadow-lg">
                    <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                        <DocumentDuplicateIcon class="h-4 w-4"/>
                    </span>
                    <UserCircleIcon class="h-12 w-12"/>
                    <span class="md:text-sm sm:text-sm text-xs">Musisi Abubakr</span>
                    <span class="md:text-sm sm:text-sm text-xs">UBF 232F</span>
                    <div class="flex items-center space-x-3">
                        <span class="bg-cyan-950 p-1 rounded-md text-xs">Luganda</span>
                        <span class="bg-cyan-950 p-1 rounded-md text-xs">English</span>
                    </div>
                </div>
                <div class="portal relative rounded-md flex flex-col items-center space-y-1 shadow-lg">
                    <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                        <DocumentDuplicateIcon class="h-4 w-4"/>
                    </span>
                    <UserCircleIcon class="h-12 w-12"/>
                    <span class="md:text-sm sm:text-sm text-xs">Musisi Abubakr</span>
                    <span class="md:text-sm sm:text-sm text-xs">UBF 232F</span>
                    <div class="flex items-center space-x-3">
                        <span class="bg-cyan-950 p-1 rounded-md text-xs">Luganda</span>
                        <span class="bg-cyan-950 p-1 rounded-md text-xs">English</span>
                    </div>
                </div>

                <!-- multiple docs layout -->
                <div class="relative w-fit">
                    <!-- Fake Background Copy -->
                    <div class="absolute bottom-4 left-0 w-full h-full bg-gray-500 rounded-md scale-90 opacity-80"></div>
                    <div class="absolute bottom-2 left-0 w-full h-full bg-gray-400 rounded-md scale-95 opacity-90"></div>
                    <!-- Main Card -->
                    <div class="portal relative rounded-md flex flex-col items-center space-y-1 bg-gray-900 p-4 shadow-lg">
                        <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                            <DocumentDuplicateIcon class="h-4 w-4"/>
                        </span>
                        <span id="clone" class="absolute top-7 right-1 bg-cyan-950 text-white text-sm px-2 rounded-md">
                        9
                        </span>
                        <UserCircleIcon class="h-12 w-12"/>
                        <span class="md:text-sm sm:text-sm text-xs">Musisi Abubakr</span>
                        <span class="md:text-sm sm:text-sm text-xs">UBF 232F</span>
                        <div class="flex items-center space-x-3">
                            <span class="bg-cyan-950 p-1 rounded-md text-xs">Luganda</span>
                            <span class="bg-cyan-950 p-1 rounded-md text-xs">English</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <Head title="Dashboard" />
</template>

<style scoped>
.portal{
    background-color: #254660!important;
    padding:18.7px;
    cursor:pointer;
    color:#9ca3af;
}
#clone{
    visibility:hidden;
}
.portal:hover{
    color:#d1d5db;
    transition:0.1s ease-in;
}
.portal:hover > #clone{
    visibility:visible;
    transition:0.1s ease-in;
}
</style>
