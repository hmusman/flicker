@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->


@section('content')
	
	<a id="button"></a>
	<!-- <button class="btn-xs button3 buydetailsbtn" style="position: absolute;right: 10%;" data-toggle="modal" data-target="#myModal"><i class="fa fa-phone"></i> Contact</button> -->
	<div class="modal fade" id="myModal" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">

		 <div class="modal-dialog">
		    <!-- Modal Content: begins -->
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Contact Details</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">×</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	Item: {{ ucwords($product->name) }}<br>
		       	Name: Owner Owner<br>
		        Phone Number : <b>03001234567</b>
		      </div>

		    </div>

		 </div>

	</div>
	<section class="" style="">
	    <div class="container">
	      <div class="row">
	         <div class="col-sm-12 ">
		        <div align="left" class="" style="padding:1%;">
		             <ul style="color:black;">
		            <li style="padding-right: 1%;"><a href="/">Home</a></li>/
		            <li style="padding-right: 1%;"><a href="">{{ ucwords($product->name) }}</a></li>
		            </ul>
		        </div>

	        <div class="col-sm-12 hover01" style="padding: 2%; padding-top: 2%;">

	        <div class="col-sm-5">
		        <div class="img-zoom-container" onmousenter="showme(this)">
		  			@php $image1 = 'storage/'.$product->image; $image2 = 'storage/'.$product->dimage; $image3 = 'storage/'.$product->dimage1;  @endphp
		            <span><p class="imgid" style="allign:center;"><img  id="myimage" src="{{ asset($image1) }}"  srcset="{{ asset($image1) }}" width="426" height="426"></p></span>
		          
		            <span id="myhide" style="float: right;
		              position: absolute;
		              top: -100px;
		              left: 437px;
		              width: auto;
		              height: 100%; z-index: 12; ">
		              <div style="height: 426px; width: 426px; margin-top: 100px; background-repeat:no-repeat !important ;   "  id="myresult" class="img-zoom-result"  onmouseleave="" ></div></span>
		        
		        	<div id="slider1">
		          		<div class="thumbelina-but horiz left disabled"><i class="glyphicon glyphicon-circle-arrow-left"></i></div>
		                <div style="position:absolute;overflow:hidden;width:100%;height:100%;"><ul class="thumbelina" style="left: 0px;">
			              <li style="display: inline-block;"><img class="cloudzoom-gallery img-thumbnail" src="{{ asset($image2) }}" data-cloudzoom="useZoom:'.cloudzoom', image:'{{ asset($image2) }}'  " style="max-width:90px;max-height:100px;"></li>
			              <li style="display: inline-block;"><img class="cloudzoom-gallery img-thumbnail" src="{{ asset($image3) }}" data-cloudzoom="useZoom:'.cloudzoom', image:'{{ asset($image3) }}'  " style="max-width:90px;max-height:100px;"></li>
		  
		              		</ul>
		          		</div>
		              <div class="thumbelina-but horiz right disabled"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
		          </div>
		      
		      
		      	</div>
	           
	        </div>
	        <div class="col-sm-6">
	           <h3>{{ ucwords($product->name) }}</h3>
	           <!-- <p style="font-size: 16px;font-weight:700;padding: 10px;">dlkbjoidfv</p> -->
	           <b class="buyprice" style="font-size: 23px;display:block;margin-top: 20px;">PKR  {{ number_format($product->price) }}<button class="btn-xs button3 buydetailsbtn" style="position: absolute;right: 10%;" data-toggle="modal" data-target="#myModal"><i class="fa fa-phone"></i> Contact</button></b>
	           <div style="margin:15px;">
	            <table class="table-bordered">
	            <tbody><tr>
	            <td><p style="padding:7px;">Fair</p></td>
	            <td><p style="padding:7px;padding:7px;background:#028f63;color:#fff;">Good</p>
	              </td>
	              <td><p style="padding:7px;">Excellent</p>
	            </td>
	            </tr></tbody></table>
	               </div>
	           <table class="table table-striped">


	                        <tbody><tr>
	                          <td><b>Negotiable: </b> </td>
	                          <td><b>Yes</b></td>
	                        </tr>
	                        <tr>
	                          <td>From:</td>
	                          <td>Gujrat</td>
	                        </tr>
	                        <tr>
	                          <td>Brand:</td>
	                          <td>Apple</td>
	                        </tr>
	                        <tr>
	                          <td>Model:</td>
	                          <td>iphone x</td>
	                        </tr>
	                        <tr>
	                          <td>Network:</td>
	                          <td>unlocked</td>
	                        </tr>

	                        <tr>
	                          <td>Does the device has minor dent/crack?</td>
	                          <td>No</td>
	                        </tr>
	                        <tr>
	                          <td>Does the device has major dent/crack?</td>
	                          <td>No</td>
	                        </tr>
	                        <tr>
	                          <td>Are accessories orignal?</td>
	                          <td>No</td>
	                        </tr>
	                        <tr>
	                          <td>Does screen has a crack?</td>
	                          <td>No</td>
	                        </tr>
	                        <tr>
	                          <td>Device Box Availabe?</td>
	                          <td>Yes</td>
	                        </tr>
	                        <tr>
	                          <td>PTA Approved</td>
	                          <td>Yes</td>
	                        </tr>
	                        <tr>
	                          <td>Rate your battery 1 to 10</td>
	                          <td>1</td>
	                        </tr>

	                      </tbody></table>


	        </div>
	      </div>




	  </div>
	</div>
	</div>
	</section>

    <hr/>
	<section>
    	<div class="container">
      		<div class="row">
        		<div class="col-sm-12">
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
				                       <textarea class="form-control" placeholder="write a comment..." rows="3" name="comment" id="comment" style="margin-bottom:12px;"></textarea>
				  
				                        <div class="g-recaptcha" data-sitekey="6LdI274UAAAAAIGNcJZLOWKX1O7chYCtXvVOSDaf" style="margin-bottom:12px;"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdI274UAAAAAIGNcJZLOWKX1O7chYCtXvVOSDaf&amp;co=aHR0cHM6Ly9mbGlja2VyZm9uZS5jb206NDQz&amp;hl=en&amp;v=nuX0GNR875hMLA1LR7ayD9tc&amp;size=normal&amp;cb=2ruo7uvnp48e" width="304" height="78" role="presentation" name="a-7rcz7bk2lypw" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
				                               <div class="clearfix"></div>
					                    <button type="button" class="btn btn-success" id="commentbtn" style="background: #028f63;">Post</button>
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
  	</section>

  	<section>
  		<div class="container mt-10 mb-10">
  				
  			<table class="MsoTableMediumGrid1Accent4" border="1" cellspacing="0" cellpadding="0">
				<tbody>
					<tr>
					 <td class="Network" width="102">
					  <p class="Networktext" align="center">
					   <strong><span class="Networktext">Network</span></strong>
					  </p>
					 </td>
					 <td class="Technology" width="114">
					  <p class="Technologytext">
					   <strong><span class="Technologytext">Technology</span></strong>
					  </p>
					 </td>
					 <td class="GSMHSPALTE" width="468">
					  <p class="GSMHSPALTEtext">
					   <strong><u>GSM / HSPA / LTE</u></strong>
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Launch" width="102" rowspan="2">
					  <p class="Launchtext" align="center">
					   <strong>Launch</strong>
					  </p>
					 </td>
					 <td class="Announced" width="114">
					  <p class="Announcedtext">
					   <strong>Announced</strong>
					  </p>
					 </td>
					 <td class="Date" width="468">
					  <p class="Datetext">
					   {{ date('Y',strtotime($product->launch_announced)) }},
					  {{ date('F',strtotime($product->launch_announced)) }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Status" width="114">
					  <p class="Statustext">
					   <strong>Status</strong>
					  </p>
					 </td>
					 <td class="Statusdate" width="468">
					  <p class="Statusdatetext">
					  {{ $product->launch_status }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Body" width="102" rowspan="4">
					  <p class="Bodytext" align="center">
					   <strong>Body</strong>
					  </p>
					 </td>
					 <td class="Dimensions" width="114">
					  <p class="Dimensionstext">
					   <strong>Dimensions</strong>
					  </p>
					 </td>
					 <td class="Dimensize" width="468">
					  <p class="Dimensizetext">
					  {{ $product->body_dimensions}}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Weight" width="114">
					  <p class="Weighttext">
					   <strong>Weight</strong>
					  </p>
					 </td>
					 <td class="Weightgrams" width="468">
					  <p class="Weightgramstext">
					  {{ $product->body_weight}}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Build" width="114">
					  <p class="Buildtext">
					   <strong>Build</strong>
					  </p>
					 </td>
					 <td class="Buildtype" width="468">
					  <p class="Buildtypetext">
					   {{ $product->body_build }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="SIM" width="114">
					  <p class="SIMtext">
					   <strong>SIM</strong>
					  </p>
					 </td>
					 <td class="SIMtype" width="468">
					  <p class="SIMtypetext">
					   {{ $product->body_sim }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Display" width="102" rowspan="4">
					  <p class="Displaytext" align="center">
					   <strong>Display</strong>
					  </p>
					 </td>
					 <td class="Type" width="114">
					  <p class="Typetext">
					   <strong>Type</strong>
					  </p>
					 </td>
					 <td class="LCDtype" width="468">
					  <p class="LCDtypetext">
					  {{ $product->display_type}}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Size" width="114">
					  <p class="Sizetext">
					   <strong>Size</strong>
					  </p>
					 </td>
					 <td class="Screensize" width="468">
					  <p class="Screensizetext">
					  <!--  4.7 inches, 60.9 cm<sup><span xss="removed">2</span></sup><span xss="removed"> (~65.6% screen-to-body ratio)</span> -->
					  {{ $product->display_size }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Resolution" width="114">
					  <p class="Resolutiontext">
					   <strong>Resolution</strong>
					  </p>
					 </td>
					 <td class="Resolutiontype" width="468">
					  <p class="Resolutiontypetext">
					   {{ $product->display_resolution }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Protection" width="114">
					  <p class="Protectiontext">
					   <strong>Protection</strong>
					  </p>
					 </td>
					 <td class="Protectiontype" width="468">
					  <p class="Protectiontypetext Portectiontypetext">
					   {{ $product->display_protection }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Platform" width="102" rowspan="4">
					  <p class="Platformtext" align="center">
					   <strong>Platform</strong>
					  </p>
					 </td>
					 <td class="OS" width="114">
					  <p class="OStext">
					   <strong>OS</strong>
					  </p>
					 </td>
					 <td class="Operatingsystem" width="468">
					  <p class="Operatingsystemtext">
					   {{ $product->platform_os }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Chipset" width="114">
					  <p class="Chipsettext">
					   <strong>Chipset</strong>
					  </p>
					 </td>
					 <td class="Processortype" width="468">
					  <p class="Processortypetext">
					   {{ $product->platform_chipset }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="CPU" width="114">
					  <p class="CPUtext">
					   <strong>CPU</strong>
					  </p>
					 </td>
					 <td class="Processorsize" width="468">
					  <p class="Processorsizetext">
					   {{ $product->platform_cpu }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="GPU" width="114">
					  <p class="GPUtext">
					   <strong>GPU</strong>
					  </p>
					 </td>
					 <td class="Graphicprocessor" width="468">
					  <p class="Graphicprocessortext">
					   {{ $product->platform_gpu }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Memory" width="102" rowspan="2">
					  <p class="Memorytext" align="center">
					   <strong>Memory</strong>
					  </p>
					 </td>
					 <td class="Cardslot" width="114">
					  <p class="Cardslottext">
					   <strong>Card slot</strong>
					  </p>
					 </td>
					 <td class="Memorycard" width="468">
					  <p class="Memorycardtext">
					  {{ $product->memory_card_slot }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Internal" width="114">
					  <p class="Internaltext">
					   <strong>Internal</strong>
					  </p>
					 </td>
					 <td class="ROMRAM" width="468">
					  <p class="ROMRAMtext ROAMRAMtext">
					   {{ $product->memory_storage }}, {{ $product->memory_ram }} RAM
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="MainCamera" width="102" rowspan="3">
					  <p class="MainCameratext" align="center">
					   <strong>Main Camera</strong>
					  </p>
					 </td>
					 <td class="Dual" width="114">
					  <p class="Dualtext">
					   <strong>{{ ucfirst($product->main_type) }}</strong>
					  </p>
					 </td>
					 <td class="Cameraprofile" width="468">
					  <p class="Cameraprofiletext">
					  {{ $product->main_type_value }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="MainCameraFeatures" width="114">
					  <p class="MainCameraFeaturestext">
					   <strong>Features</strong>
					  </p>
					 </td>
					 <td class="Camerafeatures" width="468">
					  <p class="Camerafeaturestext">
					  {{ $product->main_feature }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="MainCameraVideo" width="114">
					  <p class="MainCameraVideotext">
					   <strong>Video</strong>
					  </p>
					 </td>
					 <td class="MainCameraVideoquality" width="468">
					  <p class="MainCameraVideoqualitytext">
					  {{ $product->main_video }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="SelfieCamera" width="102" rowspan="3">
					  <p class="SelfieCameratext" align="center">
					   <strong>Selfie Camera</strong>
					  </p>
					 </td>
					 <td class="Single" width="114">
					  <p class="Singletext">
					   <strong>Single</strong>
					  </p>
					 </td>
					 <td class="Cameramegapixels" width="468">
					  <p class="Cameramegapixelstype Camerapixelstype">
					   {{ $product->selfie_single }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="SelfieCameraFeatures" width="114">
					  <p class="SelfieCameraFeaturestext">
					   <strong>Features</strong>
					  </p>
					 </td>
					 <td class="Flash" width="468">
					  <p class="Flashtext">
					  {{ $product->selfie_feature }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="SelfieCameraVideo" width="114">
					  <p class="SelfieCameraVideotext">
					   <strong>Video</strong>
					  </p>
					 </td>
					 <td class="SelfieCameraVideoquality" width="468">
					  <p class="SelfieCameraVideoqualitytext">
					  {{ $product->selfie_video }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Sound" width="102" rowspan="3">
					  <p class="Soundtext" align="center">
					   <strong>Sound</strong>
					  </p>
					 </td>
					 <td class="Loudspeaker" width="114">
					  <p class="Loudspeakertext">
					   <strong>Loudspeaker</strong>
					  </p>
					 </td>
					 <td class="Loudspeakerstatus" width="468">
					  <p class="Loudspeakerstatustext">
					  {{ $product->sound_loudspeaker }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="mmjack" width="114">
					  <p class="mmjacktext">
					   <strong>3.5mm jack</strong>
					  </p>
					 </td>
					 <td class="Headphonejack" width="468">
					  <p class="Headphonejacktext">
					   {{ $product->sound_jack }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Emptycol2" width="114">
					  <p class="Emptycol2text">
					   <strong>Mic</strong>
					  </p>
					 </td>
					 <td class="Noisecancellation" width="468">
					  <p class="Noisecancellationtext">
					   {{ $product->sound_mic }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="COMMS" width="102" rowspan="6">
					  <p class="COMMStext" align="center">
					   <strong>COMMS</strong>
					  </p>
					 </td>
					 <td class="WLAN" width="114">
					  <p class="WLANtext">
					   <strong>WLAN</strong>
					  </p>
					 </td>
					 <td class="WIFI" width="468">
					  <p class="WIFItext">
					  {{ $product->comms_wlan }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Bluetooth" width="114">
					  <p class="Bluetoothtext">
					   <strong>Bluetooth</strong>
					  </p>
					 </td>
					 <td class="Bluetoothtype" width="468">
					  <p class="Bluetoothtypetext">
					  {{ $product->comms_bluetooth }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="GPS" width="114">
					  <p class="GPStext">
					   <strong>GPS</strong>
					  </p>
					 </td>
					 <td class="GPSdetails" width="468">
					  <p class="GPSdetailstext">
					   {{ $product->comms_gps }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="GPS" width="114">
					  <p class="GPStext">
					   <strong>NFC</strong>
					  </p>
					 </td>
					 <td class="GPSdetails" width="468">
					  <p class="GPSdetailstext">
					   {{ $product->comms_nfc }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Radio" width="114">
					  <p class="Radiotext">
					   <strong>Radio</strong>
					  </p>
					 </td>
					 <td class="FM" width="468">
					  <p class="FMtext">
					   {{ $product->comms_radio }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="USB" width="114">
					  <p class="USBtext">
					   <strong>USB</strong>
					  </p>
					 </td>
					 <td class="USBtype" width="468">
					  <p class="USBtypetext">
					  {{ $product->comms_usb }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Features" width="102">
					  <p class="Featurestext" align="center">
					   <strong>Features</strong>
					  </p>
					 </td>
					 <td class="Sensors" width="114">
					  <p class="Sensorstext">
					   <strong>Sensors</strong>
					  </p>
					 </td>
					 <td class="Sensortype" width="468">
					  <p class="Sensortypetext">
					   {{ $product->feature_sensor }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Battery" width="102" rowspan="2">
					  <p class="Batterytext" align="center">
					   <strong>Battery</strong>
					  </p>
					 </td>
					 <td class="Emptycol21" width="114">
					  <p class="Emptycol21text">
					   <strong> </strong>
					  </p>
					 </td>
					 <td class="Batterypower" width="468">
					  <p class="Batterypowertext">
					  {{ $product->battery_status }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="Charging" width="114">
					  <p class="Chargingtext">
					   <strong>
					Talk Time
					   <br>
					Music Play
					   </strong>
					  </p>
					 </td>
					 <td class="Chargingstatus" width="468">
					  <p class="Chargingstatustext">
					   
					 {{ $product->battery_talk_time }}
					   <br>
					  {{ $product->battery_music }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="MISC" width="102">
					  <p class="MISCtext" align="center">
					   <strong>MISC</strong>
					  </p>
					 </td>
					 <td class="Colors" width="114">
					  <p class="Colorstext">
					   <strong>Colors</strong>
					  </p>
					 </td>
					 <td class="Colorcode" width="468">
					  <p class="Colorcodetext">
					   {{ $product->colors }}
					  </p>
					 </td>
					</tr>
					<tr xss="removed">
					 <td class="MISC" width="102">
					  <p class="MISCtext2" align="center">
					   <strong> </strong>
					  </p>
					 </td>
					 <td class="Price" width="114">
					  <p class="Pricetext">
					   <strong>Price</strong>
					  </p>
					 </td>
					 <td class="PKR" width="468">
					  <p class="PKRtext">
					  {{ $product->price }} PKR
					  </p>
					 </td>
					</tr>
				</tbody>
			</table>

  		</div>
  	</section>

	<script type="text/javascript" src="{{ asset('js/bootstrap-slider.min.js') }} "></script>
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


@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->