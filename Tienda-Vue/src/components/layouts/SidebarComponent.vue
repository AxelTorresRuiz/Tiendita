<template>
<ul class="nav flex-column p-4" style="background-color: lightsteelblue; height:600px;">
  <li class="nav-item">
   <p>............................</p>
  </li>
  <li class="nav-item" >
    <router-link to="/admin" class="nav-link" >Inicio</router-link>
  </li>
  <li class="nav-item">
   <p>............................</p>
  </li>
  <li class="nav-item">
    <router-link to="/admin/pedidos" class="nav-link">Pedidos</router-link>
  </li>
  <li class="nav-item">
   <p>............................</p>
  </li>
  <li class="nav-item">
   <p></p>
  </li>
  <li class="nav-item">
    <router-link to="/admin/products" class="nav-link">Productos</router-link>
  </li>
  <li class="nav-item">
   <p>............................</p>
  </li>
  <li class="nav-item">
    <router-link to="/admin/settings" class="nav-link">Usuarios</router-link>
  </li>
  <li class="nav-item">
   <p>............................</p>
  </li>
</ul>
</template>
<script>
export default{
        name:'SidebarComponent'
    }
</script>