<template>
    <div class="h-screen bg-gradient-to-br bg-hoge flex justify-center items-center w-full">
  <form @submit.prevent="login">
    <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-md max-w-sm">
      <div class="space-y-4">
        <h1 class="text-center text-2xl font-semibold text-fuga">wolkoh</h1>
        <div>
          <label for="email" class="block mb-1 text-fuga font-semibold">Username</label>
          <input type="text" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" v-model="auth.name"/>
        </div>
        <div>
          <label for="email" class="block mb-1 text-fuga font-semibold">Email</label>
          <input type="text" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" v-model="auth.email"/>
        </div>
        <div>
          <label for="email" class="block mb-1 text-fuga font-semibold">Password</label>
          <input type="text" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" v-model="auth.password"/>
        </div>
      </div>
      <button class="mt-4 w-full bg-gradient-to-tr from-tinpo to-tinpo text-indigo-100 py-2 rounded-md text-lg tracking-wide" v-bind:disabled="processing">Register</button>
    </div>
  </form>
</div>
</template>

<script>
export default {
    middleware: ['auth'],
    layout: 'login',
    head() {
        return {
            title: "Login Page"
        }
    },
    data() {
        return {
            processing :false,
            auth: {
                name : '',
                email : '',
                password : '',
                error: false
            }
        }
    },
    methods: {
        async login() {
            this.auth.error = false
            this.processing = true
            try {
                await this.$auth.loginWith('User', { data: this.auth })
                .then(()=>{
                    this.processing = false
                })
            } catch (err) {
                console.log(err)
                this.auth.error = true
                this.processing = false
            }
        }
    }
}
</script>
