<script setup>
import { Disclosure, DisclosurePanel, DisclosureButton } from '@headlessui/vue';
import { PencilSquareIcon } from '@heroicons/vue/24/outline';
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
  loan: Object,
});

const fields = [
  { key: 'initial_deposit', label: 'Initial Deposit', type: 'number' },
  { key: 'weekly_deposit', label: 'Weekly Deposit', type: 'number' },
  { key: 'agreed_months', label: 'Agreed Months', type: 'number' },
  { key: 'total_weeks', label: 'Total Weeks', type: 'number' },
  { key: 'selling_price', label: 'Selling Price', type: 'number' },
  { key: 'starting_week_date', label: 'Starting Week Date', type: 'date' },
  { key: 'agreement_place', label: 'Place of Agreement', type: 'text' },
];

const form = useForm(
    Object.fromEntries(fields.map(field => [field.key, props.loan[0][field.key] ?? '']))
);

const updateInfo = (field) => {
    // console.log(form)
    form.patch(route('update.client.loan-info', [`${props.loan[0].id}`, `${field}`]), {
        preserveScroll:true,
    })
}
</script>

<template>
  <p class="mb-3 text-sm">Loan Information</p>
  <div class="bg-transparent-dark rounded-md -space-y-2">
    <Disclosure v-for="field in fields" :key="field.key" as="nav" v-slot="{ open }">
      <div class="p-3 rounded-md space-y-3">
        <div class="flex items-center justify-between hover:text-sky-500 hover:cursor-pointer">
          <p>{{ field.label }}: <small class="text-sky-500">{{ loan[0][field.key] }}</small></p>
          <DisclosureButton class="hover:text-sky-500 hover:cursor-pointer">
            <PencilSquareIcon class="block h-4 w-4" />
          </DisclosureButton>
        </div>
        <!-- displayed content -->
        <DisclosurePanel>
          <form v-on:submit.prevent="updateInfo(field.key)" class="space-y-2">
            <input :type="field.type" class="flex-grow w-full text-gray-900 border-gray-300 text-sm rounded-sm"
            v-model="form[field.key]"

            />
            <div class="flex items-center justify-end space-x-6 text-sm">
              <button class="text-sky-500 hover:text-gray-50">Update</button>
              <DisclosureButton class="text-rose-700 hover:text-gray-50">Cancel</DisclosureButton>
            </div>
          </form>
        </DisclosurePanel>
      </div>
    </Disclosure>
  </div>
</template>
