<template>
    <div class="d-flex">
        <router-link to="/cart">
            <button class="btn btn-outline-dark">
            <i class="bi-cart-fill me-1"></i>
            Carrini
            <span class="badge bg-dark text-white ms-1 rounded-pill">{{ cantidad }}</span>
            </button>
        </router-link>
        
    </div>
</template>
<script>
export default{
    name:"CartComponent",
    data(){
        return{
            cantidad:0
        }
    },
    mounted() {
        if(localStorage.getItem('carrito')){
            let data = JSON.parse(localStorage.getItem('carrito'))
            this.cantidad=data.length
        }
    }
}
</script>