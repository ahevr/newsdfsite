@extends("app.admin.masterpage")
@section("title","Ege Sedef Avize Yönetim Paneli | Ürünler")
@section("pageHead")
    <div class="page-heading">
        <h3>Ürün Yönetim Paneli</h3>
    </div>
@endsection
@section("content")
    <div class="col-12 col-md-12">
        <div class="card">
            <div class="flex justify-between mt-5 mx-10">
                <h3 class="text-2xl uppercase">Ürünler Listesi</h4>
                    <div class="">
                        <a href="{{route("admin.product.create")}}" 
                            class="inline-flex rounded-3 items-center px-3 py-2 text-sm text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                            <i class="fa-solid fa-plus"></i> 
                            Yeni Ürün Ekle
                        </a>
                    </div>
            </div>
            <div class="col-12 px-10 mt-10">
                <form action="{{route("admin.product.searchProduct")}}" class="card card-sm">
                    <div class="card-title" style="float:right">
                        <div class="form-group position-relative has-icon-left">
                            <input type="text" class="form-control" name="search" placeholder="Ürün Adı veya Stok Kodu Ara...">
                            <div class="form-control-icon">
                                <i class="bi bi-search"></i>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            @if(empty($product))
                <div class="card text-center">
                    <div class="card-header text-center">
                        <b class="text-red-500 text-xl" >Uyarı</b>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Herhangi Bir Ürün Bulunmamaktadır....</h5>
                    </div>
                </div>
            @else
            <div class="card-content">
                <div class="card-body">
{{-- **********************************************************! burası excel ile ürün ekleme kısmı --}}

                   {{-- <div class="my-5 p-5 text-center border border-opacity-20">
                        <h2 class="">
                            Excel İle Ürün Yükleme
                        </h2>
                       <form action="{{ route('admin.product.file-import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                                <div class="custom-file text-left">
                                    <input type="file" name="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <button class="btn btn-primary">Import data</button>
                            <a class="btn btn-success" href="{{ route('admin.product.file-export') }}">Export data</a>
                        </form>
                    </div>  --}}

                    

{{-- **********************************************************! ##burası excel ile ürün ekleme kısmı --}}
                   <div class="flex flex-wrap gap-6 items-center justify-center">
                    @foreach($product as $rowProduct)
                        <div class="max-w-sm  border-b border-r-amber-700">
                            <a href="{{route("admin.product.edit",$rowProduct)}}" class="relative group">
                                <img class="hover:scale-105 duration-500 w-full h-512 object-cover rounded-xxxl group-hover:opacity-20"
                                    src="{{asset("vendor/upload/product/".$rowProduct->image)}}" alt="" />
                                <span class="hidden group-hover:inline-block group-hover:absolute top-3  left-3 text-4xl text-white"><i class="fa-solid fa-edit"></i></span>
                            </a>
                            <div class="p-3">
                                <a href="{{route("admin.product.edit",$rowProduct)}}">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$rowProduct->name}}</h5>
                                </a>
                                <div class="flex space-x-16">
                                    <p class="mb-3 font-normal text-gray-600">Kategori: {{$rowProduct->category->name}}</p>
                                    <p class="mb-3 font-normal text-gray-600">Stok Kodu: {{$rowProduct->kod}}</p>
                                </div>
                                <a href="{{route("admin.product.galeri",$rowProduct)}}" 
                                class="inline-flex rounded-3 items-center px-3 py-2 text-base font-bold  text-white bg-orange-600 rounded-lg hover:bg-orange-600 ">
                                <i class="fa-solid fa-images"></i>  
                                </a>
                                <button data-url="{{route("admin.product.delete",$rowProduct)}}" 
                                class="inline-flex rounded-3 items-center px-3 py-2 text-base font-bold  text-white bg-red-700 rounded-lg hover:bg-red-800 silButton">
                                <i class="fa-solid fa-trash"></i>   
                                </button>
                            </div>
                        </div>
                    @endforeach
                   </div>
                   
                   <div class="card-body">
                    <nav aria-label="Page navigation example flex items-center space-x-1">
                        <ul class="pagination flex justify-content-end px-4 py-2 rounded-full">
                            {{$product->onEachSide(0)->links()}}
                        </ul>
                    </nav>
                </div>
  
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection
