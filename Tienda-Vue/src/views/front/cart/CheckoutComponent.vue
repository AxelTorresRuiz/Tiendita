<template>
    <div>
        <NavFrontComponent/>
        <section class="py-5 container">
     <div class="row">
        <!--Informacion-->
        <div class="col-8">
            <!--STEP1-->
            <div class="row" v-if="step == 1">
                <h3 class="h5">Datos Personles</h3>
                <form action="">
                    <div class="row">
                        <div class="col form-group">
                            <label for="">Nombre:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col form-group">
                            <label for="">Apellido:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Telefono:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <button @click="step = 2" class="btn btn-outline-primary" type="button">
                            <i class="fa fa-arrow-right"></i> Siguiente
                        </button>
                    </div>
                </form>
            </div>
            <!--STEP2-->
            <div class="row" v-if="step == 2"> 
                <h2 class="h5">Datos del Envio</h2>
                 <form>
                    <div class="form-group">
                        <label for="">Dirección:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Codigo Postal:</label>
                        <input type="number" min="1000" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Referencia:</label>
                        <input type="text" class="form-control">
                    </div>
                 </form>
                <div class="form-group">
                    <button @click="step = 3" class="btn btn-outline-primary" type="button">
                        <i class="fa fa-arrow-right"></i> Siguiente
                    </button>
                </div>
            </div>

             <!--STEP3-->
             <div class="row" v-if="step == 3">
                <h2 class="h5">Metodo de Pago</h2>
                <div class="form-group">
                    <button class="btn btn-outline-primary">
                         <i class="fa fa-arrow-right"></i> Finalizar
                    </button>
                </div>
            </div>
            <!--END COL-->
        </div>
        <!--Detalles Carrito-->
        <div class="col-4">
            <h2 class="h5">Tus Productos</h2>
            <div class="row p-4" v-for="item in items" v-bind:key="item.id">
                <div class="col-4">
                    <img class="imgCart" style="width: 80%; height: 80%;" :src="url+'img/products/'+item.img" alt="img producto" />
                </div>
                <div class="col-8">
                    <h6> {{ item.name }} </h6>
                    <p><b>${{ item.price.toFixed(2) }}</b></p>
                    <p><b>Cantidad:  </b>{{ item.cantidad.toFixed(2) }}</p>
                    <p><b>Subtotal:  </b>${{(item.price * item.cantidad).toFixed(2)  }}</p>
                </div>
            </div>
            <div class="row">
                <h4>Total: ${{total.toFixed(2) }}</h4>
            </div>
        </div>
    </div>  
    </section>
</div>
   
</template>
<script>
import NavFrontComponent from '@/components/layoutsfrontend/NavFrontComponent.vue';

    export default{
    name: "CheckoutComponent",
    components: { NavFrontComponent },
    data(){
        return{
            step:1,
            items:[],
            total:0,
            url:""
        }
    },
    mounted() {
        this.url = process.env.VUE_APP_IMG
        if(localStorage.getItem('carrito')){
            this.items = JSON.parse(localStorage.getItem('carrito') )
            this.items.forEach(item=>(
                this.total += item.price * item.cantidad
            ))
        }
    },
}
</script>