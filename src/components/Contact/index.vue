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
    email: String
})

const review = reactive({
    phoneNumber: '',
    massage: '',
    name: '',
    email:''
  })



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
  <section id="contact">
    <div class="container contact-container">
      <Title title="Связь"/>
      <div class="contact-content">
        <div class="inner-contact-content">
          <form action="feedback.php" method="post" class="contact-form">
            <h3 class="form-title">Напишите нам</h3>
            <input v-model="review.name" class="form-input" type="text" placeholder="Имя" name="name" required />
            <input v-model="review.email" class="form-input" type="email" placeholder="Электронная почта" name="email" required />
            <textarea v-model="review.message" class="form-input form-textarea" name="comment" placeholder="Комментарий" required></textarea>
            <label for="agree" class="checkbox-label">
              <input v-model="review.agree" id="agree" type="checkbox" required /> Я соглашаюсь с обработкой моих данных
            </label>
            <button type="submit" class="btn" :disabled="!isValidForm">Отправить</button>
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