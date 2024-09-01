<template>
    <Auth>
      <div class="card">
        <div class="card-title">
          <h2 class="fw-bold text-success text-center">
            <i class="bi bi-key-fill"></i> Forget Password
          </h2>
        </div>
        <div class="card-body">
          <form class="row g-3" @submit.prevent="submitForm">
            <div class="col-12">
              <label for="inputEmail4" class="form-label">Email*</label>
              <input
                type="email"
                class="form-control"
                id="inputEmail4"
                v-model="form.email"
              />
              <span v-if="errors.email" class="text-danger">{{ errors.email[0] }}</span>
            </div>
            <div class="d-flex justify-content-between">
              <router-link to="/login" class="text-success">Back to login</router-link>
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
  import { ref } from 'vue';
  import { useRouter } from 'vue-router';
  import Auth from '../layouts/client/Auth.vue';
  import axios from 'axios';

  const form = ref({
    email: '',
    password: ''
  });


  const errors = ref({});
  const router = useRouter();



  const submitForm = async () => {
    try {
      // Clear previous errors
      errors.value = {};

      // Send reset password request
      const response = await axios.post('/api/forget_password', form.value);

      if (response.data.success) {
        router.push('/reset_password_message')
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
