<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import PagePadding from '@/Components/PagePadding.vue';
import Invoice from '@/Components/Invoice.vue';
import { reactive } from 'vue';
import ExpandButton from '@/Components/ExpandButton.vue';

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
                <!-- <ExpandButton>
                    <template #icon>
                        +
                    </template>
                    <template #text>
                        New Invoice
                    </template>

                </ExpandButton> -->
            </div>
            <table class="w-full table-fixed divide-y- divide-gray-300">
                <thead class="bg-blue-100">
                    <tr>
                        <th scope="col" class="text-xs sm:text-sm text-left font-semibold">#</th>
                        <th scope="col" class="text-xs sm:text-sm text-left font-semibold">Name</th>
                        <th scope="col" class="text-xs sm:text-sm text-left font-semibold">Status</th>
                        <th scope="col" class="hidden sm:block text-xs sm:text-sm text-left font-semibold">Total</th>
                        <th scope="col" class="text-xs sm:text-sm text-left font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <Invoice :invoice="dummy"></Invoice>
                </tbody>
            </table>

        </PagePadding>
    </AppLayout>
</template>
