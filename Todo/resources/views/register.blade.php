@extends('components.layout')

@section('content')

<form method="POST" action='/todo/register' class="mt-10">
    @csrf

    <x-form.input name="name" />
    <x-form.input name="username" />
    <x-form.input name="email" />
    <x-form.input name="password" type="password" />
    <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">Register</button>
</form>

@endsection