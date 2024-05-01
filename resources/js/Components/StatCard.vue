<script setup lang="ts">

type StatCardProps = {
  title: string,
  description: string
}

const props = defineProps<StatCardProps>();

</script>

<template>
  <div class="w-full shadow-xl p-4 rounded-xl border border-base-200">
    <div class="text-md leading-none">{{ title }}</div>
    <div class="text-sm text-base-300 leading-none">{{ description }}</div>
  </div>
</template>

<!-- <template>
  <div class="card card-compact w-full bg-base-100 shadow-xl">
    <div class="card-body gap-0">
      <header class="text-base-content/60 ">
        <p class="text-xl ">{{ title }}</p>
      </header>
      <div class="flex w-full max-w-full h-1/2 ">
        <slot />
      </div>
      <p class="text-sm ">{{ description }}</p>
    </div>
  </div>
</template> -->
