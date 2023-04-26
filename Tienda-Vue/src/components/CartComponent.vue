<template>
    <div class="d-flex">
        <button class="btn btn-outline-dark" type="submit">
            <i class="bi-cart-fill me-1"></i>
            Carrini
            <span class="badge bg-dark text-white ms-1 rounded-pill">{{ cantidad }}</span>
        </button>
    </div>
</template>
<script>
export default{
    name:"CartComponent",
    data(){
        return{
            cantidad:10
        }
    }
}
</script>