<script setup>
import { Head, router  } from '@inertiajs/vue3'
import Default from '@/Layouts/Default.vue'
import ClientCard from './ClientCard.vue';
import _debounce from 'lodash.debounce';
import { ref, watch } from 'vue';
import Pagination from '../../Components/Pagination.vue';
defineOptions({ layout: Default })
const props = defineProps({
    clients:Object,
    query:Object
})
const searchQuery = ref(props.query.search ||'')
const handleSearchInput = _debounce((query) => {
    router.reload({
        data:{
            search: query
        },
        preserveScroll:true
    })
}, 500)
watch(searchQuery, (query) => {
    handleSearchInput(query)
})
</script>
<template>
    <div class="p-8 space-y-6">
        <div class="max-w-5xl mx-auto space-y-5">
            <input type="search" id="search" class="w-full rounded-md text-sm" v-model="searchQuery" placeholder="Search clients...">
            <div v-if="clients" class="space-y-5">
                <div class="md:flex md:justify-start md:gap-6  sm:justify-start rounded-md flex-wrap sm:gap-3 flex items-center justify-between gap-2 md:p-0 sm:p-2">
                    <ClientCard v-for="client in clients.data" v-bind:key="client.id" :client="client" />
                </div>
                <Pagination :pagination="clients.meta"/>
            </div>
            <div v-else>No clients yet, please create!</div>
        </div>
    </div>
    <Head title="Clients" />
</template>
