<template>
<div>
    <NavFrontComponent/>
    <div class="row">
        <!--Informacion-->
        <div class="col-8">
            <!--STEP1-->
            <div class="row">
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
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-conrol">
                        <button class="btn btn-outline-primary">
                            <i class="fa fa-arrow-right"></i> Siguiente
                        </button>
                    </div>
                </form>
            </div>
            <!--STEP2-->
            <div class="row"></div>
            <!--END COL-->
        </div>
        <!--Detalles Carrito-->
        <div class="col-4">
            <h2 class="h5">Tus Productos</h2>
        </div>
    </div>        
</div>
</template>
<script>
import NavFrontComponent from '@/components/layoutsfrontend/NavFrontComponent.vue';

    export default{
    name: "CheckoutComponent",
    components: { NavFrontComponent }
}
</script>