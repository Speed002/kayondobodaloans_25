<script setup>
import { Head } from '@inertiajs/vue3'
import Default from '@/Layouts/Default.vue'

defineOptions({ layout: Default })
</script>

<template>
    <div class="p-8 font-mono">
        <div class="max-w-5xl mx-auto space-y-5">
            <h3>Dashboard</h3>
            <div class="flex-grow portal rounded-md">
                Hello Speed
                <p class="text-sm text-gray-400">
                    Welcome back to your dashboard, You have <span class="bg-cyan-950 p-1 rounded-md">4</span> unread messages from the site.
                </p>
            </div>
            <h3>Analytics</h3>
            <div class="flex items-center justify-start space-x-3 rounded-md">
                <div class="portal rounded-md">clients <span class="bg-cyan-950 p-1 rounded-md">12</span></div>
                <div class="portal rounded-md">referees <span class="bg-cyan-950 p-1 rounded-md">12</span></div>
                <div class="portal rounded-md">messages <span class="bg-cyan-950 p-1 rounded-md">12</span></div>
            </div>
            <div class="flex-grow portal-mini rounded-md space-y-1">
                Recently added client on <span class="bg-cyan-950 p-1 rounded-md">12/12/12</span> <span class="bg-cyan-950 p-1 rounded-md">2:12PM</span>
                <p class="text-sm text-gray-400">
                    kasamba Mark Edward, CM98347632387. UBF 200H. Agreement date:[12/12/12], at Kireka > 
                </p>
            </div>
        </div>
    </div>

    <Head title="Dashboard" />
</template>

<style scoped>
.portal{
    background-color: #254660!important;
    padding:20px;
}

.portal-mini{
    background-color: rgba(0, 0, 0, 0.3) !important;
    padding:20px;
}
</style>
