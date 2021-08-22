<template>
    <component :is="component"></component>
</template>

<script>

import AdminLayout from './pages/AdminLayout.vue';
import LoginLayout from './pages/LoginLayout.vue';
import axios from 'axios';

export default {
    name: 'app',
    components:{
        AdminLayout,
        LoginLayout
    },
    data() {
       return {
           component:"AdminLayout",
           user:''
       }
    },
    async mounted() {
        try
        {
            const {data} = await axios.get('user');
            this.user = data;
        }
        catch(error){
            console.log(" error json " + error.toJSON());
            console.log(" error message " + error.message);
            if(error.message=="Request failed with status code 401"){
                this.component = "LoginLayout";
            }
        }
    },
    watch:{

    },
    methods: {
        // toggle(){
        // if (this.component === "AdminLayout") {
        //     this.component = "LoginLayout";
        // } else {
        //     this.component = "AdminLayout";
        // }
        // }
    }
  };
</script>