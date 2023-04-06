<template>
    <div class="fixed left-1/2 -translate-x-1/2 bottom-8">
        <div class="flex items-center gap-x-2 max-w-xl rounded overflow-hidden bg-orange-200 px-4 py-2 shadow">
            <div class="text-sm leading-5">
                Lorem100
            </div>
            <button class="hover:stroke-gray-900 stroke-gray-700">
                X
            </button>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';


const show = ref(false)
</script>