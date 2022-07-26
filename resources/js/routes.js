export default [
    {
        path: "/dashboard",
        component: require("./components/Dashboard.vue").default,
    },
    {
        path: "/clients",
        component:
            require("./components/Booking_and_Registration/clients/Clients.vue")
                .default,
    },
    {
        path: "/client/show/:id",
        name: "clientsShow",
        props: true,
        component:
            require("./components/Booking_and_Registration/clients/ClientView.vue")
                .default,
    },
    {
        path: "/client/Register",
        component:
            require("./components/Booking_and_Registration/clients/ClientRegistration.vue")
                .default,
    },
    {
        path: "/client/edit/:id",
        name: "clientEdit",
        props: true,
        component:
            require("./components/Booking_and_Registration/clients/ClientEdit.vue")
                .default,
    },
    {
        path: "/visitors",
        component:
            require("./components/Booking_and_Registration/visitors/Visitors.vue")
                .default,
    },
    // { path: '/visitors/add', component: require('./components/Booking_and_Registration/visitors/VisitorsAdd.vue').default},
    {
        path: "/visitors/add",
        component:
            require("./components/Booking_and_Registration/visitors/AddVisitors.vue")
                .default,
    },

    //clinical modules routes
    {
        path: "/clinicalModule/",
        component: require("./components/Clinical_Module/ClinicalModule.vue")
            .default,
    },
    {
        path: "/GeneralOPD/:visitId/:clientId",
        name: "generalOPD",
        props: true,
        component: require("./components/Clinical_Module/GeneralOPD.vue")
            .default,
    },
    {
        path: "/Lab/",
        component: require("./components/Clinical_Module/Lab/Lab.vue").default,
    },
    {
        path: "/LabAdd/:visitId/:clientId",
        name: "labAdd",
        props: true,
        component: require("./components/Clinical_Module/Lab/LabAdd.vue")
            .default,
    },
    {
        path: "/pregnancyTest/",
        component: require("./components/Clinical_Module/PregnancyTest.vue")
            .default,
    },
    {
        path: "/AnterNatalCare/:visitId/:clientId",
        name: "anterNatalCare",
        props: true,
        component: require("./components/Clinical_Module/AnterNatalCare.vue")
            .default,
    },
    {
        path: "/PostNatalCare/:visitId/:clientId",
        name: "postNatalCare",
        props: true,
        component: require("./components/Clinical_Module/PostNatalCare.vue")
            .default,
    },
    {
        path: "/IWC/:visitId/:clientId",
        name: "iwc",
        props: true,
        component: require("./components/Clinical_Module/IWC.vue").default,
    },
    {
        path: "/Vaccination/:visitId/:clientId",
        name: "vaccination",
        props: true,
        component: require("./components/Clinical_Module/Vaccination.vue")
            .default,
    },
    {
        path: "/FP_Services/:visitId/:clientId",
        name: "fp_services",
        props: true,
        component: require("./components/Clinical_Module/FPServices.vue")
            .default,
    },
    {
        path: "/CondomSupply/:visitId/:clientId",
        name: "condomSupply",
        props: true,
        component: require("./components/Clinical_Module/CondomSupply.vue")
            .default,
    },
    {
        path: "/SexualHealthScreening/:visitId/:clientId",
        name: "sexualHealthScreening",
        props: true,
        component:
            require("./components/Clinical_Module/SexualHealthScreening.vue")
                .default,
    },
    {
        path: "/Symptoms/:visitId/:clientId",
        name: "symptoms",
        props: true,
        component: require("./components/Clinical_Module/Symptoms.vue").default,
    },
    {
        path: "/UltraSoundScanning/:visitId/:clientId",
        name: "ultrasoundScanning",
        props: true,
        component:
            require("./components/Clinical_Module/UltrasoundScanning.vue")
                .default,
    },
    {
        path: "/InfertilityManagement/:visitId/:clientId",
        name: "infertiltiyManagement",
        props: true,
        component:
            require("./components/Clinical_Module/InfertilityMangaement.vue")
                .default,
    },
    {
        path: "/CervicalScreening/:visitId/:clientId",
        name: "cervicalScreening",
        props: true,
        component: require("./components/Clinical_Module/CervicalScreening.vue")
            .default,
    },
    {
        path: "/ResultsCommunication/:visitId/:clientId",
        name: "resultsCommunication",
        props: true,
        component:
            require("./components/Clinical_Module/ResultsCommunication.vue")
                .default,
    },
    {
        path: "/ReturnForTreatment/:visitId/:clientId",
        name: "returnForTreatment",
        props: true,
        component:
            require("./components/Clinical_Module/ReturnForTreatment.vue")
                .default,
    },
    {
        path: "/Prescription/:visitId/:clientId",
        name: "prescription",
        props: true,
        component: require("./components/Clinical_Module/Prescription.vue")
            .default,
    },
    {
        path: "/Referral",
        name: "referral",
        props: true,
        component:
            require("./components/Clinical_Module/Referrals/Referrals.vue")
                .default,
    },
    {
        path: "/STI_ContactTracing/:visitId/:clientId",
        name: "stiContactTracing",
        props: true,
        component:
            require("./components/Clinical_Module/STI_ContactTracing.vue")
                .default,
    },

    {
        path: "/profile",
        component: require("./components/Profile.vue").default,
    },
    {
        path: "/developer",
        component: require("./components/Developer.vue").default,
    },
    { path: "/users", component: require("./components/Users.vue").default },
    // { path: '/products', component: require('./components/product/Products.vue').default },
    // { path: '/product/tag', component: require('./components/product/Tag.vue').default },
    // { path: '/product/category', component: require('./components/product/Category.vue').default },

    //configurations
    {
        path: "/settings/ethnicity",
        component: require("./components/configurations/Ethinicity.vue")
            .default,
    },
    {
        path: "/settings/sex",
        component: require("./components/configurations/SexualOrientation.vue")
            .default,
    },
    {
        path: "/settings/gender",
        component: require("./components/configurations/Gender.vue").default,
    },
    {
        path: "/settings/education_level",
        component: require("./components/configurations/Education.vue").default,
    },
    {
        path: "/settings/occupation",
        component: require("./components/configurations/Occupation.vue")
            .default,
    },

    { path: "*", component: require("./components/NotFound.vue").default },
];
