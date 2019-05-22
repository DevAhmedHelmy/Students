<!doctype html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Page Title</title>
</head>
<body>
  <ul>
    @foreach($tasks as $task)
      <li><a href="/tasks/{{$task->id}}">{{$task->body}}</a></li>
    @endforeach
  </ul>


</body>
</html>
