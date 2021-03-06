@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->


@section('content')
	
	<section>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{ asset('storage/images/b1.jpg') }}"   class="img-responsive">
      </div>

      <div class="item">
       <img src="{{ asset('storage/images/v1.jpg') }}"   class="img-responsive">

      </div>

      <div class="item">
        <img src="{{ asset('storage/images/b3.jpg') }}"   class="img-responsive">
      </div>
       <div class="item">
      <img src="{{ asset('storage/images/v2.jpg') }}"   class="img-responsive">
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
  </div>

</section>

<section class="" style="background-color: #FFFFFF; padding-top: 10px;padding-bottom:10px; ">

  <div class="container">

  <div class="row">
      <div class="col-sm-12" style="min-height: 120px;">
   <!--
   <i class="glyphicon glyphicon-circle-arrow-left ico-left"></i>-->

          <div class="results slick-initialized slick-slider" align="center"><button class="slick-prev slick-arrow slick-disabled" aria-label="Previous" type="button" aria-disabled="true" style="display: block;">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4275px; transform: translate3d(0px, 0px, 0px);"><div class="col-lg-3 col-md-4 col-sm-6 slick-slide slick-current slick-active" align="center" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 245px;">
                  <div class="col-lg-6 col-sm-12">
                    <img src="https://flickerfone.com/assets/uploads/1a34932b5000f275f0c289f1e1b679b4.png" style="max-width:130px;" class="img-responsive">
                  </div>
                  <div class="col-lg-6 col-sm-12 innerdivs">
                    <div>
                 
                    <h5 style="padding:3px;margin-top: 25px;height: 40px;"><b>Apple</b></h5>
                    <select  style="max-width: 110px;
                    height: 36px;
                    border: 2px green solid;
                    border-radius: 5px; "
                     onchange="updatedProductLoad('57',this.value)" class="dropdown btnprim" tabindex="0">
                        <option selected="" disabled="" style="color:white !important; font-size: 20px !important; font-weight: bold !important; ">Model</option>
                        <option value="526">iphone 11 - Dual sim</option>
                        <option value="523">iphone 11 - Single sim</option>
                        <option value="527">iphone 11 pro - Dual sim</option>
                        <option value="524">iphone 11 pro - Single sim</option>
                        <option value="528">iphone 11 pro max - Dual sim</option>
                        <option value="525">iphone 11 pro max - Single sim</option>
                        <option value="512">iphone 6</option>
                        <option value="513">iphone 6s</option>
                        <option value="514">iphone 6s Plus</option>
                        <option value="515">iphone 7</option>
                        <option value="516">iphone 7 Plus</option><option value="517">iphone 8</option><option value="518">iphone 8 Plus</option><option value="519">iphone X</option><option value="520">iphone XR</option><option value="521">iphone XS</option><option value="522">iphone XS Max</option></select>
                  </div>
                  
                
                
                </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 slick-slide slick-active" align="center" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 245px;">
                  <div class="col-lg-6 col-sm-12">
                    <img src="https://flickerfone.com/assets/uploads/a8874a8262110908e76a1de76ad47042.png" style="max-width:130px;" class="img-responsive">
                  </div>
                  <div class="col-lg-6 col-sm-12 innerdivs">
                    <div>


                    <h5 style="padding:3px;margin-top: 25px;height: 40px;"><b>Google</b></h5>
                    <select style="max-width: 110px;
                    height: 36px;
                    border: 2px green solid;
                    border-radius: 5px; " onchange="updatedProductLoad('49',this.value)" class="dropdown btnprim" tabindex="0">
                        <option selected="" disabled="">Model</option><option value="479">Pixel 2</option><option value="480">Pixel 2 XL</option><option value="481">Pixel 3</option><option value="482">Pixel 3 XL</option><option value="483">Pixel 3a</option><option value="484">Pixel 3a XL</option><option value="485">Pixel 4</option><option value="486">Pixel 4 XL</option></select>
                  </div>
                  </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 slick-slide slick-active" align="center" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 245px;">
                  <div class="col-lg-6 col-sm-12">
                    <img src="https://flickerfone.com/assets/uploads/fff8f5849415741e40583e5b45689797.png" style="max-width:130px;" class="img-responsive">
                  </div>
                  <div class="col-lg-6 col-sm-12 innerdivs">
                    <div>
                    <h5 style="padding:3px;margin-top: 25px;height: 40px;"><b>Honor</b></h5>
                    <select style="max-width: 110px;
                    height: 36px;
                    border: 2px green solid;
                    border-radius: 5px; " onchange="updatedProductLoad('58',this.value)" class="dropdown btnprim" tabindex="0">
                        <option selected="" disabled="">Model</option><option value="541">Honor 10</option><option value="542">Honor 10 Lite</option><option value="543">Honor 20 pro</option><option value="529">Honor 7A</option><option value="530">Honor 7C</option><option value="531">Honor 7S</option><option value="532">Honor 7X</option><option value="533">Honor 8 pro</option><option value="549">Honor 8A (2019)</option><option value="534">Honor 8A pro (2019)</option><option value="535">Honor 8C</option><option value="536">Honor 8S</option><option value="537">Honor 8X</option><option value="538">Honor 9</option><option value="539">Honor 9 Lite</option><option value="540">Honor 9X 2019</option><option value="544">Honor Magic 2 (2018)</option><option value="545">Honor Magic 2 3D (2019)</option><option value="546">Honor Note  10 (2018)</option><option value="548">Honor Play</option><option value="550">Honor View 10 (2017)</option><option value="551">Honor View 20 (2018)</option></select>
                  </div>
                  </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 slick-slide slick-active" align="center" data-slick-index="3" aria-hidden="false" tabindex="0" style="width: 245px;">
                  <div class="col-lg-6 col-sm-12">
                    <img src="https://flickerfone.com/assets/uploads/3d5db0c7ea3ce7d9b6e3b1e84473b05a.png" style="max-width:130px;" class="img-responsive">
                  </div>
                  <div class="col-lg-6 col-sm-12 innerdivs">
                    <div>
                    <h5 style="padding:3px;margin-top: 25px;height: 40px;"><b>HTC</b></h5>
                    <select style="max-width: 110px;
                    height: 36px;
                    border: 2px green solid;
                    border-radius: 5px; " onchange="updatedProductLoad('33',this.value)" class="dropdown btnprim" tabindex="0">
                        <option selected="" disabled="">Model</option><option value="62">Htc Desire 12</option><option value="63">Htc Desire 12 Plus</option><option value="64">Htc Desire 12s</option><option value="65">Htc Desire 19 Plus</option><option value="742">Htc Desire 19s</option><option value="66">Htc Exodus 1</option><option value="741">Htc Exodus 1s</option><option value="67">Htc One X10</option><option value="68">Htc U Play</option><option value="69">Htc U Ultra</option><option value="70">Htc U11 eyes</option><option value="71">Htc U11 Plus</option><option value="72">Htc U12 Life</option><option value="73">Htc U12 Plus</option><option value="74">Htc U19e</option><option value="743">Htc Wildfire R70</option><option value="75">Htc Wildfire X</option></select>
                  </div>
                  </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 slick-slide" align="center" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 245px;">
                  <div class="col-lg-6 col-sm-12">
                    <img src="https://flickerfone.com/assets/uploads/f52cdb22b163d5c69b622e35e73b68a4.png" style="max-width:130px;" class="img-responsive">
                  </div>
                  <div class="col-lg-6 col-sm-12 innerdivs">
                    <div>
                    <h5 style="padding:3px;margin-top: 25px;height: 40px;"><b>Huawei</b></h5>
                    <select style="max-width:110px;" onchange="updatedProductLoad('35',this.value)" class="select-css" tabindex="-1">
                        <option selected="" disabled="">Model</option><option value="110">Huawei 10 Porsche Design</option><option value="107">Huawei Mate 10</option><option value="109">Huawei Mate 10 Lite</option><option value="122">Huawei Mate 10 Porsche Design</option><option value="111">Huawei Mate 10 pro</option><option value="116">Huawei Mate 20</option><option value="112">Huawei Mate 20 Lite</option><option value="113">Huawei Mate 20 Porsche RS</option><option value="114">Huawei Mate 20 pro</option><option value="123">Huawei Mate 20 X</option><option value="115">Huawei Mate 20 X 5G</option><option value="118">Huawei Mate 30</option><option value="120">Huawei Mate 30  Pro</option><option value="140">Huawei Mate 30 Porsche Design RS</option><option value="119">Huawei Mate 30 pro 5G</option><option value="141">Huawei Mate RS Porsche Design</option><option value="124">Huawei Mediapad T3 10</option><option value="125">Huawei Mediapad T3 7</option><option value="126">Huawei Nova 3</option><option value="127">Huawei Nova 3i</option><option value="128">Huawei Nova 5i pro</option><option value="129">Huawei Nova 5T</option><option value="130">Huawei P Smart 2017</option><option value="101">Huawei P Smart 2018</option><option value="100">Huawei P Smart 2019</option><option value="102">Huawei P Smart Z</option><option value="105">Huawei P10</option><option value="133">Huawei P10 Lite</option><option value="104">Huawei P10 Plus</option><option value="134">Huawei P20</option><option value="106">Huawei P20 Lite</option><option value="135">Huawei P20 Lite 2018</option><option value="136">Huawei p20 pro</option><option value="137">Huawei P30</option><option value="138">Huawei P30 Lite</option><option value="139">Huawei P30 pro</option><option value="103">Huawei P8 Lite</option><option value="132">Huawei P9 Lite</option><option value="142">Huawei Y5</option><option value="143">Huawei Y5 Lite</option><option value="144">Huawei Y5 Prime</option><option value="145">Huawei Y6 Prime 2018</option><option value="146">Huawei Y6 Prime 2019</option><option value="147">Huawei Y6 pro</option><option value="148">Huawei Y7 Prime 2017</option><option value="149">Huawei Y7 Prime 2018</option><option value="150">Huawei Y7 Prime 2019</option><option value="151">Huawei Y9 2018</option><option value="152">Huawei Y9 2019</option><option value="153">Huawei Y9 Prime 2019</option></select>
                  </div>
                  </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 slick-slide" align="center" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 245px;">
                  <div class="col-lg-6 col-sm-12">
                    <img src="https://flickerfone.com/assets/uploads/f7df3309e7ade86017c1e18de848ee9e.png" style="max-width:130px;" class="img-responsive">
                  </div>
                  <div class="col-lg-6 col-sm-12 innerdivs">
                    <div>
                    <h5 style="padding:3px;margin-top: 25px;height: 40px;"><b>Infinix</b></h5>
                    <select style="max-width:110px;" onchange="updatedProductLoad('32',this.value)" class="select-css" tabindex="-1">
                        <option selected="" disabled="">Model</option><option value="34">Infinix 5 Pro</option><option value="35">Infinix Hot 5</option><option value="36">Infinix Hot 5 lite</option><option value="37">Infinix Hot 6</option><option value="38">Infinix Hot 6 Pro</option><option value="39">Infinix Hot 6X</option><option value="40">Infinix Hot 7</option><option value="41">Infinix Hot 7 Pro</option><option value="42">Infinix Hot 8</option><option value="43">Infinix Hot 8 lite</option><option value="61">Infinix Hot S3</option><option value="117">Infinix Note 4</option><option value="44">Infinix Note 4 Pro</option><option value="45">Infinix Note 5</option><option value="47">Infinix Note 5 Stylus</option><option value="46">Infinix Note 6</option><option value="48">Infinix S3 X</option><option value="49">Infinix S4</option><option value="50">Infinix S5</option><option value="51">Infinix Smart</option><option value="52">Infinix Smart 2</option><option value="54">Infinix Smart 2 HD</option><option value="53">Infinix Smart 2 Pro</option><option value="55">Infinix Smart 3 Plus</option><option value="60">Infinix Zero 4</option><option value="56">Infinix Zero 4 Plus</option><option value="57">Infinix Zero 5</option><option value="58">Infinix Zero 6</option><option value="59">Infinix Zero 6 Pro</option></select>
                  </div>
                  </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 slick-slide" align="center" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 245px;">
                  <div class="col-lg-6 col-sm-12">
                    <img src="https://flickerfone.com/assets/uploads/14326afd80d723a67b047ef911998151.png" style="max-width:130px;" class="img-responsive">
                  </div>
                  <div class="col-lg-6 col-sm-12 innerdivs">
                    <div>
                    <h5 style="padding:3px;margin-top: 25px;height: 40px;"><b>Lenovo</b></h5>
                    <select style="max-width:110px;" onchange="updatedProductLoad('46',this.value)" class="select-css" tabindex="-1">
                        <option selected="" disabled="">Model</option><option value="412">Lenovo 4 10Plus</option><option value="410">Lenovo 4 8</option><option value="411">Lenovo 4 8Plus</option><option value="396">Lenovo A5</option><option value="419">Lenovo A6 Note 2016</option><option value="420">Lenovo K10 Note</option><option value="405">Lenovo K320t</option><option value="397">Lenovo K5</option><option value="398">Lenovo K5 Note 2018</option><option value="399">Lenovo K5 Play</option><option value="400">Lenovo K5 Pro</option><option value="401">Lenovo K6 Enjoy</option><option value="402">Lenovo K8</option><option value="403">Lenovo K8 Note</option><option value="404">Lenovo K8 Plus</option><option value="423">Lenovo M8 FHD 2019</option><option value="424">Lenovo M8 HD</option><option value="406">Lenovo S5</option><option value="407">Lenovo S5 Pro</option><option value="408">Lenovo S5 Pro GT</option><option value="409">Lenovo Tab 3 8Plus</option><option value="413">Lenovo Tab 7</option><option value="414">Lenovo Tab 7 Essential</option><option value="422">Lenovo Tab M7 2019</option><option value="415">Lenovo Tab V7</option><option value="425">Lenovo Tab V7 2019</option><option value="416">Lenovo Z5</option><option value="417">Lenovo Z5s</option><option value="426">Lenovo Z6 pro</option><option value="421">Lenovo Z6 Youth</option><option value="418">Lenovo Zuk Edge</option></select>
                  </div>
                  </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 slick-slide" align="center" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 245px;">
                  <div class="col-lg-6 col-sm-12">
                    <img src="https://flickerfone.com/assets/uploads/a6d1290233a360729ac574c2814183e4.png" style="max-width:130px;" class="img-responsive">
                  </div>
                  <div class="col-lg-6 col-sm-12 innerdivs">
                    <div>
                    <h5 style="padding:3px;margin-top: 25px;height: 40px;"><b>LG</b></h5>
                    <select style="max-width:110px;" onchange="updatedProductLoad('48',this.value)" class="select-css" tabindex="-1">
                        <option selected="" disabled="">Model</option><option value="467">LG  Q8 2018</option><option value="458">LG G7  One 2108</option><option value="457">LG G7 Fit  2018</option><option value="450">LG G8 ThinQ</option><option value="451">LG G8s ThinQ</option><option value="459">LG K11 Plus</option><option value="460">LG K20</option><option value="461">LG K30 2019</option><option value="452">LG K40</option><option value="462">LG K40s 2019</option><option value="453">LG K50</option><option value="463">LG K50s 2019</option><option value="464">LG Q Stylo 4 2018</option><option value="465">LG Q Stylus 2018</option><option value="454">LG Q60</option><option value="466">LG Q7 2018 32GB</option><option value="468">LG Q9</option><option value="470">LG Q9</option><option value="469">LG Stylo 5 2019</option><option value="471">LG Stylo 5 2019</option><option value="472">LG V35 2018</option><option value="455">LG V50 ThinQ 5G</option><option value="456">LG W10</option><option value="473">LG W30 2019</option><option value="474">LG W30 Pro 2019</option></select>
                  </div>
                  </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 slick-slide" align="center" data-slick-index="8" aria-hidden="true" tabindex="-1" style="width: 245px;">
                  <div class="col-lg-6 col-sm-12">
                    <img src="https://flickerfone.com/assets/uploads/76840d43301a91d01ff02c5e21971cac.png" style="max-width:130px;" class="img-responsive">
                  </div>
                  <div class="col-lg-6 col-sm-12 innerdivs">
                    <div>
                    <h5 style="padding:3px;margin-top: 25px;height: 40px;"><b>Nokia</b></h5>
                    <select style="max-width:110px;" onchange="updatedProductLoad('38',this.value)" class="select-css" tabindex="-1">
                        <option selected="" disabled="">Model</option><option value="243">Nokia 1</option><option value="244">Nokia 1 Plus</option><option value="328">Nokia 105 2019</option><option value="323">Nokia 106</option><option value="329">Nokia 110 2019</option><option value="303">Nokia 2 2</option><option value="302">Nokia 2.1</option><option value="317">Nokia 210</option><option value="331">Nokia 2720 Flip 2019</option><option value="245">Nokia 3</option><option value="324">Nokia 3 1 C</option><option value="304">Nokia 3.1</option><option value="305">Nokia 3.1 Plus</option><option value="321">Nokia 3.1A</option><option value="306">Nokia 3.2</option><option value="316">Nokia 31C</option><option value="332">Nokia 3310 4G 2018</option><option value="307">Nokia 4 2</option><option value="308">Nokia 5 1</option><option value="325">Nokia 5 1 Plus</option><option value="309">Nokia 6 1</option><option value="322">Nokia 6 1 Plus</option><option value="326">Nokia 6 2 2019</option><option value="310">Nokia 7</option><option value="312">Nokia 7 1</option><option value="327">Nokia 7 2 2019</option><option value="311">Nokia 7 Plus</option><option value="314">Nokia 8 1</option><option value="313">Nokia 8 Sirocco</option><option value="330">Nokia 800 2019</option><option value="318">Nokia 8110 4G</option><option value="315">Nokia 9 Pure view</option><option value="319">Nokia X5</option><option value="320">Nokia X71</option></select>
                  </div>
                  </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 slick-slide" align="center" data-slick-index="9" aria-hidden="true" tabindex="-1" style="width: 245px;">
                  <div class="col-lg-6 col-sm-12">
                    <img src="https://flickerfone.com/assets/uploads/7f0fc5f53d678ca1553566c3fd70f089.png" style="max-width:130px;" class="img-responsive">
                  </div>
                  <div class="col-lg-6 col-sm-12 innerdivs">
                    <div>
                    <h5 style="padding:3px;margin-top: 25px;height: 40px;"><b>Oppo</b></h5>
                    <select style="max-width:110px;" onchange="updatedProductLoad('37',this.value)" class="select-css" tabindex="-1">
                        <option selected="" disabled="">Model</option><option value="223">Oppo A1K</option><option value="230">Oppo A39</option><option value="224">Oppo A5 2018</option><option value="225">Oppo A5 2019</option><option value="226">Oppo A5s</option><option value="227">Oppo A7</option><option value="231">Oppo A71</option><option value="232">Oppo A71 2018</option><option value="198">Oppo A77</option><option value="199">Oppo A77 Mediatek</option><option value="200">Oppo A83</option><option value="228">Oppo A9</option><option value="229">Oppo A9x</option><option value="208">Oppo F11</option><option value="209">Oppo F11 Pro</option><option value="201">Oppo F3</option><option value="202">Oppo F3 Plus</option><option value="203">Oppo F5</option><option value="204">Oppo F5 Youth</option><option value="205">Oppo F7</option><option value="206">Oppo F7 Youth</option><option value="207">Oppo F9</option><option value="210">Oppo Find X</option><option value="211">Oppo K1</option><option value="212">Oppo K3</option><option value="233">Oppo K5</option><option value="213">Oppo R11</option><option value="239">Oppo R11 Plus</option><option value="214">Oppo R11s</option><option value="215">Oppo R11s Plus</option><option value="216">Oppo R15</option><option value="241">Oppo R15 Pro</option><option value="217">Oppo R15x</option><option value="242">Oppo R17</option><option value="218">Oppo R17 Pro</option><option value="219">Oppo Reno</option><option value="221">Oppo Reno 10x Zoom</option><option value="234">Oppo Reno 2</option><option value="237">Oppo Reno 2 F</option><option value="238">Oppo Reno 2 Z</option><option value="220">Oppo Reno 5G</option><option value="235">Oppo Reno A</option><option value="236">Oppo Reno Ace</option><option value="222">Oppo Reno Z</option></select>
                  </div>
                  </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 slick-slide" align="center" data-slick-index="10" aria-hidden="true" tabindex="-1" style="width: 245px;">
                  <div class="col-lg-6 col-sm-12">
                    <img src="https://flickerfone.com/assets/uploads/066c8cf93f905814b02c135402ba79e1.png" style="max-width:130px;" class="img-responsive">
                  </div>
                  <div class="col-lg-6 col-sm-12 innerdivs">
                    <div>
                    <h5 style="padding:3px;margin-top: 25px;height: 40px;"><b>Real Me</b></h5>
                    <select style="max-width:110px;" onchange="updatedProductLoad('43',this.value)" class="select-css" tabindex="-1">
                        <option selected="" disabled="">Model</option><option value="333">RealMe 1</option><option value="334">RealMe 2</option><option value="335">RealMe 3</option><option value="336">RealMe 3 pro</option><option value="337">RealMe 3i</option><option value="338">RealMe 5</option><option value="339">RealMe 5 Pro</option><option value="345">RealMe 730G</option><option value="340">RealMe C1</option><option value="346">RealMe C2</option><option value="341">RealMe Q</option><option value="342">RealMe U1</option><option value="343">RealMe X</option><option value="344">RealMe X2</option><option value="347">RealMe X2 Pro</option><option value="348">RealMe XT</option></select>
                  </div>
                  </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 slick-slide" align="center" data-slick-index="11" aria-hidden="true" tabindex="-1" style="width: 245px;">
                  <div class="col-lg-6 col-sm-12">
                    <img src="https://flickerfone.com/assets/uploads/6b263d8e3dfd68575894a7a7f7d24cc5.png" style="max-width:130px;" class="img-responsive">
                  </div>
                  <div class="col-lg-6 col-sm-12 innerdivs">
                    <div>
                    <h5 style="padding:3px;margin-top: 25px;height: 40px;"><b>Samsung</b></h5>
                    <select style="max-width:110px;" onchange="updatedProductLoad('41',this.value)" class="select-css" tabindex="-1">
                        <option selected="" disabled="">Model</option><option value="745">Galaxy A01</option><option value="721">Samsung A10s</option><option value="246">Samsung A2 Core</option><option value="722">Samsung A20</option><option value="723">Samsung A20s</option><option value="724">Samsung A30s</option><option value="725">Samsung A50s</option><option value="727">Samsung A60</option><option value="728">Samsung A70s</option><option value="720">Samsung A8 Star</option><option value="726">Samsung C7 Pro</option><option value="258">Samsung Galaxy A10</option><option value="247">Samsung Galaxy A3</option><option value="259">Samsung Galaxy A30</option><option value="249">Samsung Galaxy A5 2016</option><option value="248">Samsung Galaxy A5 2017</option><option value="260">Samsung Galaxy A50</option><option value="250">Samsung Galaxy A6</option><option value="251">Samsung Galaxy A6 plus</option><option value="252">Samsung Galaxy A7</option><option value="253">Samsung Galaxy A7 2016</option><option value="254">Samsung Galaxy A7 2017</option><option value="261">Samsung Galaxy A70</option><option value="255">Samsung Galaxy A8</option><option value="256">Samsung Galaxy A8 plus</option><option value="262">Samsung Galaxy A80</option><option value="257">Samsung Galaxy A9</option><option value="731">Samsung Galaxy J2 core</option><option value="732">Samsung Galaxy J3(2018)</option><option value="733">Samsung Galaxy J4+</option><option value="292">Samsung Galaxy J5 Pro</option><option value="293">Samsung Galaxy J6 Plus</option><option value="294">Samsung Galaxy J7 Max</option><option value="295">Samsung Galaxy J7 Prime</option><option value="296">Samsung Galaxy J7 pro 16GB</option><option value="297">Samsung Galaxy J8 2018</option><option value="735">Samsung Galaxy M10s</option><option value="736">Samsung Galaxy M30s</option><option value="298">Samsung Galaxy Note 8</option><option value="299">Samsung Galaxy Note 9 512GB</option><option value="738">Samsung Galaxy Note10 Plus</option><option value="300">Samsung Galaxy Note9 128GB</option><option value="289">Samsung Galaxy S10</option><option value="739">Samsung Galaxy S10 Plus</option><option value="290">Samsung Galaxy S10 plus 128GB</option><option value="740">Samsung Galaxy S20</option><option value="285">Samsung Galaxy S8 64GB</option><option value="286">Samsung Galaxy S8 plus 64GB</option><option value="287">Samsung Galaxy S9 4 GB RAM</option><option value="288">Samsung Galaxy S9 plus 64GB</option><option value="729">Samsung J2 Pro (2018)</option><option value="730">Samsung J7 Duo</option><option value="737">Samsung Note10 lite</option></select>
                  </div>
                  </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 slick-slide" align="center" data-slick-index="12" aria-hidden="true" tabindex="-1" style="width: 245px;">
                  <div class="col-lg-6 col-sm-12">
                    <img src="https://flickerfone.com/assets/uploads/a78f9fa4991271ac16b6bfc9e6754254.png" style="max-width:130px;" class="img-responsive">
                  </div>
                  <div class="col-lg-6 col-sm-12 innerdivs">
                    <div>
                    <h5 style="padding:3px;margin-top: 25px;height: 40px;"><b>Sony</b></h5>
                    <select style="max-width:110px;" onchange="updatedProductLoad('44',this.value)" class="select-css" tabindex="-1">
                        <option selected="" disabled="">Model</option><option value="349">Sony Xperia 1</option><option value="350">Sony Xperia 10</option><option value="351">Sony Xperia 10 Plus</option><option value="475">Sony Xperia 5</option><option value="352">Sony Xperia L2</option><option value="354">Sony Xperia R1 Plus</option><option value="476">Sony Xperia X2 Premium</option><option value="355">Sony Xperia XA1 Plus</option><option value="356">Sony Xperia XA2</option><option value="477">Sony Xperia XA2 Ultra</option><option value="357">Sony Xperia XZ1</option><option value="478">Sony Xperia XZ2 Compact</option><option value="358">Sony Xperia XZ3</option><option value="353">Soy Xperia L3</option></select>
                  </div>
                  </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 slick-slide" align="center" data-slick-index="13" aria-hidden="true" tabindex="-1" style="width: 245px;">
                  <div class="col-lg-6 col-sm-12">
                    <img src="https://flickerfone.com/assets/uploads/433e64958ef3558bcf71fa71e781383d.png" style="max-width:130px;" class="img-responsive">
                  </div>
                  <div class="col-lg-6 col-sm-12 innerdivs">
                    <div>
                    <h5 style="padding:3px;margin-top: 25px;height: 40px;"><b>Vivo</b></h5>
                    <select style="max-width:110px;" onchange="updatedProductLoad('36',this.value)" class="select-css" tabindex="-1">
                        <option selected="" disabled="">Model</option><option value="161">Vivo iQOO Neo</option><option value="163">Vivo iQOO pro</option><option value="162">Vivo iQOO Pro 5G</option><option value="164">Vivo Nex 3</option><option value="167">Vivo Nex 3 5G</option><option value="165">Vivo Nex Dual Display</option><option value="166">Vivo Nex S</option><option value="154">Vivo S1</option><option value="168">Vivo U10</option><option value="172">Vivo V11</option><option value="155">Vivo V11 pro</option><option value="173">Vivo V11i</option><option value="160">Vivo V15</option><option value="174">Vivo V17 pro</option><option value="170">Vivo V9</option><option value="169">Vivo V9 6GB</option><option value="171">Vivo V9 Youth</option><option value="175">Vivo X21</option><option value="176">Vivo X21 UD</option><option value="177">Vivo X21i</option><option value="178">Vivo X23</option><option value="179">Vivo X27</option><option value="180">Vivo X27 pro</option><option value="181">Vivo Y12</option><option value="156">Vivo Y15</option><option value="157">Vivo Y15 pro</option><option value="158">Vivo Y17</option><option value="182">Vivo Y71</option><option value="183">Vivo Y71i</option><option value="184">Vivo Y81</option><option value="185">Vivo Y81i</option><option value="186">Vivo Y83</option><option value="187">Vivo Y89</option><option value="159">Vivo y90</option><option value="188">Vivo Y91</option><option value="189">Vivo Y91i</option><option value="190">Vivo Y93s</option><option value="191">Vivo Y95</option><option value="192">Vivo Z1</option><option value="193">Vivo Z1 Lite</option><option value="195">Vivo Z1 pro</option><option value="194">Vivo Z1i</option><option value="196">Vivo Z1x</option><option value="197">Vivo Z3x</option></select>
                  </div>
                  </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 slick-slide" align="center" data-slick-index="14" aria-hidden="true" tabindex="-1" style="width: 245px;">
                  <div class="col-lg-6 col-sm-12">
                    <img src="https://flickerfone.com/assets/uploads/278583e06400e8f0701b0b3761a4b9c9.png" style="max-width:130px;" class="img-responsive">
                  </div>
                  <div class="col-lg-6 col-sm-12 innerdivs">
                    <div>
                    <h5 style="padding:3px;margin-top: 25px;height: 40px;"><b>Xiaomi</b></h5>
                    <select style="max-width:110px;" onchange="updatedProductLoad('45',this.value)" class="select-css" tabindex="-1">
                        <option selected="" disabled="">Model</option><option value="364">Xiaomi Black Shark 2</option><option value="374">Xiaomi Black Shark Helo</option><option value="375">Xiaomi Black Shark Helo</option><option value="395">Xiaomi Mi 8</option><option value="378">Xiaomi Mi 8 Explorer</option><option value="379">Xiaomi Mi 8 lite</option><option value="380">Xiaomi Mi 8 Pro</option><option value="381">Xiaomi Mi 8 SE</option><option value="360">Xiaomi Mi 9</option><option value="361">Xiaomi Mi 9 Explorer</option><option value="362">Xiaomi Mi 9 SE</option><option value="363">Xiaomi Mi 9T</option><option value="383">Xiaomi Mi A2</option><option value="382">Xiaomi Mi A2 lite</option><option value="384">Xiaomi Mi A3</option><option value="365">Xiaomi Mi CC9e</option><option value="385">Xiaomi Mi Max 3</option><option value="386">Xiaomi Mi mix 3</option><option value="387">Xiaomi Mi Play</option><option value="388">Xiaomi Pocophone F1</option><option value="390">Xiaomi Redmi 6</option><option value="391">Xiaomi Redmi 6 A</option><option value="367">Xiaomi Redmi 7</option><option value="392">Xiaomi Redmi 7A</option><option value="371">Xiaomi Redmi 8</option><option value="376">Xiaomi Redmi 8</option><option value="372">Xiaomi Redmi 8A</option><option value="377">Xiaomi Redmi 8A</option><option value="389">Xiaomi Redmi Go</option><option value="368">Xiaomi Redmi K20</option><option value="369">Xiaomi Redmi K20 Pro</option><option value="393">Xiaomi Redmi Note 6 Pro</option><option value="359">Xiaomi Redmi Note 7</option><option value="366">Xiaomi Redmi Note 7 Pro</option><option value="373">Xiaomi Redmi Note 7s</option><option value="394">Xiaomi Redmi S2</option><option value="370">Xiaomi Redmi Y3</option></select>
                  </div>
                  </div>
                </div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" aria-disabled="false" style="display: block;">Next</button></div>
          <!--
    <i  class="glyphicon glyphicon-circle-arrow-right ico-right" style="right: 16px;"></i>
    -->
      </div>


</div>

  </div>
  </section>





    <section style="padding: 2%;">
            <div class="row">
                <div class="col-sm-12" >
                    <div class="col-sm-3 " >
                        <div class="col-sm-12 div_price" style="color: #6d6b6b;background: #fafafa;">
                            <h3><b>Find by Price</b></h3>
                            <p>Select price range by scrolling.</p>
                            <span style="margin-right:10px;">MIn</span>
                                <input  id="ex2" type="text" class="span2" value="" data-slider-min="0" data-slider-max="300000" data-slider-step="7" data-slider-value="[1000,100000]"/>
                            <span style="margin-left:3px;">Max</span>

                            <div style="float:left" >
                            <a  data-toggle="tooltip" title="Min Price">
                                <input type="number" class="priceinput pmin" value="10000" />
                            </a>
                            </div>
                            <div style="float:right" >
                                <a data-toggle="tooltip" title="Max Price">
                                <input type="number" class="priceinput pmax" value="100000"/>
                                </a>
                            </div>
                        </div>


            <div class="col-sm-12 div_smart" style="color: #6d6b6b;background: #fafafa;">
              <h3><b>Find by Make</h3>
                <br>

            <table class="table table-responsive table-stripped">

                <tr class='table_make'><td class='btnbrand' onClick="brand('57')">Apple</td><td class='btnbrand' onClick="brand('49')">Google</td><td class='btnbrand' onClick="brand('58')">Honor</td>
                  </tr>
                 <tr class='table_make'><td class='btnbrand' onClick="brand('33')">HTC</td><td class='btnbrand' onClick="brand('35')">Huawei</td><td class='btnbrand' onClick="brand('32')">Infinix</td>
                  </tr>
                 <tr class='table_make'><td class='btnbrand' onClick="brand('46')">Lenovo</td><td class='btnbrand' onClick="brand('48')">LG</td><td class='btnbrand' onClick="brand('38')">Nokia</td>
                  </tr>
                 <tr class='table_make'><td class='btnbrand' onClick="brand('37')">Oppo</td><td class='btnbrand' onClick="brand('43')">Real Me</td><td class='btnbrand' onClick="brand('41')">Samsung</td>
                  </tr>
                 <tr class='table_make'><td class='btnbrand' onClick="brand('44')">Sony</td><td class='btnbrand' onClick="brand('36')">Vivo</td><td class='btnbrand' onClick="brand('45')">Xiaomi</td>
                  </tr>
                 

              </table>
            </div>
                    </div>




                    <div class="col-sm-9">
                      <div class="col-sm-12 div_mob" align="center">
                  <div align="left" style="margin: 10px;">
                      Sort ::
                  <div class="dropdown">
                      <button class="btn btn-xs btn-primary btnprim dropdown-toggle" data-toggle="dropdown">Price
                          <span class="caret"></span>
                      </button>
                  <ul class="dropdown-menu">
                        <li><a id="psorta">Higher to Lower</a></li>
                        <li><a id="psortb">Lower to Higher</a></li>
                  </ul>
                  
                  </div>
                  
                    </div>
                      <div class="products">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding: 5px;">
                                 <div class=" hover01 div_box div_box_in">
                                 <figure style="min-height: 170px;"> <img src="https://flickerfone.com/assets/uploads/thumbs/8809b9a1b085528f3f53e92788b5e3b8.jpg" style="max-width: -webkit-fill-available;padding: 14%"> </figure>
                  
                                      <h4 style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;" data-toggle="tooltip" title="" data-original-title="iphone 6">iphone 6</h4><br>
                                      <h4>N/A</h4>
                                      <br>
                                      <div style="font-size: 9px;">
                                        <span class="fa fa-star"></span>
                  
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star"></span><span> (0 Responses)</span>
                  
                                        <!-- <button onclick="modal('https://flickerfone.com/main/quickview/423',this)" style="margin-top: 5px; margin-right: -4px;" class="btn btn_quick" type="button">Quick Look</button>
                   -->

                   <button data-toggle="modal" data-target="#exampleModal" style="margin-top: 5px; margin-right: -4px;" class="btn btn_quick" type="button">Quick Look</button>
  
                                      </div>
                                    </div>
                              </div>
<!-- 
//////////////////////////////////////////////////  ITS A MODAL//////////////////////////////////////// -->

                              <div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <span class="close">&times;</span>
                                    <h2>Modal Header</h2>
                                  </div>
                                  <div class="modal-body">
                                    <p>Some text in the Modal Body</p>
                                    <p>Some other text...</p>
                                  </div>
                                  <div class="modal-footer">
                                    <h3>Modal Footer</h3>
                                  </div>
                                </div>
                              
                              </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding: 5px;">
                                 <div class=" hover01 div_box div_box_in">
                                 <figure style="min-height: 170px;"> <img src="https://flickerfone.com/assets/uploads/thumbs/07548ad29366e239033f2ffd89aceee7.jpg" style="max-width: -webkit-fill-available;padding: 14%"> </figure>
                  
                                      <h4 style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;" data-toggle="tooltip" title="" data-original-title="iphone 6s">iphone 6s</h4><br>
                                      <h4>N/A</h4>
                                      <br>
                                      <div style="font-size: 9px;">
                                        <span class="fa fa-star"></span>
                  
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star"></span><span> (0 Responses)</span>
                  
                                        <button data-toggle="modal" data-target="#exampleModal6s" style="margin-top: 5px; margin-right: -4px;" class="btn btn_quick" type="button">Quick Look</button>
  
                                      </div>
                                    </div>
                              </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding: 5px;">
                                 <div class=" hover01 div_box div_box_in">
                                 <figure style="min-height: 170px;"> <img src="https://flickerfone.com/assets/uploads/thumbs/aa8071aab8ed86d973552b1478525052.jpg" style="max-width: -webkit-fill-available;padding: 14%"> </figure>
                  
                                      <h4 style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;" data-toggle="tooltip" title="" data-original-title="iphone 7
                                      ">iphone 7</h4><br>
                                      <h4>N/A</h4>
                                      <br>
                                      <div style="font-size: 9px;">
                                        <span class="fa fa-star"></span>
                  
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star"></span><span> (0 Responses)</span>
                  
                                        <button data-toggle="modal" data-target="#exampleModaliphone7" style="margin-top: 5px; margin-right: -4px;" class="btn btn_quick" type="button">Quick Look</button>
  
                                      </div>
                                    </div>
                              </div>

                              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 " style="padding: 5px;">
                                <div class=" hover01 div_box div_box_in">
                                <figure style="min-height: 170px;"> <img src="https://flickerfone.com/assets/uploads/thumbs/aa8071aab8ed86d973552b1478525052.jpg" style="max-width: -webkit-fill-available;padding: 14%"> </figure>
                 
                                     <h4 style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;" data-toggle="tooltip" title="" data-original-title="iphone 7">iphone 7</h4><br>
                                     <h4>N/A</h4>
                                     <br>
                                     <div style="font-size: 9px;">
                                       <span class="fa fa-star"></span>
                 
                                       <span class="fa fa-star"></span>
                                       <span class="fa fa-star"></span>
                                       <span class="fa fa-star "></span>
                                       <span class="fa fa-star"></span><span> (0 Responses)</span>
                 
                                       <button data-toggle="modal" data-target="#exampleModaliphone7" style="margin-top: 5px; margin-right: -4px;" class="btn btn_quick" type="button">Quick Look</button>
  
                                     </div>
                                   </div>
                             </div>

                             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding: 5px;">
                              <div class=" hover01 div_box div_box_in">
                              <figure style="min-height: 170px;"> <img src="https://flickerfone.com/assets/uploads/thumbs/aa8071aab8ed86d973552b1478525052.jpg" style="max-width: -webkit-fill-available;padding: 14%"> </figure>
               
                                   <h4 style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;" data-toggle="tooltip" title="" data-original-title="iphone 7">iphone 7</h4><br>
                                   <h4>N/A</h4>
                                   <br>
                                   <div style="font-size: 9px;">
                                     <span class="fa fa-star"></span>
               
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star "></span>
                                     <span class="fa fa-star"></span><span> (0 Responses)</span>
               
                                     <button data-toggle="modal" data-target="#exampleModaliphone7" style="margin-top: 5px; margin-right: -4px;" class="btn btn_quick" type="button">Quick Look</button>
  
                                   </div>
                                 </div>
                           </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding: 5px;">
                                 <div class=" hover01 div_box div_box_in">
                                 <figure style="min-height: 170px;"> <img src="https://flickerfone.com/assets/uploads/thumbs/4358ea648f89f14a0c041381f1a6d74a.jpg" style="max-width: -webkit-fill-available;padding: 14%"> </figure>
                  
                                      <h4 style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;" data-toggle="tooltip" title="" data-original-title="iphone 6s Plus">iphone 6s Plus</h4><br>
                                      <h4>N/A</h4>
                                      <br>
                                      <div style="font-size: 9px;">
                                        <span class="fa fa-star"></span>
                  
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star"></span><span> (0 Responses)</span>
                  
                                        <button data-toggle="modal" data-target="#iphone6sPlus" style="margin-top: 5px; margin-right: -4px;" class="btn btn_quick" type="button">Quick Look</button>
  
                  
                                      </div>
                                    </div>
                              </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding: 5px;">
                                 <div class=" hover01 div_box div_box_in">
                                 <figure style="min-height: 170px;"> <img src="https://flickerfone.com/assets/uploads/thumbs/27ca27ba2d03ac9c76e9fec3087d2446.jpg" style="max-width: -webkit-fill-available;padding: 14%"> </figure>
                  
                                      <h4 style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;" data-toggle="tooltip" title="" data-original-title="iphone 7 Plus">iphone 7 Plus</h4><br>
                                      <h4>N/A</h4>
                                      <br>
                                      <div style="font-size: 9px;">
                                        <span class="fa fa-star"></span>
                  
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star"></span><span> (0 Responses)</span>
                  

                                        <button data-toggle="modal" data-target="#iphone7Plus" style="margin-top: 5px; margin-right: -4px;" class="btn btn_quick" type="button">Quick Look</button>
  
                  
                                      </div>
                                    </div>
                              </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding: 5px;">
                                 <div class=" hover01 div_box div_box_in">
                                 <figure style="min-height: 170px;"> <img src="https://flickerfone.com/assets/uploads/thumbs/e8db43a3095331bfc74960373291807f.jpg" style="max-width: -webkit-fill-available;padding: 14%"> </figure>
                  
                                      <h4 style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;" data-toggle="tooltip" title="" data-original-title="iphone 8">iphone 8</h4><br>
                                      <h4>N/A</h4>
                                      <br>
                                      <div style="font-size: 9px;">
                                        <span class="fa fa-star"></span>
                  
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star"></span><span> (0 Responses)</span>
                  
                                        <button data-toggle="modal" data-target="#iphone8" style="margin-top: 5px; margin-right: -4px;" class="btn btn_quick" type="button">Quick Look</button>
                  
                                      </div>
                                    </div>
                              </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding: 5px;">
                                 <div class=" hover01 div_box div_box_in">
                                 <figure style="min-height: 170px;"> <img src="https://flickerfone.com/assets/uploads/thumbs/8984e2758fddce2b48fa9858b15dacf0.jpg" style="max-width: -webkit-fill-available;padding: 14%"> </figure>
                  
                                      <h4 style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;" data-toggle="tooltip" title="" data-original-title="iphone 8 Plus">iphone 8 Plus</h4><br>
                                      <h4>N/A</h4>
                                      <br>
                                      <div style="font-size: 9px;">
                                        <span class="fa fa-star"></span>
                  
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star"></span><span> (0 Responses)</span>
                  
                                        <button data-toggle="modal" data-target="#iphone8Plus" style="margin-top: 5px; margin-right: -4px;" class="btn btn_quick" type="button">Quick Look</button>
                  
                                      </div>
                                    </div>
                              </div>
                     
                            
                            </div>
                      <div class="clearfix"></div>
                      <button class="btn loadmore" style="margin-top:40px;padding:5px;font-size:18px;font-style: oblique;width: 30%;background-color: white;color: black;border: 2px solid #2a0430;border-bottom: 5px solid #2a0430;color:#2a0430;    min-width: 1;margin-top: 40px;
                      padding: 5px;
                      font-size: 18px;
                      font-style: normal;
                      width: 25%;
                      background-color: #086945;
                      border: 2px solid #086945;
                      border-bottom: 5px solid #086945;
                      color: #ffffff;
                      min-width: 150px;">LOAD MORE</button>
                  
                  
                  
                  
                    </div>
                      </div>

</div>

</div>
</section>







<div class="modal fade" id="myModal" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <!-- Modal Content: begins -->
    <div class="modal-content">
    </div>

  </div>

</div>












<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="body-message col-sm-12" style="background-color: white ; padding-bottom: 20px;">
          <div class="col-sm-5">
            <img class="img-responsive" src="https://flickerfone.com/assets/uploads/8809b9a1b085528f3f53e92788b5e3b8.jpg">
          </div>
          <div class="col-sm-7">
            <h3>iphone 6  </h3>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span><span> (0 Responses)</span>
                    <br><br>
                     <h3>Price: N/A</h3>
                    <a target="_blank" href="ReviewDetailiphone6.html">
                    <button style="margin-top: 15px;margin-bottom: 15px;" class="btn sell_btn" type="button">View Product Details</button>
                    </a>

             </div>

            <div class="col-sm-12">
                
            <div class="specs-wrapper">
            <div class="specification-title">Specifications:</div>
            <div class="specs-column">    <div class="specs-list"> <ul>  <li>
            <span>Operating System:</span>iOS 8</li>  <li>
            <span>Processor:</span> Dual-core 1.4 GHz</li>  <li>
            <span>Memory:</span>1 GB RAM </li>  <li>
            <span>Storage:</span>16/32/64/128 GB</li>  <li>
            <span>Camera Resolution:</span>8/1.2 MP</li>  <li>
            <span>Battery:</span> Non-removable Li-Po 1810 mAh battery </li>  <li>
            <span>Display Size:</span>4.7 inches </li>  <li>
            <span>Resolution:</span>750 x 1334 pixels </li>  <li>
            <span>Connectivity:</span>Wi-Fi 802.11, Bluetooth 4.0, NFC (Apple Pay only)</li>  <li>
            <span>Height:</span>5.44 inches</li>  <li>
            <span>Width:</span>2.64 inches</li>  <li>
            <span>Depth:</span>0.27 inches</li>  <li>
            <span>Weight:</span>129g</li>
            </ul>
            </div>
            </div>
          </div>
            </div>



        </div>
      
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="exampleModal6s" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     


        <div class="body-message col-sm-12" style="background-color: white ; padding-bottom: 20px;">
          <div class="col-sm-5">
            <img class="img-responsive" src="https://flickerfone.com/assets/uploads/07548ad29366e239033f2ffd89aceee7.jpg">
          </div>
          <div class="col-sm-7">
            <h3>iphone 6s  </h3>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span><span> (0 Responses)</span>
                    <br><br>
                     <h3>Price: N/A</h3>
                    <a href="https://flickerfone.com/product/iphone-6s">
                    <button style="margin-top: 15px;margin-bottom: 15px;" class="btn sell_btn" type="button">View Product Details</button>
                    </a>

             </div>

            <div class="col-sm-12">
                

<div class="specs-wrapper">
            <div class="specification-title">Specifications:</div>
            <div class="specs-column">    <div class="specs-list"> <ul>  <li>
<span>Operating System:</span>iOS 9</li>  <li>
<span>Processor:</span> Dual-core 1.84 GHz</li>  <li>
<span>Memory:</span>2 GB RAM</li>  <li>
<span>Storage:</span>16/32/64/128 GB</li>  <li>
<span>Camera Resolution:</span>12/5 MP</li>  <li>
<span>Battery:</span>Non-removable Li-Ion 1715 mAh battery  </li>  <li>
<span>Display Size:</span>4.7 inches</li>  <li>
<span>Resolution:</span>750 x 1334 pixels </li>  <li>
<span>Connectivity:</span>Wi-Fi with 802.11, Bluetooth 4.2, NFC (Apple Pay only)</li>  <li>
<span>Height:</span>5.44 inches</li>  <li>
<span>Width:</span>2.64 inches</li>  <li>
<span>Depth:</span>0.28 inches</li>  <li>
<span>Weight:</span>143g</li>
</ul>
</div>
                                    </div>



        </div>


</div></div>
      
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="exampleModaliphone7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     

        <div class="body-message col-sm-12" style="background-color: white ; padding-bottom: 20px;">
          <div class="col-sm-5">
            <img class="img-responsive" src="https://flickerfone.com/assets/uploads/aa8071aab8ed86d973552b1478525052.jpg">
          </div>
          <div class="col-sm-7">
            <h3>iphone 7  </h3>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span><span> (0 Responses)</span>
                    <br><br>
                     <h3>Price: N/A</h3>
                    <a href="https://flickerfone.com/product/iphone-7">
                    <button style="margin-top: 15px;margin-bottom: 15px;" class="btn sell_btn" type="button">View Product Details</button>
                    </a>

             </div>

            <div class="col-sm-12">
                
<div class="specs-wrapper">
            <div class="specification-title">Specifications:</div>
            <div class="specs-column">    <div class="specs-list"> <ul>  <li>
<span>Operating System:</span>iOS 10.0.1</li>  <li>
<span>Processor:</span> Quad-core 2.34 GHz </li>  <li>
<span>Memory:</span>2 GB RAM </li>  <li>
<span>Storage:</span>32/128/256 GB</li>  <li>
<span>Camera Resolution:</span>12/7 MP</li>  <li>
<span>Battery:</span> Non-removable Li-Po 1960 mAh battery </li>  <li>
<span>Display Size:</span>4.7 inches </li>  <li>
<span>Resolution:</span>750 x 1334 pixels </li>  <li>
<span>Connectivity:</span>Wi-Fi 802.11, Bluetooth 4.2, NFC (Apple Pay only)</li>  <li>
<span>Height:</span>5.44 inches</li>  <li>
<span>Width:</span>2.64 inches</li>  <li>
<span>Depth:</span>0.28 inches</li>  <li>
<span>Weight:</span>138g.</li>
</ul>
</div>
</div>
          </div>
                                    </div>



        </div>
      
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>







<div class="modal fade" id="iphone6sPlus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
        <div class="body-message col-sm-12" style="background-color: white ; padding-bottom: 20px;">
          <div class="col-sm-5">
            <img class="img-responsive" src="https://flickerfone.com/assets/uploads/4358ea648f89f14a0c041381f1a6d74a.jpg">
          </div>
          <div class="col-sm-7">
            <h3>iphone 6s Plus  </h3>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span><span> (0 Responses)</span>
                    <br><br>
                     <h3>Price: N/A</h3>
                    <a href="https://flickerfone.com/product/iphone-6s-plus">
                    <button style="margin-top: 15px;margin-bottom: 15px;" class="btn sell_btn" type="button">View Product Details</button>
                    </a>

             </div>

            <div class="col-sm-12">
                
<div class="specs-wrapper">
            <div class="specification-title">Specifications:</div>
            <div class="specs-column">    <div class="specs-list"> <ul>  <li>
<span>Operating System:</span>iOS 9</li>  <li>
<span>Processor:</span> Dual-core 1.84 GHz </li>  <li>
<span>Memory:</span>2 GB RAM </li>  <li>
<span>Storage:</span>16/32/64/128 GB</li>  <li>
<span>Camera Resolution:</span>12/5 MP</li>  <li>
<span>Battery:</span> Non-removable Li-Po 2750 mAh battery </li>  <li>
<span>Display Size:</span>4.7 inches </li>  <li>
<span>Resolution:</span>1080 x 1920 pixels </li>  <li>
<span>Connectivity:</span>Wi-Fi 802.11, Bluetooth 4.0, NFC (Apple Pay only)</li>  <li>
<span>Height:</span>6.23 inches</li>  <li>
<span>Width:</span>3.07 inches</li>  <li>
<span>Depth:</span>0.29 inches</li>  <li>
<span>Weight:</span>192g</li>
</ul>
</div>
</div>
          </div>
                                    </div>



        </div>
      
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>










<div class="modal fade" id="iphone7Plus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
        <div class="body-message col-sm-12" style="background-color: white ; padding-bottom: 20px;">
          <div class="col-sm-5">
            <img class="img-responsive" src="https://flickerfone.com/assets/uploads/27ca27ba2d03ac9c76e9fec3087d2446.jpg">
          </div>
          <div class="col-sm-7">
            <h3>iphone 7 Plus  </h3>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span><span> (0 Responses)</span>
                    <br><br>
                     <h3>Price: N/A</h3>
                    <a href="https://flickerfone.com/product/iphone-7-plus">
                    <button style="margin-top: 15px;margin-bottom: 15px;" class="btn sell_btn" type="button">View Product Details</button>
                    </a>

             </div>

            <div class="col-sm-12">
                <div class="specs-wrapper">
            <div class="specification-title">Specifications:</div>
            <div class="specs-column">    <div class="specs-list"> <ul>  <li>
<span>Operating System:</span>10.0.1</li>  <li>
<span>Processor:</span>Quad-core 2.34 GHz</li>  <li>
<span>Memory:</span>3 GB RAM</li>  <li>
<span>Storage:</span>32/128/256 GB</li>  <li>
<span>Camera Resolution:</span>12 MP, 7 MP </li>  <li>
<span>Battery:</span> Non-removable Li-Ion 2900 mAh battery (11.1 Wh)</li>  <li>
<span>Display Size:</span>5.5 inches</li>  <li>
<span>Resolution:</span>1080 x 1920 pixels</li>  <li>
<span>Connectivity:</span>Wi-Fi 802.11, Bluetooth 4.2, NFC </li>  <li>
<span>Height:</span>6.23 inches</li>  <li>
<span>Width:</span>3.07 inches</li>  <li>
<span>Depth:</span>0.29 inches</li>  <li>
<span>Weight:</span>188g</li>
</ul>
</div>
</div>
          </div>
                                    </div>



        </div>
      
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>









<div class="modal fade" id="iphone8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
        <div class="body-message col-sm-12" style="background-color: white ; padding-bottom: 20px;">
          <div class="col-sm-5">
            <img class="img-responsive" src="https://flickerfone.com/assets/uploads/e8db43a3095331bfc74960373291807f.jpg">
          </div>
          <div class="col-sm-7">
            <h3>iphone 8  </h3>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span><span> (0 Responses)</span>
                    <br><br>
                     <h3>Price: N/A</h3>
                    <a href="https://flickerfone.com/product/iphone-8">
                    <button style="margin-top: 15px;margin-bottom: 15px;" class="btn sell_btn" type="button">View Product Details</button>
                    </a>

             </div>

            <div class="col-sm-12">
                <div class="specs-wrapper">
            <div class="specification-title">Specifications:</div>
            <div class="specs-column">    <div class="specs-list"> <ul>  <li>
<span>Operating System:</span>10.0.1</li>  <li>
<span>Processor:</span> Quad-core 2.34 GHz</li>  <li>
<span>Memory:</span>3 GB RAM</li>  <li>
<span>Storage:</span>32/128/256 GB</li>  <li>
<span>Camera Resolution:</span>12 MP, 7 MP </li>  <li>
<span>Battery:</span> Non-removable Li-Ion 1821 mAh battery (6.96 Wh)</li>  <li>
<span>Display Size:</span>4.7 inches</li>  <li>
<span>Resolution:</span>750 x 1334 pixels</li>  <li>
<span>Connectivity:</span>Wi-Fi 802.11, Bluetooth 5.0, NFC </li>  <li>
<span>Height:</span>5.45 inches</li>  <li>
<span>Width:</span>2.65 inches</li>  <li>
<span>Depth:</span>0.29 inches</li>  <li>
<span>Weight:</span>148g</li>
</ul>
</div>
</div>
          </div>
                                    </div>



        </div>
      
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="iphone8Plus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
        <div class="body-message col-sm-12" style="background-color: white ; padding-bottom: 20px;">
          <div class="col-sm-5">
            <img class="img-responsive" src="https://flickerfone.com/assets/uploads/8984e2758fddce2b48fa9858b15dacf0.jpg">
          </div>
          <div class="col-sm-7">
            <h3>iphone 8 Plus  </h3>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span><span> (0 Responses)</span>
                    <br><br>
                     <h3>Price: N/A</h3>
                    <a href="https://flickerfone.com/product/iphone-8-plus">
                    <button style="margin-top: 15px;margin-bottom: 15px;" class="btn sell_btn" type="button">View Product Details</button>
                    </a>

             </div>

            <div class="col-sm-12">
                <div class="specs-wrapper">
            <div class="specification-title">Specifications:</div>
            <div class="specs-column">    <div class="specs-list"> <ul>  <li>
<span>Operating System:</span>10.0.1</li>  <li>
<span>Processor:</span>Hexa-core</li>  <li>
<span>Memory:</span>3 GB RAM</li>  <li>
<span>Storage:</span>64/256 GB</li>  <li>
<span>Camera Resolution:</span>12 MP, 7 MP </li>  <li>
<span>Battery:</span> Non-removable Li-Ion 2691 mAh battery (10.28 Wh)</li>  <li>
<span>Display Size:</span>5.5 inches</li>  <li>
<span>Resolution:</span>1080 x 1920 pixels</li>  <li>
<span>Connectivity:</span>Wi-Fi 802.11, Bluetooth 5.0, NFC </li>  <li>
<span>Height:</span>6.24 inches</li>  <li>
<span>Width:</span>3.07 inches</li>  <li>
<span>Depth:</span>0.30 inches</li>  <li>
<span>Weight:</span>202g</li>
</ul>
</div>
</div>
          </div>
                                    </div>



        </div>
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

 <script type="text/javascript" src="js/bootstrap-slider.min.js"></script>
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(event) {
totalsize=0;
comesize=0;
froms = 0;
tos=0;
psort="";
productstart=0;
productend=8;
productmin=0;
productmax=0;
productcompany="";
productmodal="";
search = "";
function loadProducts(){
  if(productstart > getCookie("start")){
    setCookie("start", productstart, 1);
  }else{
    productstart = getCookie("start");
  }if(productend > getCookie("end")){
    setCookie("end", productend, 1);
  }else{
     productend =  getCookie("end");
  }
  $.ajax('main/listproducts.json', {
        type: 'GET',  // http method
        timeout: 10000,
        data: {

          start:productstart,
          end:productend,
          brand:productcompany,
          modal:productmodal,
          min:productmin,
          max:productmax,
          q:search,
          psort:psort
         },
        success: function (data, status, xhr) {
            var view = "";
            pcomesize = data.total;
            pfroms = data.from;
            ptos = data.to;

      if(data.data.length>0){

        if(data.total <= productend){
          $(".loadmore").hide();
        }
        for(var i =0;i<data.data.length;i++){
      view += `
          <div class="col-lg-4 col-md-6 col-sm-12" style="padding: 5px;">
               <div class=" hover01 div_box div_box_in">
               <figure style="min-height: 170px;"> <img src="`+site_url+"/thumbs/"+data.data[i].image+`" style="max-width: -webkit-fill-available;padding: 14%"> </figure>

                    <h4 style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;" data-toggle='tooltip' title='`+data.data[i].name+`'>`+data.data[i].name+`</h4><br>
                    <h4>`+data.data[i].price+`</h4>
                    </br>
                    <div style="font-size: 9px;">
                      <span class="fa fa-star`;
                      if(data.data[i].avg>0){
                       view += ` checked `;
                      }
                       view +=`"></span>

                      <span class="fa fa-star`;
                      if(data.data[i].avg>1){
                       view += ` checked `;
                      }
                       view +=`"></span>
                      <span class="fa fa-star`
                      if(data.data[i].avg>2){
                       view += ` checked `;
                      }
                       view +=`"></span>
                      <span class="fa fa-star `;
                      if(data.data[i].avg>3){
                       view += ` checked `;
                      }
                       view +=`"></span>
                      <span class="fa fa-star`;
                      if(data.data[i].avg==5){
                       view += ` checked `;
                      }
                       view +=`"></span><span> (`+data.data[i].total+` Responses)</span>

                      <button onClick="modal('main/quickview/%60%2bdata.data%5bi%5d.html',this)" style="margin-top: 5px; margin-right: -4px;"  class="btn btn_quick"  type="button">Quick Look</button>

                    </div>
                  </div>
            </div>`;

              }
            }else{
              view+="<img src='https://flickerfone.com/assets/images/noproduct.png' class='img-responsive'/>";
              $(".loadmore").hide();
            }
            $(".products").html(view);
            $('[data-toggle="tooltip"]').tooltip();

        },
        error: function (jqXhr, textStatus, errorMessage) {
                sa_alert('error', 'Unable to load Mobiles '+errorMessage,'error');
                console.log('Error' + textStatus);
                console.log('Error' + jqXhr);
                console.log('Error' + errorMessage);

        }
    });
$(".table_make > td").click(function(){
  $(".table_make > td.active").css("background","");
  $(".table_make > td").removeClass("active");


  $(this).addClass("active");
  $(".table_make > td.active").css("background","#f00");
});


}
loadProducts();
  $(".loadmore").click(function(){
    productend= Number(productend)+6;
    loadProducts();
  });
  $("#psorta").click(function(){

      psort = 1;

    loadProducts();
  });

  $("#psortb").click(function(){

      psort = 0;

    loadProducts();
  });
$("#qsearch").submit(function(){
  search = $("#qv").val();
  loadProducts();
  return false;
})
      if(window.get_width() >1150){
        totalsize=4;
      }else if (window.get_width() >900) {
        totalsize = 3;
      }else if (window.get_width() >700 ) {
        totalsize = 2;
      }else{
        totalsize = 1;
      }
      loadModels(0,totalsize);

      $(".ico-right").click(function(){
        var nfrom = Number(tos)+1;
        var nto= Number(tos)+Number(totalsize);
        //console.log(nfrom +"_"+ nto);
        if(nto <=comesize){


          loadModels(nfrom,nto);

        }else{
          nto = Number(comesize)+1;
          nfrom = nto - totalsize;

          loadModels(nfrom,nto);
        }
      });
      $(".ico-left").click(function(){
        var nfrom = tos-totalsize;
        var nto= Number(tos)-1;
        //console.log(nfrom +"_"+ nto);
        if(nfrom > 0){

          loadModels(nfrom,nto);
        }else{
          nfrom = 0;
          nto = totalsize;
          loadModels(nfrom,nto);
        }
      });
$('.modal').on('hidden.bs.modal', function () {
    $("body").css("padding","0px");

});


var slider = new Slider('#ex2', {
  //tooltip: 'always'
}).on('slideStop', function(data){
  productmin = data[0];
  productmax = data[1];

  loadProducts();
});
slider.on('slide', function(data){
    $(".pmin").val(data[0]);
    $(".pmax").val(data[1]);
});
function loadModels(from=0,to=4){

  $.ajax('https://flickerfone.com/main/listphones', {
        type: 'GET',  // http method
        timeout: 10000,
        data: {

          from:from,
          to:to,
          size:totalsize


         },
        success: function (data, status, xhr) {
            var view = "";
            comesize = data.total;
            froms = data.from;
            tos = data.to;

        for(var i =0;i<data.data.length;i++){
      view += `<div class="col-lg-3 col-md-4 col-sm-6" align="center">
                    <div class="col-lg-6 col-sm-12">
                      <img src="`+data.data[i].image+`" style="max-width:130px;" class="img-responsive">
                    </div>
                    <div class="col-lg-6 col-sm-12 innerdivs">
                      <div>
                      <h5 style="padding:3px;margin-top: 25px;height: 40px;"><b>`+data.data[i].name+`</b></h5>
                      <select style="max-width:110px;" onchange="updatedProductLoad('`+data.data[i].company+`',this.value)" class="select-css">
                          <option selected disabled>Model</option>`;
                    for(var j=0;j<data.data[i].models.length;j++){
                        view += `<option value="`+data.data[i].models[j].id+`">`+data.data[i].models[j].name+`</option>`
                      }


                view +=`</select>
                    </div>
                    </div>
                  </div>`;
              }
            $(".results").html(view);

            $('.results').slick({
              dots: false,
              infinite: false,
              speed: 500,
              slidesToShow: 4,
              slidesToScroll: 4,
              responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                  }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
              ]
            });

        },
        error: function (jqXhr, textStatus, errorMessage) {
                sa_alert('error', 'Unable to load Mobiles '+errorMessage,'error');
                console.log('Error' + textStatus);
                console.log('Error' + jqXhr);
                console.log('Error' + errorMessage);

        }
    });
}

var site_url = "https://flickerfone.com/"+"assets/uploads";
function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}


if(getCookie("position") > 0){
    setTimeout(function(){ $(window).scrollTop(getCookie("position")); }, 1000);

}
$(".dropdown-toggle").dropdown();
$(".pmax").change(function(){
    let vm =  $(".pmin").val();
    let vmx =  $(".pmax").val();

   $("#ex2").attr("data-slider-value","["+vm+","+vmx+"]");
   $("#ex2").attr("data-slider-min",vm);
   $("#ex2").attr("data-slider-max",vmx);
    slider.destroy();

    slider = new Slider('#ex2', {
  //tooltip: 'always'
    }).on('slideStop', function(data){
      productmin = data[0];
      productmax = data[1];
      loadProducts();
    });
    slider.on('slide', function(data){

        $(".pmin").val(data[0]);
        $(".pmax").val(data[1]);
    });

  productmin = vm;
  productmax = vmx;
  loadProducts();

});

  $(".pmin").change(function(){
    let vm =  $(".pmin").val();
    let vmx =  $(".pmax").val();

   $("#ex2").attr("data-slider-value","["+vm+","+vmx+"]");
   $("#ex2").attr("data-slider-min",vm);
   $("#ex2").attr("data-slider-max",vmx);
    slider.destroy();

    slider = new Slider('#ex2', {
  //tooltip: 'always'
    }).on('slideStop', function(data){
      productmin = data[0];
      productmax = data[1];
      loadProducts();
    });
    slider.on('slide', function(data){

        $(".pmin").val(data[0]);
        $(".pmax").val(data[1]);
    });

  productmin = vm;
  productmax = vmx;
  loadProducts();

});






 updatedProductLoad = function(company,val){
  productcompany = company;
  productmodal=val;
  loadProducts();
}
 modal = function(a,view){
  setCookie("position",$(window)['scrollTop']()+50,1);
  $.get(a,function(data){
    $(".modal-content").html(data);
    $('#myModal').modal('show');
  })
}

brand = function(id){
  productmodal  = "";
 productcompany =id;
 loadProducts();
}


//Document ready End
  });
</script>

@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->