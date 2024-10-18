@extends('front.master')
@section('title', 'home')
@section('home-active', 'active')
@section('content')
    <!-- main-slider -->
    <section class="w3l-main-slider" id="home">
        <div class="banner-content">
            <div id="demo-1"
                data-zs-src='["{{ asset('front-assets') }}/images/banner1.jpg", "{{ asset('front-assets') }}/images/banner2.jpg","{{ asset('front-assets') }}/images/banner3.jpg", "{{ asset('front-assets') }}/images/banner4.jpg"]'
                data-zs-overlay="dots">
                <div class="demo-inner-content">
                    <div class="container">
                        <div class="banner-infhny">
                            <h3>You don't need to go far to find what matters.</h3>
                            <h6 class="mb-3">Discover your next adventure</h6>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <form action="{{ route('front.home') }}" method="GET" class="mb-4">
                            <div class="input-group w-75 mx-auto">
                                <input type="text" class="form-control form-control-lg" name="search"
                                    placeholder="Search your dream destination" value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary btn-lg" type="submit">
                                        <i class="fa fa-search"></i> Search
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="container">
                        <div class="row">
                            @if ($destinations->isEmpty())
                                <p>No destinations found matching your search.</p>
                            @else
                                @foreach ($destinations as $destination)
                                    <!-- Your existing code to display each destination -->
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /main-slider -->
    <!-- //banner-slider-->

    <!--/grids-->
    <section class="w3l-grids-3 py-5">
        <div class="container py-md-5">

            <div class="container">
                <div class="title-content text-left mb-lg-5 mb-4">
                    <h6 class="sub-title">Visit</h6>
                    <h3 class="hny-title">Popular Destinations</h3>
                </div>
            </div>


            <div class="row">
                @if (count($destinations) > 0)

                    @foreach ($destinations as $destination)
                        <div class="col-lg-6 subject-card mt-lg-4 mt-4">
                            <div class="subject-card-header p-4">
                                <a href="{{ route('front.single.destination', ['id' => $destination->id]) }}"
                                    class="card_title p-lg-4d-block">
                                    <div class="row align-items-center">
                                        <div class="col-sm-5 subject-img">
                                            <img src="{{ asset("storage/destination/$destination->image") }}"
                                                class="img-fluid" alt="">
                                        </div>
                                        <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                                            <h4>{{ $destination->name }}</h4>
                                            <p>{{ $destination->date }}</p>
                                            <div class="dst-btm">
                                                <h6 class=""> Price </h6>
                                                <span>{{ $destination->price }} $</span>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No destinations available at the moment.</p>
                @endif
            </div>

            {{-- <div class="row bottom-ab-grids"> --}}
            {{-- <div class="col-lg-12">
                    {{ $destinations->render('pagination::bootstrap-5') }}
                </div> --}}
            {{-- </div> --}}
    </section>
    <!--//grids-->


    <!--/w3l-bottom-->
    <section class="w3l-bottom py-5">
        <div class="container py-md-4 py-3 text-center">
            <div class="row my-lg-4 mt-4">
                <div class="col-lg-9 col-md-10 ml-auto">
                    <div class="bottom-info ml-auto">
                        <div class="header-section text-left">
                            <h3 class="hny-title two">Traveling makes a man wiser, but less happy.</h3>
                            <p class="mt-3 pr-lg-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                laudantium
                                voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor
                                sit
                                amet adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-bottom-->
@endsection
