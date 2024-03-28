import { createApp } from 'vue'
import { createRouter, createWebHistory} from 'vue-router'
import './css/App.css'
import App from './App.vue'
import MainPage from './views/MainPage.vue'
import DignityPage from './views/DignityPage/index.vue'
import ServicesPage from './views/ServicesPage/index.vue'
import ServicePage from './views/ServicePage/index.vue'
import NotFoundPage from './views/NotFoundPage/index.vue'


const routes = [
  { path: '/', name: 'MainPage' ,component: MainPage },
  { path: '/DignityPage', name: 'DignityPage' , component: DignityPage },
  { path: '/ServicesPage', name: 'ServicesPage' , component: ServicesPage },
  { path: '/ServicePage:id', name: 'ServicePage' , component: ServicePage },
  { path: '/404', name: 'NotFoundPage' , component: NotFoundPage }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior(to, from, savedPosition) {
    // always scroll to top
    return { top: 0 }
  },
})

const app = createApp(App)
app.use(router)

app.mount('#app')