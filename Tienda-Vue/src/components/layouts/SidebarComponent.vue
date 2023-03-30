<template>
  <!--navbar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-ico n"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item" >
      <router-link to="/admin" class="nav-link" >Inicio</router-link>
       </li>
    <li class="nav-item">
      </li>
    <li class="nav-item">
     <router-link to="/admin/pedidos" class="nav-link">Pedidos</router-link>
      </li>
    <li class="nav-item">
      </li>
     <li class="nav-item">
        <router-link to="/admin/products" class="nav-link">Productos</router-link>
        </li>
      <li class="nav-item">
        <router-link to="/admin/settings" class="nav-link">Usuarios</router-link>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <!--end navbar-->
  <!--sidebar-->
<!--<ul class="nav flex-column p-4" style="background-color: lightsteelblue; height:600px;">
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
</ul>-->
</template>
<script>
export default{
        name:'SidebarComponent'
    }
</script>