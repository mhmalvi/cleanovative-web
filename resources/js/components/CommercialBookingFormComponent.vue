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
          required
        />
        <span class="icon"><i class="far fa-user-edit"></i></span>
      </div>
      <div class="input-group mb-15">
        <input
          type="text"
          placeholder="Your Business Name"
          v-model="form.business_name"
        />
        <span class="icon"><i class="far fa-building"></i></span>
      </div>
      <div class="input-group mb-15">
        <input
          type="tel"
          placeholder="Your Phone Number*"
          v-model="form.phone"
          required
        />
        <span class="icon"><i class="far fa-phone"></i></span>
      </div>
      <div class="input-group mb-15">
        <input
          type="text"
          placeholder="Your Email Address*"
          v-model="form.email"
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

export default {
  setup() {
    const isSubmitting = ref(false);

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
        .post("/contact", form)
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
        form.message.length > 0
      );
    });

    return {
      form,
      handleFormSubmit,
      isSubmitting,
      isValid,
    };
  },
};
</script>
