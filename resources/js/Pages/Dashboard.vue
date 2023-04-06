<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import PagePadding from '@/Components/PagePadding.vue';
import Invoice from '@/Components/Invoice.vue';
import { reactive } from 'vue';

const dummy = reactive({
    number: 5,
    name: 'Invoice',
    due_date: '2021-01-01',
    status: 'Paid',
    total: 1000
})
</script>

<template>
    <AppLayout title="Dashboard">
        <PagePadding>
            <div class="flex justify-between">
                <h1 class="text-xl font-bold">
                    Invoices
                </h1>
                <button class="px-4 py-2 border border-gray-500 rounded">
                    New Invoice
                </button>
            </div>
            <table class="w-full table-fixed">
                <thead>
                    <tr>
                        <th scope="col" class="text-xs sm:text-sm">#</th>
                        <th scope="col" class="text-xs sm:text-sm">Name</th>
                        <th scope="col" class="text-xs sm:text-sm">Status</th>
                        <th scope="col" class="hidden sm:block text-xs sm:text-sm">Total</th>
                        <th scope="col" class="text-xs sm:text-sm">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <Invoice :invoice="dummy"></Invoice>
                </tbody>
            </table>

        </PagePadding>
    </AppLayout>
</template>
