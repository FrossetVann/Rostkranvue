<script setup>
  import '../../css/App.css';
  import './index.css';
  import Nav from '../Nav/index.vue'
</script>

<template>
<footer class='footer'>
      <div class="container footer-container">
        <a href="/"><h1 class='footer-logo'>Рост<span class='title-accent'>Кран</span></h1></a>
       <Nav/>
        <div class="">
          <p class='footer-address'>
        Ростовская область, г. Ростов-На-Дону,
        пер. 1-й Машиностроительный, 
        зд. 5, кв. 6
        </p>
        <router-link to="/PrivacypolicyPage" class='policy-footer'>Политика конфиденциальности</router-link> 
        </div>
      </div>
    </footer>
</template>

