@extends("app.site.masterpage")
@section("title","Ege Sedef Aydınlatma Hakkımızda")
@section("description", "EGE SEDEF AVİZE olarak, 22 yıldır ülkemize hizmet etmenin sevincini yaşamaktayız. Tüm Türkiye'ye ürün gönderen firmamız ülkemizin gururu olmuştur.")
@section("keywords", "avize,sedefavize,aydınlatma,aplik,lambader,salonavizesi")
@section("content")

<div class="lg:flex justify-center items-center lg:gap-10 p-3 lg:p-0 lg:my-10">
    <div class="image">
        <img src="{{asset("vendor/upload/logo/02-depo.jpg")}}" width="500" alt="">
    </div>
    <div class="content lg:w-1/3">
        <h2 class="text-2xl lg:text-4xl text-bold uppercase mt-5 lg:mt-0">{{__('messages.about_us')}}</h2>
        <p class="mt-3">
            <h3 class="lg:text-2xl text-bold uppercase">
                {{__('messages.who_are_we')}}
            </h3>
            <p class="mt-3 lg:mt-3">
                {{__('messages.about_us_text')}}
            </p>
        </p>
        <div class="flex gap-5 items-center justify-center lg:justify-end mt-10">
            <p class="font-bold uppercase">{{__('messages.social_media')}}</p>
            <i class="fa-brands fa-youtube text-black hover:text-green-500 duration-200"></i>
            <i class="fa-brands fa-instagram text-black hover:text-green-500 duration-200"></i>
            <i class="fa-brands fa-facebook text-black hover:text-green-500 duration-200"></i>
            <i class="fa-brands fa-linkedin text-black hover:text-green-500 duration-200"></i>
        </div>
    </div>
</div>  






@endsection