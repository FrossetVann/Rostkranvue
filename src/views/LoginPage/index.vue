<script setup>
import '../../css/App.css';
import './index.css';
import Slider from '../../components/Slider/index.vue'
import Title from '../../components/Title/index.vue'
import { ref, onMounted } from 'vue';
import axios from 'axios';
import { useRoute } from 'vue-router';
</script>

<template>
  <section class="login">
    <div class="illustration-background-kran">
      <img class="illustration-kran" src="/kran.svg" alt="">
    </div>
    <div class="illustration-background-block">
      <img class="illustration-background illustration-background-left" src="/illustration_border.svg">
      <img class="illustration-background illustration-background-right" src="/illustration_border.svg">
    </div>
  <div class="form">
    <div class="title-block">
      <h1 class='header-logo'>Рост<span class='title-accent'>Кран</span></h1>
    </div>
    <form action="#" class="login-form">
      <input  class='form-input' type="text" placeholder='Логин' />
      <input  class='form-input' type="text" placeholder='Пароль' />
      <button type="submit" class="btn">Войти</button>
    </form>
  </div>
</section>
</template>