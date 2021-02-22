<style>
.one{
      /* width: auto !important; */
      height: 50% !important;
      width: 50% !important;
}
@media (max-width: 550px){

ul[class="ulatMob"]{
  margin-top: 0px !important;
}
.paddAtMob{
  padding: 5px 5px 5px 5px !important;
}
.paadOnMob2{
      padding: 5px 10px 5px 10px !important;
}
.mobNameResp{
  margin-left:10px !important;
}
.form-control {
    
    width: 97% !important;
}
}

.modal {
  display: none;
    position: fixed; /* Stay in place */
  z-index: 9999; /* Sit on top */
  padding-top: 0px; /* Location of the box */
  left: 0;
  top: 0;
  width: 40%; /* Full width */
  height: 37%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
 
 
    top: 249px;
        margin: 0px auto;
            transition: all 0.3s;
            background-color: white;
box-shadow: 0px 0px 10px gray !important;
    border-radius: 15px !important;
}
.modal.visible {
  display: block;
}

.modal__header {
  color: white;
  background: white;
  line-height: 50px;
  text-align: center;
  position: relative;
  height: 50px;
  box-sizing: border-box;
}
.modal__header a {
  position: absolute;
  top: 0;
  right: 0;
  text-decoration: none;
  color: black;
  font-weight: bold;
  display: block;
  padding: 0 20px;
  font-size: 16px;
  background: white;
  height: 100%;
}


</style>




<div class="col-md-12">
   {!! $products->links() !!}
</div>
<div  style="position: relative !important;color: black;top: -48px; !important">
   <p>Showing <font style="color: #4a88c1 !important;  ">
      {{ ($products->currentpage() - 1) * $products ->perpage() + 1 }} To 
      @if($products->lastPage() == $products->currentpage())
      {{  $products ->total()  }}
      @else
      {{ $products->currentpage() * $products ->perpage() }}
      @endif</font>
      of <font style="color: #4a88c1 !important;  ">{{  $products ->total()  }}  Records </font>
      {{-- ($products->currentpage() -1) * $products ->perpage() + $products->count() }} of {{  $products ->total()  --}}
   </p>
</div>
@if($products->count()>0)
@foreach($products as $row)
@php $img1 = 'storage/admin/images/sellproduct/thumbnail/215_'.$row->img1 @endphp
@php $img2 = 'storage/admin/images/sellproduct/thumbnail/215_'.$row->img2 @endphp
@php $img3 = 'storage/admin/images/sellproduct/thumbnail/215_'.$row->img3 @endphp
<div style="width: 100%; margin-top: 30px; float: left;">
   <div style="width: 25%; float: left; height: 100% ; " >
      <div style="height: 100%">
         <div class="autoplayFeatures" style="text-align: center;" >
            <img src="{{ asset($img1) }}" class="one" alt="Trulli" >
            <img src="{{ asset($img2) }}" class="one" alt="Trulli">
            <img src="{{ asset($img3) }}" class="one" alt="Trulli">
         </div>
      </div>
      <!-- 
         <div class="autoplayFeatures" style="text-align: center;" >
             <img src="{{ asset($img1) }}" class="one" alt="Trulli" >
             <img src="{{ asset($img2) }}" class="one" alt="Trulli">
             <img src="{{ asset($img3) }}" class="one" alt="Trulli">
         
         
         
         </div> -->
   </div>
   <div style="width: 75%; float: left;" >
      <h4 class="mobNameResp" style="color: black ; margin-top: 0px !important ;font-size: 19px;">{{ ucwords($row->model) }}</h4>
      <!-- <p style="color: #969494;">&#x2713;Collisimo&#x2713;2-4 Jours&#x2713;Guarntie 2 ans&#x2713; FR Plug</p> -->
      <div class="row">
         <div class="col-md-6">
            @if($row->device_status=="Fair")
            <font class="paddAtMob" style="background-color:  #d5d3cd;  padding: 5px 10px 5px 10px;margin-right: 5px;">Excellent</font><font style="  margin-right: 5px;  background-color: #d5d3cd; padding: 5px 20px 5px 20px;">Good</font><font class="paadOnMob2" style="   background-color: #f6ba10;    padding: 5px 30px 5px 30px;">Fair</font>
            @elseif($row->device_status=="Good")
            <font class="paddAtMob" style="background-color:#d5d3cd ;  padding: 5px 10px 5px 10px;margin-right: 5px;">Excellent</font><font style="  margin-right: 5px;  background-color:#f6ba10; padding: 5px 20px 5px 20px;">Good</font><font  class="paadOnMob2" style="    background-color: #d5d3cd;    padding: 5px 30px 5px 30px;">Fair</font>
            @elseif($row->device_status=="Excellent")
            <font class="paddAtMob" style="background-color: #f6ba10;  padding: 5px 10px 5px 10px;margin-right: 5px;">Excellent</font><font style="  margin-right: 5px;  background-color: #d5d3cd; padding: 5px 20px 5px 20px;">Good</font><font class="paadOnMob2" style="    background-color: #d5d3cd;    padding: 5px 30px 5px 30px;">Fair</font>
            @endif
            <!-- <font style="background-color: #f6ba10;  padding: 5px 30px 5px 30px;margin-right: 5px;">{{ $row->device_status }}</font> -->
         </div>
         <div class="col-md-6"></div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <p style="    position: relative;
               top: 3px;
               left: 25px;
               font-weight: 600; color: #4a88c1;
               ">  PKR</p>
            <p style="    color: #4a88c1;
               font-size: 24px;
               margin-top: -22px !important;
               padding-left: 19px;
               font-weight: 700;
               "> {{ $row->price }}</p>
         </div>
         <div class="col-md-6">
            <div style="width: 50%; float: left; color: black;     color: #0b0c0c;  font-size: 13px; font-weight: 600;">
               <p>City:</p>
               <p>PTA STATUS:</p>
               <p>Date Posted:</p>
            </div>
            <div style="width: 50%; float: left; color: black;  color: #0b0c0c;  font-size: 13px; font-weight: 600;">
               <p>{{ ucfirst($row->city) }}</p>
               <p>{{ ucfirst($row->pta) }}</p>
               <p>{{ date('d',strtotime($row->created_at)) }} {{ date('M',strtotime($row->created_at)) }} , {{ date('Y',strtotime($row->created_at)) }}</p>
            </div>
         </div>
      </div>
      <ul class="ulatMob" style="margin-top: -51px ; position: relative;
         margin-bottom: -11px !important;padding-left: 19px;;">
         <li>
            <a href="{{ route('SellProductDetail',$row->id) }}" 
               style="background-color: #4a88c1; color: white ; width: 120px;  border-radius: 3px;padding: 5px 21px 5px 21px;text-align: center;cursor: pointer;text-decoration: none;">Detail</a>
         </li>
         <!-- <li>
            <a style="text-decoration: none;
            color: white;" href="{{ route('personcontact',$row->id) }}"> <p class="myBtn" onclick="ContactShow('{{ $row->id }}')" style="background-color: #4a88c1;  border-radius: 3px;padding: 2.2px 12px 2.2px 12px;text-align: center;cursor: pointer;">Contact</p></a>
            </li> -->
         <!-- 
            New Correct PopUp -->
         <li>
            <a style="text-decoration: none;  color: white;" href="javascript:void(0)" class="js-open-modal"    >
               <p id="myBtn" class="myBtn" data-id="{{ $row->id }}" onclick="ContactShow('{{ $row->id }}')"  style="background-color: #4a88c1;border-radius: 3px;padding: 2.2px 12px 2.2px 12px;text-align: center;cursor: pointer;">Contact</p>
            </a>
         </li>









<!-- partial:index.partial.html -->

<div class="modal">
  <div class="modal__header">
    modal header
    <a href="javascript:void(0)" class="js-close-modal">X</a>
  </div>
   <div class="row">
                  <div class="container">
                     <h3 class="fontUbantu" style="color: #0b0c0c;
                        text-align: center;
                        font-weight: 500;
                        font-size: 25px;
                        ">Personal Contact</h3>
                     <hr style="background: #0071e3;
                        width: 6%;
                        height: 1px;"/>
                     <br/>
                     <div class="row">
                        <!-- <div class="col-md-4" style="text-align: center"> <img style="width: 60%;height: 250px;" src="{{ asset('/storage/images/person_contact.jpg') }}" alt="Trulli" /></div> -->
                        <div class="col-md-12" style="color: #0b0c0c">
                           <div class="row">
                              <div class="col-md-4 " style="color: #0b0c0c; background-color:#f8f7f7;">
                                 <p class="leftdiv" style="" class="fontUbantu">NAME</p>
                              </div>
                              <div class="col-md-8" style=" background-color:#f8f7f7;">
                                 <p class="fontUbantu leftdiv" id="user_name">{{$row->user_name}}</p>
                              </div>
                           </div>
                           <!-- <div class="row">
                              <div class="col-md-4 " style="color: #0b0c0c; ">
                              <p class="leftdiv" style="" class="fontUbantu">CITY</p></div>
                               <div class="col-md-8" style=" ">
                               <p class="fontUbantu leftdiv">{{ $row->city }}</p>
                              </div>
                              </div> -->
                           <div class="row">
                              <div class="col-md-4 " style="color: #0b0c0c; ">
                                 <p class="leftdiv" style="" class="fontUbantu">CELL</p>
                              </div>
                              <div class="col-md-8" >
                                 <p class="fontUbantu leftdiv" id="phone">{{$row->phone}}</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

</div>
<!-- partial -->
















         <!-- Model Start -->
         <!-- Model End -->
         </li>
         <li>
            <p id="contact{{ $row->id }}" style="color: black; display: none;border: 1px solid #ccc;padding: 10px;margin-left: 10px;font-size: 16px;font-weight: bold;">{{ $row->phone }}</p>
         </li>
      </ul>
      <hr style="" />
   </div>
   <!-- <button id="myBtn">Open Modal</button> -->
</div>
@endforeach
<div class="col-md-12">
   {!! $products->links() !!}
</div>
@else
<div class="col-md-12">
   <div class="alert alert-warning">No Records Found Please refine your filter!</div>
</div>
@endif

  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

  <script>
  $(".js-open-modal").click(function(){
  $(".modal").addClass("visible");
});

$(".js-close-modal").click(function(){
  $(".modal").removeClass("visible");
});

$(document).click(function(event) {
  //if you click on anything except the modal itself or the "open modal" link, close the modal
  if (!$(event.target).closest(".modal,.js-open-modal").length) {
    $("body").find(".modal").removeClass("visible");
  }
});

  </script>


  <script>
   $(document).ready(function() {
        $("#myBtn").click(function() { 
          let id = $(this).data('id');
         $.ajax({  //create an ajax request to display.php
          type: "GET",
          url: "/students/"+id,   
          success: function (data) {
           $('#user_name').text(data.name);
            
          }
        });
      });
      });  
</script>