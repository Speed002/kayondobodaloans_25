<script setup>
import { Link } from '@inertiajs/vue3'
</script>
<template>
    <div>
        <div class="mx-auto max-w-5xl sm:grid grid-cols-5 gap-8 space-y-8 sm:space-y-0 px-4 py-6 lg:py-8 font-sans">
            <div class="col-span-1">
                <nav class="sm:border-r border-r-nav-blue h-full">
                    <ul class="space-y-1">
                        <li>
                            <Link :href="route('account.index')" class="link text-gray-300 flex p-2 pl-3 text-sm font-semibold" :class="{ 'bg-nav-blue': $page.props.ziggy.route_name === 'account.index' }">
                                Profile information
                            </Link>
                        </li>
                        <li v-if="$page.props.features.security">
                            <Link :href="route('account.security.index')" class="link text-gray-300 flex p-2 pl-3 text-sm font-semibold" :class="{ 'bg-nav-blue': $page.props.ziggy.route_name === 'account.security.index' }">
                                Security
                            </Link>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-span-3">
                <slot />
            </div>
        </div>
    </div>
</template>
<style scoped>
.link:hover{
    background-color: rgba(0, 0, 0, 0.3) !important;
}
</style>
