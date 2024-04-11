<script setup>
defineProps({
    type: String,
});
</script>

<template>
    <!--    <button-->
    <!--        class="btn-user-input-login w-full mb-3 h-10 rounded font-semibold text-m text-zinc-50 android-md/2:w-52 android-md:rounded-2xl border-4 border-green-400 bg-green-400 laptop:hover:bg-green-500 laptop:hover:border-green-500 laptop:h-full laptop:py-2 laptop:px-4 transition-colors active:text-zinc-100"-->
    <!--        type="submit"-->
    <!--        name="submit"-->
    <!--    > -->
    <button
        class="btn-user-input-login w-full mb-3 h-10 rounded font-semibold text-m text-zinc-50 android-md/2:w-52 android-md:rounded-2xl border-4 border-green-400 bg-green-400 laptop:hover:bg-green-500 laptop:hover:border-green-500 laptop:h-full laptop:py-2 laptop:px-4 transition-colors active:text-zinc-100"
        :type="type"
    >
        <slot />
    </button>
</template>
