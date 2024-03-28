<script setup>
import '../../css/App.css';
import './index.css';
import Dignity from '../../components/Dignity/index.vue'
import AboutMini from '../../components/AboutMini/index.vue'
import Slider from '../../components/Slider/index.vue'
import Title from '../../components/Title/index.vue';
</script>

<template>
      <Slider/>
    <section className='dignity'>
      <div className="container dignity-container">
        <Title title="Наши Достоинства"/>
        <ul className="dignity-list">
          <Dignity :number="14"/>
          <Dignity :number="15"/>
          <Dignity :number="124"/>
          <Dignity :number="1"/>
        </ul>
      </div>
    </section>
    <AboutMini/>

</template>
