<script setup lang="ts">
import SidebarLayout from '../Layouts/SidebarLayout.vue';

const props = defineProps<{
  users: object[];
}>();

</script>

<template>

  <Head title="Ingredients" />

  <SidebarLayout>
    <!-- xl: is the breakign point for ipad pro orientation change -->
    <h1 class="text-xl font-semibold">Detail</h1>
    <p>Name</p>
    <p>Display Name</p>
    <p>Brand</p>
    <p>Type</p>
    <p>Group</p>
    <p>Description</p>
    <p>SKU</p>
    <p>ISO</p>
    <p>Barcode</p>
    <p>Cost per unit</p>
    <p>Weight per unit</p>
    <p>raw or cooked</p>

    <h1 class="text-xl font-semibold">Allergens</h1>

    <h1 class="text-xl font-semibold">Nutrients </h1>
    <p>Mandatory</p>
    <p>Other</p>

  </SidebarLayout>
</template>
