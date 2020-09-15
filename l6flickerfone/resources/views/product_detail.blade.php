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
  <link rel="stylesheet" href="{{ asset('css/Zoomerstyle.css') }}">


  <link href="{{ asset('css/pagination.css') }}" rel="stylesheet" type="text/css">

  <style>
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
  height: 65px !important;
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
</style>


<body>



    <a href="#" id="scroll" style="display: none;"><span></span></a>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="topNav"  >
    <a class="navbar-brand" href="#"><img id="logoFlickerflone" src="{{ asset('storage/images/logo Black-01.jpg')}}"></a>
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
       
     


        <li class="nav-item dropdown" >
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" 
          style="padding: 8px 30px 6px 30px !important;   ;  height: 38px !important; ; border-left: 1px #4c4a575c solid !important;font-weight: bold;"> BRANDS  </a>
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
  style="background-position: right !important;outline: none;    width: 388px;margin-left: 3px;border: 1px #f8f7f7 solid;  height: 1px;  margin-top: 6px;background: url(images/ic_search_black_18dp.png')}}) no-repeat scroll 7px 7px; ">




  <ul onblur="hideagain()" id="myUL" style="  background-color: white ;  box-shadow:  0 0 5px #000000;position:absolute  ;width: 25%;  overflow: scroll ; z-index: 20; ;display: none ;  height: 500px;">
    <!-- <div>
      <button id="srchbtnid" onclick="hideagain();" style="margin-left: 350px;background-color: white;color: black;padding: 7px;font-weight: 600;border-style: none;">X</button>
    </div> -->

    <div>
     <p style="background-color: white;color: black;padding: 7px;font-weight: 600;border-style: none;">DEVICES  <button id="srchbtnid" onclick="hideagain();" style="margin-left: 305px;
      background-color: #f8f7f7;
      color: black;
   
      font-weight: 600;
      border-style: none;">X</button></p>
    </div>



    <li>
      <div class="row">
        <div class="col-md-2">
          <div id="setwidth" style="    height: 115px; width:100%;      margin-right: 115px;">
            <img src="{{ asset('storage/images/LiveSrchImages/Apple_iPhone_12_5G_1.jpg')}}" style="  padding-left: 12px;  height: 91px;  ">
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
            <img src="{{ asset('storage/images/LiveSrchImages/852D3B1A-4511-EA95-7918-A7FAAAF29DE0.jpg')}}" style="     padding-left: 3px; height: 97px;  ">
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
            <img src="{{ asset('storage/images/LiveSrchImages/303612.png')}}" style=" 
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
            <img src="{{ asset('storage/images/LiveSrchImages/alcatel-3x-2019.jpg')}}" style="     padding-left: 12px;
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
            <img src="{{ asset('storage/images/LiveSrchImages/12-Gold-1-600x600.jpg')}}" style="  padding-left: 0px; height: 110px;  ">
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
            <img src="{{ asset('storage/images/LiveSrchImages/1560367_6.jpg')}}" style="     padding-left: 12px;
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
            <img src="{{ asset('storage/images/LiveSrchImages/Apple_iPhone_12_5G_1.jpg')}}" style="  padding-left: 12px;  height: 91px;  ">
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
  <div class="col-md-6">
<div >
    <div class="img-zoom-container" onmousenter="showme(this)" >
    	@php $img1 = 'storage/'.$product->image @endphp
    	@php $img2 = 'storage/'.$product->dimage @endphp
    	@php $img3 = 'storage/'.$product->dimage1 @endphp
      <span><p class="imgid" style="allign:center;"><img  id="myimage" src="{{ asset($img1)}}"  srcset="{{ asset($img1)}}" width="426" height="526"></p></span>
    
      <span id="myhide" style="float: right;
        position: absolute;
        top: -100px;
        left: 437px;




        width: auto;
        height: 100%; z-index: 12; ">
        <div style="height: 526px; width: 426px; margin-top: 100px; background-repeat:no-repeat !important ;   "  id="myresult" class="img-zoom-result"  onmouseleave="" ></div></span>
  
  <!-- <div id="slider1">
    <div class="thumbelina-but horiz left disabled"><i class="glyphicon glyphicon-circle-arrow-left"></i></div>
        <div style="position:absolute;overflow:hidden;width:100%;height:100%;"><ul class="thumbelina" style="left: 0px;">
        <li style="display: inline-block;"><img class="cloudzoom-gallery img-thumbnail" src="{{ asset('storage/images/8beeaa88614dee924078ebda6b3472f1 - Copy.jpg')}}" data-cloudzoom="useZoom:'.cloudzoom', image:'images/CEthq6vU4h - Copy.jpg')}}'  " style="max-width:90px;max-height:100px;"></li>
        <li style="display: inline-block;"><img class="cloudzoom-gallery img-thumbnail" src="{{ asset('storage/images/8beeaa88614dee924078ebda6b3472f1 - Copy.jpg')}}" data-cloudzoom="useZoom:'.cloudzoom', image:'images/CEthq6vU4h - Copy.jpg')}}'  " style="max-width:90px;max-height:100px;"></li>
  
        </ul></div>
        <div class="thumbelina-but horiz right disabled"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
    </div> -->
  
  
  </div>














<div class="container">


  <div class="row" >
  
    <div class="col-md-12 col-lg-12 col-sm-12" id="slickBtnFor">
    
      <div class="autoplayFeatures">
        
        @if(!empty($img2))

        	<figure  >
	          <img class="productImgs" src="{{ asset($img2)}}" alt="Trulli" style="width:100%;height: 100px;">
	        </figure>

      	@endif




        @if(!empty($img3))

        	<figure  >
	          <img class="productImgs" src="{{ asset($img3)}}" alt="Trulli" style="width:100%;height: 100px;">
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

	<p style="font-weight: bold;">Color <font style="color: red;"> *</font></p>

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





<p style="font-weight: bold;">Storage <font style="color: red;"> *</font></p>


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


    
    <a style="position: absolute ;text-decoration: none ;  border: 2px #d0c6c6 solid;padding: 2px 20px 7px 20px;color: white !important; background-color: #42bd41; border-radius: 6px; height: 35px !important; " href="#">COMPARE</a>

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
              


	            <div class="row"  style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
	              <div class="col-md-2">
	               <font style="font-size: 24px;
	              
	               font-weight: 600; color: red;"> NETWORK</font>
	              </div>
	              <div class="col-md-2" style="color: black; font-size: 20px" >Technology</div>
	              <div class="col-md-8" style="color: black; font-size: 20px">GSM / SDMA /HSPA / EVDO / LTE</div>
	            </div>



         


	            <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
	              	<div class="col-md-2"><font style="font-size: 24px;font-weight: 600; color: red;"> LAUNCH</font></div>
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
	                		<p style="border-bottom: 1px #efefef solid;">{{ date('Y',strtotime($product->launch_announced)) }},
							{{ date('F',strtotime($product->launch_announced)) }} {{ date('d',strtotime($product->launch_announced)) }} </p>
	                	@endif
	                	@if($product->launch_status !='')
	                 		<p style="margin-top: -10px;">{{ $product->launch_status }} </p>
	                 	@endif
	                 </div>
	            </div>





	            <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
	              <div class="col-md-2">
	               <font style="font-size: 24px;
	              
	               font-weight: 600; color: red;"> BODY</font>
	              </div>
	              <div class="col-md-2" style="color: black; font-size: 20px" >
	                @if($product->body_dimension !='')
	                	<p  style="border-bottom: 1px #efefef solid;      width: 118%;">Dimensions</p>
	                @endif
	                @if($product->body_weight !='')
	                	<p class="tblrowbottmstl"> Weight</p>
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
	                	<p style="border-bottom: 1px #efefef solid;">{{ $product->body_dimension }}</p>
	                @endif
	                @if($product->body_weight !='')
	                	<p class="tblrowbottmstl2">{{ $product->body_weight }}</p>
	                @endif
	                 @if($product->body_build!='')
	                	<p class="tblrowbottmstl2">{{ $product->body_build }}</p>
	                @endif
	                 @if($product->body_sim !='')
	                	<p class="tblrowbottmstl2">{{ $product->body_sim }}</p>
	                @endif

	                </div>
                                
                </div>



                <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                  <div class="col-md-2">
                   <font style="font-size: 24px;
                  
                   font-weight: 600; color: red;"> DISPLAY</font>
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
                    		<p style="border-bottom: 1px #efefef solid;">{{ $product->display_type }}</p>
                    	@endif
                    	@if($product->display_size !='')
                    		<p class="tblrowbottmstl2">{{ $product->display_size }}</p>
                    	@endif
                    	@if($product->display_resolution !='')
                    		<p class="tblrowbottmstl2">{{ $product->display_resolution }}</p>
                    	@endif
                     	@if($product->display_protection !='')
                    		<p class="tblrowbottmstl2">{{ $product->display_protection }}</p>
                    	@endif
                    </div>
                   
                    
                    </div>

                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; color: red;"> PLATEFORM</font>
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
	                        	<p style="border-bottom: 1px #efefef solid;">{{ $product->platform_os }}</p>
	                        @endif
                        	@if($product->platform_chipset !='')
	                        	<p class="tblrowbottmstl2">{{ $product->platform_chipset }}</p>
	                        @endif
	                        @if($product->platform_cpu !='')
	                        	<p class="tblrowbottmstl2">{{ $product->platform_cpu }}</p>
	                        @endif
	                        @if($product->platform_gpu !='')
	                        	<p class="tblrowbottmstl2">{{ $product->platform_gpu }}</p>
	                        @endif
                       
                        </div>
                        
                        
                        
                        
                    </div>
                        
                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; color: red;"> MEMORY</font>
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
	                        	<p style="border-bottom: 1px #efefef solid;">{{ $product->memory_card_slot }}</p>
	                        @endif
	                        @if($product->memory_ram !='')
	                        	<p class="tblrowbottmstl2">{{ $product->memory_ram }}</p>
	                        @endif
	                        @if($product->memory_storage !='')
	                        	<p class="tblrowbottmstl2">{{ $product->memory_storage }}</p>
	                        @endif
                        
                        </div>
                        
                    </div>
                        
                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; color: red;"> MAIN CAMERA</font>
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
                        		<p style="border-bottom: 1px #efefef solid;">{{ $product->main_type_value }}</p>
                        	@endif
                        	@if($product->main_feature !='')
                        		 <p class="tblrowbottmstl2">{{ $product->main_feature }} </p>
                        	@endif
                        	@if($product->main_video !='')
                        		 <p class="tblrowbottmstl2">{{ $product->main_video }} </p>
                        	@endif
                        </div>
                    </div>
            
                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; color: red;"> SELFIE CAMERA</font>
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
                        		<p style="border-bottom: 1px #efefef solid;">{{ $product->selfie_type_value }}</p>
                        	@endif
                        	@if($product->selfie_feature !='')
                        		 <p class="tblrowbottmstl2">{{ $product->selfie_feature }} </p>
                        	@endif
                        	@if($product->selfie_video !='')
                        		 <p class="tblrowbottmstl2">{{ $product->selfie_video }} </p>
                        	@endif
                        </div>
                    </div>

                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; color: red;"> SOUND</font>
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
                        		<p style="border-bottom: 1px #efefef solid;">{{ $product->sound_loudspeaker }}</p>
                        	@endif
                        	@if($product->sound_jack !='')
                        		 <p class="tblrowbottmstl2">{{ $product->sound_jack }} </p>
                        	@endif
                        	@if($product->sound_mic !='')
                        		 <p class="tblrowbottmstl2">{{ $product->sound_mic }} </p>
                        	@endif
                        </div>
                    </div>

                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; color: red;">COMMS</font>
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
                        		<p style="border-bottom: 1px #efefef solid;">{{ $product->comms_wlan }}</p>
                        	@endif
                        	@if($product->bluetooth !='')
                        		 <p class="tblrowbottmstl2">{{ $product->bluetooth }} </p>
                        	@endif
                        	@if($product->comms_gps !='')
                        		 <p class="tblrowbottmstl2">{{ $product->comms_gps }} </p>
                        	@endif
                        	@if($product->comms_nfc !='')
	                      		 <p class="tblrowbottmst2">{{ $product->comms_nfc }}</p>
	                      	@endif
                        </div>

                    </div>

                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; color: red;">FEATURES</font>
                      </div>
                      	<div class="col-md-2" style="color: black; font-size: 20px" >
	                      	@if($product->feature_sensor !='')
	                      		 <p  style="border-bottom: 1px #efefef solid;width: 118%;">Sensor</p>
	                      	@endif
                      	</div>
                      	<div class="col-md-8" style="color: black; font-size: 20px">
                        	@if($product->feature_sensor !='')
                        		<p style="border-bottom: 1px #efefef solid;">{{ $product->feature_sensor }}</p>
                        	@endif
                        </div>

                    </div>

                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; color: red;">BATTERY</font>
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
                        		<p style="border-bottom: 1px #efefef solid;">{{ $product->battery_status }}</p>
                        	@endif
                        	@if($product->battery_talk_time !='')
                        		 <p class="tblrowbottmstl2">{{ $product->battery_talk_time }} </p>
                        	@endif
                        	@if($product->battery_music !='')
                        		 <p class="tblrowbottmstl2">{{ $product->battery_music }} </p>
                        	@endif
                        </div>

                    </div>
                 	
                 	<div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; color: red;">MISC</font>
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
                        		<p style="border-bottom: 1px #efefef solid;">
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
                        		 <p class="tblrowbottmstl2">{{ $product->price }} </p>
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
            
            <div style="height: 20%; width: 100%; background-color: #e5817a; ">
            
              <div  style="  width: 8% ;height: 100%;  float: left; text-align: center;"><p  id="Sresponsive" style="width: 100%;    font-size: 3.2vw;  color: white;   ">S</p> </div>
              <div style="  width: 92% ;height: 100%; background-color: #f0f0f0; float: left;">
              
                <div style="height: 60%; width: 100%;  color: black !important;">
                
                
                
                  <div id="setSobercatOnMob" style="height: 100%; width: 20%;  float: left; color: black;    font-size: 2vw;    font-weight: 700;">
                    
                    
                    <div style="height: 100%; width: 92%; float: left;     text-align: right;"> <p style="width: 100%;">SoberCat </p></div>
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
                    <div style="height: 100%; width: 10%; float: left;"><img   style="width: 96%; height: 32px;" src="{{ asset('storage/images/headerimg/ic_query_builder_black_18dp.png')}}" /></div>

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
              <p style="    font-size: 2vw;
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
                      
                      <div style="height: 20%; width: 100%; background-color: #e5817a; ">
                      
                        <div  style="  width: 8% ;height: 100%;  float: left; text-align: center;"><p  id="Sresponsive" style="width: 100%;    font-size: 3.2vw;  color: white;   ">T</p> </div>
                        <div style="  width: 92% ;height: 100%; background-color: #f0f0f0; float: left;">
                        
                          <div style="height: 60%; width: 100%;  color: black !important;">
                          
                          
                          
                            <div id="setSobercatOnMob" style="height: 100%; width: 20%;  float: left; color: black;    font-size: 2vw;    font-weight: 700;">
                              
                              
                              <div style="height: 100%; width: 92%; float: left;     text-align: right;"> <p style="width: 100%;">SoberCat </p></div>
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
                              <div style="height: 100%; width: 10%; float: left;"><img   style="width: 96%; height: 32px;" src="{{ asset('storage/images/headerimg/ic_query_builder_black_18dp.png')}}" /></div>
          
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
                        <p style="    font-size: 2vw;
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
       We do not flood your inbox, join our social network instead. <a href="#fcb"><img style="    height: 15px; width: 17px;" src="{{ asset('storage/images/headerimg/download-removebg-preview.png')}}" /> </a>   <a href="#twiter"><img style="    height: 20px; width: 20px;" src="{{ asset('storage/images/headerimg/twitter-1722376-1466162-removebg-preview.png')}}"></a><br/>
       
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

	$('.productImgs').click(function(){
		var imgSrc = $(this).attr('src');
		document.getElementById("myimage").srcset = imgSrc;
  		document.getElementById("myresult").style.backgroundImage = 'url("'+imgSrc+'")';
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


function image1ReplaceOnClick2(){

document.getElementById("myimage").srcset = "{{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-184389619.jpg')}}";
document.getElementById("myresult").style.backgroundImage = "url({{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-184389619.jpg')}})";
}


function image1ReplaceOnClick3(){

document.getElementById("myimage").srcset = "{{ asset('storage/images/KHIPSE264BLK_4.jpg')}}";
document.getElementById("myresult").style.backgroundImage = "url({{ asset('storage/images/KHIPSE264BLK_4.jpg')}})";
}


function image1ReplaceOnClick4(){

document.getElementById("myimage").srcset = "{{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-packaging-new-black-iphone-se-multinational-company-182969056.jpg') }}";
document.getElementById("myresult").style.backgroundImage = "url({{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-packaging-new-black-iphone-se-multinational-company-182969056.jpg')}})";
}


function image1ReplaceOnClick5(){

document.getElementById("myimage").srcset = "{{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-193162726.jpg')}}";
document.getElementById("myresult").style.backgroundImage = "url({{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-193162726.jpg')}})";
}

$(document).ready(function () {
           $("#tr").click(function () {
              
               $("#zoom").data('zoom-image', 'images/libelium_smart_world.jpg').elevateZoom({
                   zoomType: "inner",
                   cursor: "crosshair",
                   responsive: "true"
                 
               });
           });
       });
 

</script>

  
<script type="text/javascript" src="{{ asset('slick/slick.min.js')}}"></script>
        
<script type="text/javascript" src="{{ asset('slick/jquery3.2.1.js')}}"></script>
  
<script type="text/javascript" src="{{ asset('slick/slick.js')}}"></script>
 



<script  src="{{ asset('js/tabcontent.js')}}"></script>
  <script  src="{{ asset('js/Zoomerscript.js')}}"></script>



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