<header class="header-section">

    <div class="bg-green-700">
        <div
            class="container mx-auto h-10 text-sm font-bold text-white text-center hidden md:flex items-center justify-between">
            <div class="mailinfo">
                <i class=" fa fa-envelope"></i>
                info@egesedefavize.com
            </div>
            <div>
                Ege Sedef Aydınlatma 2023 Yılında Sizlerle Birlikte Gelişmeye Devam
                Ediyor
            </div>
            <div class="socialmedia">
                <a href="https://www.facebook.com/sedefavize35"><i class="fab fa-facebook"></i></a>
                <a href="https://www.youtube.com/channel/UCwBNhIZ3ChV84ZtqG-dGQaA"><i class="fab fa-youtube"></i></a>
                <a href="https://www.instagram.com/egesedefavize/"><i class="fab fa-instagram"></i></a>
            </div>

            <div>
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="text-white bg-green-700 hover:bg-green-800  font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
                    type="button">{{ Config::get('languages')[App::getLocale()] }} <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdown"
                    class="z-10 hidden bg-gray-600 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                        <li>
                            <a href="{{ route('site.lang.switch', $lang) }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$language}}</a>
                        </li>
                        @endif
                        @endforeach

                    </ul>
                </div>
            </div>

            {{-- <h3>{{__('messages.welcome')}}</h3> --}}
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row items-center">
                <div class="col-lg-6 col-md-3 ">
                    <div class="logo">
                        <a href="{{ route('site.index') }}">
                            {{-- TODO Logo --}}
                            <img src="{{ asset('vendor/upload/logo') }}/egesedeflogo.png" width="80" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-3">
                    <div class="advanced-search">
                        <div class="input-group">
                            <input type="text" id="search" name="term" placeholder="Ürün Ara...">
                            <button type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="nav-item">
        <div class="container">
            <nav class="nav-menu mobile-menu">
                <ul class="text-center">
                    <li class=" tracking-tighter {{ request()->is('/') ? 'active' : '' }} ">
                        <a href="{{ route('site.index') }}">{{__('messages.home')}}</a>
                    </li>
                    <li class="tracking-tighter {{ request()->is('product') ? 'active' : '' }} ">
                        <a href="{{ route('site.product.index') }}">{{__('messages.product')}}</a>
                    </li>
                    <li class="tracking-tighter {{ request()->is('about-us') ? 'active' : '' }} ">
                        <a href="{{ route('site.aboutus.index') }}">{{__('messages.about_us')}}</a>
                    </li>
                    <li class="tracking-tighter {{ request()->is('kataloglar') ? 'active' : '' }} ">
                        <a href="{{ route('site.kataloglar.index') }}">{{__('messages.catalogs')}}</a>
                    </li>
                    <li class="tracking-tighter {{ request()->is('contact') ? 'active' : '' }} ">
                        <a href="{{ route('site.contact.index') }}">{{__('messages.contact')}}</a>
                    </li>
                    <li class="tracking-tighter">
                        <a href="{{ route('site.index') }}">{{__('messages.pay')}}</a>
                    </li>
                    <li class="tracking-tighter">
                        <a href="{{ route('site.index') }}">{{__('messages.b2b')}}</a>
                    </li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
