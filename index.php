<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Todo List Json</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="app">
        <h1 class="text-center p-3 mb-3 text-light">Todo List</h1>
        <div class="container">
            <div class="tasklist mx-5 p-3">
                <ul class="list-group list-group-flush w-50 p-3 bg-white rounded-2 m-auto">
                    <li class="list-group-item d-flex justify-content-between" v-for="(task, index) in tasks">
                    <span @click.stop="changeStatus(index)" :class="{'strike_out' : (task.done)}">{{task.text}}</span><i class="fa-solid fa-trash " @click.stop="taskDone(index)"></i>
                    </li>
                </ul>
            </div>
            <div class="addTask p-4">
                <div class="input-group mb-3 w-50 m-auto">
                    <input type="text" class="form-control" placeholder="New Task..." name="newTask" id="newTask" v-model="newTask" @keyup.enter="addTask">
                    <button type="button" class="btn btn-primary" @click="addTask">Add
                        Task</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./app.js"></script>

</body>

</html>