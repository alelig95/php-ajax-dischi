new Vue({
  el: '#app',
  data: {
    listaDischi: []
  },
  mounted() {
    const self = this;
    axios.get("http://localhost/php-ajax-dischi/app/server.php")
    .then(function(response) {
      self.listaDischi = response.data;
      console.log(self.listaDischi);
    });
  }
})
Vue.config.devtools = true;
