<template>
    <Auth>
      <div class="card">
          <div class="card-title">
              <h2 class="fw-bold text-success text-center"><i class="bi bi-lock-fill"></i> 2-step verification</h2>
          </div>
          <div class="card-body">
              <form class="row g-3" @submit.prevent="submitForm">
                <p style="font-size: 20px; font-weight:500" class="text-center">Please check your email to find your pin. This extra step proves its really you trying to sign in.</p>
                  <div class="col-12">
                      <label for="inputEmail4" class="form-label">PIN* </label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="Enter PIN">
                  </div>
                  <div class="d-flex justify-content-between">
                      <p class="text-success">Resend PIN</p>
                  </div>
                  <div class="text-end">
                      <button type="submit" class="btn btn-success rounded-pill">Sign In</button>
                  </div>
              </form>
          </div>
      </div>

    </Auth>
  </template>


  <script setup>
  import { useRouter } from 'vue-router';
  import Auth from '../layouts/client/Auth.vue';

  const router = useRouter();
  const submitForm = () => {
      router.push('/dashboard');
  };
  </script>
