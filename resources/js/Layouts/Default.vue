<script setup>
import Navigation from '@/Components/Navigation.vue'
import { Modal } from 'momentum-modal'
import Toast from '@/Components/Toast.vue'
</script>
<template>
    <div class="font-sans">
        <Toast />
        <Navigation />
        <div>
            <slot />
        </div>
        <Modal />
    </div>
</template>
