@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->


@section('content')
	
	<section style="padding-top: 24px;">

<div class="container" style="padding: 0;margin: 0;">
    <div class="col-sm-12">
  <ul id="tabs" class="nav nav-pills nav-justified maintab">
    <li class="active">
      <a  class="inactiveLink comapnytab">
         Company
        <span id="ok-icon" class="glyphicon glyphicon-ok hidden"></span>
      </a>
    </li>
    <li>
      <a   class="inactiveLink modeltab colortab">
           Model
      </a>
    </li>
    <li>
      <a   class="inactiveLink varientstab colortab">
          Varients
      </a>
    </li>
    <li>
      <a   class="inactiveLink storagetab colortab">
           Storage Space
      </a>
    </li>
    <li>
      <a   class="inactiveLink questionstab colortab">
         Questions
      </a>
    </li>
  </ul>
</div>



<div class="col-sm-12">
<div class="tab-content">
<!--------------------comapny tab------------>
<!-- FIRST TAB -->
<div class="tab-pane active comapnytabin">
  <div class="container-fluid" style="padding: 0;margin: 0;">




 <div class="col-sm-12">
  <div class="col-lg-8 col-sm-12" style="padding: 0;">

                <div class="col-sm-12 mainboxcompany" >
              <div class="col-sm-5" align="center">
                  <img class="img-responsive" style="height: 110px;" src="{{ asset('storage/images/9d91279a8fed98921e930d3aca3470d2.png') }}">
              </div>
              <div class="col-sm-7" style="margin-top: 2%;">
                 <!-- <h3>Apple </h3> -->

                  <button  class="btn button3 selectcompanybtn"> Select Company</button>

              </div>
          </div>
                  <div class="col-sm-12 mainboxcompany" >
              <div class="col-sm-5" align="center">
                  <img class="img-responsive" style="height: 110px;" src="{{ asset('storage/images/dc2becfa4f7e116bdf8d0c313f4aa5ee.png') }}">
              </div>
              <div class="col-sm-7" style="margin-top: 2%;">
                 <!-- <h3>Honor </h3> -->

                  <button  class="btn button3 selectcompanybtn"> Select Company</button>

              </div>
          </div>
                  <div class="col-sm-12 mainboxcompany" >
              <div class="col-sm-5" align="center">
                  <img class="img-responsive" style="height: 110px;" src="{{ asset('storage/images/b15ebabfbcbad4d9472c5f6dd002ebcd.png') }}">
              </div>
              <div class="col-sm-7" style="margin-top: 2%;">
                 <!-- <h3>Huawei </h3> -->

                  <button  class="btn button3 selectcompanybtn"> Select Company</button>

              </div>
          </div>
                  <div class="col-sm-12 mainboxcompany" >
              <div class="col-sm-5" align="center">
                  <img class="img-responsive" style="height: 110px;" src="{{ asset('storage/images/81cf448c2c60c4c75fc3bc271153d590.png') }}">
              </div>
              <div class="col-sm-7" style="margin-top: 2%;">
                 <!-- <h3>Oppo </h3> -->

                  <button  class="btn button3 selectcompanybtn"> Select Company</button>

              </div>
          </div>
                  <div class="col-sm-12 mainboxcompany" >
              <div class="col-sm-5" align="center">
                  <img class="img-responsive" style="height: 110px;" src="{{ asset('storage/images/70f2484c600a0465d46e48ba1fe2dd61.png') }}">
              </div>
              <div class="col-sm-7" style="margin-top: 2%;">
                 <!-- <h3>Samsung </h3> -->

                  <button  class="btn button3 selectcompanybtn"> Select Company</button>

              </div>
          </div>
                  <div class="col-sm-12 mainboxcompany" >
              <div class="col-sm-5" align="center">
                  <img class="img-responsive" style="height: 110px;" src="{{ asset('storage/images/4e60fd1247dabd84227b9f6fc9163e79.png') }}">
              </div>
              <div class="col-sm-7" style="margin-top: 2%;">
                 <!-- <h3>Vivo</h3> -->

                  <button  class="btn button3 selectcompanybtn"> Select Company</button>

              </div>
          </div>
                <div class="clearfix"></div>
  </div>
  <div class="col-lg-4 col-sm-12 ">
    <div class="col-sm-12 div_shadow">
      <div class=" offer_div" align="center">
      <h3>Your Flickerfone offer</h3>
    </div>
    <div class=" dollar_sign" align="center">PKR  0</div>
    </div>

    <div class="col-sm-12" align="center" style="padding: 4px">
      <p></p>
    </div>
  </div>

 </div>


  </div> <!-- end container fluid -->
</div> <!-- end comapny content -->

<!-- FIRST TAB -->
<div class="tab-pane " id="questions">
  <div class="container-fluid">
 <div class="col-sm-12">
    <div class="col-lg-2 col-md-6 col-sm-12" align="center">
      <img id="questionimg" class="img-responsive" src="{{ asset('storage/images/phone1.png') }}">
    </div>
    <div class="col-lg-10 col-md-6 col-sm-12">
       <h3 id="questiontext">Samsung Galaxy S10+ 128GB(Other)</h3>
       <br>
       <a id="questionbtn" class="pointer">
       Change Storage Size</a>
    </div>
   </div>

 <div class="col-sm-12">
     <h1 class="heading_cart">Help us give you an accurate price</h1>

     <p class="heading_cart2">
     	Please answer the following questions as best as you can. If you choose to<br> ship us your device. It will be professionaly inspected at our facilities.
 	</p>
 </div>

 <div class="col-sm-12" style="padding: 0">
 	<div class="col-lg-8 col-sm-12" style="padding: 0">

<ul class="list-group pclist" style="padding-top: 20px;">
  <li class="list-group-item justify-content-between">
    Does the device have minor scratches/ minor dent?
   		<span style="float: right;">
   	<button type="button" class="btn button3 y1">YES</button>
    		<button type="button" class="btn button3 n1">NO</button>
    	</span>

  </li>
  <li class="list-group-item justify-content-between">
    <span style="max-width: 525px;display: inline-block;">Does the device have multiple scratches / multi dents / major scratch?</span>
    <span style="float: right;">
   	<button type="button" class="btn button3 y2">YES</button>
    		<button type="button" class="btn button3 n2">NO</button>
    	</span>
  </li>
  <li class="list-group-item justify-content-between">
    Does the device have a screen replacement?
    <span style="float: right;">
   	<button type="button" class="btn button3 y3">YES</button>
    		<button type="button" class="btn button3 n3">NO</button>
    	</span>
  </li>

  <li class="list-group-item justify-content-between">
    Are the accessories original?
    <span style="float: right;">
   	<button type="button" class="btn button3 y5">YES</button>
    		<button type="button" class="btn button3 n5">NO</button>
    	</span>
  </li>
  <li class="list-group-item justify-content-between">
    Is your device a kit?
    <span style="float: right;">
    <button type="button" class="btn button3 y6">YES</button>
        <button type="button" class="btn button3 n6">NO</button>
      </span>
  </li>

  <li class="list-group-item justify-content-between">
   Select the battery status on a scale from 1 – 10?
    <span style="float: right;">
    <span style="float: right;">
      <select  class="battery cselect">
        <option selected disabled>Status</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
      </select>

    </span>
      </span>
  </li>
</ul>


 	</div>
 	<div class="col-lg-4 col-sm-12 ">
 		<div class="col-sm-12 div_shadow">
 			<div class=" offer_div" align="center">
 			<h3>Your flickerfone offer</h3>
 		</div>
 		<div class=" dollar_sign totalprice" align="center">PKR  0</div>
 		<div class=" offer_div" align="center">
      <a href="login.html">
 			<button class="btn button4">Sell Device</button>
 		 </a>
    </div>
 		</div>

 		<div class="col-sm-12" align="center" style="padding: 4px">
 			<p>Please Note:We do not pay for devices that have been reported lost or stolen.</p>
 		</div>
 	</div>

 </div>


  </div> <!-- end container fluid -->
</div> <!-- end Tab1 content -->


<div class="tab-pane" id="models">
    <div class="container-fluid">
      <div class="col-sm-12">
    <div class="col-lg-2 col-md-6 col-sm-12" align="center">
      <img id="modelimg" class="img-responsive" src="{{ asset('storage/images/phone1.png') }}">
    </div>
    <div class="col-lg-10 col-md-6 col-sm-12">
       <h3 id="modeltext">Samsung Galaxy S10+ 128GB(Other)</h3>
       <br>
       <a id="modelbtn" class="pointer">
       Change Company</a>
    </div>
   </div>
    <div class="col-lg-8 col-sm-12 inmodel" style="padding: 0;">
    </div>
  <div class="col-lg-4 col-sm-12 ">
    <div class="col-sm-12 div_shadow">
      <div class=" offer_div" align="center">
      <h3>Your flickerfone offer</h3>
    </div>
    <div class=" dollar_sign" align="center">PKR  0</div>
    </div>

    <div class="col-sm-12" align="center" style="padding: 4px">
      <p>Please Note:We do not pay for devices that have been reported lost or stolen.</p>
    </div>
  </div>

  </div> <!-- end container-fluid -->
</div> <!-- end tab-content -->

<!-------------varient start ------>
<div class="tab-pane" id="varient">
    <div class="container-fluid">
      <div class="col-sm-12">
    <div class="col-lg-2 col-md-6 col-sm-12" align="center">
      <img id="colorimg" class="img-responsive" src="{{ asset('storage/images/phone1.png') }}">
    </div>
    <div class="col-lg-10 col-md-6 col-sm-12">
       <h3 id="colortext">Samsung Galaxy S10+ 128GB(Other)</h3>
       <br>
       <a id="colorbtn" class="pointer">
       Change Model</a>
    </div>
   </div>
    <div class="col-lg-8 col-sm-12 invarient" style="padding: 0;">
    </div>
  <div class="col-lg-4 col-sm-12 ">
    <div class="col-sm-12 div_shadow">
      <div class=" offer_div" align="center">
      <h3>Your flickerfone offer</h3>
    </div>
    <div class=" dollar_sign" align="center">PKR  0</div>
    </div>

    <div class="col-sm-12" align="center" style="padding: 4px">
      <p>Please Note:We do not pay for devices that have been reported lost or stolen.</p>
    </div>
  </div>

  </div> <!-- end container-fluid -->
</div> <!-- end tab-content -->

<!--------------Strorage ---------->
<!-------------varient start ------>
<div class="tab-pane" id="storage">
    <div class="container-fluid">
  <div class="col-sm-12">
    <div class="col-lg-2 col-md-6 col-sm-12" align="center">
      <img id="storageimg" class="img-responsive" src="{{ asset('storage/images/phone1.png') }}">
    </div>
    <div class="col-lg-10 col-md-6 col-sm-12">
       <h3 id="storagetext">Samsung Galaxy S10+ 128GB(Other)</h3>
       <br>
       <a id="storagebtn" class="pointer">
       Change Varient</a>
    </div>
   </div>
    <div class="col-lg-8 col-sm-12 instorage" style="padding: 0;">
    </div>
  <div class="col-lg-4 col-sm-12 ">
    <div class="col-sm-12 div_shadow">
      <div class=" offer_div" align="center">
      <h3>Your flickerfone offer</h3>
    </div>
    <div class=" dollar_sign" align="center">PKR  0</div>
    </div>

    <div class="col-sm-12" align="center" style="padding: 4px">
      <p>Please Note:We do not pay for devices that have been reported lost or stolen.</p>
    </div>
  </div>

  </div> <!-- end container-fluid -->
</div> <!-- end tab-content -->

</div>

</div>


</div>
</section>


<script type="text/javascript">
 var  ajaxmodels;
 var ajaxcolors;
 var ajaxstorage;

  document.addEventListener("DOMContentLoaded", function(event) {

   ajaxmodels =  function (data){
        $.ajax('main/loadmodels.json', {
        type: 'GET',  // http method
        timeout: 10000,
        data: {

          id:  data
         },
        success: function (data, status, xhr) {

        view = "";
      if(data.success == true){

          for(var i = 0; i<data.data.length; i++){
         data.data[i].image =  data.data[i].image == null || data.data[i].image == ""?"no_image.png":data.data[i].image;
          view+=`<div class="col-sm-12 mainboxcompany" >
              <div class="col-sm-5" align="center">
                  <img class="img-responsive" style="height: 110px;" src="images/%60%2bdata.data%5bi%5d.html">
              </div>
              <div class="col-sm-7" style="margin-top: 2%;">
                  <h3>`+data.data[i].name+`</h3>

                  <button onClick="loadcolors('`+data.data[i].id+`','`+data.data[i].name+`','`+data.data[i].image+`')" class="btn  button3 selectcompanybtn"> Select Varients</button>

              </div>
          </div>`;
        }
        window.scrollTo({ top: 0, behavior: 'smooth' });
        $(".inmodel").html(view);
        $(".maintab > li").removeClass("active");
        $(".modeltab").parent().addClass("active");
        $(".comapnytabin").removeClass("active");
        $("#models").addClass("active");

      }
      else{
              sa_alert('error', data.data,'error');
        }


      },
        error: function (jqXhr, textStatus, errorMessage) {
                sa_alert('error', 'Unable to load Data '+errorMessage,'error');


        }
    });
    }
    /////////load colors
  ajaxcolors= function  (data){
        $.ajax('main/loadcolors.json', {
        type: 'GET',  // http method
        timeout: 10000,
        data: {

          id:  data
         },
        success: function (data, status, xhr) {

        view = "";
      if(data.success == true){

          for(var i = 0; i<data.data.length; i++){
         data.data[i].image =  data.data[i].image == null || data.data[i].image == ""?"no_image.png":
         alert(data.data[i].image);
          view+=`<div class="col-sm-12 mainboxcompany" >
              <div class="col-sm-5" align="center">
                  <img class="img-responsive" style="height: 110px;" src="images/%60%2bdata.data%5bi%5d.html">
              </div>
              <div class="col-sm-7" style="margin-top: 2%;">
                  <h3>`+data.data[i].name+`</h3>

                  <button onClick="loadstorage('`+data.data[i].id+`','`+data.data[i].name+`','`+data.data[i].image+`')" class="btn button3 selectcompanybtn"> Select Storage Size</button>

              </div>
          </div>`;
        }
        window.scrollTo({ top: 0, behavior: 'smooth' });
        $(".invarient").html(view);
        $(".maintab > li").removeClass("active");
        $(".varientstab").parent().addClass("active");
        $("#models").removeClass("active");
        $("#varient").addClass("active");

      }
      else{
              sa_alert('error', data.data,'error');
        }


      },
        error: function (jqXhr, textStatus, errorMessage) {
                sa_alert('error', 'Unable to load Data '+errorMessage,'error');


        }
    });
    }
  //////////////load Storage
     /////////load colors
  ajaxstorage= function  (data){
        $.ajax('main/loadstorage.json', {
        type: 'GET',  // http method
        timeout: 10000,
        data: {

          id:  data
         },
        success: function (data, status, xhr) {

        view = "";
      if(data.success == true){

          for(var i = 0; i<data.data.length; i++){
         data.data[i].image =  data.data[i].image == null || data.data[i].image == ""?"no_image.png":
         alert(data.data[i].image);
          view+=`<div class="col-sm-12 mainboxcompany" >
              <div class="col-sm-5" align="center">
                  <img class="img-responsive" style="height: 110px;" src="images/%60%2bdata.data%5bi%5d.html">
              </div>
              <div class="col-sm-7" style="margin-top: 2%;">
                  <h3>`+data.data[i].name+`</h3>

                  <button onClick="loadquestion('`+data.data[i].id+`','`+data.data[i].name+`','`+data.data[i].image+`')" class="btn btn-primary button3 selectcompanybtn"> Ans Questions</button>

              </div>
          </div>`;
        }
        window.scrollTo({ top: 0, behavior: 'smooth' });
        $(".instorage").html(view);
        $(".maintab > li").removeClass("active");
        $(".storagetab").parent().addClass("active");
        $("#varient").removeClass("active");
        $("#storage").addClass("active");

      }
      else{
              sa_alert('error', data.data,'error');
        }


      },
        error: function (jqXhr, textStatus, errorMessage) {
                sa_alert('error', 'Unable to load Data '+errorMessage,'error');


        }
    });
    }

$(".storagetab").click(function(){
    if($(".questionstab").parent().hasClass("active"))
    $("#questionbtn").trigger("click");
});
$(".varientstab").click(function(){
    if($(".storagetab").parent().hasClass("active"))
    $("#storagebtn").trigger("click");
});
$(".modeltab").click(function(){
    if($(".varientstab").parent().hasClass("active"))
    $("#colorbtn").trigger("click");
});
$(".comapnytab").click(function(){
    if($(".modeltab").parent().hasClass("active"))
    $("#modelbtn").trigger("click");
});


 $("#modelbtn").click(function(){
  $(".maintab > li").removeClass("active");

  $("#models").removeClass("active");
  $(".comapnytabin").addClass("active");
  $(".comapnytab").parent().addClass("active");

 });

 $("#colorbtn").click(function(){
  $(".maintab > li").removeClass("active");

  $("#varient").removeClass("active");
  $("#models").addClass("active");
  $(".modeltab").parent().addClass("active");

 });
$("#storagebtn").click(function(){
  $(".maintab > li").removeClass("active");

  $("#storage").removeClass("active");
  $("#varient").addClass("active");
  $(".varientstab").parent().addClass("active");

});
$("#questionbtn").click(function(){
  $(".maintab > li").removeClass("active");

  $("#questions").removeClass("active");
  $("#storage").addClass("active");
  $(".storagetab").parent().addClass("active");

});
function calculate(){
  if(q.q1 != null && q.q2 != null && q.q3 != null && q.q5 != null && q.q6 != null && q.q7 != null){
    $.ajax('main/calculate.json', {
        type: 'GET',  // http method
        timeout: 10000,
        data: {
            comapny:companyobj.id,
            model:modelobj.id,
            color:colorobj.id,
            storage:storageobj.id,
            q1:q.q1,
            q2:q.q2,
            q3:q.q3,

            q5:q.q5,
            q6:q.q6,
            q7:q.q7
         },
        success: function (data, status, xhr) {


      if(data.success == true){

          $(".totalprice").html(data.data);

      }
      else{
              sa_alert('error', data.data,'error');
      }


      },
        error: function (jqXhr, textStatus, errorMessage) {
                sa_alert('error', 'Unable to load Data '+errorMessage,'error');


        }
    });
  }
}
$(".y1").click(function(){
  $(".y1").addClass("active");
  $(".n1").removeClass("active");
  q.q1 = 1;
  calculate();
});
$(".n1").click(function(){
  $(".n1").addClass("active");
  $(".y1").removeClass("active");
  q.q1 = 0;
  calculate();
});
$(".y2").click(function(){
  $(".y2").addClass("active");
  $(".n2").removeClass("active");
  q.q2 = 1;
  calculate();
});
$(".n2").click(function(){
  $(".n2").addClass("active");
  $(".y2").removeClass("active");
  q.q2 = 0;
  calculate();
});
$(".y3").click(function(){
  $(".y3").addClass("active");
  $(".n3").removeClass("active");
  q.q3 = 1;
  calculate();
});
$(".n3").click(function(){
  $(".n3").addClass("active");
  $(".y3").removeClass("active");
  q.q3 = 0;
  calculate();
});


$(".y5").click(function(){
  $(".y5").addClass("active");
  $(".n5").removeClass("active");
  q.q5 = 1;
  calculate();
});
$(".n5").click(function(){
  $(".n5").addClass("active");
  $(".y5").removeClass("active");
  q.q5 = 0;
  calculate();
});
$(".y6").click(function(){
  $(".y6").addClass("active");
  $(".n6").removeClass("active");
  q.q6 = 1;
  calculate();
});
$(".n6").click(function(){
  $(".n6").addClass("active");
  $(".y6").removeClass("active");
  q.q6 = 0;
  calculate();
});
$(".battery").on('change', function() {
  q.q7 = this.value;
  calculate();
});


});

loadModels = function(id,name,image) {

      companyobj.id = id;
      companyobj.name = name;
      companyobj.image = image!=""?image:"no_image.png";

      $("#modelimg").attr("src","https://flickerfone.com/assets/uploads/"+companyobj.image);
      $("#modeltext").html(name);


    ajaxmodels(id);
  }
 function loadcolors(id,name,image) {

      modelobj.id = id;
      modelobj.name = name;
      modelobj.image = image!=""?image:"no_image.png";

      $("#colorimg").attr("src","https://flickerfone.com/assets/uploads/"+modelobj.image);
      $("#colortext").html(companyobj.name +" "+name);


    ajaxcolors(id);
  }
  function loadstorage(id,name,image) {

      colorobj.id = id;
      colorobj.name = name;
      colorobj.image = image!=""?image:"no_image.png";

      $("#storageimg").attr("src","https://flickerfone.com/assets/uploads/"+colorobj.image);
      $("#storagetext").html(companyobj.name+" "+modelobj.name +" "+name);


    ajaxstorage(id);
  }
  function loadquestion(id,name,image) {

      storageobj.id = id;
      storageobj.name = name;
      storageobj.image = image!=""?image:"no_image.png";

      $("#questionimg").attr("src","https://flickerfone.com/assets/uploads/"+storageobj.image);
      $("#questiontext").html(companyobj.name+" "+modelobj.name +" "+colorobj.name +" "+name);

      window.scrollTo({ top: 0, behavior: 'smooth' });
        $(".maintab > li").removeClass("active");
        $(".questionstab").parent().addClass("active");
        $("#storage").removeClass("active");
        $("#questions").addClass("active");


  }
</script>

@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->