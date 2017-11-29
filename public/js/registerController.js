Vue.config.devtools = true;
window.setTimeout(0);

var app = new Vue({
  el: '#root',

  data: {
    name: '',
    email: '',
    fetchedEmails: [],
    reversed: '',
    emailPassed: '',

  },

  computed: {
    pass: function () {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if(this.name.length >= 3 && re.test(this.email) ) {
          return true
        }
    },



  },

  methods: {

    bringEmails: function(){
      var app = this;
      var api = axios.get('/checkEmail')
        .then(function (response) {
          app.fetchedEmails = response.data;

          console.log(response.data);

        })
        .catch(function (error) {
          console.log(error);
        })
    },


    emailPass: function() {
      for(var i = 0; i < this.fetchedEmails.length; i++) {
        if(this.fetchedEmails[i] == this.email){
          app.emailPassed = false;
          return false;
        } else {
          app.emailPassed = true;
          return true;
        }
      }
    },

    onSubmit: function(){
      alert('Hola')
    },

  }
})

app.bringEmails();
// setTimeout(function() {
//   app.emailPass()
// }, 1000);
