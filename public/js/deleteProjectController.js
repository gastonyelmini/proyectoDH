var app = new Vue({
  el: "#projectsRoot",

  methods: {
    closeProject: function(){
      alert('Close!');
    },
    completeProject: function(){
      alert('Project completed!');
    }
  }
})
