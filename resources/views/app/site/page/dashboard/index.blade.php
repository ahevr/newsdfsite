@extends("app.site.masterpage")
@section("title","Ege Sedef Aydınlatma")
@section("description", "EGE SEDEF AVİZE olarak, 22 yıldır ülkemize hizmet etmenin sevincini yaşamaktayız. Tüm Türkiye'ye ürün gönderen firmamız ülkemizin gururu olmuştur.")
@section("keywords", "avize,sedefavize,aydınlatma,aplik,lambader,salonavizesi")
@section("content")

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            @foreach($slider as $rowSlider)
                <div class="single-hero-items set-bg" data-setbg="{{asset("vendor/upload/slider/".$rowSlider->image)}}">
                     @if($rowSlider->title > 0)
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5">
                                    <span>{{$rowSlider->title}}</span>
                                    <h1 class="text-white">{{$rowSlider->title}}</h1>
                                    <p class="text-white font-bold">{{$rowSlider->desc}}</p>
                                    <a href="{{$rowSlider->buton_url}}" class="primary-btn">{{$rowSlider->buton_name}}</a>
                                </div>
                            </div>
                        </div>
                    @else
                
                    @endif
                </div>
            @endforeach
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- KATEGORİLER Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <h1 class="container mx-auto text-center text-xl font-bold mb-5 uppercase tracking-tighter">kategoriler</h1>
            <div class="kategori">
                <div class="row">   
                    @foreach($kategoriler as $rowKategoriler)
                        <div class="col-md-2 col-6">
                            <div class="single-banner" style="display: flex; flex: 1" >
                                <img src="{{asset("vendor/upload/kategoriler/".$rowKategoriler->image)}}" alt="">
                                <div class="inner-text">
                                    <a href="{{route("site.kategori",$rowKategoriler->url)}}"><h4>{{$rowKategoriler->name}}</h4></a> 
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- KATEGORİLER End -->





    <!-- KATALOGLAR Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <h1 class="container mx-auto text-center text-xl font-bold mb-5 uppercase tracking-tighter">Kataloglar</h1>
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
    <!-- KATALOGLAR End -->
    
     <!-- Man Banner Section Begin -->
     <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Popüler Ürünler</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach ($randomProductGet as $rowRandomProductGet)
                        <div class="product-item">
                            <div class="pi-pic">
                                <a href="{{route("site.productDetail",$rowRandomProductGet->url)}}">
                                    <img class="rounded-xxxl group-hover:scale-105  group-hover:opacity-60 duration-500 lg:h-512 object-cover" src="{{asset("vendor/upload/product/".$rowRandomProductGet->image)}}" alt="">
                                </a>
                                <div class="sale">{{$rowRandomProductGet->category->name}}</div>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Ege Sedef Aydınlatma</div>
                                <a href="{{route("site.productDetail",$rowRandomProductGet->url)}}">
                                    <h5>{{$rowRandomProductGet->name}}</h5>
                                </a>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="{{asset("vendor/upload/logo")}}/av.jpg">
                        {{-- <img src="{{asset("vendor/upload/logo")}}/egesedeflogo.png" width="80" alt=""> --}}
                        <h2>Avize</h2>
                        <a href="{{route("site.product.index")}}">Daha Fazlası</a>
                    </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Man Banner Section End -->

@endsection










