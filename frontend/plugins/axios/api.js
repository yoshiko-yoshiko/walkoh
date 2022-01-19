export default function ({ $axios }, inject) {
    const api = new API($axios)
  
    inject('api', api)
  }
  
  class API {
    constructor (axios) {
      this.axios = axios
    }
  
    async getResponse () {
      const res = await this.axios.$get('http://localhost:3000')
      console.log(res)
    }
  }