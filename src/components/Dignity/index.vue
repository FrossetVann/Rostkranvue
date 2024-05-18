<script setup>
  import '../../css/App.css';
  import './index.css';

  defineProps({
    number: String,
    text: String,
  })
</script>
<template>
  <li class="">
    <div class='dignity-item'>
      <p class='dignity-item__counter'>{{number}}</p>
      <div class="dignity-item__overlay"></div>
    </div>
    <p class="ditnity-title">{{text}}</p>
  </li>
</template>
