<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <a href="https://shouts.dev/" target="_blank"><img src="https://i.imgur.com/Nt3kJXa.png"></a><br>
            <span class="text-secondary">Laravel SPA with Vue 3, Auth (Sanctum), CURD Example</span>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <app-sidebar/>
        </nav>
        <br/>
        
    </div>
</template>

<script>
import AppSidebar from './AppSidebar.vue'
export default {
  components: { AppSidebar },
    name: "Layout",
    data() {
        return {
            isLoggedIn: false,
        }
    },
    created() {
        
    },
    methods: {
        
    },
}
</script>