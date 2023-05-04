<template>
    <div>
        <NavFrontComponent/>
        <section class="py-5 container ">
            <h2 class="text-center">Carrito de Compras</h2>
            <table class="table table-responsive">
                <head>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                    </tr>
                </head>
                <tbody>
                    <tr v-for="item in items" v-bind:key="item.id">
                        <td>{{ item.id }} </td>
                        <td>
                            <img class="px-2" width="30px" 
                        :src="url+'img/products/'+item.img" alt="..." />
                        </td>
                        <td>{{ item.name }}</td>
                        <td>${{ item.price.toFixed(2) }}</td>
                        <td>{{ item.cantidad.toFixed(2) }}</td>
                        <td>${{ (item.price * item.cantidad).toFixed(2) }}</td>
                    </tr>
                </tbody>
            </table>
            <h6 class="text-end">Total: {{ total.toFixed(2) }}</h6>
        </section>
    </div>
    

</template>
<script>
import NavFrontComponent from '@/components/layoutsfrontend/NavFrontComponent.vue';

    export default{
    name: "CartComponent",
    components: { 
        NavFrontComponent
     },
     data() {
        return {
            items:[],
            total:0
        }
     }, mounted() {
        this.url=process.env.VUE_APP_IMG
        this.items= JSON.parse(localStorage.getItem('carrito'))
        this.items.forEach(item=>{
            this.total += item.price * item.cantidad
        })
     },
   
}
</script>