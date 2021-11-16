<template>
  <div>
    <section class="appointment-section pt-80 pb-30">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-5">
            <div
              class="appointment-text bg-cover"
              style="background-image: url('images/appointment-bg.jpg')"
            >
              <div class="appointment-content">
                <div class="section-title left-border mb-40">
                  <h2>Contact Us Today For A Free Quote</h2>
                  <p class="title-tag">Contact Us</p>
                </div>
                <p>Starting with us is easy:</p>
                <ol class="list-style-type-square pl-3">
                  <li>Contact us and organise a free quotation</li>
                  <li>
                    One of our friendly managers will come to your space and
                    will do a walk through with you and indentify what you
                    require.
                  </li>
                  <li>We then draw up and send our quotation to you.</li>
                  <li>
                    Once you accept our quotation we organise a start date that
                    suits you.
                  </li>
                </ol>
                <div class="read-more-btn">
                  <a href="#">Start experiencing clean today!</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <!-- appointment form -->
            <div class="appointment-form">
              <div
                class="form-title bg-cover"
                style="background-image: url('images/form-title-bg.jpg')"
              >
                <h2>Request A Quote</h2>
              </div>
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
          </div>
        </div>
      </div>
    </section>
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
