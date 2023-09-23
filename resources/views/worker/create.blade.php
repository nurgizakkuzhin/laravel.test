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
            <div style="margin-bottom: 15px">Name:
                <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div style="margin-bottom: 15px">Surname:
                <input type="text" name="surname" placeholder="surname" value="{{ old('surname') }}">
                @error('surname')
                {{ $message }}
                @enderror
            </div>
            <div style="margin-bottom: 15px">Email:
                <input type="email" name="email" placeholder="email" value="{{ old('email') }}">
                @error('email')
                {{ $message }}
                @enderror
            </div>
            <div style="margin-bottom: 15px">Age:
                <input type="number" name="age" placeholder="age" value="{{ old('age') }}">
                @error('age')
                {{ $message }}
                @enderror
            </div>
            <div style="margin-bottom: 15px">Description:
                <textarea name="description" placeholder="description">
                    {{ old('description') }}"
                </textarea>
                @error('description')
                {{ $message }}
                @enderror
            </div>
            <div style="margin-bottom: 15px">
                <input id="IsMarried" type="checkbox" name="is_married" {{old('is_married') == 'on' ? ' checked' : ''}}>
                <label for="IsMarried">Is Married</label>
            </div>
            <div><input type="submit" value="Добавить"></div>
        </form>
    </div>
</div>
</body>
</html>
