<template>
  <div
    class="h-screen bg-gradient-to-br bg-primary-sub flex justify-center items-center w-full"
  >
    <div class="py-6 sm:py-8 lg:py-12">
      <div class="max-w-screen-xl px-4 md:px-8 mx-auto">
        <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
          <div>
            <div class="h-64 md:h-auto bg-gray-100 overflow-hidden rounded-lg">
              <img
                src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=600&h=750"
                loading="lazy"
                alt="Photo by Martin Sanchez"
                class="w-full h-full object-cover object-center"
              />
            </div>
          </div>

          <div class="md:pt-8">
            <p class="text-primary-main font-bold text-center md:text-left">
              Sign up
            </p>

            <h1
              class="text-black text-2xl sm:text-3xl font-bold text-center md:text-left mb-4 md:mb-6"
            >
              wolkohへようこそ！
            </h1>

            <form @submit.prevent="login">
              <div class="bg-white px-10 py-8 rounded-xl w-screen max-w-sm">
                <div class="space-y-4">
                  <div>
                    <label
                      for="email"
                      class="block mb-1 text-black font-semibold"
                      >ユーザー名</label
                    >
                    <input
                      type="text"
                      class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full"
                      v-model="auth.name"
                    />
                  </div>
                  <div>
                    <label
                      for="email"
                      class="block mb-1 text-black font-semibold"
                      >メールアドレス</label
                    >
                    <input
                      type="text"
                      class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full"
                      v-model="auth.email"
                    />
                  </div>
                  <div>
                    <label
                      for="email"
                      class="block mb-1 text-black font-semibold"
                      >パスワード</label
                    >
                    <input
                      type="text"
                      class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full"
                      v-model="auth.password"
                    />
                  </div>
                </div>
                <button
                  class="mt-8 w-full bg-primary-main text-indigo-50 font-bold py-2 rounded-md text-lg tracking-wide"
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
  </div>
</template>

<script>
export default {
  middleware: ["auth"],
  layout: "login",
  head() {
    return {
      title: "Login Page",
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
