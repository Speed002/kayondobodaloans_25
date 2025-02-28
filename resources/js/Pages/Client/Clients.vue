<script setup>
import { Head } from '@inertiajs/vue3'
import Default from '@/Layouts/Default.vue'
import ClientCard from './ClientCard.vue';

defineOptions({ layout: Default })

defineProps({
    clients:Object
})
</script>

<template>
    <div class="p-8 font-mono">
        <div v-if="clients" class="max-w-5xl mx-auto space-y-5">
            <div class="md:flex md:justify-start sm:justify-start rounded-md flex-wrap sm:gap-3 md:gap-3 gap-2 flex items-center justify-between gap-2 md:p-0 sm:p-2">
                <ClientCard v-for="client in clients" v-bind:key="client.id" :client="client" />
            </div>
        </div>
        <div v-else>No clients yet, please create!</div>
    </div>

    <Head title="Clients" />
</template>
