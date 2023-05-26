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
                            <input type="text" class="form-control" v-model="name">
                        </div>
                        <div class="col form-group">
                            <label for="">Apellido:</label>
                            <input type="text" class="form-control" v-model="ap">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Telefono:</label>
                        <input type="text" class="form-control" v-model="phone">
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" v-model="email">
                    </div>
                    <div class="form-group">
                        <div class="alert alert-danger p-2" v-if="formValid">
                            <p><b>Error:</b> Favor de llenar todos los campos</p>
                        </div>
                        <button @click="validateF(  )" class="btn btn-outline-primary" type="button">
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
                        <input type="text" class="form-control" v-model="address">
                    </div>
                    <div class="form-group">
                        <label for="">Codigo Postal:</label>
                        <input type="number" min="1000" class="form-control" v-model="cp">
                    </div>
                    <div class="form-group">
                        <label for="">Referencia:</label>
                        <input type="text" class="form-control" v-model="reference">
                    </div>
                 </form>
                <div class="form-group">
                    <div class="alert alert-danger p-2" v-if="formValid2">
                            <p><b>Error:</b> Favor de llenar todos los campos</p>
                        </div>
                    <button @click="validateEnvio()" class="btn btn-outline-primary" type="button">
                        <i class="fa fa-arrow-right"></i> Siguiente
                    </button>
                </div>
            </div>

             <!--STEP3-->
             <div class="row" v-if="step == 3">
                <h2 class="h5">Metodo de Pago</h2>
                <div class="form-group">
                    <div v-if="!paid" id="btnPaypal"></div>
                    <div v-else id="confirmation"> Order Complete!</div>
                    <button class="btn btn-outline-primary" @click="sendData()">
                         <i class="fa fa-arrow-right"></i> Finalizar Pedido
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
import axios from 'axios';
import {loadScript} from "@paypal/paypal-js";

    export default{
    name: "CheckoutComponent",
    components: { NavFrontComponent },
    data(){
        return{
            step:1,
            items:[],
            total:0,
            url:"",
            formValid:false,
            formValid2:false,

            name:"Aaron",
            ap:"Valdez",
            email:"xXPussyDestroyerXx@gmail.com",
            phone:"6361278829",
            address:"Mi casa",
            cp:"31700",
            reference:"mucho maincra",
            
            paypal:null,
            paid:false,
        }
    },
    async mounted() {
        this.url = process.env.VUE_APP_IMG
        if(localStorage.getItem('carrito')){
            this.items = JSON.parse(localStorage.getItem('carrito') )
            this.items.forEach(item=>(
                this.total += item.price * item.cantidad
            ))
        }
    },
    methods: {
        validateF(){
            if(this.name.trim() !="" && this.ap.trim() !="" &&
            this.email.trim()!="" && this.phone.trim() !=""){
                this.step=2
            }else{
                this.formValid = true
            }
        },
        validateEnvio(){
            if(this.address.trim() !="" && this.cp !="" &&
            this.reference.trim()!=""){
                this.step=3
                loadScript({
                    'client-id':"AX3oSZu7n95Rj-o3gRgk2wdwGMS5R6EcX7B9Wa3x1pmyg-pE6d3s_AjSi-ZI4J-uBoQnvyw4Yh5N-yLR",
                    currency:'MXN'
                }).then((paypal) =>{
                    paypal.Buttons({
                        createOrder: this.createOrder,
                        onApprove: this.onApprove,
                    })
                    .render('#btnPaypal');
                })
            }else{
                this.formValid2 = true
            }
        },
        sendData(){
            let data ={
                name:this.name,
                email:this.email,
                address:this.address,
                phone:this.phone,
                //ap:this.ap,
                items:this.items,
                
            }
            console.log(JSON.stringify(data))
            axios.post(process.env.VUE_APP_URL+"sells",data).then(res=>{
                console.log(res);
            })
        },
        createOrder: function(data, actions){
            console.log('Creando una orden...');
            return actions.order.create({
                purchase_units: [
                    {
                        amount:{
                            value:this.total,
                        }
                    }
                ]
            });
        },
        onApprove: function(data, actions){
            console.log('Orden aprovada...');
            return actions.order.capture().then(() => {
                this.paid = true;
                console.log('uwu')
            })
        }
    },
}
</script>