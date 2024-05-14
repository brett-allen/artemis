<script setup lang="ts">
import SidebarLayout from '../Layouts/SidebarLayout.vue';

const props = defineProps<{
  users: object[];
}>();

</script>

<template>

  <Head title="Recipies" />

  <SidebarLayout>
    <!-- xl: is the breakign point for ipad pro orientation change -->
    <div class="hero h-full bg-base-200">
      <div class="hero-content text-center">
        <div class="max-w-md">
          <h1 class="text-5xl font-bold">Food Safety</h1>
          <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
            quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
          <button class="btn btn-primary">Get Started</button>
        </div>
      </div>
    </div>
  </SidebarLayout>
</template>
