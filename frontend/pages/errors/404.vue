<template>
  <div class="bg-primary-white py-6 sm:py-8 lg:py-12">
    <div class="max-w-screen-lg px-4 md:px-8 mx-auto">
      <div class="grid sm:grid-cols-2 gap-8">
        <!-- content - start -->
        <div
          class="flex flex-col justify-center items-center sm:items-start md:py-24 lg:py-32"
        >
          <h1
            class="text-gray-800 text-5xl md:text-8xl font-bold text-center sm:text-left mb-2"
          >
            404
          </h1>

          <p class="text-gray-500 md:text-lg text-center sm:text-left mb-8">
            お探しのページは見つかりませんでした...
          </p>

          <a
            href="#"
            class="inline-block bg-primary-main hover:brightness-110 focus-visible:ring ring-white text-white text-xs md:text-sm font-semibold text-center rounded-lg outline-none transition duration-100 px-5 py-3"
            >ホームへ戻る</a
          >
        </div>
        <!-- content - end -->

        <!-- image - start -->
        <div
          class="h-80 md:h-auto mx-auto overflow-hidden rounded-lg relative"
        >
          <Svg404 />
        </div>
        <!-- image - end -->
      </div>
    </div>
  </div>
</template>
<script>
import Svg404 from "../../assets/images/404.svg";

export default {
  components: {
    Svg404,
  },
};
</script>
