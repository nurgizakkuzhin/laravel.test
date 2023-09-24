@extends('layout.main')

@section('content')
<h1>Edit page</h1>
<div>
    <div>
        <form action="{{ route('worker.update', $worker->id) }}" method="post">
            @csrf
            @method('Patch')
            <div style="margin-bottom: 15px">Name: <input type="text" name="name" value="{{ old('name') ?? $worker->name }}">
                @error('name')
                {{ $message }}
                @enderror
            </div>
            <div style="margin-bottom: 15px">Surname: <input type="text" name="surname" value="{{ old('surname') ?? $worker->surname }}">
                @error('surname')
                {{ $message }}
                @enderror</div>
            <div style="margin-bottom: 15px">Email: <input type="email" name="email" value="{{ old('email') ?? $worker->email }}">
                @error('email')
                {{ $message }}
                @enderror</div>
            <div style="margin-bottom: 15px">Age: <input type="number" name="age" value="{{ old('age') ?? $worker->age }}">
                @error('age')
                {{ $message }}
                @enderror</div>
            <div style="margin-bottom: 15px">Description: <textarea name="description">{{ old('description') ?? $worker->description }}</textarea>
                @error('description')
                {{ $message }}
                @enderror
            </div>
            <div style="margin-bottom: 15px">
                <input id="IsMarried" type="checkbox" name="is_married" {{$worker->is_married ? ' checked' : '' }}>
                <label for="IsMarried">Is Married</label>
            </div>
            <div><input type="submit" value="Сохранить">
            </div>
        </form>
    </div>
</div>
@endsection
