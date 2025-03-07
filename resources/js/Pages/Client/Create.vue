<script setup>
import { Head, useForm } from '@inertiajs/vue3'
import Default from '@/Layouts/Default.vue'
import Navigation from './Create/Navigation.vue';
import useStep from '../../composables/useStep';
import PersonalInfoForm from './Create/Forms/PersonalInfoForm.vue';
import MotorInfoForm from './Create/Forms/MotorInfoForm.vue';
import RefereeInfoForm from './Create/Forms/RefereeInfoForm.vue';
import LoanInfoForm from './Create/Forms/LoanInfoForm.vue';
import ReviewForm from './Create/Forms/ReviewForm.vue';
const {step, prevStep, nextStep} = useStep()
defineOptions({ layout: Default })
const form = useForm({
    name: '',
    nin: '',
    dob: '',
    contact: '',
    occupation: '',
    residence: '',
    stage_name: '',
    date_of_agreement: '',
    father_name: '',
    father_contact: '',
    mother_name: '',
    mother_contact: '',
    // --------------------------
    type: '',
    registered_names: '',
    make: '',
    registration: '',
    color: '',
    engine: '',
    chasis: '',
    condition: '',
    // --------------------------
    referee_one_name:'',
    referee_one_contact:'',
    referee_one_relationship:'',
    referee_two_name:'',
    referee_two_contact:'',
    referee_two_relationship:'',
    stage_chairperson_name:'',
    stage_chairperson_contact:'',
    lc_chairperson_name:'',
    lc_chairperson_contact:'',
    // --------------------------
    initial_deposit: '',
    weekly_deposit: '',
    agreed_months: '',
    total_weeks: '',
    selling_price: '',
    starting_week_date: '',
    agreement_place: ''
})

const createClient = () => {
    form.post(route('store.client'), {
        preserveScroll:true,
        onSuccess:() => {
            form.reset()
        }
    })
}
</script>
<template>
    <div class="p-8">
        <div class="max-w-5xl mx-auto md:grid grid-cols-7 gap-6">
            <div class="col-span-2 space-y-3 md:block sm:flex">
                <!-- Emitting the step event -->
                <Navigation :step="step" @update:step="step = $event"/>
            </div>
            <div class="col-span-5">
                <p class="md:my-0 my-3">Step {{ step }} of 5</p>
                <!-- {{ form }} -->
                <form @submit.prevent="createClient" class="space-y-3">
                    <div v-if="step === 1" class="space-y-2">
                        <PersonalInfoForm :form="form"/>
                    </div>

                    <div v-if="step === 2" class="space-y-2">
                        <MotorInfoForm :form="form"/>
                    </div>

                    <div v-if="step === 3" class="space-y-2">
                        <RefereeInfoForm :form="form"/>
                    </div>

                    <div v-if="step === 4" class="space-y-2">
                        <LoanInfoForm :form="form"/>
                    </div>

                    <div v-if="step === 5" class="space-y-2">
                        <ReviewForm :form="form"/>
                    </div>
                    <div class="flex justify-between">
                        <button class="text-sky-500 p-1 rounded-md text-sm" v-if="step !== 1" type="button" @click="prevStep" :disabled="step === 1">Previous</button>
                        <button class="text-sky-500 p-1 rounded-md text-sm" v-if="step !== 5" type="button" @click="nextStep" :disabled="step === 5">Next</button>
                        <button type="submit" v-if="step === 5" class="bg-nav-blue text-gray-300 p-1 rounded-md text-sm">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <Head title="Create"/>
</template>
