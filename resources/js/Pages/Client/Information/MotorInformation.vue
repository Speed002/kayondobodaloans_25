<script setup>
import { Disclosure, DisclosurePanel, DisclosureButton } from '@headlessui/vue';
import { PencilSquareIcon } from '@heroicons/vue/24/outline';
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
    motor: Object
});

const fields = [
    'registration','type', 'make', 'color', 'chasis', 'engine', 'condition', 'registered_names'
];

const form = useForm(
    Object.fromEntries(fields.map(field => [field, props.motor[0][field] ?? '']))
);

const updateInfo = (field) => {
    form.patch(route('update.client.motor-info', [`${props.motor[0].id}`, `${field}`]), {
        preserveScroll:true,
    })
}
</script>

<template>
    <div class="bg-transparent-dark rounded-md -space-y-2">
        <Disclosure v-for="field in fields" :key="field" as="nav" v-slot="{ open }">
            <div class="p-3 rounded-md space-y-3">
                <div class="flex items-center justify-between hover:text-sky-500 hover:cursor-pointer">
                    <p class="capitalize">{{ field }}: <small class="text-sky-500">{{ motor[0][field] }}</small></p>
                    <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
                        <PencilSquareIcon class="block h-4 w-4" />
                    </DisclosureButton>
                </div>
                <DisclosurePanel>
                    <form v-on:submit.prevent="updateInfo(field)" class="space-y-2">
                        <input
                            type="text"
                            class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm"
                            v-model="form[field]"
                        />
                        <div class="flex items-center justify-end space-x-6 text-sm">
                            <button class="text-sky-500 hover:text-gray-50">Update</button>
                            <DisclosureButton class="text-rose-700 hover:text-gray-50">cancel</DisclosureButton>
                        </div>
                    </form>
                </DisclosurePanel>
            </div>
        </Disclosure>
    </div>
</template>
