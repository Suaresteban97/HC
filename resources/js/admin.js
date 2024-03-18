const adminApp = Vue.createApp({

    mounted() {
        console.log("funcionando");
    },

    data(){
        return {

        }
    },

    computed: {

    }, 

    methods: {

    },

    components: {
        'vue-select': VueNextSelect,
    },

}).mount("#admin-page");

export default adminApp;