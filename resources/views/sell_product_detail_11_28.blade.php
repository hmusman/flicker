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
  .modal-window {
  position: fixed;



background-color: #8080807a;




  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 999;
  visibility: hidden;
  opacity: 0;
  pointer-events: none;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.modal-window:target {
  visibility: visible;
  opacity: 1;
  pointer-events: auto;
}
.modal-window > div {
  width: 436px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  padding: 2em;
  background: #ffffff;
}
.modal-window header {
  font-weight: bold;
}
.modal-window h1 {
  font-size: 150%;
  margin: 0 0 15px;
}

.modal-close {
  color: #aaa;
  line-height: 50px;
  font-size: 80%;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  width: 70px;
  text-decoration: none;
}
.modal-close:hover {
  color: black;
}

/* Demo Styles */
html,
body {
  height: 100%;
}




.modal-window div:not(:last-of-type) {
  margin-bottom: 15px;
}

small {
  color: #aaa;
}



</style>



 <style>
@media (max-width: 550px){
div[id="view1"]{
  height: 30px !important;
}
.fontAtMob{
  font-size: 9px !important;
}


}


.tblbordstylast{
  border-right: 1px #acacac solid;
   border-left: 1px #acacac solid;
      border-bottom: 1px #acacac solid;
}
.tblbordsty{
  border-right: 1px #acacac solid;
   border-left: 1px #acacac solid;
}


ul[class="tabs"]{
text-align: initial !important;
}

   #clickopinon{
cursor: pointer;
   }
 </style>

<body>

<a href="#" id="scroll" style="display: none;"><span></span></a>
@include('includes.header')
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
      <div class="row" style="width: 100%;  ">
         <div class="container">
            <div style="width: 60%; float: left;background-color: #4a88c1; color: white;padding: 10px;font-weight: 700;">Description</div>
            <div style="width: 40%; float: left;background-color: #4a88c1; color: white;padding: 10px;font-weight: 700;">Details</div>
         </div>
      </div>
      <div class="container">
         <div class="row tblbordsty" style="width: 100%;">
            <!-- <div style="width: 10%; float: left;"></div> -->
            <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; ">
               City
            </div>
            <div style="width: 40%; float: left; color: black;padding: 6px;font-weight: 500;">
               {{ ucfirst($product->city) }}
            </div>
            <!-- <div style="width: 10%; float: left;"></div> -->
         </div>
      </div>
      <div class="container">
         <div class="row tblbordsty" style="width: 100%; ">
            <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; ">
               Model
            </div>
            <div style="width: 40%; float: left; color: black;padding: 6px;font-weight: 500;">
               {{ ucfirst($product->model) }}
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row tblbordsty" style="width: 100%; ">
            <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; ">
               PTA Status
            </div>
            <div style="width: 40%; float: left; color: black;padding: 6px;font-weight: 500;">
               {{ ucfirst($product->pta) }}
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row tblbordsty" style="width: 100%; ">
            <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; ">
               Battery / Health /  Status
            </div>
            <div style="width: 40%; float: left; color: black;padding: 6px;font-weight: 500;">
               {{ $product->device_battery_status }}%
            </div>
         </div>
      </div>
      <div class="container">
         <div  class="row tblbordsty"  style="width: 100%; ">
            <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; ">
               Original Accessories
            </div>
            <div style="width: 40%; float: left; color: black;padding: 6px;font-weight: 500;">
               {{ ucfirst($product->original_accessories_available) }}
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row tblbordsty" style="width: 100%; ">
            <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; ">
               Screen Cracked
            </div>
            <div style="width: 40%; float: left; color: black;padding: 6px;font-weight: 500;">
               {{ ucfirst($product->screen_is_cracked) }}
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row tblbordsty" style="width: 100%; ">
            <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; ">
               Minor Scratches / Dents
            </div>
            <div style="width: 40%; float: left; color: black;padding: 6px;font-weight: 500;">
               {{ ucfirst($product->minor_dent_scratch) }}
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row tblbordsty" style="width: 100%; ">
            <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; ">
               Major Scratches / Dents
            </div>
            <div style="width: 40%; float: left; color: black;padding: 6px;font-weight: 500;">
               {{ ucfirst($product->major_dent_scratch) }}
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row tblbordstylast" style="width: 100%; ">
            <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500;     ">
               Device Box Available
            </div>
            <div style="width: 40%; float: left; color: black;padding: 6px;font-weight: 500;    ">
               {{ ucfirst($product->device_box_available) }}
            </div>
         </div>
      </div>
      <br/>
      <ul style=" list-style: none;width: 100%;">
         <li style="width: 50%;float: left;cursor: pointer;">
            <div onclick="ContactShow('{{ $product->id }}')" align="" style="width: 186px; text-align: center; background-color: #4a88c1 ;color: rgb(253, 245, 245);padding: 6px;font-weight: 500;float: left; ">
               <a style="text-decoration: none;color: white;" href="{{ route('personcontact',$product->id) }}"> Contact </a>
            </div>
         </li>
         <li style="width: 50%; float: left;display:none;" id="contact{{ $product->id }}">
            <div align="" style="width: 186px; text-align: center;background-color: #4a88c1 ;color: rgb(253, 245, 245);padding: 6px;font-weight: 500;float: left; ">
               {{ $product->phone }}
            </div>
         </li>
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
      <div style=" margin: 0 auto; ">
         <ul class="tabs" data-persist="true">
            <li><a  class="fontAtMob" href="#view1">ABOUT THIS PRODUCT</a></li>
            <li><a class="fontAtMob" href="#view2">ASK SELLER A QUESTION</a></li>
         </ul>
         <div class="tabcontents">
            <div id="view1">
               @if($product->detail !='')
               <p>{{ ucfirst($product->detail) }}</p>
               @else
               <p>AssalamoAlaikum Helo I want to sale Phone..............................</p>
               @endif
            </div>
            <div id="view2">
               <h4 style="background-color: #dcdcdc38;padding: 10px;">Question About this product (884) </h4>
               <p> <a href="#">Login</a> or <a href="#">Register</a> to Ask a Question</p>
               <hr />
                
                  <div class="row">
                     <!-- <div id="view2zeroAtMobile"  style="width:20%; float:left "></div> -->
                     <div id="view2FullAtMobile"  style="width:100%;  " >
                        <div class="container" id="OpinonrowOne">
                           <div class="row"  style="    background-color: #f0f0f0;   border-bottom: 2px #c4c0c0 solid;  ">
                              <div class="col-md-5" style="height: 81px;padding-top: 27px;" >
                                 <a id="clickopinon"  style="  background-color: #4a88c1; 
                                    color: white;
                                    padding: 10px 18px 10px 18px; text-decoration: none;
                                    border-radius: 4px;">POST YOUR QUESTION </a>
                              </div>
                              <div class="col-md-5" style="text-align: end;margin-top: 25px;">Pages :</div>
                              <style>
                                 .pagination{ margin-top: 10px !important; }
                              </style>
                              <div class="col-md-2" id="pages" style="padding-top: 11px;"  >{{ $questions->links() }} </div>
                           </div>
                           <div class="row" id="OpinonBox" style="display: none">
                              <div class="col-md-12" style="background-color: #f0f0f0;  " >
                                
                                 <!-- <div class="row"> 
                                    <div class="col-md-6" ><p style="text-align:left">Not Logged In</p></div>
                                     <div class="col-md-6" ><p  style="text-align:right"><button>LOGIN</button></p></div>
                                    </div> -->
                                 <hr/>
                                 <form action="{{ route('SellProductQuestion') }}" method="post">
                                    @csrf
                                    <input type="hidden" class="user_id" name="user_id" value="@if(!empty(Session::get('user')->id)) {{Session::get('user')->id}} @endif">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    
                                    <!-- <div class="row"> 
                                       <div class="col-md-6" ><p style="text-align:left">&nbsp;</p></div>
                                        <div class="col-md-6" ><p  style="text-align:right"><button>SignUp</button></p></div>
                                       </div> -->
                                    <label>Your Question</label><br/>
                                    <textarea name="comment" rows="4" cols="50" style="width:100%; border-color:#dfdfdf "  spellcheck="false"></textarea>
                                    <div class="row">
                                       <div class="col-md-6" >
                                          <p style="text-align:left" class="login_status">@if(empty(Session::get('user')->id)) You are not login please login first @endif</p>
                                       </div>
                                       <div class="col-md-6"  style="    text-align: end;">
                                          <p  style="text-align:right" class="submit_area">
                                             @if(!empty(Session::get('user')->id))
                                             <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                             @else
                                             <button class="interior" style="border-color: transparent;">
                                             <a  href="#open-modal"   class="btn btn-primary">Login</a>
                                             </button>
                                             @endif
                                          </p>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <!-- <div class="container" id="OpinonrowTwo">
                           <div class="row"  style="    background-color: #f0f0f0;   border-bottom: 5px #efefef solid; border-bottom: 1px #e3e2db solid;  ">
                              <div class="col-md-6" style="height: 81px;padding-top: 27px;" >
                                 <div style="float: left; width: 50%; height: 100%;  "><input id="opinion_search" type="search" name="srch" style="height: 42px;width: 97%; outline: none; border-color:transparent " /></div>
                                 <div style="float: left; width: 50%; height: 100%; ">
                                    <button id="opinion_search_btn" style="border: none; outline: none;cursor: pointer;">
                                       <p id="srchoption" style="  
                                          height: 43px;
                                          font-size: .9vw;
                                          text-align: center;  background-color: #f9f9f9;   color: #848388;  padding: 13px 18px 10px 18px; text-decoration: none; border-radius: 4px;   font-weight: 700; border: 1px #c4c0c0 solid;">SEARCH OPINIONS </p>
                                    </button>
                                 </div>
                              </div>
                              <div id="sortBy" class="col-md-3" style="color: #848388; font-size: 20px; text-align: right; padding-top: 35px;        " >  Sort By: </div>
                              <div class="col-md-3" style="color: black; font-size: 20px ; padding-top: 19px;              " >
                                 <div class="form-group">
                                    <select class="form-control" id="asc_desc" style="    margin-top: 9px;">
                                       <option selected="" disabled="">Select View</option>
                                       <option value ="desc">Newest First</option>
                                       <option value="asc" >Older First</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           </div> -->
                       
                     </div>
                     <!-- <div id="view2MobileZero" style="width:20%; float:left " ></div> -->
                  </div>
               <br/>

                @if($questions->count() > 0)
                  @foreach($questions as $row)
                      @php
                        $date = Carbon\Carbon::parse($row->created_at);
                        $now = Carbon\Carbon::now();
                        $diff = $date->diffInDays($now);
                      @endphp
                      <div class="question-block">
                        <div class="question-content-block">
                          
                          <p style="font-weight: 500; text-align: justify;"><font style="background-color: #8cbce5; padding: 10px; color: white;" > Q</font> {{ucfirst($row->question)}} </p>
                          <p style="color: #beb4b4; margin-left: 48px;">{{ $row->user->name }} {{ $diff }} days ago</p>

                        </div>

                        <div class="question-reply-block">
                          @if(!empty(Session::get('user')->id))
                            @if(Session::get('user')->id == $product->user_id)
                              <button onclick="replybox('{{ $row->id }}');">Reply</button>

                            @endif
                          @endif
                        </div>


                        <div class="row" id="ReplyBox{{ $row->id }}" style="display: none;  margin: 0px auto;margin-top: 20px;width: 80%;">
                           <div class="col-md-12" style="background-color: #f0f0f0; border: 1px #81818133 solid; " >
                              
                              <form action="{{ route('QuestionReply') }}" method="post">
                                 @csrf
                                 <input type="hidden" name="question_id" value="{{ $row->id }}">

                                 <label>Your Reply</label><br/>
                                 <textarea name="reply" rows="4" cols="50" style="width:100%; border-color:#dfdfdf "  spellcheck="false"></textarea>
                                 <div class="row">
                                    <div class="col-md-6" >
                                       <p style="text-align:left" class="login_status">@if(empty(Session::get('user')->id)) You are not login please login first @endif</p>
                                    </div>
                                    <div class="col-md-6" >
                                       <p  style="text-align:right" class="submit_area">
                                          @if(!empty(Session::get('user')->id))
                                          <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                          @else
                                          <!-- <button type="button" id="sample" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Login</button> -->
                                          <!--  <a href="/Login" class="btn btn-primary">Sign Up</a> -->
                                          <!-- <button type="button" id="mybtnNext" class="btn btn-primary">Login</button> -->
                                          <button class="interior" style="border-color: transparent;">
                                          <a  href="#open-modal"   class="btn btn-primary">Login</a>
                                          </button>
                                          @endif
                                       </p>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>

                        @if($row->replies->count() > 0)
                          @foreach($row->replies as $reply)
                            <div class="seller-reply-block">
                                <p style="font-weight: 500;"> <font style="background-color: #c2bebe; padding: 10px; color: white;"> A</font><font style="margin-left: 5px;">{{ ucfirst($reply->reply) }}</font> </p>
                            </div>
                
                          @endforeach
                        @endif 

                      </div>   
                  @endforeach
               @else
                no question available
               @endif
            
             
            </div>
            <div id="view2MobileZero" style="width:20%; float:left " ></div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
</div>
<br/>


  <div id="open-modal" class="modal-window">
        <div>


          <a href="#" title="Close" class="modal-close">
          
           <img  src="{{ asset('storage/images/download__3_-removebg-preview (2) (1).png')}}"  />
          </a>




          <h1>Sign In</h1>
          <div class="row"><p class="alert alert-warning ErrorMsg"></p></div>
          <form method="post">
            @csrf
            <div class="form-group">
                <label class="info-title">Email</label>
                <input type="text" name="login_email" id="username" class="form-control unicase-form-control text-input" value="{{ old('login_email') }}" required placeholder="Email">
            </div>
            <div class="form-group">
                <label class="info-title">Password</label>
                <input type="password" id="password" name="login_password" class="form-control unicase-form-control text-input" placeholder="Password" value="">
                      <br/>
                      <input id="passy" type="checkbox" onclick="myShowPassFunction()">&nbsp;&nbsp;&nbsp;<label style="    font-weight: 500 !important;" for="passy">Show Password</label>
              </div>  

            <button style="background-color: #4a88c1 !important;" type="button" class="btn-upper btn subbtn checkout-page-button modal_login">Login</button>
            <a href="{{url('/')}}/Login" > <button type="button" class="btn-upper btn" >SignUp</button></a>
            <a href="/password/reset" class=" col-md-offset-2 btn-upper btn subbtn checkout-page-button" style="background: #e30070;     margin-left: 72px;">Forgot Password</a>
          </form>
                         
                     
                      
        </div>
      </div>
@include('includes.footer')
</body>




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
<!-- 
<script src="js/jquery-slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script> -->


<script type="text/javascript">
function replybox(id)
{
  $('#ReplyBox'+id).toggle();
}
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

<script>
function clickReply(id){$("#ReplyBox"+id).toggle();}

$(document).ready(function(){
  $('.select2').select2({
    width: 'resolve',
    theme: "classic"
});

    $('.customer-logos').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
 <script type="text/javascript">
     $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
  </script>
  <script type="text/javascript">
    $('#theCarousel').carousel({
  interval: 2000
})

$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  }
  else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});


  </script>
<script>
  $('.ErrorMsg').hide();
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

  $('#asc_desc').change(function(){
    var val = $('#asc_desc option:selected').val();
    var id = '{{ $product->id }}';
    $('#opinion_search').val('');
    FetchDataAscDesc(0,val,id);

  });

  $('#opinion_search_btn').click(function(){
      var val = $('#opinion_search').val();
      $('#asc_desc').val('Select View');
      FetchOpinionSearchData(0,val,'{{ $product->id }}');
  });

  function FetchDataAscDesc(page,val,id)
  {
    $.ajax({
     url:"/ProductOpinionDataAscDesc?page="+page,
     type:"get",
     data:{order:val,id:id},
     success:function(data)
     {
        $('.opinions_data').html(data.output);
        $('#pages').html(data.pagination);
      // $('#view2FullAtMobile').html(data);
     }
    });
  }

  function FetchOpinionSearchData(page,val,id)
  {
    $.ajax({
     url:"/ProductOpinionSearchData?page="+page,
     type:"get",
     data:{query:val,id:id},
     success:function(data)
     {
        $('.opinions_data').html(data.output);
        $('#pages').html(data.pagination);
      // $('#view2FullAtMobile').html(data);
     }
    });
  }

  function FetchData(page,id)
  {
    $.ajax({
     url:"/ProductOpinionData?page="+page,
     type:"get",
     data:{id:id},
     success:function(data)
     {
        $('.opinions_data').html(data.output);
        $('#pages').html(data.pagination);
      // $('#view2FullAtMobile').html(data);
     }
    });
  }

  // $(document).on('click', '.pagination a', function(event){
  //     event.preventDefault();
  //     var page = $(this).attr('href').split('page=')[1]; 
  //     if($('#asc_desc option:selected').val()!='Select View')
  //     {
  //       var val = $('#asc_desc option:selected').val();
  //       var id = '{{ $product->id }}';
  //       FetchDataAscDesc(page,val,id);
  //     }
  //     else if($('#opinion_search').val() !=''){
  //       FetchOpinionSearchData(page,$('#opinion_search').val(),'{{ $product->id }}');
  //     }
  //     else{FetchData(page,'{{ $product->id }}')};
  //   });

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

  $('.modal_login').click(function(){
    var email = $('#username').val();
    var pass = $('#password').val();
    var token = '{{ csrf_token() }}';
    var btn_html = '<button type="submit" class="btn btn-primary waves-effect waves-light save_btn">Submit</button>';
    $.ajax({
      url:"{{ route('UserModalLogin') }}",
      type:"post",
      data:{_token:token,login_email:email,login_password:pass},
      success:function(data){
        if(data.status=="")
        {
          $('.login_status').html('');
          $('.user_id').val(data.id);
          $('.modal_close').click();
          $('.modal-close').click();
          $('.modal-window').css('display','none');
          $('.submit_area').html(btn_html);
        }
        else{
            $('.ErrorMsg').show();
            $('#username').val(data.email);
            $('#password').val('');
            $('.ErrorMsg').text(data.msg);
        }
      }
    });
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
$(document).ready(function(){
  $("#clickopinon").click(function(){
    $("#OpinonBox").toggle();
  });

  $(".clickReply").click(function(){
    var id = $(this).data('id');
    $("#ReplyBox"+id).toggle();
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
   </script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}



// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}

</script>


<script>
// Get the modal


function modalTwoagain() {
  var modal = document.getElementById("myModaltwo");

// Get the button that opens the modal
var btn = document.getElementById("mybtnNext");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}






$('.cloudzoom-gallery').click(function(){
  $(this).css('border', '1px red solid !important');
});

</script>
<script>
function myShowPassFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</html>