@extends('frontend.layout')
@section('header')
    <header class="relative z-50 w-full h-24">
        <div class="container flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">

            <a href="/" class="relative flex items-center inline-block h-5 h-full font-black leading-none">
                {{-- <svg class="w-auto h-6 text-indigo-600 fill-current" viewBox="0 0 194 116"
                    xmlns="http://www.w3.org/2000/svg">
                    <g fill-rule="evenodd">
                        <path d="M96.869 0L30 116h104l-9.88-17.134H59.64l47.109-81.736zM0 116h19.831L77 17.135 67.088 0z" />
                        <path d="M87 68.732l9.926 17.143 29.893-51.59L174.15 116H194L126.817 0z" />
                    </g>
                </svg>
                <span class="ml-3 text-xl text-gray-800">Livetenderbd<span class="text-pink-500">.</span></span> --}}
                <img class="w-auto h-10" src="{{asset('image/live tender.png')}}" alt="">
            </a>

            <nav id="nav"
                class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-64 pt-5 mt-24 text-sm text-gray-800 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
                <a href="#"
                    class="ml-0 mr-0 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Home</a>
                <a href="#features"
                    class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Features</a>
                <a href="#pricing"
                    class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Pricing</a>
                <a href="#testimonials"
                    class="font-bold duration-100 transition-color hover:text-indigo-600">Testimonials</a>
                <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden">
                    <a href="#_" class="w-full py-2  font-bold text-center text-pink-500">Login</a>
                    <a href="#_"
                        class="relative inline-block w-full px-5 md:py-3 text-sm leading-none text-center text-white bg-indigo-700 fold-bold">Get
                        Started</a>
                </div>
            </nav>

            <div
                class="absolute left-0 flex-col items-center justify-center hidden w-full pb-8 mt-48 border-b border-gray-200 md:relative md:w-auto md:bg-transparent md:border-none md:mt-0 md:flex-row md:p-0 md:items-end md:flex md:justify-between">
                <a href="#_"
                    class="relative z-40 px-3 py-2 mr-0 text-sm font-bold text-pink-500 md:px-5 lg:text-indigo-500 sm:mr-3 md:mt-0">Login</a>
                <a href="#_"
                    class="relative z-40 inline-block w-auto h-full px-5 md:py-3 text-sm font-bold leading-none text-white transition-all transition duration-100 duration-300 bg-indigo-700 rounded shadow-md fold-bold lg:bg-white lg:text-indigo-700 sm:w-full lg:shadow-none hover:shadow-xl">Get
                    Started</a>

            </div>

            <div id="nav-mobile-btn"
                class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
                <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
                <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
            </div>

        </div>
    </header>
@endsection
@section('title')
    Livetenderbd.com
@endsection
@section('content')
    <div class="flex p-1 py-4 bg-gray-100 place-content-center">
        <div class="w-full sm:w-4/5 overflow-hidden border border-gray-300 rounded-lg shadow-xl ">
            <h1 class="text-center font-bold text-2xl py-5 underline text-red-500 uppercase">Tender Details</h1>

            <div class="w-full ">
                <div class="p-10 pb-6">
                    <div class="flex flex-wrap mb-2 -mx-3">
                        <div class="w-full px-3 mb-2 md:w-1/2 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-first-name"> Tender id </label>
                            <label
                                class="block w-full px-4 md:py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500">{{ $tender->tender_id }}</label>

                        </div>
                        <div class="w-full px-3 md:w-1/2">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-last-name"> Document Price </label>
                            <label
                                class="block w-full px-4 md:py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500">{{ $tender->document_price }}</label>
                        </div>
                    </div>
                    <div class="flex flex-wrap mb-2 -mx-3">
                        <div class="w-full px-3 mb-2 md:w-1/2 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-first-name"> Last Selling Date </label>
                            <label
                                class="block w-full px-4 md:py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white">{{date('d-m-Y', strtotime($tender->date));}}</label>
                        </div>
                        <div class="w-full px-3 md:w-1/2">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-last-name"> Tender Security </label>
                            <label
                                class="block w-full px-4 md:py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500">{{ $tender->tender_security }}</label>
                        </div>
                    </div>

                    <label>
                        <span class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize">Description</span>
                        <label
                            class="block w-full px-4 md:py-3 mt-1 mb-2 text-gray-700 bg-gray-200 border border-gray-200 rounded form-textarea focus:outline-none"
                            rows="4">{{ $tender->description }}</label>
                    </label>
                    <div class="flex flex-wrap m-6 mb-2 -mx-3">
                        <div class="w-full px-3 mb-2 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-state"> Department </label>
                            <div class="relative">
                                <label
                                    class="block w-full px-4 md:py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500">{{ $tender->department->name }}</label>

                            </div>
                        </div>
                        <div class="w-full px-3 mb-2 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                for="grid-state"> Location </label>
                            <div class="relative">
                                <label
                                    class="block w-full px-4 md:py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" ">{{ $tender->location->name }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="   w-full px-3 mb-2 md:w-1/3 md:mb-0">
                                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                        for="grid-state"> Method </label>
                                    <div class="relative">
                                        <label
                                            class="block w-full px-4 md:py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500">{{ $tender->method->name }}</label>
                                    </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap m-6 mb-2 -mx-3">
                            <div class="w-full px-3 mb-2 md:w-1/3 md:mb-0">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                    for="grid-state"> Similar </label>
                                <label
                                    class="block w-full px-4 md:py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500">{{ $tender->similar }}</label>
                            </div>
                            <div class="w-full px-3 mb-2 md:w-1/3 md:mb-0">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                    for="grid-state"> Turnover </label>
                                <label
                                    class="block w-full px-4 md:py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500">{{ $tender->turnover }}</label>
                            </div>
                            <div class="w-full px-3 mb-2 md:w-1/3 md:mb-0">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                    for="grid-state"> Liquid </label>
                                <label
                                    class="block w-full px-4 md:py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500">{{ $tender->liquid }}</label>
                            </div>
                        </div>
                        <div class="flex flex-wrap m-6 mb-2 -mx-3">
                            <div class="w-full px-3 mb-2 md:w-1/3 md:mb-0">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                    for="grid-state"> Tender Capacity </label>
                                <label
                                    class="block w-full px-4 md:py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500">{{ $tender->tender_capacity }}</label>
                            </div>
                            <div class="w-full px-3 mb-2 md:w-1/3 md:mb-0">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                    for="grid-state"> Other </label>
                                <label
                                    class="block w-full px-4 md:py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500">{{ $tender->other }}</label>
                            </div>
                            <div class="w-full px-3 mb-2 md:w-1/3 md:mb-0">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 capitalize"
                                    for="grid-state"> Note </label>
                                <label
                                    class="block w-full px-4 md:py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500">{{ $tender->note }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 text-center bg-gray-900 ">
                        <div class="relative flex flex-col items-start mr-1 text-sm ">
                            <!--  -->
                        </div>

                    </div>
                </div>
            </div>
        </div>

    @endsection
