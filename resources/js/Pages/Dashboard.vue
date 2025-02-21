<script setup>
import { Head, Link } from '@inertiajs/vue3'
import Default from '@/Layouts/Default.vue'
import { PlusIcon,  } from '@heroicons/vue/24/outline';


defineOptions({ layout: Default })
</script>

<template>
    <div class="p-8 font-mono">
        <div class="max-w-5xl mx-auto space-y-5">
            <h3 class="text-sm">Dashboard</h3>
            <div class="flex-grow portal rounded-md">
                <div class="flex items-center justify-between">
                    <div>
                        Hello {{ $page.props.auth.user.name }}
                        <p class="text-sm text-gray-400 hidden sm:block">
                            You have <span class="text-sky-500">4</span> unread messages from the site.
                        </p>
                    </div>
                    <Link :href="route('create.client')" class="bg-sky-700 p-2 text-sm tracking-tighter rounded-md flex items-center justify-between hover:bg-transparent-dark">
                        <PlusIcon class="w-4 h-4"/>
                        &nbsp;Add client
                    </Link>
                </div>
            </div>
            <div class="flex-grow portal-mini rounded-md space-y-1">
                <span class="text-sm">Recently received message on <span class="bg-cyan-950 p-1 rounded-md">12/12/12</span> <span class="bg-cyan-950 p-1 rounded-md">2:12 PM</span> by {{ $page.props.auth.user.name }}</span>
                <p class="text-sm text-gray-400">
                    kasamba Mark Edward, CM98347632387. UBF 200H. Agreement date:[12/12/12], at Kireka >
                </p>
            </div>
            <h3 class="text-sm">Analytics</h3>
            <div class="flex items-center justify-between md:justify-start sm:justify-start space-x-3 rounded-md text-sm">
                <Link :href="route('clients')" class="portal rounded-md flex items-center ">
                    <span class="text-sky-500">12&nbsp;</span>
                    clients
                </Link>
                <Link :href="route('messages')" class="portal rounded-md flex items-center">
                    <span class="text-sky-500">12&nbsp;</span>
                    Messages
                </Link>
            </div>
            <div class="flex-grow portal-mini rounded-md space-y-1">
                <span class="text-sm">Recently added client on <span class="bg-cyan-950 p-1 rounded-md">12/12/12</span> <span class="bg-cyan-950 p-1 rounded-md">2:12 PM</span>, added by {{ $page.props.auth.user.name }}</span>
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
    padding:18px;
}

.portal-mini{
    background-color: rgba(0, 0, 0, 0.3) !important;
    padding:18px;
}
</style>
