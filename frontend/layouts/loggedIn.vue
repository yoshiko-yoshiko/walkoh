<template>
  <div>
    <Header />
    <nuxt />
  </div>
</template>

<script>
import Header from "../components/TheHeader.vue";
export default {
  components: {
    Header,
  },
  head: {
    bodyAttrs: {
      class: "bg-white",
    },
  },
};
</script>
