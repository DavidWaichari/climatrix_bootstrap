<template>
    <Auth>
      <div class="card">
        <div class="card-title">
          <h2 class="fw-bold text-success text-center"><i class="bi bi-key-fill"></i> Sign In</h2>
        </div>
        <div class="card-body">
          <form class="row g-3" @submit.prevent="submitForm">
            <div class="col-12">
              <label for="inputEmail4" class="form-label">Email* </label>
              <input
                type="email"
                class="form-control"
                id="inputEmail4"
                v-model="form.email"
              />
              <span v-if="errors.email" class="text-danger">{{ errors.email[0] }}</span>
            </div>
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
            <div class="d-flex justify-content-between">
              <p class="text-success">Forgot your password?</p>
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
              <button type="submit" class="btn btn-success rounded-pill">Sign In</button>
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
import { ref } from 'vue';
import { useRouter } from 'vue-router';
import Auth from '../layouts/client/Auth.vue';
import axios from 'axios';

const form = ref({
  email: '',
  password: ''
});

const errors = ref({});
const showPassword = ref(false);
const router = useRouter();

const submitForm = async () => {
  try {
    // Clear previous errors
    errors.value = {};

    // Send login request
    const response = await axios.post('/api/login', form.value);

    // Handle successful login
    if (response.data.success) {
      // Redirect to OTP verification
      router.push('/verify_otp');
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
