@extends('Backend.layout')
@section('content')
    <div class="container mx-auto">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="flex flex-col">
            <div class="w-full">
                <div class="p-4 border-b border-gray-200 shadow">
                    {{ $dataTable->table() }}
                    <!-- <table> -->
                    {{-- <table id="dataTable" class="p-4">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="p-8 text-xs text-gray-500">
                                    ID
                                </th>
                                <th class="p-8 text-xs text-gray-500">
                                    Name
                                </th>
                                <th class="p-8 text-xs text-gray-500">
                                    Email
                                </th>
                                <th class="p-8 text-xs text-gray-500">
                                    Created_at
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Edit
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">

                            @foreach ($tenders as $tender)
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-center text-gray-500">
                                        {{ $tender->tender_id }}
                                    </td>
                                    <td class="px-6 py-4 text-justify">
                                        <div class="text-sm text-gray-900">
                                            {{ Str::substr($tender->description, 0, 130) }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="text-sm text-gray-500">{{ $tender->method->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-center text-gray-500">
                                        {{ $tender->location->name }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="{{ route('tender.edit', $tender->id) }}"
                                            class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Edit</a>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <form action="{{ route('tender.destroy', $tender->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button href="#" type="submit"
                                                class="px-4 py-1 text-sm text-white bg-red-400 rounded">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table> --}}
                </div>

            </div>
        </div>
    </div>


@endsection
@section('scripts')
    {{ $dataTable->scripts() }}
@endsection
