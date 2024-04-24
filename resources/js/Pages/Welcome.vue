<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';

defineProps<{
    canLogin?: boolean;
    canRegister?: boolean;
    laravelVersion: string;
    phpVersion: string;
}>();


</script>

<template>

    <Head title="Welcome" />

    <div class="flex w-full h-screen justify-center items-center bg-base-">
        <button class="btn btn-primary">Button</button>
        <button class="btn btn-secondary">Button</button>
        <button class="btn btn-warning">Button</button>
        <button class="btn btn-error">Button</button>
    </div>
</template>
