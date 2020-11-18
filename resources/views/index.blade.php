<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
   </head>
   <script src="{{ asset('js/jquery-2.1.3.min.js') }}" ></script>
   <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
   <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
   <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' media="all">
   <link href="{{ asset('css/mystyle.css') }}" rel='stylesheet' type='text/css' media="all">
   <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
   <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
   <link rel="stylesheet" href="{{ asset('js/ScrollJS2//style.css') }}">

<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
   <style>


@media (min-width: 992px){
.navbar-expand-lg .navbar-nav .nav-link {
    padding-top: .5rem !important;
   
    padding-bottom: .2rem !important;
}
}
.fontUbantu{
   font-family: 'Ubuntu', sans-serif !important;
}
/* .slick-dots
{
    position: relative !important;
      top: -118px !important;;

  
} */
.slick-dots{
       bottom: 184px !important;
}

@media (min-width: 1400px) and (max-width : 2000px){
div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
       top: 260px !important;
}
.heightImagesExtralg{
       height: 267px !important;
}

}


.slidesectionHome{
  border-bottom: 1px #989292 solid;
   border-bottom-right-radius: 10px;
   border-bottom-left-radius: 10px;  height: 100%; width: 100%; border-right: 1px #989292 solid;
   border-top-right-radius: 10px; border-top: 1px #989292 solid;  border-top-left-radius: 10px;
}

p[id="NewPhones"]{
       color: white;
    font-size: 1.1vw;
    font-family: sans-serif;
    text-align: center;
}
      .img-thumbnail{
         border: none !important;
      }
      figure{
             border-right: 1px #F3F3F3 solid;
    border-left: 1px #F3F3F3 solid;
      }
      .slick-slide{
         margin: 0px !important;
      }
      #myInput {


             height: 18px;
    position: relative;
    top: 6px;
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
      margin-top: 16px; 
      padding: 12px;
      text-decoration: none;
      color: #605d5d;
      display: block;
      font-weight: 600;


       
/*    
    height: 24px;
    margin-top: 16px; */
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
      .slick-prev:before {
      content: '' !important;
      }
      .slick-next:before {
      content: '' !important;
      }
      .slick-next:before {
      color: none;
      }
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
      top: 187px;
      height: 198px !important;
      width: 99%;
      margin-left: 20px;
      /* border-bottom: 1px #989292 solid;
      border-right: 1px #989292 solid;
      border-left: 1px #989292 solid;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px; */
      }
      div[class="autoplayFeatures slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
      display: none !important;
      }
      .slick-dotted.slick-slider{
      margin-bottom: -10px ;
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
      background-image: url('{{ asset("storage/images/headerimg/ic_keyboard_arrow_left_black_18dp.png")}}');
      border-radius: 50%;
      height: 38px;
      background-repeat: no-repeat;
      width: 100px;
      }
      #slickBtnFor > div[class="autoplayFeatures slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]{
      background-image: url('{{ asset("storage/images/headerimg/ic_keyboard_arrow_right_black_18dp.png")}}');
      border-radius: 50%;
      height: 38px;
      background-repeat: no-repeat;
      width: 26px;
      }
      button[id="slick-slide-control10"]::before{
      height: 38px;
      background-repeat: no-repeat;
      width: 26px;
      content: url('{{ asset("storage/images/ShopPage/Counting-1.png")}}') !important;
      }
      button[id="slick-slide-control11"]::before{
      height: 38px;
      background-repeat: no-repeat;
      width: 26px;
      content: url('{{ asset("storage/images/ShopPage/Counting-2.png")}}') !important;
      }
      button[id="slick-slide-control12"]::before{
      height: 38px;
      background-repeat: no-repeat;
      width: 26px;
      content: url('{{ asset("storage/images/ShopPage/Counting-3.png")}}') !important;
      }
      button[id="slick-slide-control13"]::before{
      height: 38px;
      background-repeat: no-repeat;
      width: 26px;
      content: url('{{ asset("storage/images/ShopPage/Counting-4.png")}}') !important;
      }
      button[id="slick-slide-control14"]::before{
      height: 38px;
      background-repeat: no-repeat;
      width: 26px;
      content: url('{{ asset("storage/images/ShopPage/Counting-5.png")}}') !important;
      }
      /* .slick-dots li button:before{
      content: none !important;
      } */
      #slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-prev slick-arrow"]{
      margin-left: 1px !important;
      top: 81px;
      height: 67px !important;
      width: 22px !important;
      background-color: #5f5b54 !important;
      background-image: url('{{ asset("storage/images/headerimg/ic_keyboard_arrow_left_white_18dp.png")}}') !important;
      background-position: center !important;
      background-repeat: no-repeat;
      border-top-right-radius: 6px;
      border-bottom-right-radius: 6px;
      display: block !important;
      }
      #slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]{
      right: -4px !important;
      top: 81px !important;
      height: 67px !important;
      width: 22px !important;
      background-color: #5f5b54 !important;
      background-image: url('{{ asset("storage/images/headerimg/ic_keyboard_arrow_right_white_18dp.png")}}') !important;
      background-position: center !important;
      background-repeat: no-repeat;
      border-top-left-radius: 6px;
      border-bottom-left-radius: 6px;
           display: block !important;
      }
      .slick-prev {
      left: 0px !important;
      z-index: 8 !important;
      margin-left: -30px !important;
      }
      ul[class="dropdown-menu fade-up"] >  li {
      display: block !important;
      }
      /* #bloghr::after{
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
      } */
      .slick-prev .slick-arrow{  }
   </style>
   <style>
      .dropdown-toggle::after {
      content: none !important;
      }
      .navbar-nav > a{
      background-color: #4a88c1 !important;
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
      width: 311px !important;
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
      .navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
      }	
      /* ============ desktop view .end// ============ */
   </style>
   <style>
    
      div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
      margin-left: 3px;
      }
      @media (max-width: 550px){
      #NewPhones{
      padding: 0px 10px 0px 10px !important;
      }
      }
      @media (min-width: 280px) and (max-width: 319px) {
      #extlrgwid{
      width: 103% !important;
      }
      div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
      top: 128px !important;
      width: 92% !important;
      }
      #slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]{
      right: -1px !important;
      }
      }
      @media (min-width: 320px) and (max-width: 359px) {
      div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
      top: 148px !important;
      margin-left: 17px !important;
      }
      input[id="myInput"] {
      width: 293px !important;
      }
      button[id="srchbtnid"]{
      margin-left: 237px !important;
      }
      }
      @media (min-width: 360px) and (max-width: 374px) {
      ul[class="slick-dots"]{
      margin-top: 9px !important;
      }
      #slickblogimg{
      width: 283px !important;
      }
      div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
      top: 163px !important;
      width: 93.6% !important;
      right: 0px !important;
      }
      }
      @media (min-width: 375px) and (max-width: 410px) {
      div[class="thumb"]{
      position: relative !important;
      right: 20px !important;
      }
      div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
      top: 181px !important;
      width: 93.5% !important;
      margin-left: 3px !important;
      }
      #slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-prev slick-arrow"]{
      margin-left: 0px !important;
      }
      #slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]{
      right: 20px !important;
      }
      }
      @media (min-width: 411px) and (max-width: 449px){
      div[class="thumb"]{
      right: 20px !important;
      position: relative !important;
      }
      div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
      width: 95.1% !important;
      margin-left: 2px !important;
      }
      #slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-prev slick-arrow"]{
      margin-left: 0px !important;
      }
      #slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]{
      right: 16px !important;
      }
      div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
      top: 199px !important;
      }
      }
      @media (min-width: 450px) and (max-width: 499px){
      div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
      top: 220px !important;
      }
      div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
      width: 96.1% !important;
      }
      #extlrgwid{
      width: 98% !important;
      }
      div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
      width: 94.8% !important;
      }
      }
      @media (min-width: 500px) and (max-width: 767px){
      div[class="slick-slide slick-current slick-active"]{
      width: 395px !important; 
      }
      #slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]{
      right: 15px !important
      }
      div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
      top: 234px !important;
      }
      div[class="autoplay slick-initialized slick-slider slick-dotted"]{
      margin-left: -34px !important;
      }
      div[class="slick-slide slick-current slick-active"]{
      width: 425px !important;
      }
      }
      @media (min-width: 768px) and (max-width: 1023px) {
      .thumb{
      width: 107% !important;
      }
      div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
      top: 113px !important;
      height: 420px !important;
      width: 84% !important;
      margin-left: 23px  !important;
      }
      }
      @media (min-width: 1024px)  and (max-width: 1050px){
      .thumb{
      width: 103% !important;
      }
      div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
      top: 114px !important;
      height: 319px !important;
      width: 89% !important;
      margin-left: 23px !important;
      }
      }
      /* @media (max-width: 411px){
      ul[class="slick-dots"]{
      margin-top: 9px !important;
      }
      #slickblogimg {
      width: 336px !important;
      }
      div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"] {
      top: 179px !important;
      width: 93% !important;
      }
      } */
   </style>
   <style>
      @media (max-width: 550px){
      #resphrOnmob{
      margin-top: 10px !important;
      }
      }
   </style>
   <body>


      <a href="#" id="scroll" style="display: none;"><span></span></a>



      @include('includes.header')
      @if($buynewsell->count()>0)
      <section>
         <div class="row">
            @foreach($buynewsell as $row)
            @php $img = 'storage/'.$row->img @endphp
            @if($row->title=='buy') @php $url = "Shop" @endphp @else @php $url = "#" @endphp  @endif
            <div class="col-md-4" style="background-color: #0b0c0c; border-right: 2px white solid;   height: 400px;" >
               <div style="height: 60%; width: 100%;">
                  <center>
                     
                  @if($row->title=='buy')
                  <a href="{{ route('BuyUsedMobilePhones') }}"> <img src="{{ asset($img) }}"  style="height: 200px;width: 150px;padding-top: 16px;" />  </a>
                  @elseif($row->title=='sell')
                  <a href="{{ route('Sell') }}"> <img src="{{ asset($img) }}"  style="height: 200px;width: 150px;padding-top: 16px;" />  </a>
                  @else
                  <a href="{{ route('Shop') }}"> <img src="{{ asset($img) }}"  style="height: 200px;width: 150px;padding-top: 16px;" />  </a>
                  @endif
               
               </center>
               </div>
               <div style="height: 30%; width: 100%; padding: 0px 25px 0px 25px;">
                  <!-- <p id="NewPhones" class="fontUbantu" style="padding: 0px 70px 0px 70px; color: white;"> -->
                     {{ ucfirst($row->detail) }}
                  <!-- </p> -->
               </div>
               @if($row->title=='buy')
               <a href="{{ route('BuyUsedMobilePhones') }}" style="text-decoration: none;" >
                  <div style="height: 10%; width: 100%; background-color: #4a88c1; ">
                     <center class="fontUbantu" style="    color: white; 
                        font-size: 23px;">{{ ucwords($row->title) }}</center>
                  </div>
               </a>
               @elseif($row->title=='sell')
               <a href="{{ route('Sell') }}" style="text-decoration: none;" >
                  <div style="height: 10%; width: 100%; background-color: #4a88c1; ">
                     <center class="fontUbantu" style="    color: white;
                        font-size: 23px;">{{ ucwords($row->title) }}</center>
                  </div>
               </a>
               @else
               <a href="{{ route('Shop') }}" style="text-decoration: none;" >
                  <div style="height: 10%; width: 100%; background-color: #4a88c1; ">
                     <center style="    color: white;
                        font-size: 23px;">{{ ucwords($row->title) }}</center>
                  </div>
               </a>
               @endif
            </div>
            @endforeach
         </div>
      </section>
      @endif




      
      <section>
         <div class="pricecalculatorbackground pcback" >
            <div class="pc">
               <h1 align="center" id="pricecal" class="fontUbantu">Price Calculator</h1>
               <div class="pq">
                  <h3 class="fontUbantu">Get an estimate for your device</h3>
                  <a href="{{route('PriceEstimateCalculator')}}">
                  <button class="btn pc-btn fontUbantu">Try it Now!</button>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <section  style="padding-top: 70px; padding-bottom:70px ;background-color: #f4f4f4;     margin-left: 5px;">
         <div class="row" style="">
                  <div class="col-md-3 col-lg-3 col-sm-3 slidesectionHome fontUbantu" id="slickBtnFortopBlog"  style="padding-right: 2px !important;
    padding-left: 3px !important;">
@if($blogslider->count()>0)
    <div class="autoplay" data-dots="true">
   @foreach($blogslider as $row)
   @php $img = 'storage/'.$row->img @endphp
   <div class="item fontUbantu" id="ExtraLargeScren" >
      <div id="blogImagesExtraLarge" >
         <img src="{{ asset($img) }}" class="heightImagesExtralg" style=" text-align: center ;max-width : 100% !important;border-top-right-radius: 10px;border-top-left-radius: 10px;" />
      
      
      </div>
      <div style="height: 10% ; width: 100% ;">
         <center style="padding: 5px 5px 17px 5px;">&nbsp;</center>
      </div>
      <div id="bloghr" class="fontUbantu" style="height: 50% ; width: 100% ;    padding: 0px 18px 0px 18px; ; text-align: justify; color: black !important;     color: black !important;
    font-family: sans-serif;">
           {{ ucfirst($row->detail) }}
      </div>

          <div style="height: 10% ; width: 100% ;">
         <center style="padding: 5px 5px 17px 5px;">&nbsp;</center>
      </div>

   </div>
  @endforeach



</div>
   @endif
</div>
 <!-- <div class="col-md-3 col-lg-3 col-sm-3" id="slickBtnFortopBlog" style=" ">
               @if($blogslider->count()>0)
               <div class="autoplay" data-dots="true">
                  @foreach($blogslider as $row)
                  @php $img = 'storage/'.$row->img @endphp
                  <div class="item" style="">
                     <div id="extlrgwid" style=" padding: 0px 0px 18px 0px;  border-radius: 6px;   ;    ">
                        <div class="thumb"> <img alt="featured project" id="slickblogimg" src="{{ asset($img) }}"
                           class="img-responsive img-fullwidth" style=" width: 100% !important;    border-top: 1px black solid;  border-right: 1px black solid; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                        </div>
                        <br/>
                        <p style="color: black !important;    padding: 0px 10px 50px 24px;">
                           {{ ucfirst($row->detail) }}
                        </p>
                     </div>
                  </div>
                  @endforeach
               </div>
               @endif
            </div> -->
            <div class="col-md-3 col-lg-3 col-sm-3" id="" style=" ">
               <div  id="ExtraLargeScren" style="">
                  <div id="blogImagesExtraLarge" style="  text-align: center ;  height: 55%; width: 100%; border-right: 1px #989292 solid;
                     border-top-right-radius: 10px; border-top: 1px #989292 solid;  border-top-left-radius: 10px;  ">
                   <img class="heightImagesExtralg" src="{{ asset('storage/images/headerimg/1.png') }}" style="max-width:100% !important;border-top-right-radius: 10px;border-top-left-radius: 10px;" />
                  
                  

                
                  </div>
                  <div id="blogImagesExtraLarge" style="height: 45% ;text-align: center ; width: 100% ;border-right: 1px #989292 solid;
                     border-bottom: 1px #989292 solid;  
                     border-bottom-right-radius: 10px;
                     border-left: 1px #989292 solid;
                     border-bottom-left-radius: 10px; ">
                     <div id="bloghr"  class="fontUbantu" style="height: 75% ; width: 100% ;    padding: 18px 18px 0px 18px; ; text-align: justify;     color: black !important;
    font-family: sans-serif; ">
                        The Blogger mobile app allows you to post, edit, save, and view your blog posts save, and view your blog posts,and view your blog posts.
                        <hr style="    background-color: black;    width: 94%;"/>
                     </div>
                     <div style="height: 25% ; width: 100% ;">
                        <center style="padding: 5px 5px 13px 5px;"><a href="#" style="color: #4a88c1 !important; font-weight: bold;" >Read More</a></center>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-3" id="" style=" ">
               <div  id="ExtraLargeScren" style="">
                  <div id="blogImagesExtraLarge" style=" text-align: center ;   height: 55%; width: 100%; border-right: 1px #989292 solid;
                     border-top-right-radius: 10px; border-top: 1px #989292 solid;  border-top-left-radius: 10px; ">
                     <img class="heightImagesExtralg" src="{{ asset('storage/images/headerimg/3.png') }}" style="max-width : 100% !important;border-top-right-radius: 10px;border-top-left-radius: 10px;" />
                  </div>
                  <div id="blogImagesExtraLarge" style="height: 45% ; width: 100% ;border-right: 1px #989292 solid;
                     border-bottom: 1px #989292 solid;  
                     border-bottom-right-radius: 10px;
                     border-left: 1px #989292 solid;
                     border-bottom-left-radius: 10px; ">
                     <div id="bloghr" class="fontUbantu" style="height: 75% ; width: 100% ;    padding: 18px 18px 0px 18px; ; text-align: justify;    color: black !important;
    font-family: sans-serif;">
                        The Blogger mobile app allows you to post, edit, save, and view your blog posts save, and view your blog posts,and view your blog posts.
                        <hr style="    background-color: black;    width: 94%;"/>
                     </div>
                     <div style="height: 25% ; width: 100% ;">
                        <center style="padding: 5px 5px 13px 5px;"><a href="#" style="color: #4a88c1 !important; font-weight: bold;" >Read More</a></center>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-3" id="" style=" ">
               <div  id="ExtraLargeScren" style="">
                  <div id="blogImagesExtraLarge" style="  text-align: center ;  height: 55%; width: 100%; border-right: 1px #989292 solid;
                     border-top-right-radius: 10px; border-top: 1px #989292 solid;  border-top-left-radius: 10px; ">
                     <img class="heightImagesExtralg" src="{{ asset('storage/images/headerimg/2.png') }}" style="max-width : 100% !important;border-top-right-radius: 10px;border-top-left-radius: 10px;" />
                  </div>
                  <div id="blogImagesExtraLarge" style="height: 45% ; text-align: center ;width: 100% ;border-right: 1px #989292 solid;
                     border-bottom: 1px #989292 solid;  
                     border-bottom-right-radius: 10px;
                     border-left: 1px #989292 solid;
                     border-bottom-left-radius: 10px; ">
                     <div id="bloghr" class="fontUbantu" style="height: 75% ; width: 100% ;    padding: 18px 18px 0px 18px; ; text-align: justify;     color: black !important;
    font-family: sans-serif;">
                      The Blogger mobile app allows you to post, edit, save, and view your blog posts save, and view your blog posts,and view your blog posts.
                        <hr style="    background-color: black;    width: 94%;"/>
                     </div>
                     <div style="height: 25% ; width: 100% ;">
                        <center style="padding: 5px 5px 13px 5px;"><a href="#" style="color: #4a88c1 !important; font-weight: bold;" >Read More</a></center>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <hr id="resphrOnmob" style="width: 43%;
         background-color: black;    margin-top: 26px !important;
         "/>
         </div>
         <p >
         <center style="color: black;
            font-size: 49px;
            margin-top: -59px;
            "> ...</center>
         </p>
         <hr style="width: 43%;
            background-color: black;
            margin-top: -24px;" />
      </section>
      @if($products->count()>0)
      <center>
         <h3 class="fontUbantu" style="margin-top: 45px; color: black !important; ">Meet the new handsets</h3>
      </center>
      <center>
         <hr style="width: 10%; height: 2px; background-color: #4a88c1;"/>
      </center>
      <section id="NewBrandsMob"  style="padding-top: 100px; background-color: white;">
         <div class="container">
            <div class="row" >
               <div class="col-md-12 col-lg-12 col-sm-12" id="slickBtnFor">
                  <div class="autoplayFeatures">
                     @foreach($products as $product)
                     @php $img = 'storage/admin/images/product/thumbnail/175_'.$product->image  @endphp



                        <figure>
                              <a href="{{ route('ProductDetail',$product->id) }}" style="outline: none;">
                                    <img src="{{ asset($img) }}" class="img-thumbnail" style="height: 214px;" alt="Trulli">

                                    <figcaption>
                                       <div class="rightbox" style="height: 75px;margin-top: 19px;">
                                          <center>
                                             <p class="fontUbantu" style="font-size: 15px;   font-variant: all-small-caps;color: #000000; ">{{ $product->name }}</p>
                                          </center>
                                          <center>
                                             <div class="shortdesc fontUbantu" style=" color: #959595 ;  font-size: 11px;   ">It is in your pocket</div>
                                          </center>
                                       </div>

                                    </figcaption>
                              </a>
                        </figure>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </section>
      @endif
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      @include('includes.footer')
   </body>
   <!-- 
      <script src="js/jquery-slim.min.js" ></script>
      <script src="js/popper.min.js" ></script>
      <script src="js/bootstrap.min.js" ></script> -->
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
       slidesToShow: 5,
       slidesToScroll: 5,
      //   autoplay: true,
       autoplaySpeed: 3000,
      
      
      
       dots: true,
       responsive: [
           {
             breakpoint: 500,
             settings: {
             slidesToShow: 2,
             slidesToScroll: 2,
             }
           }
         ]  
       // variableWidth: true
      });
      });
      
      
      
      
      
      
      $(document).ready(function(){
              $('.autoplay').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        // autoplay: true,
        autoplaySpeed: 3000,
      
      
        dots: true,
       
        // variableWidth: true
      });
      });
      
      
      
      
      
      
      
      
      
      
      
   </script>
   <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('slick/jquery3.2.1.js') }}"></script>
   <script type="text/javascript" src="{{ asset('slick/slick.js') }}"></script>
   <!-- <script  src="js/jquery-2.1.3.min.js"></script> -->
   <script  src="{{ asset('js/ScrollJS2/script.js') }}"></script>
</html>