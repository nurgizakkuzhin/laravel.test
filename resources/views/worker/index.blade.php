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
    <hr>
        <div>
            <form action="{{ route('worker.index') }}">
                <input type="text" name="name" placeholder="name" value="{{request()->get('name')}}">
                <input type="text" name="surname" placeholder="surname" value="{{request()->get('surname')}}">
                <input type="text" name="email" placeholder="email" value="{{request()->get('email')}}">
                <input type="number" name="from" placeholder="from" value="{{request()->get('from')}}">
                <input type="number" name="to" placeholder="to" value="{{request()->get('to')}}">
                <input type="text" name="description" placeholder="description" value="{{request()->get('description')}}">
                <input id="isMarried" type="checkbox" name="is_married" {{ request()->get('is_married') == 'on' ? ' checked' : ''}}>
                <label for="isMarried">Is married</label>
                <input type="submit" value="Поиск">
                <a href="{{route('worker.index')}}">Сбросить</a>
            </form>
        </div>
    <hr>
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
