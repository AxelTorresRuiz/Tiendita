<template>
    <HeaderComponent/>
    <div class="row">
        <aside class="col-3">
            <SidebarComponent/>
            <!--END SIDEBAR-->
        </aside>
        <main class="col-9">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <router-link to="/admin/products" class="nav-link">
                   <img src="@/assets/img/male.png" alt="" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    </router-link> 
                   <div class="container">
                    <div class="carousel-caption text-start">
                        <h1 class="textbig">OFERTA RELAMPAGO</h1>
                        <p class="textbig">Correle que se acaban!</p>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                    <div class="container">
                    <div class="carousel-caption">
                        <h1 class="textbig">Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                    <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                    </div>
                    </div>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
            
            <!--END MAIN CONTENT-->
        </main>
        <!--END ROW MAIN-->
    </div>
    
</template>
<script>
    import HeaderComponent from '@/components/layouts/HeaderComponent.vue'
    import SidebarComponent from '@/components/layouts/SidebarComponent.vue'
    export default{
        name:'HomeComponent',
        components:{
            HeaderComponent,
            SidebarComponent
        }
    }
    
</script>

<style>
body {
  padding-top: 3rem;
  padding-bottom: 3rem;
  color: #5a5a5a;
}
.carousel {
  margin-bottom: 4rem;
}
.textbig{
    color: black;
}
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}
.carousel-item {
  height: 32rem;
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