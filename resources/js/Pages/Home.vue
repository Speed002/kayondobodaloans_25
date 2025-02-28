<script setup>
import { Head, Link } from '@inertiajs/vue3'
import Default from '@/Layouts/Default.vue'
import { PlusIcon,  } from '@heroicons/vue/24/outline';

defineOptions({ layout: Default })
</script>

<template>
    <div class="max-w-5xl mx-auto p-8 font-mono">
        <div class="flex-grow portal rounded-md">
                <div class="flex items-center justify-between">
                    <div>
                        Welcome Admin:
                    </div>
                </div>
                <div>

                </div>
            </div>
    </div>

    <Head title="Home" />
</template>
