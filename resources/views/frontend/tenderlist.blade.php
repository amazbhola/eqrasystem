


<div class="font-sans text-base text-gray-900 bg-gray-200 border-box">
    <div class="mb-16 sm:mx-auto sm:my-0">
      <div class="px-6 py-4 bg-gray-200 divide-y divide-gray-400 sm:py-8">
        <div class="flex flex-col mb-4 items-between sm:flex-row sm:justify-between sm:items-end">
          <h2 class="mt-2 mb-4 text-xl font-light leading-tight tracking-wide text-center text-gray-900 sm:mr-auto sm:text-left sm:text-2xl">
            <marquee behavior="" direction="left" class="text-red-600 text-2xl font-bold capitalize"> On Going Tender in Bhola

            </marquee>
          </h2>

          <div class="flex items-end justify-center"></div>
        </div>

        <div class="flex flex-col-reverse justify-between sm:flex-row">
            <div class="w-full  grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3">
                {{-- {{dd($tenders)}} --}}
                @foreach ($tenders as $tender)
                <div class="w-full mt-6 mb-6 p-4">
                    <a href="{{route('tender.show',$tender->id)}}" class="block w-full px-4 py-3 mb-4 bg-white border-2 border-indigo-500 border-opacity-50 border-solid rounded-lg">
                      <div class="flex justify-between mb-2">
                        <span class="text-sm font-semibold text-gray-600 uppercase">Tender id: {{$tender->tender_id}}</span>
                      </div>
                      <div>
                        <p>{{$tender->description}}</p>
                      </div>
                      <div class="flex items-baseline justify-between">
                        <h2>
                          <span class="mr-1 text-3xl font-semibold text-gray-700">{{$tender->method->name}}</span>
                          <span class="font-semibold text-gray-700">{{$tender->department->name}}</span>
                          <span class="font-light text-gray-700">{{$tender->location->name}}</span>
                        </h2>
                        <span class="inline-block mr-2 font-semibold text-gray-700">Click Details</span>
                      </div>
                    </a>
                  </div>
                @endforeach
                {{ $tenders->links() }}
              </div>
        </div>
      </div>
    </div>
  </div>
