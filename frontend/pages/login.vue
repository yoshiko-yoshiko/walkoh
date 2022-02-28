
<template>
  <form @submit.prevent="register">

    なまえ<input type="text" name="name" id="name" v-model="form.name" />
    メアド<input type="text" name="email" id="email" v-model="form.email" />
    パスワード<input type="password" name="password" id="password" v-model="form.password" />
    もういちどパスワード<input type="password" name="password_confirmation" id="password_confirmation" v-model="form.password_confirmation" />

    <button
      class="mt-8 w-full bg-primary-main text-indigo-50 font-bold py-2 rounded-md tracking-wide hover:brightness-110"
    >
    登録する
    </button>

  </form>
</template>

<script>
export default {
  data() {
    return {
      form: {
        name: "",
        email: "",
        password: "",
        password_confirmation: "",
      },
    };
  },
  methods: {
    async register() {
      try {
        await this.$axios.post("Users/register", this.form);
        await this.$auth.loginWith("User", { data: this.auth }).then(() => {
          this.processing = false;
        });
      } catch (e) {}
    },
  },
};
</script>
