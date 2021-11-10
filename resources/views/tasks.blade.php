<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class = "container">
        <div class = "text-center">  
           <h1> daily task </h1>
            <div class="row">
                    <div class="col-md-12">
                        @foreach($errors->all() as $error)

                        <div class = "alert alert-danger" role = "alert">
                            {{$error}}
                        </div>
                    @endforeach

                        <form method="post" action ="/saveTask">

                        {{csrf_field()}}

                            <input type="text" class="form-control" name = "task" placeholder="enter your task name">
                            <br>
                            <input type="submit" class="btn btn-primary" value = "save" >
                            <input type="button" class="btn btn-warning" value = "clear" >

                        </form>
                        <table class="table table-dark">
                            <th>id</th>
                            <th>task</th>
                            <th>completed</th>
                            <th>action</th>

                            @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->task}}</td>

                                <td>
                                @if($task->iscompleted)
                                <button class = "btn btn-success">completed</button>
                                @else
                                <button class = "btn btn-warning">not completed</button>
                                @endif
                                </td>
                                <td>
                                    @if(!$task->iscompleted)

                                    <a href = "/markascompleted/{{$task->id}}" class = "btn btn-primary"> Marks As completed </a>
                               
                                    @else

                                    <a href = "/markasnotcompleted/{{$task->id}}" class = "btn btn-danger"> Marks As not completed </a>
                                    @endif

                                    <a href = "/deletetask/{{$task->id}}" class = "btn btn-warning"> delete </a>
                                    <a href = "/updatetask/{{$task->id}}" class = "btn btn-primary"> update </a>

                                </td>
                            </tr>
                            @endforeach

                        </table>
                    </div>
            </div>   
        </div>
    </div> 
</body>
</html>