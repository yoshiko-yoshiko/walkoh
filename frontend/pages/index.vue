<template>
  <form @submit.prevent="logout">
    <button>ログアウト</button>
  </form>
</template>

<script>
export default {
  middleware:['auth'],
  methods: {
    async logout() {
      this.$auth.logout();
    }
  }
};
</script>