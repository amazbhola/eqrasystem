@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="bg-red-200 text-xs text-red-500 border border-indigo-500 py-2 px-2">
 {{$error}}
  </div>
@endforeach
@endif

@if (session()->has('massege'))
    <div class="bg-red-200 text-xs text-red-500 border border-indigo-500 py-2 px-2">
    {{session()->get('massege')}}
     </div>
@endif
@if (session()->has('error'))
    <div class="bg-red-200 text-xs text-red-500 border border-indigo-500 py-2 px-2">
    {{session()->get('error')}}
     </div>
@endif
