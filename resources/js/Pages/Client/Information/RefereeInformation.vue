<script setup>
import { Disclosure, DisclosurePanel, DisclosureButton } from '@headlessui/vue';
import { PencilSquareIcon } from '@heroicons/vue/24/outline';

defineProps({ referee: Object });
const fields = [
    { label: 'Referee One Name', key: 'referee_one_name' },
    { label: 'Referee One Contact', key: 'referee_one_contact' },
    { label: 'Referee One Relationship', key: 'referee_one_relationship' },
    { label: 'Referee Two Name', key: 'referee_two_name' },
    { label: 'Referee Two Contact', key: 'referee_two_contact' },
    { label: 'Referee Two Relationship', key: 'referee_two_relationship' },
    { label: 'Stage Chairperson Name', key: 'stage_chairperson_name' },
    { label: 'Stage Chairperson Contact', key: 'stage_chairperson_contact' },
    { label: 'LC Chairperson Name', key: 'lc_chairperson_name' }
];
</script>

<template>
    <p class="mb-3 text-sm">Referee information</p>
    <div class="bg-transparent-dark rounded-md -space-y-2">
        <Disclosure v-for="field in fields" :key="field.key" as="nav" v-slot="{ open }">
            <div class="p-3 rounded-md space-y-3">
                <div class="flex items-center justify-between hover:text-sky-500 hover:cursor-pointer">
                    <p>{{ field.label }}: <small class="text-sky-500">{{ referee[0][field.key] }}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <DisclosurePanel>
                    <form class="space-y-2">
                        <input type="text" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm" :value="referee[0][field.key]">
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
