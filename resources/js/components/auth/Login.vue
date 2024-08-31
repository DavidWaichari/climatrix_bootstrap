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
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Password*</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="d-flex justify-content-between">
                    <p class="text-success">Forgot your password?</p>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck2" checked="" style="background-color: #2ca55e;">
                    <label class="form-check-label" for="gridCheck2">
                        Show password
                    </label>
                    </div>
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
    router.push('/verify_otp');
};
</script>
