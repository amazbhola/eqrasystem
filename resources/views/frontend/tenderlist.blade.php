<div class="font-sans text-base text-gray-900 bg-gray-200 border-box">
    <div class="mb-16 sm:mx-auto sm:my-0">
        <div class="px-6 py-4 bg-gray-200 divide-y divide-gray-400 sm:py-8">
            <div class="flex flex-col mb-4 items-between sm:flex-row sm:justify-between sm:items-end">
                <h2
                    class="mt-2 mb-4 text-xl font-light leading-tight tracking-wide text-center text-gray-900 sm:mr-auto sm:text-left sm:text-2xl">
                    <marquee behavior="" direction="left" class="text-red-600 text-2xl font-bold capitalize"> On Going
                        Tender in Bhola

                    </marquee>
                </h2>

                <div class="flex items-end justify-center"></div>
            </div>

            <div class="flex flex-col-reverse justify-between sm:flex-row">
                <div class="w-full  grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4">
                    {{-- {{dd($tenders)}} --}}

                    @foreach ($tenders as $tender)
                        <div class="w-full my-6">
                            <a href="{{route('tender.show',$tender->id)}}">
                                <div class="shadow-xl overflow-hidden rounded-md ">
                                    <h2
                                        class="flex justify-between items-center font-bold text-xl py-2 px-4 bg-gradient-to-t from-gray-900 to-gray-700 text-center text-white">
                                        <span
                                            class="">Tender ID: {{ $tender->tender_id }}</span>
                                        <span class="
                                            text-xs">{{ $tender->method->name }}</span>
                                    </h2>

                                        <div class=" flex items-center justify-center">

                                            <div class="max-w-4xl  bg-white w-full rounded-lg shadow-xl">

                                                <div>
                                                    <div class="md:grid md:grid-cols-4 hover:bg-gray-50 md:space-y-0 space-y-1 p-2 border-b">
                                                        <p class="text-gray-600">
                                                           Work Name :
                                                        </p>
                                                        <p class="md:col-span-3">
                                                            {{ Str::substr($tender->description, 0, 130) }}
                                                        </p>
                                                    </div>
                                                    <div class="md:grid md:grid-cols-4 hover:bg-gray-50 md:space-y-0 space-y-1 p-2 border-b">
                                                        <p class="text-gray-600">
                                                           Department :
                                                        </p>
                                                        <p class="md:col-span-3">
                                                            {{ $tender->department->name }}
                                                        </p>
                                                    </div>
                                                    <div class="md:grid md:grid-cols-4 hover:bg-gray-50 md:space-y-0 space-y-1 p-2 border-b">
                                                        <p class="text-gray-600">
                                                            Location :
                                                        </p>
                                                        <p class="md:col-span-3">
                                                            {{ $tender->location->name }}
                                                        </p>
                                                    </div>
                                                    <div class="md:grid md:grid-cols-4 hover:bg-gray-50 md:space-y-0 space-y-1 p-2 border-b">
                                                        <p class="text-gray-600">
                                                            Last Selling Date :
                                                        </p>
                                                        <p class="md:col-span-3">
                                                            {{date('d-m-Y', strtotime($tender->date));}}
                                                        </p>
                                                    </div>
                                                    <div class="text-red-500 float-right mr-4 my-4">Click Details...</div>


                                                </div>
                                            </div>

                                        </div>


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
