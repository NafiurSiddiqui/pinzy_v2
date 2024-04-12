<script setup>

import NavLink from "@/Components/NavLink.vue";
</script>

<template>
    Map view ma man!

    <NavLink :href="route('logout')" method="post" as="button">
        Logout
    </NavLink>

</template>
