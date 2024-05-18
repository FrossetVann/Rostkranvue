<script setup>
import { inject, reactive, ref, watch, onMounted } from "vue";
import axios from 'axios'
import '../../css/App.css';
import './index.css';
import Service from '../Service/index.vue'
import Title from '../Title/index.vue';

const services = ref([
  {
    "id": 0,
    "title": "Монтаж, пуско-наладка и ремонт оборудования",
    "imageUrl": "/services/service0.webp",
    "description": "описание описание описание описание описание описание описание описание описание"
  },
  {
    "id": 1,
    "title": "Техническое обслуживание",
    "imageUrl": "/services/service1.webp",
    "description": "описание описание описание описание описание описание описание описание описание"
  },
  {
    "id": 2,
    "title": "Установка и наладка приборов",
    "imageUrl": "/services/service2.webp",
    "description": "описание описание описание описание описание описание описание описание описание"
  },
  {
    "id": 3,
    "title": "Обследование и нивелирование крановых путей",
    "imageUrl": "/services/service3.webp",
    "description": "описание описание описание описание описание описание описание описание описание"
  },
  {
    "id": 4,
    "title": "Техническое обслуживание",
    "imageUrl": "/services/service4.webp",
    "description": "описание описание описание описание описание описание описание описание описание"
  },
  {
    "id": 5,
    "title": "Монтаж, пуско-наладка и ремонт оборудования",
    "imageUrl": "/services/service5.webp",
    "description": "описание описание описание описание описание описание описание описание описание"
  }
])

</script>

<template>
  <section class='services'>
    <div class="container service-container">
      <Title title="Услуги" />
      <ul class="services-list">
        <Service
        v-for="service in services"
        :key="services.id"
        :id="service.id"
        :title="service.title"
        :imageUrl="service.imageUrl"
        :description="service.description" />
      </ul>
    </div>
  </section>
</template>