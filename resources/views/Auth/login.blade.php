@extends('layout.frontend')
@section('title')
    User Login
@endsection
@section('content')
<div class="mt-5 w-full mx-5 md:mt-0  lg:w-2/6" >
    <form action="{{route('login.store')}}" method="POST">
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md ">
          <h2 class="font-bold text-4xl py-4 bg-indigo-600 text-center text-white">Login</h2>
          @include('Partials._alert')
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class=" space-y-8">
              <div class="">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="text" name="email" id="email" value="{{old('email')}}" autocomplete="given-name" class="mt-1 pl-2 outline-none focus:border-indigo-500 py-2 block border w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              <div class="">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" autocomplete="family-name" class="mt-1 pl-2 outline-none focus:border-indigo-500 block py-2 border w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Login
                </button>
              </div>
              <div class="">
                <a class="text-indigo-500 px-2" href="{{ route('user.create') }}"> -> For Register</a>
            </div>
          </div>

        </div>
      </form>
 </div>
@endsection
