if (document.querySelector(".gantt-master")) {
  /* Busco el id de proyecto que le asigne en el blade */
  var projectId = document.querySelector(".gantt-master").id;
  var tasksArray = [];
  var gantTasks = [];

  axios
    .get("/get-project-axios/" + projectId)
    .then(function(response) {
      if (!response.data.error) {
        tasksArray = Object.entries(response.data.projectTasks);

        for (var i = 0; i < tasksArray.length; i++) {
          var singleTask = Object.entries(tasksArray[i][1]);

          gantTasks.push({
            id: singleTask[0][1],
            name: singleTask[1][1],
            start: singleTask[2][1],
            end: singleTask[3][1],
            progress: singleTask[9][1]
          });
        }

        var gantt_chart = Gantt("#gantt", gantTasks, {
          on_click: function(task) {
            console.log(task);
          },
          on_date_change: function(task, start, end) {
            console.log(task, start, end);
          },
          on_progress_change: function(task, progress) {
            axios
              .get("/update-task-progress/" + task["id"] + "/" + progress)
              .then(function(response) {})
              .catch(function(error) {
                alert(error);
              });
          },
          on_view_change: function(mode) {
            console.log(mode);
          }
        });
        console.log(gantt_chart);
      }
    })
    .catch(function(error) {
      alert(error);
    });
}
