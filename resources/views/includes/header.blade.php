
 
 
 
 
 
 
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
 

 
 
 <style type="text/css">

   
.fontUbantu{
   font-family: 'Ubuntu', sans-serif !important;
}


.navbar-light .navbar-nav .nav-link {
    color: rgb(103 99 99) !important;
}


li[class="nav-item dropdown"] > a{
     text-decoration: none;
    font-weight: 600;
}

   
   .pagination{
  float: right !important;
    margin-top: 20px !important;
 }


@media (min-width: 1399px) and (max-width : 2000px){
#myUL{
    width: 23% !important;
}
}


@media (max-width: 550px){

  .logoFlickerflone{
      height: 37px  !important;
    
      }
.mobBrand{
  border-left: 0px #0b0c0c52 solid !important;
}
a[id="prcCal"]{
 height: 37px !important;
    width: 158px !important;
    margin-bottom: 10px !important;

}

}
@media (min-width:500px){
   .commnscnHead{
    text-align: center;
    background-color: #f8f7f7;
    color: #7c7b7b;
    font-weight: bold;
    font-family: sans-serif;
    border-right: 1px #bab9bd solid;
     padding: 4px 6px 6px 13px ; 
 }
.qasimnavigatin{
      color: rgb(124 123 123);
    
padding: 11px 10px 0px 10px;
            text-align: center;
          
    font-weight: 700;
    font-family: sans-serif;
}

    }



.droplinks{
  position: relative;
    left: 20px;
    bottom: 3px;
    color: #706e6e !important
}

ul[class="dropdown-menu"] > li{
  width: 100% !important;
}



    .navbar-fixed-top {
    position: sticky;
    position: -webkit-sticky;
    top: 0;
/*     z-index: 1; */
  background: white;
  z-index: 10;
}

.navbar-fixed-top.cbp-af-header-shrink {
	padding: 10px 0;
}


  .logoFlickerflone{
      height: 57px ;
      /* top: -1px; */
      margin-top: -8px;
      margin-bottom: -8px;
      }
 </style>

<Header class="navbar-fixed-top cbp-af-header">
 <nav class="navbar navbar-expand-lg navbar-light bg-light" id="topNav"  >
    <a class="navbar-brand" href="{{ route('home') }}"><img  class="logoFlickerflone" src="{{ asset('storage/images/flickerbig.gif') }}"></a>
    <button style="background-color: white !important;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup, #navbarNavAltMarkup1" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">


        <script type="text/javascript">
            function reglogin()
            {
              window.location='/Login';
            }
        </script>

        @if(Session::has('user') && Session::get('user') !='')
            <span id="reglogin" style="cursor: pointer;position: absolute;
              right: 46px;
              bottom: 25px;color: white !important; border-bottom: 1px white solid  " align="right"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out" style="margin-top: 6px ; color: white; "></i>&nbsp;&nbsp;{{ __('Logout') }} </span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
        @else
           <span id="reglogin" onclick="reglogin();" class="reglogin" style="cursor: pointer;position: absolute;
        right: 46px;
        bottom: 25px;color: white !important; border-bottom: 1px white solid  " align="right"    >
          <i class="fontUbantu" style="margin-top: 6px ; color: white;     position: relative;top: -1px;left: 1px;  height: 15px;">  <img   src="{{ asset('storage/images/headerimg/ic_account_circle_white_18dp.png') }}"></i>&nbsp;&nbsp;REGISTER / LOGIN</span>

        
        @endif
      </div>
    </div>
  </nav>
  
 
<!-- 
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="seconNav" style="    background-color: #f8f7f7 !important; height: 35px; border-top: 1px #4c4a575c solid !important; border-bottom: 1px #4c4a575c solid !important;">
   
  
  
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup1">
    
      <ul class="nav navbar-nav">

       
        <li class="nav-item dropdown" style="width:65px !important">
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             </a>
       
        </li>
       
     


        <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" 
          style="padding: 8px 30px 6px 30px !important;  height: 38px;  border-left: 1px #4c4a575c solid !important;font-weight: bold;"> BRANDS  </a>
            @php $brands = App\Brand::select('brands.name','brands.id')->join('sma_products','brands.id','=','sma_products.brand_id')->distinct()->get() @endphp
            <ul class="dropdown-menu fade-up">
              @foreach($brands as $brand)
                   <li><a class="dropdown-item" href="{{ route('BrandProductsList',$brand->id) }}"> <center>{{ ucwords($brand->name) }}</center></a></li>
              @endforeach
            </ul>
        </li>


          <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" 
          style="padding: 8px 30px 6px 30px !important;  height: 38px ; ; border-left: 1px #4c4a575c solid !important; border-right: 1px #4c4a575c solid !important;font-weight: bold;"> ACCESSORIES  </a>
             @php $accessories = App\AccessoryCategory::select('accessory_categories.title','accessory_categories.id')->join('accessories','accessory_categories.id','=','accessories.accessory_category_id')->distinct()->get() @endphp
            <ul class="dropdown-menu fade-up">
              @foreach($accessories as $accessory)
                   <li><a class="dropdown-item" href="{{ route('NewCategoryAccessories',$accessory->id) }}"> <center>{{ ucwords($accessory->title) }}</center></a></li>
              @endforeach
            </ul>
          
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" 
          style="padding: 8px 70px 6px 70px !important;  height: 38px ; ; border-left: 1px #4c4a575c solid !important;font-weight: bold;">Blog </a>
 
        </li>




        
        <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" 
          style="padding: 8px 70px 6px 70px !important;  height: 38px ;  border-left: 1px #4c4a575c solid !important; border-right: 1px #4c4a575c solid !important;font-weight: bold;"> Forums  </a>
     
        </li>



        
      

        





<li>
  <input type="search" id="myInput"  autocomplete="off"  onkeyup="myFunction()"  title="Type in a name" name="q"  class="searchTerm" placeholder="Search our Store" 
  style="background-position: right !important; border-color: transparent !important ; outline: none;    width: 388px;margin-left: 3px;border: 1px #f8f7f7 solid;  height: 1px;  margin-top: 6px;background: url(images/ic_search_black_18dp.png) no-repeat scroll 7px 7px; ">




      <ul onblur="hideagain()" id="myUL" style="  background-color: white ;  box-shadow:  0 0 5px #000000;position:absolute  ;width: 29%;  overflow: scroll ; z-index: 20; ;display: none ;  height: 500px;">
   
          <div>
           <p style="background-color: white;color: black;padding: 7px;font-weight: 600;border-style: none;">DEVICES  <button id="srchbtnid" onclick="hideagain();" style="margin-left: 269px;
            background-color: #f8f7f7;
            color: black;
         
            font-weight: 600;
            border-style: none;">X</button></p>
          </div>
      </ul>
          

          
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" id="prcCal" href="{{ route('PriceEstimateCalculator') }}" 
          style="padding: 4px 6px 6px 13px !important;
            border-right: 1px #4c4a575c solid !important;
            border-left: 1px #4c4a575c solid !important;
            font-weight: bold;
            background-color: #0071e3;
            color: white;
            height: 35px;
            margin-top: 8px;
        "> Price Calculator  </a>
           
        </li>
  </ul>
    </div>
  </nav>

   -->




  <!-- <div class="row"   style="background-color: #f8f7f7">
  <div class="container">
  <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12" style="background-color: #f8f7f7">
  
  <div class="commnscnHead" style="height:100%; width:10%; float: left; border-left: 1px #bab9bd solid; ">BRANDS</div>
   <div class="commnscnHead" style="height:100%; width:15%; float: left;"  >ACCESSORIES</div>
     <div class="commnscnHead"  style="height:100%; width:10%; float: left;" >BLOG</div>
   <div class="commnscnHead" style="height:100%; width:10%; float: left; ">FORUM</div>

     <div class="commnscnHead" style="height:100%; width:40%; float: left;"  >Search</div>
   <div class="commnscnHead" style="height:100%; width:15%; float: left;      background-color: #0071e3;color: white; " >Price Calculator</div>
  
  </div>

  </div>
  </div> -->


  
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="seconNav" style="    background-color: #f8f7f7 !important; height: 35px; border-top: 1px #4c4a575c solid !important; border-bottom: 1px #4c4a575c solid !important;">
   
  
  
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup1">
    <div class="container">
          <ul class="nav navbar-nav" style="width:100%;">
   <!-- <li class="nav-item dropdown" style="width:65px !important">
      <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         </a>
      
      </li> -->
            @php $brands = App\Brand::select('brands.name','brands.id')->join('sma_products','brands.id','=','sma_products.brand_id')->distinct()->get() @endphp
   <li  class="nav-item dropdown" style="width:10%; float: left;    padding-left: 9px;height: 100%;  border-left: 1px #0b0c0c52 solid; border-right: 1px #0b0c0c52 solid;">
      <a class="nav-link  dropdown-toggle qasimnavigatin mobBrand fontUbantu"  data-toggle="dropdown" style="   " ><a href="{{ route('BrandProductsList',$brands[0]->id) }}" class="droplinks" > BRANDS</a> </a>

      <ul class="dropdown-menu">
         @foreach($brands as $brand)
         <li>
            <a class="dropdown-item" href="{{ route('BrandProductsList',$brand->id) }}">
               <center>{{ ucwords($brand->name) }}</center>
            </a>
         </li>
         @endforeach
      </ul>
   </li>

     @php $accessories = App\AccessoryCategory::select('accessory_categories.title','accessory_categories.id')->join('accessories','accessory_categories.id','=','accessories.accessory_category_id')->distinct()->get() @endphp
   <li class="nav-item dropdown" style="width:15%; float: left; padding-left: 20px ;height: 100%;border-right: 1px #0b0c0c52 solid;">
      <a class="nav-link  dropdown-toggle qasimnavigatin fontUbantu" style="" href="#" data-toggle="dropdown" ><a href="{{ route('NewCategoryAccessories',$accessories[0]->id) }}" class="droplinks" >  ACCESSORIES </a> </a>
    
      <ul class="dropdown-menu">
         @foreach($accessories as $accessory)
         <li>
            <a class="dropdown-item" href="{{ route('NewCategoryAccessories',$accessory->id) }}">
               <center>{{ ucwords($accessory->title) }}</center>
            </a>
         </li>
         @endforeach
      </ul>
   </li>
   <li class="nav-item" style="width:10%; float: left; height: 100%">
      <a class="nav-link   qasimnavigatin fontUbantu" style="border-right: 1px #0b0c0c52 solid;" href="{{ route('blog') }}" 
         >BLOG </a>
   </li>
   <li class="nav-item" style="width:10%; float: left; height: 100%">
      <a class="nav-link   qasimnavigatin fontUbantu" style="border-right: 1px #0b0c0c52 solid;" href="{{ route('forum') }}" 
         > FORUMS  </a>
   </li>
   <li style="width:40%; float: left; height: 100%">
      <input type="search" id="myInput"  autocomplete="off"  onkeyup="myFunction()"  title="Type in a name" name="q"  class="searchTerm qasimnavigatin fontUbantu" placeholder="Search our Store" >
      <ul onblur="hideagain()" id="myUL" style="  background-color: white ;  box-shadow:  0 0 5px #000000;position:absolute ; width: 35% ;overflow: scroll ; z-index: 20; ;display: none ;  height: 500px;">
         <div>
         
            <p style="background-color: white;color: black;padding: 7px;font-weight: 600;border-style: none; ">DEVICES  
            
            
            <button id="srchbtnid" onclick="hideagain();" style="margin-left: 350px;
               background-color: #f8f7f7;
               color: black;
               font-weight: 600;
               border-style: none;">X</button>
               
               </p>
         </div>
      </ul>
   </li>
   <li class="nav-item dropdown" style="width:15%; float: left; height: 100%">
      <a class="nav-link qasimnavigatin fontUbantu" id="prcCal" href="{{ route('PriceEstimateCalculator') }}" 
         style="padding: 4px 6px 6px 13px !important;
     
         border-left: 1px #4c4a575c solid !important;
         font-weight: bold;
         background-color: #4a88c1 !important;
         color: white !important;
         height: 35.1px;
         margin-top: 0.5px;
         "> Price Calculator  </a>
   </li>
</ul>

</div>

    </div>
  </nav>

</Header>









