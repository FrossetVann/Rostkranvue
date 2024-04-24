<script setup>
import '../../css/App.css';
import './index.css';
import Slider from '../../components/Slider/index.vue'
import Title from '../../components/Title/index.vue'
import { ref, onMounted } from 'vue';
import axios from 'axios';
import { useRoute } from 'vue-router';
const route = useRoute();
const id = Number(route.params.id); 

  const title = ref('');
  const imageUrl = ref('');
  const description = ref('');

  const fetchServiceDetails = async () => {
    try {
      const { data } = await axios.get(`https://07bd216385fe26b9.mokky.dev/services/${id}`);
      title.value = data.title;
      imageUrl.value = data.imageUrl;
      description.value = data.description;
    } catch (error) {
      console.error('Error fetching service details:', error);
    }
  };

  onMounted(() => {
    fetchServiceDetails();
  });
</script>
<template>
      <Slider  class="slider-mini" />
    <section className='service-open'>
      <div className="container service-container">
        <Title :title="title" />
        <div className="service-content">
          <img className="content-img" :src="imageUrl" alt="услуга" />
          <!-- <p className="content-text">Техническое обслуживание подъёмно-транспортного оборудования, предлагаемое компанией "РостКран", это процесс, который направлен на поддержание надлежащего состояния и работоспособности кранов, лифтов, эскалаторов и других подъёмно-транспортных устройств. Это включает в себя регулярное техническое освидетельствование, проверку и предупреждающий ремонт оборудования для улучшения его надёжности, безопасности и эффективности.</p> -->
          <p className="content-text">{{ description }}</p>
          <button className="btn">Написать нам</button>
        </div>
      </div>
    </section>

</template>
