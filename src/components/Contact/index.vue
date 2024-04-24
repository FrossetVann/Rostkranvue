<script setup>
  import Title from '../Title/index.vue'
  import {reactive , computed} from 'vue'
  import '../../css/App.css';
  import './index.css';
  import axios from 'axios'

  const props = defineProps({
    phoneNumber: String,
    massage: String,
    name: String,
})

const review = reactive({
    phoneNumber: '',
    massage: '',
    name: '',
  })

  const fetchCall = async () => {
  try {
    console.log('submit')
    const { data } = await axios.post(`https://07bd216385fe26b9.mokky.dev/calls`, {
      phoneNumber: review.phoneNumber,
      name: review.name,
    })
    review.name = ''
    review.phoneNumber = ''
  } catch (err) {
    console.log(err)
  } 
}

const fetchMassage = async () => {
  try {
    console.log('submit')
    const { data } = await axios.post(`https://07bd216385fe26b9.mokky.dev/massages`, {
      massage: review.massage,
      name: review.name,
    })
    review.massage = ''
    review.name = ''
  } catch (err) {
    console.log(err)
  } 
}


</script>

<template>
  <section id='contact'>
    <div class="container contact-container">
      <Title title="Связь"/>
      <div class="contact-content">
        <div class="inner-contact-content">
        <form @submit.prevent.stop="fetchCall" class="contact-form">
          <h3 class='form-title'>Напишите нам</h3>
          <input  v-model="review.name" class='form-input' type="text" placeholder='Имя' />
          <textarea v-model="review.massage" class='form-input form-textarea' name="comment" placeholder='Комментарий'>
            </textarea>
          <button type="submit" class="btn">Отправить</button>
        </form>
        <p class='contact-choice'>или</p>
        <form @submit.prevent.stop="fetchMassage" class="contact-form">
          <h3 class='form-title'>Закажите звонок</h3>
          <input v-model="review.name" class='form-input' type="text" placeholder='Имя' />
          <input  v-model="review.phoneNumber" class='form-input' type="text" placeholder='+7 (988) 580-80-80' />
          <button type="submit" class="btn">Заказать</button>
        </form>
        </div>
      <div class="contact-information">
          <div class="contact-corners">
            <div class="corner-black"></div>
            <div class="corner-black corner-black-bottom"></div>
          </div>
          <div class="information-content">
            <h2 class='information-logo'>Рост<span class='title-accent'>Кран</span></h2>
            <div class="information-contact">
              <div class="logo phone"></div>
              <p class="contact-name">Телефон</p>
              <p class="contact-value">+7(863)278-99-99</p>
            </div>
            <div class="information-contact">
              <div class="logo smartphone"></div>
              <p class="contact-name">Телефон</p>
              <p class="contact-value">+7(863)278-99-99</p>
            </div>
            <div class="information-contact">
              <div class="logo mail"></div>
              <p class="contact-name">Телефон</p>
              <p class="contact-value">+7(863)278-99-99</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>