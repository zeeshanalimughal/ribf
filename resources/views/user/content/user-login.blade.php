@extends('user.layout.user-layout')

@section('content')

<!-- MAIN WRAPPER -->
<div class="body-wrap gry-bg">

    <!-- Header -->

        <section class="auth-profile">
            <div class="profile-inner">
                <div class="row">
                    <div class="col-xxl-6 col-xl-8 col-lg-10 col-md-10 mx-auto">

                        <div class="top-header">

                            <div class="row">

                            <div class="col-md-2 lang"> <a href="#">العربية</a> </div>

                            <div class="col-md-2 lang login"><a href="#">Login/Register</a></div>

                            </div>

                        </div>

                        <div class="form-wrapper">
                            <div class="main-top">
                                <div class="banner">
                                  <a href="#" class="logo"> <img src="{{asset('images/logo.svg')}}" class="text-right"></a>
                                </div>
                            </div>
                            <div class="mb-4">
                                @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    <strong>{{ session()->get("error")
                                    }}{{session()->forget('error')}}</strong>
                                </div>
                                @endif
                                    <form class="form-default" accept="{{ url('/') }}" method="post">
                                        @csrf


                                        <div class="row">

                                            <div class="col-xxl-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <div class="input-group input-group--style-1">
                                                        <input value="{{old('email')}}" name="email" type="email" class="form-control" value="" placeholder="Enter your Email" id="email" >
                                                    </div>
                                                    <span class="text-danger small">
                                                        @error('email')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group input-group--style-1">
                                                        <input type="password" class="form-control" value="" placeholder="Enter Password" name="password" id="password" value="{{ old('password') }}" >
                                                    </div>
                                                    <span class="text-danger small">
                                                        @error('password')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>

                                              {{-- <div class="form-group ">
                                                  <button class="btn btn-styled btn-base-1 w-100 btn-md">Add Book</button>
                                              </div> --}}

                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-12">
                                                 <button class="btn btn-styled btn-base-1 w-100 btn-md">Login</button>
                                            </div>


                                        </div>

                                    </form>
                            </div>

                        </div>

                        <div class="first-footer">
                            <div class="row">
                               <div class="col-md-3 col-xs-12 foo-text">
                                <p>King Faisal Road,<br>Al Bujairi, Diriyah 13711.</p>
                               </div>
                               <div class="col-md-3 col-xs-12 foo-text">
                                <p class="">info@moc.gov.sa<br>8001189999</p>
                               </div>
                               <div class="col-md-3 col-xs-12 foo-text">
                                <p class="social-title">Social Networks</p>
                                  <i class="fab fa-facebook-f social fa-2xi"></i>
                                  <i class="fab fa-linkedin-in social fa-2xi"></i>
                                  <i class="fab fa-snapchat-ghost social fa-2xi"></i>
                                  <i class="fab fa-youtube social fa-2xi"></i>
                                  <i class="fab fa-instagram social fa-2xi"></i>
                               </div>
                               <div class="col-md-3 col-xs-12 foo-text footer-logo">
                                <div class="footer-logos">
                                  <img class="foot-logo1" src="{{asset('images/logo-01.png')}}">
                                  <img class="foot-logo2" src="{{asset('images/logo-02.png')}}">
                                </div>
                               </div>
                              </div>
                        </div>
                        <div class="second-footer">
                          <p class="copy-text">Copyright 2021 Riyadh International Book Fair. <br/>All rights reserved</p>
                        </div>

                    </div>

                </div>
            </div>
        </section>

    <!-- FOOTER -->


</div><!-- END: body-wrap -->

@endsection
