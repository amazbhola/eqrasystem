<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="{{ mix('/js/app.js') }}" defer></script>

</head>
<body class="bg-gray-200 min-h-screen ">
    <div class="w-full h-16 bg-white border-b-1 shadow-md pl-8 lg:pl-80 px-8 fixed flex items-center">
        <div id="hamburg" class="cursor-pointer lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
        </div>
        {{-- hamburg --}}
        <div class="relative hidden lg:block">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 absolute top-2 text-gray-500 left-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
            <input class="block w-72 shadow rounded-full outline-none bg-gray-200 text-base py-2 pl-11" type="text" placeholder="Search">
        </div>
        <div class="ml-auto hidden lg:flex items-center">
         <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 hover:text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>
         </div>
         <div class="relative ml-4" >
            <div id="dropdown" class="cursor-pointer ">
                <img class="rounded-full h-8 w-8 object-cover" src="https://ui-avatars.com/api/?name={{auth()->user()->name}}" alt="">
            </div>
            @auth
            <div id="dropdown_content" class="absolute z-50 hidden bg-white shadow-lg w-48 mt-2 right-0 py-2 rounded-md">
                <div class="font-semibold text-sm rounded-md text-gray-600 px-4 py-3 ">Manage Account</div>
                <div class="border-t border-gray-300"></div>
                <a class="px-4 py-2 block hover:bg-gray-300 transition leading-5 capitalize" href="">{{auth()->user()->name}} Profile</a>
                <a class="px-4 py-2 block hover:bg-gray-300 transition leading-5" href="{{route('login.create')}}">Logout</a>
            </div>
            @endauth
            @guest
            <div class="absolute z-50  bg-white shadow-lg w-48 mt-2 right-0 py-2 rounded-md">
                <div class="font-semibold text-sm rounded-md text-gray-600 px-4 py-3 ">Login</div>
            </div>
            @endguest
         </div>
        </div>
    </div>
    <div id="sidebar" class="fixed left-0 top-0 w-72 h-full bg-gray-800 shadow-md z-10 flex flex-col" >
        <div class="bg-gradient-to-t from-gray-900 to-gray-700 text-lg text-white uppercase text-center font-bold h-16 py-5">
           <div class="flex items-center relative">
            <img class="rounded-full h-8 w-8 object-cover mx-5" src="https://ui-avatars.com/api/?name={{auth()->user()->name}}" alt="">
            {{auth()->user()->name}}
            {{-- close button --}}
            <div id="closer" class="absolute right-3 top-0 cursor-pointer block lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
            </div>
           </div>

        </div>
        <div class="flex flex-col justify-between flex-grow">
            <div class="py-5">
                <a class="flex items-center border-l-4 border-blue-600 px-4 py-3 mb-1 text-white bg-gray-900" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                      </svg>
                      Dashboard
                </a>
                <a class="flex items-center border-l-4 hover:border-blue-600 px-4 py-3 mb-1 text-white hover:bg-gray-900 border-transparent transition" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                      </svg>
                      Add Post
                </a>
                <a class="flex items-center border-l-4 lg:hidden hover:border-blue-600 px-4 py-3 mb-1 text-white hover:bg-gray-900 border-transparent transition" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                      </svg>
                      logout
                </a>
            </div>
            {{-- sidebar bottom --}}
            <div class="lg:hidden block">
                <div class="relative mx-5 mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 absolute top-2 text-gray-500 left-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                      </svg>
                    <input class="block w-full shadow rounded-full outline-none bg-gray-600 text-gray-200 text-base py-2 pl-11" type="text" placeholder="Search">
                </div>
                <div class="border-t border-gray-500 flex items-center py-4 px-5">
                    <div class="mr-4">
                        <img class="rounded-full h-8 w-8 object-cover" src="https://ui-avatars.com/api/?name={{auth()->user()->name}}" alt="">
                    </div>
                    <a class="text-gray-400 text-md capitalize" href="">{{auth()->user()->name}}</a>
                    <div class="ml-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 hover:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                          </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="pl-8 lg:pl-80 pt-24 pr-8">
        @yield('content')
    </div>

    <script>
        document.getElementById('hamburg').addEventListener('click',function () {
            document.getElementById('sidebar').classList.add('active')
        })
        document.getElementById('closer').addEventListener('click',function () {
            document.getElementById('sidebar').classList.remove('active')
        })
        document.getElementById('dropdown').addEventListener('click',function () {
            document.getElementById('dropdown_content').classList.toggle('hidden')
        })
    </script>

</body>
</html>
