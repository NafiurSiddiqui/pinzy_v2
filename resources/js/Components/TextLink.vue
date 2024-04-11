<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    routeUrl: {
        type: String,
        required: true,
    },
    underline: Boolean,
});
</script>

<template>
    <Link
        v-if="underline"
        :href="route(routeUrl)"
        class="mt-8 underline underline-offset-2 text-xs text-green-600 hover:text-green-500 font-semibold"
    >
        <slot />
    </Link>
    <Link
        v-else
        :href="route(routeUrl)"
        class="ml-1 font-bold text-green-500 laptop:text-green-400 laptop:hover:text-green-500 hover:underline hover:text-green-600 transition-colors"
    >
        <slot />
    </Link>
</template>
