<script setup>
import Footer from './components/Footer/index.vue';
import Header from './components/Header/index.vue';

</script>

<template>
  <Header></Header>
  <main>
    <router-view></router-view>
  </main>
  <Footer></Footer>
</template>