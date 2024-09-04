<template>
    <Auth>
      <div class="card">
        <div class="card-title">
          <h2 class="fw-bold text-success text-center"><i class="bi bi-lock-fill"></i> 2-step verification</h2>
        </div>
        <div class="card-body">
          <!-- Display general error message if any -->
          <div v-if="errors.general" class="alert alert-danger">
            {{ errors.general }}
          </div>

          <form class="row g-3" @submit.prevent="submitForm" v-if="!isResendingPIN">
            <p style="font-size: 20px; font-weight:500" class="text-center">
              Please check your email to find your PIN. This extra step proves it's really you trying to sign in.
            </p>
            <div class="col-12">
              <label for="inputPin" class="form-label">PIN*</label>
              <input type="text" class="form-control" id="inputPin" v-model="form.pin" placeholder="Enter PIN" />
              <span v-if="errors.pin" class="text-danger">{{ errors.pin[0] }}</span>
            </div>
            <div class="d-flex justify-content-between">
              <p class="text-success" @click="setResendPin">Resend PIN</p>
              <button type="submit" class="btn btn-success rounded-pill">Confirm PIN</button>
            </div>
          </form>

          <form class="row g-3" @submit.prevent="resendPin" v-if="isResendingPIN">
            <p style="font-size: 20px; font-weight:500" class="text-center">
              Please provide your email to get another PIN.
            </p>
            <div class="col-12">
              <label for="inputEmail" class="form-label">Email*</label>
              <input type="email" class="form-control" id="inputEmail" v-model="form.email" placeholder="Enter your email" />
              <span v-if="errors.email" class="text-danger">{{ errors.email[0] }}</span>
            </div>
            <div class="d-flex justify-content-between">
              <p class="text-success" @click="resetResendPin">Verify PIN</p>
              <button type="submit" class="btn btn-success rounded-pill">Resend PIN</button>
            </div>
          </form>
        </div>
      </div>
    </Auth>
  </template>

  <script setup>
  import { ref } from 'vue';
  import { useRouter } from 'vue-router';
  import axios from 'axios';
  import Auth from '../layouts/client/Auth.vue';

  const isResendingPIN = ref(false);

  const form = ref({
    email: '', // Added email field
    pin: '',
  });
  const errors = ref({});
  const router = useRouter();

  const setResendPin = () => {
    isResendingPIN.value = true;
  };

  const resetResendPin = () => {
    isResendingPIN.value = false;
  };

  const submitForm = async () => {
    try {
        // Clear previous errors
        errors.value = {};

        // Send OTP verification request
        const response = await axios.post('/api/verify_otp', form.value);

        // Handle successful verification
        if (response.data.success) {
            // Save the access token to local storage
            const token = response.data.data.access_token;
            localStorage.setItem('access_token', token);
            console.log(response.data.data);
            router.push('/dashboard');
        } else {
            // Handle errors from API
            errors.value = {
                general: response.data.data.message || 'An error occurred. Please try again.',
                ...response.data.data.errors
            };
        }
    } catch (error) {
        // Handle network errors or other issues
        errors.value = { general: 'Something went wrong. Please try again.' };
    }
};


  const resendPin = async () => {
    try {
      // Clear previous errors
      errors.value = {};

      // Send request to resend OTP
      const response = await axios.post('/api/resend_otp', {
        email: form.value.email,
      });

      // Handle successful resend
      if (response.data.success) {
        isResendingPIN.value = false;
      } else {
        // Handle errors from API
        errors.value = {
          general: response.data.data.message || 'An error occurred. Please try again.',
          ...response.data.data.errors
        };
      }
    } catch (error) {
      // Handle network errors or other issues
      errors.value = { general: 'Something went wrong. Please try again.' };
    }
  };
  </script>
