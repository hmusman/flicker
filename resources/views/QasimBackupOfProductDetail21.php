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
  <link href="{{ asset('css/template1/tabcontent.css') }}" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="{{ asset('js/ScrollJS2//style.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>

  <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/magnifier.css') }}">


  <link href="{{ asset('css/pagination.css') }}" rel="stylesheet" type="text/css">


  <style>

  #thumb-lens{
        border-radius: 50%;
    box-shadow: rgba(0, 0, 0, 0.75) -1px 1px 5px 1px;
    cursor: none !important;
}
/*  
    /////////////////////////////////////////////     nav Bar search css//////////////////////// */
    #myInput {
      background-image: url('/css/searchicon.png')}}');
      background-position: 10px 12px;
      background-repeat: no-repeat;
      width: 50%;
      font-size: 16px;
      padding: 12px 20px 12px 40px;
      border: 1px solid #ddd;
      margin-bottom: 12px;
    }
    
    #myUL {
      list-style-type: none;
      padding: 0;
      margin: 0;
   
    }
    
    #myUL li a {
      
      margin-top: -1px; /* Prevent double borders */
      
      padding: 12px;
      text-decoration: none;
      color: #605d5d;
    display: block;
    font-weight: 600;
    }
    
    /* #myUL li a:hover:not(.header) {
      background-color: #eee;
    } */


    .dropdown-toggle::after {
content: none !important;
}

.navbar-nav > a{
  background-color: #0071e3 !important;
    padding: 5px 19px 5px 19px !important;
    margin-right: 21px !important;
    border-radius: 25px !important;   
    color: white !important;
 
}

ul[class="dropdown-menu fade-up"] > li::after{
  background: #e3e6e5!important;
  display: block;
    position: absolute;
   
    left: 0;
   width: 90%;
    height: 1px !important;
    content: '' !important;
    text-align: center;
    margin-left: 8px;
}


.col-md-4{
  padding-right: 0px !important;
  padding-left: 0px !important;
}

/* @media (min-width:500px){
  
 #seconNav{
   background-color: red !important;
 }
  } */
  @media (min-width:500px){
  
    #seconNav{
   background-color: rgb(238, 237, 237) !important;
 }


  }


  @media (max-width: 550px){
#navbarNavAltMarkup1{
  background-color: #e6e6e6 !important;
    z-index: 12 !important;
    margin-left: -12px !important;
    width: 100% !important;
}

input[id="myInput"]{
  width: 333px !important;
}

#prcCal{
  margin-left: -1px !important;
}
ul[id="myUL"]{
  width: 87% !important;
}


ul[class="dropdown-menu fade-up show"] > li{
  display: block !important;
}

    #reglogin{
      right: 81px !important;
    font-size: 13px !important;
      right: 91px !important;
    font-size: 10px !important;
    border-bottom: none !important;
    
    bottom: 21px !important;

      
    border-bottom: none !important;
 }
#logoFlickerflone{
  height: 48px !important;
    width: 181px !important;
    margin-left: -17px !important;
    font-size: 58px;
   

}

  }



   /* ============ only desktop view ============ */
   @media all and (min-width: 992px) {
    .navbar .nav-item .dropdown-menu{  display:block; opacity: 0;  visibility: hidden; transition:.3s; margin-top:0;  }
    .navbar .nav-item:hover .nav-link{ color:  rgba(0,0,0,.5) }
    .navbar .dropdown-menu.fade-down{ top:80%; transform: rotateX(-75deg); transform-origin: 0% 0%; }
    .navbar .dropdown-menu.fade-up{ top:180%;  }
    .navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
  }	
  /* ============ desktop view .end// ============ */
  
    </style>





<style>

/* 
  //////////////////////////////////////////    slick btns///////////////////////// */

  div[class="autoplayFeatures slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
 display: none !important;
}


#slickBtnFor > div[class="autoplayFeatures slick-initialized slick-slider slick-dotted"] > button[class="slick-prev slick-arrow"]{
  background-image: url({{ asset('storage/images/headerimg/ic_keyboard_arrow_left_black_18dp.png')}}');
  border-radius: 50%;
  height: 38px;
    background-repeat: no-repeat;
    width: 100px;
}
#slickBtnFor > div[class="autoplayFeatures slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]{
  background-image: url({{ asset('storage/images/headerimg/ic_keyboard_arrow_right_black_18dp.png')}}');
  border-radius: 50%;
  height: 38px;
    background-repeat: no-repeat;
    width: 26px;
}
</style>


<style>

.tblrowbottmstl{
  margin-top: -10px ;
  border-bottom: 1px #efefef solid; 
   width: 118%;
}
.tblrowbottmstl2{
  margin-top: -10px ;
  border-bottom: 1px #efefef solid; 
  
}

.tblrowbottmstl3{
  margin-top: -10px ;
 
  
}



ol > li{
  font-size: 14px !important;
    font-weight: 500 !important;
}





</style>




<style>
  @media (min-width:500px){
  
div[class="img-zoom-container"]{
  margin-left: 174px !important;
}

  }


  @media (max-width: 550px){

    /* .img-zoom-container{
      width: 0px !important;
    } */
#mobviebtns{
  font-size: 7px !important;
}
#mobviebtnsabove{
  padding: 0px 10px 5px 10px !important;
}
#comparebtm{
  margin-top: 39px !important;
}





a[href="#view4"]{
  
  top: 18px !important;

}

.tabcontents{
  margin-top: 19px !important;
}
}


.tabs{
  background: #F0F0F0 url(tabbg.gif) 0 0 repeat-x;
  border: 1px solid #CCC;
}
</style>







 <style type="text/css">

 
/* ///////////////////////  pagination////////////////////////////////////////////////  */


  ul, li {
      list-style: none;
  }

  #wrapper {
      width: 900px;
      margin: 20px auto;
  }

  .data-container {
      margin-top: 20px;
  }

  .data-container ul {
      padding: 0;
      margin: 0;
  }

  .data-container li {
      margin-bottom: 5px;
      padding: 5px 10px;
      background: #eee;
      color: #666;
  }
</style>




<style>
img[src="{{ asset('storage/images/logo Black-01.jpg')}}"]{
  height: 57px !important;
    /* top: -1px; */
    margin-top: -8px;
    margin-bottom: -8px;
}
img[src="{{ asset('storage/images/headerimg/ic_query_builder_black_18dp.png') }} "]{
  height: 28px !important;
}


  @media (max-width: 550px){

#pages{
  text-align: center !important;
}

#srchoption{
  height: 26px !important;
    font-size: 1.8vw !important;
    text-align: center !important;
    padding: 7px 18px 10px 18px !important;
}
#srchopnon{
  
  height: 28px !important;

}

#sortBy{
  text-align: center !important;
}

#set55atmob{
  width: 10% !important;
}
#setSobercatOnMob{
  width: 26% !important;
  font-size: 4vw !important;

}

#settimepnMob{
  width: 50% !important;
}



#zeroCpOnMobile{

  font-size: 4.4vw !important;
    margin-left: 3px !important;
}

#aug20onmob{
  font-size: 3.7vw !important;
}



img[src="{{ asset('storage/images/headerimg/ic_query_builder_black_18dp.png')}}"]{
  height: 17px !important;
    margin-top: -12px !important;
}




img[src="{{ asset('storage/images/headerimg/ic_room_black_18dp.png')}}"]{
  height: 18px !important;
    margin-top: -12px !important;
}


#vibiatmob{
  font-size: 4vw !important;
}


#vibiresponsive{
  width: 50% !important
  ;
}

img[src="{{ asset('storage/images/headerimg/download__1_-removebg-preview (2).png')}}"]{
  width: 83% !important;
    height: 10px !important;
    margin-top: -1px !important;
}



#Sresponsive{
  padding-top: 24px !important;
  font-size: 6.2vw !important;
}

#replybtnMobile{
  width: 20% !important;
}

#ReplyResp{
  width: 30% !important;
}


#RatingMob{
  width: 50% !important;
}

#replyomgresponsive{
  font-size: 3.5vw !important;
}




#RatingZero{
  margin-left: 36px !important;
  font-size: 3.7vw !important;
}




#LoremResp{
  font-size: 2.2vw !important;
}












@media (min-width: 320px) and (max-width: 350px) {



  .img-zoom-container {
 
    width: 304px !important;
   
  }


}






}


#myimage{
  border: 2px #afa3a3 solid !important;
}


.colr{
color: #0071e3;
font-size: 20px !important;
}

.TableStyl{
  color: #8c8585fc !important;
}


#view1{
  width: 70% !important;
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

            <li><a href="#view5">REVIEWS</a></li>
      </ul>
      <div class="tabcontents">
            <div id="view1">
              


	            <div class="row"  style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
	              <div class="col-md-2">
	               <font style="font-size: 20px;
	              
	               font-weight: 600; " class="colr"> NETWORK</font>
	              </div>
	              <div class="col-md-2" style="color: black; font-size: 20px" >Technology</div>
	              <div class="col-md-8 TableStyl" style="color: black; font-size: 20px">GSM / SDMA /HSPA / EVDO / LTE</div>
	            </div>



         


	            <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
	              	<div class="col-md-2"><font style="font-size: 24px;font-weight: 600; " class="colr"> LAUNCH</font></div>
	              	<div class="col-md-2" style="color: black; font-size: 20px" >
	              		@if($product->launch_announced !='')
		                	<p  style="border-bottom: 1px #efefef solid;     width: 118%;">Announced</p>
		                @endif
		                @if($product->launch_status !='')
		                	<p style="margin-top: -10px;"> Status</p>
		                @endif
	            	</div>
	              	<div class="col-md-8" style="color: black; font-size: 20px">
	                	@if($product->launch_announced !='')
	                		<p class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ date('Y',strtotime($product->launch_announced)) }},
							{{ date('F',strtotime($product->launch_announced)) }} {{ date('d',strtotime($product->launch_announced)) }} </p>
	                	@endif
	                	@if($product->launch_status !='')
	                 		<p class="TableStyl" style="margin-top: -10px;">{{ $product->launch_status }} </p>
	                 	@endif
	                 </div>
	            </div>





	            <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
	              <div class="col-md-2">
	               <font style="font-size: 24px;
	              
	               font-weight: 600; " class="colr"> BODY</font>
	              </div>
	              <div class="col-md-2" style="color: black; font-size: 20px" >
	                @if($product->body_dimension !='')
	                	<p  style="border-bottom: 1px #efefef solid;      width: 118%;">Dimensions</p>
	                @endif
	                @if($product->body_weight !='')
	                	<p  class="tblrowbottmstl"> Weight</p>
	                @endif
	                @if($product->body_build !='')
	                	<p class="tblrowbottmstl"> Build</p>
	                @endif
	                @if($product->body_sim !='')
	                	<p class="tblrowbottmstl"> SIM</p>
	                @endif

	              </div>
	              <div class="col-md-8" style="color: black; font-size: 20px">
	                @if($product->body_dimension !='')
	                	<p class="TableStyl"style="border-bottom: 1px #efefef solid;">{{ $product->body_dimension }}</p>
	                @endif
	                @if($product->body_weight !='')
	                	<p class="tblrowbottmstl2 TableStyl">{{ $product->body_weight }}</p>
	                @endif
	                 @if($product->body_build!='')
	                	<p class="tblrowbottmstl2 TableStyl">{{ $product->body_build }}</p>
	                @endif
	                 @if($product->body_sim !='')
	                	<p class="tblrowbottmstl2 TableStyl">{{ $product->body_sim }}</p>
	                @endif

	                </div>
                                
                </div>



                <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                  <div class="col-md-2">
                   <font style="font-size: 24px;
                  
                   font-weight: 600; " class="colr"> DISPLAY</font>
                  </div>
                  <div class="col-md-2" style="color: black; font-size: 20px" >
                    	@if($product->display_type !='')
                    		<p  style="border-bottom: 1px #efefef solid;      width: 118%;">Type</p>
                    	@endif
                    	@if($product->display_size !='')
                    		<p class="tblrowbottmstl" >Size</p>
                    	@endif
                    	@if($product->display_resolution !='')
                    		<p class="tblrowbottmstl" >Resolution</p>
                    	@endif
                    	@if($product->display_protection !='')
                    		<p class="tblrowbottmstl" >Protection</p>
                    	@endif
    
    
                  </div>
                  <div class="col-md-8" style="color: black; font-size: 20px">
                    	@if($product->display_type !='')
                    		<p class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ $product->display_type }}</p>
                    	@endif
                    	@if($product->display_size !='')
                    		<p class="tblrowbottmstl2 TableStyl">{{ $product->display_size }}</p>
                    	@endif
                    	@if($product->display_resolution !='')
                    		<p class="tblrowbottmstl2 TableStyl">{{ $product->display_resolution }}</p>
                    	@endif
                     	@if($product->display_protection !='')
                    		<p class="tblrowbottmstl2 TableStyl">{{ $product->display_protection }}</p>
                    	@endif
                    </div>
                   
                    
                    </div>

                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; " class="colr"> PLATEFORM</font>
                      </div>
                      <div class="col-md-2" style="color: black; font-size: 20px" >
                        @if($product->platform_os !='')
                        	<p  style="border-bottom: 1px #efefef solid;      width: 118%;">OS</p>
                        @endif
                        @if($product->platform_chipset !='')
                        	 <p class="tblrowbottmstl">Chipset</p>
                        @endif
                        @if($product->platform_cpu !='')
                        	 <p class="tblrowbottmstl">CPU</p>
                        @endif
                        @if($product->platform_gpu !='')
                        	 <p class="tblrowbottmstl">GPU</p>
                        @endif

        
        
                      </div>
                      	<div class="col-md-8" style="color: black; font-size: 20px">
	                        @if($product->platform_os !='')
	                        	<p class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ $product->platform_os }}</p>
	                        @endif
                        	@if($product->platform_chipset !='')
	                        	<p class="tblrowbottmstl2 TableStyl">{{ $product->platform_chipset }}</p>
	                        @endif
	                        @if($product->platform_cpu !='')
	                        	<p class="tblrowbottmstl2 TableStyl">{{ $product->platform_cpu }}</p>
	                        @endif
	                        @if($product->platform_gpu !='')
	                        	<p class="tblrowbottmstl2 TableStyl">{{ $product->platform_gpu }}</p>
	                        @endif
                       
                        </div>
                        
                        
                        
                        
                    </div>
                        
                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; " class="colr"> MEMORY</font>
                      </div>
                      	<div class="col-md-2" style="color: black; font-size: 20px" >
                        @if($product->memory_card_slot !='')
                        	<p  style="border-bottom: 1px #efefef solid;      width: 118%;">Card Slot</p>
                        @endif
                        @if($product->memory_ram !='')
                        	 <p class="tblrowbottmstl">Ram</p>
                        @endif
                        @if($product->memory_storage !='')
                        	 <p class="tblrowbottmstl">Storage</p>
                        @endif
        
                        </div>
                        <div class="col-md-8" style="color: black; font-size: 20px">
                        
                         	@if($product->memory_card_slot !='')
	                        	<p class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ $product->memory_card_slot }}</p>
	                        @endif
	                        @if($product->memory_ram !='')
	                        	<p class="tblrowbottmstl2 TableStyl">{{ $product->memory_ram }}</p>
	                        @endif
	                        @if($product->memory_storage !='')
	                        	<p class="tblrowbottmstl2 TableStyl">{{ $product->memory_storage }}</p>
	                        @endif
                        
                        </div>
                        
                    </div>
                        
                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; " class="colr"> MAIN CAMERA</font>
                      </div>
                      	<div class="col-md-2" style="color: black; font-size: 20px" >
	                      	@if($product->main_type !='' && $product->main_type_value !='')
	                      		 <p  style="border-bottom: 1px #efefef solid;width: 118%;">{{ ucwords($product->main_type) }}</p>
	                      	@endif
	                      	@if($product->main_feature !='')
	                      		 <p class="tblrowbottmstl">Features</p>
	                      	@endif
	                      	@if($product->main_video !='')
	                      		 <p class="tblrowbottmstl">Video</p>
	                      	@endif
                      	</div>
                      	<div class="col-md-8" style="color: black; font-size: 20px">
                        	@if($product->main_type !='' && $product->main_type_value !='')
                        		<p class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ $product->main_type_value }}</p>
                        	@endif
                        	@if($product->main_feature !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->main_feature }} </p>
                        	@endif
                        	@if($product->main_video !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->main_video }} </p>
                        	@endif
                        </div>
                    </div>
            
                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; " class="colr"> SELFIE CAMERA</font>
                      </div>
                      	<div class="col-md-2" style="color: black; font-size: 20px" >
	                      	@if($product->selfie_type !='' && $product->selfie_type_value !='')
	                      		 <p  style="border-bottom: 1px #efefef solid;width: 118%;">{{ ucwords($product->selfie_type) }}</p>
	                      	@endif
	                      	@if($product->selfie_feature !='')
	                      		 <p class="tblrowbottmstl">Features</p>
	                      	@endif
	                      	@if($product->selfie_video !='')
	                      		 <p class="tblrowbottmstl">Video</p>
	                      	@endif
                      	</div>
                      	<div class="col-md-8" style="color: black; font-size: 20px">
                        	@if($product->selfie_type !='' && $product->selfie_type_value !='')
                        		<p class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ $product->selfie_type_value }}</p>
                        	@endif
                        	@if($product->selfie_feature !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->selfie_feature }} </p>
                        	@endif
                        	@if($product->selfie_video !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->selfie_video }} </p>
                        	@endif
                        </div>
                    </div>

                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; " class="colr"> SOUND</font>
                      </div>
                      	<div class="col-md-2" style="color: black; font-size: 20px" >
	                      	@if($product->sound_loudspeaker !='')
	                      		 <p  style="border-bottom: 1px #efefef solid;width: 118%;">Loudspeaker</p>
	                      	@endif
	                      	@if($product->sound_jack !='')
	                      		 <p class="tblrowbottmstl">3.5 mm Jack</p>
	                      	@endif
	                      	@if($product->sound_mic!='')
	                      		 <p class="tblrowbottmstl">Mic</p>
	                      	@endif
                      	</div>
                      	<div class="col-md-8" style="color: black; font-size: 20px">
                        	@if($product->sound_loudspeaker !='')
                        		<p class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ $product->sound_loudspeaker }}</p>
                        	@endif
                        	@if($product->sound_jack !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->sound_jack }} </p>
                        	@endif
                        	@if($product->sound_mic !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->sound_mic }} </p>
                        	@endif
                        </div>
                    </div>

                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; " class="colr">COMMS</font>
                      </div>
                      	<div class="col-md-2" style="color: black; font-size: 20px" >
	                      	@if($product->comms_wlan !='')
	                      		 <p  style="border-bottom: 1px #efefef solid;width: 118%;">Wlan</p>
	                      	@endif
	                      	@if($product->comms_bluetooth !='')
	                      		 <p class="tblrowbottmstl">Bluetooth</p>
	                      	@endif
	                      	@if($product->comms_gps!='')
	                      		 <p class="tblrowbottmstl">GPS</p>
	                      	@endif
	                      	@if($product->comms_nfc!='')
	                      		 <p class="tblrowbottmstl">NFC</p>
	                      	@endif
                      	</div>
                      	<div class="col-md-8" style="color: black; font-size: 20px">
                        	@if($product->comms_wlan !='')
                        		<p class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ $product->comms_wlan }}</p>
                        	@endif
                        	@if($product->bluetooth !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->bluetooth }} </p>
                        	@endif
                        	@if($product->comms_gps !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->comms_gps }} </p>
                        	@endif
                        	@if($product->comms_nfc !='')
	                      		 <p class="tblrowbottmst2 TableStyl">{{ $product->comms_nfc }}</p>
	                      	@endif
                        </div>

                    </div>

                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; " class="colr">FEATURES</font>
                      </div>
                      	<div class="col-md-2" style="color: black; font-size: 20px" >
	                      	@if($product->feature_sensor !='')
	                      		 <p  style="border-bottom: 1px #efefef solid;width: 118%;">Sensor</p>
	                      	@endif
                      	</div>
                      	<div class="col-md-8" style="color: black; font-size: 20px">
                        	@if($product->feature_sensor !='')
                        		<p class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ $product->feature_sensor }}</p>
                        	@endif
                        </div>

                    </div>

                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; " class="colr">BATTERY</font>
                      </div>
                      	<div class="col-md-2" style="color: black; font-size: 20px" >
	                      	@if($product->battery_status !='')
	                      		 <p  style="border-bottom: 1px #efefef solid;width: 118%;">Status</p>
	                      	@endif
	                      	@if($product->battery_talk_time !='')
	                      		<p class="tblrowbottmstl">Talk Time</p>
	                      	@endif
	                      	@if($product->battery_music!='')
	                      		 <p class="tblrowbottmstl">Music</p>
	                      	@endif
                      	</div>
                      	<div class="col-md-8" style="color: black; font-size: 20px">
                        	@if($product->battery_status !='')
                        		<p  class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ $product->battery_status }}</p>
                        	@endif
                        	@if($product->battery_talk_time !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->battery_talk_time }} </p>
                        	@endif
                        	@if($product->battery_music !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->battery_music }} </p>
                        	@endif
                        </div>

                    </div>
                 	
                 	<div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; " class="colr">MISC</font>
                      </div>
                      	<div class="col-md-2" style="color: black; font-size: 20px" >
                      		@if($product->variation_colors->count()>0)
	                      		 <p  style="border-bottom: 1px #efefef solid;width: 118%;">Colors</p>
	                      	@endif
	                      	@if($product->price !='')
	                      		 <p  style="border-bottom: 1px #efefef solid;width: 118%;">Price</p>
	                      	@endif
                      	</div>
                      	<div class="col-md-8" style="color: black; font-size: 20px">
                        	@if($product->variation_colors->count()>0)
                        		@php $colorName = ''; $count = $product->variation_colors->count(); $i=1; @endphp
                        		<p class="TableStyl" style="border-bottom: 1px #efefef solid;">
                        			@foreach($product->variation_colors as $color)
          								  		@php $i++; @endphp
          								  		@if($colorName !=$color->color)
          								  			{{ ucfirst($color->color)}} @if($count>$i) , @endif
          								  		@endif
          										@php $colorName = $color->color; @endphp
          								  	@endforeach

                        		</p>
                        	@endif
                        	@if($product->price !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->price }} </p>
                        	@endif
                        	
                        </div>

                    </div>

            </div>

          
          <div id="view2">
             


            <div class="container">
          
            <div class="row"  style="    background-color: #f0f0f0;   border-bottom: 2px #c4c0c0 solid;  ">
              <div class="col-md-6" style="height: 81px;padding-top: 27px;" >
              <a href="#" style="  background-color: #4a88c2; 
              color: white;
              padding: 10px 18px 10px 18px; text-decoration: none;
              border-radius: 4px;">POST YOUR OPINIONS </a>
              </div>

              
              <div class="col-md-2" id="pages" style="color: black; font-size: 20px; text-align: right; padding-top: 19px;        " >  Pages : </div>


              <div class="col-md-4" style="color: black; font-size: 20px ; padding-top: 19px;              " >
              
              
   
                <div id="pagination-demo1"></div>
  
  
                </div>
             
            </div>

          </div>




            <div class="container">

            <div class="row"  style="    background-color: #f0f0f0;   border-bottom: 5px #efefef solid; border-bottom: 1px #e3e2db solid;  ">
            
            
              <div class="col-md-6" style="height: 81px;padding-top: 27px;" >


<div style="float: left; width: 50%; height: 100%; "><input id="srchopnon" type="search" name="srch" style="height: 42px;width: 97%" /></div>
<div style="float: left; width: 50%; height: 100%; "><a href="#"><p id="srchoption" style="  
  height: 43px;
  font-size: 1.2vw;
  text-align: center;  background-color: #f9f9f9;   color: #0b0a0a;  padding: 10px 18px 10px 18px; text-decoration: none; border-radius: 4px;   font-weight: 700; border: 1px black solid;">SEARCH OPINIONS </p></a></div>





   
             
            
            
            </div>

              
              <div id="sortBy" class="col-md-4" style="color: black; font-size: 20px; text-align: right; padding-top: 19px;        " >  Sort By: </div>


              <div class="col-md-2" style="color: black; font-size: 20px ; padding-top: 19px;              " >
              
              
   

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

<div class="row">


            <div   style=" height: 400px;  border: 1px #c4c0c0 solid;   margin-top: 17px;  background-color: #f0f0f0;   border-bottom: 5px #efefef solid; border-bottom: 1px #e3e2db solid;  ">
            
            <div style="height: 20%; width: 100%; background-image: linear-gradient(to top right, #e5817a, #f0f0f0); ">
            
              <div  style="  width: 8% ;height: 100%;  float: left; text-align: center;"><p  id="Sresponsive" style="width: 100%;    font-size: 3.2vw;  color: white;   ">S</p> </div>
              <div style="  width: 92% ;height: 100%; background-color: #f0f0f0; float: left;">
              
                <div style="height: 60%; width: 100%;  color: black !important;">
                
                
                
                  <div id="setSobercatOnMob" style="height: 100%; width: 20%;  float: left; color: black;    font-size: 2vw;    font-weight: 700;">
                    
                    
                    <div style="height: 100%; width: 92%; float: left;     text-align: right;"> <p style="width: 100%;  font-weight: 400;">SoberCat </p></div>
                    <div style="height: 100%; width: 8%;  float: left;">
                      <img   style="width: 100%; height: auto;" src="{{ asset('storage/images/headerimg/ic_check_circle_black_18dp.png')}}" />
                    
                    </div>
                  
                  </div>
                  
                  <div id="set55atmob" style="height: 100%; width: 55%;  float: left;">

                  </div>
                 
                 
                  <div id="settimepnMob" style="height: 100%; width: 25%;  float: left;float: left; font-size: 20px;  font-weight: 600;"> 
                    <!-- <img   style="width: 100%; height: auto;" src="{{ asset('storage/images/headerimg/ic_query_builder_black_18dp.png')}}" /> 
                    20 Aug 2020 
                    <img style="width: 10%;"src="{{ asset('storage/images/headerimg/ic_room_black_18dp.png')}}" /> 
                    0Cp  -->
                    <div style="height: 100%; width: 10%; float: left;"><img   style="width: 96%; height: 25px;" src="{{ asset('storage/images/headerimg/ic_query_builder_black_18dp.png')}}" /></div>

                    <div style="height: 100%; width: 60%; float: left;"><p id="aug20onmob" style="width: 100%; font-size: 1.7vw;">20 Aug 2020</p></div>

                    <div style="height: 100%; width: 10%; float: left;text-align: right; ">  <img style=""src="{{ asset('storage/images/headerimg/ic_room_black_18dp.png')}}" /> </div>
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
                <p id="LoremResp" style="font-size: 1.5vw;  padding: 33px;  ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In distinctio aut saepe eius expedita incidunt, quos inventore numquam architecto sapiente officiis! Officia architecto explicabo reiciendis distinctio dolorum nam praesentium alias!
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sit, perferendis doloremque maiores quibusdam repellendus quo, deserunt at quae alias laborum cupiditate necessitatibus molestiae similique velit dicta aperiam atque molestias!
                </p>
                </div>






                <div style="height: 30%; width: 100%; background-color: #ffffff; ">
              <p style="    font-size: 1.7vw;
              font-weight: 500;">
 Turning off truetons should solve, with true tones on the display looks yellowwish...
              </p>
                </div>
              
              
              </div>
            
            
            </div>











            <div style="height: 10%; width: 100%; background-color: white;">
            
              <div id="RatingMob" style="height: 100%; width: 30%;  float: left;"> 
              
              <!-- <p style="width: 100%">
                Rating 0 <img src="{{ asset('storage/images/headerimg//ic_keyboard_arrow_up_black_18dp.png')}}" />  |  <img src="{{ asset('storage/images/headerimg/ic_keyboard_arrow_down_black_18dp.png')}}" />        <img src="{{ asset('storage/images/headerimg/ic_warning_black_18dp.png')}}" />Report     
              </p> -->
              <div style="height: 100%; width: 30%;  float: left;"><p id="RatingZero" style="width: 100%;font-size: 1.5vw; text-align: center;">Rating 0</p> </div>
           
           
              <div style="height: 100%; width: 30%;  float: left;"> </div>
           
              <div style="height: 100%; width: 40%;  float: left;"> 
              
                <a href="#up" style="text-decoration: none;">  <img  style="width: 26%; height: auto;" src="{{ asset('storage/images/headerimg//ic_keyboard_arrow_up_black_18dp.png')}}" /> </a> | <a href="#down" style="text-decoration: none;">  <img  style="width: 26%; height: auto;" src="{{ asset('storage/images/headerimg/ic_keyboard_arrow_down_black_18dp.png')}}" /> </a>
              
              </div>
            
              
              </div>

              <div id="ReplyResp" style="height: 100%; width: 60%; float: left;"> </div>
              <div id="replybtnMobile" style="height: 100%; width: 10%;  float: left;"> <a href="#" style="text-decoration: none;"> <p id="replyomgresponsive" style="    font-size: 1.5vw;        "><img style="width: 26%; height: auto;" src="{{ asset('storage/images/headerimg//left-curve-arrow-pngrepo-com.png')}}" /> Reply</p></a> </div>
            
            </div>
          
            </div>

          </div>
        </div>





        <div class="container">

          <div class="row">
          
          
                      <div   style=" height: 400px;  border: 1px #c4c0c0 solid;   margin-top: 17px;  background-color: #f0f0f0;   border-bottom: 5px #efefef solid; border-bottom: 1px #e3e2db solid;  ">
                      
                      <div style="height: 20%; width: 100%; background-image: linear-gradient(to top right, #e5817a, #f0f0f0);">
                      
                        <div  style="  width: 8% ;height: 100%;  float: left; text-align: center;"><p  id="Sresponsive" style="width: 100%;    font-size: 3.2vw;  color: white;   ">T</p> </div>
                        <div style="  width: 92% ;height: 100%; background-color: #f0f0f0; float: left;">
                        
                          <div style="height: 60%; width: 100%;  color: black !important;">
                          
                          
                          
                            <div id="setSobercatOnMob" style="height: 100%; width: 20%;  float: left; color: black;    font-size: 2vw;    font-weight: 700;">
                              
                              
                              <div style="height: 100%; width: 92%; float: left;     text-align: right;"> <p style="width: 100%;  font-weight: 400;">SoberCat </p></div>
                              <div style="height: 100%; width: 8%;  float: left;">
                                <img   style="width: 100%; height: auto;" src="{{ asset('storage/images/headerimg/ic_check_circle_black_18dp.png')}}" />
                              
                              </div>
                            
                            </div>
                            
                            <div id="set55atmob" style="height: 100%; width: 55%;  float: left;">
          
                            </div>
                           
                           
                            <div id="settimepnMob" style="height: 100%; width: 25%;  float: left;float: left; font-size: 20px;  font-weight: 600;"> 
                              <!-- <img   style="width: 100%; height: auto;" src="{{ asset('storage/images/headerimg/ic_query_builder_black_18dp.png')}}" /> 
                              20 Aug 2020 
                              <img style="width: 10%;"src="{{ asset('storage/images/headerimg/ic_room_black_18dp.png')}}" /> 
                              0Cp  -->
                              <div style="height: 100%; width: 10%; float: left;"><img   style="width: 96%; height: 25px;" src="{{ asset('storage/images/headerimg/ic_query_builder_black_18dp.png')}}" /></div>
          
                              <div style="height: 100%; width: 60%; float: left;"><p id="aug20onmob" style="width: 100%; font-size: 1.7vw;">20 Aug 2020</p></div>
          
                              <div style="height: 100%; width: 10%; float: left;text-align: right; ">  <img style=""src="{{ asset('storage/images/headerimg/ic_room_black_18dp.png')}}" /> </div>
                              <div style="height: 100%; width: 20%; float: left; text-align: left;"><p id="zeroCpOnMobile" style="width: 100%; font-size: 1.4vw;">0Cp</p></div>
          
          
                            </div>
                          
          
          
                            
                          </div>
                          <div style="height: 40%; width: 100%; background-color: #ffffff;text-decoration: underline; ">
                            
                          <div style="width: 10%; height: 100%;float: left; text-align: right; ">
                            <img  style="width: 35%;  height: 21px;   margin-top: 10px;" src="{{ asset('storage/images/headerimg/download__1_-removebg-preview (2).png')}}" /> 
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
                          <p id="LoremResp" style="font-size: 1.5vw;  padding: 33px;  ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In distinctio aut saepe eius expedita incidunt, quos inventore numquam architecto sapiente officiis! Officia architecto explicabo reiciendis distinctio dolorum nam praesentium alias!
                          
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sit, perferendis doloremque maiores quibusdam repellendus quo, deserunt at quae alias laborum cupiditate necessitatibus molestiae similique velit dicta aperiam atque molestias!
                          </p>
                          </div>
          
          
          
          
          
          
                          <div style="height: 30%; width: 100%; background-color: #ffffff; ">
                        <p style="    font-size: 1.7vw;
                        font-weight: 500;">
           Turning off truetons should solve, with true tones on the display looks yellowwish...
                        </p>
                          </div>
                        
                        
                        </div>
                      
                      
                      </div>
          
          
          
          
          
          
          
          
          
          
          
                      <div style="height: 10%; width: 100%; background-color: white;">
                      
                        <div id="RatingMob" style="height: 100%; width: 30%;  float: left;"> 
                        
                        <!-- <p style="width: 100%">
                          Rating 0 <img src="{{ asset('storage/images/headerimg//ic_keyboard_arrow_up_black_18dp.png')}}" />  |  <img src="{{ asset('storage/images/headerimg/ic_keyboard_arrow_down_black_18dp.png')}}" />        <img src="{{ asset('storage/images/headerimg/ic_warning_black_18dp.png')}}" />Report     
                        </p> -->
                        <div style="height: 100%; width: 30%;  float: left;"><p id="RatingZero" style="width: 100%;font-size: 1.5vw; text-align: center;">Rating 0</p> </div>
                     
                     
                        <div style="height: 100%; width: 30%;  float: left;"> </div>
                     
                        <div style="height: 100%; width: 40%;  float: left;"> 
                        
                          <a href="#up" style="text-decoration: none;">  <img  style="width: 26%; height: auto;" src="{{ asset('storage/images/headerimg//ic_keyboard_arrow_up_black_18dp.png')}}" /> </a> | <a href="#down" style="text-decoration: none;">  <img  style="width: 26%; height: auto;" src="{{ asset('storage/images/headerimg/ic_keyboard_arrow_down_black_18dp.png')}}" /> </a>
                        
                        </div>
                      
                        
                        </div>
          
                        <div id="ReplyResp" style="height: 100%; width: 60%; float: left;"> </div>
                        <div id="replybtnMobile" style="height: 100%; width: 10%;  float: left;"> <a href="#" style="text-decoration: none;"> <p id="replyomgresponsive" style="    font-size: 1.5vw;        "><img style="width: 26%; height: auto;" src="{{ asset('storage/images/headerimg//left-curve-arrow-pngrepo-com.png')}}" /> Reply</p></a> </div>
                      
                      </div>
                    
                      </div>
          
                    </div>
                  </div>
          

        



          </div>





          <div id="view3">
           


            <h5>No Vedio Availabla</h5>
                                                          
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

</html>