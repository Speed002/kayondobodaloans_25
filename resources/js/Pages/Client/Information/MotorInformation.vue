<script setup>
import { Disclosure, DisclosurePanel, DisclosureButton } from '@headlessui/vue';
import { PencilSquareIcon } from '@heroicons/vue/24/outline';

defineProps({
    motor: Object
});

const fields = [
    'registration','type', 'make', 'color', 'chasis', 'engine', 'condition', 'registered_names'
];
</script>

<template>
    <div class="bg-transparent-dark rounded-md -space-y-2">
        <Disclosure v-for="field in fields" :key="field" as="nav" v-slot="{ open }">
            <div class="p-3 rounded-md space-y-3">
                <div class="flex items-center justify-between hover:text-sky-500 hover:cursor-pointer">
                    <p class="capitalize">{{ field }}: <small>{{ motor[0][field] }}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input
                            type="text"
                            class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm"
                            :value="motor[0][field]"
                        />
                        <div class="flex items-center justify-end space-x-6 text-sm">
                            <button class="text-sky-500 hover:text-gray-50">save</button>
                            <DisclosureButton class="text-rose-700 hover:text-gray-50">cancel</DisclosureButton>
                        </div>
                    </form>
                </DisclosurePanel>
            </div>
        </Disclosure>
    </div>
</template>
