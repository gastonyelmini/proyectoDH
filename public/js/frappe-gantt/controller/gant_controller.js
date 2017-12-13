var names = [
  ['Redesign website', [0, 12]],
  ['Write new content', [1, 4]],
  ['Apply new styles', [3, 6]],
  ['Review', [7, 7]],
  ['Deploy', [8, 9]],
  ['Go Live!', [10, 10]],
]

var tasks = names.map(function(name, i) {
  var today = new Date()
  var start = new Date(today.getFullYear(), today.getMonth(), today.getDate())
  var end = new Date(today.getFullYear(), today.getMonth(), today.getDate())

  start.setDate(today.getDate() + name[1][0])
  end.setDate(today.getDate() + name[1][1])

  return {
    start: start,
    end: end,
    name: name[0],
    id: 'Task ' + i,
    progress: parseInt(Math.random() * 100, 10),
  }
})

tasks[1].progress = 0
tasks[1].dependencies = 'Task 0'
tasks[2].dependencies = 'Task 1'
tasks[3].dependencies = 'Task 2'
tasks[5].dependencies = 'Task 4'
tasks[5].custom_class = 'bar-milestone'

var gantt_chart = Gantt('#gantt', tasks, {
  on_click: function(task) {
    console.log(task)
  },
  on_date_change: function(task, start, end) {
    console.log(task, start, end)
  },
  on_progress_change: function(task, progress) {
    console.log(task, progress)
  },
  on_view_change: function(mode) {
    console.log(mode)
  },
})
console.log(gantt_chart)
