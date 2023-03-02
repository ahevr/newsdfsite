@extends("app.admin.masterpage")
@section("title","Ege Sedef Avize Yönetim Paneli | Slider")
@section("pageHead")
    <div class="page-heading">
        <h3>Slider Yönetim Paneli</h3>
    </div>
@endsection
@section("content")


    <div class="col-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title" style="float: right">
                    <a href="{{route("admin.slider.create")}}" class="btn text-bg-primary rounded-full hover:border-gray-300"><i class="fa-solid fa-plus"></i></a>
                </div>
                <h4 class="card-title">Slider Listesi</h4>
            </div>
            @if($slider->isEmpty())
                <div class="card text-center">
                    <div class="card-header text-center">
                        <b class="text-red-500 text-xl" >Uyarı</b>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Herhangi Bir Slider Bulunmamaktadır....</h5>
                    </div>
                </div>
            @else
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Slider Görsel</th>
                                        <th>Slider Başlığı</th>
                                        <th>Slider Açıklaması</th>
                                        <th>Slider Durumu</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($slider as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>
                                                <img src="{{asset("vendor/upload/slider/".$item->image)}}" width="100" alt="{{$item->name}}">
                                            </td>
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->desc}}</td>
                                            <td>
                                                @if($item->isActive == 1)
                                                    <a href="{{route("admin.slider.sliderStatus",$item->id)}}" class="badge rounded-pill alert-success">On</a>
                                                @else
                                                    <a href="{{route("admin.slider.sliderStatus",$item->id)}}" class="badge rounded-pill alert-danger">Off</a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route("admin.slider.delete",$item->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
