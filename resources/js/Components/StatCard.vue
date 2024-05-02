<script setup lang="ts">

type StatCardProps = {
  title: string,
  description: string
}

const props = defineProps<StatCardProps>();

</script>

<template>
  <div class="flex w-full shadow-xl p-3 rounded-xl border border-base-200 overflow-hidden">
    <div class="flex flex-col justify-center flex-1">
      <div class="text-lg leading-none text-dark-grey">{{ title }}</div>
      <div class="text-sm text-light-grey line-clamp-2">{{ description }}</div>
      <!-- <div class="text-xs text-light-grey ">{{ description }}</div> -->
    </div>
    <div class="flex w-1/3 justify-center items-center"><slot/></div>
  </div>
</template>

