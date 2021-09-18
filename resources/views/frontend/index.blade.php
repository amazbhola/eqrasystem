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


{{-- data table --}}
<!DOCTYPE html>
<html lang="en" class="antialiased">

<head>

    <title>DataTables </title>


    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">


    <table id="example" class="display nowrap bg-white rounded-sm shadow-md" style="width:100%">
        <thead>
            <tr>
                <th>Tender ID</th>
                <th>Work Name</th>
                <th>Method</th>
                <th>Location</th>
                <th>Doc Price</th>
                <th>Security</th>
                <th>Similar</th>
                <th>Turnover</th>
                <th>Last Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tenders as $tender)
                <tr>
                    <td>{{ $tender->tender_id }}</td>
                    <td class="w-72">{{ Str::substr($tender->description, 0, 130) }}</td>
                    <td>{{ $tender->method->name }}</td>
                    <td>{{ $tender->location->name }}</td>
                    <td>{{ $tender->document_price }}</td>
                    <td>{{ $tender->tender_security }}</td>
                    <td>{{ $tender->similar }}</td>
                    <td>{{ $tender->turnover }}</td>
                    <td>{{ date('d-m-Y', strtotime($tender->date)) }}</td>
                </tr>
            @endforeach

        </tbody>
        {{-- <tfoot>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </tfoot> --}}
    </table>





    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],

            });
        });
    </script>

</body>
