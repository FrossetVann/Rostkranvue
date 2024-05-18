<script setup>
import '../../css/App.css';
import './index.css';
import Dignity from '../../components/Dignity/index.vue'
import AboutMini from '../../components/AboutMini/index.vue'
import Slider from '../../components/Slider/index.vue'
import Title from '../../components/Title/index.vue';
</script>

<template>
      <Slider  class="slider-mini" />
    <section class='dignity'>
      <div class="container dignity-container">
        <Title title="Наши Достоинства"/>
        <ul class="dignity-list">
          <Dignity number="14" text="Лет на рынке"/>
          <Dignity number="15" text="Что-то там еще"/>
          <Dignity number="124" text="Успешных проектов"/>
          <Dignity number="1" text="В регионе"/>
        </ul>
      </div>
    </section>
    <AboutMini/>

</template>
