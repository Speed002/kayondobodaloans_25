<script setup>
import { Head } from '@inertiajs/vue3'
import Default from '@/Layouts/Default.vue'
import { ref } from 'vue';
import Navigation from './Navigation.vue';
import MultipleDocument from './MultipleDocument.vue';
import PersonalInformation from './Information/PersonalInformation.vue';
import MotorInformation from './Information/MotorInformation.vue';
import RefereeInformation from './Information/RefereeInformation.vue';
import LoanInformation from './Information/LoanInformation.vue';
import PDFDownloads from './Information/PDFDownloads.vue';
import OtherFiles from './Information/OtherFiles.vue';
const info = ref(2)
defineOptions({ layout: Default })
defineProps({
    client:Object,
    common_key:String,
    filtered_motor : Object,
    filtered_loan : Object,
    filtered_referee : Object,
    files:Object
})
</script>
<template>
    <div class="p-8">
        <div class="max-w-5xl mx-auto md:grid grid-cols-7 gap-6 md:space-y-0 space-y-3 ">
            <div class="col-span-2 space-y-5 flex items-center gap-3 sm:flex sm:items-start items-start md:block sm:flex sm:gap-6">
                <Navigation :client="client" :info="info" @update:info="info = $event" :motor="filtered_motor"/>
            </div>
            <div class="col-span-5 space-y-3">
                <!-- for multiple docs display here -->
                <MultipleDocument v-if="(client.motor.length > 0 && client.motor[0].common_set_key !== undefined) || client.motor.length > 1" :client="client" :common_key="common_key"/>
                <!-- -------- -->
                <div v-if="info === 2">
                    <MotorInformation :motor="filtered_motor"/>
                </div>
                <div v-if="info === 3" >
                    <RefereeInformation :referee="filtered_referee"/>
                </div>
                <div v-if="info === 4">
                    <LoanInformation :loan="filtered_loan"/>
                </div>
                <div v-if="info === 5">
                    <PDFDownloads :client="client" :motor="filtered_motor" :referee="filtered_referee" :loan="filtered_loan"/>
                </div>
                <div v-if="info === 6">
                    <OtherFiles :files="files" :client="client"/>
                </div>
                <div v-if="info === 1">
                    <PersonalInformation :client="client"/>
                </div>
            </div>
        </div>
    </div>
    <Head :title="client.name" />
</template>
