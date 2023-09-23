<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Worker</title>

    <style>
        .my-nav svg{
            width: 25px;
        }
    </style>
</head>
<body>
    <h1>Index page</h1>
    <div>
        <a href="{{route('worker.create')}}">Добавить</a>
    </div>
    <div>
        @foreach($workers as $worker)
            <div>
                <div>name: {{$worker->name}}</div>
                <div>surname: {{$worker->surname}}</div>
                <div>email: {{$worker->email}}</div>
                <div>age: {{$worker->age}}</div>
                <div>description: {{$worker->description}}</div>
                <div>is married: {{$worker->is_married}}</div>
            </div>
            <div>
                <a href="{{route('worker.show', $worker->id)}}">Посмотреть</a>
                <a href="{{route('worker.edit', $worker->id)}}">Редактировать</a>
                <div>
                    <form action="{{route('worker.delete', $worker->id)}}" method="post">
                        @csrf
                        @method('Delete')
                        <input type="submit" value="Удалить">
                    </form>
                </div>
            </div>
            <hr>
        @endforeach
        <div class="my-nav">
            {{ $workers->links() }}
        </div>
    </div>
</body>
</html>
