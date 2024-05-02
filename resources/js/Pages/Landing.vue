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
    <!-- xl: is the breaking point for ipad pro orientation change -->
    <div class="flex flex-1 ">

      <div class="flex w-full min-h-28 max-h-28 h-28 p-4 space-x-4">
        <StatCard title="Food Waste" description="food waste is up">
          <span class="text-4xl font-extrabold text-shakespeare-500">10 ↗︎</span>
        </StatCard>
        <StatCard title="Menu Satisfaction" description="peeps not happy ↘︎">
          <span class="text-4xl font-extrabold text-shakespeare-500">20</span>
        </StatCard>
        <StatCard title="Current Menu" description="days until current menu ends rhubarb rhubarb rhubarb rhubarb rhubarb ↗︎">
          <span class="text-4xl font-extrabold text-shakespeare-500">30</span>
        </StatCard>
        <StatCard title="Alert 1" description="description of a thing ↘︎">
          <span class="text-4xl font-extrabold text-shakespeare-500 ">40</span>
        </StatCard>
      </div>
    </div>

  </SidebarLayout>
</template>
