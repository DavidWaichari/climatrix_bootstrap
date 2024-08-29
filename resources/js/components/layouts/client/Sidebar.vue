<template>
    <aside id="sidebar" class="sidebar"
        style="background-image: url('/assets/ui/images/sidebar.svg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <router-link class="nav-link" to="/dashboard" exact active-class="active-link">
                    <i><img src="/assets/ui/images/menu-dashbaord.svg" alt="Dashboard"
                            style="width:20px; margin-right:5px" /></i>
                    <span class="ml-2">Dashboard</span><i></i>
                </router-link>
            </li>

            <li class="nav-item">
                <router-link class="nav-link" to="/self_assessment" active-class="active-link">
                    <i><img src="/assets/ui/images/SelfAssessment.svg" alt="Self Assessment"
                            style="width:20px; margin-right:5px" /></i>
                    <span class="ml-2">Self Assessment</span><i></i>
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
                        <router-link to="/ghg_management/scope_three" active-class="active-submenu-link">
                           <span>GHG Scope 3</span>
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
                    <span>Physical Risk</span><i></i>
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
                <router-link class="nav-link" to="/transition_risk" active-class="active-link">
                    <i><img src="/assets/ui/images/TransitionRisk.svg" alt="Transition Risk"
                            style="width:20px; margin-right:5px"></i>
                    <span class="ml-2">Transition Risk</span><i></i>
                </router-link>
            </li>

            <li class="nav-item">
                <router-link class="nav-link" to="/carbon_offset" active-class="active-link">
                    <i><img src="/assets/ui/images/CarbonOffset.svg" alt="Carbon Offset"
                            style="width:20px; margin-right:5px"></i>
                    <span class="ml-2">Carbon Offset</span><i></i>
                </router-link>
            </li>

            <li class="nav-item">
                <router-link class="nav-link" to="/peer_comparison" active-class="active-link">
                    <i><img src="/assets/ui/images/PeerComparison.svg" alt="Peer Comparison"
                            style="width:20px; margin-right:5px"></i>
                    <span class="ml-2">Peer Comparison</span><i></i>
                </router-link>
            </li>

            <li class="nav-item">
                <router-link class="nav-link" to="/reports" active-class="active-link">
                    <i><img src="/assets/ui/images/Reports.svg" alt="Reports" style="width:20px; margin-right:5px"></i>
                    <span class="ml-2">Reports</span><i></i>
                </router-link>
            </li>

            <li class="nav-item">
                <router-link class="nav-link" to="/help" active-class="active-link">
                    <i><img src="/assets/ui/images/Help.svg" alt="Help" style="width:20px; margin-right:5px"></i>
                    <span class="ml-2">Help</span><i></i>
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
    display: block;
}

.nav-content {
    padding-left: 15px;
}

.nav-content .nav-link {
    padding: 5px 0;
    font-size: 14px;
}

.nav-content .active-submenu-link {
    text-decoration: underline;
}
</style>
