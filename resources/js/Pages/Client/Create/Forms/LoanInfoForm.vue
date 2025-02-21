<script setup>
defineProps({
    form:Object
})
</script>

<template>
    <!-- Step 4 Fields (Financial Agreement) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="initial_deposit">Initial Deposit</label>
            <input type="number" v-model="form.initial_deposit" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" min="0" placeholder="e.g., 123">
        </div>
        <div>
            <label for="weekly_deposit">Weekly Deposit</label>
            <input type="number" v-model="form.weekly_deposit" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" min="0" placeholder="e.g., 123">
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="agreed_months">Agreed Months</label>
            <input type="number" v-model="form.agreed_months" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" min="0" placeholder="e.g., 12">
        </div>
        <div>
            <label for="total_weeks">Total Weeks</label>
            <input type="number" v-model="form.total_weeks" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" min="0" placeholder="e.g., 52">
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="selling_price">Selling Price</label>
            <input type="number" v-model="form.selling_price" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" min="0" placeholder="e.g., 50000">
        </div>
        <div>
            <label for="starting_week">Date of Starting Week</label>
            <input type="date" v-model="form.starting_week_date" class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="agreement_place">Place of Agreement</label>
            <input type="text" v-model="form.agreement_place" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., Kireka">
        </div>
    </div>
</template>
