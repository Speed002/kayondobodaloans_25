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
                <div class="relative w-fit">
                    <!-- Fake Background Copy -->
                    <div class="absolute bottom-4 left-0 w-full h-full bg-gray-500 rounded-md scale-90 opacity-80"></div>
                    <div class="absolute bottom-2 left-0 w-full h-full bg-gray-400 rounded-md scale-95 opacity-90"></div>
                    <!-- Main Card -->
                    <div class="portal relative rounded-md flex flex-col items-center space-y-1 bg-nav-blue p-4 shadow-lg">
                        <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                            <DocumentDuplicateIcon class="h-4 w-4"/>
                        </span>
                        <UserCircleIcon class="h-12 w-12"/>
                        <span class="text-gray-300">Musisi Abubakr</span>
                        <span class="text-gray-300 text-sm">UBF 232F</span>
                    </div>
                </div>
                <div class="space-y-6">
                    <div class="space-y-2">
                        <button class="bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center">
                            <UserCircleIcon class="h-4 w-4"/>&nbsp;
                            Personal information
                        </button>
                        <button class="bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center">
                            <TruckIcon class="h-4 w-4"/>&nbsp;
                            Motor information
                        </button>
                        <button class="bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center">
                            <UsersIcon class="h-4 w-4"/>&nbsp;
                            Referee information
                        </button>
                        <button class="bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center">
                            <BanknotesIcon class="h-4 w-4"/>&nbsp;
                            Loan information
                        </button>
                        <button class="bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center">
                            <DocumentArrowDownIcon class="h-4 w-4"/>&nbsp;
                            PDF Downloads
                        </button>
                        <button class="bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center">
                            <InformationCircleIcon class="h-4 w-4"/>&nbsp;
                            Client Files
                        </button>
                    </div>

                    <p class="text-sm text-rose-600 tracking-tighter">
                            Delete account
                    </p>
                </div>
            </div>
            <div class="col-span-5 space-y-3">
                <!-- for multiple docs display here -->
                 <p>Select from multiple docs - onclick show it is the current one </p>
                <div class="flex justify-start flex-wrap space-3 gap-2">
                    <div class="bg-nav-blue p-3 relative rounded-md flex flex-col items-center space-y-1 hover:bg-transparent-dark hover:cursor-pointer">
                        <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                            <!-- <DocumentDuplicateIcon class="h-4 w-4"/> -->
                        </span>
                        <DocumentIcon class="h-12 w-12"/>
                        <span class="text-gray-300 text-sm">UBF 232F</span>
                    </div>
                    <div class="bg-nav-blue p-3 relative rounded-md flex flex-col items-center space-y-1 hover:bg-transparent-dark hover:cursor-pointer">
                        <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                            <!-- <DocumentDuplicateIcon class="h-4 w-4"/> -->
                        </span>
                        <DocumentIcon class="h-12 w-12"/>
                        <span class="text-gray-300 text-sm">UBF 232F</span>
                    </div>
                    <div class="bg-nav-blue p-3 relative rounded-md flex flex-col items-center space-y-1 hover:bg-transparent-dark hover:cursor-pointer">
                        <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                            <!-- <DocumentDuplicateIcon class="h-4 w-4"/> -->
                        </span>
                        <DocumentIcon class="h-12 w-12"/>
                        <span class="text-gray-300 text-sm">UBF 232F</span>
                    </div>
                    <div class="bg-nav-blue p-3 relative rounded-md flex flex-col items-center space-y-1 hover:bg-transparent-dark hover:cursor-pointer">
                        <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                            <!-- <DocumentDuplicateIcon class="h-4 w-4"/> -->
                        </span>
                        <DocumentIcon class="h-12 w-12"/>
                        <span class="text-gray-300 text-sm">UBF 232F</span>
                    </div>
                    <div class="bg-nav-blue p-3 relative rounded-md flex flex-col items-center space-y-1 hover:bg-transparent-dark hover:cursor-pointer">
                        <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                            <!-- <DocumentDuplicateIcon class="h-4 w-4"/> -->
                        </span>
                        <DocumentIcon class="h-12 w-12"/>
                        <span class="text-gray-300 text-sm">UBF 232F</span>
                    </div>
                    <div class="bg-nav-blue p-3 relative rounded-md flex flex-col items-center space-y-1 hover:bg-transparent-dark hover:cursor-pointer">
                        <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                            <!-- <DocumentDuplicateIcon class="h-4 w-4"/> -->
                        </span>
                        <DocumentIcon class="h-12 w-12"/>
                        <span class="text-gray-300 text-sm">UBF 232F</span>
                    </div>
                    <div class="bg-nav-blue p-3 relative rounded-md flex flex-col items-center space-y-1 hover:bg-transparent-dark hover:cursor-pointer">
                        <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                            <!-- <DocumentDuplicateIcon class="h-4 w-4"/> -->
                        </span>
                        <DocumentIcon class="h-12 w-12"/>
                        <span class="text-gray-300 text-sm">UBF 232F</span>
                    </div>
                    <div class="bg-nav-blue p-3 relative rounded-md flex flex-col items-center space-y-1 hover:bg-transparent-dark hover:cursor-pointer">
                        <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                            <!-- <DocumentDuplicateIcon class="h-4 w-4"/> -->
                        </span>
                        <DocumentIcon class="h-12 w-12"/>
                        <span class="text-gray-300 text-sm">UBF 232F</span>
                    </div>
                </div>
                <!-- -------- -->

                <p class="mb-3">Personal information</p>
                <div class="bg-transparent-dark rounded-md -space-y-2">
                    <Disclosure as="nav" v-slot="{ open }">
                        <div class="p-3 rounded-md space-y-3">
                            <div class="flex items-center justify-between hover:text-sky-500 hover:cursor-pointer">
                                <p>Wasswa Speed</p>
                                <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                                    <PencilSquareIcon class="block h-6 w-6" />
                                </DisclosureButton>
                            </div>
                            <!-- displayed content -->
                            <DisclosurePanel>
                                <form class="space-y-2">
                                    <input type="text" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" value="Wasswa Speed">
                                    <div class="flex items-center justify-end space-x-6 text-sm">
                                        <button class="text-sky-500 hover:text-gray-50">save</button>
                                        <DisclosureButton class="text-rose-700 hover:text-gray-50">
                                            cancel
                                        </DisclosureButton>
                                    </div>
                                </form>
                            </DisclosurePanel>
                        </div>
                    </Disclosure>
                </div>
            </div>
        </div>
    </div>

    <Head title="Client Name" />
</template>
