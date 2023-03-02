@extends("app.admin.masterpage")
@section("title","Ege Sedef Avize Yönetim Paneli | Ürünler")
@section("pageHead")
    <div class="page-heading">
        <h3>Katalog Yönetim Paneli</h3>
    </div>
@endsection
@section("content")
    <div class="col-12 col-md-12">
        <div class="card">
            <div class="flex justify-between mt-5 mx-10">
                <h3 class="text-2xl uppercase">Katalog Listesi</h4>
                    <div class="">
                        <a href="{{route("admin.katalog.create")}}" 
                            class="inline-flex rounded-3 items-center px-3 py-2 text-sm text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                            <i class="fa-solid fa-plus"></i> 
                            Yeni Katalog Ekle
                        </a>
                    </div>
            </div>
            @if($katalog->isEmpty())
                <div class="card text-center">
                    <div class="card-header text-center">
                        <b class="text-red-500 text-xl" >Uyarı</b>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Herhangi Bir Katalog Bulunmamaktadır..</h5>
                    </div>
                </div>
            @else
                <div class="card-content">
                    <div class="card-body">
                        <!-- Table with outer spacing -->
                        <div class="flex flex-wrap gap-6 items-center justify-center">
                            @foreach($katalog as $rowKatalog)
                                <div class="max-w-sm  border-b border-r-amber-700">
                                    <a href="{{route("admin.katalog.galeri",$rowKatalog)}}">
                                        <img class="hover:scale-105 duration-500 w-full h-512 object-cover rounded-xxxl " src="{{asset("vendor/upload/kataloglar/".$rowKatalog->image)}}" alt="" />
                                    </a>
                                    <div class="p-3">
                                        <a href="{{route("admin.katalog.galeri",$rowKatalog)}}">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$rowKatalog->name}}</h5>
                                        </a>
                                        
                                        <button data-url="{{route("admin.katalog.delete",$rowKatalog)}}" 
                                        class="inline-flex rounded-3 items-center px-3 py-2 text-base font-bold  text-white bg-red-700 rounded-lg hover:bg-red-800 silButton">
                                        <i class="fa-solid fa-trash"></i>   
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                           </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
