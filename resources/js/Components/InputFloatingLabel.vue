<script setup>
import InputLabel from "@/Components/InputLabel.vue";
import {ref} from "vue";
import InputError from "@/Components/InputError.vue";

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
    errorMessage: {
        type: String,
        required: true,
        default: ''
    },
});


const model = defineModel({
    type: String,
    required: true,
});

// const model = ref(null);

const input = ref(null);
</script>

<template>
    <div class="flex flex-col w-full relative">
        <InputText
            :type="inputType"
            :id="inputTextId"
            autocomplete="off"
            class="peer"
            v-model="model"
            ref="input"
            :required="required"
        />
        <InputLabel :value-for="labelValueFor" :value="labelValue"/>
        <InputError class="mt-2" :message="errorMessage"/>
    </div>
</template>
