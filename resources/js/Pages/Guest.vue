<script setup="ts">
import {usePage, Head} from "@inertiajs/vue3";

defineProps({
    pins: Array
})

</script>

<template>
    <Head title="Guest"/>
    <div v-for="pin in pins" class="border p-4">
        <p class="font-semibold">User: {{ pin.user.name }}</p>
        <p>{{pin.event_type }}</p>
    </div>
</template>
