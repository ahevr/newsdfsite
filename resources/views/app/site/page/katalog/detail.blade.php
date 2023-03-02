@extends("app.site.masterpage")
@section('title',  e(strip_tags(trim($katalogDetail->name))) )
@section("description", "Ege Sedef Avize"." ".e(strip_tags(trim($katalogDetail->name))))
@section("content")
<div class="my-5 text-center bg-gray-500 md:bg-orange-600">
     <p class="text-2xl md:text-sm text-black md:text-white uppercase">
        <iframe style="width:100%;height: 800px" src=" {{$katalogDetail->link}}" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true"></iframe>
     </p> 
</div>
@endsection