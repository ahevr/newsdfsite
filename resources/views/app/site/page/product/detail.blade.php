@extends("app.site.masterpage")
@section('title',e(strip_tags(trim($productDetail->name))." | Ege Sedef Aydınlatma" ) )
@section("metaImage",$productDetail->image)
@section("metaTitle",$productDetail->name."| Ege Sedef Aydınlatma")
@section("metaDescription",$productDetail->name."| Ürünü Hakkında Detaylı Bilgi")

@section("content")
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="{{route("site.index")}}"><i class="fa fa-home"></i> Ana Sayfa</a>
                        <a href="{{route("site.product.index")}}">Ürünler</a>
                        <span>{{$productDetail->name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-1 sm: mr-4">
                    <div class="row mt-10">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img"  src="{{asset("vendor/upload/product/".$productDetail->image)}}" alt="">
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">

                                {{-- @foreach ($productDetail as  $rowProductImageDetail)
                                  {{ $rowProductImageDetail}}
                                @endforeach --}}

                                <div class="pt active" data-imgbigurl="{{asset("vendor/upload/product/".$productDetail->image)}}">
                                    <img src="{{asset("vendor/upload/product/".$productDetail->image)}}" alt="">
                                </div>

                                    @foreach ($productDetail->products_image as  $rowProductImageDetail)
                                        @if(is_null($rowProductImageDetail))
                                            <img class="product-big-img" src="{{asset("vendor/upload/product/".$productDetail->image)}}" alt="">
                                        @else
                                        <div class="pt active" data-imgbigurl="{{asset("vendor/upload/product/".$rowProductImageDetail->imager)}}">
                                            <img src="{{asset("vendor/upload/product/".$rowProductImageDetail->imager)}}" alt="">
                                        </div>
                                        @endif
                                    @endforeach
                                    {{-- @foreach ($productImageDetail as  $rowProductImageDetail)
                                        @if(is_null($rowProductImageDetail))
                                            <img class="product-big-img" src="{{asset("vendor/upload/product/".$productDetail->image)}}" alt="">
                                        @else
                                            <div class="pt active" data-imgbigurl="{{asset("vendor/upload/product/".$rowProductImageDetail->imager)}}">
                                                <img src="{{asset("vendor/upload/product/".$rowProductImageDetail->imager)}}" alt="">
                                            </div>
                                        @endif
                                    @endforeach --}}
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span>Ege Sedef Aydınlatma</span>
                                    <h3 class="text-2xl" id="productName">{{$productDetail->name}}</h3>
                                    <input class="hidden" type="text" value="{{route("site.productDetail",$productDetail->url)}}" id="copyLink">
                                    <button onclick="copyLink()"class="text-black flex mt-3 lg:mt-0 lg:absolute top-0 right-0 text-2xl hover:text-green-600">
                                        <i class="fa-regular fa-share-from-square"></i> 
                                    </button>
                                </div>
                                <div class="pd-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>(5)</span>
                                </div>
                                <div class="pd-desc">
                                    <p>Ampul gönderimi yapılmamaktadır, Sıfır kapalı kutu üründür, Ürünler demonte gönderilmektedir.</p>
                                    <h4><span></span></h4>
                                </div>
                                
                                
                                
                                <div class="pd-title flex flex-col">
                                    <span>Kategori:
                                        <a class="text-black hover:text-green-400" href="{{route("site.kategori",$productDetail->category->url)}}">
                                            {{$productDetail->category->name}}
                                        </a>
                                    </span>
                                    <span>Sku: {{$productDetail->kod}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab">
                        <div class="tab-item">
                            <ul class="nav" style="justify-content: flex-start;" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#tab-1" role="tab">Açıklama</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="product-content">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h5>Ürün Hakkında</h5>
                                                <p>Ampul gönderimi yapılmamaktadır, Sıfır kapalı kutu üründür, Ürünler demonte gönderilmektedir.
                                                    Sitemiz sadece tanıtım amaçlıdır. <br> Perakende satış online olarak yapılmamaktadır.
                                                    Ürünlerimizin stok bilgilerini b2b sistemimiz üzerinden görebilirsiniz.
                                                </p>
                                            </div>
                                            <div class="col-lg-5">
                                                <img src="img/product-single/tab-desc.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
@endsection