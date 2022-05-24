import Vue from 'vue'
import App from './App.vue'
import "@fontsource/poppins"
import "@fontsource/poppins/100.css"
import "@fontsource/poppins/500.css"
import "@fontsource/poppins/900.css"

/* Bootstrap */
const bootstrap = require('bootstrap')
Vue.use(bootstrap)

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')
