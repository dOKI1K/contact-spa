import axios from 'axios';
import 'boxicons';
import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

window.Splide = Splide;
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
