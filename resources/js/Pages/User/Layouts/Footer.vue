<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
<footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
  <div class="mx-auto max-w-screen-xl text-center">
      <a href="#" class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
          <img src="assets/darko-satovi-logo.png" alt="Darko Satovi Logo Footer" width="50">
          <span class="ml-4">Darko Satovi</span>    
      </a>
      <ul class="flex flex-wrap justify-center items-center mt-6 mb-6 text-gray-900 dark:text-white">
          <li>
              <Link :href="route('home')" class="mr-4 hover:underline md:mr-6 ">Početna</Link>
          </li>
          <li>
              <Link :href="route('products.index')" class="mr-4 hover:underline md:mr-6">Svi porizvodi</Link>
          </li>
          <li>
              <Link :href="route('about')" class="mr-4 hover:underline md:mr-6 ">O nama</Link>
          </li>
          <li>
              <Link :href="route('contact')" class="mr-4 hover:underline md:mr-6">Kontakt</Link>
          </li>
      </ul>
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024-2025 <a href="#" class="hover:underline">Darko Satovi</a>. All Rights Reserved.</span>
  </div>
</footer>
</template>