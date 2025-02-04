<script setup>
import { Link, router } from '@inertiajs/vue3';
 defineProps({
    products:Array
 })

const addToCart = (product) => {
    console.log("Product: ", product);
    router.post(route('cart.store', product), {
        onSuccess: (page) => {
            if (page.props.flash.success) {
                Swal.fire({
                    toast: true,
                    icon: "success",
                    position: "top-end",
                    showConfirmButton: false,
                    title: page.props.flash.success
                });
            }
        },
    })
}
</script>


<template>
    <div
        class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-3 mt-6"
    >
        <div
            class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800"
            v-for="product in products"
        >
            <div class="h-56 w-full">
                <a href="#">
                    <img
                        v-if="product.product_images.length > 0"
                        class="mx-auto h-full dark:hidden"
                        :src="`/${product.product_images[0].image}`"
                        :alt="`${product.title}`"
                    />
                    <img
                        v-else
                        class="mx-auto h-full dark:hidden"
                        src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg"
                        alt="No image available"
                    />
                </a>
            </div>
            <div class="pt-6">

                <span
                    class="text-lg font-semibold leading-tight text-gray-900 dark:text-white"
                    >{{ product.title }}</span
                >

                <ul class="mt-2 flex items-center gap-4">
                    <li class="flex items-center gap-2">
                        <svg
                            class="h-4 w-4 text-gray-500 dark:text-gray-400"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"
                            />
                        </svg>
                        <p
                            class="text-sm font-medium text-gray-500 dark:text-gray-400"
                        >
                            Brza dostava
                        </p>
                    </li>

                    <li class="flex items-center gap-2">
                        <svg
                            class="h-4 w-4 text-gray-500 dark:text-gray-400"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-width="2"
                                d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"
                            />
                        </svg>
                        <p
                            class="text-sm font-medium text-gray-500 dark:text-gray-400"
                        >
                            Online Plaćanje
                        </p>
                    </li>
                </ul>

                <div class="mt-4 flex items-center justify-between gap-4">
                    <p
                        class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white"
                    >
                        {{ product.price }} RSD
                    </p>

                    <button
                        type="button"
                        class="inline-flex items-center rounded-lg bg-gray-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                        @click="addToCart(product)"
                    >
                        <svg
                            class="-ms-2 me-2 h-5 w-5"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6"
                            />
                        </svg>
                        Dodaj u korpu
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
