<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
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
    </style>


<style>
  /* /////////////////////////////slick css//////////////////////////////////// */
  .slick-prev:before {
    content: '';
  }

  .slick-next:before {
    content: '';
  }
  .slick-next{ right: 5px; }
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



div[class="autoplayFeatures slick-initialized slick-slider slick-dotted"] > button[class="slick-prev slick-arrow"]{
  background-image: url('{{ asset("storage/images/headerimg/ic_keyboard_arrow_left_black_18dp.png")}}');
  border-radius: 50%;
  height: 38px;
    background-repeat: no-repeat;
    width: 100px;
}
div[class="autoplayFeatures slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]{
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
  .js .toggle-boxqasim .contentqasim {
    display: none;
  }

  .toggle-boxqasim {
    border: 1px solid #999;
    overflow-y: scroll;
  }

  .toggleqasim {
    cursor: pointer;
  }

  .headerqasim {
    margin: 0;
    padding: 10px;
    background: white;
    color: black;
  }

  .contentqasim {
    padding: 5px
  }
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

img[src="{{ asset('storage/images/logo Black-01.jpg') }}"]{
  height: 57px !important;
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

select[id="sell"]:focus {
    outline: none !important;
    border:1px solid red;
   box-shadow: 0 0 10px #f7f7f7;
}
input[id="upperInpt"]:focus{
   outline: none !important;
    border:1px solid red;
   box-shadow: 0 0 10px #f7f7f7 !important;
}
select[id="upperPrice"]:focus{
   outline: none !important;
    border:1px solid red;
   box-shadow: 0 0 10px #f7f7f7 !important;
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


<!-- 
////////////////////////////////////  POPUP MODEL BOX CSS //////////////////////////// -->

<style>

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  z-index: 500;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #004488;
  color: white;
}

.modal-body {padding: 2px 16px;color:black !important;}

.modal-footer {
  padding: 2px 16px;
  background-color: #004488;
  color: white;
}


#upperSearch:hover{
cursor: pointer;
}
</style>








<body>

  <a href="#" id="scroll" style="display: none;"><span></span></a>
  @include('includes.header')


 <div class="row" style="height: 400px;     background-image: linear-gradient(to top , #252525, #233444);">
  <div class="col-md-12">

<p style="text-align: center;    text-align: center;
font-size: 23px;
margin-top: 30px;">Find Used Mobile Phones In Pakistan</p>





<div  style="     width: 100% ;    
width: 100%;
margin-top: 90px;">

  <div  style=" float: left;  height: 100%; width: 10% ;">&nbsp;&nbsp;&nbsp;</div>
  <div  style="   float: left;height: 100%; width: 80% ;background-color: #f7f7f7;">
  
  
  
  <div class="row">
    <!-- <div class="col-md-4" id="finfbymodl" ><p style="width: 100%; color: black;    text-align: center; font-size: 18px;  font-weight: 500;  padding-top: 19px;">Find by make or model</p></div> -->
      <div class="col-md-4" style="text-align: center;">
        <input type="text" name="" id="upperInpt" class="form-control" placeholder="Find By Make or Modal" style="    margin-left: 2%;margin-top: 3%;    background-color: #f7f7f7;
    border-color: transparent;">
        <ul onblur="hideagain()" id="usedSearchList" style="  background-color: white ;  box-shadow:  0 0 5px #000000;position:absolute  ;width: 100%;  overflow: scroll ; z-index: 20; ;display: none ;  height: 500px; margin-left:2%;margin-top: 5px;">
   
            <div>
             <p style="background-color: white;color: black;padding: 7px;font-weight: 600;border-style: none;"><button id="srchbtnid" onclick="usedHideAgain();" style="margin-left: 269px;
              background-color: #f8f7f7;
              color: black;
              font-weight: 600;
              border-style: none; outline: none; cursor: pointer;">X</button></p>
            </div>
        </ul>
     </div>
    <div class="col-md-8" style="padding-right: 0px !important;">
    
    
      <div id="borderatmob"  style=" float: left;  height: 100%; width: 45% ;padding-top: 11px;     border-left: 1px black solid;
      border-right: 1px black solid;">
      
        <div class="form-group">
          <select class="form-control" id="sell" style="font-weight: bold !important;background-color: #f7f7f7;
    border-color: transparent;">  
              <option selected="" disabled="">Select City</option> 
              <option class="option" value="Abbottabad">Abbottabad</option>
              <option class="option" value="Adezai">Adezai</option>
              <option class="option" value="Ali Bandar">Ali Bandar</option>
              <option class="option" value="Amir Chah">Amir Chah</option>
              <option class="option" value="Attock">Attock</option>
              <option class="option" value="Ayubia">Ayubia</option>
              <option class="option" value="Bahawalpur">Bahawalpur</option>
              <option class="option" value="Baden">Baden</option>
              <option class="option" value="Bagh">Bagh</option>
              <option class="option" value="Bahawalnagar">Bahawalnagar</option>
              <option class="option" value="Burewala">Burewala</option>
              <option class="option" value="Banda Daud Shah">Banda Daud Shah</option>
              <option class="option" value="Bannu district|Bannu">Bannu</option>
              <option class="option" value="Batagram">Batagram</option>
              <option class="option" value="Bazdar">Bazdar</option>
              <option class="option" value="Bela">Bela</option>
              <option class="option" value="Bellpat">Bellpat</option>
              <option class="option" value="Bhag">Bhag</option>
              <option class="option" value="Bhakkar">Bhakkar</option>
              <option class="option" value="Bhalwal">Bhalwal</option>
              <option class="option" value="Bhimber">Bhimber</option>
              <option class="option" value="Birote">Birote</option>
              <option class="option" value="Buner">Buner</option>
              <option class="option" value="Burj">Burj</option>
              <option class="option" value="Chiniot">Chiniot</option>
              <option class="option" value="Chachro">Chachro</option>
              <option class="option" value="Chagai">Chagai</option>
              <option class="option" value="Chah Sandan">Chah Sandan</option>
              <option class="option" value="Chailianwala">Chailianwala</option>
              <option class="option" value="Chakdara">Chakdara</option>
              <option class="option" value="Chakku">Chakku</option>
              <option class="option" value="Chakwal">Chakwal</option>
              <option class="option" value="Chaman">Chaman</option>
              <option class="option" value="Charsadda">Charsadda</option>
              <option class="option" value="Chhatr">Chhatr</option>
              <option class="option" value="Chichawatni">Chichawatni</option>
              <option class="option" value="Chitral">Chitral</option>
              <option class="option" value="Dadu">Dadu</option>
              <option class="option" value="Dera Ghazi Khan">Dera Ghazi Khan</option>
              <option class="option" value="Dera Ismail Khan">Dera Ismail Khan</option>
               <option class="option" value="Dalbandin">Dalbandin</option>
              <option class="option" value="Dargai">Dargai</option>
              <option class="option" value="Darya Khan">Darya Khan</option>
              <option class="option" value="Daska">Daska</option>
              <option class="option" value="Dera Bugti">Dera Bugti</option>
              <option class="option" value="Dhana Sar">Dhana Sar</option>
              <option class="option" value="Digri">Digri</option>
              <option class="option" value="Dina City|Dina">Dina</option>
              <option class="option" value="Dinga">Dinga</option>
              <option class="option" value="Diplo, Pakistan|Diplo">Diplo</option>
              <option class="option" value="Diwana">Diwana</option>
              <option class="option" value="Dokri">Dokri</option>
              <option class="option" value="Drosh">Drosh</option>
              <option class="option" value="Duki">Duki</option>
              <option class="option" value="Dushi">Dushi</option>
              <option class="option" value="Duzab">Duzab</option>
              <option class="option" value="Faisalabad">Faisalabad</option>
              <option class="option" value="Fateh Jang">Fateh Jang</option>
              <option class="option" value="Ghotki">Ghotki</option>
              <option class="option" value="Gwadar">Gwadar</option>
              <option class="option" value="Gujranwala">Gujranwala</option>
              <option class="option" value="Gujrat">Gujrat</option>
              <option class="option" value="Gadra">Gadra</option>
              <option class="option" value="Gajar">Gajar</option>
              <option class="option" value="Gandava">Gandava</option>
              <option class="option" value="Garhi Khairo">Garhi Khairo</option>
              <option class="option" value="Garruck">Garruck</option>
              <option class="option" value="Ghakhar Mandi">Ghakhar Mandi</option>
              <option class="option" value="Ghanian">Ghanian</option>
              <option class="option" value="Ghauspur">Ghauspur</option>
              <option class="option" value="Ghazluna">Ghazluna</option>
              <option class="option" value="Girdan">Girdan</option>
              <option class="option" value="Gulistan">Gulistan</option>
              <option class="option" value="Gwash">Gwash</option>
              <option class="option" value="Hyderabad">Hyderabad</option>
              <option class="option" value="Hala">Hala</option>
              <option class="option" value="Haripur">Haripur</option>
              <option class="option" value="Hab Chauki">Hab Chauki</option>
              <option class="option" value="Hafizabad">Hafizabad</option>
              <option class="option" value="Hameedabad">Hameedabad</option>
              <option class="option" value="Hangu">Hangu</option>
              <option class="option" value="Harnai">Harnai</option>
              <option class="option" value="Hasilpur">Hasilpur</option>
              <option class="option" value="Haveli Lakha">Haveli Lakha</option>
              <option class="option" value="Hinglaj">Hinglaj</option>
              <option class="option" value="Hoshab">Hoshab</option>
              <option class="option" value="Islamabad">Islamabad</option>
              <option class="option" value="Islamkot">Islamkot</option>
              <option class="option" value="Ispikan">Ispikan</option>
              <option class="option" value="Jacobabad">Jacobabad</option>
              <option class="option" value="Jamshoro">Jamshoro</option>
              <option class="option" value="Jhang">Jhang</option>
              <option class="option" value="Jhelum">Jhelum</option>
              <option class="option" value="Jamesabad">Jamesabad</option>
              <option class="option" value="Jampur">Jampur</option>
              <option class="option" value="Janghar">Janghar</option>
              <option class="option" value="Jati, Jati(Mughalbhin)">Jati</option>
              <option class="option" value="Jauharabad">Jauharabad</option>
              <option class="option" value="Jhal">Jhal</option>
              <option class="option" value="Jhal Jhao">Jhal Jhao</option>
              <option class="option" value="Jhatpat">Jhatpat</option>
              <option class="option" value="Jhudo">Jhudo</option>
              <option class="option" value="Jiwani">Jiwani</option>
              <option class="option" value="Jungshahi">Jungshahi</option>
              <option class="option" value="Karachi">Karachi</option>
              <option class="option" value="Kotri">Kotri</option>
              <option class="option" value="Kalam">Kalam</option>
              <option class="option" value="Kalandi">Kalandi</option>
              <option class="option" value="Kalat">Kalat</option>
              <option class="option" value="Kamalia">Kamalia</option>
              <option class="option" value="Kamararod">Kamararod</option>
              <option class="option" value="Kamber">Kamber</option>
              <option class="option" value="Kamokey">Kamokey</option>
              <option class="option" value="Kanak">Kanak</option>
              <option class="option" value="Kandi">Kandi</option>
              <option class="option" value="Kandiaro">Kandiaro</option>
              <option class="option" value="Kanpur">Kanpur</option>
              <option class="option" value="Kapip">Kapip</option>
              <option class="option" value="Kappar">Kappar</option>
              <option class="option" value="Karak City">Karak City</option>
              <option class="option" value="Karodi">Karodi</option>
              <option class="option" value="Kashmor">Kashmor</option>
              <option class="option" value="Kasur">Kasur</option>
              <option class="option" value="Katuri">Katuri</option>
              <option class="option" value="Keti Bandar">Keti Bandar</option>
              <option class="option" value="Khairpur">Khairpur</option>
              <option class="option" value="Khanaspur">Khanaspur</option>
              <option class="option" value="Khanewal">Khanewal</option>
              <option class="option" value="Kharan">Kharan</option>
              <option class="option" value="kharian">kharian</option>
              <option class="option" value="Khokhropur">Khokhropur</option>
              <option class="option" value="Khora">Khora</option>
              <option class="option" value="Khushab">Khushab</option>
              <option class="option" value="Khuzdar">Khuzdar</option>
              <option class="option" value="Kikki">Kikki</option>
              <option class="option" value="Klupro">Klupro</option>
              <option class="option" value="Kohan">Kohan</option>
              <option class="option" value="Kohat">Kohat</option>
              <option class="option" value="Kohistan">Kohistan</option>
              <option class="option" value="Kohlu">Kohlu</option>
              <option class="option" value="Korak">Korak</option>
              <option class="option" value="Korangi">Korangi</option>
              <option class="option" value="Kot Sarae">Kot Sarae</option>
              <option class="option" value="Kotli">Kotli</option>
              <option class="option" value="Lahore">Lahore</option>
              <option class="option" value="Larkana">Larkana</option>
              <option class="option" value="Lahri">Lahri</option>
              <option class="option" value="Lakki Marwat">Lakki Marwat</option>
              <option class="option" value="Lasbela">Lasbela</option>
              <option class="option" value="Latamber">Latamber</option>
              <option class="option" value="Layyah">Layyah</option>
              <option class="option" value="Leiah">Leiah</option>
              <option class="option" value="Liari">Liari</option>
              <option class="option" value="Lodhran">Lodhran</option>
              <option class="option" value="Loralai">Loralai</option>
              <option class="option" value="Lower Dir">Lower Dir</option>
              <option class="option" value="Shadan Lund">Shadan Lund</option>
              <option class="option" value="Multan">Multan</option>
              <option class="option" value="Mandi Bahauddin">Mandi Bahauddin</option>
              <option class="option" value="Mansehra">Mansehra</option>
              <option class="option" value="Mian Chanu">Mian Chanu</option>
              <option class="option" value="Mirpur">Mirpur</option>
              <option class="option" value="Moro, Pakistan|Moro">Moro</option>
              <option class="option" value="Mardan">Mardan</option>
              <option class="option" value="Mach">Mach</option>
              <option class="option" value="Madyan">Madyan</option>
              <option class="option" value="Malakand">Malakand</option>
              <option class="option" value="Mand">Mand</option>
              <option class="option" value="Manguchar">Manguchar</option>
              <option class="option" value="Mashki Chah">Mashki Chah</option>
              <option class="option" value="Maslti">Maslti</option>
              <option class="option" value="Mastuj">Mastuj</option>
              <option class="option" value="Mastung">Mastung</option>
              <option class="option" value="Mathi">Mathi</option>
              <option class="option" value="Matiari">Matiari</option>
              <option class="option" value="Mehar">Mehar</option>
              <option class="option" value="Mekhtar">Mekhtar</option>
              <option class="option" value="Merui">Merui</option>
              <option class="option" value="Mianwali">Mianwali</option>
              <option class="option" value="Mianez">Mianez</option>
              <option class="option" value="Mirpur Batoro">Mirpur Batoro</option>
              <option class="option" value="Mirpur Khas">Mirpur Khas</option>
              <option class="option" value="Mirpur Sakro">Mirpur Sakro</option>
              <option class="option" value="Mithi">Mithi</option>
              <option class="option" value="Mongora">Mongora</option>
              <option class="option" value="Murgha Kibzai">Murgha Kibzai</option>
              <option class="option" value="Muridke">Muridke</option>
              <option class="option" value="Musa Khel Bazar">Musa Khel Bazar</option>
              <option class="option" value="Muzaffar Garh">Muzaffar Garh</option>
              <option class="option" value="Muzaffarabad">Muzaffarabad</option>
              <option class="option" value="Nawabshah">Nawabshah</option>
              <option class="option" value="Nazimabad">Nazimabad</option>
              <option class="option" value="Nowshera">Nowshera</option>
              <option class="option" value="Nagar Parkar">Nagar Parkar</option>
              <option class="option" value="Nagha Kalat">Nagha Kalat</option>
              <option class="option" value="Nal">Nal</option>
              <option class="option" value="Naokot">Naokot</option>
              <option class="option" value="Nasirabad">Nasirabad</option>
              <option class="option" value="Nauroz Kalat">Nauroz Kalat</option>
              <option class="option" value="Naushara">Naushara</option>
              <option class="option" value="Nur Gamma">Nur Gamma</option>
              <option class="option" value="Nushki">Nushki</option>
              <option class="option" value="Nuttal">Nuttal</option>
              <option class="option" value="Okara">Okara</option>
              <option class="option" value="Ormara">Ormara</option>
              <option class="option" value="Peshawar">Peshawar</option>
              <option class="option" value="Panjgur">Panjgur</option>
              <option class="option" value="Pasni City">Pasni City</option>
              <option class="option" value="Paharpur">Paharpur</option>
              <option class="option" value="Palantuk">Palantuk</option>
              <option class="option" value="Pendoo">Pendoo</option>
              <option class="option" value="Piharak">Piharak</option>
              <option class="option" value="Pirmahal">Pirmahal</option>
              <option class="option" value="Pishin">Pishin</option>
              <option class="option" value="Plandri">Plandri</option>
              <option class="option" value="Pokran">Pokran</option>
              <option class="option" value="Pounch">Pounch</option>
              <option class="option" value="Quetta">Quetta</option>
              <option class="option" value="Qambar">Qambar</option>
              <option class="option" value="Qamruddin Karez">Qamruddin Karez</option>
              <option class="option" value="Qazi Ahmad">Qazi Ahmad</option>
              <option class="option" value="Qila Abdullah">Qila Abdullah</option>
              <option class="option" value="Qila Ladgasht">Qila Ladgasht</option>
              <option class="option" value="Qila Safed">Qila Safed</option>
              <option class="option" value="Qila Saifullah">Qila Saifullah</option>
              <option class="option" value="Rawalpindi">Rawalpindi</option>
              <option class="option" value="Rabwah">Rabwah</option>
              <option class="option" value="Rahim Yar Khan">Rahim Yar Khan</option>
              <option class="option" value="Rajan Pur">Rajan Pur</option>
              <option class="option" value="Rakhni">Rakhni</option>
              <option class="option" value="Ranipur">Ranipur</option>
              <option class="option" value="Ratodero">Ratodero</option>
              <option class="option" value="Rawalakot">Rawalakot</option>
              <option class="option" value="Renala Khurd">Renala Khurd</option>
              <option class="option" value="Robat Thana">Robat Thana</option>
              <option class="option" value="Rodkhan">Rodkhan</option>
              <option class="option" value="Rohri">Rohri</option>
              <option class="option" value="Sialkot">Sialkot</option>
              <option class="option" value="Sadiqabad">Sadiqabad</option>
              <option class="option" value="Safdar Abad- (Dhaban Singh)">Safdar Abad</option>
              <option class="option" value="Sahiwal">Sahiwal</option>
              <option class="option" value="Saidu Sharif">Saidu Sharif</option>
              <option class="option" value="Saindak">Saindak</option>
              <option class="option" value="Sakrand">Sakrand</option>
              <option class="option" value="Sanjawi">Sanjawi</option>
              <option class="option" value="Sargodha">Sargodha</option>
              <option class="option" value="Saruna">Saruna</option>
              <option class="option" value="Shabaz Kalat">Shabaz Kalat</option>
              <option class="option" value="Shadadkhot">Shadadkhot</option>
              <option class="option" value="Shahbandar">Shahbandar</option>
              <option class="option" value="Shahpur">Shahpur</option>
              <option class="option" value="Shahpur Chakar">Shahpur Chakar</option>
              <option class="option" value="Shakargarh">Shakargarh</option>
              <option class="option" value="Shangla">Shangla</option>
              <option class="option" value="Sharam Jogizai">Sharam Jogizai</option>
              <option class="option" value="Sheikhupura">Sheikhupura</option>
              <option class="option" value="Shikarpur">Shikarpur</option>
              <option class="option" value="Shingar">Shingar</option>
              <option class="option" value="Shorap">Shorap</option>
              <option class="option" value="Sibi">Sibi</option>
              <option class="option" value="Sohawa">Sohawa</option>
              <option class="option" value="Sonmiani">Sonmiani</option>
              <option class="option" value="Sooianwala">Sooianwala</option>
              <option class="option" value="Spezand">Spezand</option>
              <option class="option" value="Spintangi">Spintangi</option>
              <option class="option" value="Sui">Sui</option>
              <option class="option" value="Sujawal">Sujawal</option>
              <option class="option" value="Sukkur">Sukkur</option>
              <option class="option" value="Suntsar">Suntsar</option>
              <option class="option" value="Surab">Surab</option>
              <option class="option" value="Swabi">Swabi</option>
              <option class="option" value="Swat">Swat</option>
              <option class="option" value="Tando Adam">Tando Adam</option>
              <option class="option" value="Tando Bago">Tando Bago</option>
              <option class="option" value="Tangi">Tangi</option>
              <option class="option" value="Tank City">Tank City</option>
              <option class="option" value="Tar Ahamd Rind">Tar Ahamd Rind</option>
              <option class="option" value="Thalo">Thalo</option>
              <option class="option" value="Thatta">Thatta</option>
              <option class="option" value="Toba Tek Singh">Toba Tek Singh</option>
              <option class="option" value="Tordher">Tordher</option>
              <option class="option" value="Tujal">Tujal</option>
              <option class="option" value="Tump">Tump</option>
              <option class="option" value="Turbat">Turbat</option>
              <option class="option" value="Umarao">Umarao</option>
              <option class="option" value="Umarkot">Umarkot</option>
              <option class="option" value="Upper Dir">Upper Dir</option>
              <option class="option" value="Uthal">Uthal</option>
              <option class="option" value="Vehari">Vehari</option>
              <option class="option" value="Veirwaro">Veirwaro</option>
              <option class="option" value="Vitakri">Vitakri</option>
              <option class="option" value="Wadh">Wadh</option>
              <option class="option" value="Wah Cantt">Wah Cantt</option>
              <option class="option" value="Warah">Warah</option>
              <option class="option" value="Washap">Washap</option>
              <option class="option" value="Wasjuk">Wasjuk</option>
              <option class="option" value="Wazirabad">Wazirabad</option>
              <option class="option" value="Yakmach">Yakmach</option>
              <option class="option" value="Zhob">Zhob</option>
              <option class="option" value="Other">Other</option>                                       
          </select>


        </div>
      
      </div>
      <div  style=" float: left;  height: 100%; width: 45% ;padding-top: 11px;        border-right: 1px black solid;">
      
        <div class="form-group">
       
          <select class="form-control" id="upperPrice" style="font-weight: bold !important;background-color: #f7f7f7;
    border-color: transparent;">
             <option selected=""  disabled="" style="font-weight: bold !important;">Select Price</option>
              <option value="Less than 20,000">Less than 20,000 PKR</option>
              <option value="Between 20,000 and 30,000">Between 20,000 and 30,000 PKR</option>
              <option value="Between 30,000 and 60,000">Between 30,000 and 60,000 PKR</option>
              <option value="Between 60,000 and 1,00000">Between 60,000 and 1,00000 PKR</option>
              <option value="More Than 1,00000">More Than 1,00000 PKR</option>
           
          </select>
        </div>
      
      </div>
      <div id="upperSearch" style=" float: left;  height: 100%; width: 10% ;background-color: #0071e3;    padding: 14px 0px 0px 14px;"><img style="width: 70%; height: auto;cursor: pointer;" src="{{ asset('storage/images/ic_search_white_18dp.png')}}"></div>
    
    
    </div>
  </div>
  
  </div>
  <div  style="   float: left;height: 100%; width: 10% ;"></div>
</div>
  </div>






</div>


 

<br/>

<div class="row" style="    margin-left: 15px;margin-bottom: 15px;">
  <a href="{{ route('BuyUsedAccessories') }}"  style="background-color: #0071e3; color: white;padding: 10px 18px 10px 18px; text-decoration: none;border-radius: 4px; font-weight: bold;">Buy Used Accessories</a>
</div>

<div class="row" style="margin-bottom:30px;">
  <div class="col-md-3" >

<p style="background-color: #0071e3; padding: 10px; margin-bottom: 0px;text-align: center; font-weight: 500;">SHOW RESULTS BY:</p>



  <div class="toggle-boxqasim">
    <h6 style="border-bottom: 1px #efeeee solid; background-image: url({{ asset('storage/images/headerimg/ic_arrow_drop_down_black_18dp.png')}}); background-repeat: no-repeat; background-position: right;     width: 96%;
      margin-left: 6px; " class="toggleqasim headerqasim">Make
    </h6>
  
    <div class="contentqasim">
  
      <ul>

        @if($brands->count()>0)
          @foreach($brands as $brand)
            <div style="width: 87%; height: 30px;  ">
              <div style="width: 80%; float: left;">
      
                <label for="{{ $brand->id }}" style="color: #101115;">{{ ucwords($brand->name) }}</label>
              </div>
              <div style="width: 20%; float: left;">
                <input type="checkbox" id="{{ $brand->id }}" class="brands_check" name="brands[]" value="{{ $brand->id }}">
              </div>
            </div>
          @endforeach

        @endif
  
      </ul>
    </div>
  </div>



  <!-- <div class="toggle-boxqasim">
    <h6 style="border-bottom: 1px #efeeee solid; background-image: url({{ asset('storage/images/headerimg/ic_arrow_drop_down_black_18dp.png')}}); background-repeat: no-repeat; background-position: right;     width: 96%;
        margin-left: 6px; " class="toggleqasim headerqasim">SEARCH FILTERS
    </h6>
    <div class="contentqasim"><strong>Product Features:</strong><br />
      <ul>
        <li style="color: black; display: block;">
        
        
        <input type="search" name="srch" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e.g Samsung in Lahore" style="    background-position: left;
background-image: url('images/ic_search_black_18dp.png'); background-repeat: no-repeat;   width: 90%;
    margin-left: -25px;" /><a  style="background-color: #0071e3; color: white;  padding: 4.8px; text-decoration: none; " href="#">Go</a>
        
        </li>
       
      </ul>
    </div>
  </div> -->








<div class="toggle-boxqasim">
<h6 style="border-bottom: 1px #efeeee solid; background-image: url({{ asset('storage/images/headerimg/ic_arrow_drop_down_black_18dp.png')}}); background-repeat: no-repeat; background-position: right;     width: 96%;
    margin-left: 6px; " class="toggleqasim headerqasim">PRICE RANGE
</h6>

  <div class="contentqasim"><strong>Product Features:</strong><br />
    <ul>
      <li style="color: black;     width: 100%;
    margin-left: -24px;  ">

<div style="width: 100%; ">
<div style="width: 45%; float: left; ">
<input type="number" placeholder="From" id="from_price" />
</div>
<div style="width: 45%; float: left; ">
<input type="number" placeholder="To" id="to_price" style="width: 100%;" /></div>
<div style="width: 10%;float: left;  ">

<button type="button" style="background-color: #0071e3;color: white;padding: 3px 3px 3px 5px;width: 117%;border: none;outline: none;" id="go_price">Go</button>
</div>
</div>

      </li>

    </ul>
  </div>
</div>







<div class="toggle-boxqasim">
<h6 style="border-bottom: 1px #efeeee solid; background-image: url({{ asset('storage/images/headerimg/ic_arrow_drop_down_black_18dp.png')}}); background-repeat: no-repeat; background-position: right;     width: 96%;
    margin-left: 6px; " class="toggleqasim headerqasim">CITY
</h6>

  <div class="contentqasim">
  
<ul>

    @if(count($cities)>0)
      @foreach($cities as $city)
        <div style="width: 87%; height: 30px;  ">
          <div style="width: 80%; float: left;">
          <input type="checkbox" id="{{ $city->city }}" value="{{ $city->city }}" name="cities[]" class="city_check" >
          <label for="{{ $city->city }}"  style="color: #101115;">{{ ucwords($city->city)}}</label>
          </div>
            <div style="width: 20%; float: left;">
            <!-- <p style="    background-color: #fafafa;
        padding: 0px 1px 0px 1px;
        border-radius: 12px;
        text-align: center;
        color: black;
        border: 1px #d9d3d3 solid;">{{$city->total}}</p> -->
            </div>
        </div>
      @endforeach
    @endif

<div id="showmorecity" style="display: none;">


<div  style="width: 87%;height: 30px;  " >
  <div style="width: 80%; float: left;">
    <input type="checkbox" id="Quetta" name="vehicle1" value="Bike">
    <label for="Quetta" style="color: #101115;"> Multan</label>
  </div>
  <div style="width: 20%; float: left;">
    <p style="    background-color: #fafafa;
      padding: 0px 1px 0px 1px;
      border-radius: 12px;
      text-align: center;
      color: black;
      border: 1px #d9d3d3 solid;">1500</p>
  </div>


</div>



<div style="width: 87%;height: 30px; " >
  <div style="width: 80%; float: left;">
    <input type="checkbox" id="Quetta" name="vehicle1" value="Bike">
    <label for="Quetta" style="color: #101115;"> Sahiwal</label>
  </div>
  <div style="width: 20%; float: left;">
    <p style="    background-color: #fafafa;
      padding: 0px 1px 0px 1px;
      border-radius: 12px;
      text-align: center;
      color: black;
      border: 1px #d9d3d3 solid;">1500</p>
  </div>


</div>



<div style="width: 87%;height: 30px; ">
  <div style="width: 80%; float: left;">
    <input type="checkbox" id="Quetta" name="vehicle1" value="Bike">
    <label for="Quetta" style="color: #101115;"> Karachi</label>
  </div>
  <div style="width: 20%; float: left;">
    <p style="    background-color: #fafafa;
      padding: 0px 1px 0px 1px;
      border-radius: 12px;
      text-align: center;
      color: black;
      border: 1px #d9d3d3 solid;">1500</p>
  </div>


</div>




<div style="width: 87%;height: 30px;margin-bottom: 45px;"  >
  <div style="width: 80%; float: left;">
    <input type="checkbox" id="Quetta" name="vehicle1" value="Bike">
    <label for="Quetta" style="color: #101115;"> DG Khan</label>
  </div>
  <div style="width: 20%; float: left;">
    <p style="    background-color: #fafafa;
      padding: 0px 1px 0px 1px;
      border-radius: 12px;
      text-align: center;
      color: black;
      border: 1px #d9d3d3 solid;">1500</p>
  </div>


</div>


</div>
<!-- <a href="javascript:void(0)" style="color: blue;" onclick="document.getElementById('showmorecity').style.display= 'block'">more choices</a> -->
 


</ul>
  </div>
</div>


<div class="toggle-boxqasim">
  <h6 style="border-bottom: 1px #efeeee solid; background-image: url({{ asset('storage/images/headerimg/ic_arrow_drop_down_black_18dp.png')}}); background-repeat: no-repeat; background-position: right;     width: 96%;
    margin-left: 6px; " class="toggleqasim headerqasim">MOBILES CONDITION
  </h6>

  <div class="contentqasim">

    <ul>
      <div style="width: 87%; height: 30px;  ">
        <div style="width: 80%; float: left;">
        
          <label for="Excellent" style="color: #101115;"> Excellent</label>
        </div>
        <div style="width: 20%; float: left;">
        <input type="checkbox" id="Excellent" name="statuses[]" class="device_status_check" value="Excellent">
        </div>
      </div>

    <div style="width: 87%; height: 30px;  ">
      <div style="width: 80%; float: left;">
        <label for="Good1" style="color: #101115;"> Good</label>
      </div>
      <div style="width: 20%; float: left;">
        <input type="checkbox" id="Good1" name="statuses[]" class="device_status_check" value="Good">
      </div>
    </div>

    <div style="width: 87%; height: 30px;  ">
      <div style="width: 80%; float: left;">
    
        <label for="Fairyy" style="color: #101115;"> Fair</label>
      </div>
      <div style="width: 20%; float: left;">
        <input type="checkbox" id="Fairyy" name="statuses[]" class="device_status_check" value="Fair">
      </div>
    
    
    </div>




    </ul>
  </div>
</div>


  </div>
    <div class="col-md-9">
    
    
    
    <div class="row" style="">

      <div class="col-md-8">
        <p style="    color: #a8a1a1;
        
          padding: 12px 0px 0px 12px;">Sort by:</p>
      </div>

      <div class="col-md-2">
        <div class="form-group" style="padding-top: 9px;">
        
          <select class="form-control" id="sort_by_order">
            <option selected="" disabled="">Order</option>
            <option value="desc">Recent First</option>
            <option value="asc">Recent Last</option>
          </select>
        </div>
      </div>
     
      <div class="col-md-2">
        <div class="form-group" style="padding-top: 9px;">
          <select class="form-control" id="sort_by_price">
            <option selected="" disabled="">Price</option>
            <option value="asc">Low to High</option>
            <option value="desc">High to Low</option>
          </select>
        </div>
      </div>

    </div>






<p style="  color: #898889;;"><!-- 1-48 of 126,978 Results --></p>
      <div style="width: 100%;" class="row" id="sellProducts">
         @include('partials.sell_products_list',$products)e
      </div>
    </div>
</div>




@include('includes.footer')


</body>


<!-- 
<script src="js/jquery-slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script> -->


<script>

  var options = {
            slidesToShow: 1,
           slidesToScroll: 1,
            autoplay: true,
           autoplaySpeed: 3000,


           dots: true,
           responsive: [
               {
                 breakpoint: 500,
                 settings: {
                 slidesToShow: 1,
                 slidesToScroll: 1,
                 }
               }
             ]
        };
  
  

  function FetchBrandProducts(page,brands,options)
  {
    $.ajax({
        url:"BrandsSellProducts?page="+page,
        type:"get",
        data:{brands:brands},
        success:function(data){
          setTimeout(function () {
            $(".autoplayFeatures").not('.slick-initialized').slick(options)
        },0);
          $('#sellProducts').html(data);
          
        }
    });
  }

  function FetchPriceProducts(page,from,to,options)
  {
    $.ajax({
        url:"PriceSellProducts?page="+page,
        type:"get",
        data:{from:from,to:to},
        success:function(data){
          setTimeout(function () {
            $(".autoplayFeatures").not('.slick-initialized').slick(options)
        },0);
          $('#sellProducts').html(data);
          
        }
    });
  }

  function FetchCityProducts(page,cities,options)
  {
    $.ajax({
        url:"CitySellProducts?page="+page,
        type:"get",
        data:{cities:cities},
        success:function(data){
          setTimeout(function () {
            $(".autoplayFeatures").not('.slick-initialized').slick(options)
        },0);
          $('#sellProducts').html(data);
          
        }
    });
  }

  function FetchStatusProducts(page,statuses,options)
  {
    $.ajax({
        url:"StatusSellProducts?page="+page,
        type:"get",
        data:{statuses:statuses},
        success:function(data){
          setTimeout(function () {
            $(".autoplayFeatures").not('.slick-initialized').slick(options)
        },0);
          $('#sellProducts').html(data);
          
        }
    });
  }

  function FetchBrandsPriceCityStatusProducts(page,brands,from,to,cities,statuses,options)
  {
    $.ajax({
        url:"BrandsPriceCityStatusSellProducts?page="+page,
        type:"get",
        data:{brands:brands,from:from,to:to,cities:cities,statuses:statuses},
        success:function(data){
          setTimeout(function () {
            $(".autoplayFeatures").not('.slick-initialized').slick(options)
        },0);
          $('#sellProducts').html(data);
          
        }
    });
  }

  function FetchBrandsPriceStatusProducts(page,brands,from,to,statuses,options)
  {
    $.ajax({
        url:"BrandsPriceStatusSellProducts?page="+page,
        type:"get",
        data:{brands:brands,from:from,to:to,statuses:statuses},
        success:function(data){
          setTimeout(function () {
            $(".autoplayFeatures").not('.slick-initialized').slick(options)
        },0);
          $('#sellProducts').html(data);
          
        }
    });
  }

  function FetchBrandsCityStatusProducts(page,brands,cities,statuses,options)
  {
    $.ajax({
        url:"BrandsCityStatusSellProducts?page="+page,
        type:"get",
        data:{brands:brands,from:from,to:to,cities:cities,statuses:statuses},
        success:function(data){
          setTimeout(function () {
            $(".autoplayFeatures").not('.slick-initialized').slick(options)
        },0);
          $('#sellProducts').html(data);
          
        }
    });
  }

  function FetchBrandsPriceCityProducts(page,brands,from,to,cities,options)
  {
    $.ajax({
        url:"BrandsPriceCitySellProducts?page="+page,
        type:"get",
        data:{brands:brands,from:from,to:to,cities:cities},
        success:function(data){
          setTimeout(function () {
            $(".autoplayFeatures").not('.slick-initialized').slick(options)
        },0);
          $('#sellProducts').html(data);
          
        }
    });
  }

  function FetchCityStatusProducts(page,cities,statuses,options)
  {
    $.ajax({
        url:"CityStatusSellProducts?page="+page,
        type:"get",
        data:{cities:cities,statuses:statuses},
        success:function(data){
          setTimeout(function () {
            $(".autoplayFeatures").not('.slick-initialized').slick(options)
        },0);
          $('#sellProducts').html(data);
          
        }
    });
  }

  function FetchPriceCityProducts(page,from,to,cities,options)
  {
    $.ajax({
        url:"PriceCitySellProducts?page="+page,
        type:"get",
        data:{from:from,to:to,cities:cities},
        success:function(data){
          setTimeout(function () {
            $(".autoplayFeatures").not('.slick-initialized').slick(options)
        },0);
          $('#sellProducts').html(data);
          
        }
    });
  }

  function FetchBrandsCityProducts(page,brands,cities,options)
  {
    $.ajax({
        url:"BrandsCitySellProducts?page="+page,
        type:"get",
        data:{brands:brands,cities:cities},
        success:function(data){
          setTimeout(function () {
            $(".autoplayFeatures").not('.slick-initialized').slick(options)
        },0);
          $('#sellProducts').html(data);
          
        }
    });
  }

  function FetchBrandsStatusProducts(page,brands,statuses,options)
  {
    $.ajax({
        url:"BrandsStatusSellProducts?page="+page,
        type:"get",
        data:{brands:brands,statuses:statuses},
        success:function(data){
          setTimeout(function () {
            $(".autoplayFeatures").not('.slick-initialized').slick(options)
        },0);
          $('#sellProducts').html(data);
          
        }
    });
  }

  function FetchBrandsCityStatusProducts(page,brands,cities,statuses,options)
  {
    $.ajax({
        url:"BrandsCityStatusSellProducts?page="+page,
        type:"get",
        data:{brands:brands,cities:cities,statuses:statuses},
        success:function(data){
          setTimeout(function () {
            $(".autoplayFeatures").not('.slick-initialized').slick(options)
        },0);
          $('#sellProducts').html(data);
          
        }
    });
  }



  function FetchPriceCityStatusProducts(page,from,to,cities,statuses,options)
  {
    $.ajax({
        url:"PriceCityStatusSellProducts?page="+page,
        type:"get",
        data:{from:from,to:to,cities:cities,statuses:statuses},
        success:function(data){
          setTimeout(function () {
            $(".autoplayFeatures").not('.slick-initialized').slick(options)
        },0);
          $('#sellProducts').html(data);
          
        }
    });
  }

  function FetchPriceStatusProducts(page,from,to,statuses,options)
  {
    $.ajax({
        url:"PriceStatusSellProducts?page="+page,
        type:"get",
        data:{from:from,to:to,statuses:statuses},
        success:function(data){
          setTimeout(function () {
            $(".autoplayFeatures").not('.slick-initialized').slick(options)
        },0);
          $('#sellProducts').html(data);
          
        }
    });
  }

  function FetchData(page,options)
  {
    $.ajax({
     url:"BuyUsedMobilePhonesData?page="+page,
     type:"get",
     success:function(data)
     {
        setTimeout(function () {
            $(".autoplayFeatures").not('.slick-initialized').slick(options)
        },0);
        $('#sellProducts').html(data);
     }
    });
  }

  function FetchBrandsPriceProducts(page,brands,from,to,options)
  {

    $.ajax({
      url:"BrandsPriceSellProducts?page="+page,
      type:"get",
      data:{brands:brands,from:from,to:to},
      success:function(data){
        setTimeout(function () {
          $(".autoplayFeatures").not('.slick-initialized').slick(options)
      },0);
        $('#sellProducts').html(data);
        
      }
    });

  }

  function FetchUpperSearchSellProducts(page,val,options)
  {

    $.ajax({
      url:"UpperSearchSellProducts?page="+page,
      type:"get",
      data:{query:val},
      success:function(data){
        setTimeout(function () {
          $(".autoplayFeatures").not('.slick-initialized').slick(options)
      },0);
        $('#sellProducts').html(data);
        
      }
    });

  }

  function FetchUpperCitySellProducts(page,city,options)
  {

    $.ajax({
      url:"UpperCitySellProducts?page="+page,
      type:"get",
      data:{city:city},
      success:function(data){
        setTimeout(function () {
          $(".autoplayFeatures").not('.slick-initialized').slick(options)
      },0);
        $('#sellProducts').html(data);
        
      }
    });

  }

  function FetchUpperPriceSellProducts(page,price,options)
  {

    $.ajax({
      url:"UpperPriceSellProducts?page="+page,
      type:"get",
      data:{price:price},
      success:function(data){
        setTimeout(function () {
          $(".autoplayFeatures").not('.slick-initialized').slick(options)
      },0);
        $('#sellProducts').html(data);
        
      }
    });

  }

  function FetchUpperCityPriceSellProducts(page,city,price,options)
  {

    $.ajax({
      url:"UpperCityPriceSellProducts?page="+page,
      type:"get",
      data:{city:city,price:price},
      success:function(data){
        setTimeout(function () {
          $(".autoplayFeatures").not('.slick-initialized').slick(options)
      },0);
        $('#sellProducts').html(data);
        
      }
    });

  }

  function FetchUpperSearchCityPriceSellProducts(page,query,city,price,options)
  {

    $.ajax({
      url:"UpperSearchCityPriceSellProducts?page="+page,
      type:"get",
      data:{query:query,city:city,price:price},
      success:function(data){
        setTimeout(function () {
          $(".autoplayFeatures").not('.slick-initialized').slick(options)
      },0);
        $('#sellProducts').html(data);
        
      }
    });

  }

  function FetchUpperSearchCitySellProducts(page,query,city,options)
  {
    $.ajax({
      url:"UpperSearchCitySellProducts?page="+page,
      type:"get",
      data:{query:query,city:city},
      success:function(data){
        setTimeout(function () {
          $(".autoplayFeatures").not('.slick-initialized').slick(options)
      },0);
        $('#sellProducts').html(data);
        
      }
    });

  }

  function FetchUpperSearchPriceSellProducts(page,query,price,options)
  {

    $.ajax({
      url:"UpperSearchPriceSellProducts?page="+page,
      type:"get",
      data:{query:query,price:price},
      success:function(data){
        setTimeout(function () {
          $(".autoplayFeatures").not('.slick-initialized').slick(options)
      },0);
        $('#sellProducts').html(data);
        
      }
    });

  }

  function FetchSortByOrderSellProducts(page,val,options)
  {
    $.ajax({
      url:"SortByOrderSellProducts?page="+page,
      type:"get",
      data:{val:val},
      success:function(data){
        setTimeout(function () {
          $(".autoplayFeatures").not('.slick-initialized').slick(options)
      },0);
        $('#sellProducts').html(data);
        
      }
    });
  }

  function FetchSortByPriceSellProducts(page,val,options)
  {
    $.ajax({
      url:"SortByPriceSellProducts?page="+page,
      type:"get",
      data:{val:val},
      success:function(data){
        setTimeout(function () {
          $(".autoplayFeatures").not('.slick-initialized').slick(options)
      },0);
        $('#sellProducts').html(data);
        
      }
    });
  }

  function FetchSortByOrderPriceSellProducts(page,val,price,options)
  {
    $.ajax({
      url:"SortByOrderPriceSellProducts?page="+page,
      type:"get",
      data:{val:val,price:price},
      success:function(data){
        setTimeout(function () {
          $(".autoplayFeatures").not('.slick-initialized').slick(options)
      },0);
        $('#sellProducts').html(data);
        
      }
    });
  }

  $('#sort_by_order').change(function()
  {
      $(".brands_check"). prop("checked", false);
      $(".device_status_check"). prop("checked", false);
      $(".city_check"). prop("checked", false);
      $(".brands_check"). prop("checked", false);
      $('#from_price').val('');
      $('#to_price').val('');
      $('#sell').val('Select City');
      $('#upperPrice').val('Select Price');
      $('#upperInpt').val(''); 
      var val = $('#sort_by_order option:selected').val();
      var price = $('#sort_by_price option:selected').val();
      if($('#sort_by_order option:selected').val()!="Order" && $('#sort_by_price option:selected').val() =="Price")
      {
         FetchSortByOrderSellProducts(0,val,options);
      }

      else if($('#sort_by_order option:selected').val()!="Order" && $('#sort_by_price option:selected').val() !="Price")
      {
         FetchSortByOrderPriceSellProducts(0,val,price,options);
      }

     
  });

  $('#sort_by_price').change(function(){
      $(".brands_check"). prop("checked", false);
      $(".device_status_check"). prop("checked", false);
      $(".city_check"). prop("checked", false);
      $(".brands_check"). prop("checked", false);
      $('#from_price').val('');
      $('#to_price').val('');
      $('#sell').val('Select City');
      $('#upperPrice').val('Select Price');
      $('#upperInpt').val('');
      var val = $('#sort_by_order option:selected').val();
      var price = $('#sort_by_price option:selected').val();
      if($('#sort_by_order option:selected').val()=="Order" && $('#sort_by_price option:selected').val() !="Price")
      {
         FetchSortByPriceSellProducts(0,price,options);
      }

      else if($('#sort_by_order option:selected').val()!="Order" && $('#sort_by_price option:selected').val() !="Price")
      {
         FetchSortByOrderPriceSellProducts(0,val,price,options);
      }
  });

  $('#upperInpt').keyup(function(){
      $(".brands_check"). prop("checked", false);
      $(".device_status_check"). prop("checked", false);
      $(".city_check"). prop("checked", false);
      $(".brands_check"). prop("checked", false);
      $('#from_price').val('');
      $('#to_price').val('');
      var query = $(this).val();
      $.ajax({
        url:"{{ route('UsedProductsList') }}",
        type:"get",
        data:{query:query},
        success:function(data)
        {
          $('#usedSearchList').css('display','block');
          $('#usedSearchList').html(data);
        }
      });

      
  });

  function ListProducts()
  {
    $(".brands_check"). prop("checked", false);
    $(".device_status_check"). prop("checked", false);
    $(".city_check"). prop("checked", false);
    $(".brands_check"). prop("checked", false);
    $('#from_price').val('');
    $('#to_price').val(''); 
    $('#sort_by_order').val('Order');
    $('#sort_by_price').val('Price');
    FetchUpperSearchSellProducts(0,$('#upperInpt').val(),options); usedHideAgain(); 
  }

  function ContactShow(id){$('#contact'+id).toggle()}

  $('#upperSearch').click(function(){
      $(".brands_check"). prop("checked", false);
      $(".device_status_check"). prop("checked", false);
      $(".city_check"). prop("checked", false);
      $(".brands_check"). prop("checked", false);
      $('#from_price').val('');
      $('#to_price').val('');
      var val = $('#sell').children('option:selected').val();
      var sellPrice = $('#upperPrice').children('option:selected').val();
      var inptVal = $('#upperInpt').val(); 
      
      if(inptVal !='' && sellPrice=='Select Price' && val=='Select City')
      {
        FetchUpperSearchSellProducts(0,inptVal,options);
      } 

      else if(inptVal !='' && sellPrice!='Select Price' && val=='Select City')
      {
        FetchUpperSearchPriceSellProducts(0,inptVal,sellPrice,options);
      } 

      else if(inptVal !='' && sellPrice=='Select Price' && val!='Select City')
      {
        FetchUpperSearchCitySellProducts(0,inptVal,val,options);
      } 

      else if(inptVal !='' && sellPrice!='Select Price' && val!='Select City')
      {
        FetchUpperSearchCityPriceSellProducts(0,inptVal,val,sellPrice,options);
      }

      else if(inptVal =='' && sellPrice=='Select Price' && val!='Select City')
      {
        FetchUpperCitySellProducts(0,val,options);
      }
      else if(inptVal =='' && sellPrice!='Select Price' && val=='Select City')
      {
        FetchUpperPriceSellProducts(0,sellPrice,options);
      }
      else if(inptVal =='' && sellPrice!='Select Price' && val!='Select City')
      {
        FetchUpperCityPriceSellProducts(0,val,sellPrice,options);
      }
  });

  $(document).keypress(function (e){
   var key = e.which;
   if(key == 13){ $('#upperSearch').click(); }
  }); 

  // $('#sell').change(function(){
  //   $(".brands_check"). prop("checked", false);
  //   $(".device_status_check"). prop("checked", false);
  //   $(".city_check"). prop("checked", false);
  //   $(".brands_check"). prop("checked", false);
  //   $('#from_price').val('');
  //   $('#to_price').val('');
  //   var val = $(this).children('option:selected').val();
  //   var sellPrice = $('#upperPrice').children('option:selected').val();
  //   if(sellPrice=='Select Price' && val!='Select City')
  //   {
  //     FetchUpperCitySellProducts(0,val,options);
  //   }
  //   else if(sellPrice!='Select Price' && val!='Select City')
  //   {
  //     FetchUpperCityPriceSellProducts(0,val,sellPrice,options);
  //   }
  // });

  // $('#upperPrice').change(function(){
  //   $(".brands_check").prop("checked", false);
  //   $(".device_status_check"). prop("checked", false);
  //   $(".city_check"). prop("checked", false);
  //   $(".brands_check"). prop("checked", false);
  //   $('#from_price').val('');
  //   $('#to_price').val('');
  //   var sellPrice = $(this).children('option:selected').val();
  //   var val = $('#sell').children('option:selected').val();
  //   if(sellPrice!='Select Price' && val=='Select City')
  //   {
  //     FetchUpperPriceSellProducts(0,sellPrice,options);
  //   }
  //   else if(sellPrice!='Select Price' && val!='Select City')
  //   {
  //     FetchUpperCityPriceSellProducts(0,val,sellPrice,options);
  //   }
  // });

  $('.brands_check').change(function(){
      var brands = $('.brands_check:checked').map(function(){ return $(this).val();}).get();
      var cities = $('.city_check:checked').map(function(){ return $(this).val();}).get();
      var statuses = $('.device_status_check:checked').map(function(){ return $(this).val();}).get();
      var from = $('#from_price').val();
      var to = $('#to_price').val();
      $("#sell").val("Select City");
      $("#upperInpt").val("");
      $("#upperPrice").val("Select Price");
      $("#sort_by_order").val("Order");
      $("#sort_by_price").val("Price");
      $("#upperInpt").val("");
      if($('.brands_check').is(":checked") && !$('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      {
        FetchBrandProducts(0,brands,options);
      }
      else if($('.brands_check').is(":checked") && !$('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      {
        FetchBrandsPriceProducts(0,brands,from,to,options);
      }

      else if($('.brands_check').is(":checked") && $('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      {
        FetchBrandsCityProducts(0,brands,cities,options);
      }

       else if($('.brands_check').is(":checked") && !$('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      {
        FetchBrandsStatusProducts(0,brands,statuses,options);
      }
      else if($('.brands_check').is(":checked") && $('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      {
        FetchBrandsPriceCityProducts(0,brands,from,to,cities,options);
      }

      else if($('.brands_check').is(":checked") && $('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
       {
        FetchBrandsCityStatusProducts(0,brands,cities,statuses,options);
      } 

      else if($('.brands_check').is(":checked") && !$('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
       {
        FetchBrandsPriceStatusProducts(0,brands,from,to,statuses,options);
      }

      else if($('.brands_check').is(":checked") && $('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
       {
        FetchBrandsPriceCityStatusProducts(0,brands,from,to,cities,statuses,options);
      } 

  });

  $('.city_check').change(function(){
      var brands = $('.brands_check:checked').map(function(){ return $(this).val();}).get();
      var cities = $('.city_check:checked').map(function(){ return $(this).val();}).get();
      var statuses = $('.device_status_check:checked').map(function(){ return $(this).val();}).get();
      var from = $('#from_price').val();
      var to = $('#to_price').val();
      $("#sell").val("Select City");
      $("#upperPrice").val("Select Price");
      $("#sort_by_order").val("Order");
      $("#sort_by_price").val("Price");
      $("#upperInpt").val("");
      if(!$('.brands_check').is(":checked") && $('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      {
          var cities = $('.city_check:checked').map(function(){ return $(this).val();}).get();
          FetchCityProducts(0,cities,options);
      }
      else if($('.brands_check').is(":checked") && $('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      {
        FetchBrandsCityProducts(0,brands,cities,options);
      }
      else if($('.brands_check').is(":checked") && $('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      {
        FetchBrandsPriceCityProducts(0,brands,from,to,cities,options);
      }

      else if($('.brands_check').is(":checked") && $('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
       {
        FetchBrandsCityStatusProducts(0,brands,cities,statuses,options);
      } 

      else if($('.brands_check').is(":checked") && $('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
       {
        FetchBrandsPriceCityStatusProducts(0,brands,from,to,cities,statuses,options);
      } 

      else if(!$('.brands_check').is(":checked") && $('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
       {
        FetchCityStatusProducts(0,cities,statuses,options);
      } 

      else if(!$('.brands_check').is(":checked") && $('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
       {
        FetchPriceCityProducts(0,from,to,cities,options);
      } 

      else if(!$('.brands_check').is(":checked") && $('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
       {
        FetchPriceCityStatusProducts(0,from,to,cities,statuses,options);
      } 

  });

   $('.device_status_check').change(function(){
      var brands = $('.brands_check:checked').map(function(){ return $(this).val();}).get();
      var cities = $('.city_check:checked').map(function(){ return $(this).val();}).get();
      var statuses = $('.device_status_check:checked').map(function(){ return $(this).val();}).get();
      var from = $('#from_price').val();
      var to = $('#to_price').val();
      $("#sell").val("Select City");
      $("#upperPrice").val("Select Price");
      $("#sort_by_order").val("Order");
      $("#sort_by_price").val("Price");
      $("#upperInpt").val("");
      if(!$('.brands_check').is(":checked") && !$('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      {
        FetchStatusProducts(0,statuses,options);
      } 

       else if(!$('.brands_check').is(":checked") && $('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
       {
        FetchCityStatusProducts(0,cities,statuses,options);
      } 

      else if($('.brands_check').is(":checked") && !$('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      {
        FetchBrandsStatusProducts(0,brands,statuses,options);
      }

      else if($('.brands_check').is(":checked") && !$('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
       {
        FetchBrandsPriceStatusProducts(0,brands,from,to,statuses,options);
      }

      else if(!$('.brands_check').is(":checked") && !$('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      {
        FetchPriceStatusProducts(0,from,to,statuses,options);
      }

      else if($('.brands_check').is(":checked") && $('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      {
        FetchBrandsCityStatusProducts(0,brands,cities,statuses,options);
      } 

      else if(!$('.brands_check').is(":checked") && $('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
       {
        FetchPriceCityStatusProducts(page,from,to,cities,statuses,options);
      }

      else if($('.brands_check').is(":checked") && $('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      {
        FetchBrandsPriceCityStatusProducts(0,brands,from,to,cities,statuses,options);
      } 

  });

  $('#go_price').click(function(){
      var brands = $('.brands_check:checked').map(function(){ return $(this).val();}).get();
      var cities = $('.city_check:checked').map(function(){ return $(this).val();}).get();
      var statuses = $('.device_status_check:checked').map(function(){ return $(this).val();}).get();
      var from = $('#from_price').val();
      var to = $('#to_price').val();
      $("#sell").val("Select City");
      $("#upperPrice").val("Select Price");
      $("#sort_by_order").val("Order");
      $("#sort_by_price").val("Price");
      $("#upperInpt").val("");

      if(!$('.brands_check').is(":checked") && !$('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      {
        FetchPriceProducts(0,from,to,options);
      } 

      else if($('.brands_check').is(":checked") && $('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      {
        FetchBrandsPriceCityStatusProducts(0,brands,from,to,cities,statuses,options);
      } 

      else if($('.brands_check').is(":checked") && !$('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
       {
        FetchBrandsPriceStatusProducts(0,brands,from,to,statuses,options);
      }

      else if(!$('.brands_check').is(":checked") && !$('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      {
        FetchPriceStatusProducts(0,from,to,statuses,options);
      }

      else if(!$('.brands_check').is(":checked") && $('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      {
        FetchPriceCityProducts(0,from,to,cities,options);
      } 

      else if($('.brands_check').is(":checked") && !$('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      {
        FetchBrandsPriceProducts(0,brands,from,to,options);
      }

      else if(!$('.brands_check').is(":checked") && $('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
       {
        FetchPriceCityStatusProducts(0,from,to,cities,statuses,options);
      }

      else if($('.brands_check').is(":checked") && $('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      {
        FetchBrandsPriceCityProducts(0,brands,from,to,cities,options);
      }

  });

  $(document).on('click', '.pagination a', function(event){
      event.preventDefault();
      var page = $(this).attr('href').split('page=')[1];
      var brands = $('.brands_check:checked').map(function(){ return $(this).val();}).get();
      var cities = $('.city_check:checked').map(function(){ return $(this).val();}).get();
      var statuses = $('.device_status_check:checked').map(function(){ return $(this).val();}).get();
      var city = $('#sell').children('option:selected').val();
      var price = $('#upperPrice').children('option:selected').val()
      var from = $('#from_price').val();
      var to = $('#to_price').val();
      var inptVal = $('#upperInpt').val();
      var val = $('#sort_by_order option:selected').val();
      var Orderprice = $('#sort_by_price option:selected').val();
      if($('.brands_check').is(":checked") && !$('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      {
        FetchBrandProducts(page,brands,options);
      }

      else if(!$('.brands_check').is(":checked") && $('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      {
          var cities = $('.city_check:checked').map(function(){ return $(this).val();}).get();
          FetchCityProducts(page,cities,options);
      }

      else if($('.brands_check').is(":checked") && !$('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      {
        FetchBrandsPriceProducts(page,brands,from,to,options);
      }

      else if($('.brands_check').is(":checked") && $('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      {
        FetchBrandsCityProducts(page,brands,cities,options);
      }

       else if($('.brands_check').is(":checked") && !$('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      {
        FetchBrandsStatusProducts(page,brands,statuses,options);
      }
      else if($('.brands_check').is(":checked") && $('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      {
        FetchBrandsPriceCityProducts(page,brands,from,to,cities,options);
      }

      else if($('.brands_check').is(":checked") && $('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
       {
        FetchBrandsPriceCityStatusProducts(page,brands,from,to,cities,statuses,options);
      } 

      else if(!$('.brands_check').is(":checked") && $('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
       {
        FetchCityStatusProducts(page,cities,statuses,options);
      } 

      else if($('.brands_check').is(":checked") && !$('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
       {
        FetchBrandsPriceStatusProducts(page,brands,from,to,statuses,options);
      }

      else if(!$('.brands_check').is(":checked") && $('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
       {
        FetchPriceCityProducts(page,from,to,cities,options);
      } 

      else if(!$('.brands_check').is(":checked") && !$('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      {
        FetchStatusProducts(page,statuses,options);
      }

      else if(!$('.brands_check').is(":checked") && !$('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      {
        FetchPriceStatusProducts(page,from,to,statuses,options);
      } 

      else if(!$('.brands_check').is(":checked") && !$('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      {
        FetchPriceProducts(page,from,to,options);
      } 

      else if($('.brands_check').is(":checked") && $('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      {
        FetchBrandsCityStatusProducts(page,brands,cities,statuses,options);
      } 

      else if(!$('.brands_check').is(":checked") && !$('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='' && $('#sell').children('option:selected').val()!='Select City' && $('#upperPrice').children('option:selected').val()=='Select Price' && $('#upperInpt').val()=='')
      {
        FetchUpperCitySellProducts(page,city,options);
      } 

      else if(!$('.brands_check').is(":checked") && $('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
       {
        FetchPriceCityStatusProducts(page,from,to,cities,statuses,options);
      }

      else if(!$('.brands_check').is(":checked") && !$('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='' && $('#sell').children('option:selected').val()!='Select City' && $('#upperPrice').children('option:selected').val()!='Select Price' && $('#upperInpt').val()=='')
      {
        FetchUpperCityPriceSellProducts(page,city,price,options);
      } 

      else if(!$('.brands_check').is(":checked") && !$('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='' && $('#sell').children('option:selected').val()=='Select City' && $('#upperPrice').children('option:selected').val()!='Select Price' && $('#upperInpt').val()=='')
      {
        FetchUpperPriceSellProducts(page,price,options);
      } 

      else if($('#upperInpt').val() !='' && $('#upperPrice').children('option:selected').val()=='Select Price' && $('#sell').children('option:selected').val()=='Select City')
      {
        FetchUpperSearchSellProducts(page,inptVal,options);
      } 

      else if($('#upperInpt').val() !='' && $('#upperPrice').children('option:selected').val()!='Select Price' && $('#sell').children('option:selected').val()=='Select City')
      {
        FetchUpperSearchPriceSellProducts(page,inptVal,price,options);
      } 

      else if($('#upperInpt').val() !='' && $('#upperPrice').children('option:selected').val()=='Select Price' && $('#sell').children('option:selected').val()!='Select City')
      {
        FetchUpperSearchCitySellProducts(page,inptVal,city,options);
      } 

      else if($('#upperInpt').val() !='' && $('#upperPrice').children('option:selected').val()!='Select Price' && $('#sell').children('option:selected').val()!='Select City')
      {
        FetchUpperSearchCityPriceSellProducts(page,inptVal,city,price,options);
      }

      else if($('#sort_by_order option:selected').val()!="Order" && $('#sort_by_price option:selected').val() =="Price")
      {
         FetchSortByOrderSellProducts(page,val,options);
      }

      else if($('#sort_by_order option:selected').val()=="Order" && $('#sort_by_price option:selected').val() !="Price")
      {
         FetchSortByPriceSellProducts(page,Orderprice,options);
      }

      else if($('#sort_by_order option:selected').val()!="Order" && $('#sort_by_price option:selected').val() !="Price")
      {
         FetchSortByOrderPriceSellProducts(page,val,Orderprice,options);
      }

      else if(!$('.brands_check').is(":checked") && !$('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='' && $('#sell').children('option:selected').val()=='Select City' && $('#upperPrice').children('option:selected').val()=='Select Price')
      {
        FetchData(page)
      } 
  });

</script>
  

  <script>
  (function ($) {

    $(function () {

      $('html').toggleClass('no-js js');

      $('.toggle-boxqasim .toggleqasim').click(function (e) {
        e.preventDefault();

        $(this).next('.contentqasim').slideToggle();
      });

    });

  })(jQuery);

 
  
</script>


<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
        
<script type="text/javascript" src="{{ asset('slick/jquery3.2.1.js') }}"></script>

<script type="text/javascript" src="{{ asset('slick/slick.js') }}"></script>>
<script  src="{{ asset('js/ScrollJS2/script.js') }}"></script>
<script type="text/javascript">
  
  $(document).ready(function(){
      $('.autoplayFeatures').slick({
           slidesToShow: 1,
           slidesToScroll: 1,
            autoplay: true,
           autoplaySpeed: 3000,


           dots: true,
           responsive: [
               {
                 breakpoint: 500,
                 settings: {
                 slidesToShow: 1,
                 slidesToScroll: 1,
                 }
               }
             ]  
           // variableWidth: true
          });
   });
</script>

 <script>
      function shoediv(){
         
          document.getElementById('myUL').style.display = 'block';
      }
      
      
      
      function hideagain(){
          document.getElementById('myUL').style.display = 'none';
      }
      function usedHideAgain(){
          // $('#upperInpt').val('');
          document.getElementById('usedSearchList').style.display = 'none';
      }
   </script>

</html>