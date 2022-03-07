<template>
  <div>
    <div class="bg-white py-6 sm:py-8 lg:py-12">
      <div class="max-w-screen-md px-4 md:px-8 mx-auto">
        <h2
          class="text-primary-black text-2xl lg:text-3xl font-bold text-center mb-8 md:mb-12"
        >
          個展の情報
        </h2>

        <div class="">
          <div
            class="flex flex-col items-center bg-primary-main rounded-lg gap-4 md:gap-6 px-8 py-6"
          >
            <h3 class="max-w-sm text-white text-xl lg:text-2xl">
              {{ $store.state.koten.title }}
            </h3>
            <div class="max-w-md text-white lg:text-lg text-center">
              “{{ $store.state.koten.description }}”
            </div>

            <div class="flex flex-col sm:flex-row items-center gap-2 md:gap-3">
              <div
                class="w-12 md:w-14 h-12 md:h-14 bg-gray-100 border-2 border-primary-sub rounded-full overflow-hidden"
              >
                <img
                  src=""
                  loading="lazy"
                  alt="プロフ画像"
                  class="w-full h-full object-cover object-center"
                />
              </div>

              <div>
                <div
                  class="text-indigo-50 text-sm md:text-base font-bold text-center sm:text-left"
                >
                  {{ $store.state.user.name }}
                </div>
                <p
                  class="text-indigo-200 text-sm md:text-sm text-center sm:text-left"
                >
                  {{ $store.state.user.id }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
