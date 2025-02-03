<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from 'vue'
const canLogin = usePage().props.canLogin;
const canRegister = usePage().props.canRegister;
const auth = usePage().props.auth;
const cart = computed(() => usePage().props.cart);

defineProps({
    fullName: String,
    emailAddress: String
 })

// const fullName = usePage().attrs.auth.user.name;
// const emailAddress = usePage().attrs.auth.user.email;
const handleLogout = () => {
    // Force a page reload after a short delay
    setTimeout(() => {
        window.location.reload();
    }, 500);
};
</script>

<template>
    <header>
        <nav
            class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800"
        >
            <div
                class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl"
            >
                <Link :href="route('home')" class="flex items-center">
                    <img
                        src="assets/darko-satovi-logo.png"
                        class="mr-3 h-6 sm:h-9"
                        alt="Flowbite Logo"
                    />
                    <span
                        class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"
                        >Darko Satovi</span
                    >
                </Link>

                <div class="flex items-center lg:order-2">
                    <Link
                        v-if="canLogin && !auth.user"
                        :href="route('login')"
                        class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800"
                        >Prijava</Link
                    >
                    <Link
                        v-if="canRegister && !auth.user"
                        :href="route('register')"
                        class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800"
                        >Registracija</Link
                    >

                    <button
                        type="button"
                        class="relative inline-flex items-center p-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >
                        <Link :href="route('cart.view')">
                            <svg
                            class="w-6 h-6 text-white dark:text-white"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="30"
                            height="30"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"
                            />
                        </svg>
                        </Link>


                        <span class="sr-only">Notifications</span>
                        <div
                            class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -end-2 dark:border-gray-900"
                        >
                        {{ cart.data.count }}
                        </div>
                    </button>

                    <button
                        data-collapse-toggle="mobile-menu-2"
                        type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2"
                        aria-expanded="false"
                    >
                        <span class="sr-only">Open main menu</span>
                        <svg
                            class="w-6 h-6"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        <svg
                            class="hidden w-6 h-6"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </button>
                    <button
                        v-if="auth.user"
                        type="button"
                        class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button"
                        aria-expanded="false"
                        data-dropdown-toggle="dropdown"
                    >
                        <span class="sr-only">Open user menu</span>
                        <img
                            class="w-8 h-8 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gough.png"
                            alt="user photo"
                        />
                    </button>
                    <!-- Dropdown menu -->
                    <div
                        class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
                        id="dropdown"
                    >
                        <div class="py-3 px-4">
                            <span
                                class="block text-sm font-semibold text-gray-900 dark:text-white"
                                >  {{ fullName }}</span
                            >
                            <span
                                class="block text-sm text-gray-900 truncate dark:text-white"
                                > {{ emailAddress }} </span
                            >
                        </div>
                        <ul
                            class="py-1 text-gray-700 dark:text-gray-300"
                            aria-labelledby="dropdown"
                        >
                            <li>
                                <Link
                                    :href="route('profile.edit')"
                                    class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                                    >Podešavanja profila</Link
                                >
                            </li>
                        </ul>
                        <ul
                            class="py-1 text-gray-700 dark:text-gray-300"
                            aria-labelledby="dropdown"
                        >
                            <li>
                                <Link
                                    :href="route('dashboard')"
                                    class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    ><svg
                                        class="mr-2 w-5 h-5 text-gray-400"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"
                                        ></path>
                                    </svg>
                                    Kupljeni proizvodi</Link
                                >
                            </li>
                        </ul>
                        <ul
                            class="py-1 text-gray-700 dark:text-gray-300"
                            aria-labelledby="dropdown"
                        >
                            <li>
                                <Link
                                    :href="route('logout')"
                                    method="post"
                                    as="button"
                                    class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    >Odjavi se</Link
                                >
                            </li>
                        </ul>
                    </div>
                </div>

                <div
                    class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1"
                    id="mobile-menu-2"
                >
                    <ul
                        class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0"
                    >
                        <li>
                            <Link
                                :href="route('home')"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                                >Početna</Link
                            >
                        </li>
                        <li>
                            <a
                                :href="route('products.index')"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                                >Svi proizvodi</a
                            >
                        </li>
                        <li>
                            <a
                                :href="route('about')"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                                >O nama</a
                            >
                        </li>
                        <li>
                            <a
                               :href="route('contact')"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                                >Kontakt</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</template>
