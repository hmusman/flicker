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
   @include('includes.header');

  <br/>

<div class="row">
  <div class="col-md-12">
    <img src="{{ asset('storage/images/new_size.jpg') }}" style="width: 100%;" />
  </div>
</div>



<div class="row">
    <div  style="width: 16.66% !important;">
      
        <div class="row" style="background-color: #fafafa;margin-top: 530px; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;">Network</p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Technology</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;">Launch</p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Anounced</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Status</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;">Body</p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Dimensions</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Weight</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Build</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Sim</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;">Display</p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Type</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Size</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Resolution</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Protection</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;">PlatForm</p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Os</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">ChipSet</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Cpu</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Gpu</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;">Memory</p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 1vw">Card Slot</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Internal</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;">Main Camera</p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">triple</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Features</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Video</p>
            </div>
          </div>
        </div>


        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;">Selfie Camera</p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">triple</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Features</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Video</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;">Sound</p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Loudspeaker</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">3.5 mm jack</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">MIc</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;">Comms</p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Wlan</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Bluetooth</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">GPS</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">NFC</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Radio</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">USB</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;">Features</p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Sensors</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;">Battery</p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Stand By</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Talk Time</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Music Play</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;">Misc</p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Colors</p>
            </div>
          </div>
        </div>

        <div class="row" style="background-color: #fafafa; ">
          <div class="col-md-4">
            <p style="color: red; font-weight: bold;"></p>
          </div>
          <div class="col-md-8">

            <div style="width: 30%; float: left; border-right: 2px #efefef solid;border-left: 2px #efefef solid; ">
              <p  id="changePFontVWOnMob" style="font-size: 14px;font-weight: bold;">Price</p>
            </div>
          </div>
        </div>

    </div>

    <div style="width: 27.77% !important;">
      
      <div id="ColOnMobile" style="width: 100%;">


        <div style=" width: 100% ; ">


          <div id="widthThirtyOnMob" style="width: 30%; float: left;">&nbsp;</div>
          <div id="widthSeventyOnMob" style="width: 70%; float: left; ">
          
            <div class="container-fluid">
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

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">GSM / HSPA / LITE</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">2020</p></div>
            </div>
        </div>


        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">GSM / HSPA / LITE</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">2020</p></div>
            </div>
        </div>


        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">GSM / HSPA / LITE</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">2020</p></div>
            </div>
        </div>


        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">GSM / HSPA / LITE</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">2020</p></div>
            </div>
        </div>


        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

        <div class="row" style="background-color: #fafafa;margin-top:-3px !important; border-bottom: 2px #efefef solid; ">
            <div class="col-md-12">
            <div style="width: 70%; float: left; border-right: 2px #efefef solid; "><p id="changePFontVWOnMob" style="font-size: 1.4vw">Available</p></div>
            </div>
        </div>

      </div>


    </div><!-- second div  -->
    <div style="width: 27.77% !important;"><!--start third div  -->2</div><!--end third div  -->
    <div style="width: 27.77% !important;"><!--start fourth div  -->4</div><!-- end fourth div  -->
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




@include('includes.footer')
 
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