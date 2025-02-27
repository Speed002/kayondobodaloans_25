<script setup>
import { ArrowDownIcon } from '@heroicons/vue/24/outline';

defineProps({
    client:Object,
    motor:Object,
    loan:Object,
    referee:Object,
})
</script>

<template>
    <p class="mb-3 text-sm">PDF Downloads for <span class="text-sky-500">{{motor[0].registration}}</span></p>
    <div v-if="motor.length" class="bg-transparent-dark rounded-md -space-y-2 p-5 text-sm space-y-3 flex flex-col">
        <span>Click to download</span>
        <a :href="route('english.document', motor[0].id)" class="bg-nav-blue w-fit p-1 rounded-md tracking-tight shadow-lg flex items-center hover:bg-transparent-dark">
            <ArrowDownIcon class="h-3 w-3 text-sky-500"/>
            English Agreement
        </a>
        <a :href="route('luganda.document', motor[0].id)" class="bg-nav-blue w-fit p-1 rounded-md tracking-tight shadow-lg flex items-center shadow-lg flex items-center hover:bg-transparent-dark">
            <ArrowDownIcon class="h-3 w-3 text-sky-500"/>
            Luganda Agreement
        </a>
        <a :href="route('take-over.document', motor[0].id)" class="bg-nav-blue w-fit p-1 rounded-md tracking-tight shadow-lg flex items-center shadow-lg flex items-center hover:bg-transparent-dark">
            <ArrowDownIcon class="h-3 w-3 text-sky-500"/>
            Take-Over Form
        </a>
        <a :href="route('online-hirer-form.document', motor[0].id)" class="bg-nav-blue w-fit p-1 rounded-md tracking-tight shadow-lg flex items-center shadow-lg flex items-center hover:bg-transparent-dark">
            <ArrowDownIcon class="h-3 w-3 text-sky-500"/>
            Online-Hirer Form
        </a>
    </div>
</template>
