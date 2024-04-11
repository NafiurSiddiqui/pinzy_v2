<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    routeUrl: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Link
        :href="route(routeUrl)"
        class="mt-8 underline underline-offset-2 text-xs text-green-600 hover:text-green-500 font-semibold"
    >
        <slot />
    </Link>
</template>
