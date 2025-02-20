<script setup>
import { Head } from '@inertiajs/vue3'
import Default from '@/Layouts/Default.vue'
import { PencilSquareIcon } from '@heroicons/vue/24/outline';
import { ref } from 'vue';
import Navigation from './Navigation.vue';
import MultipleDocument from './MultipleDocument.vue';
import PersonalInformation from './Information/PersonalInformation.vue';
import MotorInformation from './Information/MotorInformation.vue';
import RefereeInformation from './Information/RefereeInformation.vue';
import LoanInformation from './Information/LoanInformation.vue';
import PDFDownloads from './Information/PDFDownloads.vue';
import OtherFiles from './Information/OtherFiles.vue';

const info = ref(1)
defineOptions({ layout: Default })

</script>

<template>
    <div class="p-8 font-mono">
        <div class="max-w-5xl mx-auto md:grid grid-cols-7 gap-6 md:space-y-0 space-y-3 ">
            <div class="col-span-2 space-y-3 flex items-center gap-3 sm:flex sm:items-start items-start md:block sm:flex sm:gap-6">
                <Navigation :info="info" @update:info="info = $event"/>
            </div>
            <div class="col-span-5 space-y-3">
                <!-- for multiple docs display here -->
                <MultipleDocument/>
                <!-- -------- -->
                <div v-if="info === 1">
                    <PersonalInformation/>
                </div>
                <div v-if="info === 2">
                    <MotorInformation/>
                </div>
                <div v-if="info === 3">
                    <RefereeInformation/>
                </div>
                <div v-if="info === 4">
                    <LoanInformation/>
                </div>
                <div v-if="info === 5">
                    <PDFDownloads/>
                </div>
                <div v-if="info === 6">
                    <OtherFiles/>
                </div>
            </div>
        </div>
    </div>

    <Head title="Client Name" />
</template>
