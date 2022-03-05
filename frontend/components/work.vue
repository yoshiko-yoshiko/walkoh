<template>
  <div>
    <div>
      <strong class=" text-2xl">{{ $store.state.products.title }}</strong>
    </div>
    <div>
      <p>
        <span>
          <b class=" text-xl">&yen; {{ $store.state.products.price }}</b>
        </span>
      </p>
    </div>
    <div>
      <p>{{ $store.state.products.description }}</p>
    </div>
  </div>
</template>
<script>
export default {
};
</script>

<style lang="scss" scoped>
</style>