<script setup>
import { Head } from '@inertiajs/vue3'
import Default from '@/Layouts/Default.vue'
import { UserCircleIcon, BanknotesIcon, UsersIcon, TruckIcon, DocumentArrowDownIcon, PencilSquareIcon, DocumentDuplicateIcon, DocumentCheckIcon, DocumentIcon, FilmIcon, ArrowDownLeftIcon, DocumentTextIcon, FaceSmileIcon, InformationCircleIcon } from '@heroicons/vue/24/outline';
import { Disclosure, DisclosurePanel, DisclosureButton } from '@headlessui/vue'

defineOptions({ layout: Default })
</script>

<template>
    <div class="p-8 font-mono">
        <div class="max-w-5xl mx-auto md:grid grid-cols-7 gap-6">
            <div class="col-span-2 space-y-3 md:block sm:flex">
                <div class="space-y-6">
                    <div class="space-y-2">
                        <button class="bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center">
                            <UserCircleIcon class="h-4 w-4"/>&nbsp;
                            Messages from the site
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 space-y-3">
                <p class="mb-3">Messages</p>
                <div class="bg-transparent-dark rounded-md -space-y-2 text-sm">
                    <Disclosure as="nav" v-slot="{ open }">
                        <div class="p-3 rounded-md space-y-3">
                            <div class="flex items-center justify-between hover:text-sky-500 hover:cursor-pointer">
                                <p>Wasswa Speed | 0776230011 | 23 minutes ago</p>
                                <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                                    <PencilSquareIcon class="block h-6 w-6" />
                                </DisclosureButton>
                            </div>
                            <!-- displayed content -->
                            <DisclosurePanel>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias, suscipit saepe? Corrupti a excepturi blanditiis, impedit iure hic voluptatum provident! hic voluptatum provident!</p>
                            </DisclosurePanel>
                        </div>
                    </Disclosure>
                </div>
            </div>
        </div>
    </div>

    <Head title="Client Name" />
</template>
