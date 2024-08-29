<template>
    <div>
          <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between h-100  p-0" style="background-image: url('/assets/ui/images/sidebar.svg'); background-size: cover; background-position: center; background-repeat: no-repeat; width:295px">
    <a href="index.html" class="logo d-flex align-items-center justify-content-center">
      <img src="/theme/assets/img/logo.png" alt="">
      <span class="d-none d-lg-block text-white">Climatric</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn h-100" @click="toggleSidebar" style="background-color: white; padding-left: 0px;"></i>
</div>
<div class="search-bar h-100 pt-2">
  <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
  </form>
</div><!-- End Search Bar -->

<nav class="header-nav ms-auto h-100 pt-2">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->

    <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number">4</span>
      </a><!-- End Notification Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <li class="dropdown-header">
          You have 4 new notifications
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-exclamation-circle text-warning"></i>
          <div>
            <h4>Lorem Ipsum</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>30 min. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-x-circle text-danger"></i>
          <div>
            <h4>Atque rerum nesciunt</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>1 hr. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-check-circle text-success"></i>
          <div>
            <h4>Sit rerum fuga</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>2 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-info-circle text-primary"></i>
          <div>
            <h4>Dicta reprehenderit</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>4 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="dropdown-footer">
          <a href="#">Show all notifications</a>
        </li>

      </ul><!-- End Notification Dropdown Items -->

    </li><!-- End Notification Nav -->

    <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-chat-left-text"></i>
        <span class="badge bg-success badge-number">3</span>
      </a><!-- End Messages Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
        <li class="dropdown-header">
          You have 3 new messages
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="/theme/assets/img/messages-1.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Maria Hudson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>4 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="/theme/assets/img/messages-2.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Anna Nelson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>6 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="/theme/assets/img/messages-3.jpg" alt="" class="rounded-circle">
            <div>
              <h4>David Muldon</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>8 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="dropdown-footer">
          <a href="#">Show all messages</a>
        </li>

      </ul><!-- End Messages Dropdown Items -->

    </li><!-- End Messages Nav -->

    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="/theme/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>Kevin Anderson</h6>
          <span>Web Designer</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
            <i class="bi bi-question-circle"></i>
            <span>Need Help?</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <router-link class="dropdown-item d-flex align-items-center" to="/login">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </router-link>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar" style="background-image: url('/assets/ui/images/sidebar.svg'); background-size: cover; background-position: center; background-repeat: no-repeat;">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <router-link class="nav-link" to="/">
      <i><img src="/assets/ui/images/menu-dashbaord.svg" alt="Dashboard" style="width:20px; margin-right:5px" /></i>
      <span class="ml-2">Dashboard</span>
    </router-link>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <router-link class="nav-link" to="/self_assessment">
      <i><img src="/assets/ui/images/SelfAssessment.svg" alt="Self Assessment" style="width:20px; margin-right:5px" /></i>
      <span class="ml-2">Self Assessment</span>
    </router-link>
  </li><!-- End Self Assessment Nav -->

  <li class="nav-item">
    <a @click.prevent="navigate('/ghg_management')" class="nav-link collapsed" href="#" data-bs-target="#ghg_management-nav" data-bs-toggle="collapse">
      <i><img src="/assets/ui/images/ghgmanagement.svg" alt="GHG Management" style="width:20px; margin-right:5px"></i>
      <span>GHG Management</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="ghg_management-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <router-link to="/ghg_management/scope_one">
          <i class="bi bi-circle"></i><span>GHG Scope 1</span>
        </router-link>
      </li>
      <li>
        <router-link to="/ghg_management/scope_two">
          <i class="bi bi-circle"></i><span>GHG Scope 2</span>
        </router-link>
      </li>
      <li>
        <router-link to="/ghg_management/scope_three">
          <i class="bi bi-circle"></i><span>GHG Scope 3</span>
        </router-link>
      </li>
    </ul>
</li><!-- End Components Nav -->

  <li class="nav-item">
    <a @click.prevent="navigate('/physical_risk')" class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i><img src="/assets/ui/images/Physicalrisk.svg" alt="Physical Risk" style="width:20px; margin-right:5px"></i>
      <span>Physical Risk</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <router-link to="/physical_risk/risk_map">
          <i class="bi bi-circle"></i><span>Risk Map</span>
        </router-link>
      </li>
      <li>
        <router-link to="/physical_risk/earthquakes">
          <i class="bi bi-circle"></i><span>Earthquakes</span>
        </router-link>
      </li>
      <li>
        <router-link to="/physical_risk/ssp2_floods">
          <i class="bi bi-circle"></i><span>SSP2 Floods</span>
        </router-link>
      </li>
      <li>
        <router-link to="/physical_risk/ssp5_floods">
          <i class="bi bi-circle"></i><span>SSP5 Floods</span>
        </router-link>
      </li>
    </ul>
  </li><!-- End Components Nav -->

  <li class="nav-item">
    <router-link class="nav-link" to="/transition_risk">
      <i><img src="/assets/ui/images/TransitionRisk.svg" alt="Transition Risk" style="width:20px; margin-right:5px"></i>
      <span class="ml-2">Transition Risk</span>
    </router-link>
  </li><!-- End Transition Risk Nav -->

  <li class="nav-item">
    <router-link class="nav-link" to="/carbon_offset">
      <i><img src="/assets/ui/images/CarbonOffset.svg" alt="Carbon Offset" style="width:20px; margin-right:5px"></i>
      <span class="ml-2">Carbon Offset</span>
    </router-link>
  </li><!-- End Carbon Offset Nav -->

  <li class="nav-item">
    <router-link class="nav-link" to="/peer_comparison">
      <i><img src="/assets/ui/images/PeerComparison.svg" alt="Peer Comparison" style="width:20px; margin-right:5px"></i>
      <span class="ml-2">Peer Comparison</span>
    </router-link>
  </li><!-- End Peer Comparison Nav -->

  <li class="nav-item">
    <router-link class="nav-link" to="/reports">
      <i><img src="/assets/ui/images/Reports.svg" alt="Reports" style="width:20px; margin-right:5px"></i>
      <span class="ml-2">Reports</span>
    </router-link>
  </li><!-- End Reports Nav -->

  <li class="nav-item">
    <router-link class="nav-link" to="/help">
      <i><img src="/assets/ui/images/Help.svg" alt="Help" style="width:20px; margin-right:5px"></i>
      <span class="ml-2">Help</span>
    </router-link>
  </li><!-- End Help Nav -->

</ul>

</aside><!-- End Sidebar-->


<main id="main" class="main">

<router-view></router-view>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
<div class="copyright">
  &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
</div>
<div class="credits">
  <!-- All the links in the footer should remain intact. -->
  <!-- You can delete the links only if you purchased the pro version. -->
  <!-- Licensing information: https://bootstrapmade.com/license/ -->
  <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    </div>
</template>

<script setup>
import { onMounted } from 'vue';
import { useRouter } from 'vue-router';

const router = useRouter();
const toggleSidebar = () => {
    document.body.classList.toggle('toggle-sidebar');
}

const navigate = (link) => {
    router.push(link);
}
</script>
