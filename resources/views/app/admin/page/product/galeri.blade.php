@extends("app.admin.masterpage")
@section("title","Ege Sedef Avize Yönetim Paneli | Ürünler")
@section("pageHead")
    <div class="page-heading">
        <h3>Ürün Yönetim Paneli</h3>
    </div>
@endsection
@section("content")
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> {{$galeri->name}} Ürün Galerisi</h4>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body">
            <form action="{{route("admin.product.galeriStore",$galeri)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-upload">
                                <label for="roundText">Görsel:</label>
                                <input type="file" name="imager" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <button id="submit" type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
            </form>
        </div>
        <hr>
        <div class="card-body mt-5">
            <div class="flex flex-col">
                <div>
                    <h3 class="text-center">{{$galeri->name}} Ürün Galerisi</h3>
                </div>
                <div class="flex justify-center">
                    <div class="flex gap-12 my-5 ">
                        @foreach($product as $rowGaleri)
                            <img class="border-4 border-gray-300 rounded-xxxl hover:scale-125 duration-500" src="{{asset("vendor/upload/product/".$rowGaleri->imager)}}" width="200">
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection