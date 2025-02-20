<script setup>
defineProps({
    form:Object
})
</script>

<template>
    <!-- Step 2 Fields (Vehicle Details) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="type">Vehicle Type</label>
            <input type="text" v-model="form.type" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., Sedan">
        </div>
        <div>
            <label for="registered_names">Registered Names</label>
            <input type="text" v-model="form.registered_names" class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="make">Vehicle Make</label>
            <input type="text" v-model="form.make" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., Toyota">
        </div>
        <div>
            <label for="registration">Registration Number</label>
            <input type="text" v-model="form.registration" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., UAA 123A">
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="color">Color</label>
            <input type="text" v-model="form.color" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., Red">
        </div>
        <div>
            <label for="engine">Engine Number</label>
            <input type="text" v-model="form.engine" class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="chasis">Chassis Number</label>
            <input type="text" v-model="form.chasis" class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
        </div>
        <div>
            <label for="condition">Condition</label>
            <input type="text" v-model="form.condition" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="New or Old">
        </div>
    </div>
</template>
