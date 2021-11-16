<template>
  <div>
    <form @submit.prevent="handleSubmit">
      <div class="row">
        <div class="form-group col-12">
          <input
            type="text"
            class="form-control"
            placeholder="Your Name*"
            v-model="form.name"
            required
          />
        </div>
        <div class="form-group col-12">
          <input
            type="text"
            class="form-control"
            placeholder="Your Business name"
            v-model="form.business_name"
          />
        </div>
        <div class="form-group col-12">
          <input
            type="tel"
            class="form-control"
            placeholder="Your Phone Number*"
            v-model="form.phone"
          />
        </div>
        <div class="form-group col-12">
          <input
            type="email"
            class="form-control"
            placeholder="Your Email*"
            v-model="form.email"
          />
        </div>
        <div class="form-group col-12">
          <textarea
            class="form-control"
            placeholder="Brief comment about your enquiry"
            v-model="form.message"
          ></textarea>
        </div>
        <div class="col-12">
          <button
            class="main-btn main-btn-3"
            :disabled="!isValid || isSubmitting"
          >
            Send <i class="fal fa-plus"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import { ref, reactive, computed } from "vue";

export default {
  setup() {
    const form = reactive({
      name: "",
      business_name: "",
      phone: "",
      email: "",
      message: "",
    });
    const isSubmitting = ref(false);
    const isValid = computed(() => {
      return (
        form.name.length > 0 &&
        form.phone.length > 0 &&
        form.email.length > 0 &&
        form.message.length > 0
      );
    });

    function handleSubmit() {}

    return {
      form,
      isSubmitting,
      isValid,
    };
  },
};
</script>
