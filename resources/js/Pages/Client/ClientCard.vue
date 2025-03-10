<script setup>
import { UserCircleIcon, DocumentDuplicateIcon } from '@heroicons/vue/24/outline';
import { Link } from '@inertiajs/vue3';
defineProps({
    client:Object
})
</script>
<template>
    <Link :href="route('client.show', `${client.id}`)" class="relative">
        <!-- Fake Background Copy -->
         <div v-if="client.motor.length > 1">
            <div class="absolute bottom-4 left-0 w-full h-full bg-gray-500 rounded-md scale-90 opacity-80"></div>
            <div class="absolute bottom-2 left-0 w-full h-full bg-gray-400 rounded-md scale-95 opacity-90"></div>
        </div>
        <!-- Main Card -->
        <div class="portal relative rounded-md flex flex-col items-center space-y-1 bg-gray-900 shadow-lg">
            <Link :href="route('client.clone', `${client.id}`)" id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md hover:bg-sky-800">
                <DocumentDuplicateIcon class="h-4 w-4"/>
            </Link>
            <span v-if="client.motor.length > 1" id="clone" class="absolute top-7 right-1 bg-cyan-950 text-white text-sm px-2 rounded-md">
            {{ client.motor.length }}
            </span>
            <UserCircleIcon class="h-12 w-12"/>
            <span class="md:text-xs sm:text-xs text-xs ">{{ client.short_name }}</span>
            <span class="md:text-xs sm:text-xs text-xs text-gray-300">{{ client.motor[0].registration ? client.motor[0].registration : '[no-plate]'  }}</span>
            <div class="flex items-center space-x-3">
                <a :href="route('luganda.document', client.motor[0].id)" @click.stop class="bg-cyan-950 p-1 rounded-md text-xs">Luganda</a>
                <a :href="route('english.document', client.motor[0].id)" @click.stop class="bg-cyan-950 p-1 rounded-md text-xs">English</a>
            </div>
        </div>
    </Link>
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
