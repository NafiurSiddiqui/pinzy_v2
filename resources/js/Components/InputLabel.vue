<script setup>
defineProps({
    value: {
        type: String,
    },
    valueFor:{
        type: String,
        required: true
    }
});
</script>

<template>

    <label :for="valueFor"
           class="bg-white dark:bg-surface-900 px-2 absolute  dark:text-primary-400/60 duration-300 transform  text-zinc-400 dark:text-primary-400  top-2 z-10 origin-[0] start-2.5 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:text-surface-500 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:text-primary-500">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
