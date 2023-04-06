<template>
    <div class="flex justify-between">
        <h1 class="text-xl font-bold">
            {{ invoice.number }}
        </h1>
        <div class="flex">
            <button class="bg-green-500 text-white px-4 py-2 rounded-md">
                Edit
            </button>
            <button class="bg-red-500 text-white px-4 py-2 rounded-md">
                Delete
            </button>
        </div>
    </div>
    <div class="flex justify-between">
        <div>
            <div class="text-gray-500">
                {{ invoice.date }}
            </div>
            <div class="text-gray-500">
                {{ invoice.due_date }}
            </div>
        </div>
        <div>
            <div class="text-gray-500">
                {{ invoice.status }}
            </div>
            <div class="text-gray-500">
                {{ invoice.total }}
            </div>
        </div>
    </div>

</template>

<script setup>

const props = defineProps({
    invoice: Object
})

</script>