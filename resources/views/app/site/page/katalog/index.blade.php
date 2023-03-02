@extends("app.site.masterpage")
@section("title","Ege Sedef Aydınlatma Kataloglar")
@section("description", "EGE SEDEF AVİZE olarak, 22 yıldır ülkemize hizmet etmenin sevincini yaşamaktayız. Tüm Türkiye'ye ürün gönderen firmamız ülkemizin gururu olmuştur.")
@section("keywords", "avize,sedefavize,aydınlatma,aplik,lambader,salonavizesi")
@section("content")

<div class="banner-section spad">
    <div class="container-fluid">
        <h1 class="container mx-auto text-center text-xl font-bold mb-5 uppercase tracking-tighter">{{__('messages.catalogs')}}</h1>
            <div class="row">   
                @foreach($katalog as $rowKatalog)
                    <div class="col-md-3 col-6">
                        <div class="single-banner">
                            <img src="{{asset("vendor/upload/kataloglar/".$rowKatalog->image)}}" alt="">
                            <div class="inner-text">
                                <a href="{{ route("site.katalog.detay",$rowKatalog->url) }}"><h4>{{$rowKatalog->name}}</h4></a> 
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
</div>

@endsection


{{-- {{route("site.kategori",$rowKategoriler->url)}} --}}