<script setup>
import TextLink from "@/Components/TextLink.vue";

defineProps({
    routeUrl: {
        type: String,
        required: true
    },

});
</script>

<template>
    <div
        class="flex justify-between android-md/2:w-80 tablet-md:w-[21rem] w-full mt-8 laptop:mt-10"
    >
        <div class="text-center flex flex-col w-24 whitespace-nowrap">
            <span class="text-xs text-zinc-600">Need an account?</span>
            <TextLink :route-url="routeUrl">
                <slot/>
            </TextLink>
        </div>

        <div
            class="text-center my-1 text-zinc-400 flex justify-center items-center"
        >
            <span class="inline-block border w-8 border-zinc-400/80"></span>
            or
            <span class="inline-block border w-8 border-zinc-400/80"></span>
        </div>

        <div
            class="text-center flex flex-col w-24 whitespace-nowrap text-zinc-500"
        >
            <span class="text-xs text-zinc-600">Explore as a</span>
            <TextLink route-url="guest">Guest</TextLink>
        </div>
    </div>
</template>
