<template>
    <div>
        <HeaderComponent/>
        <div class="row">
            <aside class="col-2">
                <SidebarComponent/>
            <!--END SIDEBAR-->
            </aside>
            <main class="col-10">
                

                <!--End Main Content-->
            </main>
        </div>
  </div>
</template>

<script>
import HeaderComponent from '@/components/layouts/HeaderComponent.vue'
import SidebarComponent from '@/components/layouts/SidebarComponent.vue'
export default{
    name:'SettingComponent',
    components:{
            HeaderComponent,
            SidebarComponent
        }
}
</script>