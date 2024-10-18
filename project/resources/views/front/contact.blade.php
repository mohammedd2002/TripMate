@extends('front.master')
@section('title', 'contact')
@section('contact-active', 'active')
@include('front.partials.hero', ['title' => 'Contact'])

@section('content')

    <!-- contact-form -->
    <section class="w3l-contact" id="contact">
        <div class="contact-infubd py-5">
            <div class="container py-lg-3">
                <div class="contact-grids row">
                    <div class="col-lg-6 contact-left">
                        <div class="partners">
                            <div class="cont-details">
                                <h5>Get in touch</h5>
                                <p class="mt-3 mb-4">Hi there, We are available 24/7 by fax, e-mail or by phone. Drop us line
                                    so we can talk
                                    futher about that.</p>
                            </div>
                            <div class="hours">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-5 contact-right">
                        <form action="{{route('front.contact.store')}}" method="post" class="signin-form">
                          @csrf
                            <div class="input-grids">
                                <div class="form-group">
                                    <input type="text" name="name" id="w3lName" placeholder="Your Name*"
                                        class="contact-input" value="{{old('name')}}" />
                                      <x-validation-error name="name"></x-validation-error>
                                </div>
                              
                                <div class="form-group">
                                    <input type="email" name="email" id="w3lSender" placeholder="Your Email*"
                                        class="contact-input" value="{{old('email')}}" />
                                      <x-validation-error name="email"></x-validation-error>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" id="w3lSubect" placeholder="Subject*"
                                        class="contact-input" value="{{old('subject')}}" />
                                      <x-validation-error name="subject"></x-validation-error>

                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="w3lMessage" value="{{old('message')}}" placeholder="Type your message here*"></textarea>
                                <x-validation-error name="message"></x-validation-error>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-style btn-primary">Send Message</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
    </section>
    <!-- /contact-form -->


@endsection
