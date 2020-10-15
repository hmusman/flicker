<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >




  </head>
  <script src="{{ asset('js/jquery-2.1.3.min.js') }}" ></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- <link href="{{ asset('css/style.css')}}" rel='stylesheet' type='text/css' media="all"> -->
  <link href="{{ asset('css/mystyle.css') }}" rel='stylesheet' type='text/css' media="all">
  <link href="{{ asset('css/ProductDetail.css') }}" rel='stylesheet' type='text/css' media="all">
  <link href="{{ asset('css/template1/tabcontent.css') }}" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="{{ asset('js/ScrollJS2//style.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>

  <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/magnifier.css') }}">


  <link href="{{ asset('css/pagination.css') }}" rel="stylesheet" type="text/css">




 <style>
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
    HOME / {{ $product->category->title }} / {{ $product->Productbrand->name }} / {{ $product->model }}
  </div>
</div>


</div>


<br/>

<br/>


<div class="row" style="margin-top: 31px;">
  <div class="col-md-6" >

	@php $img1 = $product->image @endphp
      @php $img1_400 = '/storage/admin/images/sellproduct/thumbnail/400_'.$product->img1 @endphp
      @php $img1_700 = '/storage/admin/images/sellproduct/thumbnail/700_'.$product->img1 @endphp
    	@php $img2 = $product->img2 @endphp
    	@php $img3 = $product->img3 @endphp

      @php $img1_100 = '/storage/admin/images/sellproduct/thumbnail/100_'.$product->img1 @endphp
      @php $img2_100 = '/storage/admin/images/sellproduct/thumbnail/100_'.$product->img2 @endphp
      @php $img3_100 = '/storage/admin/images/sellproduct/thumbnail/100_'.$product->img3 @endphp

 <!-- <div class="loupe-widget js-loupe">
  <div class="loupe-widget__loupe js-loupe-element"></div>
  <div id="image_container">
    <img id="myimage" style="    width: 100%;" class="loupe-widget__image js-loupe-image" src="{{asset($img1_400)}}" alt="image" data-image-full="{{asset($img1_700)}}"/>
  </div>
  
</div> -->

<div>
    <a  class="magnifier-thumb-wrapper" href="http://en.wikipedia.org/wiki/File:Starry_Night_Over_the_Rhone.jpg">
        <img id="thumb"
           src="{{ asset($img1_400)}}">
    </a>
    <div class="magnifier-preview" id="preview" style="width: 200px; height: 133px"></div>
</div>


<div >
  













<div class="container">


  <div class="row" >
  
    <div class="col-md-12 col-lg-12 col-sm-12" id="slickBtnFor">
    
      <div class="autoplayFeatures">
        
         @if(!empty($img1))

          <figure  >
            <img class="productImgs" data-id="{{ $product->img1 }}" class="img-thumbnail" src="{{ asset($img1_100)}}" alt="Trulli" style="width:100%;height: 100px;">
          </figure>

        @endif

        @if(!empty($img2))

        	<figure  >
	          <img class="productImgs" data-id="{{ $product->img2 }}" class="img-thumbnail" src="{{ asset($img2_100)}}" alt="Trulli" style="width:100%;height: 100px;">
	        </figure>

      	@endif




        @if(!empty($img3))

        	<figure  >
	          <img class="productImgs" data-id="{{ $product->img3 }}" class="img-thumbnail" src="{{ asset($img3_100)}}" alt="Trulli" style="width:100%;height: 100px;">
	        </figure>

      	@endif
       
        
        </div>
      
      </div>


    
    </div>


  </div>


</div>
  </div>

<div class="col-md-6">
  

    <div style="width: 100%; ">

      <div style="width: 10%; float: left;"></div>
      <div style="width: 60%; float: left;background-color: rgb(62, 62, 146); color: white;padding: 10px;font-weight: 700;">Description</div>
      <div style="width: 20%; float: left;background-color: rgb(62, 62, 146); color: white;padding: 10px;font-weight: 700;">Details</div>
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
      <div style="width: 60%; float: left;color: black;padding: 6px;font-weight: 500; border-left: 1px black solid;">
        Device Box Available</div>
      <div style="width: 20%; float: left; color: black;padding: 6px;font-weight: 500;border-right: 1px black solid;">
        {{ ucfirst($product->device_box_available) }}</div>
      <div style="width: 10%; float: left;"></div>


  </div>

  <div
    style="width: 186px; text-align: center;    margin-top: 549px; background-color: blue ;color: rgb(253, 245, 245);padding: 6px;font-weight: 500; ">
    Contact
  </div>


  <div 
    style="width: 186px; 
      font-size: 34px;
  text-align: center;margin-top: 41px; ;color: blue;padding: 6px;font-weight: 500; ">
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

  $(document).on('click', '.pagination a', function(event){
      event.preventDefault();
      var page = $(this).attr('href').split('page=')[1]; 
      if($('#asc_desc option:selected').val()!='Select View')
      {
        var val = $('#asc_desc option:selected').val();
        var id = '{{ $product->id }}';
        FetchDataAscDesc(page,val,id);
      }
      else if($('#opinion_search').val() !=''){
        FetchOpinionSearchData(page,$('#opinion_search').val(),'{{ $product->id }}');
      }
      else{FetchData(page,'{{ $product->id }}')};
    });

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
 slidesToShow: 4,
 slidesToScroll: 1,
  autoplay: true,
 autoplaySpeed: 3000,
 pauseOnHover:true,

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







$(function(){
   $('#shopBtn').attr('href','#scrollTo');
});



function image1ReplaceOnClick1(){

//   document.getElementById("myimage").srcset = "{{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-184389384.jpg')}}";
//   document.getElementById("myresult").style.backgroundImage = "url({{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-184389384.jpg')}})";
}


// function image1ReplaceOnClick2(){

// document.getElementById("myimage").srcset = "{{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-184389619.jpg')}}";
// document.getElementById("myresult").style.backgroundImage = "url({{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-184389619.jpg')}})";
// }


// function image1ReplaceOnClick3(){

// document.getElementById("myimage").srcset = "{{ asset('storage/images/KHIPSE264BLK_4.jpg')}}";
// document.getElementById("myresult").style.backgroundImage = "url({{ asset('storage/images/KHIPSE264BLK_4.jpg')}})";
// }


// function image1ReplaceOnClick4(){

// document.getElementById("myimage").srcset = "{{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-packaging-new-black-iphone-se-multinational-company-182969056.jpg') }}";
// document.getElementById("myresult").style.backgroundImage = "url({{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-packaging-new-black-iphone-se-multinational-company-182969056.jpg')}})";
// }


// function image1ReplaceOnClick5(){

// document.getElementById("myimage").srcset = "{{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-193162726.jpg')}}";
// document.getElementById("myresult").style.backgroundImage = "url({{ asset('storage/images/packaging-new-iphone-se-apple-paris-france-may-black-multinational-company-days-its-studio-release-white-193162726.jpg')}})";
// }


 

</script>

  
<script type="text/javascript" src="{{ asset('slick/slick.min.js')}}"></script>
        
<script type="text/javascript" src="{{ asset('slick/jquery3.2.1.js')}}"></script>
  
<script type="text/javascript" src="{{ asset('slick/slick.js')}}"></script>
 



<script  src="{{ asset('js/tabcontent.js')}}"></script>
  <script  src="{{ asset('js/Event.js')}}"></script>
    <script  src="{{ asset('js/Magnifier.js')}}"></script>


<!-- 
<script type="text/javascript" src="Event.js"></script>
<script type="text/javascript" src="Magnifier.js"></script> -->
<script type="text/javascript">
    

    var evt = new Event(),
    m = new Magnifier(evt);
     m.attach({
     
            thumb: '#thumb',
            large:  "{{asset($img1_400)}}",
            mode: 'inside',
            zoom: 3,
            zoomable: true
        });



  $('.productImgs').click(function(){
    var imgSrc="{{url('storage/admin/images/sellproduct/thumbnail/400_') }}";
    imgSrc += $(this).data('id');
    document.getElementById("thumb").src = imgSrc;
            console.log(imgSrc);
    var evt = new Event(),
    m = new Magnifier(evt);
     m.attach({
     
            thumb: '#thumb',
            large:  imgSrc,
            mode: 'inside',
            zoom: 3,
            zoomable: true
        });
// m.attacth['large'] = imgSrc;

  
  });

</script>



  <script>
    $(function() {
      (function(name) {
        var container = $('#pagination-' + name);
        var sources = function () {
          var result = [];
    
          for (var i = 1; i < 196; i++) {
            result.push(i);
          }
    
          return result;
        }();
    
        var options = {
          dataSource: sources,
          callback: function (response, pagination) {
            window.console && console.log(response, pagination);
    
            var dataHtml = '<ul>';
    
            $.each(response, function (index, item) {
              dataHtml += '<li>' + item + '</li>';
            });
    
            dataHtml += '</ul>';
    
            container.prev().html(dataHtml);
          }
        };
    
        //$.pagination(container, options);
    
        container.addHook('beforeInit', function () {
          window.console && console.log('beforeInit...');
        });
        container.pagination(options);
    
        container.addHook('beforePageOnClick', function () {
          window.console && console.log('beforePageOnClick...');
          //return false
        });
      })('demo1');
    

    })



    
$(function(){
   $('#shopBtn').attr('href','#scrollTo');
});


    </script>


<script src="js/pagination.js"></script>

<script  src="js/ScrollJS2/script.js"></script>





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

</html>