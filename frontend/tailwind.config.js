module.exports = {
  content: [],
  theme: {
    // この指定方法だと、カラーパレットは拡張ではなく上書きされる。デフォルトのカラーパレットが使えなくなるので、開発中は何かと不便なので変更。
    // colors: {
    //   primary: '#4ACEA2',
    //   secondary: '#EDE4DC',
    //   // ...
    // },
    fontFamily: {
      body: [
        '"Helvetica Neue"','Helvetica','Arial','YuGothic','"Yu Gothic"','"Hiragino Kaku Gothic ProN"','"ヒラギノ角ゴ ProN W3"','メイリオ', 'Meiryo','"ＭＳ ゴシック"','sans-serif'
      ]
    },
    extend: {
      colors: {
        primary: {
          main: '#4ACEA2',
          hover: '#3BA481',
          sub: '#EDE4DC',
          black: '#131313',
        },
      },
    },
  },
  plugins: [],
  mode: "jit",
}
