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
            <div v-if="form.errors.initial_deposit" class="text-xs text-rose-600 mt-1">
                {{ form.errors.initial_deposit }}
            </div>
        </div>
        <div>
            <label for="weekly_deposit">Weekly Deposit</label>
            <input type="number" v-model="form.weekly_deposit" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" min="0" placeholder="e.g., 123">
            <div v-if="form.errors.weekly_deposit" class="text-xs text-rose-600 mt-1">
                {{ form.errors.weekly_deposit }}
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="agreed_months">Agreed Months</label>
            <input type="number" v-model="form.agreed_months" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" min="0" placeholder="e.g., 12">
            <div v-if="form.errors.agreed_months" class="text-xs text-rose-600 mt-1">
                {{ form.errors.agreed_months }}
            </div>
        </div>
        <div>
            <label for="total_weeks">Total Weeks</label>
            <input type="number" v-model="form.total_weeks" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" min="0" placeholder="e.g., 52">
            <div v-if="form.errors.total_weeks" class="text-xs text-rose-600 mt-1">
                {{ form.errors.total_weeks }}
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="selling_price">Selling Price</label>
            <input type="number" v-model="form.selling_price" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" min="0" placeholder="e.g., 50000">
            <div v-if="form.errors.selling_price" class="text-xs text-rose-600 mt-1">
                {{ form.errors.selling_price }}
            </div>
        </div>
        <div>
            <label for="starting_week">Date of Starting Week</label>
            <input type="date" v-model="form.starting_week_date" class="w-full text-gray-900 border-gray-300 text-sm rounded-md">
            <div v-if="form.errors.starting_week_date" class="text-xs text-rose-600 mt-1">
                {{ form.errors.starting_week_date }}
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="agreement_place">Place of Agreement</label>
            <input type="text" v-model="form.agreement_place" class="w-full text-gray-900 border-gray-300 text-sm rounded-md" placeholder="e.g., Kireka">
            <div v-if="form.errors.agreement_place" class="text-xs text-rose-600 mt-1">
                {{ form.errors.agreement_place }}
            </div>
        </div>
    </div>
</template>
