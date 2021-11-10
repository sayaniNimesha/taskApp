<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update task</title>
</head>
<body>
<div class = "container">
    <br>
    <br>
    <br> <br>
    <form method = "post" action = "/updatetasks">
    {{csrf_field()}}

    <input type="text" class="form-control" name = "task" value="{{$taskdata->task}}"/>
    <input type="hidden" name = "id" value="{{$taskdata->id}}"/>
    <br> 
    <input type="submit" class="btn btn-warning" value="update"/>
    &nbsp &nbsp 
    <input type="button" class="btn btn-danger" value="cancel"/>
  

</div>
</body>
</html>