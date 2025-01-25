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
    products: Array
})

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
});


</script>

<template>

    <Hero></Hero>
    <UserLayouts>
        <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                <!-- Heading & Filters -->

                <!-- p.l components -->
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
                    <Link :href="route('products.index')"
                        class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    View All Products</Link>
                </div>

            </div>


            <!-- Filter modal -->
            <Filter></Filter>
        </section>
    </UserLayouts>
</template>
