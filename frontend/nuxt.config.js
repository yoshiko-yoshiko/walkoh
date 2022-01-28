require('dotenv').config();
const { API_URL } = process.env;

export default {

  // Disable server-side rendering: https://go.nuxtjs.dev/ssr-mode
  ssr: false,

  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'frontend',
    htmlAttrs: {
      lang: 'ja'
    },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
      { name: 'format-detection', content: 'telephone=no' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [
  ],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
    {
      src: '~/plugins/axios/index.js',
      mode: "client"
    },
    {
      src: '~/plugins/axios/client.js',
      mode: "client"
    },
    {
      src: '~/plugins/axios/api.js',
      mode: "client"
    }
  ],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
    // https://go.nuxtjs.dev/tailwindcss
    '@nuxtjs/tailwindcss',
  ],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    // https://go.nuxtjs.dev/axios
    '@nuxtjs/axios',
    '@nuxtjs/proxy',
    '@nuxtjs/dotenv',
    '@nuxtjs/auth-next'
  ],

  auth: {
    redirect: {
      login: '/login',   // 未ログイン時に認証ルートへアクセスした際のリダイレクトURL
      logout: '/login',  // ログアウト時のリダイレクトURL
      callback: false,   // Oauth認証等で必要となる コールバックルート
      home: '/',         // ログイン後のリダイレクトURL
    },
    strategies: {
      User: {
          provider: 'laravel/jwt',
          url: '/Users',
          token: {
              property: 'access_token',
              maxAge: 60 * 60,
          },
          refreshToken: {
              property: 'access_token',
              maxAge: 20160 * 60,
          },
          endpoints: {
              login: { url: '/login', method: 'post', propertyName: 'access_token' },
              logout: { url: '/logout', method: 'post' },
              refresh: { url: '/refresh', method: 'post' , propertyName: 'access_token'},
              user: { url: '/me', method: 'get', propertyName: false},
        }
      }
    },
  },

  env:{
    API_URL,
  },

  // Axios module configuration: https://go.nuxtjs.dev/config-axios
  axios: {
    // Workaround to avoid enforcing hard-coded localhost:3000: https://github.com/nuxt-community/axios-module/issues/308
    baseURL: process.env.API_URL,
    browserBaseURL: process.env.API_URL,
  },

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
  }
}
