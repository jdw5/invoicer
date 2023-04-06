<template>
    <AppLayout title="Dashboard">
        <PagePadding>
            <div class="flex justify-between">
                <h1 class="text-xl font-bold">
                    Create Invoice
                </h1>
            </div>
            <form @submit="createInvoice">
                <div class="mt-4">
                    <InputLabel for="name" value="Name" />
                    <TextInput
                        id="name"
                        v-model="invoice.name"
                        type="text"
                        class="mt-1 block w-full"
                        required
                    />
                    <InputError class="mt-2" :message="invoice.errors.name" />
                </div>
                <div>
                    <label>Items</label>
                    <table class="w-full table-fixed divide-y- divide-gray-300">
                        <thead class="bg-blue-100">
                            <tr>
                                <th scope="col" class="text-xs sm:text-sm text-left font-semibold">Title</th>
                                <th scope="col" class="text-xs sm:text-sm text-left font-semibold">Comments</th>
                                <th scope="col" class="text-xs sm:text-sm text-left font-semibold">Quantity</th>
                                <th scope="col" class="hidden sm:block text-xs sm:text-sm text-left font-semibold">Total</th>
                                <th scope="col" class="text-xs sm:text-sm text-left font-semibold">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">
                            <!-- <Invoice :invoice="dummy"></Invoice> -->
                        </tbody>
                    </table>
                    <button type="button" @click="showItemModal = true" class="w-full border-dashed border py-2 px-4">
                        Add
                    </button>
                </div>
                <div class="flex gap-x-4 justify-end">
                    <SecondaryButton>Cancel</SecondaryButton>
                    <PrimaryButton>Create</PrimaryButton>
                </div>
            </form>
        </PagePadding>

        <DialogModal :show="showItemModal" @close="showItemModal = false">
            <template #title>
                Delete Invoice
            </template>
            <template #content>
                <div>
                    <InputLabel for="title" value="Title" />
                    <TextInput
                        id="title"
                        v-model="item.title"
                        type="text"
                        class="mt-1 block w-full"
                        required
                    />
                </div>
                <div>
                    <InputLabel for="comments" value="Comments" />
                    <TextInput
                        id="comments"
                        v-model="item.comments"
                        type="text"
                        class="mt-1 block w-full"
                        required
                    />
                </div>
                <div>
                    Single / Time
                </div>
                <div>
                    
                </div>
            </template>
            <template #footer>
                <div class="flex gap-x-4 justify-end">
                    <SecondaryButton type="button" @click="showItemModal = false">Cancel</SecondaryButton>
                    <PrimaryButton type="button" @click="addItem">Add</PrimaryButton>
                </div>
            </template>
        </DialogModal>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import PagePadding from '@/Components/PagePadding.vue';
import TextInput from '@/Components/TextInput.vue'
import { useForm } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'
import InputLabel from '@/Components/InputLabel.vue'
import InputError from '@/Components/InputError.vue'
import DialogModal from '@/Components/DialogModal.vue'
import { reactive, ref } from 'vue';

const showItemModal = ref(false)
const item = reactive({
    title: '',
    comments: '',
    quantity: 1,
    total: 0
})

const addItem = () => {
    console.log(item)
}

const invoice = useForm({
    name: '',
    items: []
})

const createInvoice = () => {
    // invoice.post(route('invoices.store'))
}

</script>