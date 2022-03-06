<template>
  <div>
    <the-header-pre-login />
    <nuxt />
  </div>
</template>

<script>
import TheHeaderPreLogin from '../components/TheHeaderPreLogin.vue';

export default {
  components: {
    TheHeaderPreLogin

  },
  head: {
    bodyAttrs: {
      class: "bg-white",
    },
  },
};
</script>
