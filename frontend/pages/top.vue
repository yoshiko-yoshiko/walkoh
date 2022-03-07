<template>
  <div>
    <div>
      <main>
        <list-single />
        <!-- ここに別コンテンツ -->
        <!-- <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
          <div class="px-4 py-6 sm:px-0">
            <div
              class="border-4 border-dashed border-gray-200 rounded-lg h-96"
            ></div>
          </div>
        </div> -->
        <!-- 別コンテンツここまで -->
      </main>
    </div>
  </div>
</template>

<style scoped></style>

<script>
import ListSingle from '../components/ListSingle.vue'
export default {
  components: { ListSingle },
  layout: 'loggedIn'
}
</script>
