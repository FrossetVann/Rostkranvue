<script setup>
import '../../css/App.css';
import './index.css';

const sliders = [
  {id: 0, topic: '1', text: 'text1', img: '/slide1.png'},
  {id: 1, topic: 'fwgwgwgwg', text: 'text2', img: '/slide1.png'},
  {id: 2, topic: 'gwgwgwg', text: 'text3', img: '/slide1.png'},
]
</script>

<template>
  <section class='slider'>
    <div class="indicator">
      <div v-for="slide in sliders" :key="slide.id" class="dot"></div>
    </div>
    <div v-for="slide in sliders" :key="slide.id" class="slide">
      <div class="slide-info">
        <h2 class="slide-topic">{{slide.topic}}</h2>
        <p class="slide-text">{{slide.text}}</p>
      </div>
      <img :src="slide.img" alt="">
    </div>
    <div class="slider-control control-left"></div>
    <div class="slider-control control-right"></div>
  </section>

</template>
