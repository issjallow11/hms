export default [
    { path: '/dashboard', component: require('./components/Dashboard.vue').default },
    { path: '/clients', component: require('./components/Booking_and_Registration/Clients.vue').default},
    { path: '/client/show/:id', name: 'clientsShow', props: true, component: require('./components/Booking_and_Registration/ClientView.vue').default},
    { path: '/client/Register', component: require('./components/Booking_and_Registration/ClientRegistration.vue').default},
    { path: '/client/edit/:id', name: 'clientEdit', props: true, component: require('./components/Booking_and_Registration/ClientEdit.vue').default},
    { path: '/visitors', component: require('./components/Booking_and_Registration/Visitors.vue').default},
    { path: '/visitors/add', component: require('./components/Booking_and_Registration/VisitorsAdd.vue').default},
    { path: '/profile', component: require('./components/Profile.vue').default },
    { path: '/developer', component: require('./components/Developer.vue').default },
    { path: '/users', component: require('./components/Users.vue').default },
    // { path: '/products', component: require('./components/product/Products.vue').default },
    // { path: '/product/tag', component: require('./components/product/Tag.vue').default },
    // { path: '/product/category', component: require('./components/product/Category.vue').default },
    { path: '*', component: require('./components/NotFound.vue').default }
];
