<script setup>
defineProps({
    form:Object
})
</script>

<template>
    <!-- Step 4 Fields (Financial Agreement) -->
    <h3 class="font-bold text-lg">Review Client Data and Save</h3>
    <table class="table-auto w-full border-collapse text-sm">
        <thead class="text-left">
            <tr>
                <th class="border px-4 py-1 w-1/2">Field</th>
                <th class="border px-4 py-1 w-1/2">Value</th>
            </tr>
        </thead>
        <tbody>
            <tr><td class="border px-4 py-1 w-1/2">Name</td><td class="border px-4 py-1 w-1/2">{{ form.name }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">NIN</td><td class="border px-4 py-1 w-1/2">{{ form.nin }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Date of Birth</td><td class="border px-4 py-1 w-1/2">{{ form.dob }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Contact</td><td class="border px-4 py-1 w-1/2">{{ form.contact }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Occupation</td><td class="border px-4 py-1 w-1/2">{{ form.occupation }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Residence</td><td class="border px-4 py-1 w-1/2">{{ form.residence }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Stage Name</td><td class="border px-4 py-1 w-1/2">{{ form.stage_name }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Date of Agreement</td><td class="border px-4 py-1 w-1/2">{{ form.date_of_agreement }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Father's Name</td><td class="border px-4 py-1 w-1/2">{{ form.father_name }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Father's Contact</td><td class="border px-4 py-1 w-1/2">{{ form.father_contact }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Mother's Name</td><td class="border px-4 py-1 w-1/2">{{ form.mother_name }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Mother's Contact</td><td class="border px-4 py-1 w-1/2">{{ form.mother_contact }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Vehicle Type</td><td class="border px-4 py-1 w-1/2"></td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Vehicle Make</td><td class="border px-4 py-1 w-1/2"></td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Color</td><td class="border px-4 py-1 w-1/2"></td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Engine Number</td><td class="border px-4 py-1 w-1/2"></td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Chasis Number</td><td class="border px-4 py-1 w-1/2"></td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Registration Number</td><td class="border px-4 py-1 w-1/2"></td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Condition</td><td class="border px-4 py-1 w-1/2"></td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Referee One Name</td><td class="border px-4 py-1 w-1/2">{{ form.referee_one_name }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Referee One Contact</td><td class="border px-4 py-1 w-1/2">{{ form.referee_one_contact }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Referee One Relationship</td><td class="border px-4 py-1 w-1/2">{{ form.referee_one_relationship }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Referee Two Name</td><td class="border px-4 py-1 w-1/2">{{ form.referee_two_name }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Referee Two Contact</td><td class="border px-4 py-1 w-1/2">{{ form.referee_two_contact }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Referee Two Relationship</td><td class="border px-4 py-1 w-1/2">{{ form.referee_two_relationship }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Stage Chairperson Name</td><td class="border px-4 py-1 w-1/2">{{ form.stage_chairperson_name }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Stage Chairperson Contact</td><td class="border px-4 py-1 w-1/2">{{ form.stage_chairperson_contact }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">LC Chairperson Name</td><td class="border px-4 py-1 w-1/2">{{ form.lc_chairperson_name }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">LC Chairperson Contact</td><td class="border px-4 py-1 w-1/2">{{ form.lc_chairperson_contact }}</td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Initial Deposit</td><td class="border px-4 py-1 w-1/2"></td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Weekly Deposit</td><td class="border px-4 py-1 w-1/2"></td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Agreed Months</td><td class="border px-4 py-1 w-1/2"></td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Total Weeks</td><td class="border px-4 py-1 w-1/2"></td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Selling Price</td><td class="border px-4 py-1 w-1/2"></td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Date of Starting Week</td><td class="border px-4 py-1 w-1/2"></td></tr>
            <tr><td class="border px-4 py-1 w-1/2">Place of Agreement</td><td class="border px-4 py-1 w-1/2"></td></tr>
        </tbody>
    </table>
</template>
