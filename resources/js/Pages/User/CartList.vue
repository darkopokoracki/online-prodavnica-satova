<script setup>
import { computed, reactive } from "vue";

import UserLayouts from "./Layouts/UserLayouts.vue";
import { router, usePage } from "@inertiajs/vue3";

defineProps({
    userAddress: Object,
});

const carts = computed(() => usePage().props.cart.data.items);
const products = computed(() => usePage().props.cart.data.products);

const total = computed(() => usePage().props.cart.data.total);
const itemId = (id) => carts.value.findIndex((item) => item.product_id === id);

const form = reactive({
    address1: null,
    state: null,
    city: null,
    zipcode: null,
    country_code: null,
    type: null,
});
const formFilled = computed(() => {
    return (
        form.address1 !== null &&
        form.state !== null &&
        form.city !== null &&
        form.zipcode !== null &&
        form.country_code !== null &&
        form.type !== null
    );
});

const update = (product, quantity) =>
    router.patch(route("cart.update", product), {
        quantity,
    });
//remove form cart
const remove = (product) => router.delete(route("cart.delete", product));

//confirm order

function submit() {
    router.visit(route("checkout.store"), {
        method: "post",
        data: {
            carts: usePage().props.cart.data.items,
            products: usePage().props.cart.data.products,
            total: usePage().props.cart.data.total,
            address: form,
        },
    });
}
</script>

<template>
    <UserLayouts>
        <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                <h2
                    class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl"
                >
                    Shopping Cart
                </h2>

                <div
                    class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8"
                >
                    <div
                        class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl"
                    >
                        <div class="space-y-6">
                            <div
                                v-for="product in products"
                                :key="product.id"
                                class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 md:p-6"
                            >
                                <div
                                    class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0"
                                >
                                    <a href="#" class="shrink-0 md:order-1">
                                        <img
                                            v-if="
                                                product.product_images.length >
                                                0
                                            "
                                            :src="`/${product.product_images[0].image}`"
                                            alt="Apple Watch"
                                            width="150"
                                        />
                                        <img
                                            v-else
                                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/330px-No-Image-Placeholder.svg.png"
                                            alt="Apple Watch"
                                            width="150"
                                        />
                                    </a>

                                    <label for="counter-input" class="sr-only"
                                        >Choose quantity:</label
                                    >
                                    <div
                                        class="flex items-center justify-between md:order-3 md:justify-end"
                                    >
                                        <div class="flex items-center">
                                            <button
                                                @click.prevent="
                                                    update(
                                                        product,
                                                        carts[
                                                            itemId(product.id)
                                                        ].quantity - 1
                                                    )
                                                "
                                                type="button"
                                                id="decrement-button"
                                                :disabled="
                                                    carts[itemId(product.id)]
                                                        .quantity <= 1
                                                "
                                                class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700"
                                            >
                                                <svg
                                                    class="h-2.5 w-2.5 text-gray-900 dark:text-white"
                                                    aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 18 2"
                                                >
                                                    <path
                                                        stroke="currentColor"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M1 1h16"
                                                    />
                                                </svg>
                                            </button>
                                            <input
                                                v-model="
                                                    carts[itemId(product.id)]
                                                        .quantity
                                                "
                                                type="text"
                                                id="counter-input"
                                                data-input-counter
                                                class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0 dark:text-white"
                                                placeholder=""
                                                value="2"
                                                required
                                            />
                                            <button
                                                @click.prevent="
                                                    update(
                                                        product,
                                                        carts[
                                                            itemId(product.id)
                                                        ].quantity + 1
                                                    )
                                                "
                                                type="button"
                                                id="increment-button"
                                                class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700"
                                            >
                                                <svg
                                                    class="h-2.5 w-2.5 text-gray-900 dark:text-white"
                                                    aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 18 18"
                                                >
                                                    <path
                                                        stroke="currentColor"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 1v16M1 9h16"
                                                    />
                                                </svg>
                                            </button>
                                        </div>
                                        <div
                                            class="text-end md:order-4 md:w-32"
                                        >
                                            <p
                                                class="text-base font-bold text-gray-900 dark:text-white"
                                            >
                                                {{ product.price }} RSD
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md"
                                    >
                                        <a
                                            href="#"
                                            class="text-base font-medium text-gray-900 hover:underline dark:text-white"
                                            >{{ product.title }}</a
                                        >

                                        <div class="flex items-center gap-4">

                                            <button
                                                type="button"
                                                @click="remove(product)"
                                                class="inline-flex items-center text-sm font-medium text-red-600 hover:underline dark:text-red-500"
                                            >
                                                <svg
                                                    class="me-1.5 h-5 w-5"
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
                                                        d="M6 18 17.94 6M18 18 6.06 6"
                                                    />
                                                </svg>
                                                Ukloni
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full"
                    >
                        <div
                            class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6"
                        >
                            <p
                                class="text-xl font-semibold text-gray-900 dark:text-white"
                            >
                                Kratak pregled
                            </p>

                            <div class="space-y-4">
                                <dl
                                    class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700"
                                >
                                    <dt
                                        class="text-base font-bold text-gray-900 dark:text-white"
                                    >
                                        Ukupno
                                    </dt>
                                    <dd
                                        class="text-base font-bold text-gray-900 dark:text-white"
                                    >
                                        {{ total }} RSD
                                    </dd>
                                </dl>
                            </div>

                            <a
                                href="#"
                                class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                >Idi na plaćanje</a
                            >

                            <div class="flex items-center justify-center gap-2">
                                <span
                                    class="text-sm font-normal text-gray-500 dark:text-gray-400"
                                >
                                    ili
                                </span>
                                <Link
                                    :href="route('products.index')"
                                    title=""
                                    class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 underline hover:no-underline dark:text-primary-500"
                                >
                                    Nastavi sa kupovinom
                                    <svg
                                        class="h-5 w-5"
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
                                            d="M19 12H5m14 0-4 4m4-4-4-4"
                                        />
                                    </svg>
                                </Link>
                            </div>
                        </div>

                        <div
                            class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6"
                        >
                            <form @submit.prevent="submit">
                                <div class="relative mb-4">
                                    <label
                                        for="name"
                                        class="leading-7 text-sm text-gray-600"
                                        >Adresa</label
                                    >
                                    <input
                                        type="text"
                                        id="name"
                                        name="address1"
                                        v-model="form.address1"
                                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                    />
                                </div>
                                <div class="relative mb-4">
                                    <label
                                        for="email"
                                        class="leading-7 text-sm text-gray-600"
                                        >Grad</label
                                    >
                                    <input
                                        type="text"
                                        id="email"
                                        name="city"
                                        v-model="form.city"
                                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                    />
                                </div>
                                <div class="relative mb-4">
                                    <label
                                        for="email"
                                        class="leading-7 text-sm text-gray-600"
                                        >Država</label
                                    >
                                    <input
                                        type="text"
                                        id="email"
                                        name="state"
                                        v-model="form.state"
                                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                    />
                                </div>
                                <div class="relative mb-4">
                                    <label
                                        for="email"
                                        class="leading-7 text-sm text-gray-600"
                                        >Poštanski broj</label
                                    >
                                    <input
                                        type="text"
                                        id="email"
                                        name="zipcode"
                                        v-model="form.zipcode"
                                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                    />
                                </div>
                                <div class="relative mb-4">
                                    <label
                                        for="email"
                                        class="leading-7 text-sm text-gray-600"
                                        >Kod Zemlje</label
                                    >
                                    <input
                                        type="text"
                                        id="email"
                                        name="countrycode"
                                        v-model="form.country_code"
                                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                    />
                                </div>
                                <div class="relative mb-4">
                                    <label
                                        for="email"
                                        class="leading-7 text-sm text-gray-600"
                                        >Tip adrese</label
                                    >
                                    <input
                                        type="text"
                                        id="email"
                                        name="type"
                                        v-model="form.type"
                                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                    />
                                </div>

                                <button
                                    v-if="formFilled || userAddress"
                                    type="submit"
                                    class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                                >
                                    Idi na plaćanje
                                </button>

                                <button
                                    v-else
                                    type="submit"
                                    class="text-white bg-gray-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-600 rounded text-lg"
                                >
                                    Dodaj adresu da bi nastavio
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </UserLayouts>
</template>
