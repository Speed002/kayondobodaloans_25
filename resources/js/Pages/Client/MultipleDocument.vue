<script setup>
import { DocumentIcon } from '@heroicons/vue/24/outline';
import { Link } from '@inertiajs/vue3';
defineProps({
    client:Object,
    common_key:String
})
</script>
<template>
    <p class="text-sm">Select to show more information </p>
    <div class="flex justify-start flex-wrap gap-2">
        <Link :href="route('client.show', [`${client.id}`, `${motor.common_set_key}`])" v-for="motor in client.motor" v-bind:key="motor.id"  :client="client" class="bg-nav-blue p-2 relative rounded-md flex flex-col items-center space-y-1 hover:bg-transparent-dark hover:cursor-pointer shadow-lg"  :class="{'bg-transparent-dark': motor.common_set_key == common_key || client.motor.length == 1}">
            <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
            </span>
            <DocumentIcon class="h-8 w-8"/>
            <span class="text-gray-300 text-xs">{{ motor.registration }}</span>
        </Link>
    </div>
</template>
