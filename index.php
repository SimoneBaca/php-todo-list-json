<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Todo List Json</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div id="app">
        <h1 class="text-center p-3 mb-3">Todo List</h1>
        <div class="container">
            <div class="tasklist mx-5 p-3">
                <ul class="list-group list-group-flush w-50 p-3 bg-white rounded-2 m-auto">
                    <li class="list-group-item">item1</li>
                    <li class="list-group-item"> item2</li>
                    <li class="list-group-item"> item3</li>
                    <li class="list-group-item"> item4</li>
                    <li class="list-group-item">item5</li>
                </ul>
            </div>
            <div class="addTask p-4">
                <div class="input-group mb-3 w-50 m-auto">
                    <input type="text" class="form-control" placeholder="New Task...">
                    <button type="button" class="btn btn-primary">Add
                        Task</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.global.min.js"></script>
    <script src="./app.js"></script>

</body>

</html>