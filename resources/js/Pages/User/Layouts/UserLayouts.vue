<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'

import Header from './Header.vue';
import Hero from './Hero.vue';
import Footer from './Footer.vue';

defineProps({
    fullName: String,
    emailAddress: String
})

onMounted(() => {
    initFlowbite();
})
</script>

<template>

<Header :fullName="fullName" :emailAddress="emailAddress"></Header>
<slot/>
<Footer></Footer>


</template>