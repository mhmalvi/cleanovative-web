require('./bootstrap');

import { createApp } from 'vue';
import CommercialBookingFormComponent from './components/CommercialBookingFormComponent.vue';
import ContactUsFormComponent from './components/ContactUsFormComponent.vue';

const app = createApp({});

app.component('commercial-booking-form-component', CommercialBookingFormComponent);
app.component('contact-us-form-component', ContactUsFormComponent);

app.mount('#app');
