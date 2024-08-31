<template>
    <Auth>
      <div class="card">
        <div class="card-title">
          <h2 class="fw-bold text-success text-center"><i class="bi bi-key-fill"></i> Register</h2>
        </div>
        <div class="card-body">
          <form class="row g-3" @submit.prevent="submitForm">
            <div class="col-12">
              <label for="name" class="form-label">Name*</label>
              <input
                type="text"
                class="form-control"
                id="name"
                v-model="form.name"
                :class="{ 'is-invalid': errors.name }"
              >
              <div v-if="errors.name" class="invalid-feedback">
                {{ errors.name[0] }}
              </div>
            </div>
            <div class="col-12">
              <label for="inputEmail4" class="form-label">Email*</label>
              <input
                type="email"
                class="form-control"
                id="inputEmail4"
                v-model="form.email"
                :class="{ 'is-invalid': errors.email }"
              >
              <div v-if="errors.email" class="invalid-feedback">
                {{ errors.email[0] }}
              </div>
            </div>
            <div class="col-12">
              <label for="inputPassword4" class="form-label">Password*</label>
              <input
                type="password"
                class="form-control"
                id="inputPassword4"
                v-model="form.password"
                :class="{ 'is-invalid': errors.password }"
              >
              <div v-if="errors.password" class="invalid-feedback">
                {{ errors.password[0] }}
              </div>
            </div>
            <div class="col-12">
              <label for="password_confirmation" class="form-label">Confirm Password*</label>
              <input
                type="password"
                class="form-control"
                id="password_confirmation"
                v-model="form.password_confirmation"
                :class="{ 'is-invalid': errors.password_confirmation }"
              >
              <div v-if="errors.password_confirmation" class="invalid-feedback">
                {{ errors.password_confirmation[0] }}
              </div>
            </div>
            <div class="text-end">
              <button type="submit" class="btn btn-success rounded-pill">Submit</button>
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

  const form = ref({
    name: '',
    email: '',
    password: '',
    password_confirmation: ''
  });

  const errors = ref({});

  const router = useRouter();

  const submitForm = async () => {
    try {
      const response = await axios.post('/api/register', form.value);
      if (response.data.success) {
        // Redirect to login page on successful registration
        router.push('/login');
      } else {
        // Show error messages
        errors.value = response.data.data.errors;
      }
    } catch (error) {
      if (error.response && error.response.data) {
        errors.value = error.response.data.data.errors;
      }
    }
  };
  </script>
