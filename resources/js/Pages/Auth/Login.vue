<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import FormLayout from "@/Layouts/FormLayout.vue";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <header class="w-full p-2 relative">
        <div><span
            class="font-semibold font-caveat text-zinc-500 text-2xl desktop:ml-6 ml-4 desktop-md:text-4xl ">Pinzy</span>
        </div>
    </header>
    <FormLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form action="./src/api/inc/login.inc.php"
              class="px-8 py-8 border-2 rounded border-zinc-400/80 w-full shadow-md  mt-4 flex justify-center flex-col items-center android-md/2:w-80 tablet-md:w-[21rem] tablet-md:px-6"
              method="POST">
            <div class="flex flex-col  w-full ">

                <div
                    class="text-zinc-400 relative -bottom-[2rem] left-[0.4rem] max-w-max bg-white transition-all duration-300 px-[0.2rem] tablet-md:-bottom-8 ">
                    Username/Email</div>
                <input type="text" spellcheck="false" name="userName" aria-label="User name"
                       class="input-field border-2 border-zinc-400/80 p-2 rounded !appearance-none bg-transparent z-10  focus:!outline-none focus:ring-2 focus:ring-green-400  <?php echo !empty($nameIsEmpty) ? 'border-red-400': '';?>" />

                <span class="input-error-msg text-xs text-red-300 mt-1 ml-1">

    </span>

            </div>
            <div class="flex flex-col w-full">

                <div
                    class="text-zinc-400 relative -bottom-[2rem] left-[0.4rem] max-w-max bg-white transition-all duration-300 px-[0.2rem] tablet-md:-bottom-8 ">
                    Password
                </div>
                <input type="password" name="password" aria-label="Password"
                       class="input-field border-2 border-zinc-400/80 p-2 rounded !appearance-none bg-transparent  focus:!outline-none focus:ring-2 focus:ring-green-400 z-10  <?php
      echo !empty($passwordIsEmpty) ? 'border-red-400': '';?>" />
                <span class="input-error-msg text-xs text-red-300 mt-1 ml-1">
<!--      <?php-->
<!--                            echo !empty($passwordIsEmpty) ? "<i class='fa-solid fa-triangle-exclamation'></i><span class='ml-1'>$passwordIsEmpty</span>" : '';-->
<!--?>-->
    </span>
            </div>
            <button class="btn-user-input-login relative -bottom-4 w-full mt-10 mb-3 h-10 rounded font-semibold text-m text-zinc-50  android-md/2:w-52 android-md:rounded-2xl  border-4 border-green-400  bg-green-400
  laptop:hover:bg-green-500 laptop:hover:border-green-500
    laptop:h-full laptop:py-2 laptop:px-4 transition-colors active:text-zinc-100 " type="submit" name="submit">
                Login
            </button>

            <a href="#" class="mt-8  underline underline-offset-2 text-xs text-green-600  font-semibold">Forgot password?</a>
        </form>
        <!-- optional actions -->
        <div class="flex justify-between android-md/2:w-80 tablet-md:w-[21rem]  w-full mt-8 laptop:mt-10">


            <div class="text-center flex flex-col   w-24 whitespace-nowrap  ">
                <span class="text-xs text-zinc-600">Need an account?</span>
                <a href="./src/api/signup-form.php"
                   class="ml-1 font-bold  text-green-500 laptop:text-green-400 laptop:hover:text-green-500 hover:underline hover:text-green-600 transition-colors">Signup</a>
            </div>

            <div class="text-center  my-1 text-zinc-400 flex justify-center items-center">
                <span class="inline-block border w-8 border-zinc-400/80"></span>
                or
                <span class="inline-block border w-8 border-zinc-400/80"></span>
            </div>

            <div class="text-center  flex flex-col  w-24 whitespace-nowrap   text-zinc-500">
                <span class="text-xs text-zinc-600">Explore as a</span>
                <Link :href="route('guest')"
                   class="ml-1 font-bold  text-green-500 laptop:text-green-400 laptop:hover:text-green-500
                   hover:underline hover:text-green-600 transition-colors">
                    Guest
                </Link>
            </div>

        </div>
    </FormLayout>
</template>
