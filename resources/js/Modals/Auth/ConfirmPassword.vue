<script setup>
import Modal from '@/Components/Modal.vue'
import { useForm, Head } from '@inertiajs/vue3'
import { useModal } from 'momentum-modal'
const { close } = useModal()
const form = useForm({
    password: null
})
</script>
<template>
    <Modal class="bg-nav-blue max-w-md p-12">
        <h2 class="text-center text-2xl font-bold text-gray-300">Confirm password</h2>
        <form class="mt-6 space-y-6" v-on:submit.prevent="form.post(route('password.confirm'), { onSuccess: () => close() })">
            <div>
                <label for="password" class="text-sm font-medium text-gray-300">Password</label>
                <div class="mt-2">
                    <input type="password" id="password" class="w-full py-2 text-gray-300 border-gray-300 text-sm" v-model="form.password">
                    <div v-if="form.errors.password" class="text-sm text-red-500 mt-2">
                        {{ form.errors.password }}
                    </div>
                </div>
            </div>
            <div>
                <button type="submit" class="flex w-full justify-center bg-blue-500 px-3 py-2 text-sm font-semibold text-white disabled:opacity-50" :disabled="form.processing">
                    Continue
                </button>
            </div>
        </form>
    </Modal>
    <Head title="Confirm password" />
</template>
