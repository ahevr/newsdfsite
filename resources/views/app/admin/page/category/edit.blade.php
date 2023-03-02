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
                        <li class="breadcrumb-item"><a href="{{route("admin.category.index")}}">Kategoriler</a></li>
                        <li class="breadcrumb-item disabled">{{$category->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection
@section("content")
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{$category->name}} | Adlı Kategoriyi Düzenliyorsunuz</h4>
        </div>
        <div class="card-body">
            <form action="{{route("admin.category.update",$category)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-upload">
                                <label for="roundText">Görsel:</label>
                                <hr>
                                <img src="{{asset("vendor/upload/kategoriler/".$category->image)}}" width="250px" alt="">
                                <hr>
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <button id="submit" type="submit" class="btn btn-primary">Güncelle</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection