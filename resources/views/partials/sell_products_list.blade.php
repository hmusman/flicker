<style>

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

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #004488;
  color: white;
}

.one{
      /* width: auto !important; */
      height: 50% !important;
      width: 50% !important;
}
</style>
<div class="col-md-12">
        
        {!! $products->links() !!}

    </div>
<div class="col-md-12" style="color: black">
  Showing 
  {{ ($products->currentpage() - 1) * $products ->perpage() + 1 }} To 
    @if($products->lastPage() == $products->currentpage())
      {{  $products ->total()  }}
    @else
      {{ $products->currentpage() * $products ->perpage() }}
    @endif
   Of {{  $products ->total()  }} Records

  {{-- ($products->currentpage() -1) * $products ->perpage() + $products->count() }} of {{  $products ->total()  --}}
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
                    <a href="{{ route('SellProductDetail',$row->id) }}" style="    background-color: #4a88c1; color: white ; width: 120px;  border-radius: 3px  ;    padding: 5px 21px 5px 21px;text-align: center;cursor: pointer;text-decoration: none;">Detail</a>

                </li>
                <li>
                  <a style="text-decoration: none;
    color: white;" href="{{ route('personcontact',$row->id) }}"> <p class="myBtn" onclick="ContactShow('{{ $row->id }}')" style="background-color: #4a88c1;  border-radius: 3px  ;    padding: 2.2px 12px 2.2px 12px;text-align: center;cursor: pointer;">Contact</p></a> 

                </li>
                <li><p id="contact{{ $row->id }}" style="color: black; display: none;border: 1px solid #ccc;padding: 10px;margin-left: 10px;font-size: 16px;font-weight: bold;">{{ $row->phone }}</p></li>
              </ul>
              

              <hr style="" />
            </div>




<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
       <h2>Modal Header</h2>
      <span class="close">&times;</span>
     
    </div>
    <div class="modal-body">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>








      </div>
    @endforeach

    <div class="col-md-12">
        
        {!! $products->links() !!}

    </div>
@else
  
  <div class="col-md-12"><div class="alert alert-warning">No Records Found Please refine your filter!</div></div>

@endif





<script>
// Get the modal
// var modal = document.getElementById("myModal");

// Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
// btn.onclick = function() {
//   modal.style.display = "block";
// }

// When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// }

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }


</script>