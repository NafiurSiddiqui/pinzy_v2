<script setup>
import NavLink from "@/Components/NavLink.vue";
import {usePage} from "@inertiajs/vue3";
import {computed} from "vue";

const page = usePage();

const user = computed(() => page.props.auth.user);

console.log(page.props.auth);
</script>

<template>
    <h1>Hello, {{ user.name }}</h1>

    <NavLink :href="route('logout')" method="post" as="button">
        Logout
    </NavLink>

</template>
