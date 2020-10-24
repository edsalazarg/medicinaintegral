@extends("layouts.app")

@section("content")
    <h1>Usuarios</h1>
    @foreach($users as $user)
        <span>{{$user->name}}</span>
    @endforeach
@endsection
