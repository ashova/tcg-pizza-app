require('./bootstrap');

// Import Vue and Vue Router
import Vue from 'vue';
import router from './router';

// Import the App component
import App from '../App.vue';

const app = new Vue({
  el: '#app',
  router,
  components: {
    App,
  },
  render: h => h(App),
});
