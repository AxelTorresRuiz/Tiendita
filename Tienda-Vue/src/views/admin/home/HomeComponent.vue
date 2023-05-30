<template>
<!-- Navigation-->
<NavFrontComponent />
        <!-- Header-->
        <header class="bg-dark py-5" style="background-image: url(https://i.imgur.com/lUGHGT5.jpg);">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bold text-light font-monospace">Japón Con Jamón</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Tú tienda de manga favorita!</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5" v-for="x in data" v-bind:key="x.product.id">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" :src="url+'img/products/'+x.product.img" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{x.product.name}}</h5>
                                    <!-- Product price-->
                                    ${{ x.product.price.toFixed(2) }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                  <router-link class="btn btn-outline-dark mt-auto" 
                                  :to="'/details/'+x.product.slug">Ver Más</router-link></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <FooterFrontComponent />
        
</template>
<script>
import FooterFrontComponent from '@/components/layoutsfrontend/FooterFrontComponent.vue';
import NavFrontComponent from '@/components/layoutsfrontend/NavFrontComponent.vue';
import axios from 'axios';
  
    export default{
        name:'HomeComponent',
        components:{
    NavFrontComponent,
    FooterFrontComponent
},
data(){
    return{
        categorys:[],
        data:[],
        loaded:false,
        url:""
        }
    },created() {
      this.url = process.env.VUE_APP_IMG
        axios.get(process.env.VUE_APP_URL+"products").then( (result)=>{
            if(result.data.status == 'success'){
                this.data = result.data.data
            }
        } )
    },
}
</script>

<style>
body {
  color: #5a5a5a;
}
.carousel {
  margin-bottom: 4rem;
}
.textbig{
    color: black;
    text-decoration: solid;
    text-decoration: underline;
}
.textbig2{
    color: black;
    text-decoration: solid;
    text-decoration: underline;
    text-align: right; 
}
.textbig3{
    color: black;
    text-decoration: solid;
    text-decoration: underline;
    text-align: right;
    text-align: bottom;
}
.textsmall{
  color: black;
  text-decoration: solid;
  
}
.textsmall2{
  color: black;
  text-decoration: solid;
  text-align: right;
}
.textsmall3{
  color: black;
  text-decoration: solid;
  text-align: right;
  text-align:bottom;
}
.imagencita{
  opacity: 90%;
  margin-left: 20%;
  margin-bottom:10%;
}
.imagencita2{
  opacity: 90%;
  margin-left: 20%;
  margin-top:0%;
}
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}
.carousel-item {
  height: 32rem;
  background-color:lightsteelblue;
}
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}

.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}
.featurette-divider {
  margin: 5rem 0; 
}
.featurette-heading {
  letter-spacing: -.05rem;
}
@media (min-width: 40em) {

  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}
@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}
    </style>