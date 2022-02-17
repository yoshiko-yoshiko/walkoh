<template>
  <div
    class="p-5 flex-none lg:w-2/5 md:w-2/4 sm:w-1/2 xs:w-full transition duration-300 z-10"
  >
    <nuxt-link to="/">
      <div
        class="max-w-lg overflow-hidden rounded-xl shadow-lg hover:shadow-xl cursor-pointer mb-10 sm:mb-0 bg-white"
      >
        <div class="overflow-hidden w-full h-64">
          <img
            class="w-full h-64 object-cover rounded-t-xl border-none"
            :src="img"
          />
        </div>
        <div class="px-6 py-4 pb-2 bg-white">
          <div class="font-bold text-xl mb-2">
            {{ post.fields.title }}
          </div>
          <div>
            <small>{{ post.fields.publishedAt }}</small>
          </div>
          <template v-if="post.fields.category">
            <div class="py-3">
              <span
                v-for="category in post.fields.category"
                :key="category.sys.id"
              >
                <nuxt-link to="/">
                  <!-- ここにカテゴリ -->
                </nuxt-link>
              </span>
            </div>
          </template>
        </div>
      </div>
    </nuxt-link>
  </div>
</template>

<script>
export default {
  props: {
    post: {
      type: Object,
      default: () => {
        return {
          fields: {
            title: "ここに個展のタイトル",
            publishedAt: new Date(),
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
