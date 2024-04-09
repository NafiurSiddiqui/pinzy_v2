<script setup="ts">
import {usePage} from "@inertiajs/vue3";

const pins= usePage().props.pins;

console.log(pins);
</script>

<template>
    <div v-for="pin in pins">
        <p>{{pin.event_type }}</p>
    </div>
</template>
