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
      border: 1px solid #ddd;
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
      }

    #usedSearchList li a {
      
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

/* #TableHeadFontSizeOnDesk{
  font-size: 17px !important;
} */
#MainHeightOnDesktop{
  height: 2153px !important;
}

.colblue{

  font-size: 17px !important;
}


#TableFonSizeOnDeskTop > div{
  font-size: 15px !important;
}

.widthOnDesk{
        width: 110px !important;
}
      .TechOnDeskTop{
              width: 57% !important;
      }
  
    #seconNav{
   background-color: rgb(238, 237, 237) !important;
 }








  }


.tdBlockOnMobSubhead{
      font-size: 14px;
    font-weight: 600;

        height: 37px !important;
    padding-top: 11px !important;
    text-shadow: 0px 0px 0.1px black !important;
}





.cradslotOnMob{
      height: 39px;
    font-weight: 600;
    text-shadow: 0px 0px 0.1px black;
  
    padding: 5px;
}


.Cameratriple{
      height: 106px;
   
}

.SelfieSingle{
      height: 39px;
   
}

.SoundLoudsp{
   height: 58px;
}

.CameraFeaturesOnMob{
      height: 55px ;

    text-shadow: 0px 0px 0.1px black;
    font-size: 15px ;
  
}
.SeliecamFatureMob{
      height: 40px ;

    text-shadow: 0px 0px 0.1px black;
    font-size: 15px ;
  
}

.BattTalktimeMobi{
     height: 40px ;

    text-shadow: 0px 0px 0.1px black;
    font-size: 15px ;
}

.BaterryChargMobi{
    height: 40px ;

    text-shadow: 0px 0px 0.1px black;
    font-size: 15px ;
}

  @media (max-width: 550px){



    .pricesotageTextOnMob{
       height: 70px !important;
    }
.pricStorMobi{
     height: 70px !important;
}

.batteryMuscMob{
      height: 105px !important;
}

    .SloudSpkrMob{
      height: 57px !important;
    }


.plateGpu{
  height: 90px !important;
}

    .chipGpuOnMibi{
      height: 90px !important;
    }
    .Dresolution{
      height: 90px !important;
    }

.ChipsetOnMob{
  height: 65px !important;
}

    .PlatFormPhone{
       height: 65px !important;
    }
.DipResoMobi{
  height: 70px !important;
}

    .DsizeMob{
      height: 65px !important
    }
.Cameratriple {
    height: 190px !important;
}
  .Dprotect{

height: 180px !important;
  }
.ProtecOnMoble{
  height: 180px !important;
}

#FootStyleOnMob{
  margin-top: 200px !important;
}

.MusicPlayOnMob{
  height: 104px !important;
}


.FeatureSensor{
      font-size: 12px !important;
      height: 160px !important;
}


.batteryCarge{
      font-size: 12px !important;
}

 .Commsblutoth{
font-size: 13px !important;

}






  .CameraVedios{


height: 113px !important;

    

}

.SelfiCameraVedios{
  
height: 112px !important;

   
}

.CameraFeaturesOnMob{
      height: 113px !important;

  
  
}

.AboveSoundbarSpce{
  height: 37px !important;
}

.SeliecamFatureMob{
      height: 40px !important;

  
  
}

.BattTalktimeMobi{
  height: 67px !important;
}

.BaterryChargMobi{
   height: 67px !important;
}
.cradslotOnMob{
      height: 65px;
    font-weight: 600;
    text-shadow: 0px 0px 0.1px black;
    font-size: 13px;
    padding: 5px;
}


.topPlateformSpconmob{
height: 56px !important;
}

.topCommsfirstSpconmob{
height: 37px !important;
}


.topFeaturSensoronmob{
height: 33px !important;
}
.topMainCameraSpconmob{
height: 56px !important;
}

.topMemorSpconmob{
height: 37px !important;
}

  .Dprotect{





   
    font-size: 11px !important;


}
  .Dresolution{

    font-size: 11px !important;


}

.commsNfC{
   font-size: 11px !important;
}
.CommsRadio{
      font-size: 11px !important;
       height: 67px !important ;
}

.commGps{
      font-size: 11px !important;
      height: 70px !important;
}
.MomoIntrnal{
   font-size: 11px !important;
       height: 70px !important ;
}

.mobTitleOnMob{
  margin-top: 41px !important;
}
.TopheightOnMob{
    height: 33px !important;
}


.topBodySpconmob{
     height: 36px !important;
}

.topBodySpconmob{
     height: 36px !important;
}
.topDisplaySpconmob{
height: 37px !important;
}
.Net1OnMob{
    height: 37px !important;
}


.lanchSpcOn{
    height: 33px !important;
}

.builWeigt2{
 padding-top: 21px !important;
    height: 65px !important;
}

.DisplayReslution{

    height: 70px !important;
}

.commRadio{
   height: 67px !important;
}

.commRadioNext{
   height: 90px !important;
}
.featreSenso{
   height: 160px !important;
}

.PlateuCpu{
      height: 56px;
}

.batteryTalkTime2{

    height: 67px !important;
}
.DBatteryChargingOne{

    height: 40px !important;
}

.simweight2{
padding-top: 9px !important;
    height: 120px !important;
}



.DisplaLastHeightOnMob{
padding-top: 9px !important;
    height: 120px !important;
}
.bodyweight2{
    padding-top: 21px !important;
    height: 65px !important;
}

.DisplayType{
  
    height: 65px !important;
}

.commsblutoo{
  
    height: 40px !important;
}

.platefrmchips{
  height: 65px !important;
}

.mem0ryInt{
  
    height: 70px !important;
}


.CameraVedioa{
  
    height: 70px !important;
}
.BuildSts1{
 font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 10px !important;
     height: 65px !important;
 
    text-shadow: 0px 0px 0.1px black !important;
      padding-top: 28px !important;
    padding-left: 16px !important;
}

.SIMSts1{
 font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 10px !important;
     height: 120px !important;
 
    text-shadow: 0px 0px 0.1px black !important;
      padding-top: 28px !important;
    padding-left: 16px !important;
}
.BodyHeadMob{
    display: block !important;
    font-size: 13px !important;
    text-shadow: 0px 0px 0.7px blue !important;
}

.BatteryOneMob{
    display: block !important;
    font-size: 10px !important;
    text-shadow: 0px 0px 0.7px blue !important;
}
.BodyHeadMobForFeatureSensor{
    display: block !important;
    font-size: 10px !important;
    text-shadow: 0px 0px 0.7px blue !important;
}

.BodySts1{
    font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 10px !important;
     height: 65px !important;
 
    text-shadow: 0px 0px 0.1px black !important;
      padding-top: 28px !important;
    padding-left: 16px !important;
}

.BuildSts1{
 font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 10px !important;
    
    padding-left: 16px !important;
}

.ResoltiondSts1{
   font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 10px !important;
    height: 65px !important;
    padding-left: 5px !important;
}

.SIMSts1{
 font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 10px !important;
    
    padding-left: 16px !important;
}
.DimnOnMobSubhead{
    font-weight: 600 !important;
    height: 65px !important;
 
    text-shadow: 0px 0px 0.1px black !important;
      padding-top: 28px !important;
    font-size: 9px !important;
}


      .DimensionsMob{
          
              height: 65px !important;
      }

.CommsWlanMob{
   height: 95px !important;
}

.commswlany{
   height: 95px !important;
}
      .CameraFeature{
          /* margin-top: 33px !important; */
              height: 113px !important;
      }


    

        .TrpleVed{
          /* margin-top: 33px !important; */
              height: 113px !important;
      }

      .selfivedo{
            height: 113px !important;
      }
 .CameraTripple{
          /* margin-top: 33px !important; */
              height: 190px !important;
      }
       .CameraSinleNexxt{
          /* margin-top: 33px !important; */
              height: 39px !important;
      }
      .StatusOnMob{
          height: 75px !important;
      }

      .StatheadOnMob{
          height: 75px !important;
    padding-top: 28px !important;
    font-size: 11px !important;
    text-shadow: 0px 0px 0.5px black !important;
    padding-left: 16px !important;

      }

.Lannounced{
        height: 37px !important;
  
}
.SpecialMargMob{
    margin-top: 28px !important;
}
.mobileCntTD{
    
    font-size: 13px !important;
    padding: 10.8px !important;

}

/* .LeftColheightOnMob{
    height: 477px !important;

} */

.fontOnMob{
    font-size: 21.3px !important;
}


.tdBlockOnMobhead{
    display: block !important;
    font-size: 10px !important;
    text-shadow: 0px 0px 0.7px blue !important;
}
.tdBlockOnMobSubhead{
  display: block !important;
font-size: 9px !important;
}


#myInputone{
  height: 30px !important;
  
}

#myInputthree{
    height: 30px !important;
}

#imgOneMob{
  width: 100% !important;
      height: 177px !important;
}


/* #widthThirtyOnMob{
width: 0% !important;
display: none !important;
visibility: hidden !important;
} */

/* #widthSeventyOnMob{
width: 100% !important;
} */


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
  
.LaunchWidthOnlyOnDesk{
      width: 110px !important;
}


div[class="img-zoom-container"]{
  margin-left: 174px !important;
}


.mobTitleOnMob{
  margin-top: -24px !important;
}


  }


  @media (max-width: 550px){


.PlateuCpu{
      height: 90px !important;
}




  footer{
  margin-top: 149px !important;
}

  .srcgBtnOnMob{

    height: 30px !important;
    padding-top: 0px !important;


        background-color: #eeeeee !important;
    border: 1px #cdcdcd solid !important;

  }




#ColOnMobileFirst{
  width: 40% !important;
}

#ColOnMobileCenter{
  width: 0% !important;
  display: none !important;
  visibility: hidden !important;
}
#ColOnMobileLast{
  width: 41% !important;
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
  height: 57px !important;
    /* top: -1px; */
    margin-top: -8px;
    margin-bottom: -8px;
}
img[src="images/headerimg/ic_query_builder_black_18dp.png"]{
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



img[src="images/headerimg/ic_query_builder_black_18dp.png"]{
  height: 17px !important;
    margin-top: -12px !important;
}




img[src="images/headerimg/ic_room_black_18dp.png"]{
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

img[src="images/headerimg/download__1_-removebg-preview (2).png"]{
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


.PlateuCpu{
      height: 56px;
}
</style>

<style>
    #myInput {
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
  #myInputone {
    background-image: url('/css/searchicon.png');
    background-position: 10px 12px;
    background-repeat: no-repeat;
    width: 100%;
    font-size: 16px;
    /* padding: 12px 20px 12px 40px; */
    border: 1px solid #ddd;
    margin-bottom: 12px;
   height: 45px;
    border: 1px black solid;
  }
 #myInputtwo {
    background-image: url('/css/searchicon.png');
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
    background-image: url('/css/searchicon.png');
    background-position: 10px 12px;
    background-repeat: no-repeat;
    width: 100%;
    font-size: 16px;
    /* padding: 12px 20px 12px 40px; */
    border: 1px solid black;
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
    /* border: 1px solid #ddd; */
    margin-top: -1px;
    /* Prevent double borders */
   /*  background-color: #f6f6f6; */
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    color: black;
    display: block
  }
 #myULtwo li a {
    /* border: 1px solid #ddd; */
    margin-top: -1px;
    /* Prevent double borders */
    /* background-color: #f6f6f6; */
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    color: black;
    display: block
  }

   #myULthree li a {
    /* border: 1px solid #ddd; */
    margin-top: -1px;
    /* Prevent double borders */
   /*  background-color: #f6f6f6; */
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    color: black;
    display: block
  }
  #myULone li a:hover:not(.header) {
    background-color: #eee;
  }
  #myULthree li a:hover:not(.header) {
  /*   background-color: #eee; */
  }

  #setwidthfirst{
  height: 115px;
   width:100%;  
      margin-right: 115px;
  }

  #setwidthsecond{
        height: 115px;
    width: 92%;
    margin-top: -15px;
    margin-left: 32px;
    margin-right: 115px;
  }








    
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
      /* border-bottom: 4px #eee solid; */
    /* background-color: #fafafa;
    border-bottom: 5px #eeeeee solid; */
}

#customers td, #customers th {
 border: 1px solid #ededed;
  padding: 8px;
  background-color: #fafafa;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}


.colblue{
  color: blue !important;
  font-weight: bold !important;
  text-transform: uppercase;
  font-size: 14px;
}





</style>


<style>



.PlateformOS{
 display: block;

height: 40px;

    font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 16px !important;
  padding: 5px !important;

 
}

  .DType{
display: block;

height: 65px;

    font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 16px !important;
  padding: 5px !important;

}
.commswlany{
  display: block;

height: 56px;

    font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 16px !important;
  padding: 5px !important;

}
  .Dsize{
display: block;

height: 56px;

    font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 16px !important;
  padding: 5px !important;

}
.FormChipsethead{
  display: block;

height: 40px;

    font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 16px !important;
  padding: 5px !important;

}

 .Commsblutoth{
display: block;

height: 40px;

    font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
   
  padding: 5px !important;

}
  .cardslotfont{
display: block;

height: 65px;

    font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
  font-size: 11px !important;
  padding: 5px !important;

}
  .Dprotect{
display: block;

height: 102px;

    font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 16px;
  padding: 5px !important;

}
  .Dresolution{
display: block;

height: 56px;

    font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 16px;
  padding: 5px !important;

}


.commsNfC{
  display: block;

height: 40px;

    font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 16px;
  padding: 5px !important;
}
.CommsRadio{
  display: block;

height: 40px;

    font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 16px;
  padding: 5px !important;
}

.commGps{
  display: block;

height: 53px;

    font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 16px;
  padding: 5px !important;

}
.MomoIntrnal{
  display: block;

height: 45px;

    font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 16px;
  padding: 5px !important;
}

  .CameraVedios{
display: block;

height: 75px;

    font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 16px;
  padding: 5px !important;

}

.SelfiCameraVedios{
  display: block;

height: 65px;

    font-weight: 600 !important;
    text-shadow: 0px 0px 0.1px black !important;
    font-size: 16px;
  padding: 5px !important;

}

.plateGpu{
  height: 45px;
}




.FeatureSensor{
  height: 96px;
}


.MiscColor{
  height: 42px !important;
}





</style>
<body>



   <a href="#" id="scroll" style="display: none;"><span></span></a>
   @include('includes.header')

 


    <img src="{{ asset('storage/images/Compare.png') }}" style="width: 100%;" />
  <br/>

<div class="row">
<!-- <div  style="width: 16%; float: left;  background-color: rgb(227, 231, 231); "></div>
 -->




 <div style="width: 19%;  float: left;">

<div class="LeftColheightOnMob" style="height: 476px; background-color: #fafafa"></div>
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

            

                    <table id="customers">
                        <tr>
                            <td class="colblue BodyHeadMob widthOnDesk">Body</td>
                            <td class="DimnOnMobSubhead" style="display: block;font-weight: 600;"> Dimensions</td>
                            <td class="BodySts1" style="display: block;font-weight: 600;"> Weight</td>
                            <td class="BuildSts1" style="display: block;font-weight: 600;"> Build</td>
                            <td class="SIMSts1" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600; height: 85px "> SIM</td>
                        
                        </tr>
                    </table>




                    <table id="customers">
                      <tr>
                        <td class="colblue BodyHeadMob widthOnDesk">Display</td>
                        <td class="DType" style=""> Type</td>
                        <td class="Dsize DsizeMob" style="display: block;font-weight: 600;"> Size</td>
                        <td class="Dresolution DipResoMobi" style="display: block;font-weight: 600;"> Resolution</td>
                        <td class="Dprotect" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600; "> Protection</td>
                    
                      </tr>
                    </table>








<table id="customers">
  <tr>
    <td class="colblue BodyHeadMob widthOnDesk">Plate-<br/>Form</td>
    <td class="PlateformOS PlatFormPhone" style=""> OS</td>
    <td class="FormChipsethead ChipsetOnMob"  style="display: block;font-weight: 600;"> Chipset</td>
    <td class="Dresolution" style="display: block;font-weight: 600;"> CPU</td>
    <td class="plateGpu" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600; "> GPU</td>

  </tr>
</table>



<table id="customers">
  <tr>
    <td class="colblue BodyHeadMob widthOnDesk">Memory</td>

    <td class="cradslotOnMob" style="display: block;font-weight: 600;"> Card slot</td>
    <td class="MomoIntrnal" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600;"> Internal</td>


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
    <td class="SelfiCameraVedios" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600;"> Video</td>


  </tr>
</table>



<table id="customers">
  <tr>
    <td class="colblue BodyHeadMob widthOnDesk">Sound</td>

    <td class="SoundLoudsp" style="display: block;font-weight: 600;"> Loud-<br/>speaker</td>
    <td class="SeliecamFatureMob" style="display: block;font-weight: 600;"> 3.5mm jack</td>
    <td class="CameraVedios" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600;"> Mic</td>


  </tr>
</table>







<table id="customers">
  <tr>
    <td class="colblue BodyHeadMob widthOnDesk">COMMS</td>
    <td class="commswlany" style=""> WLAN</td>
    <td class="Commsblutoth" style="display: block;font-weight: 600;"> Bluetooth</td>
    <td class="commGps" style="display: block;font-weight: 600;"> GPS</td>
        <td class="CommsRadio" style="display: block;font-weight: 600;"> Radio</td>
            <td class="Dresolution commsNfC" style="display: block;font-weight: 600;"> NFC</td>
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
  <td class="BaterryChargMobi" style="display: block;font-weight: 600;"> &nbsp; </td>
    <td class="batteryCarge" style="display: block;font-weight: 600; height: 40px; "> Charging</td>
    <td class="BattTalktimeMobi" style="display: block;font-weight: 600;"> talk Time</td>
    <td class="MusicPlayOnMob" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600;height: 45px;"> Music Play</td>


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

    <td class="pricStorMobi" style="display: block; border-bottom: 5px #eeeeee solid;font-weight: 600; height: 70px; "> Price & Storage</td>

  </tr>
</table>


</div>

</div>


<div id="ColOnMobileFirst" style="width: 27%;  float: left; ">

  <div class="LeftColheightOnMob" style="height: 166px; ">


    <div class="container" style="padding-right: 1px !important;
    padding-left: 0px !important;">
      <div class="row">
        <div class="col-md-12" style="background-color: #f3f3f3; border-right: 6px #fafafa solid;">

          <p style="width: 100%;font-weight: 500;
    font-size: 13px;
    text-align: left;">COMPARE WITH</p>

          <div class="row">

            <div class="col-md-9" style=" ">
              <center> <input type="text" id="myInputone" onkeyup="myFunctionone()" title="Type in a name" />
              </center>

              <ul onblur="hideagainone()" id="myULone" class="myUL"
                style="  background-color: white ;  box-shadow:  0 0 5px #000000;position:absolute  ;width: 127%;  overflow: scroll ; z-index: 20; ;display: none ;  height: 500px;">
              </ul>

            </div>

            <div class="col-md-3 srcgBtnOnMob" style="   background-color: rgb(248 247 247);
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




  </div>


  <div style="height: 1110; width: 100%;" class="hideDivone">

@php $img = 'storage/admin/images/product/thumbnail/215_'.$product->image @endphp

  <div style="height: 310px !important; width: 100%;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <p class="mobTitleOnMob" style="    font-size: 22px;height: 66px;
              color: #4a88c1;
              font-weight: bolder;">{{ ucwords($product->name) }}</p>


                 <center> <img id="imgOneMob" src="{{ asset($img) }}" style="height: 200px;" /></center>


          <p style="background-color: #4a88c1;
              color: white;
              text-align: center;
              width: 100%;
              margin-top: 11px; ">PKR {{ $product->price }}</p>

        </div>
      </div>
    </div>
  </div>



  <div style="height: 800px;" id="TableFonSizeOnDeskTop">
   <div class="TopheightOnMob" style="height: 0px; width: 100%;"></div>
   <div class="Net1OnMob" style="width: 100%; height: 30px;    font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      border-bottom: 4px #eee solid; 
      height: 45px;
      padding-left: 5px;
      padding-top: 8px; ">GSM / HSPA / LTE
   </div>
   <div class="lanchSpcOn" style="height: 0px; width: 100%;"></div>
   <div class="Lannounced" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      border-bottom: 2px #eeeeee solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 38px;
      ">
      {{ date('Y',strtotime($product->launch_announced)) }},
      {{ date('F',strtotime($product->launch_announced)) }} {{ date('d',strtotime($product->launch_announced)) }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 45px;border-bottom: 5px #eeeeee solid;
      " class="StatusOnMob">
      {{ $product->launch_status }}
   </div>
   <div class="topDisplaySpconmob" style="height: 0px; width: 100%;"></div>
   <div class="DimensionsMob" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 43px;border-bottom: 1px #eeeeee solid;
      " class="StatusOnMob">
      {{ $product->body_dimension }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 42px;border-bottom: 1px #eeeeee solid;
      " class="bodyweight2">
      {{ $product->body_weight }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 42px;border-bottom: 1px #eeeeee solid;
      " class="builWeigt2">
      {{ $product->body_build }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 85px;border-bottom: 5px #eeeeee solid;
      " class="simweight2">
      {{ $product->body_sim }}
   </div>
   <div class="topDisplaySpconmob" style="height: 0px; width: 100%;"></div>
   <div class="DimensionsMob" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 65px;border-bottom: 1px #eeeeee solid;
      " class="StatusOnMob">
      {{ $product->display_type }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 57px;border-bottom: 1px #eeeeee solid;
      " class="DisplayType">
      {{ $product->display_size }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 56px;border-bottom: 1px #eeeeee solid;
      " class="DisplayReslution">
      {{ $product->display_resolution }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 102px;border-bottom: 5px #eeeeee solid;
      " class="ProtecOnMoble">
      {{ $product->display_protection }}
   </div>
   <div class="topPlateformSpconmob" style="height: 0px; width: 100%;"></div>
   <div class="DimensionsMob" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      " class="StatusOnMob">
      {{ $product->platform_os }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      " class="platefrmchips">
      {{ $product->platform_chipset }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 57px;border-bottom: 1px #eeeeee solid;
      " class="PlateuCpu">
      {{ $product->platform_cpu }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 45px;border-bottom: 5px #eeeeee solid;
      " class="chipGpuOnMibi">
      {{ $product->platform_gpu }}
   </div>
   <div class="topMemorSpconmob" style="height: 0px; width: 100%;"></div>
   <div class="DimensionsMob" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      " class="StatusOnMob">
      {{ $product->memory_card_slot }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 45px;border-bottom: 1px #eeeeee solid;border-bottom: 5px #eeeeee solid;
      " class="mem0ryInt">
      {{ $product->memory_storage }} {{ $product->memory_ram }} 
   </div>
   <div class="topMainCameraSpconmob" style="height: 0px; width: 100%;"></div>
   <div class="CameraTripple" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 107px;border-bottom: 1px #eeeeee solid;
      " >
      {{ $product->main_type_value }}
   </div>
   <div class="CameraFeature" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 55px;border-bottom: 1px #eeeeee solid;
      " >
      {{ $product->main_feature }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 75px;border-bottom: 1px #eeeeee solid;border-bottom: 5px #eeeeee solid;
      " class="TrpleVed" >
      {{ $product->main_video }}
   </div>
   <div class="topMainCameraSpconmob" style="height: 0px; width: 100%;"></div>
   <div class="CameraSinleNexxt" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      ">
      {{ $product->selfie_type_value }}
   </div>
   <div class="CameraSingleHdr" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      ">
      {{ $product->selfie_feature }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 65px;border-bottom: 1px #eeeeee solid;border-bottom: 5px #eeeeee solid;
      " class="selfivedo">
      {{ $product->selfie_video }}
   </div>
   <div class="AboveSoundbarSpce" style="height: 0px; width: 100%;"></div>
   <div class="SloudSpkrMob" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 60px;border-bottom: 1px #eeeeee solid;
      ">
      {{ $product->sound_loudspeaker }}
   </div>
   <div class="CameraSingleHdr" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      ">
      {{ $product->sound_jack }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 75px;border-bottom: 1px #eeeeee solid;border-bottom: 5px #eeeeee solid;
      " class="TrpleVed">
      {{ $product->sound_mic }}
   </div>
   <div class="topCommsfirstSpconmob" style="height: 0px; width: 100%;"></div>
   <div class="CommsWlanMob" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 57px;border-bottom: 1px #eeeeee solid;
      " class="StatusOnMob">
      {{ $product->comms_wlan }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      " class="DisplayType commsblutoo">
      {{ $product->bluetooth }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 53px;border-bottom: 1px #eeeeee solid;
      " class="DisplayReslution">
      {{ $product->comms_gps }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      " class="commRadio">
      {{ $product->comms_nfc }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      " class="commRadioNext">
      
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 44px;border-bottom: 5px #eeeeee solid;
      " class="commRadioNext">
      {{ $product->comms_usb }}
   </div>
   <div class="topFeaturSensoronmob" style="height: 0px; width: 100%;"></div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 97px;border-bottom: 5px #eeeeee solid;
      " class="featreSenso">
      {{ $product->feature_sensor }}
   </div>
   <div class="topFeaturSensoronmob" style="height: 0px; width: 100%;"></div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 42px;border-bottom: 1px #eeeeee solid;
      " class="batteryTalkTime2">
      {{ $product->battery_status }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      " class="DBatteryChargingOne">
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      " class="batteryTalkTime2">
      {{ $product->battery_talk_time }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 45px;border-bottom: 5px #eeeeee solid;
      " class="batteryMuscMob">
      {{ $product->battery_music }} 
   </div>
   <div class="topFeaturSensoronmob" style="height: 0px; width: 100%;"></div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 41px;border-bottom: 5px #eeeeee solid;
      " class="">
      @if($product->variation_colors->count()>0)
      @php $colorName = ''; $count = $product->variation_colors->count(); $i=1; @endphp
      @foreach($product->variation_colors as $color)
      @php $i++; @endphp
      @if($colorName !=$color->color)
      {{ ucfirst($color->color)}} @if($count>$i) , @endif
      @endif
      @php $colorName = $color->color; @endphp
      @endforeach
      @endif
   </div>
   <div class="topFeaturSensoronmob" style="height: 0px; width: 100%;"></div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 72px;border-bottom: 5px #eeeeee solid;
      " class="pricesotageTextOnMob">
      @if($product->variation_colors->count()>0)
      @php $colorName = ''; $count = $product->variation_colors->count(); $i=1; @endphp
      @foreach($product->variation_colors as $color)
      @php $i++; @endphp
      @if($colorName !=$color->color)
      PKR {{$color->price}} ({{ ucfirst($color->storage)}},{{$product->memory_ram}}) @if($count>$i) , @endif
      @endif
      @php $colorName = $color->color; @endphp
      @endforeach
      @endif
   </div>
</div>
</div>



</div>




<div id="ColOnMobileCenter" style="width: 27%; float: left; ">

  <div class="LeftColheightOnMob" style="height: 166px; ">
  
  
    <div class="container" style="padding-right: 1px !important;
      padding-left: 0px !important;">
      <div class="row">
        <div class="col-md-12" style="background-color: #f3f3f3;border-right: 6px #fafafa solid;">
  
          <p style="width: 100%;font-weight: 500;
      font-size: 13px;
      text-align: left;">COMPARE WITH</p>
  
          <div class="row">
  
            <div class="col-md-9" style=" ">
              <center><input type="text" id="myInputtwo" onkeyup="myFunctiontwo()" title="Type in a name" />

              </center>
  
        <ul onblur="hideagaintwo()" id="myULtwo"
          style="  background-color: white ;  box-shadow:  0 0 5px #000000;position:absolute  ;width: 127%;  overflow: scroll ; z-index: 20; ;display: none ;  height: 500px;">
          
      
        </ul>
  
            </div>
  
            <div class="col-md-3 srcgBtnOnMob" style="   background-color: rgb(248 247 247);
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
  
  
  
  
  </div>
  
  
  <div style="height: 1110; width: 100%;" class="hideDivtwo">
  
  </div>


<!-- <p style="    margin-top: 5px;">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</p> -->


</div>






<div  id="ColOnMobileLast" style="width: 27%; float: left; ">
  <div class="LeftColheightOnMob" style="height: 166px; ">
  
  
    <div class="container" style="padding-right: 1px !important;
      padding-left: 0px !important;">
      <div class="row">
        <div class="col-md-12" style="background-color: #f3f3f3; border-right: 6px #fafafa solid;">
  
          <p style="width: 100%;font-weight: 500;
      font-size: 13px;
      text-align: left;">COMPARE WITH</p>
  
          <div class="row">
  
            <div class="col-md-9" style=" ">
              <center> <input type="text" id="myInputthree" onkeyup="myFunctionthree()" placeholder="" title="Type in a name" />
              </center>
  
            <ul onblur="hideagainthree()" id="myULthree"
              style="  background-color: white ;  box-shadow:  0 0 5px #000000;position:absolute  ;width: 127%;  overflow: scroll ; z-index: 20; ;display: none ;  height: 500px;">
              <!-- <div>
                                    <button id="srchbtnid" onclick="hideagain();" style="margin-left: 350px;background-color: white;color: black;padding: 7px;font-weight: 600;border-style: none;">X</button>
                                  </div> -->
            
            
              <!-- <div class="row" style="padding-right: 167px;"><div class="col-md-12" style="background-color: rgb(30, 219, 46);"><li><a href="#">Agnes</a></li></div></div> -->
            </ul>

  
            </div>
  
            <div class="col-md-3 srcgBtnOnMob" style="   background-color: rgb(248 247 247);
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
  
  
  
  
  </div>
  
  
  <div style="height: 1110; width: 100%;" class="hideDivthree">
  
  </div>

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

      var url = 'SingleCompareProductDetail';
      $.ajax({
        url:"{{ route('SingleCompareProductDetail') }}",
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
      function shoediv(){
         
          document.getElementById('myUL').style.display = 'block';
      }
      
      
      
      function hideagain(){
          document.getElementById('myUL').style.display = 'none';
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