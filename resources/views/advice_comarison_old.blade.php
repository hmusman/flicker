<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >




  </head>
  <script src="{{ asset('js/jquery-2.1.3.min.js') }}" ></script>
  <script src="j{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- <link href="css/style.css" rel='stylesheet' type='text/css' media="all"> -->
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
      background-image: url('{{ asset("storage/css/searchicon.png")}}');
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




#widthThirtyOnMob{
width: 0% !important;
display: none !important;
visibility: hidden !important;
}

#widthSeventyOnMob{
width: 100% !important;
}


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

  




#ColOnMobile{
  width: 50% !important;
}

#ColOnMobileCenter{
  width: 0% !important;
  display: none !important;
  visibility: hidden !important;
}
#ColOnMobile{
  width: 50% !important;
}

  
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
img[src="{{ asset('storage/images/headerimg/ic_query_builder_black_18dp.png')}}"]{
  height: 28px !important;
}


  @media (max-width: 550px){

#myULthree{
  margin-left: -45px !important;
}
.ButtonSearchOnMob{
  margin-left: 139px !important;
}


#myInputone, #myInputthree{
  width: 150% !important;
  margin-left: -28px !important;
}



    #ChangeContentSetMob{
      margin-top: 55px !important;
    }
  #ChangeContentSetMob3{
      margin-top: 40px !important;
    }
#changePFontVWOnMob{
  font-size: 2.4vw !important;
}

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

<style>
  #myInputone {
    background-image: url('{{ asset("css/searchicon.png") }}');
    background-position: 10px 12px;
    background-repeat: no-repeat;
    width: 100%;
    font-size: 16px;
    /* padding: 12px 20px 12px 40px; */
    border: 1px solid #ddd;
    margin-bottom: 12px;
        height: 45px;
  }
 #myInputtwo {
    background-image: url('{{ asset("css/searchicon.png") }}');
    background-position: 10px 12px;
    background-repeat: no-repeat;
    width: 100%;
    font-size: 16px;
    /* padding: 12px 20px 12px 40px; */
    border: 1px solid #ddd;
    margin-bottom: 12px;
        height: 45px;
  }
   #myInputthree {
    background-image: url('{{ asset("css/searchicon.png") }}');
    background-position: 10px 12px;
    background-repeat: no-repeat;
    width: 100%;
    font-size: 16px;
    /* padding: 12px 20px 12px 40px; */
    border: 1px solid #ddd;
    margin-bottom: 12px;
        height: 45px;
  }
  #myULone {
    list-style-type: none;
    padding: 0;
    margin: 0;
    width: 50%;
  }

  #myULtwo {
    list-style-type: none;
    padding: 0;
    margin: 0;
    width: 50%;
  }
  #myULthree {
    list-style-type: none;
    padding: 0;
    margin: 0;
    width: 50%;
  }
  #myULone li a {
    border: 1px solid #ddd;
    margin-top: -1px;
    /* Prevent double borders */
    background-color: #f6f6f6;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    color: black;
    display: block
  }

  .myUL li button {
    border: 1px solid #ddd;
    margin-top: -1px;
    /* Prevent double borders */
    background-color: #f6f6f6;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    color: black;
    display: block;
    cursor: pointer;
  }
 #myULtwo li a {
    border: 1px solid #ddd;
    margin-top: -1px;
    /* Prevent double borders */
    background-color: #f6f6f6;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    color: black;
    display: block
  }

   #myULthree li a {
    border: 1px solid #ddd;
    margin-top: -1px;
    /* Prevent double borders */
    background-color: #f6f6f6;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    color: black;
    display: block
  }

  .myUL li button:hover:not(.header) {
    background-color: #eee;
  }
  #myULone li a:hover:not(.header) {
    background-color: #eee;
  }
  #myULthree li a:hover:not(.header) {
    background-color: #eee;
  }

  #setwidthfirst{
  height: 115px;
   width:100%;  
      margin-right: 115px;
  }

  #setwidthsecond{
        height: 115px;
    width: 76% !important;
    margin-top: -15px;
    margin-left: 82px !important;
    margin-right: 115px;
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
  style="background-position: right !important;outline: none;    width: 388px;margin-left: 3px;border: 1px #f8f7f7 solid;  height: 1px;  margin-top: 6px;background: url(images/ic_search_black_18dp.png) no-repeat scroll 7px 7px; ">



  

  <ul onblur="hideDiv()" id="myUL" style="  background-color: white ;  box-shadow:  0 0 5px #000000;position:absolute  ;width: 25%;  overflow: scroll ; z-index: 20; ;display: none ;  height: 500px;">
    <!-- <div>
      <button id="srchbtnid" onclick="hideDiv();" style="margin-left: 350px;background-color: white;color: black;padding: 7px;font-weight: 600;border-style: none;">X</button>
    </div> -->

    <div>
     <p style="background-color: white;color: black;padding: 7px;font-weight: 600;border-style: none;">DEVICES  <button id="srchbtnid" onclick="hideDiv();" style="margin-left: 280px;
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



  
<br/>




 








<div class="row">
  <div class="col-md-12">
    <img src="{{ asset('storage/images/new_size.jpg') }}" style="width: 100%;" />
  </div>
</div>




<div class="row">
<!-- <div  style="width: 16%; float: left;  background-color: rgb(227, 231, 231); "></div>
 -->




<div id="ColOnMobile" style="width: 44%;  float: left; ">


<div style=" width: 100% ; ">


  <div id="widthThirtyOnMob" style="width: 30%; float: left;">&nbsp;</div>
  <div id="widthSeventyOnMob" style="width: 70%; float: left; ">
  
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="background-color: #f3f3f3">
    
          <p style="width: 100%;">COMPARE WITH</p>
    
          <div class="row">
    
            <div class="col-md-8" style=" ">
              <input type="text" id="myInputone" placeholder="Search for names.."
            title="Type in a name" />

              <ul onblur="hideDivone()" id="myULone" class="myUL"
                style="  background-color: white ;  box-shadow:  0 0 5px #000000;position:absolute  ;width: 149%;  overflow: scroll ; z-index: 20; ;display: none ;  height: 500px;">

              </ul>

            </div>
    
            <div class="col-md-4" style=" ">
             <p style="  background-color: rgb(248 247 247);
        border: 1px black solid;
        padding: 2px;
        text-align: center;
        text-transform: uppercase;
        font-weight: 700; cursor: pointer;height: 45px;
    padding-top: 10px; ">   Search</p>
            </div>
    
          </div>
    
    
    
    
          <p style="font-style: italic; margin-top: 10px;">
            <font style="    background-color: #bebbbb;
        color: white;
        padding: 0px 6px 0px 6px;
        border-radius: 50%;
        font-style: italic;  ">i</font> Please Enter Model Name or Part of it
          </p>
    
    
    
    
    
    
    
    
    
    
    
        </div>
      </div>
    </div>
    


    <div class="container">
      <div class="row" >
        <div class="col-md-12">
    
          <p style="    font-size: 22px;
            color: #868585;
            font-weight: bolder;">Samsung Glaxy M51</p>
    
    
          <center> <img style="width: 58%;" src="{{ asset('storage/images/IphoneDetails/6389070_sd-removebg-preview.png') }}" /></center>
    
    
          <p style="background-color: #6464e7;
            color: white;
            text-align: center;
            width: 100%;
            margin-top: 11px; ">PKR 90000</p>
    
        </div>
      </div>
    </div>
  
  </div>




</div>





<div style="width: 100%"></div>

<p>
 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
</p>

<div class="row" style="background-color: #fafafa; border-bottom: 2px #efefef solid; ">
  <div class="col-md-2"><p style="color: red; font-weight: bold;">Network</p></div>
    <div class="col-md-10">

<div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Technology</p></div>
<div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">GSM / HSPA / LITE</p></div>
    </div>
</div>







<div class="row" style="background-color: #fafafa; ">
  <div class="col-md-2">
    <p style="color: red; font-weight: bold;">Brand</p>
  </div>
  <div class="col-md-10">

    <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
      <p  id="changePFontVWOnMob" style="font-size: 1.4vw">Technology</p>
    </div>
    <div style="width: 70%; float: left; border-right: 2px #efefef solid; ">
      <p  id="changePFontVWOnMob" style="font-size: 1.4vw">GSM / HSPA / LITE</p>
    </div>
  </div>
</div>





<div class="row" style="background-color: #fafafa; border-bottom: 2px #efefef solid; ">
  <div class="col-md-2">
    <p style="color: red; font-weight: bold;"></p>
  </div>
  <div class="col-md-10">

    <div style="width: 30%; float: left; ">
      <p id="changePFontVWOnMob" style="font-size: 1.4vw">Anounced</p>
    </div>
    <div style="width: 70%; float: left; ">
      <p id="changePFontVWOnMob" style="font-size: 1.4vw">2020 August , 31</p>
    </div>
  </div>
</div>




<div class="row" style="background-color: #fafafa; border-bottom: 2px #efefef solid; ">
  <div class="col-md-2">
    <p style="color: red; font-weight: bold;">Launch</p>
  </div>
  <div class="col-md-10">

    <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
      <p id="changePFontVWOnMob" style="font-size: 1.4vw">Technology</p>
    </div>
    <div style="width: 70%; float: left; border-right: 2px #efefef solid; ">
      <p id="changePFontVWOnMob" style="font-size: 1.4vw">GSM / HSPA / LITE</p>
    </div>
  </div>
</div>

</div>








<div id="ColOnMobileCenter" style="width: 28%; float: left; ">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="background-color: #f3f3f3">
  
        <p style="width: 100%;">COMPARE WITH</p>
  
        <div class="row">
  
          <div class="col-md-9" style=" ">
            <input type="text" id="myInputtwo" placeholder="Search for names.." title="Type in a name" />
            
            <ul onblur="hideDivtwo()" id="myULtwo" class="myUL" 
            style="  background-color: white ;  box-shadow:  0 0 5px #000000;position:absolute  ;width: 144%;  overflow: scroll ; z-index: 20; ;display: none ;  height: 500px;">
            </ul>
          
          </div>
  
          <div class="col-md-3" style="   background-color: rgb(248 247 247);
          border: 1px black solid;
          padding: 2px;
          text-align: center;
          text-transform: uppercase;
          font-weight: 700; cursor: pointer; height: 45px;
    padding-top: 10px;">
            Search
          </div>
  
        </div>
  
  
  
  
        <p style="font-style: italic; margin-top: 10px;">
          <font style="    background-color: #bebbbb;
          color: white;
          padding: 0px 6px 0px 6px;
          border-radius: 50%;
          font-style: italic;  ">i</font> Please Enter Model Name or Part of it
        </p>
  
      </div>
    </div>
  </div>
  
  
  <div class="hideDivtwo"> <!--mine-->
    


  </div><!-- mine -->


</div>







<div  id="ColOnMobile" style="width: 28%; float: left; ">


<div class="container">
  <div class="row">
    <div class="col-md-12" style="background-color: #f3f3f3">

      <p style="width: 100%;">COMPARE WITH</p>

      <div class="row">

        <div class="col-md-9" style=" ">
          <input type="text" id="myInputthree" placeholder="Search for names.." title="Type in a name" />
        <ul onblur="hideDivthree()" id="myULthree" class="myUL"
          style="  background-color: white ;  box-shadow:  0 0 5px #000000;position:absolute  ;width: 138%;  overflow: scroll ; z-index: 20; ;display: none ;  height: 500px;">
      
        </ul>

        </div>

        <div class="col-md-3" style="   background-color: rgb(248 247 247);
          border: 1px black solid;
          padding: 2px;
          text-align: center;
          text-transform: uppercase;
          font-weight: 700; cursor: pointer;height: 45px;
    padding-top: 10px; ">
          Search
        </div>

      </div>

      <p style="font-style: italic; margin-top: 10px;">
        <font style="    background-color: #bebbbb;
          color: white;
          padding: 0px 6px 0px 6px;
          border-radius: 50%;
          font-style: italic;  ">i</font> Please Enter Model Name or Part of it
      </p>

    </div>
  </div>
</div>



<div class="hideDivthree"> <!--mine-->
</div><!-- mine -->



</div>






<!-- 


<div  style="width: 5%; float: left; "></div> -->
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
      showdiv();
  
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
      function showdiv(){
         
          document.getElementById('myUL').style.display = 'block';
      }
  
  
  
      function hideDiv(){
          document.getElementById('myUL').style.display = 'none';
      }
  </script>
  
  
  
  
<script>
    

$(document).ready(function(){
//        $('.autoplayFeatures').slick({
//  slidesToShow: 4,
//  slidesToScroll: 1,
//   autoplay: true,
//  autoplaySpeed: 3000,
//  pauseOnHover:true,

//  dots: true,
//  responsive: [
//      {
//        breakpoint: 500,
//        settings: {
//        slidesToShow: 2,
//        slidesToScroll: 1,
//        }
//      }
//    ]  
//  // variableWidth: true
// });
});







$(function(){
   $('#shopBtn').attr('href','#scrollTo');
});



function image1ReplaceOnClick1(){

  document.getElementById("myimage").srcset = "images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-184389384.jpg";
  document.getElementById("myresult").style.backgroundImage = "url('images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-184389384.jpg')";
}


function image1ReplaceOnClick2(){

document.getElementById("myimage").srcset = "images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-184389619.jpg";
document.getElementById("myresult").style.backgroundImage = "url('images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-184389619.jpg')";
}


function image1ReplaceOnClick3(){

document.getElementById("myimage").srcset = "images/KHIPSE264BLK_4.jpg";
document.getElementById("myresult").style.backgroundImage = "url('images/KHIPSE264BLK_4.jpg')";
}


function image1ReplaceOnClick4(){

document.getElementById("myimage").srcset = "images/packaging-new-iphone-se-apple-paris-france-may-packaging-new-black-iphone-se-multinational-company-182969056.jpg";
document.getElementById("myresult").style.backgroundImage = "url('images/packaging-new-iphone-se-apple-paris-france-may-packaging-new-black-iphone-se-multinational-company-182969056.jpg')";
}


function image1ReplaceOnClick5(){

document.getElementById("myimage").srcset = "images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-193162726.jpg";
document.getElementById("myresult").style.backgroundImage = "url('images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-193162726.jpg')";
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

  
<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
        
<script type="text/javascript" src="{{ asset('slick/jquery3.2.1.js') }}"></script>
  
<script type="text/javascript" src="{{ asset('slick/slick.js') }}"></script>
 



<script  src="{{ asset('js/tabcontent.js') }}"></script>
<script  src="{{ asset('js/Zoomerscript.js') }}"></script>

<script type="text/javascript">
  
  function singleProduct(id,hideVal)
  {
      var url = 'SingleCompareProductDetail/'+id;
      $.ajax({
        url:url,
        type:"get",
        data:{id:id},
        success:function(data)
        {
          if(hideVal=='hideDivone'){ hideDivone(); }
          else if(hideVal=='hideDivtwo'){ hideDivtwo(); }
          else if(hideVal=='hideDivthree'){ hideDivthree(); }
          $('.'+hideVal).html(data);
        }

      });
  }

  function adviceComparisonFun(query,id,hideVal)
  {
    $.ajax({
      url:'{{ route("AdviceComparisonAll") }}',
      type:"get",
      data:{query:query,hideFun:hideVal},
      success:function(data){
        id.html(data);
      }

    });
  }

  $(document).ready(function(){
      $('#myInputone').keyup(function(){ showdivone();  adviceComparisonFun($(this).val(),$('#myULone'),'hideDivone'); });
      $('#myInputtwo').keyup(function(){ showdivtwo(); adviceComparisonFun($(this).val(),$('#myULtwo'),'hideDivtwo'); });
      $('#myInputthree').keyup(function(){ showdivthree(); adviceComparisonFun($(this).val(),$('#myULthree'),'hideDivthree'); });

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
  function myFunctionone() {
    showdivone();

    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInputone");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myULone");
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



    function myFunctiontwo() {
        showdivtwo();

        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("myInputtwo");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myULtwo");
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






       function myFunctionthree() {
          showdivthree();

          var input, filter, ul, li, a, i, txtValue;
          input = document.getElementById("myInputthree");
          filter = input.value.toUpperCase();
          ul = document.getElementById("myULthree");
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
  function showdivone() {

    document.getElementById('myULone').style.display = 'block';
  }



  function hideDivone() {
    document.getElementById('myULone').style.display = 'none';
  }
</script>


<script>
  function showdivtwo() {

    document.getElementById('myULtwo').style.display = 'block';
  }



  function hideDivtwo() {
    document.getElementById('myULtwo').style.display = 'none';
  }
</script>

<script>
  function showdivthree() {

    document.getElementById('myULthree').style.display = 'block';
  }



  function hideDivthree() {
    document.getElementById('myULthree').style.display = 'none';
  }

</script>
</html>