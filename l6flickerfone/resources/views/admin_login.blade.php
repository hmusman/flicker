@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	
@endsection<!-- end header -->


@section('content')
	
	
    <div style="margin-top:20px;">

    </div>
        <div class="body-content" style="margin-bottom:30px; ">
            <div class="container" style="margin-top: 14%;">
                <div class="sign-in-page">
                    <div class="row">
                    	<div class="col-md-3 col-sm-3" ></div>
                        <div class="col-md-6 col-sm-6 sign-in" >
                        	<div style="background: #028f63;">
                        		<a href="/">
									<img style="   height: 68px;width: 289px; margin-top: 4px;" src="{{ asset('storage/images/logo-cropped-removebg-preview.png') }}"
									   onClick="location.href='/'" style="top: 0px;left: 0px;" id="logo" />
								</a>
                        	</div>
                            @error('loginError')
                            	<p class="alert alert-warning" style="margin-top: 10px;">{{ $message }}</p>
                            @enderror
                            
                            <form action="{{ route('AdminSession') }}" class="register-form outer-top-xs"  method="post" accept-charset="utf-8">
                            	@csrf
                            <div class="form-group">
                                <label class="info-title" style="margin-top: 10px;"><label for="identity">Username/Email</label> <span>*</span></label>
                                <input type="text" name="login_email" id="username" class="form-control unicase-form-control text-input" value="{{ old('login_email') }}" required placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label class="info-title">Password <span>*</span></label>
                                <input type="password" id="password" name="login_password" class="form-control unicase-form-control text-input" placeholder="Password" value="{{ old('login_password') }}">
                            </div>
                            <button type="submit" class="btn-upper btn subbtn checkout-page-button">Login</button>
                            </form>     
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection<!-- end content -->

@section('footer')
	<script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
	<script src="{{ asset('js/bs.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.steps.js') }} "></script>
	<script type="text/javascript" src="{{ asset('js/jquery.steps.min.js') }} "></script>
	<script type="text/javascript" src="{{ asset('js/Notiser.js') }} "></script>
	<script type="text/javascript" src="{{ asset('js/libs.min.js') }} "></script>
	<script type="text/javascript" src="{{ asset('js/scripts.min.js') }} "></script>
	<script type="text/javascript" src="{{ asset('js/jquery.fixedbg.min.js') }} "></script>
	<script type="text/javascript">
	    </script>
	<!-- <script src="index.html"></script> -->
	<script type="text/javascript" src="{{ asset('js/owl-carousel/owl.carousel.js') }} "></script>
	<script src="{{ asset('js/main.js') }} "></script>
	<script src="{{ asset('js/select2.min.js') }} "></script>
	<script src="{{ asset('js/common.js') }} "></script>
	<script src="{{ asset('js/cloudzoom.js') }} "></script>
	<script src="{{ asset('js/thumbelina.js') }} "></script>
	<script src="{{ asset('js/jquery.amsify.suggestags.js') }} "></script>
	<script type="text/javascript" src="{{ asset('js/slick.min.js') }} "></script>
@endsection<!-- end footer -->