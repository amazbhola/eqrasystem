<div class="w-full mt-6 mb-6 p-4">
    <a href="{{route('tender.show',$tender->id)}}" class="block w-full px-4 py-3 mb-4 bg-white border-2 border-indigo-500 border-opacity-50 border-solid rounded-lg">
      {{-- <div class="flex justify-between mb-2">
        <span class="text-2xl font-semibold text-gray-600 uppercase">Tender id: {{$tender->tender_id}}</span>
      </div> --}}
      <div class=" card-header bg-gray-100">abc</div>

      <div>
        <p class="text-justify">{{$tender->description}}</p>
      </div>
      <div class="flex items-baseline justify-between">
        <h2>
          <span class="mr-1 text-xl font-semibold text-gray-700">{{$tender->method->name}}</span>|
          <span class="font-semibold text-gray-700">{{$tender->department->name}}</span>|
          <span class="font-light text-gray-700">{{$tender->location->name}}</span>
        </h2>
        <span class="inline-block mr-2 font-semibold text-gray-700">Click Details</span>
      </div>
    </a>
  </div>



  <div class="min-h-screen flex items-center justify-center px-4">

    <div class="max-w-4xl  bg-white w-full rounded-lg shadow-xl">
        <div class="p-4 border-b">
            <h2 class="text-2xl ">
                Applicant Information
            </h2>
            <p class="text-sm text-gray-500">
                Personal details and application.
            </p>
        </div>
        <div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Full name
                </p>
                <p>
                    Jane Doe
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Application for
                </p>
                <p>
                    Product Manager
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Email Address
                </p>
                <p>
                    Janedoe@gmail.com
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Salary
                </p>
                <p>
                    $ 12000
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    About
                </p>
                <p>
                    Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
                </p>
            </div>

        </div>
    </div>
    <a href="https://www.buymeacoffee.com/danimai" target="_blank" class="bg-purple-600 p-2 rounded-lg text-white fixed right-0 bottom-0">
        Support me
    </a>
</div>
