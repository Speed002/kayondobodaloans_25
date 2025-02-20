<script setup>
import { Disclosure, DisclosurePanel, DisclosureButton } from '@headlessui/vue'
</script>
<template>
    <p class="mb-3 text-sm">Loan information</p>
    <div class="bg-transparent-dark rounded-md -space-y-2">
        <Disclosure as="nav" v-slot="{ open }">
            <div class="p-3 rounded-md space-y-3">
                <div class="flex items-center justify-between hover:text-sky-500 hover:cursor-pointer">
                    <p>Name: <small>Wasswa Speed</small></p>
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
</template>
