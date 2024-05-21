<script setup>
import '../../css/App.css';
import './index.css';
import Slider from '../../components/Slider/index.vue'
import Title from '../../components/Title/index.vue'
import { ref, onMounted } from 'vue';
import { useRoute, useRouter } from 'vue-router';
import { services } from '../../serviceData';

const route = useRoute();
const router = useRouter();
const id = Number(route.params.id);

const title = ref('');
const imageUrl = ref('');
const description = ref('');

const fetchServiceDetails = () => {
  const service = services.find(service => service.id === id);
  if (service) {
    title.value = service.title;
    imageUrl.value = service.imageUrl;
    description.value = service.description;
  }
};

onMounted(() => {
  fetchServiceDetails();
});

const handleContactClick = () => {
  router.push({ path: '/', hash: '#contact' });
}
</script>

<template>
  <div>
    <Slider class="slider-mini" />
    <section class="service-open">
      <div class="container service-container">
        <Title :title="title" />
        <div class="service-content-b">
          <img class="content-img" :src="imageUrl" alt="услуга" />
          <div class="service-text-btn">
            <p class="content-text">{{ description }}</p>
            <button class="btn" @click="handleContactClick">Написать нам</button>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>