<script setup>
import { DocumentIcon, TrashIcon } from '@heroicons/vue/24/outline';
import { Link } from '@inertiajs/vue3';
defineProps({
    client:Object,
    common_key:String
})
</script>
<template>
    <p v-if="client.motor.length > 1" class="text-sm">Select to see more information </p>
    <div class="flex justify-start flex-wrap gap-2">
        <Link :href="route('client.show', [`${client.id}`, `${motor.common_set_key}`])" v-for="motor in client.motor" v-bind:key="motor.id"  :client="client" class="portal bg-nav-blue p-2 relative rounded-md flex flex-col items-center space-y-1 hover:bg-transparent-dark hover:cursor-pointer shadow-lg"  :class="{'bg-transparent-dark': motor.common_set_key == common_key || client.motor.length == 1}">
            <Link v-if="client.motor.length > 1" :href="route('delete.clone.index', motor.id)" id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm rounded-md hover:bg-sky-500" style="padding:2px;">
                <TrashIcon class="h-3 w-3"/>
            </Link>
            <DocumentIcon class="h-8 w-8"/>
            <span class="text-gray-300 text-xs">{{ motor.registration }}</span>
        </Link>
    </div>
</template>
<style scoped>
#clone{
    visibility:hidden;
}
.portal:hover > #clone{
    visibility:visible;
    transition:0.1s ease-in;
}
</style>
