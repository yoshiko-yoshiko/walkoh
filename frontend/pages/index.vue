<template>
  <div>
    <!-- hero - start -->
    <div class="bg-primary-white pb-6 sm:pb-8 lg:pb-12">
      <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
        <the-header-pre-login />
        <section class="max-w-screen-2xl px-4 md:px-8 mx-auto mt-5">
          <div class="flex flex-wrap justify-between mb-8 md:mb-16">
            <div
              class="w-full lg:w-1/3 flex flex-col justify-center lg:pt-48 lg:pb-24 mb-6 sm:mb-12 lg:mb-0"
            >
              <h1
                class="text-primary-main text-4xl sm:text-6xl md:text-7xl font-bold mb-4 md:mb-8 mt-4 md:mt-0"
              >
                世界に作品を<br />届けよう
              </h1>

              <p class="max-w-md text-gray-500 xl:text-lg leading-relaxed">
                あなたの創るものを、世界に届ける。<br />あなたが感嘆した作品を、部屋に届ける。
              </p>
            </div>

            <div class="w-full lg:w-2/3 flex mb-12 md:mb-16">
              <div
                class="bg-gray-100 rounded-lg shadow-lg overflow-hidden relative z-10 top-12 md:top-16 left-12 md:left-16 -ml-12 lg:ml-0"
              >
                <img
                  src="../assets/images/photo1.jpg"
                  loading="lazy"
                  alt="あとでここに何が入れる"
                  class="w-full h-full object-cover object-center image"
                />
              </div>

              <div class="bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                <img
                  src="../assets/images/photo2.jpg"
                  loading="lazy"
                  alt="あとでここに何が入れる"
                  class="w-full h-full object-cover object-center image"
                />
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <list-single />
  </div>
</template>

<script>
import ListSingle from '../components/ListSingle.vue';
import TheHeader from '../components/TheHeader.vue';
import TheHeaderPreLogin from '../components/TheHeaderPreLogin.vue';
export default {
  middleware:['auth'],
  methods: {
    async logout() {
      this.$auth.logout();
    }
  },
  components: { TheHeader, TheHeaderPreLogin, ListSingle },
};
</script>






