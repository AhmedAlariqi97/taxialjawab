<!-- Header -->
    <header class="header">
                <nav class="nav container flex">
                    <a href="#" class="logo-content flex">
                        <img src="{{ asset('front/images/headerLogo.png')}}" class="logo-img" alt="Taxi" />
                    </a>

                    <div class="menu-content">
                            <ul class="menu-list flex">
                                    <li><a href="#" class="nav-link">الخصوصية وسياسة الاستخدام</a></li>
                                    <li><a href="#" class="nav-link">الأحكام والشروط</a></li>
                                    <li><a href="#" class="nav-link">سياسة العملاء</a></li>
                                    <li><a href="#" class="nav-link">سياسة السائقين</a></li>
                                   
                            </ul>
                            <div class="mobile-language d-flex">
                                <div class="language">
                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        @if (LaravelLocalization::getCurrentLocale() != $localeCode && $localeCode == 'en')
                                        <a hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        English
                                        </a>
                                        @elseif (LaravelLocalization::getCurrentLocale() != $localeCode && $localeCode == 'ar')
                                        <a hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            Arabic
                                        </a>
                                        @endif
                                    @endforeach
                                </div>
                                <!-- <div class="contact-btn">
                                    <a href="" class="">
                                        <span>تواصل معنا</span>
                                    </a>

                                </div> -->
                            </div>

                            <div class="media-icons flex">
                                    <a href="https://www.facebook.com"><i class='bx bxl-facebook'></i></a>
                                    <a href="https://twitter.com/i/flow/login"><i class='bx bxl-twitter' ></i></a>
                                    <a href="https://www.instagram.com/accounts/login"><i class='bx bxl-instagram-alt' ></i></a>
                                    <a href="https://www.youtube.com/login"><i class='bx bxl-youtube'></i></a>
                            </div>

                            <i class='bx bx-x navClose-btn'></i>
                    </div>
                        
                        <div class="contact-content flex">
                            <i class='bx bx-phone phone-icon' ></i>
                            <span class="phone-number">تواصل معنا</span>
                        </div>

                        <i class='bx bx-menu navOpen-btn'></i>
                        <!-- <i class="fa-solid fa-bars navOpen-btn"></i> -->
                </nav>
        
    </header>


    