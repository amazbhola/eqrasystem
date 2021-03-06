@extends('layout.frontend')
@section('title')
    User Register
@endsection
@section('content')

<div class="mt-5 mx-5 w-full  md:mt-0 md:col-span-2 lg:w-3/6">

    <form action="{{route('user.store')}}" method="post">
        @csrf
        <div class="shadow overflow-hidden rounded-md ">
            <h2 class="font-bold text-4xl py-4 bg-gray-800 text-center text-white">Register User</h2>
            @include('Partials._alert')
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6 space-y-2 ">
                    <div class="col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name" autocomplete="given-name" value="{{old('name')}}"
                            class="mt-1 py-2 pl-2 outline-none border focus:border-indigo-500 block w-full shadow-sm sm:text-sm  border-gray-300 rounded-md">
                    </div>
                    <div class="col-span-6">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" autocomplete="email" value="{{old('email')}}"
                            class="mt-1 py-2 pl-2  outline-none border focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="col-span-6">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="password"
                            class="mt-1 py-2 pl-2  outline-none border  focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="col-span-6">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="mt-1 py-2 pl-2 outline-none border  focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-900 mb-2">
                        Signup
                    </button>
                </div>

                <div class="">
                    <a class="text-gray-800 px-2" href="{{ route('user.index') }}"> -> For Login</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
