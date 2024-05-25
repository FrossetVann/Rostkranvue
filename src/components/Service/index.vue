<script setup>
  import '../../css/App.css';
  import './index.css';

  const props = defineProps({
    id: Number,
    title: String,
    imageUrl: String,
    description:String,
  })
</script>

<template>
  <li>
    <router-link :to="'/ServicePage/' + id">
    <div class="service">
      <img class="service-img" :src="imageUrl" alt="услуга" />
      <div class="service-content">
        <p class="content-title">{{ title }}</p>
        <div class="content-description">{{ description }}</div>
      </div>
    </div>
  </router-link>
  </li>
</template>