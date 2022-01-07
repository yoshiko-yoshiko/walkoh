<template>
<!-- コンポーネントの使用は早いうちに決めたい -->
    <div class="login-form">
        <div class="email-form">
            <email-form v-model="email"/>
        </div>
        <div class="pw-form">
            <password-form v-model="password"/>
        </div>
        <div class="login-button">
            <button>ログイン</button>
        </div>
    </div>
</template>

<script>
export default {
    middleware({}) {
        if (store.$auth.loggedIn) {
            redirect('/');
        }
    },
    data() {
        return {
            form: {
                email: '',
                password: '',
            }
        }
    },
    methods: {
        async login() {
            try {
                const response = await this.$auth.loginWith('local', { data: this.form });
                console.log(response);
            } catch (error) {
                console.log(error);
            }
        }
    }
}
</script>

<style>

</style>