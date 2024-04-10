<script setup>
import { onMounted, ref } from 'vue';

const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null);

// onMounted(() => {
//     if (input.value.hasAttribute('autofocus')) {
//         input.value.focus();
//     }
// });
//
// defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
        class="input-field border-2 border-zinc-400/80 p-2 rounded !appearance-none bg-transparent z-10  focus:!outline-none focus:ring-2 focus:ring-green-400"
        v-model="model"
        ref="input"
    />
</template>
