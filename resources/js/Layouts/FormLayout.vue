<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
</script>

<template>
    <header class="w-full p-2 relative">
        <div>
            <span
                class="font-semibold font-caveat text-zinc-500 text-2xl desktop:ml-6 ml-4 desktop-md:text-4xl"
            >
                Pinzy
            </span>
        </div>
    </header>
    <div
        class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0"
    >
        <div>
            <ApplicationLogo class="w-20 h-20" />
        </div>

        <div
            class="w-full sm:max-w-md px-6 py-4 bg-white overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
