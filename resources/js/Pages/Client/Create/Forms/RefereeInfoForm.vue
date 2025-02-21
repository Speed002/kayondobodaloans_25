<script setup>
defineProps({
    form:Object
})
</script>

<template>
    <!-- Step 3 Fields (Additional Details) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="referee_one_name" class="form-label">Referee One Name</label>
            <input type="text" v-model="form.referee_one_name" placeholder="eg., Emanuel Kala" class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
        </div>
        <div>
            <label for="referee_one_contact" class="form-label">Referee One Contact</label>
            <input type="text" v-model="form.referee_one_contact" placeholder="eg., 0788..." class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="referee_one_relationship" class="form-label">Referee One Relationship</label>
            <input type="text" v-model="form.referee_one_relationship" placeholder="eg., Brother" class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
        </div>

        <div>
            <label for="referee_two_name" class="form-label">Referee Two Name</label>
            <input type="text" v-model="form.referee_two_name" placeholder="eg., Emanuel Kala" class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="referee_two_contact" class="form-label">Referee Two Contact</label>
            <input type="text" v-model="form.referee_two_contact" placeholder="eg., 0788..." class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
        </div>

        <div>
            <label for="referee_two_relationship" class="form-label">Referee Two Relationship</label>
            <input type="text" v-model="form.referee_two_relationship" placeholder="eg., Brother" class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="stage_chairperson_name" class="form-label">Stage Chairperson Name</label>
            <input type="text" v-model="form.stage_chairperson_name" placeholder="eg., Emanuel Kala" class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
        </div>

        <div>
            <label for="stage_chairperson_contact" class="form-label">Stage Chairperson Contact</label>
            <input type="text" v-model="form.stage_chairperson_contact" placeholder="eg., 0788..." class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="lc_chairperson_name" class="form-label">LC Chairperson Name</label>
            <input type="text" v-model="form.lc_chairperson_name" placeholder="eg., Emanuel Kala" class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
        </div>

        <div>
            <label for="lc_chairperson_contact" class="form-label">LC Chairperson Contact</label>
            <input type="text" v-model="form.lc_chairperson_contact" placeholder="eg., 0788" class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
        </div>
    </div>
</template>
