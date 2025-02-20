<script setup>
import { Link, router } from '@inertiajs/vue3'
import { Disclosure, DisclosurePanel, DisclosureButton, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { Bars3Icon, XMarkIcon, PlusIcon } from '@heroicons/vue/24/outline'

const logout = () => {
    router.post(route('logout'))
}
</script>

<template>
    <Disclosure as="nav" v-slot="{ open }">
        <div id="navbar" class="mx-auto max-w-7xl px-8">
            <div class="flex h-16 justify-between relative">
                <div class="flex grow">
                    <div class="flex items-center sm:mr-6">
                        <Link href="#" class="font-semibold text-md flex items-center space-x-0">
                            <img src="/images/logo.png" alt="Logo" width="30" />
                            <span class="tracking-tighter font-mono">kayondobodaloans</span>
                            <!-- {{ $page.props.config['app.name'] }} -->
                        </Link>
                    </div>
                    <div class="flex justify-between w-full">
                        <div class="hidden sm:flex sm:ml-6 space-x-8 font-mono">
                            <!-- <Link :href="route('home')" class="inline-flex items-center border-b-2 border-transparent hover:border-gray-200 text-sm text-gray-300" :class="{ '!border-blue-500': $page.props.ziggy.route_name === 'home' }">
                                Home
                            </Link> -->
                            <Link :href="route('dashboard')" class="inline-flex items-center border-b-2 border-transparent hover:border-gray-200 text-sm text-gray-300" :class="{ '!border-blue-500': $page.props.ziggy.route_name === 'dashboard' }">
                                Dashboard
                            </Link>
                            <Link :href="route('clients')" class="inline-flex items-center border-b-2 border-transparent hover:border-gray-200 text-sm text-gray-300" :class="{ '!border-blue-500': $page.props.ziggy.route_name === 'clients' }">
                                Clients
                            </Link>
                            <Link :href="route('create.create')" class="inline-flex items-center border-b-2 border-transparent hover:border-gray-200 text-sm text-gray-300" :class="{ '!border-blue-500': $page.props.ziggy.route_name === 'create.create' }">
                                Create
                            </Link>
                            <Link :href="route('messages')" class="inline-flex items-center border-b-2 border-transparent hover:border-gray-200 text-sm text-gray-300" :class="{ '!border-blue-500': $page.props.ziggy.route_name === 'messages' }">
                                Messages
                            </Link>
                        </div>
                        <div class="hidden sm:flex sm:ml-6 space-x-8" v-if="!$page.props.auth.user">
                            <Link :href="route('auth.register')" class="inline-flex items-center border-b-2 border-transparent text-sm font-medium text-gray-300" v-if="$page.props.features.registration">
                                Create an account
                            </Link>
                            <Link :href="route('auth.login')" class="inline-flex items-center border-b-2 border-transparent text-sm font-medium text-gray-300">
                                Sign in
                            </Link>
                        </div>
                    </div>
                </div>

                <div class="absolute inset-y-0 right-0 flex items-center space-x-3">
                    <Menu as="div" class="relative mr-3" v-if="$page.props.auth.user">
                        <MenuButton class="flex items-center text-sm space-x-3">
                            <span class="font-semibold tracking-tighter text-gray-300">
                                {{ $page.props.auth.user.name }}
                            </span>
                            <img :src="$page.props.auth.user.avatar_url" class="h-8 w-8 rounded-full">
                        </MenuButton>
                        <MenuItems id="nav_menu_dropdown" class="absolute right-0 z-10 mt-2 w-48 border border-cyan-950 focus:outline-none rounded-md">
                            <MenuItem v-slot="{ active, close }" v-if="$page.props.features['update-profile-information']">
                                <Link :onSuccess="close" :href="route('account.index')" class="link block px-4 py-2 text-sm text-gray-300" :class="{ 'bg-gray-100': active }">
                                    Account
                                </Link>
                            </MenuItem>
                            <MenuItem v-slot="{ active, close }" v-if="$page.props.features.security">
                                <Link :onSuccess="close" :href="route('account.security.index')" class="link block px-4 py-2 text-sm text-gray-300" :class="{ 'bg-gray-100': active }">
                                    Security
                                </Link>
                            </MenuItem>
                            <MenuItem v-slot="{ active }">
                                <button v-on:click="logout" class="link block px-4 py-2 text-sm text-gray-300 w-full text-left" :class="{ 'bg-gray-100': active }">
                                    Sign out
                                </button>
                            </MenuItem>
                        </MenuItems>
                    </Menu>

                    <DisclosureButton class="sm:hidden relative p-2 text-gray-300 hover:text-gray-50">
                        <Bars3Icon v-if="!open" class="block h-6 w-6" />
                        <XMarkIcon v-if="open" class="block h-6 w-6" />
                    </DisclosureButton>
                </div>
            </div>
        </div>

        <DisclosurePanel class="sm:hidden">
            <div class="spacey-1 pb-3 font-mono text-sm">
                <!-- <Link :href="route('home')" class="link block py-2 px-8 font-medium text-gray-300 border-l-2 border-transparent" :class="{ 'border-blue-500': $page.props.ziggy.route_name === 'home' }">
                    Home
                </Link> -->
                <Link :href="route('dashboard')" class="link block py-2 px-8 font-medium text-gray-300 border-l-2 border-transparent" :class="{ 'border-blue-500': $page.props.ziggy.route_name === 'dashboard' }">
                    Dashboard
                </Link>
                <Link :href="route('messages')" class="link block py-2 px-8 font-medium text-gray-300 border-l-2 border-transparent" :class="{ 'border-blue-500': $page.props.ziggy.route_name === 'messages' }">
                    Messages
                </Link>
                <Link :href="route('clients')" class="link block py-2 px-8 font-medium text-gray-300 border-l-2 border-transparent" :class="{ 'border-blue-500': $page.props.ziggy.route_name === 'clients' }">
                    Clients
                </Link>
                <Link :href="route('create.create')" class="link block py-2 px-8 font-medium text-gray-300 border-l-2 border-transparent flex items-center" :class="{ 'border-blue-500': $page.props.ziggy.route_name === 'create.create' }">
                    Create
                </Link>
            </div>
            <div class="spacey-1 pb-3" v-if="!$page.props.auth.user">
                <Link :href="route('auth.register')" class="link block py-2 px-8 font-medium text-gray-300" v-if="$page.props.features.registration">
                    Create an account
                </Link>
                <Link :href="route('auth.login')" class="link block py-2 px-8 font-medium text-gray-300">
                    Sign in
                </Link>
            </div>
        </DisclosurePanel>
    </Disclosure>
</template>

<style scoped>
#navbar, #nav_menu_dropdown{
    background-color: #254660!important;
}
.link:hover{
    background-color: rgba(0, 0, 0, 0.3) !important;
}

</style>
