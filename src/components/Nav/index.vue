<script setup>
import '../../css/App.css';
import './index.css';
import { defineProps, defineEmits } from 'vue';

const emits = defineEmits(['toggleBurger']);
  const closeMenu = () => {
    emits('toggleBurger');
  };
</script>

<template>
  <nav class='nav'>
      <router-link to="/" class='nav-item' @click="closeMenu" >Главная</router-link>
      <router-link to="/ServicesPage" class='nav-item' @click="closeMenu">Услуги</router-link>
      <router-link to="/DignityPage" class='nav-item' @click="closeMenu">О компании</router-link>
</nav>
</template>


