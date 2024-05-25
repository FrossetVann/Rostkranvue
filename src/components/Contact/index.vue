<script setup>
  import Title from '../Title/index.vue'
  import '../../css/App.css';
  import './index.css';
  import { onMounted } from 'vue';
  import { useRoute } from 'vue-router';

  const route = useRoute();

  onMounted(() => {
    if (route.hash === '#contact') {
      const element = document.getElementById('contact');
      if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
      }
    }
  });
</script>

<template>
  <section id="contact">
    <div class="container contact-container">
      <Title title="Связь"/>
      <div class="contact-content">
        <div class="inner-contact-content">
          <form action="/php/feedback.php" method="post" class="contact-form">
    <h3 class="form-title">Напишите нам</h3>
    <input  class="form-input" type="text" placeholder="Имя" name="name" required />
    <input  class="form-input" type="email" placeholder="Электронная почта" name="email" required />
    <textarea  class="form-input form-textarea" placeholder="Комментарий" name="comment" required></textarea>
    <label for="agree" class="checkbox-label">
        <input  id="agree" type="checkbox" required /> Я соглашаюсь с <router-link to="/PrivacypolicyPage" class='policy-link'>обработкой моих данных</router-link> 
    </label>
    <button type="submit" class="btn">Отправить</button>
</form>
        </div>
      <div class="contact-information">
          <div class="contact-corners">
            <div class="corner-black"></div>
            <div class="corner-black corner-black-bottom"></div>
          </div>
          <div class="information-content">
            <h2 class='information-logo'>Рост<span class='title-accent'>Кран</span></h2>
            <div class="contacts-block">
              <div class="information-contact">
              <div class="logo phone"></div>
              <div class="contact-name-value">
                <p class="contact-name">Телефон</p>
                <p class="contact-value">+7(863)278-99-99</p>
              </div>
            </div>
            <div class="information-contact">
              <div class="logo smartphone"></div>
              <div class="contact-name-value">
                <p class="contact-name">Моб. Телефон</p>
                <p class="contact-value">+7(899)400-50-60</p>
              </div>
            </div>
            <div class="information-contact">
              <div class="logo mail"></div>
              <div class="contact-name-value">
                <p class="contact-name">Эл. Почта</p>
                <p class="contact-value">rostkran@mail.ru</p>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>