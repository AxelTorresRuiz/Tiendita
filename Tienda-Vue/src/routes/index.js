import * as vueRouter from 'vue-router'
import HomeComponent from '@/views/admin/home/HomeComponent'
import SettingsComponent from '@/views/admin/settings/SettingsComponent'
import NotFoundComponent from '@/views/admin/notfound/NotFoundComponent'
import ProductsComponent from '@/views/admin/products/ProductsComponent'
import PedidosComponent from '@/views/admin/pedidos/PedidosComponent'
import DetailsComponent from '@/views/front/details/DetailsComponent'
import CartComponent from '@/views/front/cart/CartComponent'
import CheckoutComponent from '@/views/front/cart/CheckoutComponent'
import LoginComponent from '@/auth/LoginComponent'

const routes =[
    {path:'/admin',name:'admin',component:HomeComponent},
    {path:'/admin/settings',name:'settings',component:SettingsComponent},
    {path:'/admin/products',name:'products',component:ProductsComponent},
    {path:'/admin/pedidos',name:'pedidos',component:PedidosComponent},
    {path:'/details/:slug', name:'details',component:DetailsComponent},
    {path:'/:pathMatch(.*)*',name:"notfound",component:NotFoundComponent},
    {path:'/checkout', name:'checkout', component:CheckoutComponent},
    {path:'/login', name: 'login', component:LoginComponent},
    {path:'/cart', name:'cart', component:CartComponent}
    
    
]
const router =vueRouter.createRouter({
    history:vueRouter.createWebHistory(),
    routes
})
export default router