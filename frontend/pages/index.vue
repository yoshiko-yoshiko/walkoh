<template>
  <div>
    <!-- hero - start -->
    <div class="bg-primary-sub pb-6 sm:pb-8 lg:pb-12">
      <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
        <header class="flex justify-between items-center py-4 md:py-8 mb-4">
          <!-- logo - start -->
          <a
            href="/"
            class="inline-flex items-center text-black-800 text-2xl md:text-3xl font-bold gap-2.5"
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
          </a>
          <!-- logo - end -->

          <!-- nav - start -->
          <nav class="hidden lg:flex gap-12">
            <a href="#" class="text-primary-main text-lg font-semibold"
              >リンク1</a
            >
            <a
              href="#"
              class="text-gray-600 hover:text-primary-main active:text-indigo-700 text-lg font-semibold transition duration-100"
              >リンク2</a
            >
            <a
              href="#"
              class="text-gray-600 hover:text-primary-main active:text-indigo-700 text-lg font-semibold transition duration-100"
              >リンク3</a
            >
            <a
              href="#"
              class="text-gray-600 hover:text-primary-main active:text-indigo-700 text-lg font-semibold transition duration-100"
              >リンク4</a
            >
          </nav>
          <!-- nav - end -->

          <!-- buttons - start -->
          <div
            class="hidden lg:flex flex-col sm:flex-row sm:justify-center lg:justify-start gap-2.5 -ml-8"
          >
            <a
              href="#"
              class="inline-block focus-visible:ring ring-indigo-300 text-primary-main hover:text-indigo-500 active:text-indigo-600 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-4 py-3"
              >ログイン</a
            >

            <a
              href="#"
              class="inline-block bg-primary-sub hover:brightness-110 active:bg-primary-main focus-visible:ring ring-indigo-300 text-primary-main text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3 border-2 border-primary-main"
              >会員登録</a
            >
          </div>

          <button
            type="button"
            class="inline-flex items-center lg:hidden hover:bg-gray-300 focus-visible:ring ring-indigo-300 text-primary-main rounded-lg gap-2 px-2.5 py-2"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6 md:h-8 md:w-8"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"
              />
            </svg>
          </button>
          <!-- buttons - end -->
        </header>

        <section class="max-w-screen-2xl px-4 md:px-8 mx-auto">
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
  </div>
</template>

<style scoped>
.image {
  max-width: 550px;
  max-height: 550px;
  object-fit: cover;
}
</style>

<script>
export default {
  // middleware:['auth'],
  head: {
    bodyAttrs: {
      class: "bg-primary-sub",
    },
  },
  comments: {},
};
</script>
