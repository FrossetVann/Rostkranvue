<script setup>
import { inject, reactive, ref, watch, onMounted } from "vue";
import axios from 'axios'
import '../../css/App.css';
import './index.css';
import Service from '../Service/index.vue'
import Title from '../Title/index.vue';

const services = ref([])

const fetchServices = async () => {
  try {

    const { data } = await axios.get(
      `https://07bd216385fe26b9.mokky.dev/services`
    )
    services.value = data
    console.log(data)
  } catch (err) {
    console.log(err)
  }
}
fetchServices()
onMounted(() => {
  fetchServices
})

// watch(fetchServices)

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