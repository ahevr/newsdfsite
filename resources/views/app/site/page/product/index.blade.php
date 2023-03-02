@extends("app.site.masterpage")
@section("title","Ege Sedef Aydınlatma Ürünler")
@section("description", "EGE SEDEF AVİZE olarak, 22 yıldır ülkemize hizmet etmenin sevincini yaşamaktayız. Tüm Türkiye'ye ürün gönderen firmamız ülkemizin gururu olmuştur.")
@section("keywords", "avize,sedefavize,aydınlatma,aplik,lambader,salonavizesi")
@section("content")
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{route("site.index")}}"><i class="fa fa-home"></i> Ana Sayfa</a>
                        <span>Ürünler</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="banner-section spad">
                    <div class="container-fluid">
                        <h1 class="container mx-auto text-center text-xl font-bold mb-5 uppercase tracking-tighter">{{__('messages.categories')}}</h1>
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
                    <h1 class="container mx-auto text-center text-xl font-bold mb-5 uppercase tracking-tighter">{{__('messages.product')}}</h1>
                    <div class="select-wrap d-md-flex mb-2 flex justify-end">
                        {{-- <div class="select-label">Sırala:</div> --}}
                        <form name="sortProducts" id="sortProducts">
                            <div class="select-wrapper select-wrapper-xxs" id="sorting">
                                <select id="sort" name="sort" class="mb-3 px-3 rounded-lg text-gray-900 text-sm">
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
                                    <div class="product-item group">
                                        <div class="pi-pic group">
                                            <a href="{{route("site.productDetail",$rowProduct->url)}}">
                                                <img class="rounded-xxxl group-hover:scale-105  group-hover:opacity-60 duration-500 lg:h-512 object-cover" 
                                                src="{{asset("vendor/upload/product/".$rowProduct->image)}}">
                                                
                                            </a>
                                            {{-- <img src="https://picsum.photos/id/575/1200/1200" alt=""> --}}
                                            <div class="sale pp-sale"> {{$rowProduct->category->name}}</div>
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
    
@endsection