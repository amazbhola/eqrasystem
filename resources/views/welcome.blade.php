@extends('layout.frontend')
@section('content')
<div class="bg-white w-2/4 py-10 text-center shadow-lg rounded-md  ">
    <h1 class="text-center text-3xl font-bold p-12">Welcome</h1>
        <div class="grid grid-cols-2 gap-12">
            <div class="p-16  m-8 bg-indigo-500 rounded-md">
                <a href="{{route('user.index')}}" class="p-2 border-2 rounded-md hover:border-pink-400 text-white font-bold">Login</a>

            </div>
            <div class="p-16 m-8 bg-indigo-500 rounded-md">
                <a href="{{route('user.create')}}" class="p-2 border-2 rounded-md hover:border-pink-400 text-white font-bold">Register</a>
            </div>
        </div>
    </div>
@endsection
