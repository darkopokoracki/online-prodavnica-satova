<script setup>
// Import User Layout
import UserLayouts from "./Layouts/UserLayouts.vue";
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import Filter from "./Layouts/Filter.vue";
import { Link, router } from "@inertiajs/vue3";
import Hero from "./Layouts/Hero.vue";
import Products from "./Components/Products.vue";
defineProps({
    products: Array,
    fullName: String,
    emailAddress: String,
});

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
});
</script>

<template>
    <UserLayouts :fullName="fullName" :emailAddress="emailAddress">
        <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                <!-- Heading & Filters -->
                <Hero></Hero>
                <!-- p.l components -->

                <div class="text-center">
                    <img
                        src="assets/watch_heading.png"
                        alt="Watch Heading"
                        width="200"
                        class="mx-auto drop-shadow-[10px_10px_10px_rgba(0,0,0,0.5)]"
                    />
                </div>

                <Products :products="products"></Products>

                <!-- <div class="w-full text-center">
                    <button
                        type="button"
                        class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
                    >
                        Show more
                    </button>
                </div> -->

                <div class="flex justify-center mt-5">
                    
                    <Link
                        :href="route('products.index')"
                        class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                    >
                        View All Products</Link
                    >
                </div>
            </div>

            <!-- Filter modal -->
            <Filter></Filter>
        </section>
    </UserLayouts>
</template>
