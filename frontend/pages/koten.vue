<template>
  <div>
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
          <div class="swiper-pagination" slot="pagination"></div>
          <div class="swiper-button-prev" slot="button-prev"></div>
          <div class="swiper-button-next" slot="button-next"></div>
        </swiper>
      </client-only>
    </div>
    <div class="flex justify-center">
      <work-item class="mt-10" />
    </div>
    <div class="flex justify-center">
      <PrimaryButton class="mt-10" />
    </div>
  </div>
</template>

<script>
import "swiper/css/swiper.css";
import WorkItem from '../components/WorkItem.vue';

export default {
  components: { WorkItem },
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
