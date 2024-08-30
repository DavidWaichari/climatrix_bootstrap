// resources/js/router.js

import { createRouter, createWebHistory } from 'vue-router';

// Import your components
import ClientLayout from './components/layouts/client/Layout.vue';

//Auth
import Login from './components/auth/Login.vue'
import Register from './components/auth/Register.vue'
import DashboardIndex from './components/client/dashboard/Index.vue';
import SelfAssessmentIndex from './components/client/self_assessment/Index.vue';
import GHGManagementIndex from './components/client/ghg_management/main/Index.vue';
import GHGManagementScopeOneIndex from './components/client/ghg_management/scope_one/Index.vue';
import GHGManagementScopeTwoIndex from './components/client/ghg_management/scope_two/Index.vue';
import GHGManagementScopeThreeIndex from './components/client/ghg_management/scope_three/Index.vue';
import PhysicalRisktIndex from './components/client/physical_risk/main/Index.vue';
import TransitionRisktIndex from './components/client/transition_risk/main/Index.vue';
import CarbonOffsetIndex from './components/client/carbon_offset/main/Index.vue';
import PeerComparisonIndex from './components/client/peer_comparison/Index.vue';
import ReportsIndex from './components/client/reports/Index.vue';
import HelpIndex from './components/client/help/Index.vue';
// Define your routes
const routes = [
    { path: '/login', component: Login },
    { path: '/register', component: Register },
    { path: '/', component: ClientLayout,
        children:[
            { path: '/dashboard', component: DashboardIndex },
            { path: '/self_assessment', component: SelfAssessmentIndex },
            { path: '/ghg_management', component: GHGManagementIndex},
            { path: '/ghg_management/scope_one', component: GHGManagementScopeOneIndex},
            { path: '/ghg_management/scope_two', component: GHGManagementScopeTwoIndex},
            { path: '/ghg_management/scope_three', component: GHGManagementScopeThreeIndex},
            { path: '/physical_risk', component: PhysicalRisktIndex },
            { path: '/transition_risk', component: TransitionRisktIndex },
            { path: '/carbon_offset', component: CarbonOffsetIndex },
            { path: '/peer_comparison', component: PeerComparisonIndex },
            { path: '/reports', component: ReportsIndex },
            { path: '/help', component: HelpIndex },
        ]
    }
];

// Create the router instance and pass the `routes` option
const router = createRouter({
    history: createWebHistory(),
    routes, // short for `routes: routes`
});

export default router;
