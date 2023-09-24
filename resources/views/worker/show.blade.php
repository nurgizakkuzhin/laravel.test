@extends('layout.main')

@section('content')
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
@endsection
