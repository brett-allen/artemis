<script setup lang="ts">
import { Head, Link, router } from '@inertiajs/vue3';
import SidebarLayout from '../Layouts/SidebarLayout.vue';

import { Chart, ChartData, ChartOptions, registerables } from "chart.js";
import { Line } from 'vue-chartjs'

const props = defineProps<{
  users: object[];
}>();

console.log(props.users)

Chart.register(...registerables)

// gradient.addColorStop(0, 'rgba(224, 195, 155, 1)');
// gradient.addColorStop(1, 'rgba(100, 100, 0,0)');

const options = {
  responsive: true,
  maintainAspectRatio: false,
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

const chartData = {
  labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
  datasets: [
    {
      label: "Dataset 1",
      data: [2, 5, 4, 8, 10, 4, 7],
      tension: 0.3,
      orderWidth: 2,
      borderColor: "teal",
      // backgroundColor: "#46AFD9",
      backgroundColor: (ctx: { chart: { ctx: any; }; } ) => {
        const canvas = ctx.chart.ctx;
        const gradient = canvas.createLinearGradient(0, 0, 0, 360);

        gradient.addColorStop(0, 'teal');
        // gradient.addColorStop(.5, 'white');
        gradient.addColorStop(1, 'white');

        return gradient;
      },
      fill: true

    },
  ],
};

// const data = {
//     labels: [],
//     datasets: [
//       {
//         labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
//         data: [2, 5, 4, 8, 10, 4, 7],
//         tension: 0.3,
//         pointRadius: 0,
//         borderWidth: 2,
//         borderColor: "#46AFD9",
//         backgroundColor: "#46AFD9",
//       }
//     ]
// }

</script>

<template>

  <Head title="Landing" />

  <SidebarLayout>
    <!-- xl: is the breakign point for ipad pro orientation change -->
    <div class="flex flex-col w-full">

      <div class="flex flex-row w-full gap-x-5">
        <div class="stats shadow flex-1">
          <div class="stat">
            <div class="stat-figure text-info">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
              </svg>
            </div>
            <div class="stat-title">Active Menu Expiry</div>
            <div class="stat-value text-info">25 Apr</div>
            <div class="stat-desc">&nbsp;</div>
          </div>
        </div>
        <div class="stats shadow flex-1">
          <div class="stat">
            <div class="stat-figure text-primary">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
              </svg>
            </div>
            <div class="stat-title">Menu Satisfaction</div>
            <div class="stat-value text-primary">88%</div>
            <div class="stat-desc text-base-300">↗︎ 40 (2%)</div>
          </div>
        </div>
        <div class="stats shadow flex-1">
          <div class="stat">
            <div class="stat-figure text-error">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.182 16.318A4.486 4.486 0 0 0 12.016 15a4.486 4.486 0 0 0-3.198 1.318M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
              </svg>
            </div>
            <div class="stat-title">Notifications</div>
            <div class="stat-value text-error">12</div>
            <div class="stat-desc text-base-300">&nbsp;</div>
          </div>
        </div>
      </div>

      <div class="flex-1">
        <Line id="chart" :data="chartData" :options="options" />
      </div>



      <div class="ticker absolute bottom-0">
        <div class="ticker-tape">
          <span><img src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg" /></span>
          <span><img src="https://daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.jpg" /></span>
          <span><img src="https://daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg" /></span>
          <span><img src="https://daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.jpg" /></span>
        </div>
        <div class="ticker-tape">
          <span><img src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg" /></span>
          <span><img src="https://daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.jpg" /></span>
          <span><img src="https://daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg" /></span>
          <span><img src="https://daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.jpg" /></span>
        </div>
      </div>
    </div>

  </SidebarLayout>
</template>
