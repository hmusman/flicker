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

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #004488;
  color: white;
}
</style>
@if($products->count()>0)
    @foreach($products as $row)
      @php $img1 = 'storage/admin/images/sellproduct/thumbnail/215_'.$row->img1 @endphp
      @php $img2 = 'storage/admin/images/sellproduct/thumbnail/215_'.$row->img2 @endphp
      @php $img3 = 'storage/admin/images/sellproduct/thumbnail/215_'.$row->img3 @endphp
      <div style="width: 100%; margin-top: 30px; float: left;">
          <div style="width: 30%; float: left;">

              <div class="autoplayFeatures">
                  <img src="{{ asset($img1) }}" alt="Trulli" >
                  <img src="{{ asset($img2) }}" alt="Trulli">
                  <img src="{{ asset($img3) }}" alt="Trulli">
              </div>
            
            </div>
            <div style="width: 70%; float: left;border-bottom: 1px #d8d5d5 solid;" >
            
            
              <h4 style="color: black">{{ ucwords($row->model) }}</h4>
              <!-- <p style="color: #969494;">&#x2713;Collisimo&#x2713;2-4 Jours&#x2713;Guarntie 2 ans&#x2713; FR Plug</p> -->
            



              <div class="row">
                <div class="col-md-6">

                    @if($row->device_status=="Fair")
                        <font style="background-color:  #d5d3cd;  padding: 5px 10px 5px 10px;margin-right: 5px;">Excellent</font><font style="  margin-right: 5px;  background-color: #d5d3cd; padding: 5px 20px 5px 20px;">Good</font><font style="    background-color: #f6ba10;    padding: 5px 30px 5px 30px;">Fair</font>

                    @elseif($row->device_status=="Good")
                        <font style="background-color:#d5d3cd ;  padding: 5px 10px 5px 10px;margin-right: 5px;">Excellent</font><font style="  margin-right: 5px;  background-color:#f6ba10; padding: 5px 20px 5px 20px;">Good</font><font style="    background-color: #d5d3cd;    padding: 5px 30px 5px 30px;">Fair</font>
                    @elseif($row->device_status=="Excellent")
                        <font style="background-color: #f6ba10;  padding: 5px 10px 5px 10px;margin-right: 5px;">Excellent</font><font style="  margin-right: 5px;  background-color: #d5d3cd; padding: 5px 20px 5px 20px;">Good</font><font style="    background-color: #d5d3cd;    padding: 5px 30px 5px 30px;">Fair</font>

                    @endif

                  <!-- <font style="background-color: #f6ba10;  padding: 5px 30px 5px 30px;margin-right: 5px;">{{ $row->device_status }}</font> -->


                </div>
                <div class="col-md-6"></div>
              </div>

              <div class="row">
                <div class="col-md-6">
               <p style="    position: relative;
                  top: 43px;
                  left: 25px;
                  font-weight: 600; color: blue;
              ">  PKR</p>
              <p style="    color: blue;
                  font-size: 34px;
                  padding: 20px;
                  font-weight: 700;"> {{ $row->price }}</p>
                </div>


                <div class="col-md-6">

                  <div style="width: 50%; float: left; color: black;">
                  <p>City:</p>
                      <p>PTA STATUS:</p>
                          <p>Date Posted:</p>
                  </div>
                  <div style="width: 50%; float: left; color: black;">
                  
                    <p>{{ ucfirst($row->city) }}</p>
                    <p>{{ ucfirst($row->pta) }}</p>
                    <p>{{ date('d',strtotime($row->created_at)) }} {{ date('M',strtotime($row->created_at)) }} , {{ date('Y',strtotime($row->created_at)) }}</p>
                  
                  </div>
                </div>
              </div>

              <ul>
                <li>
                    <a href="{{ route('SellProductDetail',$row->id) }}" style="background-color: blue;width: 120px;  border-radius: 3px  ; padding: 9px;text-align: center;font-weight: 700;font-size: larger;cursor: pointer;text-decoration: none;">Detail</a>

                </li>
                <li>
                    <p class="myBtn" onclick="ContactShow('{{ $row->id }}')" style="background-color: blue;width: 120px;  border-radius: 3px  ; padding: 9px;text-align: center;font-weight: 700;font-size: larger;cursor: pointer;">Contact</p>

                </li>
                <li><p id="contact{{ $row->id }}" style="color: black; display: none;border: 1px solid #ccc;padding: 10px;margin-left: 10px;font-size: 16px;font-weight: bold;">{{ $row->phone }}</p></li>
              </ul>
              

              
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