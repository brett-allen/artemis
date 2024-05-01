<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import { reactive } from 'vue';

const state = reactive({
  sideshow: false
})

</script>

<template>
  <!-- header -->
  <div class="fixed navbar bg-shakespeare-500 shadow-xl mb-4 z-10">
    <button class="btn btn-ghost btn-square text-white  xl:mr-56" @click="state.sideshow = !state.sideshow">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>
    </button>

    <div class="flex-none gap-2">
      <label class="input input-bordered flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
        </svg>
        <input type="text" class="grow " placeholder="Search" />
      </label>
    </div>
    
  </div>

  <!-- sidebar -->
  <div
    class="bg-dark-grey text-white w-64 fixed inset-y-0 left-0 xl:translate-x-0 transform -translate-x-full transition duration-300 ease-in-out z-20"
    :class="{ 'translate-x-0': state.sideshow }">
    <div class="flex justify-center items-center gap-4 py-2"><img class="size-12 rotate-12 "
        src="/images/su-digit.png"><span class="font-semibold text-2xl">SouperDup</span></div>

    <nav class="flex flex-1 justify-center text-dark-grey py-4">
      <ul class="menu w-56 bg-base-100 rounded-box">
        <li><a>Item 1</a></li>
        <li>
          <details open>
            <summary>Parent</summary>
            <ul>
              <li><a>Submenu 1</a></li>
              <li><a>Submenu 2</a></li>
              <li>
                <details open>
                  <summary>Parent</summary>
                  <ul>
                    <li><a>Submenu 1</a></li>
                    <li><a>Submenu 2</a></li>
                  </ul>
                </details>
              </li>
            </ul>
          </details>
        </li>
        <li><a>Item 3</a></li>
      </ul>
    </nav>
  </div>

  <div id="container" class="relative flex min-h-full pt-16">
    <!-- glass -->
    <div class="absolute inset-0 bg-black/40 z-10 transform duration-300 ease-in-out"
      :class="{ 'block': state.sideshow, 'hidden': !state.sideshow }" @click="state.sideshow = !state.sideshow"></div>

    <!-- Main Content -->
    <div class="flex flex-col flex-1 xl:ml-64">
      <slot />
    </div>
  </div>
</template>