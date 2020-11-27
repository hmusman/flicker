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
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">




<style>

input[type="number"] {
  -webkit-appearance: textfield;
     -moz-appearance: textfield;
          appearance: textfield;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;

  }
.example::-webkit-scrollbar {
  display: none;
}

/* Hide scrollbar 
  for IE and Edge */
.example {
  -ms-overflow-style: none;
} 

#sort_by_price{
   border-right: none;
    border-left: none;
    border-top: none;  border-bottom: none;
   /* background: url(http://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/br_down.png) no-repeat right #fff; */
background-image: url('{{ asset("storage/images/headerimg/image_2020_11_27T06_10_54_587Z.png")}}');
background-position: right;
    background-size: 21px;
    background-position-y: 10px;
}
#sort_by_order{
      border-right: none;
    border-left: none;
    border-top: none;  border-bottom: none;
 background-image: url('{{ asset("storage/images/headerimg/image_2020_11_27T06_10_54_587Z.png")}}');
background-position: right;
    background-size: 21px;
    background-position-y: 10px;
}


.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #80bdff;
    outline: 0;
    box-shadow: none !important;
}

select{
     -webkit-appearance: none;
  -moz-appearance: none;
  background: transparent;
  /* background-image: url("data:image/svg+xml;utf8,<svg fill='black' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>"); */

  background-image: url({{asset('storage/images/headerimg/ero-icon.png')}});
    background-repeat: no-repeat;
    background-position-x: 97%;
    background-position-y: 13px;
    

    margin-right: 2rem;
    padding: 1rem;
    background-size: 14px;

}
@media (min-width: 1400px) and (max-width : 2000px){
#mainright {
    margin-left: 476px !important;
}
#sidenav{
  height: 100% !important;
}
}

/* #sidenav {
   animation: fadeIn ease 1s;
  position: fixed;
  z-index: 1;
  top: 564px;
  left: 10px;
 background: #ffffff;
      height: 572px;
    overflow: scroll;
  padding: 8px 0;
  z-index: 6;
    padding-top: 0px;

    animation: fadeIn ease 2s;
} */



.myMovingClass{
  /* margin-top: 2000px;
   animation: fadeIn ease 2s; */
    /* top: 462px !important; */
}
/* .myMovingClassTwo{
    top: 360px !important;
}

.myMovingClassThree{
    top: 98px !important;
  
}
#mainright {
     margin-left: 338px;
    width: 70% !important;
} */



</style>



<style>




@keyframes fadeIn{
  0% {
    opacity:0;

  }
  100% {
    opacity:1;
  }
}



/* The style below is just for the appearance of the example div */

</style>









  <style>


 /* font:nth-child(1) {
   padding: 7px 20px 7px 20px !important;
}
 font:nth-child(2) {
   padding: 7px 35px 7px 35px !important;
}

 font:nth-child(3) {
   padding: 7px 45px 7px 45px !important;
}
     */













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
      
   
    height: 24px;
    margin-top: 16px;
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

    #prcCal{
      margin-top: 1px !important;
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
    z-index: 8 !important;
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
.page-item.active .page-link {
  
    background-color: #4a88c1 !important;
    border-color: #4a88c1 !important;
}

  @media (max-width: 550px){

.srchiconMob{
  width: 164% !important;
   
    margin-left: -10px !important;
}

select[id="sell"], select[id="upperPrice"] {
  margin-top: -7px !important;
}

    #TopFilterAtMob{
          height: 47px !important;
    border-top: 1px black solid !important;
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
    display: block;
  }

  .toggle-boxqasim {
      border: 1px solid #d5d3cd59;
   
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




ul[class="pagination"] > .page-item{

}
@media (min-width: 992px){
.navbar-expand-lg .navbar-nav .nav-link {
    padding-top: .5rem !important;
   
    padding-bottom: .2rem !important;
}
}
</style>








<body>



<a href="#" id="myDivPaginaton" style="display: none;"><span></span></a>
  <a href="#" id="scroll" style="display: none;"><span></span></a>
  @include('includes.header')

<div class="row" style="height: 400px;     background-image: linear-gradient(to top , #252525, #233444);">
   <div class="col-md-12">
      <p class="fontUbantu" style="text-align: center;    text-align: center;
         font-size: 23px;
         margin-top: 30px;">Find Used Mobile Phones In Pakistan</p>
      <div  style="     width: 100% ;    
         width: 100%;
         margin-top: 110px;">
         <div  style=" float: left;  height: 100%; width: 10% ;">&nbsp;&nbsp;&nbsp;</div>
         <div  style="   float: left;height: 100%; width: 80% ;background-color: #f7f7f7;">
            <div class="row">
               <!-- <div class="col-md-4" id="finfbymodl" ><p style="width: 100%; color: black;    text-align: center; font-size: 18px;  font-weight: 500;  padding-top: 19px;">Find by make or model</p></div> -->
               <div class="col-md-4" style="text-align: center;">
                  <input type="text" name="" id="upperInpt" class="form-control fontUbantu" placeholder="Find By Make or Model" style="    margin-left: 2%;margin-top: 3%;    background-color: #f7f7f7;
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
               <div class="col-md-8" style="padding-right: 0px !important;" id="TopFilterAtMob" >
                  <div id="borderatmob"  style=" float: left;  height: 100%; width: 45% ;padding-top: 11px;     border-left: 1px black solid;
                     border-right: 1px black solid;">
                     <div class="form-group">
                        <select class="form-control fontUbantu" id="sell" style="font-weight: bold !important;background-color: #f7f7f7;
                           border-color: transparent;">
                           <option selected="" disabled="" class="fontUbantu">Select City</option>
                           <option class="option fontUbantu" value="Abbottabad">Abbottabad</option>
                           <option class="option fontUbantu" value="Adezai">Adezai</option>
                           <option class="option fontUbantu" value="Ali Bandar">Ali Bandar</option>
                           <option class="option fontUbantu" value="Amir Chah">Amir Chah</option>
                           <option class="option fontUbantu" value="Attock">Attock</option>
                           <option class="option fontUbantu" value="Ayubia">Ayubia</option>
                           <option class="option fontUbantu" value="Bahawalpur">Bahawalpur</option>
                           <option class="option fontUbantu" value="Baden">Baden</option>
                           <option class="option fontUbantu" value="Bagh">Bagh</option>
                           <option class="option fontUbantu" value="Bahawalnagar">Bahawalnagar</option>
                           <option class="option fontUbantu" value="Burewala">Burewala</option>
                           <option class="option fontUbantu" value="Banda Daud Shah">Banda Daud Shah</option>
                           <option class="option fontUbantu" value="Bannu district|Bannu">Bannu</option>
                           <option class="option fontUbantu" value="Batagram">Batagram</option>
                           <option class="option fontUbantu" value="Bazdar">Bazdar</option>
                           <option class="option fontUbantu" value="Bela">Bela</option>
                           <option class="option fontUbantu" value="Bellpat">Bellpat</option>
                           <option class="option fontUbantu" value="Bhag">Bhag</option>
                           <option class="option fontUbantu" value="Bhakkar">Bhakkar</option>
                           <option class="option fontUbantu" value="Bhalwal">Bhalwal</option>
                           <option class="option fontUbantu" value="Bhimber">Bhimber</option>
                           <option class="option fontUbantu" value="Birote">Birote</option>
                           <option class="option fontUbantu" value="Buner">Buner</option>
                           <option class="option fontUbantu" value="Burj">Burj</option>
                           <option class="option fontUbantu" value="Chiniot">Chiniot</option>
                           <option class="option fontUbantu" value="Chachro">Chachro</option>
                           <option class="option fontUbantu" value="Chagai">Chagai</option>
                           <option class="option fontUbantu" value="Chah Sandan">Chah Sandan</option>
                           <option class="option fontUbantu" value="Chailianwala">Chailianwala</option>
                           <option class="option fontUbantu" value="Chakdara">Chakdara</option>
                           <option class="option fontUbantu" value="Chakku">Chakku</option>
                           <option class="option fontUbantu" value="Chakwal">Chakwal</option>
                           <option class="option fontUbantu" value="Chaman">Chaman</option>
                           <option class="option fontUbantu" value="Charsadda">Charsadda</option>
                           <option class="option fontUbantu" value="Chhatr">Chhatr</option>
                           <option class="option fontUbantu" value="Chichawatni">Chichawatni</option>
                           <option class="option fontUbantu" value="Chitral">Chitral</option>
                           <option class="option fontUbantu" value="Dadu">Dadu</option>
                           <option class="option fontUbantu" value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                           <option class="option fontUbantu" value="Dera Ismail Khan">Dera Ismail Khan</option>
                           <option class="option fontUbantu" value="Dalbandin">Dalbandin</option>
                           <option class="option fontUbantu" value="Dargai">Dargai</option>
                           <option class="option fontUbantu" value="Darya Khan">Darya Khan</option>
                           <option class="option fontUbantu" value="Daska">Daska</option>
                           <option class="option fontUbantu" value="Dera Bugti">Dera Bugti</option>
                           <option class="option fontUbantu" value="Dhana Sar">Dhana Sar</option>
                           <option class="option fontUbantu" value="Digri">Digri</option>
                           <option class="option fontUbantu" value="Dina City|Dina">Dina</option>
                           <option class="option fontUbantu" value="Dinga">Dinga</option>
                           <option class="option fontUbantu" value="Diplo, Pakistan|Diplo">Diplo</option>
                           <option class="option fontUbantu" value="Diwana">Diwana</option>
                           <option class="option fontUbantu" value="Dokri">Dokri</option>
                           <option class="option fontUbantu" value="Drosh">Drosh</option>
                           <option class="option fontUbantu" value="Duki">Duki</option>
                           <option class="option fontUbantu" value="Dushi">Dushi</option>
                           <option class="option fontUbantu" value="Duzab">Duzab</option>
                           <option class="option fontUbantu" value="Faisalabad">Faisalabad</option>
                           <option class="option fontUbantu" value="Fateh Jang">Fateh Jang</option>
                           <option class="option fontUbantu" value="Ghotki">Ghotki</option>
                           <option class="option fontUbantu" value="Gwadar">Gwadar</option>
                           <option class="option fontUbantu" value="Gujranwala">Gujranwala</option>
                           <option class="option fontUbantu" value="Gujrat">Gujrat</option>
                           <option class="option fontUbantu" value="Gadra">Gadra</option>
                           <option class="option fontUbantu" value="Gajar">Gajar</option>
                           <option class="option fontUbantu" value="Gandava">Gandava</option>
                           <option class="option fontUbantu" value="Garhi Khairo">Garhi Khairo</option>
                           <option class="option fontUbantu" value="Garruck">Garruck</option>
                           <option class="option fontUbantu" value="Ghakhar Mandi">Ghakhar Mandi</option>
                           <option class="option fontUbantu" value="Ghanian">Ghanian</option>
                           <option class="option fontUbantu" value="Ghauspur">Ghauspur</option>
                           <option class="option fontUbantu" value="Ghazluna">Ghazluna</option>
                           <option class="option fontUbantu" value="Girdan">Girdan</option>
                           <option class="option fontUbantu" value="Gulistan">Gulistan</option>
                           <option class="option fontUbantu" value="Gwash">Gwash</option>
                           <option class="option fontUbantu" value="Hyderabad">Hyderabad</option>
                           <option class="option fontUbantu" value="Hala">Hala</option>
                           <option class="option fontUbantu" value="Haripur">Haripur</option>
                           <option class="option fontUbantu" value="Hab Chauki">Hab Chauki</option>
                           <option class="option fontUbantu" value="Hafizabad">Hafizabad</option>
                           <option class="option fontUbantu" value="Hameedabad">Hameedabad</option>
                           <option class="option fontUbantu" value="Hangu">Hangu</option>
                           <option class="option fontUbantu" value="Harnai">Harnai</option>
                           <option class="option fontUbantu" value="Hasilpur">Hasilpur</option>
                           <option class="option fontUbantu" value="Haveli Lakha">Haveli Lakha</option>
                           <option class="option fontUbantu" value="Hinglaj">Hinglaj</option>
                           <option class="option fontUbantu" value="Hoshab">Hoshab</option>
                           <option class="option fontUbantu" value="Islamabad">Islamabad</option>
                           <option class="option fontUbantu" value="Islamkot">Islamkot</option>
                           <option class="option fontUbantu" value="Ispikan">Ispikan</option>
                           <option class="option fontUbantu" value="Jacobabad">Jacobabad</option>
                           <option class="option fontUbantu" value="Jamshoro">Jamshoro</option>
                           <option class="option fontUbantu" value="Jhang">Jhang</option>
                           <option class="option fontUbantu" value="Jhelum">Jhelum</option>
                           <option class="option fontUbantu" value="Jamesabad">Jamesabad</option>
                           <option class="option fontUbantu" value="Jampur">Jampur</option>
                           <option class="option fontUbantu" value="Janghar">Janghar</option>
                           <option class="option fontUbantu" value="Jati, Jati(Mughalbhin)">Jati</option>
                           <option class="option fontUbantu" value="Jauharabad">Jauharabad</option>
                           <option class="option fontUbantu" value="Jhal">Jhal</option>
                           <option class="option fontUbantu" value="Jhal Jhao">Jhal Jhao</option>
                           <option class="option fontUbantu" value="Jhatpat">Jhatpat</option>
                           <option class="option fontUbantu" value="Jhudo">Jhudo</option>
                           <option class="option fontUbantu" value="Jiwani">Jiwani</option>
                           <option class="option fontUbantu" value="Jungshahi">Jungshahi</option>
                           <option class="option fontUbantu" value="Karachi">Karachi</option>
                           <option class="option fontUbantu" value="Kotri">Kotri</option>
                           <option class="option fontUbantu" value="Kalam">Kalam</option>
                           <option class="option fontUbantu" value="Kalandi">Kalandi</option>
                           <option class="option fontUbantu" value="Kalat">Kalat</option>
                           <option class="option fontUbantu" value="Kamalia">Kamalia</option>
                           <option class="option fontUbantu" value="Kamararod">Kamararod</option>
                           <option class="option fontUbantu" value="Kamber">Kamber</option>
                           <option class="option fontUbantu" value="Kamokey">Kamokey</option>
                           <option class="option fontUbantu" value="Kanak">Kanak</option>
                           <option class="option fontUbantu" value="Kandi">Kandi</option>
                           <option class="option fontUbantu" value="Kandiaro">Kandiaro</option>
                           <option class="option fontUbantu" value="Kanpur">Kanpur</option>
                           <option class="option fontUbantu" value="Kapip">Kapip</option>
                           <option class="option fontUbantu" value="Kappar">Kappar</option>
                           <option class="option fontUbantu" value="Karak City">Karak City</option>
                           <option class="option fontUbantu" value="Karodi">Karodi</option>
                           <option class="option fontUbantu" value="Kashmor">Kashmor</option>
                           <option class="option fontUbantu" value="Kasur">Kasur</option>
                           <option class="option fontUbantu" value="Katuri">Katuri</option>
                           <option class="option fontUbantu" value="Keti Bandar">Keti Bandar</option>
                           <option class="option fontUbantu" value="Khairpur">Khairpur</option>
                           <option class="option fontUbantu" value="Khanaspur">Khanaspur</option>
                           <option class="option fontUbantu" value="Khanewal">Khanewal</option>
                           <option class="option fontUbantu" value="Kharan">Kharan</option>
                           <option class="option fontUbantu" value="kharian">kharian</option>
                           <option class="option fontUbantu" value="Khokhropur">Khokhropur</option>
                           <option class="option fontUbantu" value="Khora">Khora</option>
                           <option class="option fontUbantu" value="Khushab">Khushab</option>
                           <option class="option fontUbantu" value="Khuzdar">Khuzdar</option>
                           <option class="option fontUbantu" value="Kikki">Kikki</option>
                           <option class="option fontUbantu" value="Klupro">Klupro</option>
                           <option class="option fontUbantu" value="Kohan">Kohan</option>
                           <option class="option fontUbantu" value="Kohat">Kohat</option>
                           <option class="option fontUbantu" value="Kohistan">Kohistan</option>
                           <option class="option fontUbantu" value="Kohlu">Kohlu</option>
                           <option class="option fontUbantu" value="Korak">Korak</option>
                           <option class="option fontUbantu" value="Korangi">Korangi</option>
                           <option class="option fontUbantu" value="Kot Sarae">Kot Sarae</option>
                           <option class="option fontUbantu" value="Kotli">Kotli</option>
                           <option class="option fontUbantu" value="Lahore">Lahore</option>
                           <option class="option fontUbantu" value="Larkana">Larkana</option>
                           <option class="option fontUbantu" value="Lahri">Lahri</option>
                           <option class="option fontUbantu" value="Lakki Marwat">Lakki Marwat</option>
                           <option class="option fontUbantu" value="Lasbela">Lasbela</option>
                           <option class="option fontUbantu" value="Latamber">Latamber</option>
                           <option class="option fontUbantu" value="Layyah">Layyah</option>
                           <option class="option fontUbantu" value="Leiah">Leiah</option>
                           <option class="option fontUbantu" value="Liari">Liari</option>
                           <option class="option fontUbantu" value="Lodhran">Lodhran</option>
                           <option class="option fontUbantu" value="Loralai">Loralai</option>
                           <option class="option fontUbantu" value="Lower Dir">Lower Dir</option>
                           <option class="option fontUbantu" value="Shadan Lund">Shadan Lund</option>
                           <option class="option fontUbantu" value="Multan">Multan</option>
                           <option class="option fontUbantu" value="Mandi Bahauddin">Mandi Bahauddin</option>
                           <option class="option fontUbantu" value="Mansehra">Mansehra</option>
                           <option class="option fontUbantu" value="Mian Chanu">Mian Chanu</option>
                           <option class="option fontUbantu" value="Mirpur">Mirpur</option>
                           <option class="option fontUbantu" value="Moro, Pakistan|Moro">Moro</option>
                           <option class="option fontUbantu" value="Mardan">Mardan</option>
                           <option class="option fontUbantu" value="Mach">Mach</option>
                           <option class="option fontUbantu" value="Madyan">Madyan</option>
                           <option class="option fontUbantu" value="Malakand">Malakand</option>
                           <option class="option fontUbantu" value="Mand">Mand</option>
                           <option class="option fontUbantu" value="Manguchar">Manguchar</option>
                           <option class="option fontUbantu" value="Mashki Chah">Mashki Chah</option>
                           <option class="option fontUbantu" value="Maslti">Maslti</option>
                           <option class="option fontUbantu" value="Mastuj">Mastuj</option>
                           <option class="option fontUbantu" value="Mastung">Mastung</option>
                           <option class="option fontUbantu" value="Mathi">Mathi</option>
                           <option class="option fontUbantu" value="Matiari">Matiari</option>
                           <option class="option fontUbantu" value="Mehar">Mehar</option>
                           <option class="option fontUbantu" value="Mekhtar">Mekhtar</option>
                           <option class="option fontUbantu" value="Merui">Merui</option>
                           <option class="option fontUbantu" value="Mianwali">Mianwali</option>
                           <option class="option fontUbantu" value="Mianez">Mianez</option>
                           <option class="option fontUbantu" value="Mirpur Batoro">Mirpur Batoro</option>
                           <option class="option fontUbantu" value="Mirpur Khas">Mirpur Khas</option>
                           <option class="option fontUbantu" value="Mirpur Sakro">Mirpur Sakro</option>
                           <option class="option fontUbantu" value="Mithi">Mithi</option>
                           <option class="option fontUbantu" value="Mongora">Mongora</option>
                           <option class="option fontUbantu" value="Murgha Kibzai">Murgha Kibzai</option>
                           <option class="option fontUbantu" value="Muridke">Muridke</option>
                           <option class="option fontUbantu" value="Musa Khel Bazar">Musa Khel Bazar</option>
                           <option class="option fontUbantu" value="Muzaffar Garh">Muzaffar Garh</option>
                           <option class="option fontUbantu" value="Muzaffarabad">Muzaffarabad</option>
                           <option class="option fontUbantu" value="Nawabshah">Nawabshah</option>
                           <option class="option fontUbantu" value="Nazimabad">Nazimabad</option>
                           <option class="option fontUbantu" value="Nowshera">Nowshera</option>
                           <option class="option fontUbantu" value="Nagar Parkar">Nagar Parkar</option>
                           <option class="option fontUbantu" value="Nagha Kalat">Nagha Kalat</option>
                           <option class="option fontUbantu" value="Nal">Nal</option>
                           <option class="option fontUbantu" value="Naokot">Naokot</option>
                           <option class="option fontUbantu" value="Nasirabad">Nasirabad</option>
                           <option class="option fontUbantu" value="Nauroz Kalat">Nauroz Kalat</option>
                           <option class="option fontUbantu" value="Naushara">Naushara</option>
                           <option class="option fontUbantu" value="Nur Gamma">Nur Gamma</option>
                           <option class="option fontUbantu" value="Nushki">Nushki</option>
                           <option class="option fontUbantu" value="Nuttal">Nuttal</option>
                           <option class="option fontUbantu" value="Okara">Okara</option>
                           <option class="option fontUbantu" value="Ormara">Ormara</option>
                           <option class="option fontUbantu" value="Peshawar">Peshawar</option>
                           <option class="option fontUbantu" value="Panjgur">Panjgur</option>
                           <option class="option fontUbantu" value="Pasni City">Pasni City</option>
                           <option class="option fontUbantu" value="Paharpur">Paharpur</option>
                           <option class="option fontUbantu" value="Palantuk">Palantuk</option>
                           <option class="option fontUbantu" value="Pendoo">Pendoo</option>
                           <option class="option fontUbantu" value="Piharak">Piharak</option>
                           <option class="option fontUbantu" value="Pirmahal">Pirmahal</option>
                           <option class="option fontUbantu" value="Pishin">Pishin</option>
                           <option class="option fontUbantu" value="Plandri">Plandri</option>
                           <option class="option fontUbantu" value="Pokran">Pokran</option>
                           <option class="option fontUbantu" value="Pounch">Pounch</option>
                           <option class="option fontUbantu" value="Quetta">Quetta</option>
                           <option class="option fontUbantu" value="Qambar">Qambar</option>
                           <option class="option fontUbantu" value="Qamruddin Karez">Qamruddin Karez</option>
                           <option class="option fontUbantu" value="Qazi Ahmad">Qazi Ahmad</option>
                           <option class="option fontUbantu" value="Qila Abdullah">Qila Abdullah</option>
                           <option class="option fontUbantu" value="Qila Ladgasht">Qila Ladgasht</option>
                           <option class="option fontUbantu" value="Qila Safed">Qila Safed</option>
                           <option class="option fontUbantu" value="Qila Saifullah">Qila Saifullah</option>
                           <option class="option fontUbantu" value="Rawalpindi">Rawalpindi</option>
                           <option class="option fontUbantu" value="Rabwah">Rabwah</option>
                           <option class="option fontUbantu" value="Rahim Yar Khan">Rahim Yar Khan</option>
                           <option class="option fontUbantu" value="Rajan Pur">Rajan Pur</option>
                           <option class="option fontUbantu" value="Rakhni">Rakhni</option>
                           <option class="option fontUbantu" value="Ranipur">Ranipur</option>
                           <option class="option fontUbantu" value="Ratodero">Ratodero</option>
                           <option class="option fontUbantu" value="Rawalakot">Rawalakot</option>
                           <option class="option fontUbantu" value="Renala Khurd">Renala Khurd</option>
                           <option class="option fontUbantu" value="Robat Thana">Robat Thana</option>
                           <option class="option fontUbantu" value="Rodkhan">Rodkhan</option>
                           <option class="option fontUbantu" value="Rohri">Rohri</option>
                           <option class="option fontUbantu" value="Sialkot">Sialkot</option>
                           <option class="option fontUbantu" value="Sadiqabad">Sadiqabad</option>
                           <option class="option fontUbantu" value="Safdar Abad- (Dhaban Singh)">Safdar Abad</option>
                           <option class="option fontUbantu" value="Sahiwal">Sahiwal</option>
                           <option class="option fontUbantu" value="Saidu Sharif">Saidu Sharif</option>
                           <option class="option fontUbantu" value="Saindak">Saindak</option>
                           <option class="option fontUbantu" value="Sakrand">Sakrand</option>
                           <option class="option fontUbantu" value="Sanjawi">Sanjawi</option>
                           <option class="option fontUbantu" value="Sargodha">Sargodha</option>
                           <option class="option fontUbantu" value="Saruna">Saruna</option>
                           <option class="option fontUbantu" value="Shabaz Kalat">Shabaz Kalat</option>
                           <option class="option fontUbantu" value="Shadadkhot">Shadadkhot</option>
                           <option class="option fontUbantu" value="Shahbandar">Shahbandar</option>
                           <option class="option fontUbantu" value="Shahpur">Shahpur</option>
                           <option class="option fontUbantu" value="Shahpur Chakar">Shahpur Chakar</option>
                           <option class="option fontUbantu" value="Shakargarh">Shakargarh</option>
                           <option class="option fontUbantu" value="Shangla">Shangla</option>
                           <option class="option fontUbantu" value="Sharam Jogizai">Sharam Jogizai</option>
                           <option class="option fontUbantu" value="Sheikhupura">Sheikhupura</option>
                           <option class="option fontUbantu" value="Shikarpur">Shikarpur</option>
                           <option class="option fontUbantu" value="Shingar">Shingar</option>
                           <option class="option fontUbantu" value="Shorap">Shorap</option>
                           <option class="option fontUbantu" value="Sibi">Sibi</option>
                           <option class="option fontUbantu" value="Sohawa">Sohawa</option>
                           <option class="option fontUbantu" value="Sonmiani">Sonmiani</option>
                           <option class="option fontUbantu" value="Sooianwala">Sooianwala</option>
                           <option class="option fontUbantu" value="Spezand">Spezand</option>
                           <option class="option fontUbantu" value="Spintangi">Spintangi</option>
                           <option class="option fontUbantu" value="Sui">Sui</option>
                           <option class="option fontUbantu" value="Sujawal">Sujawal</option>
                           <option class="option fontUbantu" value="Sukkur">Sukkur</option>
                           <option class="option fontUbantu" value="Suntsar">Suntsar</option>
                           <option class="option fontUbantu" value="Surab">Surab</option>
                           <option class="option fontUbantu" value="Swabi">Swabi</option>
                           <option class="option fontUbantu" value="Swat">Swat</option>
                           <option class="option fontUbantu" value="Tando Adam">Tando Adam</option>
                           <option class="option fontUbantu" value="Tando Bago">Tando Bago</option>
                           <option class="option fontUbantu" value="Tangi">Tangi</option>
                           <option class="option fontUbantu" value="Tank City">Tank City</option>
                           <option class="option fontUbantu" value="Tar Ahamd Rind">Tar Ahamd Rind</option>
                           <option class="option fontUbantu" value="Thalo">Thalo</option>
                           <option class="option fontUbantu" value="Thatta">Thatta</option>
                           <option class="option fontUbantu" value="Toba Tek Singh">Toba Tek Singh</option>
                           <option class="option fontUbantu" value="Tordher">Tordher</option>
                           <option class="option fontUbantu" value="Tujal">Tujal</option>
                           <option class="option fontUbantu" value="Tump">Tump</option>
                           <option class="option fontUbantu" value="Turbat">Turbat</option>
                           <option class="option fontUbantu" value="Umarao">Umarao</option>
                           <option class="option fontUbantu" value="Umarkot">Umarkot</option>
                           <option class="option fontUbantu" value="Upper Dir">Upper Dir</option>
                           <option class="option fontUbantu" value="Uthal">Uthal</option>
                           <option class="option fontUbantu" value="Vehari">Vehari</option>
                           <option class="option fontUbantu" value="Veirwaro">Veirwaro</option>
                           <option class="option fontUbantu" value="Vitakri">Vitakri</option>
                           <option class="option fontUbantu" value="Wadh">Wadh</option>
                           <option class="option fontUbantu" value="Wah Cantt">Wah Cantt</option>
                           <option class="option fontUbantu" value="Warah">Warah</option>
                           <option class="option fontUbantu" value="Washap">Washap</option>
                           <option class="option fontUbantu" value="Wasjuk">Wasjuk</option>
                           <option class="option fontUbantu" value="Wazirabad">Wazirabad</option>
                           <option class="option fontUbantu" value="Yakmach">Yakmach</option>
                           <option class="option fontUbantu" value="Zhob">Zhob</option>
                           <option class="option fontUbantu" value="Other">Other</option>
                        </select>
                     </div>
                  </div>
                  <div  style=" float: left;  height: 100%; width: 45% ;padding-top: 11px;        border-right: 1px black solid;">
                     <div class="form-group">
                        <select class="form-control fontUbantu" id="upperPrice" style="font-weight: bold !important;background-color: #f7f7f7;
                           border-color: transparent;">
                           <option selected="" class="fontUbantu"  disabled="" style="font-weight: bold !important;">Select Price</option>
                           <option class="fontUbantu" value="Less than 20,000">Less than 20,000 PKR</option>
                           <option class="fontUbantu" value="Between 20,000 and 30,000">Between 20,000 and 30,000 PKR</option>
                           <option class="fontUbantu" value="Between 30,000 and 60,000">Between 30,000 and 60,000 PKR</option>
                           <option class="fontUbantu" value="Between 60,000 and 1,00000">Between 60,000 and 1,00000 PKR</option>
                           <option class="fontUbantu" value="More Than 1,00000">More Than 1,00000 PKR</option>
                        </select>
                     </div>
                  </div>
                  <div id="upperSearch" style=" float: left;  height: 100%; width: 10% ;background-color: #4a88c1;    padding: 14px 0px 0px 14px;"><img class="srchiconMob" style="width: 70%; height: auto;cursor: pointer;" src="{{ asset('storage/images/ic_search_white_18dp.png')}}"></div>
               </div>
            </div>
         </div>
         <div  style="   float: left;height: 100%; width: 10% ;"></div>
      </div>
   </div>
</div>
<br/>

<div class="row fontUbantu" style="    margin-left: 15px;margin-bottom: 15px;">
   <a class="fontUbantu" href="{{ route('BuyUsedAccessories') }}"  style="background-color: #4a88c1; color: white;padding: 10px 18px 10px 18px; text-decoration: none;border-radius: 4px; font-weight: bold;">Buy Used Accessories</a>
</div>

<div class="row" style="margin-bottom:60px;">
   <div class="col-md-3" id="sidenav" >
      <p class="fontUbantu" style="background-color: #4a88c1; padding: 10px; margin-bottom: 0px;text-align: center; border-radius: 1px ; font-weight: 500;">SHOW RESULTS BY:</p>
      <div class="toggle-boxqasim">
         <h6 style="border-bottom: 1px #efeeee solid; background-image: url({{ asset('storage/images/headerimg/ic_arrow_drop_down_black_18dp.png')}}); background-repeat: no-repeat; background-position: right;     width: 96%;
            margin-left: 6px; font-weight: bold " class="toggleqasim headerqasim fontUbantu">Make
         </h6>
         <div class="contentqasim fontUbantu">
            <ul>
               @if($brands->count()>0)
               @foreach($brands as $brand)
               <div style="width: 87%; height: 30px;  ">
                  <div style="width: 80%; float: left;">
                     <label class="fontUbantu" for="{{ $brand->id }}" style="color: #101115;">{{ ucwords($brand->name) }}</label>
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
         margin-left: -25px;" /><a  style="background-color: #4a88c1; color: white;  padding: 4.8px; text-decoration: none; " href="#">Go</a>
             
             </li>
            
           </ul>
         </div>
         </div> -->
      <div class="toggle-boxqasim">
         <h6 style="border-bottom: 1px #efeeee solid; background-image: url({{ asset('storage/images/headerimg/ic_arrow_drop_down_black_18dp.png')}}); background-repeat: no-repeat; background-position: right;     width: 96%;
            margin-left: 6px; font-weight: bold; " class="toggleqasim headerqasim fontUbantu">PRICE RANGE</h6>
         <div class="contentqasim">
            <strong>Product Features:</strong><br />
            <ul>
               <li style="color: black;     width: 100%;
                  margin-left: -24px;  ">
                  <div style="width: 100%; ">
                     <div style="width: 45%; float: left; ">
                        <input type="number" placeholder="From" id="from_price" />
                     </div>
                     <div style="width: 45%; float: left; ">
                        <input type="number" placeholder="To" id="to_price" style="width: 100%;" />
                     </div>
                     <div style="width: 10%;float: left;  ">
                        <button type="button" style="background-color: #4a88c1;color: white;padding: 3px 7px 3px 5px;width: 117%;border: none;outline: none;" id="go_price">Go</button>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
      <div class="toggle-boxqasim">
         <h6 style="border-bottom: 1px #efeeee solid; background-image: url({{ asset('storage/images/headerimg/ic_arrow_drop_down_black_18dp.png')}}); background-repeat: no-repeat; background-position: right;     width: 96%;
            margin-left: 6px; font-weight: bold " class="toggleqasim headerqasim fontUbantu">CITY</h6>
         <div class="contentqasim">
            <ul>
               @if(count($cities)>0)
               @foreach($cities as $city)
               <div style="width: 87%; height: 30px;  ">
                  <div style="width: 80%; float: left;">
                     <input type="checkbox" id="{{ $city->city }}" value="{{ $city->city }}" name="cities[]" class="city_check" >
                     <label for="{{ $city->city }}" class="fontUbantu" style="color: #101115;">{{ ucwords($city->city)}}</label>
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
            margin-left: 6px; font-weight: bold; " class="toggleqasim headerqasim fontUbantu">MOBILES CONDITION
         </h6>
         <div class="contentqasim">
            <ul>
               <div style="width: 87%; height: 30px;  ">
                  <div style="width: 80%; float: left;">
                     <label for="Excellent" class="fontUbantu" style="color: #101115;"> Excellent</label>
                  </div>
                  <div style="width: 20%; float: left;">
                     <input type="checkbox" id="Excellent" name="statuses[]" class="device_status_check" value="Excellent">
                  </div>
               </div>
               <div style="width: 87%; height: 30px;  ">
                  <div style="width: 80%; float: left;">
                     <label for="Good1" class="fontUbantu" style="color: #101115;"> Good</label>
                  </div>
                  <div style="width: 20%; float: left;">
                     <input type="checkbox" id="Good1" name="statuses[]" class="device_status_check" value="Good">
                  </div>
               </div>
               <div style="width: 87%; height: 30px;  ">
                  <div style="width: 80%; float: left;">
                     <label for="Fairyy" class="fontUbantu" style="color: #101115;"> Fair</label>
                  </div>
                  <div style="width: 20%; float: left;">
                     <input type="checkbox" id="Fairyy" name="statuses[]" class="device_status_check" value="Fair">
                  </div>
               </div>
            </ul>
         </div>
      </div>
   </div>
   <div class="col-md-9" >
      <div class="row" style="">
         <div class="col-md-5">
            <p style="    color: #a8a1a1;
               padding: 12px 0px 0px 12px;">Sort by:</p>
         </div>
         <div class="col-md-3">
            <div  style="padding-top: 9px;  border-bottom: 1px #b0b0b0 solid; height: 53px;  ">
               <div style="width:30%; float:left; background-color:#ffffff;     color: #999999;    font-weight: 500;    padding: 10px 0px 0px 0px; ">ORDER</div>
               <div style="width:70%; float:left;  ">
                  <select class="form-control" id="sort_by_order" style="color: #0b0c0c;font-weight: 600">
                     <option selected="" disabled="" style="color: black;  font-weight: 600 !important;" >Please Choose</option>
                     <option value="desc" >Recent First</option>
                     <option value="asc" >Recent Last</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="col-md-1"></div>
         <div class="col-md-3">
            <div  style="padding-top: 9px;  border-bottom: 1px #b0b0b0 solid; height: 53px;  ">
               <div style="width:30%; float:left; background-color:#ffffff;     color: #999999;     font-weight: 500;  padding: 10px 0px 0px 0px; ">PRICE</div>
               <div style="width:70%; float:left;  ">
                  <select class="form-control" id="sort_by_price" style="color: #0b0c0c;font-weight: 600">
                     <option selected="" disabled="">Please Choose</option>
                     <option value="asc">Low to High</option>
                     <option value="desc">High to Low</option>
                  </select>
               </div>
            </div>
         </div>
      </div>
      <p style="  color: #898889;;">
         <!-- 1-48 of 126,978 Results -->
      </p>
      <div style="width: 100%;" class="row fontUbantu" id="sellProducts">
         @include('partials.sell_products_list',$products)
      </div>
   </div>
</div>


@include('includes.footer')



</body>




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

  function ContactShow(id){
    // $('#contact'+id).toggle();
  
  }


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
       jQuery('html, body').animate({ scrollTop: 500 }, 'fast');
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

<script type="text/javascript" src="{{ asset('slick/slick.js') }}"></script>
<script  src="{{ asset('js/ScrollJS2/script.js') }}"></script>





<script type="text/javascript">
  // jQuery(this).prev("li").attr("id","newId");
  // $('.page-link').attr("id","scrollfirPagination");



// $('.page-item:nth-child(2)').click(function() {
// jQuery('html, body').animate({ scrollTop: 0 }, 'fast');
// });


// $(".page-item").click(function() {
    // $('html, body').animate({
    //     scrollTop: $("#myDivPaginaton").offset().top
    // }, 2000);
//     jQuery('html, body').animate({ scrollTop: 0 }, 'fast');
// });


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




<script>
$(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
       $('#sidenav').addClass('myMovingClass');
      
    }
    else if($(this).scrollTop() > 200) {
       $('#sidenav').addClass('myMovingClasstwo');
      
    } 
    else {
       $('#sidenav').removeClass('myMovingClass');
         $('#sidenav').removeClass('myMovingClass2');
    }
});
</script>


<script>
// $(window).scroll(function() {

//     var scroll = $(window).scrollTop();

// console.log('scrool is at: ' + scroll);

//        if (scroll >=100) {
//         $('#sidenav').removeClass('myMovingClass');
//           $('#sidenav').removeClass('myMovingClassTwo');
//          $('#sidenav').addClass('myMovingClassThree');
//         // alert('okl');
       
//     }
//     else{
//       $('#sidenav').removeClass('myMovingClass');
//         $('#sidenav').removeClass('myMovingClassTwo');
//         $('#sidenav').removeClass('myMovingClassThree');
//     }
  
// });



</script>








</html>