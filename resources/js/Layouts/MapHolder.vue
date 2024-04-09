<script setup="ts">

</script>

<template>
    <section class="map-content w-full">
        <!-- main content -->

        <div class="ml-4 bg-slate-500">
        <span
            class="font-semibold font-caveat text-zinc-500 text-2xl desktop:ml-6 fixed top-2 right-4 z-20 bg-zinc-400/30 backdrop-blur-sm p-3 rounded-sm">Pinzy</span>
        </div>

        <!-- pop up for input-->

        <section
            class="user-input-bg hidden flex flex-col justify-center left-0 items-center h-screen bg-gray-800/40 backdrop-blur-md absolute w-full z-30"
            role="dialog">
        <span class="btn-close__user-input absolute bottom-16 tablet-md:top-16 cursor-pointer" role="button"
              aria-label="Close">
            <i class="fa-sharp fa-regular fa-circle-xmark fa-2xl text-zinc-300  hover:text-zinc-100"></i>
        </span>

            <form action="#"
                  class="user-input-form p-4 rounded-sm pb-8 relative  bg-zinc-50 drop-shadow-md w-4/5 mt-4 flex justify-center flex-col items-center android-md/2:w-80 tablet-md:w-[26rem] tablet-md:rounded tablet-md:px-6 laptop:h-96"
                  id="form-user-input">
                <div class="flex flex-col my-4 w-full">
                    <label class="text-gray-500 text-xs mb-1" for="eventType">Pin type</label>
                    <select name="eventType" id="eventType" class="p-1 cursor-pointer border border-zinc-300 text-gray-500">
                        <option value="none">---</option>
                        <option value="emergency" data-icon="🚨" data-color="-red-500">
                            Emergency 🚨
                        </option>
                        <option value="alert" data-icon="&#9888;" data-color="-yellow-500">
                            Alert &#9888;
                        </option>
                        <option value="event" data-icon="⭐" data-color="-orange-500">
                            Event ⭐
                        </option>
                        <option value="review" data-icon="🤔" data-color="-violet-500">
                            Review 🤔
                        </option>
                        <option value="touristAttraction" data-icon="🌐" data-color="-teal-500">
                            Tourist Attraction 🌐
                        </option>
                        <option value="recreational" data-icon="😎" data-color="-yellow-900">
                            Recreational 😎
                        </option>
                    </select>
                </div>

                <div class="flex flex-col w-full">
                    <label class="text-gray-500 text-xs mb-1" for="message">Message</label>

                    <textarea
                        class="rounded-sm border border-zinc-300 p-2 resize-none focus:outline-none focus:ring-2 focus:ring-zinc-500 "
                        name="message" id="message" cols="30" rows="4" maxlength="200"></textarea>
                </div>
                <button
                    class="btn-user-input w-full mt-10 mb-3 h-10 rounded-full bg-green-400 font-semibold text-m text-zinc-100 android-md/2:w-52 android-md:rounded-2xl ring-4 ring-green-400  hover:text-zinc-50 hover:font-bold  active:text-zinc-100 disabled:ring-zinc-200 disabled:!text-zinc-300 disabled:!font-normal disabled:!bg-transparent disabled:hover:shadow-none   laptop:border-zinc-300  laptop:hover:bg-green-400 laptop:hover:text-zinc-100 laptop:hover:border-green-400 transition-colors  hover:shadow-md hover:shadow-zinc-700"
                    type="submit" name="user-submit" disabled>
                    Pin
                </button>
            </form>

        </section>

        <!-- pop up for edit -->
        <section
            class="user-input-bg__edit hidden  flex flex-col justify-center left-0 items-center h-screen bg-gray-800/40 backdrop-blur-md absolute w-full z-30"
            role="dialog">
        <span class="btn-close__user-input absolute bottom-16 tablet-md:top-16 cursor-pointer" role="button"
              aria-label="Close">
            <i class="fa-sharp fa-regular fa-circle-xmark fa-2xl text-zinc-300  hover:text-zinc-100"></i>
        </span>

            <form action="#"
                  class="user-input-form__edit p-4 rounded-sm pb-8 relative  bg-zinc-50 drop-shadow-md w-4/5 mt-4 flex justify-center flex-col items-center android-md/2:w-80 tablet-md:w-[26rem] tablet-md:rounded tablet-md:px-6 laptop:h-96"
                  id="form-user-input__edit">
                <div class="flex flex-col my-4 w-full">
                    <label class="text-gray-500 text-xs mb-1" for="eventType__edit">Pin type</label>
                    <select name="eventType__edit" id="eventType__edit"
                            class="p-1 cursor-pointer border border-zinc-300 text-gray-500">
                        <option value="none">---</option>
                        <option value="emergency" data-icon="🚨" data-color="-red-500">
                            Emergency 🚨
                        </option>
                        <option value="alert" data-icon="&#9888;" data-color="-yellow-500">
                            Alert &#9888;
                        </option>
                        <option value="event" data-icon="⭐" data-color="-orange-500">
                            Event ⭐
                        </option>
                        <option value="review" data-icon="🤔" data-color="-violet-500">
                            Review 🤔
                        </option>
                        <option value="touristAttraction" data-icon="🌐" data-color="-teal-500">
                            Tourist Attraction 🌐
                        </option>
                        <option value="recreational" data-icon="😎" data-color="-yellow-900">
                            Recreational 😎
                        </option>
                    </select>
                </div>
                <div class="flex flex-col w-full">
                    <label class="text-gray-500 text-xs mb-1" for="message__edit">Message</label>

                    <textarea
                        class="rounded-sm border border-zinc-300 p-2 resize-none focus:outline-none focus:ring-2 focus:ring-zinc-500 "
                        name="message__edit" id="message__edit" cols="30" rows="4" maxlength="200"></textarea>
                </div>
                <button
                    class="btn-user-input__edit w-full mt-10 mb-3 h-10 rounded-full bg-green-400 font-semibold text-m text-zinc-100 android-md/2:w-52 android-md:rounded-2xl ring-4 ring-green-400  hover:text-zinc-50 hover:font-bold  active:text-zinc-100 disabled:ring-zinc-200 disabled:!text-zinc-300 disabled:!font-normal disabled:!bg-transparent disabled:hover:shadow-none  laptop:border-zinc-300  laptop:hover:bg-green-400 laptop:hover:text-zinc-100 laptop:hover:border-green-400 transition-colors  hover:shadow-md hover:shadow-zinc-700"
                    type="submit" name="guest-submit-edit" disabled>
                    Pin
                </button>
            </form>

        </section>

        <!-- map -->
        <div class="map-container h-screen z-10 flex justify-center items-center">
            <div class="loader-wrapper hidden justify-between items-center w-60 absolute top-80 z-20">
                <div class="">
                    <img src="../assets/spinner.svg" alt="globe" class="w-16 spinner spin " />
                </div>

                <span class="text-4xl text-zinc-600 "> Loading...</span>
            </div>
            <div id="map" class="h-screen z-10 w-full"></div>
        </div>
    </section>
</template>
