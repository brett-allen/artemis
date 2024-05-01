<script setup lang="ts">
import { Head, Link, router } from '@inertiajs/vue3';
import SidebarLayout from '../Layouts/SidebarLayout.vue';
import StatCard from '../Components/StatCard.vue';

import { Chart, ChartData, ChartOptions, LineControllerChartOptions, ScriptableContext, registerables } from "chart.js";
import { Line } from 'vue-chartjs'

const props = defineProps<{
  users: object[];
}>();

console.log(props.users)



</script>

<style></style>

<template>

  <Head title="Landing" />

  <SidebarLayout>
    <!-- xl: is the breakign point for ipad pro orientation change -->
    <div class="flex flex-1 ">

      <div class="flex w-full min-h-40 max-h-40 h-40 p-4 space-x-4">
        <StatCard title="Alert 0" description="description of a thing">
          <span class="text-4xl font-extrabold text-cream-can-500">99</span>
        </StatCard>
        <StatCard title="Alert 1" description="description of a thing">
          <span class="text-4xl font-extrabold text-cream-can-500">99</span>
        </StatCard>
        <StatCard title="Alert 1" description="description of a thing">
          <span class="text-4xl font-extrabold text-cream-can-500">99</span>
        </StatCard>
        <StatCard title="Alert 1" description="description of a thing">
         
        </StatCard>
      </div>
    </div>

  </SidebarLayout>
</template>
