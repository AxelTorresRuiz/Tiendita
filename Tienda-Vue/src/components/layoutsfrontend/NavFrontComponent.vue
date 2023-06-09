<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark bg-gradient">
            <div class="container px-4 ">
                <div class="d-flex ">
                    
                <router-link to="/admin" class="h1 navbar-brand text-light">
                    <img src="@/assets/img/sharingan.png" width="35"/>
                    Inicio
                 </router-link>
            </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active text-light" target="_blank" href="https://youtu.be/dQw4w9WgXcQ">Acerca de</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><router-link to="/admin" class="navbar-brand text-dark">Todos los productos</router-link></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li>
                                    <router-link class="navbar-brand text-dark" 
                                    :to="'/details/tasogare-otome-x-amnesia-manga'">Productos populares</router-link>
                                </li>
                                <li><router-link class="navbar-brand text-dark" 
                                    :to="'/details/dragon-ball-super-manga'">Nuevos productos!</router-link></li>
                            </ul>
                        </li>
                    </ul>
                    <CartComponent />   
                </div>
            </div>
        </nav>
</template>
<script>
import CartComponent from '../CartComponent.vue';

    export default{
    name: "NavFrontComponent",
    components: { CartComponent }
}
</script>