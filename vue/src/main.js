import './assets/main.css'
import 'jquery';
import 'bootstrap/dist/js/bootstrap';
// import 'summernote/dist/summernote';
import { createApp } from 'vue'
import App from './App.vue'
import router from './router'; // Import your router configuration
const app = createApp(App)
app.use(router); // Use Vue Router
app.mount('#app')



