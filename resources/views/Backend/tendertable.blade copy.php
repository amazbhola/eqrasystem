@extends('Backend.layout')
@section('content')
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css" rel="stylesheet">
    <div class="bg-gray-100 text-gray-900 tracking-wider leading-normal">


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
                    <th>Department</th>
                    <th>Last Date</th>
                    <th>Other</th>
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
                        <td>{{ $tender->department->name }}</td>
                        <td>{{ date('d-m-Y', strtotime($tender->date)) }}</td>
                        <td>{{ $tender->other }}</td>
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


    </div>


    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/3.3.3/js/dataTables.fixedColumns.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                scrollY: "300px",
                scrollX: true,
                scrollCollapse: true,
                paging: false,
                columnDefs: [{
                    width: '10%',
                    targets: 1
                }],
                fixedColumns: true,
                "pageLength": 50,

            });
        });
    </script>

@endsection
