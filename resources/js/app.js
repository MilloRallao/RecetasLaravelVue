import { createApp } from "vue";
import welcome from "./components/welcome";
import create_receta from "./components/create_receta";
import ElementPlus from 'element-plus';
import 'element-plus/lib/theme-chalk/index.css';
import locale from 'element-plus/lib/locale/lang/es';
import bootstrap from 'bootstrap'

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token%27');
}

createApp({
    components: {
        welcome,
        create_receta,
    }
}).use(ElementPlus, {locale}).mount('#app');
