<script setup lang="ts">
import { Head, Link, router } from '@inertiajs/vue3';
import SidebarLayout from '../Layouts/SidebarLayout.vue';

const props = defineProps<{
    users: object[];
}>();

console.log(props.users)
// var ctx = document.getElementById('chart')?.getContext('2d');

// var gradient = ctx.createLinearGradient(0, 0, 0, 300);
// gradient.addColorStop(0, 'rgba(224, 195, 155, 1)');
// gradient.addColorStop(1, 'rgba(100, 100, 0,0)');

// var myChart = new Char(ctx, {
//   type: 'line',
//   data: {
//     labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
//     datasets: [{
//       backgroundColor: 'red',
//       label: 'Numbers',
//       fill: true,
//       data: [12, 19, 3, 5, 2, 3],
//     }]
//   },
//   options: {
//     scales: {
//       y: {
//         beginAtZero: true
//       }
//     },
//     tension: 0.3
//   }
// });

</script>

<template>

    <Head title="Landing" />

    <SidebarLayout>
        <!-- xl: is the breakign point for ipad pro orientation change -->
        <div class="flex flex-row w-full justify-evenly">
            <Link href="catering" class="w-1/3 px-16">
            <div class="stats shadow">
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
            </Link>
            <Link href="survey" class="w-1/3 px-16">
            <div class="stats shadow">
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
            </Link>
            <Link href="survey" class="w-1/3 px-16">
            <div class="stats shadow w-full">
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
            </Link>
        </div>

        <canvas id="chart" width="800" height="400"></canvas>

        <div class="ticker-container ">
            <ol class="ticker-list">
                <li>
                    <div
                        class="flex flex-col items-center justify-between h-60 w-60 p-2 border border-primary shadow-xl">
                        <img class="w-full h-1/2 object-cover"
                            :src="`https://source.unsplash.com/random?food&${Math.random()}`" />
                        <div class="max-w-full full h-1/2 text-wrap break-words">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid ipsum deserunt
                            eum
                            unde voluptas sequi odio dicta alias quo.
                        </div>
                    </div>
                </li>
                <li>
                    <div
                        class="flex flex-col items-center justify-between h-60 w-60 p-2 border border-primary shadow-xl">
                        <img class="w-full h-1/2 object-cover"
                            :src="`https://source.unsplash.com/random?food&${Math.random()}`" />
                        <div class="max-w-full full h-1/2 text-wrap break-words">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid ipsum deserunt
                            eum
                            unde voluptas sequi odio dicta alias quo.
                        </div>
                    </div>
                </li>
                <li>
                    <div
                        class="flex flex-col items-center justify-between h-60 w-60 p-2 border border-primary shadow-xl">
                        <img class="w-full h-1/2 object-cover"
                            :src="`https://source.unsplash.com/random?food&${Math.random()}`" />
                        <div class="max-w-full full h-1/2 text-wrap break-words">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid ipsum deserunt
                            eum
                            unde voluptas sequi odio dicta alias quo.
                        </div>
                    </div>
                </li>
                <li>
                    <div
                        class="flex flex-col items-center justify-between h-60 w-60 p-2 border border-primary shadow-xl">
                        <img class="w-full h-1/2 object-cover"
                            :src="`https://source.unsplash.com/random?food&${Math.random()}`" />
                        <div class="max-w-full full h-1/2 text-wrap break-words">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid ipsum deserunt
                            eum
                            unde voluptas sequi odio dicta alias quo.
                        </div>
                    </div>
                </li>
                <li>
                    <div
                        class="flex flex-col items-center justify-between h-60 w-60 p-2 border border-primary shadow-xl">
                        <img class="w-full h-1/2 object-cover"
                            :src="`https://source.unsplash.com/random?food&${Math.random()}`" />
                        <div class="max-w-full full h-1/2 text-wrap break-words">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid ipsum deserunt
                            eum
                            unde voluptas sequi odio dicta alias quo.
                        </div>
                    </div>
                </li>

            </ol>
            <ol class="ticker-list">
                <li>
                    <div
                        class="flex flex-col items-center justify-between h-60 w-60 p-2 border border-primary shadow-xl">
                        <img class="w-full h-1/2 object-cover"
                            :src="`https://source.unsplash.com/random?food&${Math.random()}`" />
                        <div class="max-w-full full h-1/2 text-wrap break-words">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid ipsum deserunt
                            eum
                            unde voluptas sequi odio dicta alias quo.
                        </div>
                    </div>
                </li>
                <li>
                    <div
                        class="flex flex-col items-center justify-between h-60 w-60 p-2 border border-primary shadow-xl">
                        <img class="w-full h-1/2 object-cover"
                            :src="`https://source.unsplash.com/random?food&${Math.random()}`" />
                        <div class="max-w-full full h-1/2 text-wrap break-words">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid ipsum deserunt
                            eum
                            unde voluptas sequi odio dicta alias quo.
                        </div>
                    </div>
                </li>
                <li>
                    <div
                        class="flex flex-col items-center justify-between h-60 w-60 p-2 border border-primary shadow-xl">
                        <img class="w-full h-1/2 object-cover"
                            :src="`https://source.unsplash.com/random?food&${Math.random()}`" />
                        <div class="max-w-full full h-1/2 text-wrap break-words">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid ipsum deserunt
                            eum
                            unde voluptas sequi odio dicta alias quo.
                        </div>
                    </div>
                </li>
                <li>
                    <div
                        class="flex flex-col items-center justify-between h-60 w-60 p-2 border border-primary shadow-xl">
                        <img class="w-full h-1/2 object-cover"
                            :src="`https://source.unsplash.com/random?food&${Math.random()}`" />
                        <div class="max-w-full full h-1/2 text-wrap break-words">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid ipsum deserunt
                            eum
                            unde voluptas sequi odio dicta alias quo.
                        </div>
                    </div>
                </li>
                <li>
                    <div
                        class="flex flex-col items-center justify-between h-60 w-60 p-2 border border-primary shadow-xl">
                        <img class="w-full h-1/2 object-cover"
                            :src="`https://source.unsplash.com/random?food&${Math.random()}`" />
                        <div class="max-w-full full h-1/2 text-wrap break-words">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid ipsum deserunt
                            eum
                            unde voluptas sequi odio dicta alias quo.
                        </div>
                    </div>
                </li>

            </ol>
        </div>

    </SidebarLayout>
</template>
