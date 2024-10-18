@extends('front.master')
@section('content')
    <div class="container">
        <div class="row">
            <!-- الفورم على اليمين -->
            <div class="col-lg-5 order-lg-2 mt-5">
                <form action="">
                    <h5 class="mb-5 mt-5">Payment</h5>
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="formNameOnCard" class="form-control" />
                                <label class="form-label" for="formNameOnCard">Name on card</label>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="formCardNumber" class="form-control" />
                                <label class="form-label" for="formCardNumber">Credit card number</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-3">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="formExpiration" class="form-control" />
                                <label class="form-label" for="formExpiration">Expiration</label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="formCVV" class="form-control" />
                                <label class="form-label" for="formCVV">CVV</label>
                            </div>
                        </div>
                    </div>

                    {{-- <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">
                    Continue to checkout
                </button> --}}
                
                    @if (Auth::check())
                    <a onclick="return confirm('Are you want to book this trip ?')"
                    href="{{ route('front.reservation.store', ['id' => $destination->id]) }}"
                    class="btn btn-danger btn-lg mt-3" 
                    style="width: 300px;" 
                    type="submit">
                    Book Trip
                 </a>
                 
                    @endif

                    @if (!Auth::check())
                        <div class="alert alert-warning mt-2">
                            You must be logged in to book your trip
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success mt-2">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('status'))
                        <div class="alert alert-success mt-2">
                            {{ session('status') }}
                        </div>
                    @endif

                </form>
            </div>

            <!-- السكشن على اليسار -->
            <div class="col-lg-7 order-lg-1">
                <section class="w3l-grids-6 py-5">
                    <div class="grids py-lg-5 py-md-4">
                        <div class="col-lg-12 subject-card mt-lg-0 mt-4">
                            <div class="subject-card-header p-4">
                                <div class="card_title p-lg-4d-block">
                                    <div class="row align-items-center">
                                        <div class="col-sm-5 subject-img">
                                            <img src="{{ asset("storage/destination/$destination->image") }}"
                                                class="img-fluid" alt="">
                                        </div>
                                        <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                                            <!-- Label and Name -->
                                            <label for="destination-name" class="form-label">Name</label>
                                            <h4 id="destination-name">{{ $destination->name }}</h4>

                                            <!-- Label and Date -->
                                            <label for="destination-date" class="form-label">Date</label>
                                            <h4 id="destination-date">{{ $destination->date }}</h4>

                                            <label for="destination-price" class="form-label">Price</label>
                                            <h4 id="destination-price">{{ $destination->price }} $</h4>

                                            {{-- @if (Auth::check())
                                            <a onclick="return confirm('Are you want to book this trip ?')"
                                                href="{{ route('front.reservation.store', ['id' => $destination->id]) }}"
                                                class="btn btn-danger btn-lg mt-3" type="submit">
                                                Book Trip
                                            </a>
                                        @endif

                                        @if (!Auth::check())
                                            <div class="alert alert-warning mt-2">
                                                You must be logged in to book your trip
                                            </div>
                                        @endif

                                        @if (session('success'))
                                            <div class="alert alert-success mt-2">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        @if (session('status'))
                                            <div class="alert alert-success mt-2">
                                                {{ session('status') }}
                                            </div>
                                        @endif --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
