<script setup>
    defineProps({
        form:Object
    })
</script>

<template>
    <!-- Step 1 Fields (Personal Details) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="name">Name</label>
            <input type="text" v-model="form.name" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., John Doe">
            <div v-if="form.errors.name" class="text-xs text-rose-600 mt-1">
                {{ form.errors.name }}
            </div>
        </div>
        <div>
            <label for="nin">NIN Number</label>
            <input type="text" v-model="form.nin" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., NIN Number">
            <div v-if="form.errors.nin" class="text-xs text-rose-600 mt-1">
                {{ form.errors.nin }}
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="dob">Date of Birth</label>
            <input type="date" v-model="form.dob" class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
            <div v-if="form.errors.dob" class="text-xs text-rose-600 mt-1">
                {{ form.errors.dob }}
            </div>
        </div>
        <div>
            <label for="contact">Contact</label>
            <input type="text" v-model="form.contact" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., +256123456789">
            <div v-if="form.errors.contact" class="text-xs text-rose-600 mt-1">
                {{ form.errors.contact }}
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="occupation">Occupation</label>
            <input type="text" v-model="form.occupation" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., Engineer">
            <div v-if="form.errors.occupation" class="text-xs text-rose-600 mt-1">
                {{ form.errors.occupation }}
            </div>
        </div>
        <div>
            <label for="residence">Residence</label>
            <input type="text" v-model="form.residence" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., Kampala">
            <div v-if="form.errors.residence" class="text-xs text-rose-600 mt-1">
                {{ form.errors.residence }}
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="stage_name">Stage Name</label>
            <input type="text" v-model="form.stage_name" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., DJ Speed">
            <div v-if="form.errors.stage_name" class="text-xs text-rose-600 mt-1">
                {{ form.errors.stage_name }}
            </div>
        </div>
        <div>
            <label for="date_of_agreement">Date of Agreement</label>
            <input type="date" v-model="form.date_of_agreement" class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
            <div v-if="form.errors.date_of_agreement" class="text-xs text-rose-600 mt-1">
                {{ form.errors.date_of_agreement }}
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="father_name">Father's Name</label>
            <input type="text" v-model="form.father_name" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., John Doe Sr.">
            <div v-if="form.errors.father_name" class="text-xs text-rose-600 mt-1">
                {{ form.errors.father_name }}
            </div>
        </div>
        <div>
            <label for="father_contact">Father's Contact</label>
            <input type="text" v-model="form.father_contact" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., +256987654321">
            <div v-if="form.errors.father_contact" class="text-xs text-rose-600 mt-1">
                {{ form.errors.father_contact }}
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="mother_name">Mother's Name</label>
            <input type="text" v-model="form.mother_name" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., Jane Doe">
            <div v-if="form.errors.mother_name" class="text-xs text-rose-600 mt-1">
                {{ form.errors.mother_name }}
            </div>
        </div>
        <div>
            <label for="mother_contact">Mother's Contact</label>
            <input type="text" v-model="form.mother_contact" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., +256123987654">
            <div v-if="form.errors.mother_contact" class="text-xs text-rose-600 mt-1">
                {{ form.errors.mother_contact }}
            </div>
        </div>
    </div>
</template>
