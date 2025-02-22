<script setup>
import { Disclosure, DisclosurePanel, DisclosureButton } from '@headlessui/vue'
import { PencilSquareIcon } from '@heroicons/vue/24/outline';

defineProps({
    referee:Object
})
</script>
<template>
    <p class="mb-3 text-sm">Referee information</p>
    <div class="bg-transparent-dark rounded-md -space-y-2">
        <Disclosure as="nav" v-slot="{ open }">
            <div class="p-3 rounded-md space-y-3">
                <div class="flex items-center justify-between hover:text-sky-500 hover:cursor-pointer">
                    <p>Referee One Name: <small>{{referee[0].referee_one_name}}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <!-- displayed content -->
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input type="text" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" :value="referee[0].referee_one_name">
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
                    <p>Referee One Contact: <small>{{referee[0].referee_one_contact}}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <!-- displayed content -->
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input type="text" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" :value="referee[0].referee_one_contact">
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
                    <p>Referee One Relationship: <small>{{referee[0].referee_one_relationship}}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <!-- displayed content -->
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input type="text" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" :value="referee[0].referee_one_relationship">
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
                    <p>Referee Two Name: <small>{{referee[0].referee_two_name}}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <!-- displayed content -->
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input type="text" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" :value="referee[0].referee_two_name">
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
                    <p>Referee Two Contact: <small>{{referee[0].referee_two_contact}}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <!-- displayed content -->
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input type="text" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" :value="referee[0].referee_two_contact">
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
                    <p>Referee Two Relationship: <small>{{referee[0].referee_two_relationship}}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <!-- displayed content -->
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input type="text" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" :value="referee[0].referee_two_relationship">
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
                    <p>Stage Chairperson Name: <small>{{referee[0].stage_chairperson_name}}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <!-- displayed content -->
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input type="text" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" :value="referee[0].stage_chairperson_name">
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
                    <p>Stage Chairperson Contact: <small>{{referee[0].stage_chairperson_contact}}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <!-- displayed content -->
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input type="text" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" :value="referee[0].stage_chairperson_contact">
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
                    <p>LC Chairperson Name: <small>{{referee[0].lc_chairperson_name}}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <!-- displayed content -->
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input type="text" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" :value="referee[0].lc_chairperson_name">
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
                    <p>LC Chairperson Contact: <small>{{referee[0].lc_chairperson_contact}}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <!-- displayed content -->
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input type="text" id="name" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" :value="referee[0].lc_chairperson_contact">
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
