<script setup>
defineProps({
    // submission: {
    //     type: Function,
    //     required: true,
    // },
    submission: Function,
});
</script>

<template>
    <form
        @submit.prevent="submission"
        class="px-8 py-8 border-2 rounded border-zinc-400/80 w-full shadow-md mt-4 flex justify-center flex-col items-center android-md/2:w-80 tablet-md:w-[21rem] tablet-md:px-6 space-y-4"
    >
        <slot />
    </form>
</template>
