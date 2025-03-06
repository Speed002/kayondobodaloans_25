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
            <div v-if="form.errors.type" class="text-xs text-rose-600 mt-1">
                {{ form.errors.type }}
            </div>
        </div>
        <div>
            <label for="registered_names">Registered Names</label>
            <input type="text" v-model="form.registered_names" class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
            <div v-if="form.errors.registered_names" class="text-xs text-rose-600 mt-1">
                {{ form.errors.registered_names }}
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="make">Vehicle Make</label>
            <input type="text" v-model="form.make" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., Toyota">
            <div v-if="form.errors.make" class="text-xs text-rose-600 mt-1">
                {{ form.errors.make }}
            </div>
        </div>
        <div>
            <label for="registration">Registration Number</label>
            <input type="text" v-model="form.registration" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., UAA 123A">
            <div v-if="form.errors.registration" class="text-xs text-rose-600 mt-1">
                {{ form.errors.registration }}
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="color">Color</label>
            <input type="text" v-model="form.color" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., Red">
            <div v-if="form.errors.color" class="text-xs text-rose-600 mt-1">
                {{ form.errors.color }}
            </div>
        </div>
        <div>
            <label for="engine">Engine Number</label>
            <input type="text" v-model="form.engine" class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
            <div v-if="form.errors.engine" class="text-xs text-rose-600 mt-1">
                {{ form.errors.engine }}
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="chasis">Chassis Number</label>
            <input type="text" v-model="form.chasis" class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
            <div v-if="form.errors.chasis" class="text-xs text-rose-600 mt-1">
                {{ form.errors.chasis }}
            </div>
        </div>
        <div>
            <label for="condition">Condition</label>
            <select v-model="form.condition" class="w-full bg-transparent-dark text-gray-300 text-sm rounded-md p-2">
                <option value="" class="bg-transparent-dark">Select Condition</option>
                <option value="New" class="bg-transparent-dark">New</option>
                <option value="Old" class="bg-transparent-dark">Old</option>
            </select>
            <div v-if="form.errors.condition" class="text-xs text-rose-600 mt-1">
                {{ form.errors.condition }}
            </div>
        </div>
    </div>
</template>
