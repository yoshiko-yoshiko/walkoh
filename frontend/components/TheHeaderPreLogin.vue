<template>
      <nav class="bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex items-center justify-between h-16 py-12">
            <header class="flex items-center">
              <nuxt-link
                to="top"
                class="inline-flex items-center text-primary-black text-2xl md:text-3xl font-bold gap-2.5"
                aria-label="logo"
              >
                <svg
                  width="95"
                  height="94"
                  viewBox="0 0 95 94"
                  class="w-6 h-auto text-primary-main"
                  fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path d="M96 0V47L48 94H0V47L48 0H96Z" />
                </svg>
                walkoh
              </nuxt-link>
            </header>
            <div class="-mr-2 flex">
              <div
                class=" lg:flex flex-col sm:flex-row sm:justify-center lg:justify-start gap-2.5 -ml-8"
              >
                <nuxt-link
                  to="login"
                  class="inline-block mt-1 px-3 py-2 rounded-md text-sm font-semibold text-primary-black hover:text-white hover:bg-primary-main"
                  >ログイン</nuxt-link
                >

                <nuxt-link
                  to="signup"
                  class="inline-block mt-1 px-3 py-2 rounded-md text-sm font-semibold hover:text-white hover:bg-primary-hover bg-primary-main text-white"
                  >登録する</nuxt-link
                >
              </div>
            </div>
          </div>
        </div>
      </nav>
</template>

<style scoped></style>

<script>
export default {
};
</script>
