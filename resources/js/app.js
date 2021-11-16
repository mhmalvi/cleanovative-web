require('./bootstrap');

import { createApp } from 'vue';
import CommercialBookingComponent from './components/CommercialBookingComponent.vue';

const app = createApp({});

app.component('commercial-booking-component', CommercialBookingComponent);

app.mount('#app');
