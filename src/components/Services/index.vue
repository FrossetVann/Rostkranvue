<script setup>
import '../../css/App.css';
import './index.css';
import Service from '../Service/index.vue'
import Title from '../Title/index.vue';
import { useRouter } from 'vue-router';
import { services } from '../../serviceData'; // Импорт данных

const router = useRouter();
const navigateToService = (id) => {
  router.push({ name: 'ServicePage', params: { id } });
}
</script>

<template>
  <section class='services'>
    <div class="container service-container">
      <Title title="Услуги" />
      <ul class="services-list">
        <Service
          v-for="service in services"
          :key="service.id"
          :id="service.id"
          :title="service.title"
          :imageUrl="service.imageUrl"
          :description="service.description"
          @click="navigateToService(service.id)" />
      </ul>
    </div>
  </section>
</template>