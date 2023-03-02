@extends("app.admin.masterpage")
@section("title","Ege Sedef Avize Yönetim Paneli | Slider Ekle")
@section("pageHead")
    <div class="page-heading">
        <h3>Slider Yönetim Paneli</h3>
    </div>
@endsection
@section("content")
    <section class="section">
        <div class="row">
            <form action="{{route("admin.slider.store")}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4>Slider Bilgileri</h4>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-4">
                                    <label for="title" class="form-label">Slider Adı</label>
                                    <input type="text" class="form-control" name="title" placeholder="Slider Adı Giriniz"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-4">
                                    <label for="title" class="form-label">Slider Açıklaması</label>
                                    <input type="text" class="form-control" name="desc" placeholder="Slider Adı Giriniz"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-upload">
                                    <img src="{{asset("app/admin")}}/imgs/upload.svg" width="100px"/>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="switch switch-icon">
                                        <label> Buton Kullanımı
                                            <input type="checkbox" name="buton" class="button_usage_btn">
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>

                            <div class="button-inf-container">
                                <div class="form-group">
                                    <label for="productName">Buton Başlık</label>
                                    <input type="text" class="form-control" name="buton_name" placeholder="Buttonun Adı">
                                </div>

                                <div class="form-group">
                                    <label for="productName">Buton URL</label>
                                    <input type="text" class="form-control" name="buton_url" placeholder="URL bilgisi">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mb-5">
                        <button id="submit" type="submit" class="btn btn-primary">Kayıt Ol</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection



