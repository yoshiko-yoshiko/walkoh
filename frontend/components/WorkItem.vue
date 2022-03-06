<template>
  <div>
      <strong class="text-2xl">{{ $store.state.works.title }}</strong>
    </div>
    <div>
      <p>
        <span>
          <b class="text-xl">&yen; {{ $store.state.works.price }}</b>
        </span>
      </p>
    </div>
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