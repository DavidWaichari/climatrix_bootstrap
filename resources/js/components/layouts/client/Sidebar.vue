<template>
    <aside id="sidebar" class="sidebar"
        style="background-image: url('/assets/ui/images/sidebar.svg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <router-link to='/dashboard' class="nav-link collapsed"
                             :class="{ 'active-link': $route.path.startsWith('/dashboard') }"
                             @click.native="toggleSubmenu('dashboard-nav')">
                    <i><img src="/assets/ui/images/menu-dashbaord.svg" alt="Dashboard"
                            style="width:20px; margin-right:5px"></i>
                    <span>Dashboard</span>
                </router-link>
            </li>
            <li class="nav-item">
                <router-link to='/self_assessment' class="nav-link collapsed"
                             :class="{ 'active-link': $route.path.startsWith('/self_assessment') }"
                             @click.native="toggleSubmenu('self_assessment-nav')">
                    <i><img src="/assets/ui/images/SelfAssessment.svg" alt="Self Assessment"
                            style="width:20px; margin-right:5px"></i>
                    <span>Self Assessment</span>
                </router-link>
            </li>
            <li class="nav-item">
                <router-link to='/ghg_management' class="nav-link collapsed"
                             :class="{ 'active-link': $route.path.startsWith('/ghg_management') }"
                             @click.native="toggleSubmenu('ghg_management-nav')">
                    <i><img src="/assets/ui/images/ghgmanagement.svg" alt="GHG Management"
                            style="width:20px; margin-right:5px"></i>
                    <span>GHG Management</span>
                </router-link>
                <ul id="ghg_management-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <router-link to="/ghg_management/scope_one" active-class="active-submenu-link">
                           <span>GHG Scope 1</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/ghg_management/scope_two" active-class="active-submenu-link">
                           <span>GHG Scope 2</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/ghg_management/scope_five" active-class="active-submenu-link">
                           <span>GHG Scope 5</span>
                        </router-link>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <router-link to='/physical_risk' class="nav-link collapsed"
                             :class="{ 'active-link': $route.path.startsWith('/physical_risk') }"
                             @click.native="toggleSubmenu('physical_risk-nav')">
                    <i><img src="/assets/ui/images/Physicalrisk.svg" alt="Physical Risk"
                            style="width:20px; margin-right:5px"></i>
                    <span>Physical Risk</span>
                </router-link>
                <ul id="physical_risk-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <router-link to="/physical_risk/risk_map" active-class="active-submenu-link">
                           <span>Risk Map</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/physical_risk/earthquakes" active-class="active-submenu-link">
                           <span>Earthquakes</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/physical_risk/ssp2_floods" active-class="active-submenu-link">
                           <span>SSP2 Floods</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/physical_risk/ssp5_floods" active-class="active-submenu-link">
                           <span>SSP5 Floods</span>
                        </router-link>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <router-link to='/transition_risk' class="nav-link collapsed"
                             :class="{ 'active-link': $route.path.startsWith('/transition_risk') }"
                             @click.native="toggleSubmenu('transition_risk-nav')">
                    <i><img src="/assets/ui/images/TransitionRisk.svg" alt="Transition Risk"
                            style="width:20px; margin-right:5px"></i>
                    <span>Transition Risk</span>
                </router-link>
            </li>

            <li class="nav-item">
                <router-link to='/carbon_offset' class="nav-link collapsed"
                             :class="{ 'active-link': $route.path.startsWith('/carbon_offset') }"
                             @click.native="toggleSubmenu('carbon_offset-nav')">
                    <i><img src="/assets/ui/images/CarbonOffset.svg" alt="Carbon Offset"
                            style="width:20px; margin-right:5px"></i>
                    <span>Carbon Offset</span>
                </router-link>
            </li>

            <li class="nav-item">
                <router-link to='/peer_comparison' class="nav-link collapsed"
                             :class="{ 'active-link': $route.path.startsWith('/peer_comparison') }"
                             @click.native="toggleSubmenu('peer_comparison-nav')">
                    <i><img src="/assets/ui/images/PeerComparison.svg" alt="Peer Comparison"
                            style="width:20px; margin-right:5px"></i>
                    <span>Peer Comparison</span>
                </router-link>
            </li>

            <li class="nav-item">
                <router-link to='/reports' class="nav-link collapsed"
                             :class="{ 'active-link': $route.path.startsWith('/reports') }"
                             @click.native="toggleSubmenu('reports-nav')">
                    <i><img src="/assets/ui/images/Reports.svg" alt="Reports" style="width:20px; margin-right:5px"></i>
                    <span>Reports</span>
                </router-link>
            </li>

            <li class="nav-item">
                <router-link to='/help' class="nav-link collapsed"
                             :class="{ 'active-link': $route.path.startsWith('/help') }"
                             @click.native="toggleSubmenu('help-nav')">
                    <i><img src="/assets/ui/images/Help.svg" alt="Help" style="width:20px; margin-right:5px"></i>
                    <span>Help</span>
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
