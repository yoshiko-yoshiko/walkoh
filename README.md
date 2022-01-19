## DEV

### PHP

php:7.4-fpm-buster

composer:1.10

### nginx

nginx:1.18-alpine

### mysql

mysql:5.7

### node

node:14.15.3-alpine

## Usage

```
$ git clone git@github.com:zbraa/walkoh.git
$ cd walkoh
$ make nuxt
$ make backend
(任意)
$ make typescript
$ make composition-api
$ make storybook
```

## nuxt.config.jsの修正

```
require('dotenv').config();
const { API_URL } = process.env;

export default {
  // Global page headers: https://go.nuxtjs.dev/config-head
  // mode: 'spa',
  head: {
    title: 'frontend',
    htmlAttrs: {
      lang: 'ja',
    },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
    ],
    link: [{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }],
  },

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
    // https://go.nuxtjs.dev/typescript
    '@nuxt/typescript-build',
  ],

  watchers: {
    webpack: {
      poll: true,
    },
  },

  modules: ['@nuxtjs/axios', '@nuxtjs/proxy', '@nuxtjs/dotenv'],

  env: {
    API_URL,
  },

  proxy: {
    '/api': process.env.API_URL,
  },

  axios: {
    baseURL: process.env.API_URL,
    browserBaseURL: process.env.API_URL,
  },

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {},
};

```

## frontend/.envの修正

```
API_URL=http://localhost:18080/api
```

## pages/index.vueの修正

```
<template>
  <div>
    <h1 class="title">
      {{ text }}
    </h1>
  </div>
</template>

<script>
export default {
  async asyncData({ $axios }) {
    const text = await $axios.$get('/');
    return {
      text,
    };
  },
  data() {
    return {
      text: '',
    };
  },
};
</script>
```
## composerのバージョンを各自であげてほしい 2022/01/19
- docker-compose exec app composer self-update --2

### nuxt

http://127.0.0.1:3000/

### storybook

http://127.0.0.1:6006/

### api

http://127.0.0.1:10080/

## Adding a file

### TypeScript

https://qiita.com/Ryo9597/items/6e3d31bddcfb60cd3d8c#%E3%83%A2%E3%82%B8%E3%83%A5%E3%83%BC%E3%83%AB%E3%82%92%E8%BF%BD%E5%8A%A0

### Composition-API

https://qiita.com/Ryo9597/items/6e3d31bddcfb60cd3d8c#%E3%83%A2%E3%82%B8%E3%83%A5%E3%83%BC%E3%83%AB%E3%82%92%E8%BF%BD%E5%8A%A0-1
