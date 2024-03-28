<script setup>
  import '../../css/App.css';
  import './index.css';
  import { ref, onMounted } from 'vue';
  import { useRoute } from 'vue-router';

  const props = defineProps({
    id: Number,
    title: String,
    imageUrl: String,
    description:String,
  })

</script>

<template>
      <router-link to="/ServicePage:id">
      <li class='service'>
        <img class='service-img' :src="imageUrl" alt="услуга" />
        <div class="service-content">
        <h4 class="content-title">
          {{title}}
        </h4>
        <div class="content-description">
        {{description}}
        </div>
        </div>
      </li>
    </router-link>
</template>
