<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >




  </head>
  <script src="{{ asset('js/jquery-2.1.3.min.js') }}" ></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- <link href="{{ asset('css/style.css')}}" rel='stylesheet' type='text/css' media="all"> -->
  <link href="{{ asset('css/mystyle.css') }}" rel='stylesheet' type='text/css' media="all">
  <link href="{{ asset('css/ProductDetail.css') }}" rel='stylesheet' type='text/css' media="all">
  <link href="{{ asset('css/template1/tabcontent.css') }}" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="{{ asset('js/ScrollJS2//style.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>

  <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/magnifier.css') }}">


  <link href="{{ asset('css/pagination.css') }}" rel="stylesheet" type="text/css">




 <style>
   #clickopinon{
cursor: pointer;
   }
 </style>

<body>



  <a href="#" id="scroll" style="display: none;"><span></span></a>
  @include('includes.header');

<br/>
<div class="container">
<div class="row">
  <div class="col-md-12 text-uppercase" style="color: gray;">
    HOME / {{ $product->category->title }} / {{ $product->Productbrand->name }} / {{ $product->name }}
  </div>
</div>


</div>


<br/>

<br/>


<div class="row" style="margin-top: 31px;">
  <div class="col-md-6" >

	@php $img1 = $product->image @endphp
      @php $img1_400 = '/storage/admin/images/product/thumbnail/400_'.$product->image @endphp
      @php $img1_700 = '/storage/admin/images/product/thumbnail/700_'.$product->image @endphp
    	@php $img2 = $product->dimage @endphp
    	@php $img3 = $product->dimage1 @endphp

      @php $img1_100 = '/storage/admin/images/product/thumbnail/100_'.$product->image @endphp
      @php $img2_100 = '/storage/admin/images/product/thumbnail/100_'.$product->dimage @endphp
      @php $img3_100 = '/storage/admin/images/product/thumbnail/100_'.$product->dimage1 @endphp

 <!-- <div class="loupe-widget js-loupe">
  <div class="loupe-widget__loupe js-loupe-element"></div>
  <div id="image_container">
    <img id="myimage" style="    width: 100%;" class="loupe-widget__image js-loupe-image" src="{{asset($img1_400)}}" alt="image" data-image-full="{{asset($img1_700)}}"/>
  </div>
  
</div> -->

<div>
    <a  class="magnifier-thumb-wrapper" href="http://en.wikipedia.org/wiki/File:Starry_Night_Over_the_Rhone.jpg">
        <img id="thumb"
           src="{{ asset($img1_400)}}">
    </a>
    <div class="magnifier-preview" id="preview" style="width: 200px; height: 133px">Starry Night Over The Rhone<br>by
        Vincent van Gogh</div>
</div>


<div >
  













<div class="container">


  <div class="row" >
  
    <div class="col-md-12 col-lg-12 col-sm-12" id="slickBtnFor">
    
      <div class="autoplayFeatures">
        
         @if(!empty($img1))

          <figure  >
            <img class="productImgs" data-id="{{ $product->image }}" class="img-thumbnail" src="{{ asset($img1_100)}}" alt="Trulli" style="width:100%;height: 100px;">
          </figure>

        @endif

        @if(!empty($img2))

        	<figure  >
	          <img class="productImgs" data-id="{{ $product->dimage }}" class="img-thumbnail" src="{{ asset($img2_100)}}" alt="Trulli" style="width:100%;height: 100px;">
	        </figure>

      	@endif




        @if(!empty($img3))

        	<figure  >
	          <img class="productImgs" data-id="{{ $product->dimage1 }}" class="img-thumbnail" src="{{ asset($img3_100)}}" alt="Trulli" style="width:100%;height: 100px;">
	        </figure>

      	@endif
       
        
        </div>
      
      </div>


    
    </div>


  </div>


</div>
  </div>

  <div class="col-md-6" style="    margin-top: -70px;color: black !important;">


   <h4 style="font-size: 18px !important;">{{ ucwords($product->name) }}</h4>
 <p>{{ $product->storage }}</p>




 <ol type="circle"> 
  @if($product->os !='') <li>{{ $product->os }}</li> @endif

  @if($product->processor !='') <li>{{ $product->processor }}</li> @endif

  @if($product->memory !='') <li>{{ $product->memory }}</li> @endif
  @if($product->camera !='') <li>{{ $product->camera }}</li> @endif
  @if($product->size !='') <li>{{ $product->size }}</li> @endif
  @if($product->resolution !='') <li>{{ $product->resolution }}</li> @endif
  @if($product->connectivity !='') <li>{{ $product->connectivity }}</li> @endif
  @if($product->battery !='') <li>{{ $product->battery }}</li> @endif
  @if($product->height !='') <li>{{ $product->height }}</li> @endif
  @if($product->width !='') <li>{{ $product->width }}</li> @endif
  @if($product->breif_weight !='') <li>{{ $product->breif_weight }}</li> @endif

</ol>
<input type="hidden" value="{{ $product->id }}" id="product_id">

<style type="text/css">
	.color_active{ background: #42bd41 !important; color: white !important; }
</style>
<hr style="width: 80%;" />

@if($product->variation_colors->count()>0)

	<p style="font-weight: bold;">Color <font style="" class="colr"> *</font></p>

	<div style="height: 100px; width: 100%;">
		@php $productColor = '' @endphp
		@php $i = 1 @endphp
		@foreach($product->variation_colors as $color)
			
			@if($productColor != $color->color)
				<div class="@if($i==1) color_active @endif productColorClass" id="mobviebtnsabove" style="width: 20%;  border: 2px #d3d3d3 solid ; cursor: pointer;float: left; text-align: center;    padding: 5px 10px 5px 10px;margin-right: 6px;
				  border-radius: 6px;">
				  <button id="mobviebtns" class="colorBtns" type="button" data-id="{{ $color->color }}" style="text-decoration: none; outline: none;background: none; border:none; cursor: pointer;    color: black;  font-weight: 500;">{{ ucwords($color->color) }}</button>
				</div>

			@endif
			@php $productColor = $color->color; $i++; @endphp
		@endforeach
	  	&nbsp;&nbsp;&nbsp;
	</div>	

@endif





<p style="font-weight: bold;">Storage <font style="" class="colr"> *</font></p>


<div class="row">
  <div class="col-md-3">
    <div class="form-group">
       
      <select class="form-control" id="colorStorage" style="font-weight: bold !important; height: 35px !important; ">
       
      </select>
    </div>
  </div>
  <div class="col-md-2">
   
  </div>

   <div class="col-md-3">


    
    <a style="position: absolute ;text-decoration: none ;  border: 2px #d0c6c6 solid;padding: 2px 20px 7px 20px;color: white !important; background-color: #42bd41; border-radius: 6px; height: 35px !important;cursor: pointer; " href="{{ route('AdviceComparison',$product->id) }}">COMPARE</a>

   </div>


   <div class="col-md-4" id="comparebtm">
     
   </div>

</div>



<hr style="width: 80%;" />



<div class="row">
  <div class="col-md-4">
<h3> <sup>*</sup> <font style="color: #0188cc !important" > PKR</font><br/>
<font class="StoragePrice" style="    font-size: 40px;
color: #0188cc;
margin-left: 15px;">{{ $product->price }}</font>
</h3>
  </div>
  <div class="col-md-8">
   <p>
    * Disclaimer: All prices on website are subject to change without notice. While we make every effort to provide you with the latest prices.
   </p>
  </div>
   



  </div>






</div>

</div>








<div class="row">

  <div class="col-md-12">

    <div style=" margin: 0 auto; padding: 120px 0 40px;">
      <ul class="tabs" data-persist="true">
          <li><a href="#view1">TECHNICLE SPECS</a></li>
          <li><a href="#view2">OPINIOS</a></li>
          <li><a href="#view3">VEDIOS</a></li>
          <li><a href="#view4">REVIEWS</a></li>

            
      </ul>
      <div class="tabcontents">
         


         <div id="view1">
         
         
 

<div class="row">
<!-- <div  style="width: 16%; float: left;  background-color: rgb(227, 231, 231); "></div>
 -->




 <div style="width: 19%;  float: left;">


<div style="height: 3700px; "  id="MainHeightOnDesktop">

    <table id="customers">
        <tr>
            <td class="colblue tdBlockOnMobhead ">Network</td>
            <td class="tdBlockOnMobSubhead TechOnDeskTop" style="border-bottom: 4px #eee solid; "> Technology</td>
        </tr>
    </table>


  




            <table id="customers">
                <tr>
                    <td class="colblue tdBlockOnMobhead LaunchWidthOnlyOnDesk" >LAUNCH</td>
                    <td class="tdBlockOnMobSubhead" style="display: block;"> Announced</td>
                    <td class="StatheadOnMob" style="display: block;     border-bottom: 5px #eeeeee solid; font-weight: 600; "> Status</td>
                </tr>
            </table>

                <!-- <table id="customers">
                    <tr>
                        <td class="colblue tdBlockOnMobhead">BODY</td>
                        <td class="tdBlockOnMobSubhead" style="display: block;"> Dimensions</td>
                        <td class="StatheadOnMob" style="display: block;"> Weight</td>
                        <td class="StatheadOnMob" style="display: block;"> Build</td>
                        <td class="StatheadOnMob" style="display: block;"> SIM</td>
                    </tr>
                </table> -->

                    <table id="customers">
                        <tr>
                            <td class="colblue BodyHeadMob widthOnDesk">Body</td>
                            <td class="DimnOnMobSubhead" style="display: block;font-weight: 600;"> Dimensions</td>
                            <td class="BodySts1" style="display: block;font-weight: 600;"> Weight</td>
                            <td class="BuildSts1" style="display: block;font-weight: 600;"> Build</td>
                            <td class="SIMSts1" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600; "> SIM</td>
                        
                        </tr>
                    </table>




                    <table id="customers">
                      <tr>
                        <td class="colblue BodyHeadMob widthOnDesk">Display</td>
                        <td class="DType" style=""> Type</td>
                        <td class="Dsize" style="display: block;font-weight: 600;"> Size</td>
                        <td class="Dresolution" style="display: block;font-weight: 600;"> Resolution</td>
                        <td class="Dprotect" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600; "> Protection</td>
                    
                      </tr>
                    </table>








<table id="customers">
  <tr>
    <td class="colblue BodyHeadMob widthOnDesk">Plate-<br/>Form</td>
    <td class="DType" style=""> OS</td>
    <td class="Dsize" style="display: block;font-weight: 600;"> Chipset</td>
    <td class="Dresolution" style="display: block;font-weight: 600;"> CPU</td>
    <td class="plateGpu" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600; "> GPU</td>

  </tr>
</table>



<table id="customers">
  <tr>
    <td class="colblue BodyHeadMob widthOnDesk">Memory</td>

    <td class="cradslotOnMob" style="display: block;font-weight: 600;"> Card slot</td>
    <td class="Dresolution" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600;"> Internal</td>


  </tr>
</table>



<table id="customers">
  <tr>
    <td class="colblue BodyHeadMob widthOnDesk">Main-<br/>Camera</td>

    <td class="Cameratriple" style="display: block;font-weight: 600;"> Triple</td>
        <td class="CameraFeaturesOnMob" style="display: block;font-weight: 600;"> Features</td>
    <td class="CameraVedios" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600;"> Video</td>


  </tr>
</table>


<table id="customers">
  <tr>
    <td class="colblue BodyHeadMob widthOnDesk">Selfie-<br />Camera</td>

    <td class="SelfieSingle" style="display: block;font-weight: 600;"> Single</td>
    <td class="SeliecamFatureMob" style="display: block;font-weight: 600;"> Features</td>
    <td class="CameraVedios" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600;"> Video</td>


  </tr>
</table>



<table id="customers">
  <tr>
    <td class="colblue BodyHeadMob widthOnDesk">Sound</td>

    <td class="SelfieSingle" style="display: block;font-weight: 600;"> Loud-<br/>speaker</td>
    <td class="SeliecamFatureMob" style="display: block;font-weight: 600;"> 3.5mm jack</td>
    <td class="CameraVedios" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600;"> Mic</td>


  </tr>
</table>







<table id="customers">
  <tr>
    <td class="colblue BodyHeadMob widthOnDesk">COMMS</td>
    <td class="DType" style=""> WLAN</td>
    <td class="Commsblutoth" style="display: block;font-weight: 600;"> Bluetooth</td>
    <td class="Dresolution" style="display: block;font-weight: 600;"> GPS</td>
        <td class="Dresolution" style="display: block;font-weight: 600;"> Radio</td>
            <td class="Dresolution" style="display: block;font-weight: 600;"> NFC</td>
    <td class="plateGpu" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600; "> USB</td>

  </tr>
</table>


<table id="customers">
  <tr>
    <td class="colblue BodyHeadMobForFeatureSensor widthOnDesk">Features</td>
   
    <td class="FeatureSensor" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600; "> Sensors</td>

  </tr>
</table>



<table id="customers">
  <tr>
    <td class="colblue BatteryOneMob widthOnDesk">Battery</td>
  <td class="SeliecamFatureMob" style="display: block;font-weight: 600;"> &nbsp; </td>
    <td class="batteryCarge" style="display: block;font-weight: 600; height: 75px; "> Charging</td>
    <td class="SeliecamFatureMob" style="display: block;font-weight: 600;"> talk Time</td>
    <td class="MusicPlayOnMob" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600;height: 75px;"> Music Play</td>


  </tr>
</table>









<table id="customers">
  <tr>
    <td class="colblue BodyHeadMobForFeatureSensor widthOnDesk">MISC</td>

    <td class="MiscColor" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600; "> Colors</td>

  </tr>
</table>


<table id="customers">
  <tr>
    <td class="colblue BodyHeadMobForFeatureSensor widthOnDesk">&nbsp;</td>

    <td class="" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600; height: 71px; "> Price & Storage</td>

  </tr>
</table>


</div>

</div>


<div id="ColOnMobileFirst" style="width: 54%;  float: left; ">










  <div style="height: 1110; width: 100%;">





    <div style="height: 800px;" id="TableFonSizeOnDeskTop">



      <div class="TopheightOnMob" style="height: 0px; width: 100%;"></div>



      <div class="Net1OnMob NTone" style=" ">GSM / HSPA / LTE1
      </div>

      <div class="lanchSpcOn" style="height: 0px; width: 100%;"></div>


      <div class="Lannounced Lannone">
        2018, September 15
      </div>


      <div  class="StatusOnMob Lannsts">
Available. Released 2019, September
      </div>


      <div class="topDisplaySpconmob" style="height: 0px; width: 100%;"></div>

      <div class="DimensionsMob BodyDimension" style="  " class="StatusOnMob">
        175.9 x 78.1 x 9 mm (6.49 x 3.04 x 0.42 in) 1
      </div>



      <div style="  " class="bodyweight2 BodyWeight">
        226 g (7.97 oz)
      </div>



      <div style="    " class="builWeigt2 BodyBuild">
Front/back glass, stainless steel frame 2
      </div>



      <div style="   
" class="simweight2 BodySim">
        Dual SIM (Nano-SIM, dual stand-by)
      </div>











    <div class="topDisplaySpconmob" style="height: 0px; width: 100%;"></div>
    
    <div class="DimensionsMob DispType" style="   
    " class="StatusOnMob">
  Super Retina XDR OLED capacitive touchscreen, 16M colors
    </div>
    
    
    
    <div style="    
    " class="DisplayType DispSize">
      6.5 inches, 102.9 cm 2 (~83.7% screen-to-body ratio)
    </div>
    
    
    
    <div style="  " class="DisplayReslution DispReso">
      1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)
    </div>
    
    
    
    <div style="   " class="DispPro">
  Scratch-resistant glass, oleophobic coating
  800 nits max brightness
  Dolby Vision
  HDR10
  Wide color gamut
  True-tone
  120Hz touch-sensing
    </div>
















<div class="topPlateformSpconmob" style="height: 0px; width: 100%;"></div>

<div class="DimensionsMob PlateOSS" style="     " >
  iOS 13, upgradable to iOS 13.2
</div>



<div style="     " class="DisplayType PlateChips">
Apple A13 Bionic (7 nm+)
</div>



<div style="    " class="DisplayReslution PlateCpU">
  Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)
</div>



<div style="     " class="PlateGpUOne">
  Apple GPU (4-core graphics)
</div>













<div class="topMemorSpconmob" style="height: 0px; width: 100%;"></div>

<div class="DimensionsMob  MemoryCardone" >
  No
</div>



<div style="    " class="mem0ryInt MemryIntrnl">
  64/256/512GB 4GB RAM1
</div>






<div class="topMainCameraSpconmob" style="height: 0px; width: 100%;"></div>

<div class="CameraTripple CamreTripp" style="    " >
  12 MP, f/1.8, 26mm (wide), 1/2.55", 1.4B5m, dual pixel PDAF, OIS
  12 MP, f/2.4 52mm (telephoto), 1/3.4", 1.0B5m, PDAF, OIS
  2x optical zoom 12 MP, f/2.4, 13mm (ultrawide)
</div>

<div class="CameraFeature CamFeaturOne" style="     " >
  Quad-LED dual-tone flash, HDR (photo/panorama)
</div>

<div style="      " class="TrpleVed camraVedioOne" >
  2160p @ 24/30 / 60fps, 1080p @ 30 / 60 / 120 / 240fps, HDR, stereo sound rec.
</div>











<div class="topMainCameraSpconmob" style="height: 0px; width: 100%;"></div>

<div class="CameraSinleNexxt SelfiSinle" style="">
  12 MP, f/2.2, 23mm (wide)
  SL 3D camera
</div>

<div class="CameraSingleHdr SelfiHdrOne" style="   ">
  HDR
</div>

<div style="      " class="TrpleVed SelfieVedoOne">
    2160p@24/30/60fps, 1080p@30/60/120fps, gyro-EIS
</div>

<div class="AboveSoundbarSpce" style="height: 0px; width: 100%;"></div>

<div class="CameraSinleNexxt SoundLSp" style="    ">
Yes, with stereo speakers
</div>

<div class="CameraSingleHdr SoundmmJack" style="     ">
  No
</div>

<div style="     " class="TrpleVed SoundMicOne">
  Active noise cancellation with dedicated mic
  Dolby Atmos, Dolby Digital Plus
</div>





<div class="topCommsfirstSpconmob" style="height: 0px; width: 100%;"></div>

<div class="DimensionsMob CommsWlan" style="      " class="StatusOnMob">
  Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot
</div>



<div style="   " class="DisplayType CommsBluetooth">
5.0, A2DP, LE
</div>



<div style="    " class="DisplayReslution CommGPSOne">
  Yes, with A-GPS, GLONASS, GALILEO, QZSS
</div>

<div style="     " class="DisplayReslution CommsRadioOne">
No
</div>

<div style="     " class="DisplayReslution CommsNFC">
YES
</div>

<div style="   " class="CommsUsB">
  2.0, proprietary reversible connector
</div>













<div class="topFeaturSensoronmob" style="height: 0px; width: 100%;"></div>

<div style="   " class="FeatureSensorOne">
  Face ID, accelerometer, gyro, proximity, compass, barometer
  Siri natural language commands and dictation1
</div>





<div class="topFeaturSensoronmob" style="height: 0px; width: 100%;"></div>

<div style="     " class="batteryTalkTime2 BatteryEmpty">
  Non-removable Li-Ion 3969 mAh battery (15.04 Wh)
</div>
<div style="   " class="DBatteryChargingOne battryChargOne">
Fast battery charging 18W: 50% in 30 min
USB Power Delivery 2.0
Qi wireless charging
</div>



<div style="    " class="batteryTalkTime2 BattTalkTime">
Up to 20 h (multimedia)
</div>
<div style="       " class="BattryMusicPly">
Up to 80 h
</div>













<div class="topFeaturSensoronmob" style="height: 0px; width: 100%;"></div>

<div style="      " class="MiscColorOne">
Space Gray, Silver, Gold, Midnight Green (matte colors)
</div>



<div class="topFeaturSensoronmob" style="height: 0px; width: 100%;"></div>

<div style="     " class="MiscPricStrg">
About PKR 210000(64GB 4GB),PKR 220000(128GB 4GB),PKR 230000(256GB 4GB)
</div>



    </div>
  </div>




</div>









<!-- 


<div  style="width: 5%; float: left; "></div> -->
</div>

         
         </div>
          
          <div id="view2">
             


<div class="row">
<div id="view2zeroAtMobile"  style="width:20%; float:left "></div>

<div id="view2FullAtMobile"  style="width:60%; float:left " >



            <div class="container">
          
            <div class="row"  style="    background-color: #f0f0f0;   border-bottom: 2px #c4c0c0 solid;  ">
              <div class="col-md-6" style="height: 81px;padding-top: 27px;" >
              <a id="clickopinon"  style="  background-color: #4a88c2; 
              color: white;
              padding: 10px 18px 10px 18px; text-decoration: none;
              border-radius: 4px;">POST YOUR OPINIONS </a>
              </div>

              
              <div class="col-md-2" id="pages" style="color: black; font-size: 20px; text-align: right; padding-top: 19px;        " >  Pages : </div>


              <div class="col-md-4" style="color: black; font-size: 20px ; padding-top: 19px;              " >
              
              
   
                <div id="pagination-demo1"></div>
  
  
                </div>
             
            </div>

     
     
     
     
     
     
     
     <div class="row" id="OpinonBox" style="display: none">
       <div class="col-md-12" style="background-color: #f0f0f0; border: 1px black solid " >
          <h5>Post Your Opinion</h5>
          <!-- <div class="row"> 
            <div class="col-md-6" ><p style="text-align:left">Not Logged In</p></div>
             <div class="col-md-6" ><p  style="text-align:right"><button>LOGIN</button></p></div>
          </div> -->
        <hr/>


        <form action="{{ route('ProductOpinion') }}" method="post">
            @csrf
            <input type="hidden" id="user_id" name="user_id" value="@if(!empty(Session::get('user')->id)) {{Session::get('user')->id}} @endif">
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <label>Your nickname (optional)</label><br/>
            <input type="text" id="uname" name="nick_name" tabindex="101" maxlength="20" autocomplete="off" style="width:100%">

            <br/>
            <br/>
              <!-- <div class="row"> 
                <div class="col-md-6" ><p style="text-align:left">&nbsp;</p></div>
                 <div class="col-md-6" ><p  style="text-align:right"><button>SignUp</button></p></div>
              </div> -->

            <label>Your Comment</label><br/>
              <textarea name="comment" rows="4" cols="50" style="width:100%; border-color:#dfdfdf "  spellcheck="false"></textarea>
              <div class="row"> 
                <div class="col-md-6" ><p style="text-align:left">@if(empty(Session::get('user')->id)) You are not login please login first @endif</p></div>
                 <div class="col-md-6" >
                   
                  <p  style="text-align:right" class="submit_area">
                      @if(!empty(Session::get('user')->id))
                           <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                      @else
                          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Login</button>
                         <!--  <a href="/Login" class="btn btn-primary">Sign Up</a> -->
                      @endif
                   
                  </p>
                </div>
              </div>
            </form>

            <!-- Modal -->
              <div id="myModal" class="modal fade" role="dialog" style="margin-top: 5%;">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" style="color: black;">Sign in</h4>
                        
                    </div>
                      <div class="modal-body">
                        <div class="row"><p class="alert alert-warning ErrorMsg"></p></div>
                        <form method="post">
                          @csrf
                          <div class="form-group">
                              <label class="info-title">Email</label>
                              <input type="text" name="login_email" id="username" class="form-control unicase-form-control text-input" value="{{ old('login_email') }}" required placeholder="Email">
                          </div>
                          <div class="form-group">
                              <label class="info-title">Password</label>
                              <input type="password" id="password" name="login_password" class="form-control unicase-form-control text-input" placeholder="Password" value="">
                          </div>  

                          <button type="button" class="btn-upper btn subbtn checkout-page-button modal_login">Login</button>
                          <a href="/password/reset" class=" col-md-offset-2 btn-upper btn subbtn checkout-page-button" style="background: #e30070;">Forget Password</a>


                        </form>
                       
                   
                    
                      </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default modal_close" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                </div>
              </div>
              <!-- End Modal -->          

       </div>

     </div>
     
          </div>




            <div class="container">

            <div class="row"  style="    background-color: #f0f0f0;   border-bottom: 5px #efefef solid; border-bottom: 1px #e3e2db solid;  ">
            
            
              <div class="col-md-6" style="height: 81px;padding-top: 27px;" >


<div style="float: left; width: 50%; height: 100%; "><input id="srchopnon" type="search" name="srch" style="height: 42px;width: 97%" /></div>
<div style="float: left; width: 50%; height: 100%; "><a href="#"><p id="srchoption" style="  
  height: 43px;
  font-size: 1vw;
  text-align: center;  background-color: #f9f9f9;   color: #0b0a0a;  padding: 10px 18px 10px 18px; text-decoration: none; border-radius: 4px;   font-weight: 700; border: 1px black solid;">SEARCH OPINIONS </p></a></div>





   
             
            
            
            </div>

              
              <div id="sortBy" class="col-md-3" style="color: black; font-size: 20px; text-align: right; padding-top: 19px;        " >  Sort By: </div>


              <div class="col-md-3" style="color: black; font-size: 20px ; padding-top: 19px;              " >
              
              
   

              <div class="form-group">
       
                <select class="form-control" id="sel1" style="font-weight: bold !important;">
                  <option style="font-weight: bold !important;">Newest First</option>
                  <option>Older First</option>
                  
                </select>
              </div>
  
  
                </div>
             
            </div>


            </div>


        <div class="container">

          @if($product->opinions->count())
            @foreach($product->opinions as $row)
                <div class="row">
                  <div   style=" height: 400px;  border: 1px #c4c0c0 solid;   margin-top: 17px;  background-color: #f0f0f0;   border-bottom: 5px #efefef solid; border-bottom: 1px #e3e2db solid;  ">
                  
                    <div style="height: 20%; width: 100%; background-image: linear-gradient(to top right, #e5817a, #f0f0f0); ">
                    
                      <div  style="  width: 8% ;height: 100%;  float: left; text-align: center;"><p  id="Sresponsive" style="width: 100%;    font-size: 3.2vw;  color: white;   ">S</p> </div>
                      <div style="  width: 92% ;height: 100%; background-color: #f0f0f0; float: left;">
                      
                        <div style="height: 60%; width: 100%;  color: black !important;">
                        
                          <div id="setSobercatOnMob" style="height: 100%; width: 20%;  float: left; color: black;    font-size: 2vw;    font-weight: 700;">
                            
                            
                            <div style="height: 100%; width: 92%; float: left;     text-align: right;"> <p class="SoberOnMob" style="width: 100%;  font-weight: 400; font-size: 2vw ">SoberCat </p></div>
                            <div style="height: 100%; width: 8%;  float: left;">
                              <img   style="width: 100%; height: auto;" src="{{ asset('storage/images/headerimg/ic_check_circle_black_18dp.png')}}" />
                            
                            </div>
                          
                          </div>
                          
                          <div id="set55atmob" style="height: 100%; width: 45%;  float: left;">

                          </div>
                         
                         
                          <div id="settimepnMob" style="height: 100%; width: 35%;  float: left;float: left; font-size: 20px;  font-weight: 600;"> 
                            <!-- <img   style="width: 100%; height: auto;" src="{{ asset('storage/images/headerimg/ic_query_builder_black_18dp.png')}}" /> 
                            20 Aug 2020 
                            <img style="width: 10%;"src="{{ asset('storage/images/headerimg/ic_room_black_18dp.png')}}" /> 
                            0Cp  -->
                            <div style="height: 100%; width: 10%; float: left;"><img class="changeClockHeihtOnMob"  style="width: 96%; height: 25px;" src="{{ asset('storage/images/headerimg/ic_query_builder_black_18dp.png')}}" /></div>

                            <div style="height: 100%; width: 60%; float: left;"><p id="aug20onmob" style="width: 100%; font-size: 1.5vw;margin-top: 2px;">20 Aug 2020</p></div>

                            <div style="height: 100%; width: 10%; float: left;text-align: right; ">  <img class="LocOnMob" style="height:19px" src="{{ asset('storage/images/headerimg/ic_room_black_18dp.png')}}" /> </div>
                            <div style="height: 100%; width: 20%; float: left; text-align: left;"><p id="zeroCpOnMobile" style="width: 100%; font-size: 1.4vw;">0Cp</p></div>


                          </div>
                        


                          
                        </div>
                        <div style="height: 40%; width: 100%; background-color: #ffffff;text-decoration: underline; ">
                          
                        <div style="width: 10%; height: 100%;float: left; text-align: right; ">
                          <img  style="width: 35%;  height: 16px;   margin-top: 10px;" src="{{ asset('storage/images/headerimg/download__1_-removebg-preview (2).png')}}" /> 
                        </div>


                      
                        <div id="vibiresponsive" style="width: 20%; height: 100%;float: left;"><p id="vibiatmob" style="width: 100%;    font-size: 1.5vw; text-decoration: underline;">vibi.18 Aug 2020</p></div>
                        <div style="width: 70%; height: 100%;float: left;"></div>
                        </div>
                      
                      
                      </div>
                    </div>
                    <div style="height: 70%; width: 100%; background-color: #81c5ec;">
                    
                      <div style="  width: 8% ;height: 100%;  float: left; text-align: center;background-color: white;">
                        
                        <p> <img style="width: 25%; height: auto;" src="{{ asset('storage/images/headerimg/ic_speaker_notes_black_18dp.png')}}"  /> 6</p>

                      </div>
                    
                      <div style="  width: 92% ;height: 100%; background-color: #f7f7f7; float: left;">
                      
                        <div style="height: 70%; width: 100%;  color: black !important;">
                        <p id="LoremResp" style="font-size: 1.1vw;  padding: 33px;  ">{{ $row->comment }}</p>
                        </div>

                        <div style="height: 30%; width: 100%; background-color: #ffffff; ">
                          <p class="BoldPara" style="    font-size: 1.4vw;
                          font-weight: 500;">
                            Turning off truetons should solve, with true tones on the display looks yellowwish...
                          </p>
                        </div>
                      </div>
                    </div>
                    <div style="height: 10%; width: 100%; background-color: white;">
                    
                      <div id="RatingMob" style="height: 100%; width: 30%;  float: left;"> 
                    
                      <div class="settRatingMob" style="height: 100%; width: 40%;  float: left;">
                      <p id="RatingZero" style="width: 100%;font-size: 1.5vw; text-align: center;">Rating 0</p> </div>
                   
                   
                      <div style="height: 100%; width: 20%;  float: left;"> </div>
                   
                      <div style="height: 100%; width: 40%;  float: left;"> 
                      
                        <a href="#up" style="text-decoration: none;">  <img  style="width: 26%; height: auto;" src="{{ asset('storage/images/headerimg//ic_keyboard_arrow_up_black_18dp.png')}}" /> </a> | <a href="#down" style="text-decoration: none;">  <img  style="width: 26%; height: auto;" src="{{ asset('storage/images/headerimg/ic_keyboard_arrow_down_black_18dp.png')}}" /> </a>
                      
                      </div>
                    
                      
                      </div>

                      <div id="ReplyResp" style="height: 100%; width: 50%; float: left;"> </div>
                      <div id="replybtnMobile" style="height: 100%; width: 13%;  float: left;"> <a href="#" style="text-decoration: none;"> <p id="replyomgresponsive" style="    font-size: 1.5vw;        "><img style="width: 26%; height: auto;" src="{{ asset('storage/images/headerimg//left-curve-arrow-pngrepo-com.png')}}" /> Reply</p></a> </div>
                    
                    </div>
                
                  </div>

                </div>
            @endforeach
          @else
            no opinion available
          @endif
        
        </div>

</div>



<div id="view2MobileZero" style="width:20%; float:left " ></div>
</div>

          </div>





          <div id="view3">
           
              @if($product->video_link !='')
                  {!! $product->video_link !!}
              @else
                <h5>No Video Available</h5>
              @endif

            
                                                          
          </div>




          <div id="view4">
            <h5>No Reviws Availabla</h5>       
                                                          
          </div>

        </div>
      </div>
  </div>


  </div>
</div>




<br/>

@include('includes.footer')
 
</body>


<!-- 
<script src="js/jquery-slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script> -->


<script>
  $('.ErrorMsg').hide();
	function colorStorage(id,color)
	{
		$.ajax({
			url:"{{ route('ColorFilterStorage') }}",
			type:"get",
			data:{id:id,color:color},
			success:function(data){
				$('#colorStorage').html(data);	
			}
		});
	}

	$(document).ready(function(){
		if($('.productColorClass').hasClass('color_active'))
		{
			colorStorage($('#product_id').val(),$('.color_active').children('.colorBtns').data('id'));	
		}
	});

	$('.productColorClass').click(function(){
		$('.productColorClass').removeClass('color_active');
		$(this).addClass('color_active');
	});

  $('.modal_login').click(function(){
    var email = $('#username').val();
    var pass = $('#password').val();
    var token = '{{ csrf_token() }}';
    var btn_html = '<button type="submit" class="btn btn-primary waves-effect waves-light save_btn">Submit</button>';
    $.ajax({
      url:"{{ route('UserModalLogin') }}",
      type:"post",
      data:{_token:token,login_email:email,login_password:pass},
      success:function(data){
        if(data.status=="")
        {
          $('#user_id').val(data.id);
          $('.modal_close').click();
          $('.submit_area').html(btn_html);
        }
        else{
            $('.ErrorMsg').show();
            $('#username').val(data.email);
            $('#password').val('');
            $('.ErrorMsg').text(data.msg);
        }
      }
    });
});

	$('#colorStorage').change(function(){
		var storage = $(this).val();
		var id = $('#product_id').val();
		var color = $('.color_active').children('.colorBtns').data('id')
		$.ajax({
			url:"{{ route('StorageFilterPrice') }}",
			type:"get",
			data:{id:id,color:color,storage:storage},
			success:function(data){
				$('.StoragePrice').html(data);	
			}
		});
	});

	$('.colorBtns').click(function(){ colorStorage($('#product_id').val(),$(this).data('id')); });

  function myFunction() {
      shoediv();
  
      var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUL");
      li = ul.getElementsByTagName("li");
      for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByTagName("a")[0];
          txtValue = a.textContent || a.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
              li[i].style.display = "";
          } else {
              li[i].style.display = "none";
          }
      }
  
      
  }
  </script>
  
  
  
  
  
  
  
  
  
  
  
  <script>
      function shoediv(){
         
          document.getElementById('myUL').style.display = 'block';
      }
  
  
  
      function hideagain(){
          document.getElementById('myUL').style.display = 'none';
      }
  </script>
  
  
  
  
<script>








$(document).ready(function(){
       $('.autoplayFeatures').slick({
 slidesToShow: 4,
 slidesToScroll: 1,
  autoplay: true,
 autoplaySpeed: 3000,
 pauseOnHover:true,

 dots: true,
 responsive: [
     {
       breakpoint: 500,
       settings: {
       slidesToShow: 2,
       slidesToScroll: 1,
       }
     }
   ]  
 // variableWidth: true
});
});







$(function(){
   $('#shopBtn').attr('href','#scrollTo');
});



function image1ReplaceOnClick1(){

//   document.getElementById("myimage").srcset = "{{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-184389384.jpg')}}";
//   document.getElementById("myresult").style.backgroundImage = "url({{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-184389384.jpg')}})";
}


// function image1ReplaceOnClick2(){

// document.getElementById("myimage").srcset = "{{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-184389619.jpg')}}";
// document.getElementById("myresult").style.backgroundImage = "url({{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-184389619.jpg')}})";
// }


// function image1ReplaceOnClick3(){

// document.getElementById("myimage").srcset = "{{ asset('storage/images/KHIPSE264BLK_4.jpg')}}";
// document.getElementById("myresult").style.backgroundImage = "url({{ asset('storage/images/KHIPSE264BLK_4.jpg')}})";
// }


// function image1ReplaceOnClick4(){

// document.getElementById("myimage").srcset = "{{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-packaging-new-black-iphone-se-multinational-company-182969056.jpg') }}";
// document.getElementById("myresult").style.backgroundImage = "url({{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-packaging-new-black-iphone-se-multinational-company-182969056.jpg')}})";
// }


// function image1ReplaceOnClick5(){

// document.getElementById("myimage").srcset = "{{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-193162726.jpg')}}";
// document.getElementById("myresult").style.backgroundImage = "url({{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-193162726.jpg')}})";
// }


 

</script>

  
<script type="text/javascript" src="{{ asset('slick/slick.min.js')}}"></script>
        
<script type="text/javascript" src="{{ asset('slick/jquery3.2.1.js')}}"></script>
  
<script type="text/javascript" src="{{ asset('slick/slick.js')}}"></script>
 



<script  src="{{ asset('js/tabcontent.js')}}"></script>
  <script  src="{{ asset('js/Event.js')}}"></script>
    <script  src="{{ asset('js/Magnifier.js')}}"></script>


<!-- 
<script type="text/javascript" src="Event.js"></script>
<script type="text/javascript" src="Magnifier.js"></script> -->
<script type="text/javascript">
    

    var evt = new Event(),
    m = new Magnifier(evt);
     m.attach({
     
            thumb: '#thumb',
            large:  "{{asset($img1_400)}}",
            mode: 'inside',
            zoom: 3,
            zoomable: true
        });



        	$('.productImgs').click(function(){
    var imgSrc="{{url('storage/admin/images/product/thumbnail/400_') }}";
    imgSrc += $(this).data('id');


    
    document.getElementById("thumb").src = imgSrc;
            console.log(imgSrc);
    var evt = new Event(),
    m = new Magnifier(evt);
     m.attach({
     
            thumb: '#thumb',
            large:  imgSrc,
            mode: 'inside',
            zoom: 3,
            zoomable: true
        });
// m.attacth['large'] = imgSrc;

  
  });

</script>



  <script>
    $(function() {
      (function(name) {
        var container = $('#pagination-' + name);
        var sources = function () {
          var result = [];
    
          for (var i = 1; i < 196; i++) {
            result.push(i);
          }
    
          return result;
        }();
    
        var options = {
          dataSource: sources,
          callback: function (response, pagination) {
            window.console && console.log(response, pagination);
    
            var dataHtml = '<ul>';
    
            $.each(response, function (index, item) {
              dataHtml += '<li>' + item + '</li>';
            });
    
            dataHtml += '</ul>';
    
            container.prev().html(dataHtml);
          }
        };
    
        //$.pagination(container, options);
    
        container.addHook('beforeInit', function () {
          window.console && console.log('beforeInit...');
        });
        container.pagination(options);
    
        container.addHook('beforePageOnClick', function () {
          window.console && console.log('beforePageOnClick...');
          //return false
        });
      })('demo1');
    

    })



    
$(function(){
   $('#shopBtn').attr('href','#scrollTo');
});


    </script>


<script src="js/pagination.js"></script>

<script  src="js/ScrollJS2/script.js"></script>





<script>
$(document).ready(function(){
  $("#clickopinon").click(function(){
    $("#OpinonBox").toggle();
  });
});
</script>

</html>