import * as vueRouter from 'vue-router'
import HomeComponent from '@/views/admin/home/HomeComponent'
import SettingsComponent from '@/views/admin/settings/SettingsComponent'
import NotFoundComponent from '@/views/admin/notfound/NotFoundComponent'
import ProductsComponent from '@/views/admin/products/ProductsComponent'

const routes =[
    {path:'/admin',name:'admin',component:HomeComponent},
    {path:'/admin/settings',name:'settings',component:SettingsComponent},
    {path:'/admin/products',name:'products',component:ProductsComponent},
    {path:'/:pathMatch(.*)*',name:"notfound",component:NotFoundComponent}
    
]
const router =vueRouter.createRouter({
    history:vueRouter.createWebHistory(),
    routes
})
export default router