<script setup>
import { Head } from '@inertiajs/vue3'
import Default from '@/Layouts/Default.vue'
import { UserCircleIcon, BanknotesIcon, UsersIcon, TruckIcon, DocumentArrowDownIcon, PencilSquareIcon, DocumentDuplicateIcon, DocumentCheckIcon, DocumentIcon, FilmIcon, ArrowDownLeftIcon, DocumentTextIcon, FaceSmileIcon, InformationCircleIcon } from '@heroicons/vue/24/outline';
import { Disclosure, DisclosurePanel, DisclosureButton } from '@headlessui/vue'

defineOptions({ layout: Default })
</script>

<template>
    <div class="p-8 font-mono">
        <div class="max-w-5xl mx-auto md:grid grid-cols-7 gap-6 md:space-y-0 space-y-3 ">
            <div class="col-span-2 space-y-3 flex items-start gap-3 sm:flex sm:items-start items-start md:block sm:flex sm:gap-6">
                <div class="relative w-fit md:mb-6">
                    <!-- Fake Background Copy -->
                    <div class="absolute bottom-4 left-0 w-full h-full bg-gray-500 rounded-md scale-90 opacity-80"></div>
                    <div class="absolute bottom-2 left-0 w-full h-full bg-gray-400 rounded-md scale-95 opacity-90"></div>
                    <!-- Main Card -->
                    <div class="portal relative rounded-md flex flex-col items-center space-y-1 bg-nav-blue p-4 shadow-lg">
                        <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                            <DocumentDuplicateIcon class="h-4 w-4"/>
                        </span>
                        <span id="clone" class="absolute top-7 right-1 bg-cyan-950 text-white text-sm px-2 rounded-md">
                        9
                        </span>
                        <UserCircleIcon class="md:h-12 md:w-12 sm:h-8 sm:w-8"/>
                        <span class="text-xs text-gray-300 md:text-sm sm:text-xs">Musisi Abubakr</span>
                        <span class="hidden md:block sm:block text-gray-300 md:text-sm sm:text-xs">UBF 232F</span>
                    </div>
                </div>
                <div class="md:space-y-6 sm:space-y-3 space-y-2">
                    <div class="flex flex-wrap gap-3 md:block sm:flex sm:items-center sm:gap-3 md:space-y-2 sm:flex-wrap">
                        <button class="bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center">
                            <UserCircleIcon class="h-4 w-4"/>&nbsp;<span class="md:hidden text-xs">Personal</span>
                            <span class="sm:hidden md:block hidden">Personal info</span>
                        </button>
                        <button class="bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center">
                            <TruckIcon class="h-4 w-4"/>&nbsp;<span class="md:hidden text-xs">Motor</span>
                            <span class="sm:hidden md:block hidden">Motor information</span>
                        </button>
                        <button class="bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center">
                            <UsersIcon class="h-4 w-4"/>&nbsp;<span class="md:hidden text-xs">Referees</span>
                            <span class="sm:hidden md:block hidden">Referee information</span>
                        </button>
                        <button class="bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center">
                            <BanknotesIcon class="h-4 w-4"/>&nbsp;<span class="md:hidden text-xs">Loan</span>
                            <span class="sm:hidden md:block hidden">Loan information</span>
                        </button>
                        <button class="bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center">
                            <DocumentArrowDownIcon class="h-4 w-4"/>&nbsp;<span class="md:hidden text-xs">PDFs</span>
                            <span class="sm:hidden md:block hidden">PDF Downloads</span>
                        </button>
                        <button class="bg-transparent-dark p-2 text-sm tracking-tighter rounded-md flex items-center">
                            <InformationCircleIcon class="h-4 w-4"/>&nbsp;<span class="md:hidden text-xs">Files</span>
                            <span class="sm:hidden md:block hidden">Client Files</span>
                        </button>
                    </div>

                    <p class="text-sm text-rose-600 tracking-tighter">
                            Delete account
                    </p>
                </div>
            </div>
            <div class="col-span-5 space-y-3">
                <!-- for multiple docs display here -->
                 <p class="text-sm">Select to show more information </p>
                <div class="flex justify-start flex-wrap gap-2">
                    <div class="bg-nav-blue p-2 relative rounded-md flex flex-col items-center space-y-1 hover:bg-transparent-dark hover:cursor-pointer shadow-lg">
                        <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                        </span>
                        <DocumentIcon class="h-8 w-8"/>
                        <span class="text-gray-300 text-xs">UBF 232F</span>
                    </div>
                    <div class="bg-nav-blue p-2 relative rounded-md flex flex-col items-center space-y-1 hover:bg-transparent-dark hover:cursor-pointer shadow-lg">
                        <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                        </span>
                        <DocumentIcon class="h-8 w-8"/>
                        <span class="text-gray-300 text-xs">UBF 232F</span>
                    </div>
                    <div class="bg-nav-blue p-2 relative rounded-md flex flex-col items-center space-y-1 hover:bg-transparent-dark hover:cursor-pointer shadow-lg">
                        <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                        </span>
                        <DocumentIcon class="h-8 w-8"/>
                        <span class="text-gray-300 text-xs">UBF 232F</span>
                    </div>
                    <div class="bg-nav-blue p-2 relative rounded-md flex flex-col items-center space-y-1 hover:bg-transparent-dark hover:cursor-pointer shadow-lg">
                        <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                        </span>
                        <DocumentIcon class="h-8 w-8"/>
                        <span class="text-gray-300 text-xs">UBF 232F</span>
                    </div>
                    <div class="bg-nav-blue p-2 relative rounded-md flex flex-col items-center space-y-1 hover:bg-transparent-dark hover:cursor-pointer shadow-lg">
                        <span id="clone" class="absolute top-1 right-1 bg-cyan-950 text-white text-sm p-1 rounded-md">
                        </span>
                        <DocumentIcon class="h-8 w-8"/>
                        <span class="text-gray-300 text-xs">UBF 232F</span>
                    </div>
                </div>
                <!-- -------- -->

                <p class="mb-3 text-sm">Personal information</p>
                <div class="bg-transparent-dark rounded-md -space-y-2">
                    <Disclosure as="nav" v-slot="{ open }">
                        <div class="p-3 rounded-md space-y-3">
                            <div class="flex items-center justify-between hover:text-sky-500 hover:cursor-pointer">
                                <p>Wasswa Speed</p>
                                <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                                    <PencilSquareIcon class="block h-4 w-4" />
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
