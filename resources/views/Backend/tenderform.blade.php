@extends('Backend.layout')
@section('content')
    <div class="flex p-1 py-4 bg-white place-content-center">
        <div class="w-4/5 overflow-hidden border border-gray-200 rounded-lg">
            <h1 class="text-center font-bold text-2xl py-5 underline text-indigo-700 uppercase">Add Tender</h1>
            <div class="flex items-center justify-between">
                {{-- @include('Backend.Partials.department_modal') --}}
                @include('Backend.Partials.location_modal')
            </div>
            @include('Partials._alert')
            <form class="w-full " action="{{ route('tender.store') }}" method="POST">
                @csrf
                <div class="p-10 pb-6">
                    <div class="flex flex-wrap mb-2 -mx-3">
                        <div class="w-full px-3 mb-2 md:w-1/2 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-first-name"> Tender id </label>
                            <input
                                class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white"
                                id="grid-first-name" name="tender_id" type="number" placeholder="Tender Id" />
                        </div>
                        <div class="w-full px-3 md:w-1/2">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-last-name"> Document Price </label>
                            <input
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" name="document_price" type="number" placeholder="Document Price" />
                        </div>
                    </div>
                    <div class="flex flex-wrap mb-2 -mx-3">
                        <div class="w-full px-3 mb-2 md:w-1/2 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-first-name"> Last Selling Date </label>
                            <input
                                class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white"
                                name="date" id="grid-first-name" type="date" placeholder="Selling Date" />
                        </div>
                        <div class="w-full px-3 md:w-1/2">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-last-name"> Tender Security </label>
                            <input
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                name="tender_security" id="grid-last-name" type="text" placeholder="Security" />
                        </div>
                    </div>

                    <label>
                        <span class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize">Description</span>
                        <textarea
                            class="block w-full px-4 py-3 mt-1 mb-2 text-gray-700 bg-gray-200 border border-gray-200 rounded form-textarea focus:outline-none"
                            name="description" rows="4" placeholder="Tender Description Here..."></textarea>
                    </label>
                    <div class="flex flex-wrap m-6 mb-2 -mx-3">
                        <div class="w-full px-3 mb-2 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-state"> Department </label>
                            <div class="relative">
                                <select
                                    class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-state" name="department_id">
                                    <option>Select Departments</option>
                                    @foreach ($departments as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach
                                </select>
                                <div
                                    class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-3 mb-2 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-state"> Location </label>
                            <div class="relative">
                                <select
                                    class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-state" name="location_id">
                                    <option>Select Location</option>
                                    @foreach ($locations as $location)
                                        <option value="{{$location->id}}" >{{$location->name}}</option>
                                    @endforeach
                                </select>
                                <div
                                    class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-3 mb-2 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-state"> Method </label>
                            <div class="relative">
                                <select
                                    class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-state" name="method_id">
                                    <option>Select Method</option>
                                    @foreach ($methods as $method)
                                        <option value="{{$method->id}}">{{$method->name}}</option>
                                    @endforeach
                                </select>
                                <div
                                    class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap m-6 mb-2 -mx-3">
                        <div class="w-full px-3 mb-2 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-state"> Similar </label>
                            <input
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text" placeholder="Doe" name="similar" />
                        </div>
                        <div class="w-full px-3 mb-2 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-state"> Turnover </label>
                            <input
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text" placeholder="Doe" name="turnover" />
                        </div>
                        <div class="w-full px-3 mb-2 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-state"> Liquid </label>
                            <input
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text" placeholder="Doe" name="liquid" />
                        </div>
                    </div>
                    <div class="flex flex-wrap m-6 mb-2 -mx-3">
                        <div class="w-full px-3 mb-2 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-state"> Tender Capacity </label>
                            <input
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text" placeholder="Doe" name="tender_capacity" />
                        </div>
                        <div class="w-full px-3 mb-2 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-state"> Other </label>
                            <input
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text" placeholder="Doe" name="other" />
                        </div>
                        <div class="w-full px-3 mb-2 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-state"> Note </label>
                            <input
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text" placeholder="Doe" />
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 text-center bg-gray-200">
                    <div class="relative flex flex-col items-start mr-1 text-sm">
                        <!--  -->
                    </div>
                    <button type="submit"
                        class="inline-flex items-center px-6 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add
                        Tender
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
