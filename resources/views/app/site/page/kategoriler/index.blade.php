@extends("app.site.masterpage")
@section("title","Ege Sedef Aydınlatma Ürünler")
@section("description", "EGE SEDEF AVİZE olarak, 22 yıldır ülkemize hizmet etmenin sevincini yaşamaktayız. Tüm Türkiye'ye ürün gönderen firmamız ülkemizin gururu olmuştur.")
@section("keywords", "avize,sedefavize,aydınlatma,aplik,lambader,salonavizesi")
@section("content")

<style></style>
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{route("site.index")}}"><i class="fa fa-home"></i> Ana Sayfa</a>
                        <a href="{{route("site.index")}}"><i class="fa fa-box"></i> Ürünler</a>
                        <a href="{{route("site.kategori",$categoriess->url)}}"><i class="fa fa-box"></i> Kategoriler   </a>
                        {{-- <span>Kategoriler</span> > --}}
                        <span> {{$categoriess->name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

      <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <h1 class="container mx-auto text-center text-xl font-bold mb-5 uppercase tracking-tighter"> {{$categoriess->name}}</h1>
                <div class="banner-section spad">
                    <div class="container-fluid">
                        
                        <div class="kategori">
                            <div class="row">   
                                @foreach($categories as $rowKategoriler)
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

                <div class="col-lg-12 order-1 order-lg-2 ">
                    <h1 class="container mx-auto text-center text-xl font-bold mb-5 uppercase tracking-tighter">ürünler</h1>
                    <div class="select-wrap d-md-flex mb-2 flex justify-end">
                        {{-- <div class="select-label">Sırala:</div> --}}
                        <form name="sortProducts" id="sortProducts">
                            <div class="select-wrapper select-wrapper-xxs" id="sorting">
                                <select id="sort" name="sort" class="mb-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="0"><b>Sıralama Seç...</b></option>
                                    <option value="z_to_a"><b>Eskiden Yeniye</b></option>
                                    <option value="a_to_z"><b>Yeniden Eskiye</b></option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            @foreach ($product as $rowProduct)
                                <div class="col-lg-3 col-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="{{asset("vendor/upload/product/".$rowProduct->image)}}" alt="">
                                            {{-- <img src="https://picsum.photos/id/575/1200/1200" alt=""> --}}
                                            <div class="sale pp-sale"> {{$rowProduct->category->name}}</div>
                                            <ul>
                                                <li class="quick-view"><a href="{{route("site.productDetail",$rowProduct->url)}}">+ Quick View</a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">Ege Sedef Aydınlatma</div>
                                            <a href="{{route("site.productDetail",$rowProduct->url)}}">
                                                <h5>{{$rowProduct->name}}</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                           

                        </div>
                    </div>
                    {{-- <div class="d-flex mt-4 mt-md-6 justify-content-center align-items-center"> --}}
                    <div class="flex mt-4 my-6 justify-center items-center">
                        <ul class="pagination mt-0 text-black">
                            @if  (request()->has('sort') && !empty(request()->get("sort")))

                                {{$product->appends(["sort" => request()->get("sort") ])->links()}}
                            @else
                                {{$product->onEachSide(0)->links()}}
                            @endif
                        </ul>
                    </div>

                    



                </div>
                
            </div>
        </div>
    </section>
    



    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{{asset("vendor/tema/site")}}/img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{{asset("vendor/tema/site")}}/img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{{asset("vendor/tema/site")}}/img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{{asset("vendor/tema/site")}}/img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{{asset("vendor/tema/site")}}/img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->
@endsection