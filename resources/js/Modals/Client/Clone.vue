<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import Modal from '@/Components/Modal.vue';

const props = defineProps({
    client: Object
});

const form = useForm({
    id:props.client.id,
    registration:''
})

const cloneClient = () => {
    form.post(route('client.clone.store'), {
        preserveScroll:true,
    })
}
</script>

<template>
    <Modal class="bg-nav-blue max-w-md p-12 font-mono">
        <h2 class="text-center text-lg font-bold text-gray-300">You're about to clone</h2>
        <p class="text-center text-sm font-semibold text-gray-300">{{ client.name }} | {{ client.motor[0].registration }}</p>
        <form class="mt-6 space-y-6" v-on:submit.prevent="cloneClient">
            <p class="text-sm">Clone with old registration number or change number. <br>Please note that you can edit other client details later on the client profile!</p>
            <div>
                <input type="hidden" v-model="form.id">
                <input type="text" id="name" class="w-full py-2 text-gray-300 border-gray-300 text-sm" v-model="form.registration">
                <div v-if="form.errors.registration" class="text-xs text-rose-600 mt-1">
                    {{ form.errors.registration }}
                </div>
            </div>
            <div>
                <button type="submit" class="flex w-full justify-center bg-sky-500 px-3 py-2 text-sm font-semibold text-white disabled:opacity-50">
                    Continue
                </button>
            </div>
        </form>
    </Modal>
    <Head title="Clone client"/>
</template>
