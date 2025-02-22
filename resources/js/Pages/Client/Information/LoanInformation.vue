<script setup>
import { Disclosure, DisclosurePanel, DisclosureButton } from '@headlessui/vue'
import { PencilSquareIcon } from '@heroicons/vue/24/outline';

defineProps({
    loan:Object
})
</script>
<template>
    <p class="mb-3 text-sm">Loan information</p>
    <div class="bg-transparent-dark rounded-md -space-y-2">
        <Disclosure as="nav" v-slot="{ open }">
            <div class="p-3 rounded-md space-y-3">
                <div class="flex items-center justify-between hover:text-sky-500 hover:cursor-pointer">
                    <p>Initial Deposit: <small>{{loan[0].initial_deposit}}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <!-- displayed content -->
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input type="number" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" :value="loan[0].initial_deposit">
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
        <Disclosure as="nav" v-slot="{ open }">
            <div class="p-3 rounded-md space-y-3">
                <div class="flex items-center justify-between hover:text-sky-500 hover:cursor-pointer">
                    <p>Weekly Deposit: <small>{{loan[0].weekly_deposit}}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <!-- displayed content -->
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input type="number" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" :value="loan[0].weekly_deposit">
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
        <Disclosure as="nav" v-slot="{ open }">
            <div class="p-3 rounded-md space-y-3">
                <div class="flex items-center justify-between hover:text-sky-500 hover:cursor-pointer">
                    <p>Agreed Months: <small>{{loan[0].agreed_months}}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <!-- displayed content -->
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input type="number" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" :value="loan[0].agreed_months">
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
        <Disclosure as="nav" v-slot="{ open }">
            <div class="p-3 rounded-md space-y-3">
                <div class="flex items-center justify-between hover:text-sky-500 hover:cursor-pointer">
                    <p>Total weeks: <small>{{loan[0].total_weeks}}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <!-- displayed content -->
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input type="number" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" :value="loan[0].total_weeks">
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
        <Disclosure as="nav" v-slot="{ open }">
            <div class="p-3 rounded-md space-y-3">
                <div class="flex items-center justify-between hover:text-sky-500 hover:cursor-pointer">
                    <p>Selling Price: <small>{{loan[0].selling_price}}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <!-- displayed content -->
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input type="number" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" :value="loan[0].selling_price">
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
        <Disclosure as="nav" v-slot="{ open }">
            <div class="p-3 rounded-md space-y-3">
                <div class="flex items-center justify-between hover:text-sky-500 hover:cursor-pointer">
                    <p>Starting Week Date: <small>{{loan[0].starting_week_date}}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <!-- displayed content -->
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input type="date" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" :value="loan[0].starting_week_date">
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
        <Disclosure as="nav" v-slot="{ open }">
            <div class="p-3 rounded-md space-y-3">
                <div class="flex items-center justify-between hover:text-sky-500 hover:cursor-pointer">
                    <p>Place of Agreement: <small>{{loan[0].agreement_place}}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <!-- displayed content -->
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input type="text" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" :value="loan[0].agreement_place">
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
</template>
