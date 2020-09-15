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
  
  <style>
 
    
    #myInput {
      background-image: url('/css/searchicon.png');
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
    top: 151px;

    height: 220px !important;
    width: 93%;
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
  margin-left: 23px !important;
    top: 81px;
    height: 67px !important;
    width: 22px !important;
    background-color: #5f5b54;



    background-image: url('{{ asset("storage/images/headerimg/ic_keyboard_arrow_left_white_18dp.png")}}') !important;
    background-position: center !important;
  
    background-repeat: no-repeat;
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
}


#slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]{
  right: 2px !important;
    top: 81px !important;
    height: 67px !important;
    width: 22px !important;
    background-color: #5f5b54;


    background-image: url('{{ asset("storage/images/headerimg/ic_keyboard_arrow_right_white_18dp.png")}}') !important;
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
    .navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
  }	
  /* ============ desktop view .end// ============ */
  
  
  </style>






<style>

img[src="{{ asset('storage/images/logo Black-01.jpg') }}"]{
  height: 65px !important;
    /* top: -1px; */
    margin-top: -8px;
    margin-bottom: -8px;
}


div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
  margin-left: 21px;
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


  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="topNav"  >
    <a class="navbar-brand" href="#"><img  id="logoFlickerflone" src="{{ asset('storage/images/logo Black-01.jpg') }}"></a>
    <button style="background-color: white !important;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup, #navbarNavAltMarkup1" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <!-- <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">Buy</a>
        <a class="nav-item nav-link" href="#">Sell</a>
        <a class="nav-item nav-link " href="#">New</a> -->






        <span id="reglogin" style="    position: absolute;
        right: 46px;
        bottom: 25px;color: white !important; border-bottom: 1px white solid  "  href="login.html" align="right"    >
          <i class="fa fa-user" style="margin-top: 6px ; color: white; "></i>&nbsp;&nbsp;REGISTER / LOGIN</span>





 
    









      </div>
    </div>
  </nav>
  


  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="seconNav" style="    background-color: #f8f7f7 !important;
  height: 35px;
  border-top: 1px #4c4a575c solid !important;
  border-bottom: 1px #4c4a575c solid !important;">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup1">
    
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li> -->
       
        <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             </a>
       
        </li>
       
     


        <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" 
          style="padding: 8px 30px 6px 30px !important;  height: 38px !important; ; border-left: 1px #4c4a575c solid !important;font-weight: bold;"> BRANDS  </a>
            <ul class="dropdown-menu fade-up">
              <li><a class="dropdown-item" href="#"> <center>APPLE</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>GOOGLE</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>HUAWIE</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>VIVO</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>OPPO</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>NOKIA</center></a></li>
            
            </ul>
        </li>



        
        <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" 
          style="padding: 8px 30px 6px 30px !important;  height: 38px !important; ; border-left: 1px #4c4a575c solid !important;font-weight: bold;"> TABLETS / PC </a>
            <ul class="dropdown-menu fade-up">
            <li><a class="dropdown-item" href="#"> <center>LENOVO</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>HP </center></a></li>
            <li><a class="dropdown-item" href="#"> <center>DELL</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>APPLE</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>ACER</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>ASUS</center></a></li>
            
            </ul>
        </li>




        
        <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" 
          style="padding: 8px 30px 6px 30px !important;  height: 38px !important; ; border-left: 1px #4c4a575c solid !important;font-weight: bold;"> WEAREABLES  </a>
            <ul class="dropdown-menu fade-up">
              <li><a class="dropdown-item" href="#"> <center>NuMetrex Fabric Chest Strap</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>JawBone UP</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>Samsung Gear 2</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>FitBit Flex</center></a></li>
           
            <li><a class="dropdown-item" href="#"> <center>Google Glass</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>GoQii</center></a></li>

            <li><a class="dropdown-item" href="#"> <center>Get Active Slim</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>LECHAL GPS Shoes</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>Fin Ring</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>Spotnsave Wristband</center></a></li>
           
            
            
            </ul>
        </li>



        
        <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" 
          style="padding: 8px 30px 6px 30px !important;  height: 38px !important; ; border-left: 1px #4c4a575c solid !important; border-right: 1px #4c4a575c solid !important;font-weight: bold;"> ACCESSORIES  </a>
            <ul class="dropdown-menu fade-up">
            <li><a class="dropdown-item" href="#"> <center>Charger Cables & Docks</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>Mobile Covers & Cases</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>Power Banks</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>Other Accessories</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>Phone Stands</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>Screen Protectors</center></a></li>

            <li><a class="dropdown-item" href="#"> <center>Monopod & Selfie Sticks</a></li>
            <li><a class="dropdown-item" href="#"> <center>Phone Rings</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>VR Glasses</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>Battery Packs</center></a></li>
            
            
            </ul>
        </li>

        





<li>
  <input type="search" id="myInput"  autocomplete="off"  onkeyup="myFunction()"  title="Type in a name" name="q"  class="searchTerm" placeholder="Search our Store" 
  style="background-position: right !important;outline: none;    width: 388px;margin-left: 3px;border: 1px #f8f7f7 solid;  height: 1px;  margin-top: 6px;background: url(images/ic_search_black_18dp.png) no-repeat scroll 7px 7px; ">




  <ul onblur="hideagain()" id="myUL" style="  background-color: white ;  box-shadow:  0 0 5px #000000;position:absolute  ;width: 29%;  overflow: scroll ; z-index: 20; ;display: none ;  height: 500px;">
    <!-- <div>
      <button id="srchbtnid" onclick="hideagain();" style="margin-left: 350px;background-color: white;color: black;padding: 7px;font-weight: 600;border-style: none;">X</button>
    </div> -->

    <div>
     <p style="background-color: white;color: black;padding: 7px;font-weight: 600;border-style: none;">DEVICES  <button id="srchbtnid" onclick="hideagain();" style="margin-left: 269px;
      background-color: #f8f7f7;
      color: black;
   
      font-weight: 600;
      border-style: none;">X</button></p>
    </div>



    <li>
      <div class="row">
        <div class="col-md-2">
          <div id="setwidth" style="    height: 115px; width:100%;      margin-right: 115px;">
            <img src="{{ asset('storage/images/LiveSrchImages/Apple_iPhone_12_5G_1.jpg') }}" style="  padding-left: 12px;  height: 91px;  ">
             </div>
        </div>
        <div class="col-md-10">
          <div id="setwidth" style="    height: 115px; width:100%;       margin-top: -15px; margin-left: 24px; margin-right: 115px;">  
            <a href="#">Apple iPhone 12 Pro Max         
            </a>
          </div>
        </div>
      </div>
    </li>




    <li>
      <div class="row">
        <div class="col-md-2">
          <div id="setwidth" style="    height: 115px; width:100%;      margin-right: 115px;">
            <img src="{{ asset('storage/images/LiveSrchImages/852D3B1A-4511-EA95-7918-A7FAAAF29DE0.jpg') }}" style="     padding-left: 3px; height: 97px;  ">
             </div>
        </div>
        <div class="col-md-10">
          <div id="setwidth" style="    height: 115px; width:100%;       margin-top: -15px; margin-left: 24px; margin-right: 115px;">  
            <a href="#">Redmi Note 9 Pro      
            </a>
          </div>
        </div>
      </div>
    </li>




    <li>
      <div class="row">
        <div class="col-md-2">
          <div id="setwidth" style="    height: 115px; width:100%;      margin-right: 115px;">
            <img src="{{ asset('storage/images/LiveSrchImages/303612.png') }}" style=" 
            padding-left: 6px;
            height: 106px;
         ">
             </div>
        </div>
        <div class="col-md-10">
          <div id="setwidth" style="    height: 115px; width:100%;       margin-top: -15px; margin-left: 24px; margin-right: 115px;">  
            <a href="#">Apple iphone x 64 GB     
            </a>
          </div>
        </div>
      </div>
    </li>




    <li>
      <div class="row">
        <div class="col-md-2">
          <div id="setwidth" style="    height: 115px; width:100%;      margin-right: 115px;">
            <img src="{{ asset('storage/images/LiveSrchImages/alcatel-3x-2019.jpg') }}" style="     padding-left: 12px;
            height: 98px;
            margin-top: 5px; ">
             </div>
        </div>
        <div class="col-md-10">
          <div id="setwidth" style="    height: 115px; width:100%;       margin-top: -15px; margin-left: 24px; margin-right: 115px;">  
            <a href="#">Alcatel jabi=ong Green 4 GB     
            </a>
          </div>
        </div>
      </div>
    </li>



    <li>
      <div class="row">
        <div class="col-md-2">
          <div id="setwidth" style="    height: 115px; width:100%;      margin-right: 115px;">
            <img src="{{ asset('storage/images/LiveSrchImages/12-Gold-1-600x600.jpg') }}" style="  padding-left: 0px; height: 110px;  ">
             </div>
        </div>
        <div class="col-md-10">
          <div id="setwidth" style="    height: 115px; width:100%;       margin-top: -15px; margin-left: 24px; margin-right: 115px;">  
            <a href="#">Apple VIVO Y15 Gold 16 GB      
            </a>
          </div>
        </div>
      </div>
    </li>




    <li>
      <div class="row" style="margin-top: 9px;">
        <div class="col-md-2">
          <div id="setwidth" style="    height: 115px; width:100%;      margin-right: 115px;">
            <img src="{{ asset('storage/images/LiveSrchImages/1560367_6.jpg') }}" style="     padding-left: 12px;
            height: 92px;
            width: 104px;
            margin-left: 0px;  ">
             </div>
        </div>
        <div class="col-md-10">
          <div id="setwidth" style="    height: 115px; width:100%;       margin-top: -15px; margin-left: 24px; margin-right: 115px;">  
            <a href="#">HTC Play 2 Black 4 GB      
            </a>
          </div>
        </div>
      </div>
    </li>




    <li>
      <div class="row">
        <div class="col-md-2">
          <div id="setwidth" style="    height: 115px; width:100%;      margin-right: 115px;">
            <img src="{{ asset('storage/images/LiveSrchImages/Apple_iPhone_12_5G_1.jpg') }}" style="  padding-left: 12px;  height: 91px;  ">
             </div>
        </div>
        <div class="col-md-10">
          <div id="setwidth" style="    height: 115px; width:100%;       margin-top: -15px; margin-left: 24px; margin-right: 115px;">  
            <a href="#">HTC Play 2 Black 4 GB      
            </a>
          </div>
        </div>
      </div>
    </li>

  
    <!-- <div class="row" style="padding-right: 167px;"><div class="col-md-12" style="background-color: rgb(30, 219, 46);"><li><a href="#">Agnes</a></li></div></div> -->
  </ul>
  

  
</li>




<li class="nav-item dropdown">
  <a class="nav-link  dropdown-toggle" id="prcCal" href="#" data-toggle="dropdown" 
  style="padding: 4px 40px 6px 40px !important;
  border-right: 1px #4c4a575c solid !important;
  border-left: 1px #4c4a575c solid !important;
  font-weight: bold;
  background-color: #0071e3;
  color: white;
  height: 35px;
  margin-top: 4px;
    margin-left: 28px;
"> Price Calculator  </a>
   
</li>



        
      </ul>
    </div>
  </nav>



  




<section>
  <div class="row">



    <div class="col-md-4" style="background-color: #0b0c0c; border-right: 2px white solid;   height: 400px;" >

    <div style="height: 60%; width: 100%;">
    
   <center> <img src="{{ asset('storage/images/headerimg/M6fc32bff4a57196104b04b3f741654ce1598033653545.png') }}"  style="height: 216px;width: 136px;padding-top: 16px;" />  </center>
    </div>
    <div style="height: 30%; width: 100%;">
      <p id="NewPhones" style="padding: 0px 70px 0px 70px; color: white;">
      Search through our listings and buy used phones in Pakistan conveniently with our product grading system.
    </p></div>
    <a href="#Buy" style="text-decoration: none;" >
    <div style="height: 10%; width: 100%; background-color: #0071e3; ">
    <center style="    color: white;
      font-size: 23px;">Buy</center>
      </div>  </a>
  
  
  
  </div>
    
  







  <div class="col-md-4" style="background-color: #424242; border-right: 2px white solid;   height: 400px;" >

    <div style="height: 60%; width: 100%;">
    
   <center> <img src="{{ asset('storage/images/headerimg/Mb84a2f8b3bcf9483a96c33dd67472b071598033616752.png') }}"  style="  height: 226px;
    width: 192px;
   
    margin-top: -10px;" />  </center>
    </div>
    <div style="height: 30%; width: 100%;">
      <p id="NewPhones" style="padding: 0px 70px 0px 70px; color: white;">
        Need information on your favorite mobile phone? Have a look at our comprehensive description, image galleries & comparison of your desired product.
    </p></div>

    <a href="#New" style="text-decoration: none;" >
    <div style="height: 10%; width: 100%; background-color: #0071e3; "><center style="    color: white;
      font-size: 23px;">New</center></div>  
  </a>
  
  
  </div>















  <div class="col-md-4" style="background-color: #bdbdbd;    height: 400px;" >

    <div style="height: 60%; width: 100%;">
    
   <center> <img src="{{ asset('storage/images/headerimg/M376cf24c179fe40a0cf2eddd40027a581598033369508.png') }}"  style="height: 216px;width: 184px;padding-top: 16px;" />  </center>
    </div>
    <div style="height: 30%; width: 100%;">
      <p id="NewPhones" style="padding: 0px 70px 0px 70px; color: white;">
        Want to sell your product? No worries, we got you covered. Just fill out our simple and easy to use form and get your product listed to find a potential buyer.
    </p></div>


    <a href="#Sell" style="text-decoration: none;" >
    <div style="height: 10%; width: 100%; background-color: #0071e3; "><center style="    color: white;
      font-size: 23px;">Sell</center></div>  
  
  </a>
  
  </div>
  </div>






</section>












  <section>
    <div class="pricecalculatorbackground pcback" >
        <div class="pc">
            <h1 align="center">Price Calculator</h1>
            <div class="pq">
              <h3>Get an estimate for your device</h3>
            <a href="pricecalculator.html">
              <button class="btn pc-btn">Try it Now!</button>
            </a>
            </div>
        </div>


    </div>

  </section>
  

















<section  style="padding-top: 70px; padding-bottom:70px ;background-color: #f4f4f4;     margin-left: 5px;">
 

  <div class="row" style="">
    <div class="col-md-3 col-lg-3 col-sm-3" id="slickBtnFortopBlog" style=" ">




      
      <div class="autoplay" data-dots="true">
     
        <div class="item" style="">


       


          <div id="extlrgwid" style=" padding: 0px 0px 18px 0px;  border-radius: 6px;   ;    ">
            <div class="thumb"> <img alt="featured project" id="slickblogimg" src="{{ asset('storage/images/headerimg//yhVGFepifdwE7kAEo8tQt5.jpg') }}"
                class="img-responsive img-fullwidth" style=" width: 107% !important;    border-top: 1px black solid;  border-right: 1px black solid; border-top-right-radius: 10px; border-top-left-radius: 10px;">
             
            </div>
          
<br/>

            <p style="color: black !important;    padding: 0px 10px 50px 24px;">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, placeat architecto molestias incidunt quas rerum repellat iste doloremque asperiores voluptatibus .
            </p>
         
          </div>



        </div>



      
        <div class="item">
          <div  id="extlrgwid" style=" padding: 0px 0px 18px 0px;
          border-radius: 6px;   ;    ">
            <div class="thumb"> <img alt="featured project" id="slickblogimg" src="{{ asset('storage/images/headerimg//yhVGFepifdwE7kAEo8tQt5.jpg') }}"
                class="img-responsive img-fullwidth" style="   width: 107% !important;  border-top: 1px black solid;  border-right: 1px black solid; border-top-right-radius: 10px; border-top-left-radius: 10px;">
              <!-- <h4 class="text-white mt-0 mb-0"><span class="price">Java Script Developer</span></h4> -->
            </div>
          
<br/>
<br/>
            <p style="color: black !important;    padding: 0px 10px 50px 24px;">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, placeat architecto molestias incidunt quas rerum repellat iste doloremque asperiores voluptatibus .
            </p>
         
          </div>
        </div>

        <div class="item" style="">


       


          <div  id="extlrgwid" style=" padding: 0px 0px 18px 0px;  border-radius: 6px;   ;    ">
            <div class="thumb"> <img alt="featured project" id="slickblogimg" src="{{ asset('storage/images/headerimg//yhVGFepifdwE7kAEo8tQt5.jpg') }}"
                class="img-responsive img-fullwidth" style=" width: 107% !important;    border-top: 1px black solid;  border-right: 1px black solid; border-top-right-radius: 10px; border-top-left-radius: 10px;">
             
            </div>
          
<br/>

            <p style="color: black !important;    padding: 0px 10px 50px 24px;">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, placeat architecto molestias incidunt quas rerum repellat iste doloremque asperiores voluptatibus .
            </p>
         
          </div>



        </div>



      
        <div class="item">
          <div  id="extlrgwid" style=" padding: 0px 0px 18px 0px;
          border-radius: 6px;   ;    ">
            <div class="thumb"> <img alt="featured project" id="slickblogimg" src="{{ asset('storage/images/headerimg//yhVGFepifdwE7kAEo8tQt5.jpg') }}"
                class="img-responsive img-fullwidth" style="   width: 107% !important;  border-top: 1px black solid;  border-right: 1px black solid; border-top-right-radius: 10px; border-top-left-radius: 10px;">
              <!-- <h4 class="text-white mt-0 mb-0"><span class="price">Java Script Developer</span></h4> -->
            </div>
          
<br/>
<br/>
            <p style="color: black !important;    padding: 0px 10px 50px 24px;">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, placeat architecto molestias incidunt quas rerum repellat iste doloremque asperiores voluptatibus .
            </p>
         
          </div>
        </div>


        <div class="item" style="">


       


          <div  id="extlrgwid" style=" padding: 0px 0px 18px 0px;  border-radius: 6px;   ;    ">
            <div class="thumb"> <img alt="featured project" id="slickblogimg" src="{{ asset('storage/images/headerimg//yhVGFepifdwE7kAEo8tQt5.jpg') }}"
                class="img-responsive img-fullwidth" style=" width: 107% !important;    border-top: 1px black solid;  border-right: 1px black solid; border-top-right-radius: 10px; border-top-left-radius: 10px;">
             
            </div>
          
<br/>

            <p style="color: black !important;    padding: 0px 10px 50px 24px;">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, placeat architecto molestias incidunt quas rerum repellat iste doloremque asperiores voluptatibus .
            </p>
         
          </div>



        </div>



      
    

      
      </div>
    </div>
   



    <div class="col-md-3 col-lg-3 col-sm-3" id="" style=" ">


      <div  id="ExtraLargeScren" style="">

        <div id="blogImagesExtraLarge" style="    height: 55%; width: 100%; border-right: 1px black solid;
        border-top-right-radius: 10px; border-top: 1px black solid;  border-top-left-radius: 10px; ">
        <img src="{{ asset('storage/images/headerimg/M446a60bd89737523d078b714e635b9a81598079779540.png') }}" style="width : 100% !important;border-top-right-radius: 10px;border-top-left-radius: 10px;" />
        </div>


        <div id="blogImagesExtraLarge" style="height: 45% ; width: 100% ;border-right: 1px black solid;
        border-bottom: 1px black solid;  
        border-bottom-right-radius: 10px;
        border-left: 1px black solid;
        border-bottom-left-radius: 10px; ">
          <div id="bloghr" style="height: 75% ; width: 100% ;    padding: 18px 18px 0px 18px; ; text-align: justify; color: black !important; ">
            The Blogger mobile app allows you to post, edit, save, and view your blog posts save, and view your blog posts.
            <hr style="    background-color: black;    width: 94%;"/>
          </div>
          
          <div style="height: 25% ; width: 100% ;">
          <center style="padding: 5px 5px 17px 5px;"><a href="#" style="color: #1d81e5 !important; font-weight: bold;" >Read More</a></center>
          </div>
          </div>




      
        
      </div>
    </div>



    
    
 
    <div class="col-md-3 col-lg-3 col-sm-3" id="" style=" ">


      <div  id="ExtraLargeScren" style="">

        <div id="blogImagesExtraLarge" style="    height: 55%; width: 100%; border-right: 1px black solid;
        border-top-right-radius: 10px; border-top: 1px black solid;  border-top-left-radius: 10px; ">
        <img src="{{ asset('storage/images/headerimg/Mfd476483534612a50a4d74adabc1313f1598079486580.png') }}" style="width : 100% !important;border-top-right-radius: 10px;border-top-left-radius: 10px;" />
        </div>


        <div id="blogImagesExtraLarge" style="height: 45% ; width: 100% ;border-right: 1px black solid;
        border-bottom: 1px black solid;  
        border-bottom-right-radius: 10px;
        border-left: 1px black solid;
        border-bottom-left-radius: 10px; ">
          <div id="bloghr" style="height: 75% ; width: 100% ;    padding: 18px 18px 0px 18px; ; text-align: justify; color: black !important; ">
            The Blogger mobile app allows you to post, edit, save, and view your blog posts save, and view your blog posts.
            <hr style="    background-color: black;    width: 94%;"/>
          </div>
          
          <div style="height: 25% ; width: 100% ;">
          <center style="padding: 5px 5px 17px 5px;"><a href="#" style="color: #1d81e5 !important; font-weight: bold;" >Read More</a></center>
          </div>
          </div>




      
        
      </div>
    </div>


    <div class="col-md-3 col-lg-3 col-sm-3" id="" style=" ">


      <div  id="ExtraLargeScren" style="">

        <div id="blogImagesExtraLarge" style="    height: 55%; width: 100%; border-right: 1px black solid;
        border-top-right-radius: 10px; border-top: 1px black solid;  border-top-left-radius: 10px; ">
        <img src="{{ asset('storage/images/headerimg/Mca3196a823a09c135570d23e4f84b80c1598080020599.png') }}" style="width : 100% !important;border-top-right-radius: 10px;border-top-left-radius: 10px;" />
        </div>


        <div id="blogImagesExtraLarge" style="height: 45% ; width: 100% ;border-right: 1px black solid;
        border-bottom: 1px black solid;  
        border-bottom-right-radius: 10px;
        border-left: 1px black solid;
        border-bottom-left-radius: 10px; ">
          <div id="bloghr" style="height: 75% ; width: 100% ;    padding: 18px 18px 0px 18px; ; text-align: justify; color: black !important; ">
            The Blogger mobile app allows you to post, edit, save, and view your blog posts save, and view your blog posts.
            <hr style="    background-color: black;    width: 94%;"/>
          </div>
          
          <div style="height: 25% ; width: 100% ;">
          <center style="padding: 5px 5px 17px 5px;"><a href="#" style="color: #1d81e5 !important; font-weight: bold;" >Read More</a></center>
          </div>
          </div>




      
        
      </div>
    </div>








    </div>









    <hr id="resphrOnmob" style="width: 43%;
    background-color: black;
    margin-top: -35px;" />
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

	<center><h3 style="margin-top: 45px; color: black !important; ">Meet the new handsets</h3></center>
	<center><hr style="width: 10%; height: 2px; background-color: #0a6cd1;"/></center>
	<section id="NewBrandsMob"  style="padding-top: 100px; background-color: white;">
		<div class="container">
		  	<div class="row" >
		  
			    <div class="col-md-12 col-lg-12 col-sm-12" id="slickBtnFor">
			    
			      	<div class="autoplayFeatures">
			      		@foreach($products as $product)
			      			@php $img = 'storage/'.$product->image @endphp
			      			<figure>
					            <img src="{{ asset($img) }}" alt="Trulli" style="width: 100%; height: 250px;">
					            <figcaption>
					            
						            <div class="rightbox" style="height: 75px;margin-top: 19px;">
						              <center><p style="font-size: 15px;   font-variant: all-small-caps;"><a style="color: #000000;     " href="{{ route('ProductDetail',$product->id) }}">{{ $product->name }}</a>    </p></center>
						              
						                <center> <div class="shortdesc" style=" color: #959595 ;  font-size: 11px;   ">Computer in your pocket</div></center>
						                                              
						            </div>
					            </figcaption>
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
 slidesToScroll: 1,
  autoplay: true,
 autoplaySpeed: 3000,



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