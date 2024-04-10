<script setup>
import InputLabel from "@/Components/InputLabel.vue";

defineProps({
    inputTextId: {
        type: String,
        required: true
    },
    labelValueFor: {
        type: String,
        required: true
    },
    labelValue:{
        type: String,
        required: true
    }
})

</script>

<template>
    <div class="relative">
        <InputText :id="inputTextId" autocomplete="off" class="peer" />
        <InputLabel :value-for="labelValueFor" :value="labelValue"/>
    </div>
</template>
