<template>
    <div>
        <div class="alert alert-danger" v-if="error">
            <p>Error de credenciales</p>
        </div>
        <form autocomplete="off" @submit.prevent="login" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" class="form-control" placeholder="" v-model="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" v-model="password" required>
            </div>
            <button type="submit" class="btn btn-default">Sign in</button>
        </form>
    </div>

</template>
<script>
  
    import auth from '@/logic/auth'
    export default {
        name:'LoginComponent',
        data: () => ({
            email: "u1@gmail.com",
            password: "123",
            url:"",
            error:false
        }),
        methods: {
            login() {
                console.log(this.email);
                console.log(this.password);
                auth.login(this.email,this.password).then(response => {
                        console.log(response.data);
                        auth.setUserLogged(JSON.stringify(response.data));
                        this.$router.push("/admin");
                       
                    
                }).catch(function (error) {
                    //this.error =true
                    console.log(error)
                })
            },
        },
    
    }

</script>