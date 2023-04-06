<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import PagePadding from '@/Components/PagePadding.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <PagePadding>
            <Welcome />
        </PagePadding>
    </AppLayout>
</template>
