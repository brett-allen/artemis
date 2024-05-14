<script setup lang="ts">
import SidebarLayout from '@/Layouts/SidebarLayout.vue';

const props = defineProps<{
  users: object[];
}>();

const hideSkeleton = (evt: any, id: string) => {
  (evt.target! as any).hidden = false
  document.getElementById(id)!.hidden = true;
}

</script>

<template>

  <Head title="Ingredients" />

  <SidebarLayout title="Ingredients">
    <!-- xl: is the breakign point for ipad pro orientation change -->
    <div class="m-12 overflow-x-auto shadow-xl">
      <table class="table">
        <!-- head -->
        <thead>
          <tr>
            <th>
              <label>
                <input type="checkbox" class="checkbox" />
              </label>
            </th>
            <th class="uppercase">Name</th>
            <th class="uppercase hidden md:table-cell">Brand</th>
            <th class="uppercase">Type</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="checkbox" class="checkbox" /></td>
            <td class="min-w-[380px]">
              <div class="flex items-center gap-4">
                <div class="avatar">
                  <div class="mask mask-squircle w-24 h-24 ">
                    <div id="a" class="skeleton w-24 h-24"></div>
                    <img hidden @load="hideSkeleton($event, 'a')"
                      :src="`https://picsum.photos/300/300?food,ingredient&d=${Math.random()}`" />
                  </div>
                </div>
                <div>
                  <div class="font-bold">All Bran Flakes</div>
                  <div class="text-sm opacity-50">Pellets added vitamins B1 B2 & folate</div>
                  <div class="badge badge-ghost badge-sm">Cereal based products and dishes</div>
                </div>
              </div>
            </td>
            <td class="hidden md:table-cell">Kellogs</td>
            <td>Box</td>
            <td class="border-r-red-400 border-r-4"></td>
          </tr>
          <tr>
            <td><input type="checkbox" class="checkbox" /></td>
            <td class="min-w-[380px]">
              <div class="flex items-center gap-3">
                <div class="avatar">
                  <div class="mask mask-squircle w-24 h-24 ">
                    <div id="s" class="skeleton w-24 h-24"></div>
                    <img hidden @load="hideSkeleton($event, 's')"
                      :src="`https://picsum.photos/300/300?food,ingredient&d=${Math.random()}`" />
                  </div>
                </div>
                <div>
                  <div class="font-bold">Almond spekulatius, Sweet Biscuit</div>
                  <div class="text-sm opacity-50">Almond spekulatius (butter almond cookie)</div>
                  <div class="badge badge-ghost badge-sm">Cereals and cereal products</div>
                </div>
              </div>
            </td>
            <td class="hidden md:table-cell">Belmont</td>
            <td>Packet</td>
            <td class="border-r-green-400 border-r-4"></td>
          </tr>
        </tbody>
      </table>
    </div>
  </SidebarLayout>
</template>
