<script setup>
import Modal from '@/Components/Modal.vue'
import { useForm, Head, Link } from '@inertiajs/vue3'
const form = useForm({
    email: '',
    password: '',
    remember: false,
})
</script>
<template>
    <Modal class="bg-nav-blue max-w-md p-12">
        <h2 class="text-center text-2xl font-bold text-gray-300">Sign in</h2>
        <form class="mt-6 space-y-6" v-on:submit.prevent="form.post(`/login`)">
            <div>
                <label for="email" class="text-sm font-medium text-gray-300">Email</label>
                <div class="mt-2">
                    <input type="text" id="email" class="w-full py-2 bg-transparent-dark text-gray-300 border-gray-300 text-sm" v-model="form.email">
                    <div v-if="form.errors.email" class="text-sm text-red-500 mt-2">
                        {{ form.errors.email }}
                    </div>
                </div>
            </div>
            <div>
                <label for="password" class="text-sm font-medium text-gray-300">Password</label>
                <div class="mt-2">
                    <input type="password" id="password" class="w-full py-2 bg-transparent-dark text-gray-300 border-gray-300 text-sm" v-model="form.password">
                    <div v-if="form.errors.password" class="text-sm text-red-500 mt-2">
                        {{ form.errors.password }}
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" class="h-4 w-4 text-sky-500 focus:ring-blue-500" v-model="form.remember">
                    <label for="remember" class="ml-2 block text-sm text-gray-300">Remember me</label>
                </div>
                <div v-if="$page.props.features['reset-passwords']">
                    <Link :href="route('auth.recover')" class="text-sm text-sky-500 font-semibold">Forgot password</Link>
                </div>
            </div>
            <div>
                <button type="submit" class="flex w-full justify-center bg-sky-500 px-3 py-2 text-sm font-semibold text-white disabled:opacity-50" :disabled="form.processing">
                    Sign in
                </button>
            </div>
        </form>
    </Modal>
    <Head title="Sign in" />
</template>
