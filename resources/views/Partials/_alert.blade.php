@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="bg-pink-700  text-white rounded-sm py-2 px-2">
 {{$error}}
  </div>
@endforeach
@endif

@if (session()->has('massege'))
    <div class="bg-green-700  text-white rounded-sm py-2 px-2">
    {{session()->get('massege')}}
     </div>
@endif
@if (session()->has('error'))
    <div class="bg-pink-700  text-white rounded-sm py-2 px-2">
    {{session()->get('error')}}
     </div>
@endif
