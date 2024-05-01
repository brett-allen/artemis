<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import SidebarLayout from '../Layouts/SidebarLayout.vue';

const props = defineProps<{
  users: object[];
}>();

</script>

<template>

  <Head title="Menus" />

  <SidebarLayout>
    <!-- xl: is the breakign point for ipad pro orientation change -->
    <!-- Card 3 -->
    <div class="card w-96 bg-base-100 shadow-xl">
      <div class="card-body">
        <h2 class="card-title">Menus</h2>
        <p>If a dog chews shoes whose shoes does he choose?</p>
        <div class="card-actions justify-end">
          <button class="btn btn-warning">Buy Now</button>
        </div>
      </div>
    </div>
  </SidebarLayout>
</template>
