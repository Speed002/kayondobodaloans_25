<script setup>
import { UserCircleIcon, BanknotesIcon, UsersIcon, TruckIcon, DocumentArrowDownIcon, DocumentDuplicateIcon,InformationCircleIcon, ArrowLeftIcon } from '@heroicons/vue/24/outline';
import { Link } from '@inertiajs/vue3';

defineProps({
    info: Number,
    client:Object,
    motor:Object
});

const emit = defineEmits(['update:info']);
</script>

<template>
    <Link :href="route('clients')" class="hidden md:flex md:items-center md:justify-start md:w-fit md:space-x-1 bg-nav-blue rounded-md p-1 shadow-lg hover:bg-transparent-dark">
        <ArrowLeftIcon class="w-3 h-3 text-sky-500 hover:bg-transparent-dark"/>
        <span class="text-sm text-gray-400 tracking-tighter">Go back</span>
    </Link>
    <div class="relative w-fit md:mb-6">
        <!-- Fake Background Copy -->
        <div v-if="client.motor.length > 1">
            <div class="absolute bottom-4 left-0 w-full h-full bg-gray-500 rounded-md scale-90 opacity-80"></div>
            <div class="absolute bottom-2 left-0 w-full h-full bg-gray-400 rounded-md scale-95 opacity-90"></div>
        </div>
        <!-- Main Card -->
        <div class="portal relative rounded-md flex flex-col items-center space-y-1 bg-nav-blue p-4 shadow-lg">
            <Link :href="route('client.clone', `${client.id}`)" id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white md:text-sm text-xs hover:cursor-pointer hover:bg-sky-800 p-1 rounded-md">
                <DocumentDuplicateIcon class="h-4 w-4"/>
            </Link>
            <span v-if="client.motor.length > 1" id="clone" class="absolute top-7 right-1 bg-cyan-950 text-white md:text-sm text-xs px-2 rounded-md">
            {{ client.motor.length }}
            </span>
            <UserCircleIcon class="md:h-12 md:w-12 sm:h-8 sm:w-8 h-6 w-6"/>
            <span class="text-xs text-gray-300 md:text-sm sm:text-xs">{{ client.name }}</span>
            <span class="hidden md:block sm:block text-gray-300 md:text-sm sm:text-xs">{{ motor[0].registration }}</span>
        </div>
    </div>
    <div class="md:space-y-6 sm:space-y-3 space-y-2">
        <div class="flex flex-wrap gap-3 md:block sm:flex sm:items-center sm:gap-3 md:space-y-2 sm:flex-wrap">
            <button @click="emit('update:info', 2)" class="bg-nav-blue hover:bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center" :class="{'bg-transparent-dark':info === 2}">
                <TruckIcon class="h-4 w-4"/>&nbsp;<span class="md:hidden text-xs">Motor</span>
                <span class="sm:hidden md:block hidden">Motor information</span>
            </button>
            <button @click="emit('update:info', 3)" class="bg-nav-blue hover:bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center" :class="{'bg-transparent-dark':info === 3}">
                <UsersIcon class="h-4 w-4"/>&nbsp;<span class="md:hidden text-xs">Referees</span>
                <span class="sm:hidden md:block hidden">Referee information</span>
            </button>
            <button @click="emit('update:info', 4)" class="bg-nav-blue hover:bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center" :class="{'bg-transparent-dark':info === 4}">
                <BanknotesIcon class="h-4 w-4"/>&nbsp;<span class="md:hidden text-xs">Loan</span>
                <span class="sm:hidden md:block hidden">Loan information</span>
            </button>
            <button @click="emit('update:info', 5)" class="bg-nav-blue hover:bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center" :class="{'bg-transparent-dark':info === 5}">
                <DocumentArrowDownIcon class="h-4 w-4"/>&nbsp;<span class="md:hidden text-xs">PDFs</span>
                <span class="sm:hidden md:block hidden">PDF Downloads</span>
            </button>
            <button @click="emit('update:info', 6)" class="bg-nav-blue hover:bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center" :class="{'bg-transparent-dark':info === 6}">
                <InformationCircleIcon class="h-4 w-4"/>&nbsp;<span class="md:hidden text-xs">Files</span>
                <span class="sm:hidden md:block hidden">Client Files</span>
            </button>
            <button @click="emit('update:info', 1)" class="bg-nav-blue hover:bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center" :class="{'bg-transparent-dark':info === 1}">
                <UserCircleIcon class="h-4 w-4"/>&nbsp;<span class="md:hidden text-xs">Personal</span>
                <span class="sm:hidden md:block hidden">Personal info</span>
            </button>
        </div>

        <p class="text-sm text-rose-600 tracking-tighter">
                Delete account
        </p>
    </div>
</template>
