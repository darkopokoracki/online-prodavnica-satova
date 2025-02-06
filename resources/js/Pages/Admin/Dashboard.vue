<template>
    <AdminLayout>
        <div>
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4"
            >
                <div
                    class="border-2 border-dashed border-gray-300 p-4 rounded-lg dark:border-gray-600 h-32 md:h-64"
                >
                    <h1
                        class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-3xl dark:text-white"
                    >
                        Brzi linkovi
                    </h1>
                    <ul
                        class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400"
                    >
                        <li>
                            <Link :href="route('home')">
                                Pregled početne stranice
                            </Link>
                        </li>
                        <li>
                            <Link :href="route('products.index')">
                                Svi proizvodi (korisnička strana)
                            </Link>
                        </li>
                        <li>
                            <Link :href="route('about')">
                                Pregled stranice o nama
                            </Link>
                        </li>
                        <li>
                            <Link :href="route('contact')">
                                Pregled kontakt stranice
                            </Link>
                        </li>
                    </ul>
                </div>
                <div
                    class="border-2 border-dashed p-4 rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"
                >
                    <h1
                        class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-3xl dark:text-white"
                    >
                        Registrovani korisnici u aplikaciji
                    </h1>
                    <ul
                        class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400"
                    >
                        <li v-for="user in users">
                            {{ user.name }}
                        </li>
                    </ul>
                </div>
                <div
                    class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"
                ></div>
                <div
                    class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"
                ></div>
            </div>
            <div
                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"
            ></div>
        </div>
    </AdminLayout>
</template>

<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import AdminLayout from "./Components/AdminLayout.vue";
import { Link, router } from "@inertiajs/vue3";

defineProps({
    users: Array,
});

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
});
</script>
