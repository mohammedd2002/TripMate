@extends('front.master')
@section('title', 'about')
@section('about-active', 'active')
@include('front.partials.hero', ['title' => 'About'])

@section('content')


    <!-- /about-6-->
    
    <section class="w3l-cta4 py-5">
        <div class="container py-lg-5">
            <div class="ab-section text-center">
                <h6 class="sub-title">About Us</h6>
                @if ($abouts && count($abouts) > 0)
                    @foreach ($abouts as $about)
                        <h3 class="hny-title">{{ $about->title }}</h3>
                        <p class="py-3 mb-3">{{ $about->description }}</p>
            </div>
            <div class="row mt-5">
                <div class="col-md-9 mx-auto">
                    <img src="{{ asset("storage/about/$about->image") }}" class="img-fluid" alt="">
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </section>
    <!-- //about-6-->
    <!-- /content-6-->

    <!-- //content-6-->


    <!-- team -->
    <section class="w3l-team" id="team">
        <div class="team-block py-5">
            <div class="container py-lg-5">
                <div class="title-content text-center mb-lg-3 mb-4">
                    <h6 class="sub-title">Our team</h6>
                    <h3 class="hny-title">Meet our Guides</h3>
                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @if (count($guides) > 0)
                            @foreach ($guides as $guide)
                                <div class="swiper-slide">
                                    <div class="box16">
                                        <a href="#url"><img src="{{ asset("storage/guide/$guide->image") }}" alt=""
                                                class="img-fluid" /></a>
                                        <div class="box-content">
                                            <h3 class="title"><a href="#url">{{ $guide->name }}</a></h3>
                                            <span class="post">{{ $guide->description }}</span>
                                            <ul class="social">
                                                <li>
                                                    <a href="mailto:{{ $guide->email }}" class="email">
                                                        <span class="fa fa-envelope"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ $guide->linkedin }}" class="linkedin">
                                                        <span class="fa fa-linkedin"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- تفعيل Swiper -->
<script>
 var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable:true, // إلغاء القدرة على النقر على النقاط
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
});

</script>

    <!-- //team -->

@endsection
