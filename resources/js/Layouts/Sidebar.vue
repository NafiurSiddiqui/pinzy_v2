<script setup="ts">

import PinCard from "@/Layouts/PinCard.vue";
</script>


<template>
    <aside
        class="absolute left-0 sidebar -bottom-full transition-all w-full  duration-700 z-30 inw-full border-2 border-zinc-400 tablet:top-0 tablet:relative tablet:bg-aside laptop:w-[30rem] desktop-md:rounded-l-lg bg-zinc-500">

        <div class="sidebar-content-wrapper  h-screen tablet:opacity-100 bg-zinc-500 transition-all duration-500
                    ">
            <nav class="py-4 px-4 drop-shadow-sm shadow-zinc-100 bg-zinc-500">
                <ul class="flex justify-around">
                    <li
                        class="border-r border-r-1 border-r-zinc-400 w-4/5 text-center text-zinc-400 font-semibold  text-base  hover:text-zinc-100 ">
                        <a href="../api/pins.php">Pins</a>
                    </li>
                    <li class="font-semibold w-4/5 text-center nav-active text-base">
                        Profile
                    </li>
                </ul>
            </nav>

            <!-- user info -->
            <div class="guest-user-profile_container flex w-full pt-4 pb-2 px-5 items-center justify-between bg-zinc-500">
                <!-- placeholder -->
                <div
                    class="user-profile_header-user-image border border-zinc-400 w-16 h-16 rounded-full p-2 bg-zinc-500 flex justify-center items-center">

                    <i class="fa-regular fa-user fa-2xl text-zinc-400"></i>
                </div>
                <span class="user-profile-header_user-name ml-2 inline-block font-semibold text-zinc-100 text-2xl">
                     Anonymous
             </span>
                <div class="guest-profile__pin-count-wrapper border border-zinc-400  rounded-sm px-2 py-1 text-center">
            <span class="guest-profile__pin-count font-semibold tablet:text-sm max-w-[2rem] text-zinc-200">
                0
            </span>
                    <i class="fa-solid fa-location-dot text-zinc-300"></i>
                </div>
            </div>

            <!-- pins -->
            <div class="guest-pin-container-wrapper bg-zinc-400 h-76vh laptop:h-76vh/20 relative z-10">
                <p class="default-msg text-center text-zinc-200 font-semibold text-lg top-8 relative italic">

                </p>
                <ul class="guest-pin-container  hidden px-4 pt-8 pb-16 flex items-center flex-col bg-zinc-600 h-68vh overflow-y-scroll"
                    data-userLogged="">
                    <!-- placeholder -->
<!--                    <PinCard v-for="pin in pins" />-->
                </ul>
            </div>
        </div>
        <!-- side footer actions -->

        <div
            class="user-profile-footer hidden w-full tablet:flex justify-center absolute bottom-0 left-0 px-4 py-5 bg-zinc-500 tablet:justify-between z-20">
            <a class="btn-user-logout font-semibold px-4 text-lg flex justify-center rounded-sm ring-4 ring-zinc-300 text-zinc-300 items-center transition-all   hover:text-zinc-50  hover:ring-zinc-100 hover:shadow-md hover:bg-transparent hover:shadow-zinc-100 tablet:flex"
               href="


            ">Logout</a>


            <i
                class="btn-sidebar fa-solid fa-chevron-left tablet:fa-flip-horizontal rounded-sm ring-4 ring-zinc-300 text-zinc-300 p-3 hover:text-zinc-100 hover:font-bold hover:ring-zinc-100 cursor-pointer transition-all hover:shadow-md hover:bg-transparent hover:shadow-zinc-200"></i>
        </div>
    </aside>
    <div
        class="user-profile-footer-mobile w-full flex justify-between fixed bottom-0 bg-white left-0 px-4 py-4 tablet:justify-between tablet:hidden z-30">
        <a class="btn-user-logout font-bold px-4 text-lg flex justify-center rounded-sm ring-4 ring-zinc-400 text-zinc-500 items-center shadow-md transition-allbg-transparent shadow-zinc-600 tablet:flex"
           href="../api/inc/logout.inc.php">Logout</a>

        <i
            class="btn-sidebar-mobile fa-solid fa-chevron-left fa-rotate-90 tablet:fa-flip-horizontal rounded-sm ring-4 p-3 text-zinc-500 font-bold ring-zinc-400 cursor-pointer transition-all shadow-md bg-transparent shadow-zinc-600"></i>

    </div>
</template>
