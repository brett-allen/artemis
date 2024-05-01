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

Chart.register(...registerables)

const options = {
  responsive: true,
  maintainAspectRatio: false,
  animation: {
    duration: 0
  },
  interaction: {
    intersect: false,
  },
  plugins: {
    tooltip: {
      enabled: false
    }
  },
  scales: {
    x: {
      display: true,
      grid: {
        display: true
      }
    },
    y: {
      display: true,
      grid: {
        display: true
      }
    }
  }
}

const sparkOptions:ChartOptions<'line'> = {
  responsive: true,
  maintainAspectRatio: false,
  animation: {
    duration: 0
  },
  interaction: {
    intersect: false,
  },
  plugins: {
    legend: {
      display: false
    },
    tooltip: {
      enabled: false
    }
  },
  scales: {
    x: {
      display: false,
      grid: {
        display: false
      }
    },
    y: {
      display: false,
      grid: {
        display: false
      }
    }
  }
}

const chartData: ChartData<"line"> = {
  labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
  datasets: [
    {
      label: "Dataset 1",
      data: [
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10),
        Math.floor(Math.random() * (50 - 10 + 1) + 10)],
      tension: 0.4,
      pointRadius: 0,
      pointHoverRadius: 0,
      borderColor: "purple",
      borderWidth: 2,
      // backgroundColor: (ctx: ScriptableContext<"line">) => {
      //   const canvas = ctx.chart.ctx;
      //   const gradient = canvas.createLinearGradient(0, 0, 0, ctx.chart.height);

      //   gradient.addColorStop(0, 'purple');
      //   // gradient.addColorStop(.5, 'white');
      //   gradient.addColorStop(1, 'white');

      //   return gradient;
      // },
      // fill: true
    },
  ],
};


</script>

<style>

</style>

<template>

  <Head title="Landing" />

  <SidebarLayout>
    <!-- xl: is the breakign point for ipad pro orientation change -->
    <div class="grid grid-rows-3 h-full">

      <div class="flex w-full min-h-40 max-h-40 h-40 p-4 gap-x-5">
        <StatCard title="Card 0">
          <Line id="chart" :data="chartData" :options="sparkOptions" />
        </StatCard>
        <StatCard title="Card 1">
          <Line id="chart" :data="chartData" :options="sparkOptions" />
        </StatCard>
        <StatCard title="Card 2">
          <Line id="chart" :data="chartData" :options="sparkOptions" />
        </StatCard>
        <StatCard title="Card 3">
          <Line id="chart" :data="chartData" :options="sparkOptions" />
        </StatCard>
      </div>

      <div class="flex-1">
        <Line id="chart" :data="chartData" :options="options" />
      </div>

      <div class="ticker">
        <ul>
          <li><img src="https://assets-au.soupedup.io/marketing_updates/18-.png?lu=1713846234" /></li>
          <li><img src="https://app.soupedup.io/images/subscribe.jpg" /></li>
          <li><img src="https://assets-au.soupedup.io/marketing_updates/23-.png?lu=1682550314" /></li>
        </ul>
        <ul>
          <li><img src="https://assets-au.soupedup.io/marketing_updates/18-.png?lu=1713846234" /></li>
          <li><img src="https://app.soupedup.io/images/subscribe.jpg" /></li>
          <li><img src="https://assets-au.soupedup.io/marketing_updates/23-.png?lu=1682550314" /></li>
        </ul>
      </div>
    </div>

  </SidebarLayout>
</template>
