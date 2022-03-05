<template>
  <div class="example">
    <client-only>
      <swiper
        class="swiper"
        :options="swiperOption"
        @ready="onSwiperRedied"
        @clickSlide="onSwiperClickSlide"
      >
      <swiper-slide v-for="item in 9" :key="item">
      <span>Slide-{{ item }}</span>
      </swiper-slide>
        <!-- <swiper-slide>Slide 1</swiper-slide>
        <swiper-slide>Slide 2</swiper-slide>
        <swiper-slide>Slide 3</swiper-slide>
        <swiper-slide>Slide 4</swiper-slide>
        <swiper-slide>Slide 5</swiper-slide>
        <swiper-slide>Slide 6</swiper-slide>
        <swiper-slide>Slide 7</swiper-slide>
        <swiper-slide>Slide 8</swiper-slide>
        <swiper-slide>Slide 9</swiper-slide>
        <swiper-slide>Slide 10</swiper-slide> -->
        <div class="swiper-pagination" slot="pagination"></div>
        <div class="swiper-button-prev" slot="button-prev"></div>
        <div class="swiper-button-next" slot="button-next"></div>
      </swiper>
    </client-only>
  </div>
</template>

<script>
import "swiper/css/swiper.css";

export default {
  name: "SwiperNuxt",
  data() {
    return {
      swiperOption: {
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 300,
        keyboard: {
          enabled: true,
        },
        pagination: {
          el: ".swiper-pagination",
          type: "progressbar",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      },
    };
  },
};
</script>

<style lang="scss">
:root {
  --swiper-theme-color: #4acea2;
}
.example {
  height: auto;
  .swiper {
    margin-top: 5rem;
    height: 500px;
    width: 80%;
    .swiper-slide:nth-child(2n) {
      width: 60%;
    }
    .swiper-slide:nth-child(3n) {
      width: 40%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 38px;
      font-weight: 700;
      background-color: #eee;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .swiper-pagination-progressbar {
      background: #fff;
      }
    // .swiper-button-prev {
    //   color: #4acea2;
    // }
    // .swiper-button-next {
    //   color: #4acea2;
    // }
    // .swiper-pagination-progressbar-fill {
    //   background: #4acea2;
    // }
  }
}
</style>
