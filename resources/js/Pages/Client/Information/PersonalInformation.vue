<script setup>
import { Disclosure, DisclosurePanel, DisclosureButton } from '@headlessui/vue';
import { PencilSquareIcon } from '@heroicons/vue/24/outline';
import { useForm } from '@inertiajs/vue3'

const props = defineProps({ client: Object });

const fields = [
    { key: 'name', label: 'Name', type: 'text' },
    { key: 'nin', label: 'Nin', type: 'text' },
    { key: 'dob', label: 'Date of birth', type: 'date' },
    { key: 'contact', label: 'Contact', type: 'text' },
    { key: 'occupation', label: 'Occupation', type: 'text' },
    { key: 'residence', label: 'Residence', type: 'text' },
    { key: 'stage_name', label: 'Stage name', type: 'text' },
    { key: 'date_of_agreement', label: 'Date of Agreement', type: 'date' },
    { key: 'father_name', label: "Father's name", type: 'text' },
    { key: 'father_contact', label: "Father's contact", type: 'text' },
    { key: 'mother_name', label: "Mother's name", type: 'text' },
    { key: 'mother_contact', label: "Mother's contact", type: 'text' }
];

// const form = useForm({
//     field: fields.map((field) => props.client[field.key])
// })

const form = useForm(
    Object.fromEntries(fields.map(field => [field.key, props.client[field.key] ?? '']))
);

const updateInfo = (field) => {
    form.patch(route('update.client.personal-info', [`${props.client.id}`, `${field}`]), {
        preserveScroll:true,
    })
}
</script>

<template>
    <p class="mb-3 text-sm">Personal information:</p>
    <div class="bg-transparent-dark rounded-md -space-y-2">
        <Disclosure v-for="field in fields" :key="field.key" as="nav" v-slot="{ open }">
            <div class="p-3 rounded-md space-y-3">
                <div class="flex items-center justify-between hover:text-sky-500 hover:cursor-pointer">
                    <p>{{ field.label }}: <small class="text-sky-500">{{ client[field.key] }}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <DisclosurePanel>
                    <form v-on:submit.prevent="updateInfo(field.key)" class="space-y-2">
                        <input
                            :type="field.type"
                            class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm"
                            v-model="form[field.key]"
                        >
                        <div class="flex items-center justify-end space-x-6 text-sm">
                            <button class="text-sky-500 hover:text-gray-50">Save</button>
                            <DisclosureButton class="text-rose-700 hover:text-gray-50">Cancel</DisclosureButton>
                        </div>
                    </form>
                </DisclosurePanel>
            </div>
        </Disclosure>
    </div>
</template>
