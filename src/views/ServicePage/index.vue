<script setup>
import '../../css/App.css';
import './index.css';
import Slider from '../../components/Slider/index.vue'
import Title from '../../components/Title/index.vue'

</script>
<template>
      <Slider/>
    <section className='service-open'>
      <div className="container service-container">
        <!-- <Title title={"Техническое обслуживание"}/> -->
        <div className="service-content">
          <img className="content-img" src="../../img/service1_open.png" alt="услуга" />
          <p className="content-text">Техническое обслуживание подъёмно-транспортного оборудования, предлагаемое компанией "РостКран", это процесс, который направлен на поддержание надлежащего состояния и работоспособности кранов, лифтов, эскалаторов и других подъёмно-транспортных устройств. Это включает в себя регулярное техническое освидетельствование, проверку и предупреждающий ремонт оборудования для улучшения его надёжности, безопасности и эффективности.</p>
          <button className="btn">Написать нам</button>
        </div>
      </div>
    </section>

</template>
