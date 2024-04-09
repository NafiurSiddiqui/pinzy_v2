<script setup="ts">
import {usePage} from "@inertiajs/vue3";

// const pins= usePage().props.pins;
const pins= usePage().props.pins;

console.log(pins);
</script>

<template>
    <div v-for="pin in pins" class="border p-4">
        <p class="font-semibold">User: {{ pin.user.name }}</p>
        <p>{{pin.event_type }}</p>
    </div>
</template>
