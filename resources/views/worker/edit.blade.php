<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
<h1>Create page</h1>
<div>
    <div>
        <form action="{{ route('worker.update', $worker->id) }}" method="post">
            @csrf
            @method('Patch')
            <div style="margin-bottom: 15px">Name: <input type="text" name="name" value="{{ $worker->name }}"></div>
            <div style="margin-bottom: 15px">Surname: <input type="text" name="surname" value="{{ $worker->surname }}"></div>
            <div style="margin-bottom: 15px">Email: <input type="email" name="email" value="{{ $worker->email }}"></div>
            <div style="margin-bottom: 15px">Age: <input type="number" name="age" value="{{ $worker->age }}"></div>
            <div style="margin-bottom: 15px">Description: <textarea name="discription">{{ $worker->description }}</textarea></div>
            <div style="margin-bottom: 15px">
                <input id="IsMarried" type="checkbox" name="is_married" {{$worker->is_married ? ' checked' : '' }}>
                <label for="IsMarried">Is Married</label>
            </div>
            <div><input type="submit" value="Сохранить"></div>
        </form>
    </div>
</div>
</body>
</html>
