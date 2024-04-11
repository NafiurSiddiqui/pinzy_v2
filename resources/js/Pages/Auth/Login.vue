<script setup>
import {Head, useForm} from "@inertiajs/vue3";
import FormLayout from "@/Layouts/FormLayout.vue";
import {ref} from "vue";
import InputFloatingLabel from "@/Components/InputFloatingLabel.vue";
import Checkbox from "@/Components/Checkbox.vue";
import TextLink from "@/Components/TextLink.vue";
import FormPinzy from "@/Components/FormPinzy.vue";
import LoginOptions from "@/Components/LoginOptions.vue";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const value = ref(null);

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
    // console.log(form);
};


</script>

<template>
    <FormLayout>
        <Head title="Log in"/>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <!--        <form-->
        <!--            @submit.prevent="submit"-->
        <!--            class="px-8 py-8 border-2 rounded border-zinc-400/80 w-full shadow-md mt-4 flex justify-center flex-col items-center android-md/2:w-80 tablet-md:w-[21rem] tablet-md:px-6 space-y-4"-->
        <!--        >-->

        <FormPinzy :submission="submit">
            <InputFloatingLabel
                input-type="email"
                label-value="Email"
                label-value-for="email"
                input-text-id="email"
                v-model="form.email"
                :error-message="form.errors.email"
                required
            />

            <InputFloatingLabel
                input-type="password"
                label-value="Password"
                label-value-for="password"
                input-text-id="password"
                v-model="form.password"
                required
                :error-message="form.errors.password"
            />

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember"/>
                    <span class="ms-2 text-sm text-gray-500">Remember me</span>
                </label>
            </div>

            <Button type="submit"> Login</Button>
            <TextLink route-url="password.request" underline>
                Forgot Password?
            </TextLink>
        </FormPinzy>
        <!-- signup/login options -->
        <LoginOptions route-url="register">Signup</LoginOptions>

    </FormLayout>
</template>
