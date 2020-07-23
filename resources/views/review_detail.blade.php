@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->


@section('content')
	
	<a id="button"></a>



<section class="" style="">
    <div class="container">
      <div class="row">
         <div class="col-sm-12 ">
        <div align="left" class="" style="padding:1%;">
             <ul style="color:black;">
            <li style="padding-right: 1%;"><a href="https://flickerfone.com/">Home</a></li>/
            <li style="padding-right: 1%;"><a href="https://flickerfone.com/buy">Apple</a></li>/
            <li style="padding-right: 1%;"><a href="#">iphone x</a></li>
            </ul>
        </div>

        <div class="col-sm-12 hover01" style="padding: 2%; padding-top: 2%;">

        <div class="col-lg-6 col-sm-6">
          <div class="img-zoom-container" onmousenter="showme(this)">
  
            <span><p class="imgid" style="allign:center;"><img  id="myimage" src="{{ asset('storage/images/8809b9a1b085528f3f53e92788b5e3b8.jpg') }}"  srcset="{{ asset('storage/images/8809b9a1b085528f3f53e92788b5e3b8.jpg') }}" width="200" height="226"></p></span>
          
            <span id="myhide" style="float: right;
              position: absolute;
              top: -100px;
              left: 237px;
              width: auto;
              height: 100%; z-index: 12; ">
              <div style="height: 226px; width: 226px; margin-top: 100px; background-repeat:no-repeat !important ;   "  id="myresult" class="img-zoom-result"  onmouseleave="" ></div>
            </span>
          </div>
        <br/>
        <br/>
        <div id="slider1">
          <div class="thumbelina-but horiz left disabled"><i class="glyphicon glyphicon-circle-arrow-left"></i></div>
              <div style="position:absolute;overflow:hidden;width:100%;height:100%;"><ul class="" style="left: 0px;">
              <li style="display: inline-block;"><img class="img-thumbnail" src="{{ asset('storage/images/1.jpg') }}" style="max-width:90px;max-height:100px;"></li>
              <li style="display: inline-block;"><img class="cloudzoom-gallery img-thumbnail" src="{{ asset('storage/images/2.jpg') }}"  style="max-width:90px;max-height:100px;"></li>
              <li style="display: inline-block;"><img class="cloudzoom-gallery img-thumbnail" src="{{ asset('storage/images/3.jpg') }}" style="max-width:90px;max-height:100px;"></li>
              <li style="display: inline-block;"><img class="cloudzoom-gallery img-thumbnail" src="{{ asset('storage/images/4.jpg') }}"  style="max-width:90px;max-height:100px;"></li>
              </ul></div>
              <div class="thumbelina-but horiz right disabled"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
          </div>
     

        </div>
        <div class="col-lg-6 col-sm-6" id="preview">
            <h3>Apple iphone 6</h3>
			<hr style="width: 19%;

			justify-content: right;
			height: 1px;
			background-color: #20663d;
			align-self: flex-start;
			margin-right: 419px; "/>
                   <span class="fa fa-star "></span>
                   <span class="fa fa-star "></span>
                   <span class="fa fa-star "></span>
                   <span class="fa fa-star "></span>
                   <span class="fa fa-star "></span>
                   <span> (0 Responses)</span>

                   <br>
                   <br> <br> <br>

                     <section class="rating-widget" style="margin: 5px;">
                        <h5>Submit Your Rating</h5>
		                <span class="star__container">
						  <input type="radio" name="rating" value="1" id="star-1" class="star__radio visuhide">
						  <input type="radio" name="rating" value="2" id="star-2" class="star__radio visuhide">
						  <input type="radio" name="rating" value="3" id="star-3" class="star__radio visuhide">
						  <input type="radio" name="rating" value="4" id="star-4" class="star__radio visuhide">
						  <input type="radio" name="rating" value="5" id="star-5" class="star__radio visuhide">

						  <label class="star__item" for="star-1"><span class="visuhide">1 star</span></label>
						  <label class="star__item" for="star-2"><span class="visuhide">2 stars</span></label>
						  <label class="star__item" for="star-3"><span class="visuhide">3 stars</span></label>
						  <label class="star__item" for="star-4"><span class="visuhide">4 stars</span></label>
						  <label class="star__item" for="star-5"><span class="visuhide">5 stars</span></label>
						</span>
                    </section>
                   <h3>Price: N/A</h3>
                    <!--
                    <h5><b>Out of Stock</b></h5>
                       -->
                     <br><br>
                                         <!--<button data-id="423" class="btn btn-primary add-to-cart icon">Add to Cart</button>-->
                             <br><br>
        <!-- <button class="btn sell_btn"  type="button">View Product Details</button>-->
         <div class="col-sm-12">

         </div>
       </div>
      </div>




  </div>
</div>
</div></section>




<hr/>





 <div class="col-sm-12" >
  <div class="panel with-nav-tabs panel-default" style="background-color: white">
      <div class="panel-heading" style="background: #fff;">
              <ul class="nav nav-tabs nav-justified">

         <li class="active"><a href="#tab2default" data-toggle="tab">
        <p style="font-size: 21px;">Specifications</p></a>
      </li>

        <li class=""><a href="#tab1default" data-toggle="tab">
          <p style="font-size: 21px;">Video</p></a>
        </li>



      <li class=""><a href="#tab3default" data-toggle="tab">
        <p style="font-size: 21px;">Comments</p></a>
      </li>

              </ul>
      </div>
      <div class="panel-body">
          <div class="tab-content">
              <div class="tab-pane fade" id="tab1default">
                  <div class="col-sm-12" style="background-color: white; color: black;">
<section style="padding: 2%;margin: 15px;">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <h3>Customers also consider</h3>
  <section class="regular slider slick-initialized slick-slider">

        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1140px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 245px;">

    <div class=" hover01 div_boximg ">

        <figure> <img src="https://flickerfone.com/assets/uploads/thumbs/d7e306e301ea3814862d7e7c32669349.jpg" style="max-width: -webkit-fill-available;padding: 14%"> </figure>

                    <h4>iphone 11 pro max - Single sim (Apple)</h4><br>
                    <h4>PKR  210,000</h4>
                    <br>
                    <div style="font-size: 9px;">
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star "></span>
                      <span> (0 Responses)</span>

                      <button onclick="modal('https://flickerfone.com/main/quickview/438')" class="btn btn_quick" style="margin-top: 18px; margin-right: -36px;" type="button" tabindex="0">Quick Look</button>
                      <br><br>
                    </div>
        </div>
    </div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 245px;">

    <div class=" hover01 div_boximg ">

        <figure> <img src="https://flickerfone.com/assets/uploads/thumbs/4358ea648f89f14a0c041381f1a6d74a.jpg" style="max-width: -webkit-fill-available;padding: 14%"> </figure>

                    <h4>iphone 6s Plus (Apple)</h4><br>
                    <h4>PKR  0</h4>
                    <br>
                    <div style="font-size: 9px;">
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star "></span>
                      <span> (0 Responses)</span>

                      <button onclick="modal('https://flickerfone.com/main/quickview/426')" class="btn btn_quick" style="margin-top: 18px; margin-right: -36px;" type="button" tabindex="0">Quick Look</button>
                      <br><br>
                    </div>
        </div>
    </div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 245px;">

    <div class=" hover01 div_boximg ">

        <figure> <img src="https://flickerfone.com/assets/uploads/thumbs/a6800608aa49e4fa23d22f451f1dc7a1.jpg" style="max-width: -webkit-fill-available;padding: 14%"> </figure>

                    <h4>iphone 11 - Single sim (Apple)</h4><br>
                    <h4>PKR  140,000</h4>
                    <br>
                    <div style="font-size: 9px;">
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star "></span>
                      <span> (0 Responses)</span>

                      <button onclick="modal('https://flickerfone.com/main/quickview/434')" class="btn btn_quick" style="margin-top: 18px; margin-right: -36px;" type="button" tabindex="0">Quick Look</button>
                      <br><br>
                    </div>
        </div>
    </div><div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" style="width: 245px;">

    <div class=" hover01 div_boximg ">

        <figure> <img src="https://flickerfone.com/assets/uploads/thumbs/b4e798fee989e2639c590f558f52f41e.jpg" style="max-width: -webkit-fill-available;padding: 14%"> </figure>

                    <h4>iphone 11 pro - Dual sim (Apple)</h4><br>
                    <h4>PKR  200,000</h4>
                    <br>
                    <div style="font-size: 9px;">
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star "></span>
                      <span> (0 Responses)</span>

                      <button onclick="modal('https://flickerfone.com/main/quickview/437')" class="btn btn_quick" style="margin-top: 18px; margin-right: -36px;" type="button" tabindex="0">Quick Look</button>
                      <br><br>
                    </div>
        </div>
    </div></div></div>
      
      
      
  
  </section>


              </div>
            </div>
          </div>


</section>
                       
                  </div>
              </div>
              <div class="tab-pane fade active in" id="tab2default">
          <div class="col-sm-12" style="background-color: white; color: black;">
                      <p></p><div class="WordSection1">

<table class="MsoTableMediumGrid1Accent4" border="1" cellspacing="0" cellpadding="0">
<tbody><tr>
<td class="Network" width="102">
<p class="Networktext" align="center"><b><span class="Networktext">Network</span></b></p>
</td>
<td class="Technology" width="114">
<p class="Technologytext"><b><span class="Technologytext">Technology</span></b></p>
</td>
<td class="GSMHSPALTE" width="468">
<p class="GSMHSPALTEtext"><b><u><span>GSM / HSPA / LTE</span></u></b></p>
</td>
</tr>
<tr xss="removed">
<td class="Launch" width="102" rowspan="2">
<p class="Launchtext" align="center"><b><span>Launch</span></b></p>
</td>
<td class="Announced" width="114">
<p class="Announcedtext"><b><span>Announced</span></b></p>
</td>
<td class="Date" width="468">
<p class="Datetext"><span>2014,
September</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Status" width="114">
<p class="Statustext"><b><span>Status</span></b></p>
</td>
<td class="Statusdate" width="468">
<p class="Statusdatetext"><span>Available.
Released 2014, September</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Body" width="102" rowspan="4">
<p class="Bodytext" align="center"><b><span>Body</span></b></p>
</td>
<td class="Dimensions" width="114">
<p class="Dimensionstext"><b><span>Dimensions</span></b></p>
</td>
<td class="Dimensize" width="468">
<p class="Dimensizetext"><span>138.1 x 67 x 6.9 mm (5.44 x 2.64 x 0.27 in)</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Weight" width="114">
<p class="Weighttext"><b><span>Weight</span></b></p>
</td>
<td class="Weightgrams" width="468">
<p class="Weightgramstext"><span>129g (4.55 oz)</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Build" width="114">
<p class="Buildtext"><b><span>Build</span></b></p>
</td>
<td class="Buildtype" width="468">
<p class="Buildtypetext"><span>Front glass, aluminum body</span></p>
</td>
</tr>
<tr xss="removed">
<td class="SIM" width="114">
<p class="SIMtext"><b><span>SIM</span></b></p>
</td>
<td class="SIMtype" width="468">
<p class="SIMtypetext"><span>Nano-SIM</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Display" width="102" rowspan="4">
<p class="Displaytext" align="center"><b><span>Display</span></b></p>
</td>
<td class="Type" width="114">
<p class="Typetext"><b><span>Type</span></b></p>
</td>
<td class="LCDtype" width="468">
<p class="LCDtypetext"><span>IPS
LCD capacitive touchscreen, 16M colors</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Size" width="114">
<p class="Sizetext"><b><span>Size</span></b></p>
</td>
<td class="Screensize" width="468">
<p class="Screensizetext"><span>4.7 inches, 60.9 cm</span><sup><span xss="removed">2</span></sup><span xss="removed">&nbsp; (~65.8% screen-to-body ratio)</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Resolution" width="114">
<p class="Resolutiontext"><b><span>Resolution</span></b></p>
</td>
<td class="Resolutiontype" width="468">
<p class="Resolutiontypetext"><span>750 x 1334 pixels, 16:9 ratio (~326 ppi density)</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Protection" width="114">
<p class="Protectiontext"><b><span>Protection</span></b></p>
</td>
<td class="Protectiontype" width="468">
<p class="Protectiontypetext Portectiontypetext"><span>Ion-strengthened glass, oleophobic coating</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Platform" width="102" rowspan="4">
<p class="Platformtext" align="center"><b><span>Platform</span></b></p>
</td>
<td class="OS" width="114">
<p class="OStext"><b><span>OS</span></b></p>
</td>
<td class="Operatingsystem" width="468">
<p class="Operatingsystemtext"><span>iOS 8, upgradable to iOS 12.3</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Chipset" width="114">
<p class="Chipsettext"><b><span>Apple A8 (20 nm)</span></b></p>
</td>
<td class="Processortype" width="468">
<p class="Processortypetext"><span>(ARM v8-based)</span></p>
</td>
</tr>
<tr xss="removed">
<td class="CPU" width="114">
<p class="CPUtext"><b><span>CPU</span></b></p>
</td>
<td class="Processorsize" width="468">
<p class="Processorsizetext"><span>Dual-core 1.4 GHz Typhoon (ARM v8-based)</span></p>
</td>
</tr>
<tr xss="removed">
<td class="GPU" width="114">
<p class="GPUtext"><b><span>GPU</span></b></p>
</td>
<td class="Graphicprocessor" width="468">
<p class="Graphicprocessortext"><span>PowerVR GX6450 (quad-core graphics)</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Memory" width="102" rowspan="2">
<p class="Memorytext" align="center"><b><span>Memory</span></b></p>
</td>
<td class="Cardslot" width="114">
<p class="Cardslottext"><b><span>Card slot</span></b></p>
</td>
<td class="Memorycard" width="468">
<p class="Memorycardtext"><span>No</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Internal" width="114">
<p class="Internaltext"><b><span>Internal</span></b></p>
</td>
<td class="ROMRAM" width="468">
<p class="ROMRAMtext ROAMRAMtext"><span>16/32/64/128 GB, 1 GB RAM DDR3</span></p>
</td>
</tr>
<tr xss="removed">
<td class="MainCamera" width="102" rowspan="3">
<p class="MainCameratext" align="center"><b><span>Main Camera</span></b></p>
</td>
<td class="Dual" width="114">
<p class="Dualtext"><b><span>Single</span></b></p>
</td>
<td class="Cameraprofile" width="468">
<p class="Cameraprofiletext"><span>8 MP, f/2.2, 29mm (standard), 1/3", 1.5µm, PDAF
</span></p>
</td>
</tr>
<tr xss="removed">
<td class="MainCameraFeatures" width="114">
<p class="MainCameraFeaturestext"><b><span>Features</span></b></p>
</td>
<td class="Camerafeatures" width="468">
<p class="Camerafeaturestext"><span>Dual-LED dual-tone flash, HDR</span></p>
</td>
</tr>
<tr xss="removed">
<td class="MainCameraVideo" width="114">
<p class="MainCameraVideotext"><b><span>Video</span></b></p>
</td>
<td class="MainCameraVideoquality" width="468">
<p class="MainCameraVideoqualitytext"><span>1080p@60fps, 720p@240fps</span></p>
</td>
</tr>
<tr xss="removed">
<td class="SelfieCamera" width="102" rowspan="3">
<p class="SelfieCameratext" align="center"><b><span>Selfie Camera</span></b></p>
</td>
<td class="Single" width="114">
<p class="Singletext"><b><span>Single</span></b></p>
</td>
<td class="Cameramegapixels" width="468">
<p class="Cameramegapixelstype Camerapixelstype"><span>1.2 MP, f/2.2, 31mm (standard)</span></p>
</td>
</tr>
<tr xss="removed">
<td class="SelfieCameraFeatures" width="114">
<p class="SelfieCameraFeaturestext"><b><span>Features</span></b></p>
</td>
<td class="Flash" width="468">
<p class="Flashtext"><span>face detection, HDR, FaceTime over Wi-Fi or Cellular</span></p>
</td>
</tr>
<tr xss="removed">
<td class="SelfieCameraVideo" width="114">
<p class="SelfieCameraVideotext"><b><span>Video</span></b></p>
</td>
<td class="SelfieCameraVideoquality" width="468">
<p class="SelfieCameraVideoqualitytext"><span>720p@30fps</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Sound" width="102" rowspan="3">
<p class="Soundtext" align="center"><b><span>Sound</span></b></p>
</td>
<td class="Loudspeaker" width="114">
<p class="Loudspeakertext"><b><span>Loudspeaker</span></b></p>
</td>
<td class="Loudspeakerstatus" width="468">
<p class="Loudspeakerstatustext"><span>Yes</span></p>
</td>
</tr>
<tr xss="removed">
<td class="mmjack" width="114">
<p class="mmjacktext"><b><span>3.5mm jack</span></b></p>
</td>
<td class="Headphonejack" width="468">
<p class="Headphonejacktext"><span>Yes</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Emptycol2" width="114">
<p class="Emptycol2text"><b><span>Mic</span></b></p>
</td>
<td class="Noisecancellation" width="468">
<p class="Noisecancellationtext"><span>16-bit/44.1kHz audio<br>
Active noise cancellation with dedicated mic</span></p>
</td>
</tr>
<tr xss="removed">
<td class="COMMS" width="102" rowspan="6">
<p class="COMMStext" align="center"><b><span>COMMS</span></b></p>
</td>
<td class="WLAN" width="114">
<p class="WLANtext"><b><span>WLAN</span></b></p>
</td>
<td class="WIFI" width="468">
<p class="WIFItext"><span>Wi-Fi
802.11 a/b/g/n/ac, dual-band, hotspot</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Bluetooth" width="114">
<p class="Bluetoothtext"><b><span>Bluetooth</span></b></p>
</td>
<td class="Bluetoothtype" width="468">
<p class="Bluetoothtypetext"><span>4.0,
A2DP, LE</span></p>
</td>
</tr>
<tr xss="removed">
<td class="GPS" width="114">
<p class="GPStext"><b><span>GPS</span></b></p>
</td>
<td class="GPSdetails" width="468">
<p class="GPSdetailstext"><span>Yes, with A-GPS, GLONASS</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Radio" width="114">
<p class="Radiotext"><b><span>Radio</span></b></p>
</td>
<td class="FM" width="468">
<p class="FMtext"><span>No</span></p>
</td>
</tr>
<tr xss="removed">
<td class="NFC" width="114">
<p class="NFCtext"><b><span>NFC</span></b></p>
</td>
<td class="NFCstatus" width="468">
<p class="NFCstatustext"><span>Yes (Apple Pay only)</span></p>
</td>
</tr><tr xss="removed">
<td class="USB" width="114">
<p class="USBtext"><b><span>USB</span></b></p>
</td>
<td class="USBtype" width="468">
<p class="USBtypetext"><span>2.0, proprietary reversible connector</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Features" width="102">
<p class="Featurestext" align="center"><b><span>Features</span></b></p>
</td>
<td class="Sensors" width="114">
<p class="Sensorstext"><b><span>Sensors</span></b></p>
</td>
<td class="Sensortype" width="468">
<p class="Sensortypetext"><span>Fingerprint (front-mounted), accelerometer, gyro, proximity, compass, barometer<br>
Siri natural language commands and dictation</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Battery" width="102" rowspan="2">
<p class="Batterytext" align="center"><b><span>Battery</span></b></p>
</td>
<td class="Emptycol21" width="114">
<p class="Emptycol21text"><b><span>&nbsp;</span></b></p>
</td>
<td class="Batterypower" width="468">
<p class="Batterypowertext"><span>Non-removable Li-Po 1810 mAh battery (6.9 Wh)</span></p>
</td>
</tr>
<tr xss="removed">
<td class="Charging" width="114">
<p class="Chargingtext"><b><span>Stand-by<br>
Talk Time<br>
Music Play</span></b></p>
</td>
<td class="Chargingstatus" width="468">
<p class="Chargingstatustext"><span>Up to 250 h (3G)<br>
Up to 14 h (3G)<br>
Up to 50 h</span></p>
</td>
</tr>
<tr xss="removed">
<td class="MISC" width="102">
<p class="MISCtext" align="center"><b><span>MISC</span></b></p>
</td>
<td class="Colors" width="114">
<p class="Colorstext"><b><span>Colors</span></b></p>
</td>
<td class="Colorcode" width="468">
<p class="Colorcodetext"><span>Space Gray, Silver, Gold</span></p>
</td>
</tr>
<tr xss="removed">
<td class="MISC" width="102">
<p class="MISCtext2" align="center"><b><span>&nbsp;</span></b></p>
</td>
<td class="Price" width="114">
<p class="Pricetext"><b><span>Price</span></b></p>
</td>
<td class="PKR" width="468">
<p class="PKRtext"><span>N/A</span></p>
</td>
</tr>
</tbody></table>

<p class="MsoNormal">&nbsp;</p>

</div>
<p></p>
                     
              </div>
            </div>
<div class="tab-pane fade" id="tab3default">
<div class="row bootstrap snippets">
<div class="col-md-12 col-sm-12">
<div class="comment-wrapper">
  <div class=" panel-info panelcmt">
      <div class="panel-heading" style="background: #028f63;color: #fff;">
        Add Your Comment
      </div>
      <div style="padding: 15px;">
      <div class="row">
      <div class="form-group col-xs-6">
       <input name="name" placeholder="Enter Your Name" class="form-control" type="text" id="name" required="">

       </div>
        <div class="form-group col-xs-6">
       <input name="email" placeholder="Enter Your Email" class="form-control" type="email" id="email" required="">
       </div>
       </div>
          <textarea class="form-control" placeholder="write a comment..." rows="3" name="comment" id="comment" required="" style="margin-bottom:12px;"></textarea>
          <div style="margin-bottom:12px;" class="g-recaptcha" data-sitekey="6LdI274UAAAAAIGNcJZLOWKX1O7chYCtXvVOSDaf"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdI274UAAAAAIGNcJZLOWKX1O7chYCtXvVOSDaf&amp;co=aHR0cHM6Ly9mbGlja2VyZm9uZS5jb206NDQz&amp;hl=en&amp;v=6uMSoEJtPugDt7Qm0Uu5iuSY&amp;size=normal&amp;cb=668rzyafzon7" width="304" height="78" role="presentation" name="a-myswbuv6b33q" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>

          <br>
          <button type="button" class="btn btn-success" name="comnt" id="commentbtn" style="background: #028f63;">Post</button>
          <div class="clearfix"></div>
          <hr>


          <ul class="media-list"><div class="col-sm-12" align="center"><h2>No Comments! </h2></div></ul>
<div class="clearfix"></div>
<div class="col-sm-12" align="center">
<button class="btn loadmore" style="margin-top: 40px; padding: 5px; font-size: 18px; font-style: normal; width: 25%; background-color: rgb(2, 143, 99); border-width: 2px 2px 5px; border-style: solid; border-color: rgb(2, 143, 99); border-image: initial; color: rgb(255, 255, 255); min-width: 150px; display: none;">LOAD MORE</button>
</div>

      </div>
  </div>
</div>

</div>
</div>
              </div>
          </div>
      </div>
  </div>

</div>




<br/>
<br/>





<br/>
<br/>


<script type="text/javascript" src="{{ asset('js/bootstrap-slider.min.js') }}"></script>
<script type="text/javascript">

totalsize=0;
comesize=0;
froms = 0;
tos=0;
options = "";
productstart=0;
productend=3;
productmin=0;
productmax=0;
productcompany="";
psort="";
gsort="";
nsort="";
varient = "";
search = "";

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

document.addEventListener("DOMContentLoaded", function(event) {
$(".dropdown-toggle").dropdown();
  $("#psorta").click(function(){

     psort = 1;
    loadProducts();
  });
  $("#psortb").click(function(){

     psort = 0;
    loadProducts();
  });

  $("#nsorta").click(function(){

    nsort = 1;
    loadProducts();
  });
  $("#nsortb").click(function(){

    nsort = 0
    loadProducts();
  });
  $("#gsorta").click(function(){

    gsort = 1;
    loadProducts();
  });
  $("#gsortb").click(function(){

    gsort = 0;
    loadProducts();
  });

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


  $('[data-toggle="tooltip"]').tooltip();
  loadProducts();
  $(".loadmore").click(function(){
    productend+=7;
    loadProducts();
  });

$('#city').amsifySuggestags({
      suggestions: ['18 Hazari','Abbotabad','Abdul Hakim','adda bun bosan','Alipur','arif wala','Attock','Baddin','Badin','Bagh','Bahawal Nagar','Bahawalpur','Balakot','Bannu','Basir pur','Bukkur','Burewala','Chakwal','Chaman','Channab Nagar','Charsadda','Chicha watni','Chistian','Dadu','Daska','Dera Ghazi Khan','Dera Ismail Khan','Dinga','Faisalabad','faisalabad','Fort Abbass','Ghotki','Gujjar Khan','Gujranwala','Gujrat','Gwadar','Hafizabad','Hangoo','Haripur','Hasilpur','Hyderabad','Islamabad','Jacobabad','Jaffarabad','Jalalpur Bhattian','jalalpur jattan','Jamshoro','Jauharabad','Jhang','Kahuta','kalllar Kahar','Karachi','Kasur','Khairpur','Khanpur','Kharian','Khuzdar','Khuzdar','Kot Addu','Lahore','LalaMusa','Larkana','Lasbela','Layyah','Mansehra','Mardan','Mehrab Kot','Mehrab Pur','Mianwali','Mirpur AJK','Mirpur Khas','Multan','Muridkey','Muzzafar Garh','Nankana Sahib','NAROWAL','Nasirabad','Nawabshah','Nowshera','Okara','Pak Pattan','Pattoki','Peshawar','Petaro','Quetta','Rahim Yar Khan','Rajan Pur','Rawalpindi','Sahiwal','Sangla hil','Sargodha','shahdara','Shahkot','Sheikhupura','Shikarpur','Sialkot','Sibi','Sukkur','Swabi','Talagang','Taunsa','Taxila','Turbat','Vehari','Wah Cantt','Wah Cantt','Wah Cantt','Wazirabad','Zhob'],
    whiteList: true
  });
//Document ready End
  });

var site_url = "https://flickerfone.com/"+"assets/uploads";
function loadProducts(){
  listcolors();
  $.ajax('main/listproductsbuy.json', {
        type: 'GET',  // http method
        timeout: 10000,
        data: {

          start:productstart,
          end:productend,
          nsort:nsort,
          brand:productcompany,
          min:productmin,
          max:productmax,
          q:search,
          city:options,
          gsort:gsort,
          psort:psort,
          varient:varient
         },
        success: function (data, status, xhr) {
            var view = "";
            pcomesize = data.total;
            pfroms = data.from;
            ptos = data.to;

      if(data.data.length > 0){

        if(data.total <= productend){
          $(".loadmore").hide();
        }else{
          $(".loadmore").fadeIn();
        }
        for(var i =0;i<data.data.length;i++){

       view += `<div class="row buyleft">
            <a href="buyproductdetails/%60%2bdata.data%5bi%5d.html">
            <div class="col-xs-12 mainboxbuy">
              <div class="col-sm-3" align="center">
                  <img class="img-responsive img-thumbnail" src="`+site_url+"/thumbs/"+data.data[i].image+`"/>
              </div>
              <div class="col-sm-9">
                  <h3 id="buytextmain" style="font-size:20px;">`+data.data[i].company+` `+data.data[i].model+` `+data.data[i].color+` `+data.data[i].space;
                  if(data.data[i].time>25){
                    view += `<span class="newlist" style="position: absolute;right: 0px;top: 50px;">NEW LISTING</span>`;
                  }
                 view += `  </h3>

                  <p>`+data.data[i].description+`</p>
                  <div class="clearfix"></div>
                <div class="row buymargintop">
                  <div class="col-sm-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                  <p class="buyprice">`+data.data[i].price+`</p>
                  `;

                  if(data.data[i].grade == 'Fair'){
                    view+=`<table class="table-bordered"><tr><td style="padding:5px;background:#028f63;color:#fff;">Fair</td><td style="padding:5px;color:#444;background:#e0e0e1;">Good</td><td style="padding:5px;color:#444;background:#e0e0e1;">Excellent</td></tr></table>`;
                  }
                  if(data.data[i].grade == 'Good'){
                    view+=`<table class="table-bordered"><tr><td  style="padding:5px;color:#444;background:#e0e0e1;">Fair</td><td style="padding:5px;background:#028f63;color:#fff;">Good</td><td style="padding:5px;color:#444;background:#e0e0e1;">Excellent</td></tr></table>`;
                  }
                  if(data.data[i].grade == 'Excellent'){
                    view+=`<table class="table-bordered"><tr><td style="padding:5px;color:#444;background:#e0e0e1;">Fair</td><td style="padding:5px;color:#444;background:#e0e0e1;">Good</td><td style="padding:5px;background:#028f63;color:#fff;">Excellent</td></tr></table>`;
                  }

                  view+=`</div>
                  <div class=" col-sm-8 col-md-8 col-lg-8">
                      <table>
                        <tr>
                          <td><b>Negotiable: </b> </td>
                          <td><b>`+data.data[i].nego+`</b></td>
                        </tr>
                        <tr>
                          <td>From:</td>
                          <td>`+data.data[i].city+`</td>
                        </tr>
                        <tr>
                          <td>Brand:</td>
                          <td>`+data.data[i].company+`</td>
                        </tr>
                        <tr>
                          <td>Model:</td>
                          <td>`+data.data[i].model+`</td>
                        </tr>
                        <tr>
                          <td>Network:</td>
                          <td>`+data.data[i].network+`</td>
                        </tr>
                        <tr>
                          <td>PTA Approved:</td>
                          <td>`+data.data[i].pta+`</td>
                        </tr>
                        <tr>
                          <td>Posted Date:</td>
                          <td>`+data.data[i].timestamp+`</td>
                        </tr>
                      </table>
                      <a href="https://flickerfone.com/buyproductdetails/`+data.data[i].id+`">
                      <button class="btn-xs button3 buydetailsbtn">Contact / Details</button>
                      </a>
                  </div>
                </div>
              </div>
            </div></a>
          </div>`;



              }
            }else{
              $(".loadmore").hide();
              view+="<div align='center'><img src='https://flickerfone.com/assets/images/noproduct.png' class='img-responsive'/></div>";
            }
            $(".products").html(view);

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

$("#qsearch").submit(function(){
  search = $("#qv").val();
  loadProducts();
  return false;
})

}

brand = function(id){
 varient = "";
 productcompany =id;
 loadProducts();
}

color = function(id){
 productcompany =id;
 loadProducts();
}

function listcolors(){
     $.ajax('main/listcolors.json', {
          type: 'GET',  // http method
          timeout: 10000,
          data: {
          brand:productcompany,
          min:productmin,
          max:productmax,
          q:search,
          city:options,

         },
        success: function (data, status, xhr) {

            var view = "";
            name = data.name;

        for(var i =0;i<data.data.length;i++){
      view += `
        <tr>`;

             if(data.data[i] != undefined) {
                 if(varient ==data.data[i].id){
                    active = "active";
                 }else{
                    active = "";
                 }
               view+=`<td class='btnbrand `+active+`' style='border: 1px solid #bbb;cursor: pointer;' onClick="colorfilter('`+data.data[i].id+`',this)" align='center'>`+data.data[i].name+`</td>`;
                  }
                  else{
                    break;
                  }
                   i++;
          if(data.data[i] != undefined) {
              if(varient ==data.data[i].id){
                    active = "active";
                 }else{
                    active = "";
                 }
               view+=`<td class='btnbrand `+active+`' style='border: 1px solid #bbb;cursor: pointer;'  onClick="colorfilter('`+data.data[i].id+`',this)" align='center'>`+data.data[i].name+`</td>`;
                  }
                  else{
                    break;
                  }
            i++;
            if(data.data[i] != undefined) {
                if(varient ==data.data[i].id){
                    active = "active";
                 }else{
                    active = "";
                 }
               view+=`<td class='btnbrand `+active+`'  style='border: 1px solid #bbb;cursor: pointer;'  onClick="colorfilter('`+data.data[i].id+`',this)" align='center'>`+data.data[i].name+`</td>`;
              }
              else{
                break;
              }
            i++;
            if(data.data[i] != undefined) {
                if(varient ==data.data[i].id){
                    active = "active";
                 }else{
                    active = "";
                 }
               view+=`<td class='btnbrand `+active+`' style='border: 1px solid #bbb;cursor: pointer;'  onClick="colorfilter('`+data.data[i].id+`',this)" align='center'>`+data.data[i].name+`</td>`;
              }
              else{
                break;
              }

        view+=` </tr>`;

              }

        $(".make_color").html(view);
        $(".make_color > tr > .active").css("background","#f00");
        $(".make_color > tr > .active").css("color","#fff");
        },
        error: function (jqXhr, textStatus, errorMessage) {
                sa_alert('error', 'Unable to load Colors'+errorMessage,'error');
                console.log('Error' + textStatus);
                console.log('Error' + jqXhr);
                console.log('Error' + errorMessage);

        }
    });
}

function colorfilter(id,view){
    varient = id;

    loadProducts();
}
</script>


<section style="padding: 2%;margin: 15px;">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h3>Customers also consider</h3>
<section class="regular slider slick-initialized slick-slider">

<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1140px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 245px;">

<div class=" hover01 div_boximg ">

<figure> <img src="https://flickerfone.com/assets/uploads/thumbs/d7e306e301ea3814862d7e7c32669349.jpg" style="max-width: -webkit-fill-available;padding: 14%"> </figure>

            <h4>iphone 11 pro max - Single sim (Apple)</h4><br>
            <h4>PKR  210,000</h4>
            <br>
            <div style="font-size: 9px;">
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span> (0 Responses)</span>

              <button onclick="modal('https://flickerfone.com/main/quickview/438')" class="btn btn_quick" style="margin-top: 18px; margin-right: -36px;" type="button" tabindex="0">Quick Look</button>
              <br><br>
            </div>
</div>
</div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 245px;">

<div class=" hover01 div_boximg ">

<figure> <img src="https://flickerfone.com/assets/uploads/thumbs/4358ea648f89f14a0c041381f1a6d74a.jpg" style="max-width: -webkit-fill-available;padding: 14%"> </figure>

            <h4>iphone 6s Plus (Apple)</h4><br>
            <h4>PKR  0</h4>
            <br>
            <div style="font-size: 9px;">
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span> (0 Responses)</span>

              <button onclick="modal('https://flickerfone.com/main/quickview/426')" class="btn btn_quick" style="margin-top: 18px; margin-right: -36px;" type="button" tabindex="0">Quick Look</button>
              <br><br>
            </div>
</div>
</div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 245px;">

<div class=" hover01 div_boximg ">

<figure> <img src="https://flickerfone.com/assets/uploads/thumbs/a6800608aa49e4fa23d22f451f1dc7a1.jpg" style="max-width: -webkit-fill-available;padding: 14%"> </figure>

            <h4>iphone 11 - Single sim (Apple)</h4><br>
            <h4>PKR  140,000</h4>
            <br>
            <div style="font-size: 9px;">
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span> (0 Responses)</span>

              <button onclick="modal('https://flickerfone.com/main/quickview/434')" class="btn btn_quick" style="margin-top: 18px; margin-right: -36px;" type="button" tabindex="0">Quick Look</button>
              <br><br>
            </div>
</div>
</div><div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" style="width: 245px;">

<div class=" hover01 div_boximg ">

<figure> <img src="https://flickerfone.com/assets/uploads/thumbs/b4e798fee989e2639c590f558f52f41e.jpg" style="max-width: -webkit-fill-available;padding: 14%"> </figure>

            <h4>iphone 11 pro - Dual sim (Apple)</h4><br>
            <h4>PKR  200,000</h4>
            <br>
            <div style="font-size: 9px;">
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span> (0 Responses)</span>

              <button onclick="modal('https://flickerfone.com/main/quickview/437')" class="btn btn_quick" style="margin-top: 18px; margin-right: -36px;" type="button" tabindex="0">Quick Look</button>
              <br><br>
            </div>
</div>
</div></div></div>




</section>


      </div>
    </div>
  </div>


</section>	

@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->