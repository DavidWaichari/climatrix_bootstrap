<template>
    <Auth>
      <div class="card">
        <div class="card-title">
          <h2 class="fw-bold text-success text-center"><i class="bi bi-lock-fill"></i> Reset Password</h2>
        </div>
        <div class="card-body">
          <!-- Display general error message if any -->

          <form class="row g-3" @submit.prevent="backToLogin">
            <p style="font-size: 20px; font-weight:500" class="text-center">
              We have sent a reset password link to your email.
            </p>
            <div class="d-flex justify-content-between">
                <span></span>
              <router-link to="/login" type="submit" class="btn btn-success rounded-pill">Back to Login</router-link>
            </div>
          </form>
        </div>
      </div>
    </Auth>
  </template>

  <script setup>
  import Auth from '../layouts/client/Auth.vue';
  </script>
