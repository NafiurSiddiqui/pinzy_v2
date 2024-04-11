<script setup>
import InputLabel from "@/Components/InputLabel.vue";
import { ref } from "vue";

defineProps({
    inputType: {
        type: String,
        required: true,
    },
    inputTextId: {
        type: String,
        required: true,
    },
    labelValueFor: {
        type: String,
        required: true,
    },
    labelValue: {
        type: String,
        required: true,
    },
    required: {
        type: Boolean,
    },
});
const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null);
</script>

<template>
    <div class="relative">
        <InputText
            :type="inputType"
            :id="inputTextId"
            autocomplete="off"
            class="peer"
            v-model="model"
            ref="input"
            :required="required"
        />
        <InputLabel :value-for="labelValueFor" :value="labelValue" />
    </div>
</template>
