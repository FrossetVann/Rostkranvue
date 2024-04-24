<script setup>
  import '../../css/App.css';
  import './index.css';
  import Nav from '../Nav/index.vue';
  import { reactive } from 'vue';

const data = reactive({
  burger: false
});

const burgerClick = () => {
  data.burger = !data.burger;
  console.log(data.burger);
};
</script>

<template>
      <header class='header'>
      <div class="container header-container">
        <router-link to="/">
          <h1 class='header-logo'>Рост<span class='title-accent'>Кран</span></h1>
        </router-link>
        <p class='header-address'>
        Ростовская область, г. Ростов-На-Дону,
        пер. 1-й Машиностроительный, 
        зд. 5, кв. 6
        </p>
        <div class="burger-button" @click="burgerClick">
          <span class="burger-line"></span>
          <span class="burger-line"></span>
          <span class="burger-line"></span>
        </div>
      </div>
    <div class='under'>
      <div class="corner corner-left"></div>
      <div :class="{ 'open': data.burger }" class="under-header">
        <Nav/>
      </div>
      <div class="corner"></div>
    </div>
    </header>
</template>
