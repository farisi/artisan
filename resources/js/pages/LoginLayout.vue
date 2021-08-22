<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form @submit.prevent="submit">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" v-model="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label>Passowrd</label>
                                <input type="password" v-model="password" class="form-control" id="passowrd">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import axios from 'axios'

export default  {
    name:'login_layout',
    data(){
        return {
            email:'',
            password:''
        }
    },
    methods: {
        async submit()
        {
            await axios.post('login',{
                email:this.email,
                password:this.password
            });
            this.$root.component = "AdminLayout";
            this.$router.push('/')
        },
        gotoMain(value){

        }
    },
}
</script>
