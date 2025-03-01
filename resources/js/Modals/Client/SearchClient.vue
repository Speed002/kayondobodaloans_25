<script setup>
import { Head, useForm, Link, router } from '@inertiajs/vue3';
import Modal from '@/Components/Modal.vue';
import { useModal } from 'momentum-modal';
import _debounce from 'lodash.debounce';
import { ref, watch } from 'vue';
import ClientCard from '../../Pages/Client/ClientCard.vue';

const { close, redirect } = useModal()

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
        preserveScroll:true,
        replace: true,        // Replaces history instead of adding a new entry
        preserveScroll: true, // Keeps scroll position
    })
}, 500)

watch(searchQuery, (query) => {
    handleSearchInput(query)
})
</script>

<template>
<Modal class="fixed inset-0 bg-nav-blue w-full h-full font-mono">
    <div class="flex items-center justify-between p-4 gap-4">
        <div class="flex-grow">
            <input type="search" name="search" v-model="searchQuery" class="rounded-md w-full" placeholder="Search client ...">
        </div>
        <span v-on:click="close" class="text-4xl bg-transparent-dark px-3 hover:cursor-pointer rounded-md">&times;</span>
    </div>
    <div v-if="clients" class="max-w-7xl mx-auto space-y-5 p-4">
        <div class="md:flex md:justify-start sm:justify-start rounded-md flex-wrap sm:gap-3 md:gap-3 gap-2 flex items-center justify-between gap-2 md:p-0 sm:p-2">
            <ClientCard v-for="client in clients" v-bind:key="client.id" :client="client" />
        </div>
    </div>
    <div v-else>
        No names matched!
    </div>
</Modal>

<Head title="Search item"/>
</template>
