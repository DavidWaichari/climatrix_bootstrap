// resources/js/router.js

import { createRouter, createWebHistory } from 'vue-router';


//Home Page
import Homepage from './components/Homepage.vue';
//Auth
import Register from './components/auth/Register.vue'
import Login from './components/auth/Login.vue'
import VerifyOtp from './components/auth/VerifyOtp.vue';
import ResetPassword from './components/auth/ResetPassword.vue';
import ForgotPassword from './components/auth/ForgotPassword.vue';
import ResetPasswordMessage from './components/auth/ResetPasswordMessage.vue';

//Auth
import ClientLayout from './components/layouts/client/Layout.vue';
import DashboardIndex from './components/client/dashboard/Index.vue';
import SelfAssessmentIndex from './components/client/self_assessment/Index.vue';
import GHGManagementIndex from './components/client/ghg_management/main/Index.vue';
import GHGManagementScopeOneIndex from './components/client/ghg_management/scope_one/Index.vue';
import GHGManagementScopeTwoIndex from './components/client/ghg_management/scope_two/Index.vue';
import GHGManagementScopeThreeIndex from './components/client/ghg_management/scope_five/Index.vue';
import PhysicalRisktIndex from './components/client/physical_risk/main/Index.vue';
import TransitionRisktIndex from './components/client/transition_risk/main/Index.vue';
import CarbonOffsetIndex from './components/client/carbon_offset/main/Index.vue';
import PeerComparisonIndex from './components/client/peer_comparison/Index.vue';
import ReportsIndex from './components/client/reports/Index.vue';
import HelpIndex from './components/client/help/Index.vue';

//Admin Routes
import AdminLayout from './components/layouts/admin/Layout.vue';
import AdminDashboard from './components/admin/dashboard/Index.vue';
import AdminUsersAndOrganizations from './components/admin/usersandorganizations/Index.vue';
import AdminOrganizationsOnboard from './components/admin/usersandorganizations/OrganizationsOnboard.vue';
import AdminManageAdmins from './components/admin/usersandorganizations/ManageAdmins.vue';
import AdminCustomers from './components/admin/usersandorganizations/Customers.vue';
import AdminRiskMaps from './components/admin/physical_risk/RiskMap.vue';
import AdminIndustries from './components/admin/transition_risk/Industries.vue';
import AdminProducts from './components/admin/products/Index.vue';
import AdminActivityLogs from './components/admin/activity_logs/Index.vue';
import AdminUserRoles from './components/admin/user_roles/Index.vue';
import AdminSystemSettings from './components/admin/system_settings/Index.vue';

// Define your routes
const routes = [
    { path: '/', component: Homepage },
    { path: '/login', component: Login },
    { path: '/verify_otp', component: VerifyOtp },
    { path: '/register', component: Register },
    { path: '/forgot_password', component: ForgotPassword },
    { path: '/reset_password_message', component: ResetPasswordMessage },
    { path: '/password/reset/:token', component: ResetPassword, props: (route) => ({ token: route.params.token, email: route.query.email }) },
    { path: '/admin', component: AdminLayout,
        children:[
            { path: 'dashboard', component: AdminDashboard },
            { path: 'users_and_organizations', component: AdminUsersAndOrganizations },
            { path: 'users_and_organizations/organizations_onboard', component: AdminOrganizationsOnboard },
            { path: 'users_and_organizations/admins', component: AdminManageAdmins },
            { path: 'users_and_organizations/customers', component: AdminCustomers },
            { path: 'physical_risk/risk_maps', component: AdminRiskMaps },
            { path: 'transition_risk/industries', component: AdminIndustries },
            { path: 'products', component: AdminProducts },
            { path: 'activity_logs', component: AdminActivityLogs },
            { path: 'user_roles', component: AdminUserRoles },
            { path: 'system_settings', component: AdminSystemSettings },
        ]
    },
    { path: '/', component: ClientLayout,
        children:[
            { path: 'dashboard', component: DashboardIndex },
            { path: 'self_assessment', component: SelfAssessmentIndex },
            { path: 'ghg_management', component: GHGManagementIndex },
            { path: 'ghg_management/scope_one', component: GHGManagementScopeOneIndex },
            { path: 'ghg_management/scope_two', component: GHGManagementScopeTwoIndex },
            { path: 'ghg_management/scope_five', component: GHGManagementScopeThreeIndex },
            { path: 'physical_risk', component: PhysicalRisktIndex },
            { path: 'transition_risk', component: TransitionRisktIndex },
            { path: 'carbon_offset', component: CarbonOffsetIndex },
            { path: 'peer_comparison', component: PeerComparisonIndex },
            { path: 'reports', component: ReportsIndex },
            { path: 'help', component: HelpIndex },
        ]
    }
];


// Create the router instance and pass the `routes` option
const router = createRouter({
    history: createWebHistory(),
    routes, // short for `routes: routes`
});

export default router;
