var app = new Vue({
  el: "#projectsRoot",

  methods: {
    
    closeProject: function(id) {
      document.getElementById(id).style.display = 'none'
    
      var api = axios.get(`/delete-project/${id}`)
        .then(function(response) {
          console.log(response);
        })
        .catch(function(error) {
          alert(error);
        })

    },

    
    completeProject: function(id) {
      document.getElementById(id).style.display = 'none'
    }
  }
})
