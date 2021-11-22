<template>
  <div>
    <form @submit.prevent="handleSubmit">
      <div class="row">
        <div class="form-group col-12">
          <input
            type="text"
            class="form-control"
            :class="
              nameIsValid
                ? 'is-valid'
                : nameIsValid === null
                ? ''
                : 'is-invalid'
            "
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
            class="form-control message"
            placeholder="Brief comment about your enquiry"
            v-model="form.message"
            rows="5"
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
import Validation from "../modules/Validation.js";

export default {
  setup() {
    const { name } = Validation();

    const form = reactive({
      name: "",
      business_name: "",
      phone: "",
      email: "",
      message: "",
    });

    const error = reactive({
      name: null,
    });

    const isSubmitting = ref(false);

    const isValid = computed(() => {
      return (
        form.name.length > 5 &&
        form.phone.length > 0 &&
        form.email.length > 0 &&
        form.message.length > 0
      );
    });

    const nameIsValid = computed(() => {
      return form.name.length > 0 ? name(form.name) : null;
    });

    function handleSubmit() {}

    return {
      form,
      error,
      isSubmitting,
      isValid,
      nameIsValid,
    };
  },
};
</script>
<style scoped>
.message {
  resize: none !important;
}
</style>
