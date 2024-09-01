<template>
    <Auth>
      <div class="card">
        <div class="card-title">
          <h2 class="fw-bold text-success text-center">
            <i class="bi bi-key-fill"></i> Reset Password
          </h2>
        </div>
        <div class="card-body">
          <form class="row g-3" @submit.prevent="submitForm">
            <div class="col-12">
              <label for="inputPassword4" class="form-label">Password*</label>
              <input
                type="password"
                class="form-control"
                id="inputPassword4"
                v-model="form.password"
              />
              <span v-if="errors.password" class="text-danger">{{ errors.password[0] }}</span>
            </div>
            <div class="col-12">
              <label for="inputPasswordConfirm" class="form-label">Confirm Password*</label>
              <input
                type="password"
                class="form-control"
                id="inputPasswordConfirm"
                v-model="form.password_confirmation"
              />
              <span v-if="errors.password_confirmation" class="text-danger">{{ errors.password_confirmation[0] }}</span>
            </div>
            <div class="d-flex justify-content-between">
              <a @click="setForgetPassword" href="#" class="text-success"></a>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="gridCheck2"
                  v-model="showPassword"
                />
                <label class="form-check-label" for="gridCheck2">
                  Show password
                </label>
              </div>
            </div>
            <div class="text-end">
              <button type="submit" class="btn btn-success rounded-pill">Reset Password</button>
            </div>
            <div v-if="errors.general" class="text-danger">
              {{ errors.general[0] }}
            </div>
          </form>
        </div>
      </div>
    </Auth>
  </template>

  <script setup>
  import { ref, onMounted } from 'vue';
  import { useRouter, useRoute } from 'vue-router';
  import Auth from '../layouts/client/Auth.vue';
  import axios from 'axios';

  const form = ref({
    email: '',
    token: '',
    password: '',
    password_confirmation: ''
  });

  const errors = ref({});
  const showPassword = ref(false);
  const router = useRouter();
  const route = useRoute();

  onMounted(() => {
    // Populate form with email and token from URL query parameters
    form.value.email = route.query.email || '';
    form.value.token = route.params.token || '';
  });

  const submitForm = async () => {
    try {
      // Clear previous errors
      errors.value = {};

      // Send reset password request
      const response = await axios.post('/api/reset_password', form.value);

      // Handle successful password reset
      if (response.data.success) {
        // Redirect to login or another appropriate page
        router.push('/login');
      } else {
        // Handle validation errors from API
        if (response.data.data.errors) {
          errors.value = response.data.data.errors || {};
        } else if (response.data.data.message) {
          // Handle general error messages
          errors.value.general = [response.data.data.message];
        }
      }
    } catch (error) {
      // Handle network errors or other issues
      errors.value.general = ['Something went wrong. Please try again.'];
    }
  };
  </script>
