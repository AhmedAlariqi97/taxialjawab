@extends('layouts.front')

@section('content')

{{--<div class="lang-icon">
@foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    @if (LaravelLocalization::getCurrentLocale() != $localeCode && $localeCode == 'en')
    <a hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
        <button class="button themethree">
            <div class="bloom-container">
                <div class="button-container-main">
                <div class="button-inner">
                    <div class="back"></div>
                    <div class="front">

                         <img src="{{asset('front\images\en.png')}}" class="" width="26">

                    </div>
                </div>
                <div class="button-glass">
                    <div class="back"></div>
                    <div class="front">

                    </div>
                </div>
                </div>
                <div class="bloom bloom1"></div>
                <div class="bloom bloom2"></div>
            </div>
        </button>
        </a>
    @elseif (LaravelLocalization::getCurrentLocale() != $localeCode && $localeCode == 'ar')
    <a hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
    <button class="button themethree">
        <div class="bloom-container">
            <div class="button-container-main">
            <div class="button-inner">
                <div class="back"></div>
                <div class="front">
                   <img src="{{asset('front\images\sa.png')}}" class="" width="26">
                </div>
            </div>
            <div class="button-glass">
                <div class="back"></div>
                <div class="front">

                </div>
            </div>
            </div>
            <div class="bloom bloom1"></div>
            <div class="bloom bloom2"></div>
        </div>
    </button>
    </a>
    @endif
@endforeach

</div>--}}





<!-- start hero section -->
<section class="hero">
    <div class="background">
        <div class="container">
            <div class="">
                <div class="content">
                    <h1>{{ html_entity_decode(strip_tags($content['heroTitle_2'][0]['value'] ?? '')) }}</h1>
                    <h1>{{ html_entity_decode(strip_tags($content['home_heroSection_lork'][0]['value'] ?? '')) }}</h1>
                </div>

                <div class="contact-content">
                    <div class="flex contact">
                        <div class="text">نسعد باستقبال مكالماتكم على الرقم الموحد لخدمة العملاء</div>
                        <div class="phone-number">
                            <span>
                                99999999
                            </span>
                        </div>
                    </div> 
                </div>  
            </div>  
        </div>
    </div>

    <!-- scroll down -->
    <div class="scroll-down"></div>
    
</section>

<!-- end section hero -->

<!-- start about section -->
    <section id="about" class="about">
            <div class="container">
                <div class="row flex-column-reverse">
                    <div class="col-md-12 col-lg-6 about-right">
                        <h3>
                            طريقة موثوقة وآمنة للوصول إلى أي نقطة في المدينة وخارج المدينة
                        </h3>
                        <p>
                            نحن نقدم طريقة سريعة وبأسعار معقولة للعثور على سيارة أجرة متى وأينما كنت في حاجة إليها.
                        </p>
                    </div>
    
                    <div class="col-md-12 col-lg-6 img about-left">
                        <div class="img" data-aos="zoom-out">
                            <img src="{{ asset('front/images/splash.png')}}" class="" alt="" />
                        </div> 

                       
                    </div>  
                    <!-- <span class="about-left-shape"></span> -->
                   
                </div>    
        </div>
        
    </section>
<!-- end about section -->

<!-- start customer app section -->
<section id="customer-app" class="customer-app">
    <div class="container">
        <div class="row flex-column-reverse">
            <div class="col-md-12 col-lg-6 customer-right">
                <h3 class="h3">
                    تطبيق تاكسي الجواب
                </h3>
                <p>
                    قم بتنزيل تطبيق الهاتف المحمول الخاص بنا لجعل تجربة التاكسي الخاصة بك أفضل من أي وقت مضى!
                </p>
                <p>
                    تطبيقنا الجديد لسيارات الأجرة متاح الآن لنظامي التشغيل Android و iOS! بمساعدتها ، يمكنك تخصيص طلب التاكسي التالي بشكل كامل. اختيار نوع السيارة أو أي خدمات إضافية نقدمها.
                </p>
                <div class="btn-CA">
                    <a href="" class="c-play">
                        <img src="{{ asset('front/images/logoGooglePlay.png')}}" class="" alt="" />
                    </a>
                    <a href="" class="c-apple">
                        <img src="{{ asset('front/images/logoAppStore.png')}}" class="" alt="" />
                    </a>

                </div>
            </div>

            <div class="col-md-12 col-lg-6 img customer-left">
                <div class="img">
                    <img src="{{ asset('front/images/aljawab-customer-app.png')}}" class="" alt="" />
                </div> 

               
            </div>  
            <!-- <span class="about-left-shape"></span> -->
           
        </div>    
</div>

</section>
<!-- end customer app section -->

<!-- start driver app section -->
<section id="driver-app" class="driver-app">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 img driver-right">
                <div class="img">
                    <img src="{{ asset('front/images/aljawab-driver-app.png')}}" class="" alt="" />
                </div> 

               
            </div>
            <div class="col-md-12 col-lg-6 driver-left">
                <h3 class="h3">
                    تطبيق كابتن الجواب
                </h3>
                <p>
                    قم بتنزيل تطبيق الهاتف المحمول الخاص بنا لجعل تجربة التاكسي الخاصة بك أفضل من أي وقت مضى!
                </p>
                <p>
                    تطبيقنا الجديد لسيارات الأجرة متاح الآن لنظامي التشغيل Android و iOS! بمساعدتها ، يمكنك تخصيص طلب التاكسي التالي بشكل كامل. اختيار نوع السيارة أو أي خدمات إضافية نقدمها.
                </p>
                <div class="btn-CA">
                    <a href="" class="c-play">
                        <img src="{{ asset('front/images/logoGooglePlay.png')}}" class="" alt="" />
                    </a>
                    <a href="" class="c-apple">
                        <img src="{{ asset('front/images/logoAppStore.png')}}" class="" alt="" />
                    </a>

                </div>
            </div>

             
            <!-- <span class="about-left-shape"></span> -->
           
        </div>    
</div>

</section>
<!-- end driver app section -->


<!-- start how we work section -->
    <section id="weWork" class="weWork">
        <div class="container">
            <div class="row weWorkTitle">
                <h2>كيف نعمل</h2>
            </div>
            <div class="row weWork-box">
                <div class="col-md-12 col-lg-4">
                    <div class="box active">
                        <h3>
                            01
                        </h3>
                       <p>
                        نزل تطبيق الجواب من جوجل بلاي او ابل استور
                       </p>

                    </div>
                    
                </div>

                <div class="col-md-12 col-lg-4">
                    <div class="box2">
                        <h3>
                            02
                        </h3>
                       <p>
                        حدد اقرب كابتن الجواب المتواجد في محيطك
                       </p> 
                    </div>  
                </div>  

                <div class="col-md-12 col-lg-4">
                    <div class="box3">
                        <h3>
                            03
                        </h3>
                       <p>
                        استمتع برحلة امنه وسريعة معنا
                       </p>  
                    </div>
                </div>  
                
               
            </div>    
        </div>
    
    </section>
<!-- end how we work section -->

<!-- start vision and mission section -->
<section id="vision" class="vision">
    <div class="container">
        <div class="row title-section">
            <div class="col-lg-8 col-md-12">
                <h3>الرؤية والرسالة</h3>
            </div>
            <div class="col-lg-4 col-md-12 img">
                <img src="{{ asset('front/images/logoWhite.png')}}" class="" alt="" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6 right">
                <div class="title">
                    <h3>رؤيتنا</h3>
                </div>
                <div class="p">
                    <p>
                        أن نصبح الشركة الرائدة في نقل الركاب، والمساهمة في نجاح وتطوير أنظمة النقل العام وإبراز المعالم السياحية السعودية الفريدة في المملكة العربية السعودية.
                    </p>

                    
                </div>
            </div>
            <div class="col-md-12 col-lg-6 left">
                <div class="title">
                    <h3>رسالتنا</h3>
                </div>
                <div class="p">
                    <p>
                        هو تقديم خدمات عالية الجودة من خلال الابتكار والتميز في عملياتنا التشغيلية مع تحقيق تطلعات جميع الأطراف التي نتعامل معها
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end vision and mission section -->

<!-- start our services section -->
<section id="services" class="services">
    <div class="container">
        <div class="row title-section">
            <div class="col-lg-8 col-md-12">
                <h3>الخدمات</h3>
            </div>
            <div class="col-lg-4 col-md-12 img">
                <img src="{{ asset('front/images/logoWhite.png')}}" class="" alt="" />
            </div>
        </div>
        <div class="row services-box">
            <div class="col-md-12 col-lg-4 service-box">
                <div class="c-shadow">
                    <div class="icon">
                        <img src="{{ asset('front/images/airport.png')}}" class=" img" alt="" />
                    </div>
                    <div class="h3">
                        <h3>
                            داخل المدينة
                        </h3>
                    </div>
                    <div class="p">
                        <p>
                            نحن نضمن توافر سيارات الأجرة بالكامل على أي طريق في المدينة.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 service-box">
                <div class="c-shadow">
                    <div class="icon">
                        <img src="{{ asset('front/images/school.png')}}" class="img" alt="" />
                    </div>
                    <div class="h3">
                        <h3>
                            رحلات خارجية
                        </h3>
                    </div>
                    <div class="p">
                        <p>
                            عند السفر إلى الخارج ، يمكنك أيضًا الاستفادة من استخدام سيارة الأجرة الخاصة بنا.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 service-box">
                <div class="c-shadow">
                    <div class="icon">
                        <img src="{{ asset('front/images/car.png')}}" class="img" alt="" />
                    </div>
                    <div class="h3">
                        <h3>
                            رحلات اقتصادية
                        </h3>
                    </div>
                    <div class="p">
                        <p>
                            نقدم افضل الخدمات لنقل الرحلات الاقتصادية بأسعار ممتازة لا تقبل المنافسة
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 service-box">
                <div class="c-shadow">
                    <div class="icon">
                        <img src="{{ asset('front/images/train.png')}}" class="img" alt="" />
                    </div>
                    <div class="h3">
                        <h3>
                            الدعم 24 \ 7
                        </h3>
                    </div>
                    <div class="p">
                        <p>
                            يقدم موظفونا المؤهلون دعمًا احترافيًا على مدار الساعة طوال أيام الأسبوع لجميع العملاء.
                        </p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-12 col-lg-4">
                <div class="icon">
                    <img src="images/bus.png" class="img" alt="" />
                </div>
                <div class="p">
                    <p>
                        توصيل الطلاب والطالبات
                    </p>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="icon">
                    <img src="images/school.png" class="img" alt="" />
                </div>
                <div class="p">
                    <p>
                        برامج خاصة تحدد مساراتها حسب رغبة العملاء
                    </p>
                </div>
            </div> -->
        </div>
    </div>
</section>

<!-- end our services section -->

<!-- start our teams section -->
<section id="teams" class="teams">
    <div class="container">
        <div class="row title-section">
            <div class="col-lg-8 col-md-12">
                <h3>اسطولنا وفريقنا</h3>
            </div>
            <div class="col-lg-4 col-md-12 img">
                <img src="{{ asset('front/images/logoWhite.png')}}" class="" alt="" />
            </div>
        </div>
    </div>
</section>
<section class="teams-img">
    <div class="row">
        <div class="col-12">
           
           
        </div>
       
    </div>
    
</section>
<!-- <div class="container teams-p">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <p>يتم تدريب فريقنا المتخصص من المحترفين لتقديم أعلى مستوى من الخدمة. بدءًا من سائقينا ذوي الخبرة وحتى دعم العملاء الودودين لدينا، فإننا نبذل قصارى جهدنا لضمان أن تكون رحلتك آمنة ومريحة وخالية من المتاعب
                لدينا سائقين ذوي مهارة وكفاءة عالية للتعامل مع الزوار والعملاء من مختلف دول العالم لنقكم براحة تامة</p>
        </div>
        <div class="col-lg-6 col-md-12">
            <p>لدى السلام السريع أسطول من المركبات بموديلات حديثة متوافقة بالقواعد والشروط المنصوص عليها بنظام المرور ولائحة التنفيذية والمواصفات القياسية الخاصة بالسيارات المعتمدة من قبل الهيئة السعودية للمواصفات والمقاييس والجودة وهيئة النقل العام</p>
        </div>
    </div>
</div> -->
<section class="gallery">
    <div class="container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/gallery1.jpeg" class="" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/gallery2.jpeg" class="" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/gallery3.jpeg" class="" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/gallery4.jpeg" class="" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/gallery5.jpeg" class="" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/gallery6.jpeg" class="" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/gallery7.jpeg" class="" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/gallery8.jpeg" class="" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/gallery9.jpeg" class="" alt="" />
                </div>
                
    
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
        </div>
    </div>
</section>

<!-- end our teams section -->


<!-- start contact us section -->
<section class="contact-us">
    <div class="container">
        <div class="row title-section">
            <div class="col-lg-8 col-md-12">
                <h3>تواصل معنا</h3>
            </div>
            <div class="col-lg-4 col-md-12 img">
                <img src="{{ asset('front/images/logoWhite.png')}}" class="" alt="" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6 content">
                <h3>تواصل معنا</h3>
                <p>للاستفسارات والشكاوي وللانضمام الى فريقنا الرجاء تعبئة وارسال النموذج الموضح</p>

            </div>
            <div class="col-md-12 col-lg-6 form"> 
                    <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="styled-input wide">
                                    <input type="text" required />
                                    <label>الاسم الاول</label> 
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="styled-input wide">
                                    <input type="text" required />
                                    <label>الاسم الاخير</label> 
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="styled-input" style="float:right;">
                                    <input type="text" required />
                                    <label>Phone Number</label> 
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="styled-input wide">
                                    <textarea required></textarea>
                                    <label>Message</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="btn-lrg submit-btn">ارسال</div>
                            </div>
                    </div>
               

            </div>

        </div>
    </div>
</section>

<!-- end contact us section -->










 <!-- Modal -->
 



@endsection
