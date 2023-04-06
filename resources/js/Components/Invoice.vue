<template>
    <tr class="hover:bg-gray-50 transition duration-150">
        <td class="py-4 whitespace-nowrap">
            <div class="text-xs sm:text-sm text-gray-900">
                {{ invoice.number }}
            </div>
        </td>
        <td class="py-4 whitespace-nowrap">
            <div class="text-xs sm:text-sm text-gray-900">
                {{ invoice.name }}
            </div>
        </td>
        <td class="py-4 whitespace-nowrap">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                {{ invoice.status }}
            </span>
        </td>
        <td class="hidden sm:table-cell py-4 whitespace-nowrap text-xs text-sm text-gray-500 text-left">
            {{ invoice.total }}
        </td>
        <td class="py-4 whitespace-nowrap text-right text-xs sm:text-sm font-medium">
            <Dropdown align="right" width="48">
                <template #trigger>
                    <svg class="w-6 h-6 stroke-gray-900" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <p class="sr-only">
                        Actions
                    </p>
                </template>

                <template #content>
                    <DropdownLink :href="route('profile.show')">
                        Edit
                    </DropdownLink>
                    <DropdownLink :href="route('profile.show')">
                        Download
                    </DropdownLink>      
                    <DropdownLink :href="route('profile.show')">
                        Delete
                    </DropdownLink>            
                </template>
            </Dropdown>
        </td>
    </tr>

</template>

<script setup>
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';

const props = defineProps({
    invoice: Object
})

</script>