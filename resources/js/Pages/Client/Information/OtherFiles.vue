<script setup>
import { router, usePage, Link } from '@inertiajs/vue3';
import { reactive, ref, computed } from 'vue'
import { createUpload } from '@mux/upchunk'
const props = defineProps({
    files:Object,
    client:Object
})

const file = ref(null)

const initialState = {
    file: null,
    uploader: null,
    progress: 0,
    uploading: false,
    error: null,
}

const state = reactive({
    ...initialState,
    formattedProgress: computed(() => Math.round(state.progress)),
    reset: () => {
        Object.assign(state, initialState)
    }
})

const cancel = () => {
    state.uploader.abort()
    state.reset()
}


const UploadFile = () => {
    // console.log(123);

    state.file = file.value.files[0]
    // console.log(state.file)

    if (!state.file) {
        return
    }

    state.uploader = createUpload({
        endpoint: route('files.store', `${props.client.id}`),
        headers: {
            'X-CSRF-TOKEN': usePage().props.csrf_token
        },
        method: 'post',
        file: state.file,
        chunkSize: 10 * 1024 // 10mb
    })

    state.uploader.on('attempt', () => {
        state.error = null
        state.uploading = true
    })

    state.uploader.on('progress', (p) => {
        state.progress = p.detail
    })

    state.uploader.on('success', () => {
        state.reset()

        router.reload({
            only: ['files'],
            preserveScroll: true
        })
    })

    state.uploader.on('error', (error) => {
        state.error = error.detail.message
    })
}

</script>
<template >
    <div class="space-y-3">
        <h2 class="text-sm">Upload and download client files here</h2>
        <form v-on:submit.prevent="UploadFile" class="flex flex-col space-y-3 border border-dashed border-sky-500 p-2 rounded-md">
            <div class="flex items-center justify-between gap-1 ">
                <input class="flex-grow p-2 rounded-md border border-gray-300 bg-white text-gray-500 overflow-hidden whitespace-nowrap w-40" type="file" name="file" ref="file" placeholder="Upload a file">
                <button type="submit" class="bg-nav-blue rounded-md text-gray-300 text-sm p-2">
                    Upload
                </button>
            </div>
            <div v-if="state.uploading" class="space-y-2">
                <div class="bg-gray-100 shadow-inner h-3 rounded overflow-hidden">
                    <div class="bg-sky-500 h-full transition-all duration-200" v-bind:style="{ width: state.progress + '%' }"></div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <button class="text-sm text-sky-500" v-if="!state.uploader.paused" v-on:click="state.uploader.pause()">Pause</button>
                        <button class="text-sm text-sky-500" v-if="state.uploader.paused" v-on:click="state.uploader.resume()">Resume</button>

                        <button class="text-sm text-sky-500" v-on:click="cancel">Cancel</button>
                    </div>
                    <div class="text-sm">
                        {{ state.formattedProgress }}%
                    </div>
                </div>
                <div v-if="state.error" class="text-sm text-rose-700">
                    {{ state.error }}
                </div>
            </div>
        </form>
        <div v-if="files.length" class="bg-transparent-dark p-3 rounded-md">
            <div v-for="file in files" v-bind:key="file.id">
                <div class="flex items-center justify-between">
                    <span>{{ file.file_path.slice(0, 30) }}{{ file.file_path.length > 30 ? '...' : '' }}</span>
                    <a :href="route('files.download', file.id)" class="text-sm text-sky-500">
                        Download
                    </a>
                </div>
            </div>
        </div>
        <div v-else class="bg-transparent-dark p-3 rounded-md text-sm">
            No files found. Please select and upload a file.
        </div>
    </div>
</template>

