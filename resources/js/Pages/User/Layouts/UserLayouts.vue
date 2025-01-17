<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'

import Header from './Header.vue';
import Hero from './Hero.vue';
import Footer from './Footer.vue';

onMounted(() => {
    initFlowbite();
})
</script>

<template>

<Header></Header>
<Hero></Hero>
<slot/>
<Footer></Footer>


</template>