<template>
  <div class="container mx-auto flex flex-wrap md:h-screen items-center">
    <div class="w-full md:w-1/2 mt-20 md:mt-0">
      <div class="md:w-96 mx-auto md:mr-10">
          <SvgLogin class="h-28 mt-0 md:mt-0 w-full object-cover md:object-contain md:h-auto image_style"/>
      </div>
    </div>
    <div class="w-full md:w-1/2 mt-20 md:mt-0 bg-primary-sub">
      <div class="flex justify-center items-center lg:justify-between">
        <div class="md:mt-8">
          <p class="text-primary-main font-bold text-left">
            会員登録
          </p>

          <h1
            class="text-primary-black text-3xl md:text-2xl font-bold text-left mb-4 md:mb-6"
          >
            walkohへようこそ！
          </h1>

          <form @submit.prevent="login">
            <div class="bg-primary-sub py-8 rounded-xl max-w-xs">
              <div class="space-y-4">
                <div>
                  <label for="email" class="block mb-1 text-primary-black font-semibold"
                    >ユーザー名</label
                  >
                  <input
                    type="text"
                    class="bg-white px-4 py-2 outline-none rounded-md w-full border-2 border-white focus:border-primary-main"
                    v-model="auth.name"
                  />
                </div>
                <div>
                  <label for="email" class="block mb-1 text-primary-black font-semibold"
                    >メールアドレス</label
                  >
                  <input
                    type="text"
                    class="bg-white px-4 py-2 outline-none rounded-md w-full border-2 border-white focus:border-primary-main"
                    v-model="auth.email"
                  />
                </div>
                <div>
                  <label for="email" class="block mb-1 text-primary-black font-semibold"
                    >パスワード</label
                  >
                  <input
                    type="text"
                    class="bg-white px-4 py-2 outline-none rounded-md w-full border-2 border-white focus:border-primary-main"
                    v-model="auth.password"
                  />
                </div>
              </div>
              <button
                class="mt-8 w-full bg-primary-main text-indigo-50 font-bold py-2 rounded-md tracking-wide hover:brightness-110"
                v-bind:disabled="processing"
              >
                登録する
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<style lang="sass">
  .image_style
    object-position: 30% 35%
</style>

<script>
import SvgLogin from "../assets/images/login_img.svg";
export default {
  components: {
    SvgLogin,
  },
  middleware: ["auth"],
  head() {
    return {
      title: "SignUp Page",
      bodyAttrs: {
      class: 'bg-primary-sub'
    }
    };
  },
  data() {
    return {
      processing: false,
      auth: {
        name: "",
        email: "",
        password: "",
        error: false,
      },
    };
  },
  methods: {
    async login() {
      this.auth.error = false;
      this.processing = true;
      try {
        await this.$auth.loginWith("User", { data: this.auth }).then(() => {
          this.processing = false;
        });
      } catch (err) {
        console.log(err);
        this.auth.error = true;
        this.processing = false;
      }
    },
  },
};
</script>
