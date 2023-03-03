@extends("app.site.masterpage") @section("title","Ege Sedef Aydınlatma
Hakkımızda") @section("description", "EGE SEDEF AVİZE olarak, 22 yıldır ülkemize
hizmet etmenin sevincini yaşamaktayız. Tüm Türkiye'ye ürün gönderen firmamız
ülkemizin gururu olmuştur.") @section("keywords",
"avize,sedefavize,aydınlatma,aplik,lambader,salonavizesi") @section("content")
<section class="contact">
    <div class="contact-top">
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3130.468034614171!2d27.143922315596168!3d38.314991188666816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbdfdeecdc63ab%3A0x2bc1578c688da4d9!2sEge%20Sedef%20Ayd%C4%B1nlatma!5e0!3m2!1str!2str!4v1671626513721!5m2!1str!2str"
                width="100%" height="500" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
    <div class="container my-11 px-6 mx-auto">
        <section class="mb-20 text-gray-800">
            <div class="flex justify-center">
                <div class="text-center lg:max-w-3xl md:max-w-xl">
                    <h2 class="text-3xl font-bold mb-12 px-6 uppercase">{{__('messages.contact')}}</h2>
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="grow-0 shrink-0 basis-auto mb-12 lg:mb-0 w-full lg:w-5/12 px-3 lg:px-6">
                    <form>
                        <label class="form-group mb-6 relative block cursor-pointer">
                            <input required type="text"
                                class="form-control w-full h-14 px-3 py-2 text-base font-normal outline-none border-1 
                                border-gray-200 rounded transition-colors hover:border-green-600 focus:border-green-600 peer pt-2"/>
                                 <span class="absolute top-0 text-sm h-full px-4 flex items-center text-gray-500 transition-all peer-focus:h-7 peer-focus:text-green-700 peer-focus:text-xs peer-valid:h-9 peer-valid:text-green-700 peer-valid:text-sm">
                                    {{__('messages.name')}}</span> 
                        </label>
                        <label class="form-group mb-6 relative block cursor-pointer">
                            <input required type="email"
                                class="form-control w-full h-14 px-3 py-2 text-base font-normal outline-none border-1 
                                border-gray-200 rounded transition-colors hover:border-green-600 focus:border-green-600 peer pt-2"/>
                                 <span class="absolute top-0 text-sm h-full px-4 flex items-center text-gray-500 transition-all peer-focus:h-7 peer-focus:text-green-700 peer-focus:text-xs peer-valid:h-9 peer-valid:text-green-700 peer-valid:text-sm">
                                    {{__('messages.email')}}</span> 
                        </label>
                        <div class="form-group mb-6 relative block cursor-pointer">
                            <textarea
                                class="form-control w-full h-14 px-3 py-2 text-base font-normal outline-none border-1 
                                border-gray-200 rounded transition-colors hover:border-green-600 focus:border-green-600 peer pt-2"
                                rows="3" placeholder="{{__('messages.message')}}"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full px-6 py-2.5 bg-green-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-greene-700 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
                            Gönder
                        </button>
                    </form>
                </div>
                <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
                    <div class="flex flex-wrap">
                        <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                            <div class="flex items-start">
                                <div class="shrink-0">
                                    <div
                                        class="p-4 bg-green-600 rounded-xxxl shadow-md w-12 h-30 flex items-center justify-center">
                                        <i class="fa-solid fa-phone text-white text-xl"></i>
                                    </div>
                                </div>
                                <div class="grow ml-6">
                                    <p class="font-bold mb-1">{{__('messages.customer_service')}}</p>
                                    <p class="text-gray-500 text-sm">
                                        <a href="tel:05555732527">0 555 573 25 27</a> - Siparişler
                                    </p>
                                    <p class="text-gray-500 text-sm">
                                        <a href="tel:02322539503">0(232) 253 95 03</a> - Müşteri
                                        Hizmetleri
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                            <div class="flex items-start">
                                <div class="shrink-0">
                                    <div
                                        class="p-4 bg-green-600 rounded-xxxl shadow-md w-12 h-30 flex items-center justify-center">
                                        <i class="fa-solid fa-building text-white text-xl"></i>
                                    </div>
                                </div>
                                <div class="grow ml-6">
                                    <p class="font-bold mb-1">{{__('messages.working_hours')}}</p>
                                    <p class="text-gray-500 text-sm">
                                        Hafta İçi : 08:30 - 18:45 <br />
                                        Hafta Sonu : 08:30 - 15:00(Showroomm)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                            <div class="flex align-start">
                                <div class="shrink-0">
                                    <div
                                        class="p-4 bg-green-600 rounded-xxxl shadow-md w-12 h-30 flex items-center justify-center">
                                        <i class="fa-solid fa-location-dot text-white text-xl"></i>
                                    </div>
                                </div>
                                <div class="grow ml-6">
                                    <p class="font-bold mb-1">{{__('messages.address')}}</p>
                                    <p class="text-gray-500 text-sm">
                                        Dokuz Eylül MH 695 Sk. No:13 Gaziemir/İzmir
                                    </p>
                                    <a href="https://goo.gl/maps/hp3mJQ7v9UWP8dub6"
                                        class="font-bold hover:text-green-500">Canlı Konum</a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                            <div class="flex align-start">
                                <div class="shrink-0">
                                    <div
                                        class="p-4 bg-green-600 rounded-xxxl shadow-md w-12 h-30 flex items-center justify-center">
                                        <i class="fa-solid fa-envelope text-xl text-white"></i>
                                    </div>
                                </div>
                                <div class="grow ml-6">
                                    <p class="font-bold mb-1">{{__('messages.email')}}</p>
                                    <p class="text-gray-500 text-sm">
                                        <a href="mailto:info@egesedefavize.com">info@egesedefavize.com</a>
                                    </p>
                                    <p class="text-gray-500 text-sm">
                                        <a href="mailto:sedefavize@hotmail.com.tr">sedefavize@hotmail.com.tr</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection