<!DOCTYPE html>
<html lang="en">
     <head>
   
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Html slider" />
	
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" >


      <!-- Start WOWSlider.com HEAD section -->
      <link rel="stylesheet" type="text/css" href="{{asset('Slider/engine1/style.css')}}" />
      <script type="text/javascript" src="{{asset('Slider/engine1/jquery.js')}}"></script>
      <!-- End WOWSlider.com HEAD section -->

      <script src="{{ asset('js/jquery-2.1.3.min.js')}}" ></script>
      <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
      <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
      <link href="{{ asset('css/style.css')}}" rel='stylesheet' type='text/css' media="all">
      <link href="{{ asset('css/mystyle.css')}}" rel='stylesheet' type='text/css' media="all">
      <link rel="stylesheet" href="js/ScrollJS2//style.css">
      <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css')}}"/>

      <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

   </head>
  
   <style>

@media (min-width: 500px){
.qasimnavigatin {
 padding: 13px 10px 0px 10px !important;
}
}


      img[src="{{ asset('storage/images/logo Black-01.jpg') }}"]{
      height: 55px !important;
      /* top: -1px; */
      margin-top: -8px;
      margin-bottom: -8px;
      }
         #myInput {
      /* background-image: url('/css/searchicon.png');
      background-position: 10px 12px;
      background-repeat: no-repeat;
      width: 50%;
      font-size: 16px;
      padding: 12px 20px 12px 40px;
      border: 1px solid #ddd;
      margin-bottom: 12px; */


      
                 height: 28px;
    position: relative;
    top: 4px;
             background: #f8f7f7;
      background-image: url('/css/searchicon.png');
      background-position: 10px 12px;
      background-repeat: no-repeat;
      width: 100%;
      font-size: 16px;
      padding: 12px 20px 12px 40px;
      border: 0px solid #ddd;
      margin-bottom: 12px;
      }
        #myUL {
      list-style-type: none;
      padding: 0;
      margin: 0;
      }
      #myUL li a {
      margin-top: -1px; 
      padding: 12px;
      text-decoration: none;
      color: #605d5d;
      display: block;
      font-weight: 600;

      
    height: 24px;
    margin-top: 16px;
      }



      .ws_shadow{
         display: none !important;
      }

      #prcCal{
             margin-top: 2px !important;
      }

a[class="ws_prev"],
a[class="ws_next"] {
   z-index: 1 !important;
}



            #myUL li:hover{
    background-color: #f9f9f9 !important;
      }
         #myUL > li:hover  #setwidth a{
    background-color: #f9f9f9 !important;
      }
         
     #myUL li:hover #redCol{
border-left: 2px red solid !important;
      }

   </style>
   <style>
      /* /////////////////////////////slick css//////////////////////////////////// */
      button[class="slick-next slick-arrow"], button[class="slick-prev slick-arrow"] {
      display: block !important;
      }
      div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-prev slick-arrow"]::before {
      color: #6263637a !important;
      display: none !important;
      }
      div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]::before {
      color: #6263637a !important;
      }
      div[class="autoplay slick-initialized slick-slider slick-dotted"] >  ul[class="slick-dots"]{
      position: absolute;
      top: 151px;
      height: 220px !important;
      width: 87%;
      margin-left: 20px;
      border-bottom: 1px black solid;
      border-right: 1px black solid;
      border-left: 1px black solid;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
      }
      div[class="autoplayFeatures slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
      display: none !important;
      }
      .slick-dotted.slick-slider{
      margin-bottom: -10px !important;
      }
      a[class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10"]{
      background-color: #101115;
      padding: 5px 19px 5px 19px;
      margin-right: 21px;
      border-radius: 25px;
      /* margin-bottom: 10px; */
      margin: 5px 0px 10px 10px;
      }
      #slickBtnFor > div[class="autoplayFeatures slick-initialized slick-slider slick-dotted"] > button[class="slick-prev slick-arrow"]{
      background-image: url('images/headerimg/ic_keyboard_arrow_left_black_18dp.png');
      border-radius: 50%;
      height: 38px;
      background-repeat: no-repeat;
      width: 100px;
      }
      #slickBtnFor > div[class="autoplayFeatures slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]{
      background-image: url('images/headerimg/ic_keyboard_arrow_right_black_18dp.png');
      border-radius: 50%;
      height: 38px;
      background-repeat: no-repeat;
      width: 26px;
      }
      button[id="slick-slide-control10"]::before{
      height: 38px;
      background-repeat: no-repeat;
      width: 26px;
      content: url('images/headerimg/kissclipart-boton-1-png-clipart-number-numerical-digit-212c2ed0123fbde4 (1).png') !important;
      }
      button[id="slick-slide-control11"]::before{
      height: 38px;
      background-repeat: no-repeat;
      width: 26px;
      content: url('images/headerimg/1200px-Circle-two.svg.png') !important;
      }
      button[id="slick-slide-control12"]::before{
      height: 38px;
      background-repeat: no-repeat;
      width: 26px;
      content: url('images/headerimg/number-icon-number-3-png-clip-art-thumbnail.png') !important;
      }
      button[id="slick-slide-control13"]::before{
      height: 38px;
      background-repeat: no-repeat;
      width: 26px;
      content: url('images/headerimg/40ca6917113d43b16b4a77ad328c6ecb.png') !important;
      }
      button[id="slick-slide-control14"]::before{
      height: 38px;
      background-repeat: no-repeat;
      width: 26px;
      content: url('images/headerimg/ab868e89a77a0aa7e22a91cd4a773d02.png') !important;
      }
      /* .slick-dots li button:before{
      content: none !important;
      } */
      #slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-prev slick-arrow"]{
      margin-left: 23px !important;
      top: 81px;
      height: 67px !important;
      width: 22px !important;
      background-color: #5f5b54;
      background-image: url(images/headerimg/ic_keyboard_arrow_left_white_18dp.png) !important;
      background-position: center !important;
      background-repeat: no-repeat;
      border-top-right-radius: 6px;
      border-bottom-right-radius: 6px;
      }
      #slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]{
      right: 21px !important;
      top: 81px !important;
      height: 67px !important;
      width: 22px !important;
      background-color: #5f5b54;
      background-image: url(images/headerimg/ic_keyboard_arrow_right_white_18dp.png) !important;
      background-position: center !important;
      background-repeat: no-repeat;
      border-top-left-radius: 6px;
      border-bottom-left-radius: 6px;
      }
      .slick-prev {
      left: 0px !important;
      z-index: 10 !important;
      }
      ul[class="dropdown-menu fade-up"] >  li {
      display: block !important;
      }
      #bloghr::after{
      background: #e3e6e5!important;
      background: #1c1e1e!important;
      display: block;
      position: absolute;
      left: 0;
      width: 60%;
      height: 2px !important;
      content: '' !important;
      text-align: center;
      margin-left: 67px;
      margin-top: 24px !important;
      }
   </style>
   <style>
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
   </style>
   <style type="text/css">
      /* ============ only desktop view ============ */
      @media all and (min-width: 992px) {
      .navbar .nav-item .dropdown-menu{  display:block; opacity: 0;  visibility: hidden; transition:.3s; margin-top:0;  }
      .navbar .nav-item:hover .nav-link{ color:  rgba(0,0,0,.5) }
      .navbar .dropdown-menu.fade-down{ top:80%; transform: rotateX(-75deg); transform-origin: 0% 0%; }
      .navbar .dropdown-menu.fade-up{ top:180%;  }
      .navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); 
      }
   }
      /* ============ desktop view .end// ============ */
   </style>
  
   <style>
      .ws_bullets{
      z-index: 1 !important;
      }
      div[class="ws-title"]{
      margin: 0px 0px 100px 111px !important;
      z-index: 1 !important;
      }
      div[class="ws-title"] > span{
      /* background: #f8f7f7 !important;
      color: black !important;
      padding: 10px 20px 10px 20px !important;
      border-radius: 5px !important;
      box-shadow: 0px 0px 5px black !important;
      cursor: pointer !important; */
      display: none !important;
      }
      #shopBtn:hover{
      cursor: pointer !important;
      }
      #wowslider-container1 {
      position: inherit !important;
      }
      #wowslider-container1 .ws-title div{
      background-color: transparent !important;
      color: black !important;
      padding-top: -100px !important;
      }
      #shopBtn{
      box-shadow: 1px 1px 5px #362e30 !important;
      }
      #wowslider-container1 a.ws_next {
      right: 0.2em !important;
      }
   </style>
   <style>
      /* 
      /////////////////////////   filter /////////////// */
      .form-control {
      background-color: #f7f7f7 !important;
      border: 1px solid #f7f7f7 !important;
      }
      #sel1:focus{
      outline: none !important;
      }
      .HoveStylAddComp:hover{
      color: #0071e3 !important;
      }
      .phoneBoxstyle{
      border-right: 1px #e1dfdf solid;
      border-bottom: 1px #e1dfdf solid;
      }
      .phoneBoxstyle:nth-child(3), .phoneBoxstyle:nth-child(6) , .phoneBoxstyle:nth-child(9),
      .phoneBoxstyle:nth-child(12), .phoneBoxstyle:nth-child(15), .phoneBoxstyle:nth-child(18),
      .phoneBoxstyle:nth-child(21), .phoneBoxstyle:nth-child(24) , .phoneBoxstyle:nth-child(27),
      .phoneBoxstyle:nth-child(30), .phoneBoxstyle:nth-child(33), .phoneBoxstyle:nth-child(36) {
      border-right: 0px !important;
      }



      #BorderStyle:nth-last-child(-n+4){
         border-bottom: none !important;
      }

      @media (min-width: 992px){
.navbar-expand-lg .navbar-nav .nav-link {
    padding-top: .5rem !important;
   
    padding-bottom: .2rem !important;
}
}

.leftdiv{
font-weight: 600;
    font-size: 18px;margin-bottom: 0.5rem !important;
    margin-top: 0.5rem !important;
}
.rightdiv{

}

button:focus{
  outline: none !important;
}
   </style>




   <body>
       <a href='#' id="scroll" style="display: none;"><span></span></a>
      @include('includes.header')



<div class="container">
 <h3 class="fontUbantu" style="color: #0b0c0c;
    text-align: center;
    font-weight: 500;
    font-size: 35px;
    margin-top: 51px;">Personal Contact</h3>

<hr style="background: #0071e3;
    width: 6%;
    height: 1px;"/>
<br/>>
<div class="row">
    <div class="col-md-4" style="text-align: center"> <img style="width: 60%;height: 250px;" src="{{ asset('/storage/images/person_contact.jpg') }}" alt="Trulli" /></div>
     <div class="col-md-8" style="color: #0b0c0c">
    
    <div class="row">
        <div class="col-md-4 " style="color: #0b0c0c; background-color:#f8f7f7;">
        <p class="leftdiv" style="" class="fontUbantu">NAME</p></div>
         <div class="col-md-8" style=" background-color:#f8f7f7;">
         <p class="fontUbantu leftdiv">{{ $product->user->name }}</p>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 " style="color: #0b0c0c; ">
        <p class="leftdiv" style="" class="fontUbantu">CITY</p></div>
         <div class="col-md-8" style=" ">
         <p class="fontUbantu leftdiv">{{ $product->city }}</p>
        </div>
    </div>



    <div class="row">
        <div class="col-md-4 " style="color: #0b0c0c; background-color:#f8f7f7;">
        <p class="leftdiv" style="" class="fontUbantu">CELL</p></div>
         <div class="col-md-8" style=" background-color:#f8f7f7;">
         <p class="fontUbantu leftdiv">{{ $product->phone }}</p>
        </div>
    </div>


      <div class="row">
        <div class="col-md-4 " style="color: #0b0c0c; ">
        <p class="leftdiv" style="" class="fontUbantu">COUNTRY</p></div>
         <div class="col-md-8" style=" ">
         <p class="fontUbantu leftdiv">PAKISTAN</p>
        </div>
    </div>



    <!-- <div class="row">
        <div class="col-md-4 " style="color: #0b0c0c; background-color:#f8f7f7;">
        <p class="leftdiv" style="" class="fontUbantu">ADDRESS</p></div>
         <div class="col-md-8" style=" background-color:#f8f7f7;">
         <p class="fontUbantu leftdiv">BATALA COLONY FAISALABAD</p>
        </div>
    </div> -->

<a href="{{ route('BuyUsedMobilePhones') }}"><button style="background: #4a88c1;
    color: white;
    border: none; cursor: pointer;
    padding: 5px 20px 5px 20px;
    margin-top: 28px;" >Go Back</button></a>

    </div>
</div>

</div>

        <br/>
      <br/>
      <br/>
      <footer style=" background-color: #dcdcdc;">
         <div class="row">
            <div class="col-md-5" style="    padding: 26px 10px 5px 26px !important;">
               <p style="" ><a href="#" style="text-decoration: none;color: #4f4a4b !important; font-weight: bold;"> ABOUT US</a> &nbsp;&nbsp;&nbsp;   <a href="#" style="text-decoration: none;color: #4f4a4b !important;font-weight: bold;"> CONTACT US</a>  &nbsp;&nbsp;&nbsp;      <a href="#" style="text-decoration: none;color: #4f4a4b !important;font-weight: bold;">SUPPORT</a></p>
               <p style="color:#4f4a4b !important ;font-weight: 600;     font-size: 13px;">
                  Online prices and selection generally match the prevailing ones in market, but may vary.<br/>
                  Prices are subject to change.&copy; 2020 Flickerfone. All rights reserved.<br/>
                  FLICKERFONE.COM and, the FLICKERFONE logo are trademarks of Shallbe Group. 
               </p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6" style="    padding: 42px 22px 5px 26px !important;" >
               <p style="color:#4f4a4b !important ; text-transform: uppercase;font-weight: 600;     font-size: 13px;   text-align: right; ">
                  We do not flood your inbox, join our social network instead. <a href="#fcb"><img style="    height: 15px; width: 17px;" src="{{ asset('storage/images/headerimg/download-removebg-preview.png') }}" /> </a>   <a href="#twiter"><img style="    height: 20px; width: 20px;" src="{{ asset('storage/images/headerimg/twitter-1722376-1466162-removebg-preview.png') }}"></a><br/>
               </p>
               <p style="color:#4f4a4b !important ; text-transform: uppercase;font-weight: 600;     margin-right: 42px;    font-size: 13px;    text-align: right; ">
                  IN SUPPORT OF <font style="    font-size: 33px;color: #c6ccd2;"> &empty;</font> <font style="margin-left: -35px;     "> SPAM </font>CONTRACT 
               </p>
            </div>
         </div>
      </footer>
   </body>
   <!-- 
      <script src="js/jquery-slim.min.js" ></script>
      <script src="js/popper.min.js" ></script>
      <script src="js/bootstrap.min.js" ></script> -->
   <script type="text/javascript">
      $(document).ready(function(){
          $('#ResetFilter').click(function(){
              $('#brand').val("Brands");
              $('#price').val("Price");
              $('#view').val("Select View");
              FetchData(0);
          });
      
          function BrandPriceProduct()
          {
              if($('#brand').children("option:selected").val() !='Brands' && $('#price'). children("option:selected").val() !='Price')
              {
                if($('#view').children('option:selected').val() =="Select View")
                {
                  var brand = $('#brand').children("option:selected").val();
                  var price = $('#price').children("option:selected").val();
                  var nView = 10;
                  FetchBrandPriceProducts(0,brand,price,nView);
                }
                else
                {
                  var view = $('#view').children('option:selected').val();
                  var brand = $('#brand').children("option:selected").val();
                  var price = $('#price').children("option:selected").val();
                  FetchBrandPriceProducts(0,brand,price,view);
                }
                
              }  
          }
      
          function fetch_products(query)
          {
            $.ajax({
                url:"{{ route('live_search.action') }}",
                type:"GET",
                data:{query:query},
                dataType:"json",
                success:function(data)
                {
                  document.getElementById('myUL').style.display = 'block';
                  $('#myUL').html(data.product_data);
                }
            });
          }
      
          $('#myInput').keyup(function(){
              var query = $(this).val();
              fetch_products(query);
          });
      
          $('#brand').change(function(){
              if($('#price'). children("option:selected").val() =='Price')
              {
      
                if($('#view').children('option:selected').val() =="Select View")
                {
                  var id = $('#brand').children("option:selected").val();
                  FetchBrandProducts(0,id,10);
                }
                else
                {
                  var nView = $('#view').children('option:selected').val();
                  var id = $('#brand').children("option:selected").val();
                  FetchBrandProducts(0,id,nView);
                }
                
              }
              else
              {
                BrandPriceProduct();
              }
              
          });
      
          $('#view').change(function(){
              if($('#brand').children("option:selected").val() =='Brands' && $('#price'). children("option:selected").val() =='Price')
              {
                  var nView = $('#view').children('option:selected').val();
                  FetchNViewProducts(0,nView);
              }
              else if($('#brand').children("option:selected").val() !='Brands' && $('#price'). children("option:selected").val() =='Price')
              {
                var brand = $('#brand').children("option:selected").val();
                var nView = $('#view').children("option:selected").val();
                FetchBrandProducts(0,brand,nView);
              }
              else if($('#brand'). children("option:selected").val() =='Brands' && $('#price'). children("option:selected").val() !='Price' && $('#view').children('option:selected').val() !="Select View")
              {
                var price = $('#price').children("option:selected").val();
                var view = $('#view').children("option:selected").val();
                FetchPriceProducts(0,price,view);         
              }
              else
              {BrandPriceProduct()};  
          });
      
          $('#price').change(function(){
              if($('#brand').children("option:selected").val() =='Brands')
              {
      
                if($('#view').children('option:selected').val() =="Select View")
                {
                  var price = $('#price').children("option:selected").val();
                  FetchPriceProducts(0,price,10);
                }
                else
                {
                  var nView = $('#view').children('option:selected').val();
                  var price = $('#price').children("option:selected").val();
                  FetchPriceProducts(0,price,nView);
                }
      
              }
              else
              {
                BrandPriceProduct();
              }
              
          });
      
      
          $(document).on('click', '.pagination a', function(event){
              event.preventDefault(); 
              var page = $(this).attr('href').split('page=')[1];
              if($('#brand'). children("option:selected").val() !='Brands' && $('#price'). children("option:selected").val() =='Price' && $('#view').children('option:selected').val() =="Select View")
              {
                var brand = $('#brand').children("option:selected").val();
                FetchBrandProducts(page,brand,10);
              }
      
              else if($('#brand'). children("option:selected").val() =='Brands' && $('#price'). children("option:selected").val() !='Price' && $('#view').children('option:selected').val() =="Select View")
              {
                var price = $('#price').children("option:selected").val();
                FetchPriceProducts(page,price,10);
              }
      
              else if($('#brand'). children("option:selected").val() !='Brands' && $('#price'). children("option:selected").val() !='Price' && $('#view').children('option:selected').val() =="Select View")
              {
                var brand = $('#brand').children("option:selected").val();
                var price = $('#price').children("option:selected").val();
                FetchBrandPriceProducts(page,brand,price,10);         
              }
      
              else if($('#brand'). children("option:selected").val() !='Brands' && $('#price'). children("option:selected").val() !='Price' && $('#view').children('option:selected').val() !="Select View")
              {
                var brand = $('#brand').children("option:selected").val();
                var price = $('#price').children("option:selected").val();
                var view = $('#view').children("option:selected").val();
                FetchBrandPriceProducts(page,brand,price,10);         
              }
      
              else if($('#brand'). children("option:selected").val() =='Brands' && $('#price'). children("option:selected").val() !='Price' && $('#view').children('option:selected').val() !="Select View")
              {
                var brand = $('#brand').children("option:selected").val();
                var price = $('#price').children("option:selected").val();
                var view = $('#view').children("option:selected").val();
                FetchBrandPriceProducts(page,price,view);         
              }
      
              else if($('#brand'). children("option:selected").val() =='Brands' && $('#price'). children("option:selected").val() =='Price' && $('#view').children('option:selected').val() !="Select View")
              {
                var view = $('#view').children("option:selected").val();
                FetchNViewProducts(page,view);         
              }
      
              else if($('#brand'). children("option:selected").val() =='Brands' && $('#price'). children("option:selected").val() =='Price' && $('#view').children('option:selected').val() =="Select View")
              {
                FetchData(page);            
              }
             });
      
             function FetchData(page)
             {
              $.ajax({
               url:"/pagination/fetch_data?page="+page,
               type:"get",
               success:function(data)
               {
                $('.products').html(data);
               }
              });
             }
      
             function FetchBrandProducts(page,id,nView)
             {
              $.ajax({
               url:"ShopBrandProducts?page="+page,
               type:"get",
               data:{id:id,nView:nView},
               success:function(data)
               {
                $('.products').html(data);
               }
              });
             }
      
             function FetchNViewProducts(page,nView)
             {
              $.ajax({
               url:"ShopViewProducts?page="+page,
               type:"get",
               data:{nView:nView},
               success:function(data)
               {
                $('.products').html(data);
               }
              });
             }
      
             function FetchPriceProducts(page,price,nView)
             {
                $.ajax({
                 url:"ShopPriceProducts?page="+page,
                 type:"get",
                 data:{price:price,nView:nView},
                 success:function(data)
                 {
                  $('.products').html(data);
                 }
                });
             }
      
             function FetchBrandPriceProducts(page,id,price,nView)
             {
              $.ajax({
               url:"ShopBrandPriceProducts?page="+page,
               type:"get",
               data:{brand:id,price:price,nView:nView},
               success:function(data)
               {
                $('.products').html(data);
               }
              });
             }
      });
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
        function shoediv(){
             
              document.getElementById('myUL').style.display = 'block';
          }
      
      
      
          function hideagain(){
              document.getElementById('myUL').style.display = 'none';
          }
   </script>
  
   <!-- <script type="text/javascript" src="{{ asset('slick/slick.min.js')}}"></script>
   <script type="text/javascript" src="{{ asset('slick/jquery3.2.1.js')}}"></script>
   <script type="text/javascript" src="{{ asset('slick/slick.js')}}"></script> -->

   <script type="text/javascript" src="{{ asset('Slider/engine1/wowslider.js')}}"></script>
   <script type="text/javascript" src="{{ asset('Slider/engine1/script.js')}}"></script>


    <!-- <script type="text/javascript" src="{{ asset('Slider/engine1/script.js')}}"></script>  -->
   <script  src="{{ asset('js/ScrollJS2/script.js')}}"></script>
</html>