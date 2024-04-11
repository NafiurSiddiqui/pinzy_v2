<script setup>
import {Head, useForm} from "@inertiajs/vue3";
import FormLayout from "@/Layouts/FormLayout.vue";
import FormPinzy from "@/Components/FormPinzy.vue";
import InputFloatingLabel from "@/Components/InputFloatingLabel.vue";
import LoginOptions from "@/Components/LoginOptions.vue";

const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const submit = () => {
    form.post(route("register"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <FormLayout>
        <Head title="Register"/>

        <FormPinzy submission="submit">
            <InputFloatingLabel
                label-value="Name"
                label-value-for="name"
                input-text-id="name"
                input-type="text"
                required
                :error-message="form.errors.name"
                v-model="form.name"
            />
            <InputFloatingLabel
                label-value="Email"
                label-value-for="email"
                input-text-id="email"
                input-type="email"
                :error-message="form.errors.email"
                v-model="form.email"
            />
            <InputFloatingLabel
                label-value="Password"
                label-value-for="password"
                input-text-id="password"
                input-type="password"
                required
                :error-message="form.errors.password"
                v-model="form.password"
                autocomplete="new-password"
            />
            <InputFloatingLabel
                label-value="Confirm Password"
                label-value-for="password_confirmation"
                input-text-id="password_confirmation"
                input-type="password"
                required
                :error-message="form.errors.password_confirmation"
                v-model="form.password_confirmation"
                autocomplete="new-password"
            />

            <!--            <div class="mt-4">-->
            <!--                <InputLabel for="email" value="Email" />-->

            <!--                <TextInput-->
            <!--                    id="email"-->
            <!--                    type="email"-->
            <!--                    class="mt-1 block w-full"-->
            <!--                    v-model="form.email"-->
            <!--                    required-->
            <!--                    autofocus-->
            <!--                    autocomplete="username"-->
            <!--                />-->

            <!--                <InputError class="mt-2" :message="form.errors.email" />-->
            <!--            </div>-->

            <!--            <div class="mt-4">-->
            <!--                <InputLabel for="password" value="Password" />-->

            <!--                <TextInput-->
            <!--                    id="password"-->
            <!--                    type="password"-->
            <!--                    class="mt-1 block w-full"-->
            <!--                    v-model="form.password"-->
            <!--                    required-->
            <!--                    autocomplete="new-password"-->
            <!--                />-->

            <!--                <InputError class="mt-2" :message="form.errors.password" />-->
            <!--            </div>-->

            <!--            <div class="mt-4">-->
            <!--                <InputLabel-->
            <!--                    for="password_confirmation"-->
            <!--                    value="Confirm Password"-->
            <!--                />-->

            <!--                <TextInput-->
            <!--                    id="password_confirmation"-->
            <!--                    type="password"-->
            <!--                    class="mt-1 block w-full"-->
            <!--                    v-model="form.password_confirmation"-->
            <!--                    required-->
            <!--                    autocomplete="new-password"-->
            <!--                />-->

            <!--                <InputError-->
            <!--                    class="mt-2"-->
            <!--                    :message="form.errors.password_confirmation"-->
            <!--                />-->
            <!--            </div>-->

            <!--            <div class="flex items-center justify-end mt-4">-->
            <!--                <Link-->
            <!--                    :href="route('login')"-->
            <!--                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"-->
            <!--                >-->
            <!--                    Already registered?-->
            <!--                </Link>-->

            <Button type="submit"> Register</Button>
            <!--            <TextLink route-url="login"> Already registered?</TextLink>-->
            <!--                <PrimaryButton-->
            <!--                    class="ms-4"-->
            <!--                    :class="{ 'opacity-25': form.processing }"-->
            <!--                    :disabled="form.processing"-->
            <!--                >-->
            <!--                    Register-->
            <!--                </PrimaryButton>-->
            <!--            </div>-->
        </FormPinzy>
        <LoginOptions route-url="login">
            Login
        </LoginOptions>
    </FormLayout>

</template>
