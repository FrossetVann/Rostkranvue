<script setup>
import { ref } from 'vue';
import '../../css/App.css';
import './index.css';

const sliders = ref([
  { id: 0, topic: '1', text: 'text1', img: '/slide1.png' },
  { id: 1, topic: 'fwgwgwgwg', text: 'text2', img: '/slide2.png' },
  { id: 2, topic: 'gwgwgwg', text: 'text3', img: '/slide3.png' },
]);
const currentIndex = ref(0);

const nextSlide = () => {
  currentIndex.value = (currentIndex.value + 1) % sliders.value.length;
};

const prevSlide = () => {
  currentIndex.value = (currentIndex.value - 1 + sliders.value.length) % sliders.value.length;
};
</script>

<template>
  <section>
    <div class="indicator">
      <div v-for="(slide, index) in sliders" :key="slide.id" class="dot" :class="{ 'active': currentIndex === index }" @click="goToSlide(index)"></div>
    </div>
    <div class="slides-container" >
      <div v-for="(slide, index) in sliders" :key="slide.id" class="slide" :style="{ transform: `translateX(-${currentIndex * 100}%)` }">
        <div class="slide-info">
          <h2 class="slide-topic">{{ slide.topic }}</h2>
          <p class="slide-text">{{ slide.text }}</p>
        </div>
        <img :src="slide.img" alt="">
      </div>
    </div>
    <div class="slider-control control-left" @click="prevSlide"></div>
    <div class="slider-control control-right" @click="nextSlide"></div>
  </section>

</template>
