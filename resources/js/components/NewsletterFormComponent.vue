<template>
  <div>
    <form @submit.prevent="handleSubmit">
      <div class="row">
        <div class="col-lg-5">
          <input
            type="email"
            placeholder="Enter Your Email Address"
            v-model="form.email"
          />
        </div>
        <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-6">
              <input
                type="text"
                placeholder="Enter Your Name"
                v-model="form.name"
              />
            </div>
            <div class="col-lg-6">
              <button
                class="subscribe-now-btn"
                :disabled="!isValid || isSubmitting"
              >
                Subscribe Now<i class="fal fa-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import axios from "axios";
import { reactive, ref, computed } from "vue";

export default {
  setup() {
    const form = reactive({
      email: "",
      name: "",
    });
    const isSubmitting = ref(false);
    const isValid = computed(() => {
      return form.email.length > 0 && form.name.length > 0;
    });

    function handleSubmit() {
      axios
        .post("/contact", form)
        .then((res) => {})
        .catch((err) => {
          console.error(err);
        });
    }

    return {
      form,
      isSubmitting,
      isValid,
      handleSubmit,
    };
  },
};
</script>
