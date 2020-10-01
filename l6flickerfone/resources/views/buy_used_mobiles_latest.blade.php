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
  @include('includes.header');


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
    <div class="col-md-4" id="finfbymodl" ><p style="width: 100%; color: black;    text-align: center; font-size: 18px;  font-weight: 500;  padding-top: 19px;">Find by make or model</p></div>
    <div class="col-md-8" style="padding-right: 0px !important;">
    
    
      <div id="borderatmob"  style=" float: left;  height: 100%; width: 45% ;padding-top: 11px;     border-left: 1px black solid;
      border-right: 1px black solid;">
      
        <div class="form-group">
       
          <select class="form-control" id="sel1" style="font-weight: bold !important;">
            <option style="font-weight: bold !important;">All Cities</option>
            <option>Multan</option>
            <option>Lahore</option>
            <option>Quetta</option>
            <option>Peshawar</option>
            <option>Sahiwal</option>
            <option>Chiniot</option>
          </select>
        </div>
      
      </div>
      <div  style=" float: left;  height: 100%; width: 45% ;padding-top: 11px;        border-right: 1px black solid;">
      
        <div class="form-group">
       
          <select class="form-control" id="sel1" style="font-weight: bold !important;">
            <option style="font-weight: bold !important;">Price Range</option>
            <option>Less than 20,000</option>
            <option>Between 20,000 and 30, 000</option>
            <option>More than 30,000</option>
           
          </select>
        </div>
      
      </div>
      <div  style=" float: left;  height: 100%; width: 10% ;background-color: #0071e3;    padding: 14px 0px 0px 14px;"><img style="width: 70%; height: auto;" src="{{ asset('storage/images/ic_search_white_18dp.png')}}"></div>
    
    
    </div>
  </div>
  
  </div>
  <div  style="   float: left;height: 100%; width: 10% ;"></div>
</div>
  </div>






</div>


 

<br/>



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
            <p style="    background-color: #fafafa;
        padding: 0px 1px 0px 1px;
        border-radius: 12px;
        text-align: center;
        color: black;
        border: 1px #d9d3d3 solid;">{{$city->total}}</p>
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
<a href="javascript:void(0)" style="color: blue;" onclick="document.getElementById('showmorecity').style.display= 'block'">more choices</a>
 


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
    
    
    
    <div class="row" style="border: 1px black solid;">


<div class="col-md-3">
  <p style="    color: #a8a1a1;
  
    padding: 12px 0px 0px 12px;">Sort by:</p>
</div>


      <div class="col-md-9">
    <div class="form-group" style="padding-top: 9px;">
    
      <select class="form-control" id="sel1" style="    background-color: #ffffff !important;
    border: 1px solid #ffffff !important;">
        <option style="font-weight: bold !important;"> Update Date: Recent First</option>
        <option style="font-weight: bold !important;">Update Date: Recent Last</option>
        <option style="font-weight: bold !important;">Price: Low to High</option>
          <option style="font-weight: bold !important;">Price: High to Low</option>
    
      </select>
    </div>
      </div>
    </div>






<p style="  color: #898889;;">1-48 of 126,978 Results</p>


      <div style="width: 100%;" class="row" id="sellProducts">
         @include('partials.sell_products_list',$products)
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
        data:{brands:brands,from:from,to:to,cities:cities,statuses:statuses},
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
        data:{brands:brands,from:from,to:to,cities:cities,statuses:statuses},
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



  $('.brands_check').change(function(){
      var brands = $('.brands_check:checked').map(function(){ return $(this).val();}).get();
      var cities = $('.city_check:checked').map(function(){ return $(this).val();}).get();
      var statuses = $('.device_status_check:checked').map(function(){ return $(this).val();}).get();
      var from = $('#from_price').val();
      var to = $('#to_price').val();
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


  });

   $('.device_status_check').change(function(){
      var brands = $('.brands_check:checked').map(function(){ return $(this).val();}).get();
      var cities = $('.city_check:checked').map(function(){ return $(this).val();}).get();
      var statuses = $('.device_status_check:checked').map(function(){ return $(this).val();}).get();
      var from = $('#from_price').val();
      var to = $('#to_price').val();

      
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

      else if(!$('.brands_check').is(":checked") && !$('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      {
        FetchPriceStatusProducts(0,from,to,statuses,options);
      }

      else if($('.brands_check').is(":checked") && $('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      {
        FetchBrandsCityStatusProducts(0,brands,cities,statuses,options);
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

      if(!$('.brands_check').is(":checked") && !$('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      {
        FetchPriceProducts(0,from,to,options);
      } 

      else if($('.brands_check').is(":checked") && $('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      {
        FetchBrandsPriceCityStatusProducts(0,brands,from,to,cities,statuses,options);
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
      var from = $('#from_price').val();
      var to = $('#to_price').val();

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

      else if(!$('.brands_check').is(":checked") && !$('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      {
        FetchData(page)
      } 

      // if($('.brands_check').is(":checked") && !$('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      // {
      //     var brands = $('.brands_check:checked').map(function(){ return $(this).val();}).get();
      //     FetchBrandProducts(page,brands,options);
      // }
      // else if(!$('.brands_check').is(":checked") && !$('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()!='' && $('#to_price').val()!='')
      // {
      //   FetchPriceProducts(page,$('#from_price').val(),$('#to_price').val(),options);
      // }

      // else if(!$('.brands_check').is(":checked") && $('.city_check').is(":checked") && !$('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      // {
      //     var cities = $('.city_check:checked').map(function(){ return $(this).val();}).get();
      //     FetchCityProducts(page,cities,options);
      // }

      // else if(!$('.brands_check').is(":checked") && !$('.city_check').is(":checked") && $('.device_status_check').is(":checked") && $('#from_price').val()=='' && $('#to_price').val()=='')
      // {
      //     var statuses = $('.device_status_check:checked').map(function(){ return $(this).val();}).get();
      //     FetchStatusProducts(page,statuses,options);
      // }



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
</html>