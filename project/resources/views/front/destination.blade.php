@extends('front.master')
@section('title', 'destination')
@section('destination-active', 'active')
@include('front.partials.hero', ['title' => 'Destination'])
@section('content')


    <!--  Work gallery section -->
    <section class="w3l-grids-3 py-5">
        <div class="grids py-lg-5 py-md-4">
            <div class="container">
                <h3 class="hny-title mb-5">Destinations</h3>
                <div class="row">
                    @if (count($alldestinations) > 0)

                        @foreach ($alldestinations as $destination)
                            <div class="col-lg-6 subject-card mt-lg-4 mt-4">
                                <div class="subject-card-header p-4">
                                    <a href="{{ route('front.single.destination' , ['id' => $destination->id ]) }}"
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
                <br>
                <div>
                    {{ $alldestinations->render('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>
    <!--  //Work gallery section -->

@endsection
