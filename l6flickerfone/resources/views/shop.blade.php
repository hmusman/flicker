<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/bootstrap.min.css" >


<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="Slider/engine1/style.css" />
<script type="text/javascript" src="Slider/engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->



  </head>
  <script src="js/jquery-2.1.3.min.js" ></script>
  <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/style.css')}}" rel='stylesheet' type='text/css' media="all">
  <link href="{{ asset('css/mystyle.css')}}" rel='stylesheet' type='text/css' media="all">

  <link rel="stylesheet" href="js/ScrollJS2//style.css">
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>

  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  
  <style>
 img[src="{{ asset('storage/images/logo Black-01.jpg') }}"]{
  height: 55px !important;
    /* top: -1px; */
    margin-top: -8px;
    margin-bottom: -8px;
}
    
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
    .navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
  }	
  /* ============ desktop view .end// ============ */
  
  
  </style>


<!-- 
slider -->
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




</style>

<body>


  <a href="#" id="scroll" style="display: none;"><span></span></a>

  @include('includes.header')



  




<!-- Start WOWSlider.com BODY section -->
<!-- Start WOWSlider.com BODY section -->
<!-- <div id="wowslider-container1">
  <div class="ws_images"><ul>
      <li>
        <a href="#ShopPAge"> <img src="Slider/data1/images/1350-x-376.jpg" alt="Shop Now" title="Shop Now" id="wows1_0"/></a>
      
      
  <p style="font-weight: bold; font-size: 25px; ">Latest Branded Phones <br/>
  <h5 style="font-weight: bold; font-size: 15px; color: #2abcfe !important; ">GET READY TO RUN SMARTER</h5><br/>

  <h6 id="shopBtn" style="  padding: 10px 20px 10px 27px !important;width: 149px !important; border: 1px black solid !important;  text-shadow: 1px 1px 5px white !important ;color: #b30930 !important;  font-weight: 700 !important;">SHOP NOW</h6>
  </p>
 
      </li>


      
      <li><a href="#ShopPAge"><img src="Slider/data1/images/1350-x-376-B.jpg" alt="bootstrap image slider" title="Shop Now" id="wows1_1"/></a>
      
      
         
  <p style="font-weight: bold; font-size: 25px; ">Shop Your Desired Phone with Flicker Fone<br/>
    <h5 style="font-weight: bold; font-size: 15px; color: #2abcfe !important; ">GET READY TO RUN SMARTER</h5><br/>
  
    <h6 id="shopBtn" style="  padding: 10px 20px 10px 27px !important;width: 149px !important;text-shadow: 1px 1px 5px white !important ; border: 1px black solid !important; color: #b30930 !important;  font-weight: 700 !important;">SHOP NOW</h6>
    </p>
      
      </li>





      <li><a href="#ShopPAge"><img src="Slider/data1/images/1350-x-376-A.jpg" alt="Shop Now" title="Shop Now" id="wows1_2"/></a>
      
           
  <p style="font-weight: bold; font-size: 25px; ">Samsung Galaxy Note 20 <br/>
    <h5 style="font-weight: bold; font-size: 15px; color: #2abcfe !important; ">GET READY TO RUN SMARTER</h5><br/>
  
   <h6 id="shopBtn" style="  padding: 10px 20px 10px 27px !important;width: 149px !important;text-shadow: 1px 1px 5px white !important ; border: 1px black solid !important; color: #b30930 !important;  font-weight: 700 !important;">SHOP NOW</h6>
    </p>
      
      </li>
    </ul></div>
    <div class="ws_bullets"><div>
      <a href="#" title="Shop Now"><span><img src="Slider/data1/tooltips/1350-x-376.png" alt="Shop Now"/>1</span></a>
      <a href="#" title="Shop Now"><span><img src="Slider/data1/tooltips/1350-x-376-B.png" alt="Shop Now"/>2</span></a>
      <a href="#" title="Shop Now"><span><img src="Slider/data1/tooltips/1350-x-376-A.png" alt="Shop Now"/>3</span></a>
    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">html slider</a> by WOWSlider.com v8.8</div>
  <div class="ws_shadow"></div>

  <!-- <h3 style="background-color: green !important;">Wedding Cupcakes</h3>
  <span>the newest craze in town</span>
  <button class="orderNowHome" type="button">
      order now
  </button> -->


  </div>	 -->
 
  <!-- End WOWSlider.com BODY section -->
  
  <!-- End WOWSlider.com BODY section -->









<br/>



<div class="container">
<div class="row">
  <div class="col-md-12" style="color: gray;">
    HOME / PHONES / BRANDS
  </div>
</div>


</div>






  <div class="container-fluid" style="background-color: #f7f7f7 !important;">
    <div class="container" style="background-color: #f7f7f7 !important;">
      <div class="row" style="background-color: #f7f7f7 !important;">
        <div class="col-md-2" style="color: black; margin-top: 15px; " >
        <p style="font-weight: bold !important;"> FILTERS</p> 
        </div>

        <div class="col-md-3" style="color: black; margin-top: 15px; ">
          <div class="form-group">
           
            <select class="form-control" id="brand" style="font-weight: bold !important;">
              <option selected="" disabled="" style="font-weight: bold !important;">Brands</option>
              @if($brands->count()>0)
                @foreach($brands as $brand)
                  <option value="{{ $brand->id }}">{{ ucwords($brand->name) }}</option>
                @endforeach
              @endif
            </select>
          </div>
         </div>

         <div class="col-md-3" style="color: black; margin-top: 15px; ">
          <div class="form-group">
           
            <select class="form-control" id="price" style="font-weight: bold !important;">
              <option selected=""  disabled="" style="font-weight: bold !important;">Price</option>
              <option value="Less than 20,000">Less than 20,000 PKR</option>
              <option value="Between 20,000 and 30,000">Between 20,000 and 30,000 PKR</option>
              <option value="Between 30,000 and 60,000">Between 30,000 and 60,000 PKR</option>
              <option value="Between 60,000 and 1,00000">Between 60,000 and 1,00000 PKR</option>
              <option value="More Than 1,00000">More Than 1,00000 PKR</option>
            </select>
          </div>
         </div>

         <div class="col-md-3" style="color: black; margin-top: 15px; ">
         
          <div class="form-group">
           
            <select class="form-control" id="view" style="font-weight: bold !important;">
              <option selected="" disabled="" style="font-weight: bold !important;">Select View</option>
              <option value="5">5</option>
              <option value="10">10</option>
              <option value="20">20</option>
              <option value="30">30</option>
            </select>
          </div>
        
        
        </div>

        <div class="col-md-1" style="color: black;  "></div>
      </div>
    </div>
  </div>
  
  <div class="row products" style="    background-color: white;">

      @if($products->count()>0)
        @foreach($products as $row)
          @php $img = 'storage/'.$row->image @endphp
          <div class="col-md-4" style="border-right: 1px #f2f2f2 solid;border-bottom: 1px #f2f2f2 solid;" >
    
               <center> <img src="{{ asset($img) }}" style="height: 215px;margin-top: 40px;" /></center>
               <center> <p style="
              
                text-transform: uppercase; font-weight: bold; color: black !important;">{{ ucwords($row->name) }}</p></center>
               <center> <p style="  margin-top: -17px !important;color: #b3b5be;">It is in your Pocket</p></center>

               <!-- <center> <del style="  color: #252629 !important;">PKR {{ $row->price }}</del></center> -->
               <center> <p style="  color: #db4f45 !important;">PKR {{ $row->price }}</p></center>
               <center><a href="{{ route('AdviceComparison',$row->id) }}"> <p class="HoveStylAddComp" style="text-transform: uppercase;  color: #b3b5be">Add to compare</p></a></center>


          </div>
        @endforeach
      @else
        No Product Available
      @endif

    
   
  </div>
  
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

<script type="text/javascript">
  $(document).ready(function(){
      function BrandPriceProduct()
      {
          if($('#brand').children("option:selected").val() !='Brands' && $('#price'). children("option:selected").val() !='Price')
          {
            if($('#view').children('option:selected').val() =="Select View")
            {
              var brand = $('#brand').children("option:selected").val();
              var price = $('#price').children("option:selected").val();
              var nView = 9;
              $.ajax({
                url:"{{ route('ShopBrandPriceProducts') }}",
                type:"get",
                data:{nView:nView,brand:brand,price:price},
                success:function(data)
                {
                  $('.products').html(data);
                }
              });
            }
            else
            {
              var view = $('#view').children('option:selected').val();
              var brand = $('#brand').children("option:selected").val();
              var price = $('#price').children("option:selected").val();
              $.ajax({
                url:"{{ route('ShopBrandPriceProducts') }}",
                type:"get",
                data:{nView:nView,brand:brand,price:price},
                success:function(data)
                {
                  $('.products').html(data);
                }
              });
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
              var nView = 9;
              $.ajax({
                url:"{{ route('ShopBrandProducts') }}",
                type:"get",
                data:{nView:nView,id:id},
                success:function(data)
                {
                  $('.products').html(data);
                }
              });
            }
            else
            {
              var nView = $('#view').children('option:selected').val();
              var id = $('#brand').children("option:selected").val();
              $.ajax({
                url:"{{ route('ShopBrandProducts') }}",
                type:"get",
                data:{nView:nView,id:id},
                success:function(data)
                {
                  $('.products').html(data);
                }
              });
            }
            
          }
          else
          {
            BrandPriceProduct();
          }
          
      });

      $('#view').change(function(){
          BrandPriceProduct();  

      });

      $('#price').change(function(){
          if($('#brand').children("option:selected").val() =='Brands')
          {

            if($('#view').children('option:selected').val() =="Select View")
            {
              var price = $('#price').children("option:selected").val();
              var nView = 9;
              $.ajax({
                url:"{{ route('ShopPriceProducts') }}",
                type:"get",
                data:{nView:nView,id:price},
                success:function(data)
                {
                  $('.products').html(data);
                }
              });
            }
            else
            {
              var nView = $('#view').children('option:selected').val();
              var id = $('#price').children("option:selected").val();
              $.ajax({
                url:"{{ route('ShopPriceProducts') }}",
                type:"get",
                data:{nView:nView,id:id},
                success:function(data)
                {
                  $('.products').html(data);
                }
              });
            }

          }
          else
          {
            BrandPriceProduct();
          }
          
      });
  });
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







$(function(){
   $('#shopBtn').attr('href','#scrollTo');
});



</script>

  
<script type="text/javascript" src="{{ asset('slick/slick.min.js')}}"></script>
        
<script type="text/javascript" src="{{ asset('slick/jquery3.2.1.js')}}"></script>
  
<script type="text/javascript" src="{{ asset('slick/slick.js')}}"></script>
 





<script type="text/javascript" src="{{ asset('Slider/engine1/wowslider.js')}}"></script>
  <script type="text/javascript" src="{{ asset('Slider/engine1/script.js')}}"></script>


 
  
  

  <script  src="{{ asset('js/ScrollJS2/script.js')}}"></script>
</html>

