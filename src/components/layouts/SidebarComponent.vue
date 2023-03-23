<template>
<ul class="nav flex-column p-4" style="background-color: lightsteelblue;">
  <li class="nav-item" >
    <router-link to="/admin" class="nav-link" >Inicio</router-link>
  </li>
  <li class="nav-item">
    <router-link to="/admin/pedidos" class="nav-link">Pedidos</router-link>
  </li>
  <li class="nav-item">
    <router-link to="/admin/products" class="nav-link">Productos</router-link>
  </li>
  <li class="nav-item">
    <router-link to="/admin/usuarios" class="nav-link">Usuarios</router-link>
  </li>
</ul>
</template>
<script>
export default{
        name:'SidebarComponent'
    }
</script>