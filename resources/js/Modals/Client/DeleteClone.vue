<script setup>
import { Head, useForm, Link, router } from '@inertiajs/vue3';
import Modal from '@/Components/Modal.vue';
const props = defineProps({
    motor:Object
})
const deleteDocument = () => {
    router.delete(route('delete.cloned.document', `${props.motor.id}`))
}
</script>
<template>
    <Modal class="bg-nav-blue max-w-md p-12 font-mono space-y-2">
        <h2 class="text-center text-lg font-bold text-gray-300">You're about to delete</h2>
        <p class="text-center text-sm font-semibold text-gray-300">{{motor.type}} | {{motor.make}} | {{motor.registration}}</p>
        <p class="text-center text-sm">Please confirm your choice!</p>
        <form v-on:submit.prevent="deleteDocument">
            <button type="submit" class="flex w-full justify-center bg-rose-500 px-3 py-2 text-sm font-semibold text-white disabled:opacity-50">
                Delete
            </button>
        </form>
    </Modal>
    <Head title="Delete item"/>
</template>
