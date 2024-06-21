@extends('site.global')

@section('title','Register')
@section('page')

    <div class="site-wrapper-reveal">
        <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="conact-us-wrap-one mb-30">
                            <h3 class="heading">Login Your Service Account</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="contact-form-wrap">

                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="login-form">


                                    <div class="contact-inner">
                                        <input name="email" type="email" placeholder="Email *">
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="contact-inner">
                                        <input name="password" type="password" placeholder="Password *">
                                        @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="submit-btn mt-20">
                                        <button class="ht-btn ht-btn-md" type="submit">Login</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

