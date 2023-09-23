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
        <form action="{{ route('worker.store') }}" method="post">
            @csrf
            <div style="margin-bottom: 15px">Name: <input type="text" name="name" ></div>
            <div style="margin-bottom: 15px">Surname: <input type="text" name="surname"></div>
            <div style="margin-bottom: 15px">Email: <input type="email" name="email"></div>
            <div style="margin-bottom: 15px">Age: <input type="number" name="age"></div>
            <div style="margin-bottom: 15px">Description: <textarea name="discription"></textarea></div>
            <div style="margin-bottom: 15px">
                <input id="IsMarried" type="checkbox" name="is_married">
                <label for="IsMarried">Is Married</label>
            </div>
            <div><input type="submit" value="Добавить"></div>
        </form>
    </div>
</div>
</body>
</html>
