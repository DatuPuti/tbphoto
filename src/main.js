import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import vuetify from './plugins/vuetify'
import { createStore } from 'vuex'
import '@mdi/font/css/materialdesignicons.css'
import './assets/styles/main.css'

const store = createStore({
  state() {
    return {
      // Your state here
    }
  }
})

const app = createApp(App)
app.use(router)
app.use(store)
app.use(vuetify)
app.mount('#app')
