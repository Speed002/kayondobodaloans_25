<script setup>
import { UserCircleIcon, BanknotesIcon, UsersIcon, TruckIcon, PaperAirplaneIcon, CursorArrowRippleIcon } from '@heroicons/vue/24/outline';
import { defineProps, defineEmits } from 'vue';

defineProps({
    step: Number
});

const emit = defineEmits(['update:step']);
</script>

<template>
    <div class="bg-nav-blue w-full md:w-fit p-2 text-sm tracking-tighter rounded-md flex items-center shadow-lg">
        <span class="text-gray-300 flex items-center">
            <CursorArrowRippleIcon class="w-4 h-4"/>&nbsp;
            Tap to navigate
        </span>
    </div>
    <button @click="emit('update:step', 1)" class="bg-nav-blue w-full md:w-fit p-2 text-sm tracking-tighter rounded-md flex items-center hover:bg-transparent-dark" :class="{'bg-transparent-dark': step === 1}">
        <span class="text-gray-300 flex items-center">
            <UserCircleIcon class="h-4 w-4"/>&nbsp;
            Personal info
        </span>
    </button>
    <button @click="emit('update:step', 2)" class="bg-nav-blue w-full md:w-fit p-2 text-sm tracking-tighter rounded-md flex items-center hover:bg-transparent-dark" :class="{'bg-transparent-dark': step === 2}">
        <span class="text-gray-300 flex items-center">
            <TruckIcon class="h-4 w-4"/>&nbsp;
            Motor info
        </span>
    </button>
    <button @click="emit('update:step', 3)" class="bg-nav-blue w-full md:w-fit p-2 text-sm tracking-tighter rounded-md flex items-center hover:bg-transparent-dark" :class="{'bg-transparent-dark': step === 3}">
        <span class="text-gray-300 flex items-center">
            <UsersIcon class="h-4 w-4"/>&nbsp;
            Referees info
        </span>
    </button>
    <button @click="emit('update:step', 4)" class="bg-nav-blue w-full md:w-fit p-2 text-sm tracking-tighter rounded-md flex items-center hover:bg-transparent-dark" :class="{'bg-transparent-dark': step === 4}">
        <span class="text-gray-300 flex items-center">
            <BanknotesIcon class="h-4 w-4"/>&nbsp;
            Loan info
        </span>
    </button>
    <button @click="emit('update:step', 5)" class="bg-nav-blue w-full md:w-fit p-2 text-sm tracking-tighter rounded-md flex items-center hover:bg-transparent-dark" :class="{'bg-transparent-dark': step === 5}">
        <span class="text-gray-300 flex items-center">
            <PaperAirplaneIcon class="h-4 w-4"/>&nbsp;
            Review and submit
        </span>
    </button>
</template>
