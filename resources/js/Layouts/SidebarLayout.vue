<script setup lang="ts">
import { Link } from '@inertiajs/vue3'



const onShowHide = () => {
    const sidebar = document.querySelector("#sidebar");
    const glass = document.querySelector("#glass") as HTMLElement;
    sidebar?.classList.toggle('-translate-x-full')
    // const classes = ['bg-black/40', 'invisible'];
    if (glass)
        ['bg-black/40', 'invisible'].map(c => glass?.classList.toggle(c))

}

</script>

<template>
    <!-- navbar -->
    <div class="navbar fixed right-0 top-0 left-0 bg-base-100 shadow-lg z-50">
        <div class="flex-none block xl:hidden">
            <button class="btn btn-square btn-ghost" @click="() => onShowHide()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block w-5 h-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
        <div class="flex-1">
            <Link href="/" class="btn btn-ghost text-xl">SouperDup</Link>
        </div>
        <div class="flex-none">
            <button class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block w-5 h-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
                    </path>
                </svg>
            </button>
        </div>
    </div>

    <!-- side menu -->
    <aside id="sidebar"
        class="fixed flex flex-col items-start bottom-0 top-16 w-72 gap-y-5 -translate-x-full xl:translate-x-0 p-4 transition-all duration-300 ease-in-out delay-300 bg-base-100 z-10">
        <header class="flex w-full h-36 justify-center items-center bg-cover rounded-box"
            style="background-image: url('https://unsplash.com/photos/Yn0l7uwBrpw/download?ixid=M3wxMjA3fDB8MXxhbGx8fHx8fHx8fHwxNjg4NjE0MzkxfA&force=true&w=1920');">
            <div
                class="w-3/4 h-1/2 flex justify-center items-center p-8  border border-gray-400/50 rounded-xl bg-gray-400  bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-10  shadow-lg ">
                <span class="text-white font-semibold">Org Name Here</span>
            </div>
        </header>
        <ul class="menu bg-base-200 w-full rounded-box">
            <li>
                <Link href="facilities">Facilities</Link>
            </li>
            <li>
                <Link href="users">Users</Link>
            </li>
            <li>
                <Link href="residents">Residents</Link>
            </li>
            <li>
                <details open>
                    <summary>Catering</summary>
                    <ul>
                        <li>
                            <Link href="catering">Menus</Link>
                        </li>
                        <li>
                            <Link href="catering">Recipes</Link>
                        </li>
                    </ul>
                </details>
            </li>
            <li>
                <Link href="survey">Surveys</Link>
            </li>
        </ul>
    </aside>

    <!-- main body -->
    <div class="relative flex xl:ml-[19rem] mt-20 m-4 h-[calc(100%-96px)] border-2 border-red-500 ">
        <span class="absolute top-0 right-0 text-gray-300">Main Body</span>
        <slot />
    </div>


    <div id="glass" class="fixed inset-0 top-16  invisible z-[1] transition-all duration-300 ease-in-out delay-300">
    </div>
</template>
