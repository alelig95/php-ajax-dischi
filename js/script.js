new Vue({
  el: '#app',
  data: {
    listaDischi: [],
    selected: '',
    generi: []
  },
  mounted() {
    const self = this;
    axios.get("http://localhost/php-ajax-dischi/app/server.php")
    .then(function(response) {
      self.listaDischi = response.data;
      console.log(self.listaDischi);
    });
  },
  methods: {
    selezioneGenere: function() {
      axios.get("http://localhost/php-ajax-dischi/app/server.php?genre=" + this.selected)
      .then(function(response) {
        this.listaDischi = response.data;
        console.log(this.listaDischi);
      });
    }
  }
})
Vue.config.devtools = true;
