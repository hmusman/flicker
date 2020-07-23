@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->


@section('content')
	
	<div class="main-top" id="home">
		<div class="slider-img " style="z-index: 5;" >
			<div class="" align="center">
				<i>
					<p class="slider_heading">
						<span style="color:#8aba5e;">CELLFONES </span>
						<span style="color:#B3B2AD">RE-BORN</span>
					</p>
				</i>
				<img src="{{ asset('storage/images/homepage11.png') }}"  id="imgset" alt="news image" class=" img-fluid img-responsive img_banner">
				<a href="/Login">
					<img src="{{ asset('storage/images/sellarrow.png') }}" class="img_sell img_sell1 img_sell2">
				</a>
				<a href="BuyUsedMobilePhones">
					<img src="{{ asset('storage/images/buyarrow.png') }}" class="img_buy img_buy1 img_buy2 img_buy3">
				</a>
			</div>
		</div>
	</div>
	<!--//team -->
	<!-- matter -->
	<section>
		<div class="pricecalculatorbackground pcback" style=" background-image: url({{ asset('storage/images/pc.jpg') }} );">
			<div class="pc">
				<h1 align="center">Price Calculator</h1>
				<div class="pq">
					<h3>Get an estimate for your device</h3>
					<a href="PriceCalculator">
						<button class="btn pc-btn">Try it Now!</button>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!--//contact -->
	<!-- footer -->
	<section class="team py-lg-4 py-md-3 py-sm-3 py-3" style="padding:4px;">
		<div class="col-sm-12 col-md-12">
			<div class=" text-center">
				<p class="how_works">HOW IT WORKS</p>
			</div>
		</div>
		<div class="container py-lg-5 py-md-4 py-sm-4 py-3">
			<div class="row">
				<div class="col-lg-4 col-md-4 text-center my-3 hover01">
					<figure>
						<img src="{{ asset('storage/images/icons-3.png') }}" alt="news image"  style=" ">
					</figure>
					<div class="team-icons text-center mt-md-4 mt-3" style="padding:9%;">
							<h5>Dummy Text will be here.Dummy Text will be here.Dummy Text will be here.</h5>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 text-center my-3 hover01">
					<figure>
						<img src="{{ asset('storage/images/icons-2.png') }}" alt="news image"  style="border-radius:20%">
					</figure>
					<div class="team-icons text-center mt-md-4 mt-3" style="padding:9%;">
						<h5>Dummy Text will be here.Dummy Text will be here.Dummy Text will be here.</h5>
					</div>
				</div>
				<div class="col-lg-4 col-md-4  text-center my-3 hover01">
					<figure>
						<img src="{{ asset('storage/images/icons-1.png') }}" alt="news image"  style="border-radius:50%;">
					</figure>
					<div class="team-icons text-center mt-md-4 mt-3" style="padding:9%;">
						<h5>Dummy Text will be here.Dummy Text will be here.Dummy Text will be here.</h5>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section>
		<div align="center">
			<br>
			<h3><b>BEST MOBILE PHONE INFORMATION SITE</b></h3>
			<br>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p style="font-family: inherit;font-size: 17px;text-align: center;letter-spacing: inherit;">
							Flickerfone is one of the best mobile phone information site for buying and selling the mobile phones with latest features and multiple varieties at best prices in Pakistan. Flickerphone features brands ranging from iPhone, Samsung, Huawei, Infinix, OPPO, VIVO and many more on its intelligible platform. Flickerfone is a best mobile phone information site with competitive pricing, vast range of mobile phones and providing an efficient mobiles information for new mobile phone and buying/selling service to customers. Flickerfone is considered to be among the best information site in Pakistan. Our aim is to keep our customers updated and in the loop so whether it’s a query of getting mobile information or mobile phone software update, we will go beyond our excellence to create an ultimate guide experience when using our mobile phone information site platform.</p>
					</div>
				</div>
			</div>
			<br>
			<br>
													
		</div>
	</section>

@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->