<script setup>
  import '../../css/App.css';
  import './index.css';

  defineProps({
    number: Number,
  })
</script>
<template>
      <li class='dignity-item'>
      <p class='dignity-item__counter'>{{number}}</p>
      <div class="dignity-item__overlay"></div>
    </li>
</template>
