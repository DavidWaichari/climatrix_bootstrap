<template>
    <aside id="sidebar" class="sidebar"
        style="background-image: url('/assets/ui/images/sidebar.svg'); background-size: cover; background-position: center; background-repeat: no-repeat;">

        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="text-center p-0 m-0 pb-3 text-white">
                <span>Admin</span>
            </li>
            <li class="nav-item">
                <router-link to='/admin/dashboard' class="nav-link collapsed"
                             :class="{ 'active-link': $route.path.startsWith('/admin/dashboard') }"
                             @click.native="toggleSubmenu('dashboard-nav')">
                    <i><img src="/assets/ui/images/menu-dashbaord.svg" alt="Dashboard"
                            style="width:20px; margin-right:5px"></i>
                    <span>Dashboard</span>
                </router-link>
            </li>
            <li class="nav-item">
                <router-link to='/admin/users_and_organizations' class="nav-link collapsed"
                             :class="{ 'active-link': $route.path.startsWith('/admin/users_and_organizations') }"
                             @click.native="toggleSubmenu('users_and_organizations-nav')">
                    <i><img src="/assets/ui/images/ghgmanagement.svg" alt="GHG Management"
                            style="width:20px; margin-right:5px"></i>
                    <span>Users and Organizations</span>
                </router-link>
                <ul id="users_and_organizations-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <router-link to="/admin/users_and_organizations/organizations_onboard" active-class="active-submenu-link">
                           <span>Organizations Onboard</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/admin/users_and_organizations/customers" active-class="active-submenu-link">
                           <span>Customers</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/admin/users_and_organizations/admins" active-class="active-submenu-link">
                           <span>Manage Admins</span>
                        </router-link>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link collapsed"
                             :class="{ 'active-link': $route.path.startsWith('/admin/physical_risk') }"
                             @click.native="toggleSubmenu('physical_risk-nav')">
                    <i><img src="/assets/ui/images/Physicalrisk.svg" alt="Physical Risk"
                            style="width:20px; margin-right:5px"></i>
                    <span>Physical Risk</span>
                </a>
                <ul id="physical_risk-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <router-link to="/admin/physical_risk/risk_maps" active-class="active-submenu-link">
                           <span>Risk Maps</span>
                        </router-link>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href='#' class="nav-link collapsed"
                             :class="{ 'active-link': $route.path.startsWith('/admin/transition_risk') }"
                             @click.native="toggleSubmenu('transition-risk-nav')">
                    <i><img src="/assets/ui/images/Transitionrisk.svg" alt="Transition Risk"
                            style="width:20px; margin-right:5px"></i>
                    <span>Transition Risk</span>
                </a>
                <ul id="transition-risk-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <router-link to="/admin/transition_risk/industries" active-class="active-submenu-link">
                           <span>Industries</span>
                        </router-link>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <router-link to='/admin/products' class="nav-link collapsed"
                             :class="{ 'active-link': $route.path.startsWith('/admin/products') }"
                             @click.native="toggleSubmenu('transition_risk-nav')">
                    <i><img src="/assets/ui/images/Help.svg" alt="Transition Risk"
                            style="width:20px; margin-right:5px"></i>
                    <span>Products</span>
                </router-link>
            </li>

            <li class="nav-item">
                <router-link to='/admin/activity_logs' class="nav-link collapsed"
                             :class="{ 'active-link': $route.path.startsWith('/admin/activity_logs') }"
                             @click.native="toggleSubmenu('carbon_offset-nav')">
                    <i><img src="/assets/ui/images/CarbonOffset.svg" alt="Activity Logs"
                            style="width:20px; margin-right:5px"></i>
                    <span>Activity Logs</span>
                </router-link>
            </li>

            <li class="nav-item">
                <router-link to='/admin/user_roles' class="nav-link collapsed"
                             :class="{ 'active-link': $route.path.startsWith('/admin/user_roles') }"
                             @click.native="toggleSubmenu('admin/user_roles-nav')">
                    <i><img src="/assets/ui/images/PeerComparison.svg" alt="Peer Comparison"
                            style="width:20px; margin-right:5px"></i>
                    <span>User Roles</span>
                </router-link>
            </li>

            <li class="nav-item">
                <router-link to='/admin/system_settings' class="nav-link collapsed"
                             :class="{ 'active-link': $route.path.startsWith('/admin/system_settings') }"
                             @click.native="toggleSubmenu('reports-nav')">
                    <i><img src="/assets/ui/images/Reports.svg" alt="Reports" style="width:20px; margin-right:5px"></i>
                    <span>System Settings</span>
                </router-link>
            </li>
        </ul>
    </aside>
</template>

<script setup>
import { useRouter, useRoute } from 'vue-router';
import { ref } from 'vue';

const router = useRouter();
const route = useRoute();

const openSubmenu = ref(null);

const navigate = (link) => {
    router.push(link);
}

const toggleSubmenu = (submenuId) => {
    if (openSubmenu.value === submenuId) {
        openSubmenu.value = null;
    } else {
        openSubmenu.value = submenuId;
    }

    // Close other submenus
    const submenus = document.querySelectorAll('.nav-content');
    submenus.forEach(submenu => {
        if (submenu.id !== submenuId) {
            submenu.classList.remove('show');
        }
    });

    // Toggle the 'show' class on the clicked submenu
    const clickedSubmenu = document.getElementById(submenuId);
    if (clickedSubmenu) {
        clickedSubmenu.classList.toggle('show');
    }
}
</script>

<style scoped>
.nav-item .nav-link.active-link {
    background: linear-gradient(to right, rgba(246, 249, 255, 0.3) 0%, rgba(246, 249, 255, 0) 100%);
    border-left: 3px solid #ffffff;
}

.nav-item .nav-link.active-link i img {
    filter: brightness(1.2);
}

.nav-content.show {
    display: block !important;
}
.active-submenu-link {
    text-decoration: underline;
    color: white;

}
</style>
