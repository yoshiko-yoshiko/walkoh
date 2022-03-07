<template>
  <!-- コンテストのプレゼン用に、仮でベタ打ちしてます -->
  <div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
    <!-- text - start -->
    <div class="mb-10 md:mb-16">
      <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">個展一覧</h2>

      <!-- <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">ここにディスクリプション</p> -->
    </div>
    <!-- text - end -->

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-6 xl:gap-8">
      <!-- ここから個展グリッド -->
      <div class="flex flex-col bg-white border rounded-lg overflow-hidden">
        <a href="#" class="group h-48 md:h-64 block bg-gray-100 overflow-hidden relative">
          <img
            class="w-full h-64 object-cover rounded-t-xl border-none"
            :src="img"
          />
        </a>

        <div class="flex flex-col flex-1 p-4 sm:p-6">
          <h2 class="text-gray-800 text-lg font-semibold mb-2">
            <a href="#" class="hover:text-primary-main active:text-primary-hover transition duration-100">{{ post.fields.title }}</a>
          </h2>

          <p class="text-gray-500 mb-8">{{ post.fields.description }}</p>

          <div class="flex justify-between items-end mt-auto">
            <div class="flex items-center gap-2">
              <div class="w-10 h-10 shrink-0 bg-gray-100 rounded-full overflow-hidden">
                <img src="../assets/images/prof.jpg" loading="lazy" alt="ここにalt" class="w-full h-full object-cover object-center" />
              </div>

              <div>
                <span class="block text-primary-main">{{ $store.state.user.name }}</span>
                <!-- 日付ライブラリ動作テスト -->
                <span class="block text-gray-400 text-sm">{{ $dateFns.format(new Date(), 'yyyy-MM-dd') }}</span>
              </div>
            </div>
            <!-- <span class="text-gray-500 text-sm border rounded px-2 py-1">ここにカテゴリ</span> -->
          </div>
        </div>
      </div>
      <!-- 個展グリッドここまで -->
      <!-- ここから個展グリッド -->
      <div class="flex flex-col bg-white border rounded-lg overflow-hidden">
        <a href="#" class="group h-48 md:h-64 block bg-gray-100 overflow-hidden relative">
          <img
            class="w-full h-64 object-cover rounded-t-xl border-none"
            :src="img"
          />
        </a>

        <div class="flex flex-col flex-1 p-4 sm:p-6">
          <h2 class="text-gray-800 text-lg font-semibold mb-2">
            <a href="#" class="hover:text-primary-main active:text-primary-hover transition duration-100">{{ post.fields.title }}</a>
          </h2>

          <p class="text-gray-500 mb-8">{{ post.fields.description }}</p>

          <div class="flex justify-between items-end mt-auto">
            <div class="flex items-center gap-2">
              <div class="w-10 h-10 shrink-0 bg-gray-100 rounded-full overflow-hidden">
                <img src="../assets/images/prof.jpg" loading="lazy" alt="ここにalt" class="w-full h-full object-cover object-center" />
              </div>

              <div>
                <span class="block text-primary-main">{{ $store.state.user.name }}</span>
                <!-- 日付ライブラリ動作テスト -->
                <span class="block text-gray-400 text-sm">{{ $dateFns.format(new Date(), 'yyyy-MM-dd') }}</span>
              </div>
            </div>
            <!-- <span class="text-gray-500 text-sm border rounded px-2 py-1">ここにカテゴリ</span> -->
          </div>
        </div>
      </div>
      <!-- 個展グリッドここまで -->
      <!-- ここから個展グリッド -->
      <div class="flex flex-col bg-white border rounded-lg overflow-hidden">
        <a href="#" class="group h-48 md:h-64 block bg-gray-100 overflow-hidden relative">
          <img
            class="w-full h-64 object-cover rounded-t-xl border-none"
            :src="img"
          />
        </a>

        <div class="flex flex-col flex-1 p-4 sm:p-6">
          <h2 class="text-gray-800 text-lg font-semibold mb-2">
            <a href="#" class="hover:text-primary-main active:text-primary-hover transition duration-100">{{ post.fields.title }}</a>
          </h2>

          <p class="text-gray-500 mb-8">{{ post.fields.description }}</p>

          <div class="flex justify-between items-end mt-auto">
            <div class="flex items-center gap-2">
              <div class="w-10 h-10 shrink-0 bg-gray-100 rounded-full overflow-hidden">
                <img src="../assets/images/prof.jpg" loading="lazy" alt="ここにalt" class="w-full h-full object-cover object-center" />
              </div>

              <div>
                <span class="block text-primary-main">{{ $store.state.user.name }}</span>
                <!-- 日付ライブラリ動作テスト -->
                <span class="block text-gray-400 text-sm">{{ $dateFns.format(new Date(), 'yyyy-MM-dd') }}</span>
              </div>
            </div>
            <!-- <span class="text-gray-500 text-sm border rounded px-2 py-1">ここにカテゴリ</span> -->
          </div>
        </div>
      </div>
      <!-- 個展グリッドここまで -->
      <!-- ここから個展グリッド -->
      <div class="flex flex-col bg-white border rounded-lg overflow-hidden">
        <a href="#" class="group h-48 md:h-64 block bg-gray-100 overflow-hidden relative">
          <img
            class="w-full h-64 object-cover rounded-t-xl border-none"
            :src="img"
          />
        </a>

        <div class="flex flex-col flex-1 p-4 sm:p-6">
          <h2 class="text-gray-800 text-lg font-semibold mb-2">
            <a href="#" class="hover:text-primary-main active:text-primary-hover transition duration-100">{{ post.fields.title }}</a>
          </h2>

          <p class="text-gray-500 mb-8">{{ post.fields.description }}</p>

          <div class="flex justify-between items-end mt-auto">
            <div class="flex items-center gap-2">
              <div class="w-10 h-10 shrink-0 bg-gray-100 rounded-full overflow-hidden">
                <img src="../assets/images/prof.jpg" loading="lazy" alt="ここにalt" class="w-full h-full object-cover object-center" />
              </div>

              <div>
                <span class="block text-primary-main">{{ $store.state.user.name }}</span>
                <!-- 日付ライブラリ動作テスト -->
                <span class="block text-gray-400 text-sm">{{ $dateFns.format(new Date(), 'yyyy-MM-dd') }}</span>
              </div>
            </div>
            <!-- <span class="text-gray-500 text-sm border rounded px-2 py-1">ここにカテゴリ</span> -->
          </div>
        </div>
      </div>
      <!-- 個展グリッドここまで -->
      <!-- ここから個展グリッド -->
      <div class="flex flex-col bg-white border rounded-lg overflow-hidden">
        <a href="#" class="group h-48 md:h-64 block bg-gray-100 overflow-hidden relative">
          <img
            class="w-full h-64 object-cover rounded-t-xl border-none"
            :src="img"
          />
        </a>

        <div class="flex flex-col flex-1 p-4 sm:p-6">
          <h2 class="text-gray-800 text-lg font-semibold mb-2">
            <a href="#" class="hover:text-primary-main active:text-primary-hover transition duration-100">{{ post.fields.title }}</a>
          </h2>

          <p class="text-gray-500 mb-8">{{ post.fields.description }}</p>

          <div class="flex justify-between items-end mt-auto">
            <div class="flex items-center gap-2">
              <div class="w-10 h-10 shrink-0 bg-gray-100 rounded-full overflow-hidden">
                <img src="../assets/images/prof.jpg" loading="lazy" alt="ここにalt" class="w-full h-full object-cover object-center" />
              </div>

              <div>
                <span class="block text-primary-main">{{ $store.state.user.name }}</span>
                <!-- 日付ライブラリ動作テスト -->
                <span class="block text-gray-400 text-sm">{{ $dateFns.format(new Date(), 'yyyy-MM-dd') }}</span>
              </div>
            </div>
            <!-- <span class="text-gray-500 text-sm border rounded px-2 py-1">ここにカテゴリ</span> -->
          </div>
        </div>
      </div>
      <!-- 個展グリッドここまで -->
      <!-- ここから個展グリッド -->
      <div class="flex flex-col bg-white border rounded-lg overflow-hidden">
        <a href="#" class="group h-48 md:h-64 block bg-gray-100 overflow-hidden relative">
          <img
            class="w-full h-64 object-cover rounded-t-xl border-none"
            :src="img"
          />
        </a>

        <div class="flex flex-col flex-1 p-4 sm:p-6">
          <h2 class="text-gray-800 text-lg font-semibold mb-2">
            <a href="#" class="hover:text-primary-main active:text-primary-hover transition duration-100">{{ post.fields.title }}</a>
          </h2>

          <p class="text-gray-500 mb-8">{{ post.fields.description }}</p>

          <div class="flex justify-between items-end mt-auto">
            <div class="flex items-center gap-2">
              <div class="w-10 h-10 shrink-0 bg-gray-100 rounded-full overflow-hidden">
                <img src="../assets/images/prof.jpg" loading="lazy" alt="ここにalt" class="w-full h-full object-cover object-center" />
              </div>

              <div>
                <span class="block text-primary-main">{{ $store.state.user.name }}</span>
                <!-- 日付ライブラリ動作テスト -->
                <span class="block text-gray-400 text-sm">{{ $dateFns.format(new Date(), 'yyyy-MM-dd') }}</span>
              </div>
            </div>
            <!-- <span class="text-gray-500 text-sm border rounded px-2 py-1">ここにカテゴリ</span> -->
          </div>
        </div>
      </div>
      <!-- 個展グリッドここまで -->
      <!-- ここから個展グリッド -->
      <div class="flex flex-col bg-white border rounded-lg overflow-hidden">
        <a href="#" class="group h-48 md:h-64 block bg-gray-100 overflow-hidden relative">
          <img
            class="w-full h-64 object-cover rounded-t-xl border-none"
            :src="img"
          />
        </a>

        <div class="flex flex-col flex-1 p-4 sm:p-6">
          <h2 class="text-gray-800 text-lg font-semibold mb-2">
            <a href="#" class="hover:text-primary-main active:text-primary-hover transition duration-100">{{ post.fields.title }}</a>
          </h2>

          <p class="text-gray-500 mb-8">{{ post.fields.description }}</p>

          <div class="flex justify-between items-end mt-auto">
            <div class="flex items-center gap-2">
              <div class="w-10 h-10 shrink-0 bg-gray-100 rounded-full overflow-hidden">
                <img src="../assets/images/prof.jpg" loading="lazy" alt="ここにalt" class="w-full h-full object-cover object-center" />
              </div>

              <div>
                <span class="block text-primary-main">{{ $store.state.user.name }}</span>
                <!-- 日付ライブラリ動作テスト -->
                <span class="block text-gray-400 text-sm">{{ $dateFns.format(new Date(), 'yyyy-MM-dd') }}</span>
              </div>
            </div>
            <!-- <span class="text-gray-500 text-sm border rounded px-2 py-1">ここにカテゴリ</span> -->
          </div>
        </div>
      </div>
      <!-- 個展グリッドここまで -->
      <!-- ここから個展グリッド -->
      <div class="flex flex-col bg-white border rounded-lg overflow-hidden">
        <a href="#" class="group h-48 md:h-64 block bg-gray-100 overflow-hidden relative">
          <img
            class="w-full h-64 object-cover rounded-t-xl border-none"
            :src="img"
          />
        </a>

        <div class="flex flex-col flex-1 p-4 sm:p-6">
          <h2 class="text-gray-800 text-lg font-semibold mb-2">
            <a href="#" class="hover:text-primary-main active:text-primary-hover transition duration-100">{{ post.fields.title }}</a>
          </h2>

          <p class="text-gray-500 mb-8">{{ post.fields.description }}</p>

          <div class="flex justify-between items-end mt-auto">
            <div class="flex items-center gap-2">
              <div class="w-10 h-10 shrink-0 bg-gray-100 rounded-full overflow-hidden">
                <img src="../assets/images/prof.jpg" loading="lazy" alt="ここにalt" class="w-full h-full object-cover object-center" />
              </div>

              <div>
                <span class="block text-primary-main">{{ $store.state.user.name }}</span>
                <!-- 日付ライブラリ動作テスト -->
                <span class="block text-gray-400 text-sm">{{ $dateFns.format(new Date(), 'yyyy-MM-dd') }}</span>
              </div>
            </div>
            <!-- <span class="text-gray-500 text-sm border rounded px-2 py-1">ここにカテゴリ</span> -->
          </div>
        </div>
      </div>
      <!-- 個展グリッドここまで -->
    </div>
  </div>
</div>
</template>

<script>
export default {
  props: {
    post: {
      type: Object,
      default: () => {
        return {
          // 動かない
          // publishedAt: $dateFns.format(new Date()),
          fields: {
            title: "個展のタイトル",
            description: "個展のディスクリプション個展のディスクリプション個展のディスクリプション個展のディスクリプション個展のディスクリプション",
            headerImage: null,
            category: "",
          },
        };
      },
    },
  },
  data: () => {
    return {
      img: require("../assets/images/photo1.jpg"),
    };
  },
  computed: {
  },
  methods: {
    // linkTo(post) {
    //   return { name: "posts-slug", params: { slug: post.fields.slug } };
    // },
    // linkToTag(category) {
    //   return {
    //     name: "category-slug",
    //     params: { slug: category.fields.slug }
    //   };
    // }
  },
  mounted: function () {
    // this.$store.commit("filterposts", []);
  },
};
</script>

<style scoped>
</style>