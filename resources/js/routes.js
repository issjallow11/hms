export default [
    { path: '/dashboard', component: require('./components/Dashboard.vue').default },
    { path: '/clients', component: require('./components/Booking_and_Registration/Patients.vue').default},
    { path: '/client/show/:id', name: 'clientsShow', props: true, component: require('./components/Booking_and_Registration/PatientView.vue').default},
    { path: '/client/Register', component: require('./components/Booking_and_Registration/PatientRegistration.vue').default},
    { path: '/profile', component: require('./components/Profile.vue').default },
    { path: '/developer', component: require('./components/Developer.vue').default },
    { path: '/users', component: require('./components/Users.vue').default },
    { path: '/products', component: require('./components/product/Products.vue').default },
    { path: '/product/tag', component: require('./components/product/Tag.vue').default },
    { path: '/product/category', component: require('./components/product/Category.vue').default },
    { path: '*', component: require('./components/NotFound.vue').default }
];
