<template>
  <div>
    <form
      style="background-image: url('images/app-form-bg.jpg')"
      @submit.prevent="handleFormSubmit"
    >
      <div class="input-group mb-15">
        <input
          type="text"
          placeholder="Your Name*"
          v-model="form.name"
          :class="[
            nameIsValid
              ? 'input-valid'
              : nameIsValid === null
              ? ''
              : 'input-invalid',
          ]"
          required
        />
        <span class="icon"><i class="far fa-user-edit"></i></span>
      </div>
      <div class="input-group mb-15">
        <input
          type="text"
          placeholder="Your Business Name"
          :class="[
            businessNameIsValid
              ? 'input-valid'
              : businessNameIsValid === null
              ? ''
              : 'input-invalid',
          ]"
          v-model="form.business_name"
        />
        <span class="icon"><i class="far fa-building"></i></span>
      </div>
      <div class="input-group mb-15">
        <input
          type="tel"
          placeholder="Your Phone Number*"
          v-model="form.phone"
          :class="[
            phoneNumberIsValid
              ? 'input-valid'
              : phoneNumberIsValid === null
              ? ''
              : 'input-invalid',
          ]"
          required
        />
        <span class="icon"><i class="far fa-phone"></i></span>
      </div>
      <div class="input-group mb-15">
        <input
          type="text"
          placeholder="Your Email Address*"
          v-model="form.email"
          :class="[
            emailIsValid
              ? 'input-valid'
              : emailIsValid === null
              ? ''
              : 'input-invalid',
          ]"
          required
        />
        <span class="icon"><i class="far fa-envelope-open"></i></span>
      </div>
      <div class="input-group mb-15">
        <textarea
          v-model="form.message"
          placeholder="Brief comment about your enquiry"
        ></textarea>
      </div>
      <button
        class="main-btn main-btn-3"
        type="submit"
        :disabled="!isValid || isSubmitting"
      >
        Send
        <i class="fal fa-plus"></i>
      </button>
    </form>
  </div>
</template>

<script>
import axios from "axios";
import { ref, reactive, computed } from "vue";
import Validation from "../modules/Validation.js";

export default {
  setup() {
    const isSubmitting = ref(false);
    const { name, alphanumeric, email, phoneNumber } = new Validation();

    const form = reactive({
      name: "",
      business_name: "",
      phone: "",
      email: "",
      message: "",
    });

    function handleFormSubmit() {
      isSubmitting.value = true;
      axios
        .post("/booking", form)
        .then((res) => {})
        .catch((err) => {
          console.error(err);
        })
        .finally(() => {
          isSubmitting.value = false;
        });
    }

    const isValid = computed(() => {
      return (
        form.name.length > 0 &&
        form.phone.length > 0 &&
        form.email.length > 0 &&
        name(form.name) &&
        phoneNumber(form.phone) &&
        email(form.email)
      );
    });

    const nameIsValid = computed(() => {
      return form.name.length > 0 ? name(form.name) : null;
    });

    const emailIsValid = computed(() => {
      return form.email.length > 0 ? email(form.email) : null;
    });

    const businessNameIsValid = computed(() => {
      return form.business_name.length > 0
        ? alphanumeric(form.business_name)
        : null;
    });

    const phoneNumberIsValid = computed(() => {
      return form.phone.length > 0 ? phoneNumber(form.phone) : null;
    });

    return {
      form,
      handleFormSubmit,
      isSubmitting,
      isValid,
      nameIsValid,
      emailIsValid,
      businessNameIsValid,
      phoneNumberIsValid,
    };
  },
};
</script>

<style>
.input-valid {
  border: 1px solid #28a745 !important;
}

.input-invalid {
  border: 1px solid #f80643 !important;
}
</style>
