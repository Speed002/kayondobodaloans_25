<script setup>
import { Head, Link } from '@inertiajs/vue3'
import Default from '@/Layouts/Default.vue'
import { PlusIcon,  } from '@heroicons/vue/24/outline';
defineOptions({ layout: Default })
</script>
<template>
    <div class="p-8 font-mono">
        <div class="max-w-5xl mx-auto space-y-5">
            <h3 class="text-sm">Welcome back Admin: Please sign in to proceed</h3>
            <div class="flex-grow portal rounded-md">
                <div class="flex items-center justify-between">
                    <div>
                        Welcome KBL_version 1.04^
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Head title="Dashboard" />
</template>
<style scoped>
.portal{
    background-color: #254660!important;
    padding:18px;
}
.portal-mini{
    background-color: rgba(0, 0, 0, 0.3) !important;
    padding:18px;
}
</style>
