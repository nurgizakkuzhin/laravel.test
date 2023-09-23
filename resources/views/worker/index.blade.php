<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Worker</title>
</head>
<body>
    <h1>Hello world! I`m index!</h1>
    <div>
        @foreach($workers as $worker)
            <div>
                <div>name: {{$worker->name}}</div>
                <div>surname: {{$worker->surname}}</div>
                <div>email: {{$worker->email}}</div>
                <div>age: {{$worker->age}}</div>
                <div>discription: {{$worker->description}}</div>
            </div>
            <div>
                <a href="{{route('worker.show', $worker->id)}}">Посмотреть</a>
            </div>
            <hr>
        @endforeach
    </div>
</body>
</html>
