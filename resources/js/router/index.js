import { createRouter, createWebHistory } from 'vue-router'


import Home from '../pages/Home';
import ArtisanIndex from '../pages/ArtisanIndex'
import Profile from '../pages/Profile';
import LoginLayout from '../pages/LoginLayout'



 
let routes = [
	{ path: '/', name:'Home',component: Home },
    {path: '/artisan',name:'ArtisanIndex',component:ArtisanIndex},
    { path:'/profile',name:'Profile',component:Profile},
    {path:'/login',name:'Login',component:LoginLayout}
];


let router = createRouter({
    history: createWebHistory(),
    routes,
  })


export default router;