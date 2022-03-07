<template>
  <div class="container justify-center text-center">
    <div>
      <strong class="text-2xl">{{ $store.state.works.title }}</strong>
    </div>
    <div class="mt-4">
      <p>
        <span>
          <b class="text-xl">&yen; {{ $store.state.works.price }}</b>
        </span>
      </p>
    </div>
    <div class=" p-5 bg-primary-sub mt-10 text-primary-black rounded-lg">
      <p>{{ $store.state.works.description }}</p>
    </div>
  </div>
</template>
<script>
export default {
};
</script>

<style lang="scss" scoped>
</style>