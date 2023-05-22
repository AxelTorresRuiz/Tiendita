<template>
    <div>
        <NavFrontComponentVue />
        <section class="py-5 container">
            <h2 class="text-center">Shopping Card</h2>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Img</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>SubTotal</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in items" v-bind:key="item.id">
                        <td>{{  item.id  }}</td>
                        <td><img class="imgCart" :src="url+'img/products/'+item.img" alt="img producto" /></td>
                        <td>{{  item.name  }}</td>
                        <td>${{  item.price.toFixed(2)  }}</td>
                        <td>{{  item.cantidad.toFixed(2)  }}</td>
                        <td>${{  (item.price * item.cantidad).toFixed(2)  }}</td>
                        <td>
                            <button class="btn btn-outline-danger" @click="borrar(index)">x</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h6 class="text-end">Total: ${{ total.toFixed(2) }}</h6>
            <div class="row d-flex justify-content-between">
                <button class="btn btn-outline-danger btn-sm col-1" @click="vaciar">
                    <i class="fa fa-trash">
                    </i> Vaciar
                </button>
                <router-link to="checkout" class="btn btn-outline-success col-1" >
                    <i class="fa fa-credit-card"></i>Pagar
                </router-link>
            </div>
        </section>
    </div>
</template>
<script>
    import NavFrontComponentVue from '@/components/layoutsfrontend/NavFrontComponent.vue';
    export default{
        name:'CartComponent',
        components:{
            NavFrontComponentVue
        },
        data(){
            return{
                items:[],
                total:0,
                url:""
            }
        },
        mounted(){
            if(localStorage.getItem('carrito')){
                this.items = JSON.parse(localStorage.getItem('carrito'))
                this.items.forEach(item=>{
                this.total += item.price * item.cantidad
            })
            }
        },created() {
            this.url = process.env.VUE_APP_IMG
        },
        methods: {
           vaciar(){
            this.items = []
            this.total = 0
            localStorage.removeItem('carrito')
           },
           borrar(index){
            this.items.splice(index,1)
            this.total = 0
            this.items.forEach(item=>{
                this.total += item.price * item.cantidad
            })
            localStorage.setItem('carrito', JSON.stringify(this.items))
           }
        }
    }
</script>

<style>
    .imgCart{
        width: 45px;
        height: 45px;
    }
</style>