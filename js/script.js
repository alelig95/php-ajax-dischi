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

      self.listaDischi.forEach((item) => {
        if (!self.generi.includes(item.genre)) {
          self.generi.push(item.genre)
          console.log(self.generi);
        }
      });
    });
  },
  methods: {
    selezioneGenere: function() {
      const self = this;
      axios.get("http://localhost/php-ajax-dischi/app/server.php?genre=" + this.selected)
      .then(function(response) {
        self.listaDischi = response.data;
        console.log(self.listaDischi);
      });
    }
  }
})
Vue.config.devtools = true;
