export default {
    state: {
        clients: [],
    },
    getters: {
        getClients(state) {
            return state.clients;
        },
    },
    actions: {
        getClientsFromDB(context) {
            axios
                .get("/api/clients")
                .then((res) => {
                    // console.log("vuex data" + res.data);
                    context.commit("clientMutation", res.data);
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
    mutations: {
        clientMutation(state, data) {
            return (state.clients = data.data);
        },
    },
};
