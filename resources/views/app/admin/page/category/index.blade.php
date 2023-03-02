@extends("app.admin.masterpage")
@section("title","Kategoriler | B2B Ege Sedef Aydınlatma")
@section("pageHeader")
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Kategori Yönetim Paneli</h3>
                <p class="text-subtitle text-muted">Loottr | Admin Panel</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route("admin.index")}}">Dashboard</a></li>
                        <li class="breadcrumb-item disabled">Kategoriler</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection
@section("content")
    <hr>
        <form action="{{route("admin.category.addCategory")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="content-header">
            <div>
                <h4 class="content-title card-title">Kategori Listesi</h4>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Kategori Adı</label>
                                <input type="text" class="form-control" name="name"  placeholder="Kategori Adı">
                            </div>
                            <div class="form-group">
                                <div class="input-upload">
                                    <label for="roundText">Görsel:</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Kaydet</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 offset-1">
                        <div class="grid grid-cols-3 space-y-4 items-center text-center">
                            @foreach($categories as $rowCategory)
                            <div class="max-w-sm pl-5">
                                    <img class="hover:scale-105 duration-500 w-512 h-full object-cover rounded-xxxl cursor-pointer" src="{{asset("vendor/upload/kategoriler/".$rowCategory->image)}}" alt="" />
                                <div class="p-3">
                                    <a href=".">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $rowCategory->name }}</h5>
                                    </a>
                                    <a href="{{route("admin.category.edit",$rowCategory)}}" 
                                    class="inline-flex rounded-3 items-center px-3 py-2 text-base font-bold  text-white bg-blue-700 rounded-lg hover:bg-blue-800 ">
                                    <i class="fa-solid fa-edit"></i>  
                                    </a>
                                    <a href="{{ route('admin.category.deleteCategory',$rowCategory) }}" 
                                    class="inline-flex rounded-3 items-center px-3 py-2 text-base font-bold  text-white bg-red-700 rounded-lg hover:bg-red-800 ">
                                    <i class="fa-solid fa-trash"></i>  
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
