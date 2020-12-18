@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->


@section('content')



<style>
body {font-family: Arial, Helvetica, sans-serif;}

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
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
</style>
	
	<a id="button"></a>
	<section>
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	      <li data-target="#myCarousel" data-slide-to="2"></li>
	      <li data-target="#myCarousel" data-slide-to="3"></li>

	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner" style="background:black;">
	      <div class="item active">
	        <img src="{{ asset('storage/images/d1.jpg') }}"   class="img-responsive">
	      </div>

	      <div class="item" align="center">
	        <img src="{{ asset('storage/images/d2.jpg') }}"   class="img-responsive v1" >
	      </div>

	      <div class="item">
	        <img src="{{ asset('storage/images/d3.jpg') }}"   class="img-responsive v1">
	      </div>
	       <div class="item" align="center">
	         <img src="{{ asset('storage/images/d4.jpg') }} "   class="img-responsive v1">

	      </div>
	      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	      <span class="sr-only">Next</span>
	    </a>
	    </div>
	  </div>

	</section>
















    <section style="padding: 1%;padding-left:0px;">
            <div class="row">
                <div class="col-sm-12" >
                    <div class="col-sm-4">
            <div class="col-sm-12 div_price" style="margin-bottom: 20px;">

                <h4 style="margin-bottom: 10px;">Find by City</h4>

                <input type="text" id="city" class="form-control"/>

            </div>
            <div class="col-sm-12 div_price" style="color: #6d6b6b;background: #fafafa;">
              <h3><b>Find by Price</b></h3>
              <p>Select price range by scrolling.</p>
              <span style="margin-right:10px;">MIn</span>
                  <input  id="ex2" type="text" class="span2" value="" data-slider-min="0" data-slider-max="300000" data-slider-step="7" data-slider-value="[1000,100000]" data-search="1"/>
              <span style="margin-left:3px;">Max</span>

              <div style="float:left" >
              <a  data-toggle="tooltip" title="Min Price">
                  <input type="number" class="priceinput pmin" id="pmin" value="10000" />
              </a>
              </div>
              <div style="float:right" >
                  <a data-toggle="tooltip" title="Max Price">
                  <input type="number" class="priceinput pmax" value="100000"/>
                  </a>
              </div>
          </div>
            
            
            <br>
            <div class="col-sm-12 div_smart" style="background: #fafafa;">

              <h4>Find by Colour</h4><br>
              <b>
              <div class="row" style="margin-left:5px;">
                  @foreach($colors as $color)
                    <div class="col-md-3 btnbrand" onClick="colorProduct('{{$color->color}}');" style="cursor: pointer; text-align: center;">{{ $color->color }}</div>

                  @endforeach
                </div> 
             <!-- <table class="make_color table table-responsive table-stripped" style="display: block;">
        <tr><td class="btnbrand " style="border: 1px solid #bbb;cursor: pointer;" onclick="colorfilter('1',this)" align="center">Black</td><td class="btnbrand " style="border: 1px solid #bbb;cursor: pointer;" onclick="colorfilter('6',this)" align="center">Blue</td><td class="btnbrand " style="border: 1px solid #bbb;cursor: pointer;" onclick="colorfilter('2',this)" align="center">Gold</td><td class="btnbrand " style="border: 1px solid #bbb;cursor: pointer;" onclick="colorfilter('12',this)" align="center">Green</td> </tr></table> -->
            </b>
          </div>

            <div class="col-sm-12 div_smart" style="color: #6d6b6b;background: #fafafa;">
                <h4>Find by Make</h4>
                <br>
                <b>

                  <div class="row" style="margin-left:5px;">
                    @foreach($brands as $brand)
                      <div class="col-md-3 btnbrand" onClick="brandProduct({{$brand->id}});" style="cursor: pointer; text-align: center;">{{ $brand->name }}</div>

                    @endforeach
                  </div>
                <!-- <table class="table table-responsive table-stripped"  style="display: block;">

                  <tr class='table_make'><td class='btnbrand' onClick="brand('1')">Alcatel</td><td class='btnbrand' onClick="brand('2')">Apple</td><td class='btnbrand' onClick="brand('3')">BlackBerry</td><td class='btnbrand'style='border-right:none;' onClick="brand('4')">Calme</td>
                    </tr>
                   <tr class='table_make'><td class='btnbrand' onClick="brand('5')">Club Mobile</td><td class='btnbrand' onClick="brand('6')">Danny</td><td class='btnbrand' onClick="brand('8')">G'Five</td><td class='btnbrand'style='border-right:none;' onClick="brand('7')">General</td>
                    </tr>
                   <tr class='table_make'><td class='btnbrand' onClick="brand('9')">GRight</td><td class='btnbrand' onClick="brand('10')">Haier</td><td class='btnbrand' onClick="brand('11')">Honor</td><td class='btnbrand'style='border-right:none;' onClick="brand('12')">HTC</td>
                    </tr>
                   <tr class='table_make'><td class='btnbrand' onClick="brand('13')">Huawei</td><td class='btnbrand' onClick="brand('14')">iMate</td><td class='btnbrand' onClick="brand('15')">iNew</td><td class='btnbrand'style='border-right:none;' onClick="brand('16')">Infinix</td>
                    </tr>
                   <tr class='table_make'><td class='btnbrand' onClick="brand('17')">Lenovo</td><td class='btnbrand' onClick="brand('18')">LG</td><td class='btnbrand' onClick="brand('23')">Megagate</td><td class='btnbrand'style='border-right:none;' onClick="brand('19')">Meizu</td>
                    </tr>
                   <tr class='table_make'><td class='btnbrand' onClick="brand('20')">Microsoft</td><td class='btnbrand' onClick="brand('21')">Mobilink Jazz</td><td class='btnbrand' onClick="brand('22')">Motorola</td><td class='btnbrand'style='border-right:none;' onClick="brand('24')">Nokia</td>
                    </tr>
                   <tr class='table_make'><td class='btnbrand' onClick="brand('25')">OnePlus</td><td class='btnbrand' onClick="brand('26')">OPhone</td><td class='btnbrand' onClick="brand('27')">OPPO</td><td class='btnbrand'style='border-right:none;' onClick="brand('28')">QMobile</td>
                    </tr>
                   <tr class='table_make'><td class='btnbrand' onClick="brand('29')">Realme</td><td class='btnbrand' onClick="brand('30')">Rivo</td><td class='btnbrand' onClick="brand('31')">Samsung</td><td class='btnbrand'style='border-right:none;' onClick="brand('32')">Sony</td>
                    </tr>
                   <tr class='table_make'><td class='btnbrand' onClick="brand('33')">Sony Ericsson</td><td class='btnbrand' onClick="brand('34')">Tecno</td><td class='btnbrand' onClick="brand('35')">Telenor</td><td class='btnbrand'style='border-right:none;' onClick="brand('36')">Vivo</td>
                    </tr>
                   <tr class='table_make'><td class='btnbrand' onClick="brand('37')">VOICE</td><td class='btnbrand' onClick="brand('38')">Xiaomi</td><td class='btnbrand' onClick="brand('39')">Zong</td>    -->       
                <!-- </table> -->
            </b>
        </div>
		<div class="col-sm-12 div_smart" style="color: #6d6b6b;background: #fafafa;">
		<p>Flickerfone provides the facility to guide their user to buy used mobile phones in Pakistan. To buy used mobile phones in Pakistan from a local market is not an easy task. During buying the used mobile, there remain a number of unfound bugs, which can cause you problems after the purchase. We are the best information site for all your mobiles needs, buy/sell used and new mobile phone devices at competitive prices. Flickerfone provides a proper guide by which you can check essential things before buy used mobile phones. This helps you in your future purchases. Here are the few tips that you can consider before buying used or new mobile phones in Pakistan. Everyone wants to buy good used mobile phones at the lowest price so first of all check the price of new phones which you want to buy because sometimes retailers misguide you by telling higher prices of new mobile. Compare the market price of the mobile from different sites. Proper market research helps you to buy used mobile phones as well as new model mobiles in your budget. There are many top Leading brands, which are launching impressive mobile phones regarding excellent hardware configuration and overall mobile design you can explore all mobile phone brands available at Flickerfone. 
</p>
			</div>
    </div>

<div class="col-sm-8">
<style type="text/css">
  .btn-primary{background: #2a0430;}
</style>
<div style="margin-top: 20px;">

Sort ::

<div class="dropdown">

<button class="btn btn-xs subbtn dropdown-toggle" data-toggle="dropdown">Price
<span class="caret"></span>
</button>
<ul class="dropdown-menu">
      <li><a  id="psorta">Higher to Lower</a></li>
      <li><a  id="psortb">Lower to Higher</a></li>
</ul>

</div>
|

<div class="dropdown">
<button class="btn btn-xs subbtn dropdown-toggle"  data-toggle="dropdown">Posting Date <span class="caret"></span>
</button>
<ul class="dropdown-menu">
      <li><a id="nsorta">Ascending Order</a></li>
      <li><a id="nsortb">Descending Order</a></li>
</ul>

</div>
|
<div class="dropdown">
<button class="btn btn-xs subbtn dropdown-toggle"  data-toggle="dropdown">Grading <span class="caret"></span>
</button>
<ul class="dropdown-menu">
      <li><a id="gsorta">Higher to Lower</a></li>
      <li><a id="gsortb">Lower to Higher</a></li>
</ul>

</div>
</div>
<br>

<div id="mypro"></div>
<div class="products" id="products">
    @foreach($products as $row)
      @php $image = 'storage/'.$row->image; @endphp
      <div class="row buyleft">
          <a href="ProductDetail/{{$row->id}}"></a>
          <div class="col-xs-12 mainboxbuy"><a href="ProductDetail/{{ $row->id }}">
            <div class="col-sm-3" align="center">
                <img class="img-responsive img-thumbnail" src="{{asset($image)}}" style="width: 150px; height: 150px;" >
            </div>
            </a>
            <div class="col-sm-9">
              <a style="color: black !important;" href="ProductDetail/{{$row->id}}">
                <h3 id="buytextmain" style="font-size:20px;">{{ucwords($row->name)}}</h3>

                <p>dlkbjoidfv</p>
                <div class="clearfix"></div>
              </a>
              <div class="row buymargintop"><a style="color: black !important;" href="ProductDetail/{{ $row->id }}">
                <div class="col-sm-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <p class="buyprice">PKR  {{$row->price}}</p>
                <table class="table-bordered"><tbody><tr><td style="padding:5px;color:#444;background:#e0e0e1;">Fair</td><td style="padding:5px;background:#028f63;color:#fff;">Good</td><td style="padding:5px;color:#444;background:#e0e0e1;">Excellent</td></tr></tbody></table></div>
                </a>
                <div class=" col-sm-8 col-md-8 col-lg-8">
                  <a  style="color: black !important;" href="ProductDetail/{{ $row->id }}">
                    <table>
                      <tbody>
                        <tr>
                          <td><b>Negotiable: </b> </td>
                          <td><b>Yes</b></td>
                        </tr>
                        <tr>
                          <td>From:</td>
                          <td>Gujrat</td>
                        </tr>
                        <tr>
                          <td>Brand:</td>
                          <td>Apple</td>
                        </tr>
                        <tr>
                          <td>Model:</td>
                          <td>iphone x</td>
                        </tr>
                        <tr>
                          <td>Network:</td>
                          <td>unlocked</td>
                        </tr>
                        <tr>
                          <td>PTA Approved:</td>
                          <td>Yes</td>
                        </tr>
                        <tr>
                          <td>Posted Date:</td>
                          <td>2020-04-12 09:15:51</td>
                        </tr>
                    </tbody>
                  </table>
                    </a><a href="ProductDetail/{{ $row->id }}">
                    <button class="btn-xs button3 buydetailsbtn">Contact / Details</button>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    @endforeach


</div>
    
<div class="clearfix"></div>
   
  <div class="products">
     
  </div>

    <div class="col-sm-12" style="align-items: center;" >
      <button class="btn loadmore" style="margin-top:40px;padding:5px;font-size:18px;font-style: oblique;width: 30%;background-color: white;color: black;border: 2px solid #2a0430;border-bottom: 5px solid #2a0430;color:#2a0430;    min-width: 1; margin-top: 40px;
      padding: 5px;
      font-size: 18px;
      font-style: normal;
      width: 25%;
      background-color: #028f63;
      border: 2px solid #028f63;
      border-bottom: 5px solid #028f63;
      color: #ffffff;
      min-width: 150px;">LOAD MORE</button>
      </div>


</div>

  </div>
    </div>

</div>

</div>
</section>








<script type="text/javascript" src="{{ asset('js/bootstrap-slider.min.js') }} "></script>

<script type="text/javascript">

totalsize=0;
comesize=0;
froms = 0;
tos=0;
options = "";
productstart=0;
productend=3;
productmin=0;
productmax=0;
productcompany="";
psort="";
gsort="";
nsort="";
varient = "";
search = "";

function colorProduct(color){
    $.ajax({
      url:"{{ route('colorsearch') }}",
      type:"GET",
      dataType:"json",
      data:{color:color},
      success:function(data)
      {
        $('#products').html(data.priceData);
        if(data.total <= productend)
        {
          $('.loadmore').hide();
        }
        else
        {
          $('.loadmore').show();
        }
      }
    });
}

function  brandProduct(id){
    $.ajax({
      url:"{{ route('brandsearch') }}",
      type:"GET",
      dataType:"json",
      data:{brand:id},
      success:function(data)
      {
        $('#products').html(data.priceData);
        if(data.total <= productend)
        {
          $('.loadmore').hide();
        }
        else
        {
          $('.loadmore').show();
        }
      }
    });
}

var slider = new Slider('#ex2', {
  //tooltip: 'always'
}).on('slideStop', function(data){
  productmin = data[0];
  productmax = data[1];   
  pricesearch(productmin,productmax);
 
});


function pricesearch(productmin,productmax)
{
  $.ajax({
    url:"{{ route('pricesearch') }}",
    type:"GET",
    dataType:"json",
    data:{minprice:productmin,maxprice:productmax},
    success:function(data)
    {
      $('#products').html(data.priceData);
      if(data.total <= productend)
      {
        $('.loadmore').hide();
      }
      else
      {
        $('.loadmore').show();
      }
    }
  });
}

slider.on('slide', function(data){
    $(".pmin").val(data[0]);
    $(".pmax").val(data[1]);
});

document.addEventListener("DOMContentLoaded", function(event) {
$(".dropdown-toggle").dropdown();
  $("#psorta").click(function(){

     psort = 1;
    loadProducts();
  });
  $("#psortb").click(function(){

     psort = 0;
    loadProducts();
  });

  $("#nsorta").click(function(){

    nsort = 1;
    loadProducts();
  });
  $("#nsortb").click(function(){

    nsort = 0
    loadProducts();
  });
  $("#gsorta").click(function(){

    gsort = 1;
    loadProducts();
  });
  $("#gsortb").click(function(){

    gsort = 0;
    loadProducts();
  });

  $(".pmax").change(function(){
    let vm =  $(".pmin").val();
    let vmx =  $(".pmax").val();


   $("#ex2").attr("data-slider-value","["+vm+","+vmx+"]");
   $("#ex2").attr("data-slider-min",vm);
   $("#ex2").attr("data-slider-max",vmx);
    slider.destroy();

    slider = new Slider('#ex2', {
  //tooltip: 'always'
    }).on('slideStop', function(data){
      productmin = data[0];
      productmax = data[1];
      loadProducts();
    });
    slider.on('slide', function(data){

        $(".pmin").val(data[0]);
        $(".pmax").val(data[1]);
    });

  productmin = vm;
  productmax = vmx;
  loadProducts();

});

  $(".pmin").on('change',function(){
    let vm =  $(".pmin").val();
    let vmx =  $(".pmax").val();
   $("#ex2").attr("data-slider-value","["+vm+","+vmx+"]");
   $("#ex2").attr("data-slider-min",vm);
   $("#ex2").attr("data-slider-max",vmx);
    slider.destroy();

    slider = new Slider('#ex2', {
  //tooltip 'always'
    }).on('slideStop', function(data){
      productmin = data[0];
      productmax = data[1];
      loadProducts();
    });
    slider.on('slide', function(data){

        $(".pmin").val(data[0]);
        $(".pmax").val(data[1]);
    });

  productmin = vm;
  productmax = vmx;
  loadProducts();

});


  $('[data-toggle="tooltip"]').tooltip();
  loadProducts();
  $(".loadmore").click(function(){
    productend+=7;
    loadProducts();
  });

$('#city').amsifySuggestags({
      suggestions: ['18 Hazari','Abbotabad','Abdul Hakim','adda bun bosan','Alipur','arif wala','Attock','Baddin','Badin','Bagh','Bahawal Nagar','Bahawalpur','Balakot','Bannu','Basir pur','Bukkur','Burewala','Chakwal','Chaman','Channab Nagar','Charsadda','Chicha watni','Chistian','Dadu','Daska','Dera Ghazi Khan','Dera Ismail Khan','Dinga','Faisalabad','faisalabad','Fort Abbass','Ghotki','Gujjar Khan','Gujranwala','Gujrat','Gwadar','Hafizabad','Hangoo','Haripur','Hasilpur','Hyderabad','Islamabad','Jacobabad','Jaffarabad','Jalalpur Bhattian','jalalpur jattan','Jamshoro','Jauharabad','Jhang','Kahuta','kalllar Kahar','Karachi','Kasur','Khairpur','Khanpur','Kharian','Khuzdar','Khuzdar','Kot Addu','Lahore','LalaMusa','Larkana','Lasbela','Layyah','Mansehra','Mardan','Mehrab Kot','Mehrab Pur','Mianwali','Mirpur AJK','Mirpur Khas','Multan','Muridkey','Muzzafar Garh','Nankana Sahib','NAROWAL','Nasirabad','Nawabshah','Nowshera','Okara','Pak Pattan','Pattoki','Peshawar','Petaro','Quetta','Rahim Yar Khan','Rajan Pur','Rawalpindi','Sahiwal','Sangla hil','Sargodha','shahdara','Shahkot','Sheikhupura','Shikarpur','Sialkot','Sibi','Sukkur','Swabi','Talagang','Taunsa','Taxila','Turbat','Vehari','Wah Cantt','Wah Cantt','Wah Cantt','Wazirabad','Zhob'],
    whiteList: true
  });
  
  $('.amsify-suggestags-input').change(function(){
      var city = $(this).val().toLowerCase();
       $.ajax({
          url:"{{ route('citysearch') }}",
          type:"GET",
          dataType:"json",
          data:{city:city},
          success:function(data)
          {
            $('#products').html(data.priceData);
            if(data.total <= productend)
            {
              $('.loadmore').hide();
            }
            else
            {
              $('.loadmore').show();
            }
          }
      });
  });
  
//Document ready End
  });

var site_url = "https://flickerfone.com/"+"assets/uploads";
function loadProducts(){
  listcolors();
  $.ajax('main/listproductsbuy.json', {
        type: 'GET',  // http method
        timeout: 10000,
        data: {

          start:productstart,
          end:productend,
          nsort:nsort,
          brand:productcompany,
          min:productmin,
          max:productmax,
          q:search,
          city:options,
          gsort:gsort,
          psort:psort,
          varient:varient
         },
        success: function (data, status, xhr) {
            var view = "";
            pcomesize = data.total;
            pfroms = data.from;
            ptos = data.to;

      if(data.data.length > 0){

        if(data.total <= productend){
          $(".loadmore").hide();
        }else{
          $(".loadmore").fadeIn();
        }
        for(var i =0;i<data.data.length;i++){

       view += `<div class="row buyleft">
            <a href="buyproductdetails/%60%2bdata.data%5bi%5d.html">
            <div class="col-xs-12 mainboxbuy">
              <div class="col-sm-3" align="center">
                  <img class="img-responsive img-thumbnail" src="`+site_url+"/thumbs/"+data.data[i].image+`"/>
              </div>
              <div class="col-sm-9">
                  <h3 id="buytextmain" style="font-size:20px;">`+data.data[i].company+` `+data.data[i].model+` `+data.data[i].color+` `+data.data[i].space;
                  if(data.data[i].time>25){
                    view += `<span class="newlist" style="position: absolute;right: 0px;top: 50px;">NEW LISTING</span>`;
                  }
                 view += `  </h3>

                  <p>`+data.data[i].description+`</p>
                  <div class="clearfix"></div>
                <div class="row buymargintop">
                  <div class="col-sm-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                  <p class="buyprice">`+data.data[i].price+`</p>
                  `;

                  if(data.data[i].grade == 'Fair'){
                    view+=`<table class="table-bordered"><tr><td style="padding:5px;background:#028f63;color:#fff;">Fair</td><td style="padding:5px;color:#444;background:#e0e0e1;">Good</td><td style="padding:5px;color:#444;background:#e0e0e1;">Excellent</td></tr></table>`;
                  }
                  if(data.data[i].grade == 'Good'){
                    view+=`<table class="table-bordered"><tr><td  style="padding:5px;color:#444;background:#e0e0e1;">Fair</td><td style="padding:5px;background:#028f63;color:#fff;">Good</td><td style="padding:5px;color:#444;background:#e0e0e1;">Excellent</td></tr></table>`;
                  }
                  if(data.data[i].grade == 'Excellent'){
                    view+=`<table class="table-bordered"><tr><td style="padding:5px;color:#444;background:#e0e0e1;">Fair</td><td style="padding:5px;color:#444;background:#e0e0e1;">Good</td><td style="padding:5px;background:#028f63;color:#fff;">Excellent</td></tr></table>`;
                  }

                  view+=`</div>
                  <div class=" col-sm-8 col-md-8 col-lg-8">
                      <table>
                        <tr>
                          <td><b>Negotiable: </b> </td>
                          <td><b>`+data.data[i].nego+`</b></td>
                        </tr>
                        <tr>
                          <td>From:</td>
                          <td>`+data.data[i].city+`</td>
                        </tr>
                        <tr>
                          <td>Brand:</td>
                          <td>`+data.data[i].company+`</td>
                        </tr>
                        <tr>
                          <td>Model:</td>
                          <td>`+data.data[i].model+`</td>
                        </tr>
                        <tr>
                          <td>Network:</td>
                          <td>`+data.data[i].network+`</td>
                        </tr>
                        <tr>
                          <td>PTA Approved:</td>
                          <td>`+data.data[i].pta+`</td>
                        </tr>
                        <tr>
                          <td>Posted Date:</td>
                          <td>`+data.data[i].timestamp+`</td>
                        </tr>
                      </table>
                      <a href="https://flickerfone.com/buyproductdetails/`+data.data[i].id+`">
                      <button class="btn-xs button3 buydetailsbtn">Contact / Details</button>
                      </a>
                  </div>
                </div>
              </div>
            </div></a>
          </div>`;



              }
            }else{
              $(".loadmore").hide();
              view+="<div align='center'><img src='https://flickerfone.com/assets/images/noproduct.png' class='img-responsive'/></div>";
            }
            $(".products").html(view);

        },
        error: function (jqXhr, textStatus, errorMessage) {
                sa_alert('error', 'Unable to load Mobiles '+errorMessage,'error');
                console.log('Error' + textStatus);
                console.log('Error' + jqXhr);
                console.log('Error' + errorMessage);

        }
    });
$(".table_make > td").click(function(){
    
    $(".table_make > td.active").css("background","");
  $(".table_make > td").removeClass("active");
  $(this).addClass("active");
  $(".table_make > td.active").css("background","#f00");

});

$("#qsearch").submit(function(){
  search = $("#qv").val();
  loadProducts();
  return false;
})

}

brand = function(id){
 varient = "";
 productcompany =id;
 loadProducts();
}

color = function(id){
 productcompany =id;
 loadProducts();
}

function listcolors(){
     $.ajax('main/listcolors.json', {
          type: 'GET',  // http method
          timeout: 10000,
          data: {
          brand:productcompany,
          min:productmin,
          max:productmax,
          q:search,
          city:options,

         },
        success: function (data, status, xhr) {

            var view = "";
            name = data.name;

        for(var i =0;i<data.data.length;i++){
      view += `
        <tr>`;

             if(data.data[i] != undefined) {
                 if(varient ==data.data[i].id){
                    active = "active";
                 }else{
                    active = "";
                 }
               view+=`<td class='btnbrand `+active+`' style='border: 1px solid #bbb;cursor: pointer;' onClick="colorfilter('`+data.data[i].id+`',this)" align='center'>`+data.data[i].name+`</td>`;
                  }
                  else{
                    break;
                  }
                   i++;
          if(data.data[i] != undefined) {
              if(varient ==data.data[i].id){
                    active = "active";
                 }else{
                    active = "";
                 }
               view+=`<td class='btnbrand `+active+`' style='border: 1px solid #bbb;cursor: pointer;'  onClick="colorfilter('`+data.data[i].id+`',this)" align='center'>`+data.data[i].name+`</td>`;
                  }
                  else{
                    break;
                  }
            i++;
            if(data.data[i] != undefined) {
                if(varient ==data.data[i].id){
                    active = "active";
                 }else{
                    active = "";
                 }
               view+=`<td class='btnbrand `+active+`'  style='border: 1px solid #bbb;cursor: pointer;'  onClick="colorfilter('`+data.data[i].id+`',this)" align='center'>`+data.data[i].name+`</td>`;
              }
              else{
                break;
              }
            i++;
            if(data.data[i] != undefined) {
                if(varient ==data.data[i].id){
                    active = "active";
                 }else{
                    active = "";
                 }
               view+=`<td class='btnbrand `+active+`' style='border: 1px solid #bbb;cursor: pointer;'  onClick="colorfilter('`+data.data[i].id+`',this)" align='center'>`+data.data[i].name+`</td>`;
              }
              else{
                break;
              }

        view+=` </tr>`;

              }

        $(".make_color").html(view);
        $(".make_color > tr > .active").css("background","#f00");
        $(".make_color > tr > .active").css("color","#fff");
        },
        error: function (jqXhr, textStatus, errorMessage) {
                sa_alert('error', 'Unable to load Colors'+errorMessage,'error');
                console.log('Error' + textStatus);
                console.log('Error' + jqXhr);
                console.log('Error' + errorMessage);

        }
    });
}

function colorfilter(id,view){
    varient = id;

    loadProducts();
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
</script>

@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->