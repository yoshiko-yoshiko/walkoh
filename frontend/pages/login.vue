<template>
<h2 class="text-2xl lg:text-3xl font-bold text-gray-900">
    Sign in to platform
</h2>
</template>

<script>
export default {
    middleware: ['auth'],
    layout: 'login',
    head() {
        return {
            title: "ログイン"
        }
    },
    data() {
        return {
            processing :false,
            auth: {
                email : '',
                password : '',
                error :false
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

<style>

</style>