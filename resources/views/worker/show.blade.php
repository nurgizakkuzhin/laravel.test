<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
<h1>Show page</h1>
<div>
        <div>
            <div>name: {{$worker->name}}</div>
            <div>surname: {{$worker->surname}}</div>
            <div>email: {{$worker->email}}</div>
            <div>age: {{$worker->age}}</div>
            <div>discription: {{$worker->description}}</div>
        </div>
        <div>
            <a href="{{route('worker.index')}}">Назад</a>
        </div>
</div>
</body>
</html>
