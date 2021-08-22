<template>
    <nav class="sidebar" :class="{active: isActive}">
 
        <!-- close sidebar menu -->
        <div class="dismiss" @click="nonAktif">
            <i class="fas fa-arrow-left"></i>
        </div>
 
        <div class="logo">
            <h3><a href="index.html">Bootstrap 4  with Sidebar Menu</a></h3>
        </div>
 
        <ul class="list-unstyled menu-elements">
            <li class="active">
                <router-link to="/">Home</router-link>
            </li>
            <li>
                <router-link to="/artisan">Tukang</router-link>
            </li>
            <li>
                <router-link to="/profile">Profile</router-link>
            </li>
            <li>
                <a class="scroll-link" href="#section-5"><i class="fas fa-pencil-alt"></i> Portfolio</a>
            </li>
            <li>
                <a class="scroll-link" href="" @click.prevent="setLogout"><i class="fas fa-lock"></i>Logout</a>
            </li>
            <li>
                <a href="#otherSections" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
                    <i class="fas fa-sync"></i>Other sections
                </a>
                <ul class="collapse list-unstyled" id="otherSections">
                    <li>
                        <a class="scroll-link" href="#section-3">Our projects</a>
                    </li>
                    <li>
                        <a class="scroll-link" href="#section-4">We think that...</a>
                    </li>
                </ul>
            </li>
        </ul>
 
        <div class="to-top">
            <a class="btn btn-primary btn-customized-3" href="#" role="button">
                <i class="fas fa-arrow-up"></i> Top
            </a>
        </div>
 
        <div class="dark-light-buttons">
            <a class="btn btn-primary btn-customized-4 btn-customized-dark" href="#" role="button">Dark</a>
            <a class="btn btn-primary btn-customized-4 btn-customized-light" href="#" role="button">Light</a>
        </div>
 
    </nav>
    <!-- End sidebar -->

    <div class="overlay" :class="{active: isActive}" @click="nonAktif"></div>
 
    <!-- Content -->
    <div class="content">
        <div class="row">
            <a class="btn btn-primary btn-customized open-menu" href="#" role="button" @click.prevent="setAktif" >
                    <i class="fas fa-align-left"></i> <span>Menu</span>
            </a>
        </div>
      <div class="top-content section-container" id="top-content">
        <div class="py-5">
            <router-view/>
        </div>
      </div>
      
    </div>
  
</template>
<script>
import axios from 'axios'
export default {
    name: 'admin_layout',
    data() {
       return {
         isActive:false
       }
    },
    watch:
    {
        $route (to, from){
            this.isActive = false;
            console.log(to);
        }
    },
    methods:{
        nonAktif:function(event)
        {
          this.isActive=false
        },
        setAktif:function(event)
        {
          this.isActive=true
        },
        async setLogout() {
            
            await axios.post('/logout');
            await this.$router.push('/login')
        }
    }
  };
</script>
<style>
.top-content {
    padding-top: 35px;;
}
</style>
