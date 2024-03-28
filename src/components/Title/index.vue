<script setup>
import '../../css/App.css';
import './index.css';

defineProps({
  title: String,
})
</script>


<template>
      <h2 class='title'>{{title}}</h2>
</template>

