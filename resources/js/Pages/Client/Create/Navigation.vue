<script setup>
import { UserCircleIcon, BanknotesIcon, UsersIcon, TruckIcon, PaperAirplaneIcon, CursorArrowRippleIcon } from '@heroicons/vue/24/outline';
import { defineProps, defineEmits } from 'vue';

defineProps({
    step: Number
});

const emit = defineEmits(['update:step']);
</script>

<template>
<div class="md:flex md:flex-col md:space-y-2 grid grid-cols-5 md:gap-0 sm:gap-4 gap-1">
    <div class="bg-nav-blue hidden md:block sm:hidden sm:flex sm:items-center w-full md:w-fit p-2 text-sm tracking-tighter rounded-md flex items-center shadow-lg">
        <span class="text-gray-300 flex items-center">
            <CursorArrowRippleIcon class="w-4 h-4"/>
            <span class="px-1">Tap to navigate</span>
        </span>
    </div>
    <button @click="emit('update:step', 1)" class="bg-nav-blue w-full md:w-fit p-2 text-sm tracking-tighter rounded-md flex items-center hover:bg-transparent-dark" :class="{'bg-transparent-dark': step === 1}">
        <span class="text-gray-300 flex items-center">
            <UserCircleIcon class="hidden md:block sm:block h-4 w-4"/>
            <span class="px-1">Personal</span>
            <span class="md:block hidden">&nbsp;info</span>
        </span>
    </button>
    <button @click="emit('update:step', 2)" class="bg-nav-blue w-full md:w-fit p-2 text-sm tracking-tighter rounded-md flex items-center hover:bg-transparent-dark" :class="{'bg-transparent-dark': step === 2}">
        <span class="text-gray-300 flex items-center">
            <TruckIcon class="hidden md:block sm:block h-4 w-4"/>
            <span class="px-1">Motor</span>
            <span class="md:block hidden">&nbsp;info</span>
        </span>
    </button>
    <button @click="emit('update:step', 3)" class="bg-nav-blue w-full md:w-fit p-2 text-sm tracking-tighter rounded-md flex items-center hover:bg-transparent-dark" :class="{'bg-transparent-dark': step === 3}">
        <span class="text-gray-300 flex items-center">
            <UsersIcon class="hidden md:block sm:block h-4 w-4"/>
            <span class="px-1">Referees</span>
            <span class="md:block hidden">&nbsp;info</span>
        </span>
    </button>
    <button @click="emit('update:step', 4)" class="bg-nav-blue w-full md:w-fit p-2 text-sm tracking-tighter rounded-md flex items-center hover:bg-transparent-dark" :class="{'bg-transparent-dark': step === 4}">
        <span class="text-gray-300 flex items-center">
            <BanknotesIcon class="hidden md:block sm:block h-4 w-4"/>
            <span class="px-1">Loan</span>
            <span class="md:block hidden">&nbsp;info</span>
        </span>
    </button>
    <button @click="emit('update:step', 5)" class="bg-nav-blue w-full md:w-fit p-2 text-sm tracking-tighter rounded-md flex items-center hover:bg-transparent-dark" :class="{'bg-transparent-dark': step === 5}">
        <span class="text-gray-300 flex items-center">
            <PaperAirplaneIcon class="hidden md:block sm:block h-4 w-4"/>
            <span class="px-1">Review</span>
            <span class="md:block hidden">&nbsp;and submit</span>
        </span>
    </button>
</div>
</template>
