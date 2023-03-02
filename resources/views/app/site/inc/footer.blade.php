<div class="container">
    <div class="text-sm lg:text-base flex flex-row flex-wrap lg:flex-nowrap lg:flex-row justify-between space-x-8">
        <div class="flex gap-4 flex-col mb-10 lg:mb-0 lg:flex-1">
            <a class="flex justify-center lg:justify-start" href="{{ route('site.index') }}">
                <img src="{{ asset('vendor/upload/logo') }}/egesedeflogo.png"
                    style="width: 100px" alt="sedef-avize-logo" />
            </a>
            <p class="text-sm lg:text-base text-black"> Ege Sedef Aydınlatma olarak, {{ date('Y') - 2000 }} yıldır
                ülkemize hizmet etmenin sevincini yaşamaktayız.
                Tüm Türkiye'ye ürün gönderen firmamız, ülkemizin gururu olmuştur.
            </p>
        </div>
        <div class="text-black">
            <h4 class="font-extrabold">{{ __('messages.quick_menu') }}</h4>
            <ul class="menu-list-item text-black">
                <li>
                    <a class="hover:text-green-500"
                        href="{{ route('site.product.index') }}">{{ __('messages.product') }}</a>
                </li>
                <li>
                    <a class="hover:text-green-500"
                        href="{{ route('site.aboutus.index') }}">{{ __('messages.about_us') }}</a>
                </li>
                <li>
                    <a class="hover:text-green-500"
                        href="{{ route('site.kataloglar.index') }}">{{ __('messages.catalogs') }}</a>
                </li>
                <li>
                    <a class="hover:text-green-500"
                        href="https://tahsilat.egesedefavize.coms">{{ __('messages.pay') }}</a>
                </li>
                <li>
                    <a class="hover:text-green-500" href="https://b2b.egesedefavize.com">{{ __('messages.b2b') }}</a>
                </li>
            </ul>
        </div>
        <div class="text-black">
            <h4 class="font-extrabold">{{ __('messages.catalogs') }}</h4>
            <ul class="menu-list">
                @foreach ($katalog as $rowKatalogMenu)
                    <li>
                        <a class="hover:text-green-500"
                            href="{{ route('site.katalog.detay', $rowKatalogMenu->url) }}">{{ $rowKatalogMenu->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="mt-10 text-sm lg:text-base lg:mt-0">
            <h4 class="font-extrabold">{{ __('messages.contact') }}</h4>
            <ul class="menu-list">
                <li>
                    <b>{{ __('messages.address') }}</b> : <br> Dokuz Eylül Mh. 695 Sk. No: 13 Posta Kodu: 35410 -
                    Gaziemir‎ / İZMİR - TÜRKİYE
                </li>
                <li>
                    <b>{{ __('messages.customer_service') }}</b> : 0(232) 253 95 03
                </li>
                <li>
                    <b>{{ __('messages.accounting_orders') }}</b> : 0 555 573 25 27
                </li>
                <li>
                    <b>{{ __('messages.email') }}</b> : info@egesedefavize.com
                </li>
                <li>
                    <b>{{ __('messages.working_hours') }}</b> : Hafta İçi Her gün 08:30 - 18:45 | <br> Hafta Sonu 08:30
                    - 17:00
                </li>
            </ul>
        </div>
        <div class="mt-10 text-sm lg:text-base lg:mt-0">
            <h4 class="font-extrabold">{{ __('messages.social_media') }}</h4>
            <ul class="flex flex-row gap-2 mt-1">
                <li>
                    <a class="hover:text-green-500" href="#"><i class="fa-brands fa-facebook text-2xl"></i></a>
                </li>
                <li>
                    <a class="hover:text-green-500" href="#"><i class="fa-brands fa-instagram text-2xl"></i></a>
                </li>
                <li>
                    <a class="hover:text-green-500" href="#"><i class="fa-brands fa-youtube text-2xl"></i></a>
                </li>
                <li>
                    <a class="hover:text-green-500" href="#"><i class="fa-brands fa-linkedin text-2xl"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="flex justify-center my-10">
        <div class="text-[10px]">egesedefavize. Tüm Hakları Saklıdır </div>
    </div>
</div>
