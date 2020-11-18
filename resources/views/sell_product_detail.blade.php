<!DOCTYPE html>
<html lang="en">
  <head>
  <title>{{ config('app.name') }}</title>

  <meta name="description" content="<Flicker fone is the best mobile phone site for information and best mobile phone information site such as specifications, updated prices, features comparison and upcoming future updates of phones in Pakistan. >">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
    <link href="https://flickerfone.com/themes/default/shop/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">


<!-- <script src="{{ asset('js/jquery-2.1.3.min.js') }}" ></script> -->
    

        
   <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('OriginalZoomer/ScrollJS2//style.css') }}">
<link href="{{ asset('OriginalZoomer/css/cloudzoom.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('OriginalZoomer/css/thumbnail.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('OriginalZoomer/css/zoomcss.css') }}" rel="stylesheet" type="text/css">
 

 <link href="{{ asset('css/mystyle.css') }}" rel='stylesheet' type='text/css' media="all">
 
  <link href="{{ asset('css/ProductDetailTwo.css') }}" rel='stylesheet' type='text/css' media="all">
  <link href="{{ asset('css/template4/tabcontent.css') }}" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="{{ asset('js/ScrollJS2//style.css') }}">
  
  <link href="{{ asset('css/pagination.css') }}" rel="stylesheet" type="text/css">



<!-- 
//////////////////////////////////// -->
   <script src="{{ asset('js/jquery-2.1.3.min.js') }}" ></script>
   <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
  

</head>



 <style>

ul[class="tabs"]{
text-align: initial !important;
}

   #clickopinon{
cursor: pointer;
   }
 </style>

<body>



  <a href="#" id="scroll" style="display: none;"><span></span></a>
  @include('includes.header');

<br/>
<div class="container">
<div class="row">
  <div class="col-md-12 text-uppercase" style="color: gray;">
     <a href="/" style="color: gray;text-decoration: none;" onMouseOver="this.style.color='#00F'" onMouseOut="this.style.color='grey'" target="_blank">HOME </a> / {{ $product->model }}
  </div>
</div>


</div>


<br/>

<br/>


<div class="row" style="margin-top: 31px;">
  <div class="col-sm-6 ">


              @php $img1 = $product->image @endphp
              @php $img1_400 = '/storage/admin/images/sellproduct/thumbnail/400_'.$product->img1 @endphp
              @php $img2_400 = '/storage/admin/images/sellproduct/thumbnail/400_'.$product->img2 @endphp
              @php $img3_400 = '/storage/admin/images/sellproduct/thumbnail/400_'.$product->img3 @endphp
              @php $img4_500 = '/storage/admin/images/sellproduct/thumbnail/400_'.$product->img4 @endphp
              @php $img5_500 = '/storage/admin/images/sellproduct/thumbnail/400_'.$product->img5 @endphp
              @php $img6_500 = '/storage/admin/images/sellproduct/thumbnail/400_'.$product->img6 @endphp
              @php $img7_500 = '/storage/admin/images/sellproduct/thumbnail/400_'.$product->img7 @endphp
              @php $img8_500 = '/storage/admin/images/sellproduct/thumbnail/400_'.$product->img8 @endphp
             
              @php $img1_100 = '/storage/admin/images/sellproduct/thumbnail/100_'.$product->img1 @endphp
              @php $img2_100 = '/storage/admin/images/sellproduct/thumbnail/100_'.$product->img2 @endphp
              @php $img3_100 = '/storage/admin/images/sellproduct/thumbnail/100_'.$product->img3 @endphp

      


            <div id="surround" align="center">
               <img class="cloudzoom img-responsive" alt ="Small image" id ="zoom1" src="{{ ($img1_400) }}" 
                  data-cloudzoom='  zoomSizeMode:"image",     autoInside: 500 '>
               
                  <div id="slider1">
                  <div class="thumbelina-but horiz left">
                     <img src="{{ asset('OriginalZoomer/ZoomerImg/ic_keyboard_arrow_left_black_18dp.png')}}">
                  </div>
                  <ul class="ClousSlicker">

                    
                    @if(!empty($img1))
                     <li style="border:1px red solid;"><img class='cloudzoom-gallery img-thumbnail' src="{{ asset($img1_400)}}"
                        data-cloudzoom ="useZoom:'.cloudzoom', image:'{{ asset($img1_400)}}'  " style='max-width:90px;max-height:100px;'>
                      </li>
                    @endif
                     
                     
                    @if(!empty($img2))
                      <li><img class='cloudzoom-gallery img-thumbnail' src="{{ asset($img2_400)}}"
                        data-cloudzoom ="useZoom:'.cloudzoom', image:'{{ asset($img2_400)}}'  " style='max-width:90px;max-height:100px;'></li>
                    @endif


                    @if(!empty($img3))
                     <li><img class='cloudzoom-gallery img-thumbnail' src="{{ asset($img3_400)}}"
                        data-cloudzoom ='useZoom:".cloudzoom", image:"{{ asset($img3_400)}}"  ' style='max-width:90px;max-height:100px;'>
                      </li>
                    @endif

                    @if(!empty($product->img4))
                     <li><img class='cloudzoom-gallery img-thumbnail' src="{{ asset($img4_500)}}"
                        data-cloudzoom ='useZoom:".cloudzoom", image:"{{ asset($img4_500)}}"  ' style='max-width:90px;max-height:100px;'>
                      </li>
                    @endif

                    @if(!empty($product->img5))
                     <li><img class='cloudzoom-gallery img-thumbnail' src="{{ asset($img5_500)}}"
                        data-cloudzoom ='useZoom:".cloudzoom", image:"{{ asset($img5_500)}}"  ' style='max-width:90px;max-height:100px;'>
                      </li>
                    @endif

                    @if(!empty($product->img6))
                     <li><img class='cloudzoom-gallery img-thumbnail' src="{{ asset($img6_500)}}"
                        data-cloudzoom ='useZoom:".cloudzoom", image:"{{ asset($img6_500)}}"  ' style='max-width:90px;max-height:100px;'>
                      </li>
                    @endif

                    @if(!empty($product->img7))
                     <li><img class='cloudzoom-gallery img-thumbnail' src="{{ asset($img7_500)}}"
                        data-cloudzoom ='useZoom:".cloudzoom", image:"{{ asset($img7_500)}}"  ' style='max-width:90px;max-height:100px;'>
                      </li>
                    @endif

                    @if(!empty($product->img8))
                     <li><img class='cloudzoom-gallery img-thumbnail' src="{{ asset($img8_500)}}"
                        data-cloudzoom ='useZoom:".cloudzoom", image:"{{ asset($img8_500)}}"  ' style='max-width:90px;max-height:100px;'>
                      </li>
                    @endif
<!-- 

                     <li><img class='cloudzoom-gallery img-thumbnail' src="{{ asset('OriginalZoomer/ZoomerImg/81a8a44e899e95d879b18e57467ed62c.jpg')}}"
                        data-cloudzoom ="useZoom:'.cloudzoom', image:'{{ asset('OriginalZoomer/ZoomerImg/81a8a44e899e95d879b18e57467ed62c.jpg')}}'  " style='max-width:90px;max-height:100px;'>
                      </li>

                     <li><img class='cloudzoom-gallery img-thumbnail' src="{{ asset('OriginalZoomer/ZoomerImg/a9211a87b14684be20afe90e74d0fbbe.jpg')}}"
                        data-cloudzoom ="useZoom:'.cloudzoom', image:'{{ asset('OriginalZoomer/ZoomerImg/a9211a87b14684be20afe90e74d0fbbe.jpg')}}'  " style='max-width:90px;max-height:100px;'></li>
                   
                   
                        <li><img class='cloudzoom-gallery img-thumbnail' src="{{ asset('OriginalZoomer/ZoomerImg/ba273467b19ae349fa5d51d5b8cd813b.jpg')}}"
                        data-cloudzoom="useZoom:'.cloudzoom', image:'{{ asset('OriginalZoomer/ZoomerImg/ba273467b19ae349fa5d51d5b8cd813b.jpg')}}'  "
                        style='max-width:90px;max-height:100px;'></li>
                     <li><img class='cloudzoom-gallery img-thumbnail' src="{{ asset('OriginalZoomer/ZoomerImg/f567b84a6a01c547baad939baa7ff66b.jpg')}}"
                        data-cloudzoom="useZoom:'.cloudzoom', image:'{{ asset('OriginalZoomer/ZoomerImg/f567b84a6a01c547baad939baa7ff66b.jpg')}}'  "
                        style='max-width:90px;max-height:100px;'></li> -->

                  </ul>
                  <div class="thumbelina-but horiz right">
                     <img src="{{ asset('OriginalZoomer/ZoomerImg/ic_keyboard_arrow_right_black_18dp.png')}}">
                  </div>
               </div>
            </div>
         </div>

<div class="col-md-6">
  

    <div style="width: 100%; ">

      <div style="width: 10%; float: left;"></div>
      <div style="width: 60%; float: left;background-color: #4a88c1; color: white;padding: 10px;font-weight: 700;">Description</div>
      <div style="width: 20%; float: left;background-color: #4a88c1; color: white;padding: 10px;font-weight: 700;">Details</div>
      <div style="width: 10%; float: left;"></div>
    </div>

    <!-- <div style="width: 100%; ">

      <div style="width: 10%; float: left;"></div>
      <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; border-left: 1px black solid;">
        Price Negotiateable</div>
      <div style="width: 20%; float: left; color: black;padding: 6px;font-weight: 500;border-right: 1px black solid;">
        No</div>
      <div style="width: 10%; float: left;"></div>


    </div> -->


    <div style="width: 100%; ">

      <div style="width: 10%; float: left;"></div>
      <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; border-left: 1px black solid;">
        City</div>
      <div style="width: 20%; float: left; color: black;padding: 6px;font-weight: 500;border-right: 1px black solid;">
        {{ ucfirst($product->city) }}</div>
      <div style="width: 10%; float: left;"></div>


    </div>



    <div style="width: 100%; ">

      <div style="width: 10%; float: left;"></div>
      <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; border-left: 1px black solid;">
        Model</div>
      <div style="width: 20%; float: left; color: black;padding: 6px;font-weight: 500;border-right: 1px black solid;">
         {{ ucfirst($product->model) }}</div>
      <div style="width: 10%; float: left;"></div>


    </div>

    <div style="width: 100%; ">

      <div style="width: 10%; float: left;"></div>
      <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; border-left: 1px black solid;">
        PTA Status</div>
      <div style="width: 20%; float: left; color: black;padding: 6px;font-weight: 500;border-right: 1px black solid;">
         {{ ucfirst($product->pta) }}</div>
      <div style="width: 10%; float: left;"></div>


    </div>

    <div style="width: 100%; ">

      <div style="width: 10%; float: left;"></div>
      <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; border-left: 1px black solid;">
        Battery / Health /  Status</div>
      <div style="width: 20%; float: left; color: black;padding: 6px;font-weight: 500;border-right: 1px black solid;">
        {{ $product->device_battery_status }}%</div>
      <div style="width: 10%; float: left;"></div>


    </div>

    <div style="width: 100%; ">

      <div style="width: 10%; float: left;"></div>
      <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; border-left: 1px black solid;">
      Original Accessories</div>
      <div style="width: 20%; float: left; color: black;padding: 6px;font-weight: 500;border-right: 1px black solid;">
         {{ ucfirst($product->original_accessories_available) }}</div>
      <div style="width: 10%; float: left;"></div>


    </div>

  
    <div style="width: 100%; ">

      <div style="width: 10%; float: left;"></div>
      <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; border-left: 1px black solid;">
        Screen Cracked</div>
      <div style="width: 20%; float: left; color: black;padding: 6px;font-weight: 500;border-right: 1px black solid;">
        {{ ucfirst($product->screen_is_cracked) }}</div>
      <div style="width: 10%; float: left;"></div>


    </div>


    <div style="width: 100%; ">

      <div style="width: 10%; float: left;"></div>
      <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; border-left: 1px black solid;">
       Minor Scratches / Dents</div>
      <div style="width: 20%; float: left; color: black;padding: 6px;font-weight: 500;border-right: 1px black solid;">
         {{ ucfirst($product->minor_dent_scratch) }}</div>
      <div style="width: 10%; float: left;"></div>


    </div>


  <div style="width: 100%; ">

    <div style="width: 10%; float: left;"></div>
    <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; border-left: 1px black solid;">
      Major Scratches / Dents</div>
    <div style="width: 20%; float: left; color: black;padding: 6px;font-weight: 500;border-right: 1px black solid;">
      {{ ucfirst($product->major_dent_scratch) }}</div>
    <div style="width: 10%; float: left;"></div>


  </div>

   <div style="width: 100%; ">

      <div style="width: 10%; float: left;"></div>
      <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; border-left: 1px black solid;    border-bottom: 1px solid black;">
        Device Box Available</div>
      <div style="width: 20%; float: left; color: black;padding: 6px;font-weight: 500;border-right: 1px black solid;    border-bottom: 1px solid black;">
        {{ ucfirst($product->device_box_available) }}</div>
      <div style="width: 10%; float: left;"></div>


  </div>
  <ul style="margin-top: 549px; list-style: none;width: 100%;">
    <li style="width: 50%;float: left;cursor: pointer;"><div onclick="ContactShow('{{ $product->id }}')" align="" style="width: 186px; text-align: center; background-color: #4a88c1 ;color: rgb(253, 245, 245);padding: 6px;font-weight: 500;float: left; ">
    <a style="text-decoration: none;color: white;" href="{{ route('personcontact') }}"> Contact </a>
    </div></li>
    <li style="width: 50%; float: left;display:none;" id="contact{{ $product->id }}"><div align="" style="width: 186px; text-align: center;background-color: #4a88c1 ;color: rgb(253, 245, 245);padding: 6px;font-weight: 500;float: left; ">
    {{ $product->phone }}
    </div></li>
    
  </ul>
  <div 
    style="width: 186px; 
      font-size: 34px;
  text-align: center;margin-top: 41px; ;color: #4a88c1;padding: 6px;font-weight: 500; ">
  <sup>  PKR</sup> {{ $product->price }}
  </div>




</div>

</div>



  <div class="row">
    <div class="col-md-12">

      <div style=" margin: 0 auto; padding: 120px 0 40px;">
        <ul class="tabs" data-persist="true">
            <li><a href="#view1">ABOUT THIS PRODUCT</a></li>
            <li><a href="#view2">ASK SELLER A QUESTION</a></li>
         
        </ul>
        <div class="tabcontents">
          <div id="view1">

            @if($product->detail !='')
            <p>{{ ucfirst($product->detail) }}</p>
            @else
            <p>No Detail is Available</p>
            @endif
          </div>


          <div id="view2">
              No QUESTION Available
            <!-- <h4 style="background-color: #dcdcdc38;
                padding: 10px;">Question About this product (884) </h4>
            <p> <a href="#">Login</a> or <a href="#">Register</a> to Ask a Question</p>



            <p>Other Question askes by vivo Electronic Pvt Ltd.</p>

            <hr />

            <p style="font-weight: 500;"><font style="background-color: #8cbce5;
                padding: 10px;
                color: white;" > Q</font> Mezan Bank holder bi ei mobile purchase kar sakta?</p>
            <p style="color: #beb4b4; margin-left: 48px;">Muhammad Ali 4 days ago</p>



            <p style="font-weight: 500;">
              <font style="background-color: #c2bebe;
                padding: 10px;
                color: white;"> A</font>You can make payment both with Credit Card/Debit, However Installments only available on Credit Card.
            </p>
            <p style="color: #beb4b4; margin-left: 48px;">Vivi Electric Pvt Ltd, Awnsered within 2 hours</p>



            <p style="font-weight: 500;">
              <font style="background-color: #8cbce5;
                padding: 10px;
                color: white;"> Q</font> Mezan Bank holder bi ei mobile purchase kar sakta?
            </p>
            <p style="color: #beb4b4; margin-left: 48px;">Muhammad Ali 4 days ago</p>



            <p style="font-weight: 500;">
              <font style="background-color: #c2bebe;
                padding: 10px;
                color: white;"> A</font>You can make payment both with Credit Card/Debit, However Installments only available on
              Credit Card.
            </p>
            <p style="color: #beb4b4; margin-left: 48px;">Vivi Electric Pvt Ltd, Awnsered within 2 hours</p>


            <p style="font-weight: 500;">
              <font style="background-color: #8cbce5;
                padding: 10px;
                color: white;"> Q</font> Mezan Bank holder bi ei mobile purchase kar sakta?
            </p>
            <p style="color: #beb4b4; margin-left: 48px;">Muhammad Ali 4 days ago</p>



            <p style="font-weight: 500;">
              <font style="background-color: #c2bebe;
                padding: 10px;
                color: white;"> A</font>You can make payment both with Credit Card/Debit, However Installments only available on
              Credit Card.
            </p>
            <p style="color: #beb4b4; margin-left: 48px;">Vivi Electric Pvt Ltd, Awnsered within 2 hours</p>
 -->
          </div>

          </div>
        </div>
    </div>
  </div>

</div>




<br/>

@include('includes.footer')
 
</body>


<!-- 
<script src="js/jquery-slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script> -->


<script type="text/javascript">

document.addEventListener("DOMContentLoaded", function(event) {

CloudZoom.quickStart();
$(function(){
    $('#slider1').Thumbelina({
        $bwdBut:$('#slider1 .left'),
        $fwdBut:$('#slider1 .right')
    });
});



    $('#commentbtn').click(function(){

      submitComment($("#comment").val());
    });
var limit = 5;


  function submitComment(msg) {
     // alert('https://flickerfone.com/main/submicomment?'+"slug="+5+"&name="+$("#name").val()+"&email="+$("#email").val()+"&g-recaptcha-response="+$("#g-recaptcha-response").val());

 $.get("https://flickerfone.com/main/submicomment?slug=428&comment="+msg+"&name="+$("#name").val()+"&email="+$("#email").val()+"&response="+$("#g-recaptcha-response").val(),function(data){
     loadComments();
    if(data.success==false){
      loadComments();
      sa_alert('Request',data.message, 'info',2000);
    }else{

      $("#comment").val("");
      $("#name").val("");
      $("#email").val("");
       sa_alert('Success',data.message, 'success',2000);
    }
 });
}



function submitRating(msg) {

 $.get("https://flickerfone.com/main/submitrating?slug=428&review="+msg,function(data){
    if(data.success==false){
      sa_alert('Request',data.message, 'info',2000);
    }else{
        $(".rating-widget").html("Thanks for your feedback.")
       sa_alert('Success',data.message, 'success',2000);
    }
 });
}
  $('#stars li').on('mouseover', function(){

    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });

  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });





});






</script>





 <script src="https://flickerfone.com/themes/default/shop/assets/js/jquery-2.1.3.min.js"></script>

 
 <!-- <script src="https://flickerfone.com/themes/default/shop/assets/js/bs.js"></script> -->



<script type="text/javascript" src="{{ asset('OriginalZoomer/js/cloudzoom.js')}}"></script>
<script type="text/javascript" src="{{ asset('OriginalZoomer/js/select2.js')}}"></script>
<script type="text/javascript" src="{{ asset('OriginalZoomer/js/slick.js')}}"></script>
<script type="text/javascript" src="{{ asset('OriginalZoomer/js/thumbnail.js')}}"></script>
<!-- <script type="text/javascript" src="{{ asset('slick/jquery3.2.1.js')}}"></script> -->




 <script  src="{{ asset('OriginalZoomer/ScrollJS2/script.js') }}"></script>
 

<script  src="{{ asset('js/tabcontent.js')}}"></script>
  <script  src="{{ asset('js/Event.js')}}"></script>

</html>