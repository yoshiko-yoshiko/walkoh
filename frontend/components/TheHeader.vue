<template>
  <div>
    <div>
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
              <div class="hidden md:block">
                <div class="ml-10 flex items-baseline">
                  <nuxt-link
                    to="koten"
                    class="ml-4 px-3 py-2 rounded-md text-sm font-semibold text-primary-black hover:text-white focus:text-white hover:bg-primary-main focus:bg-primary-hover"
                    >個展を見る（借）</nuxt-link
                  >
                  <nuxt-link
                    to="exhibit"
                    class="ml-4 px-3 py-2 rounded-md text-sm font-semibold text-primary-black hover:text-white focus:text-white hover:bg-primary-main focus:bg-primary-hover"
                    >出展する</nuxt-link
                  >
                  <nuxt-link
                    to="edit"
                    class="ml-4 px-3 py-2 rounded-md text-sm font-semibold text-primary-black hover:text-white focus:text-white hover:bg-primary-main focus:bg-primary-hover"
                    >編集する</nuxt-link
                  >
                </div>
              </div>
            </header>
            <div class="hidden md:block">
              <div class="ml-4 flex items-center md:ml-6">
                <!-- Profile dropdown -->
                <div class="ml-3 relative">
                  <div>
                    <button
                      @click="toggle"
                      class="max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid"
                      id="user-menu"
                      aria-label="User menu"
                      aria-haspopup="true"
                    >
                      <img
                        class="h-8 w-8 rounded-full"
                        src="../assets/images/prof.jpg"
                        alt="プロフ画像"
                      />
                    </button>
                  </div>
                  <transition
                    enter-active-class="transition ease-out duration-100"
                    enter-class="transform opacity-0 scale-95"
                    enter-to-class="transform opacity-100 scale-100"
                    leave-active-class="transition ease-in duration-75"
                    leave-class="transform opacity-100 scale-100"
                    leave-to-class="transform opacity-0 scale-95"
                  >
                    <div
                      v-show="isOpen"
                      class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg"
                    >
                      <div
                        class="py-1 rounded-md bg-white shadow-xs"
                        role="menu"
                        aria-orientation="vertical"
                        aria-labelledby="user-menu"
                      >
                        <nuxt-link
                          to="user"
                          class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                          role="menuitem"
                          >アカウント</nuxt-link
                        >
                        <nuxt-link
                          to="/"
                          class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                          role="menuitem"
                          >サインアウト</nuxt-link
                        >
                      </div>
                    </div>
                  </transition>
                </div>
              </div>
            </div>
            <div class="-mr-2 flex md:hidden">
              <!-- Mobile menu button -->
              <button
                @click="toggle"
                class="inline-flex items-center justify-center p-2 rounded-md text-primary-main hover:text-white hover:bg-primary-main focus:outline-none focus:bg-primary-hover focus:text-white"
              >
                <svg
                  :class="[isOpen ? 'hidden' : 'block', 'h-6 w-6']"
                  stroke="currentColor"
                  fill="none"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                  ></path>
                </svg>
                <svg
                  :class="[isOpen ? 'block' : 'hidden', 'h-6 w-6']"
                  stroke="currentColor"
                  fill="none"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                  ></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <div :class="[isOpen ? '' : 'hidden', 'md:hidden']">
          <div class="px-2 pt-2 pb-3 sm:px-3">
            <nuxt-link
              to="koten"
              class="mt-1 block px-3 py-2 rounded-md text-base font-semibold text-primary-black hover:text-white hover:bg-primary-main"
              >個展を見る（借）</nuxt-link
            >
            <nuxt-link
              to="exhibit"
              class="mt-1 block px-3 py-2 rounded-md text-base font-semibold text-primary-black hover:text-white hover:bg-primary-main"
              >出典する</nuxt-link
            >
            <nuxt-link
              to="edit"
              class="mt-1 block px-3 py-2 rounded-md text-base font-semibold text-primary-black hover:text-white hover:bg-primary-main"
              >編集する</nuxt-link
            >
          </div>
          <div class="pt-4 pb-3">
            <div class="flex items-center px-5">
              <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="../assets/images/prof.jpg" alt="プロフ画像" />
              </div>
              <div class="ml-3">
                <div
                  class="text-base font-medium leading-none text-primary-black"
                >
                  {{ $store.state.user.name }}
                </div>
                <div
                  class="mt-1 text-sm font-medium leading-none text-gray-400"
                >
                  {{ $store.state.user.id }}
                </div>
              </div>
            </div>
            <div class="mt-3 px-2">
              <nuxt-link
                to="user"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100"
                >アカウント</nuxt-link
              >
              <nuxt-link
                to="signOut"
                class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100"
                >サインアウト</nuxt-link
              >
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
</template>

<style scoped></style>

<script>
export default {
  data() {
    return {
      isOpen: false,
    };
  },
  methods: {
    toggle() {
      this.isOpen = !this.isOpen;
    },
  },
};
</script>
