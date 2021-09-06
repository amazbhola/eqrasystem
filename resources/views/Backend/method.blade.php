@extends('Backend.layout')
@section('content')
<div class="mt-5 w-full mx-5 md:mt-0  lg:w-2/6" >
    <form action="{{route('method.store')}}" method="POST">
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md ">
          <h2 class="font-bold text-4xl py-4 bg-indigo-600 text-center text-white">Add Method</h2>
          @include('Partials._alert')
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class=" space-y-8">

              <div class="">
                <label for="method" class="block text-sm font-medium text-gray-700">Method Name</label>
                <input type="text" name="name" id="method" autocomplete="family-name" class="mt-1 pl-2 outline-none focus:border-indigo-500 block py-2 border w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Add Method
                </button>
              </div>

          </div>

        </div>
      </form>
 </div>
@endsection
