<template>
    <main style="height: 100vh;">
      <div class="row h-100">
        <!-- Left Side: Image Background with Centered Content -->
        <div class="col-md-6 h-100"
             style="background-image: url('/assets/ui/images/sidebar.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
          <div class="d-flex flex-column align-items-center justify-content-center h-100">
            <div class="d-flex align-items-center" style="padding-left: 20px;">
              <div class="d-flex align-items-center justify-content-center fw-bold"
                   style="background-color: white; width: 8vw; height: 8vw; border-radius: 50%; margin-right: 1.5vw;">
                <span style="color:#2ca55e; font-size: 7vw;">C</span>
              </div>
              <span class="text-white fw-bold" style="font-size: 5vw; margin-left: 0.5vw;">Climatric</span>
            </div>
            <p class="text-white " style="font-size:1.5vw ;margin-left: 8vw;">Climate action, simplified!</p>
          </div>
        </div>
        <!-- Right Side: Green Background with Centered Content -->
        <div class="col-md-6 h-100 d-flex align-items-center justify-content-center"
             style="background-color: white;">
          <span style="color: white; font-size: 3vw; font-weight: bold;">Welcome to Climatric</span>
        </div>
      </div>
    </main><!-- End #main -->
  </template>

  <script setup>
  import { useRouter } from 'vue-router';

  const router = useRouter();
  const login = () => {
    router.push('/');
  };
  </script>
