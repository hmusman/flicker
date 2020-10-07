 <style type="text/css">
   
   .pagination{
  float: right !important;
    margin-top: 20px !important;
 }

 </style>
 <nav class="navbar navbar-expand-lg navbar-light bg-light" id="topNav"  >
    <a class="navbar-brand" href="{{ route('home') }}"><img  id="logoFlickerflone" src="{{ asset('storage/images/logo Black-01.jpg') }}"></a>
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
          <i class="fa fa-user" style="margin-top: 6px ; color: white; "></i>&nbsp;&nbsp;REGISTER / LOGIN</span>

        @endif
      </div>
    </div>
  </nav>
  


  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="seconNav" style="    background-color: #f8f7f7 !important; height: 35px; border-top: 1px #4c4a575c solid !important; border-bottom: 1px #4c4a575c solid !important;">
   
  
  
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup1">
    
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li> -->
       
        <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             </a>
       
        </li>
       
     


        <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" 
          style="padding: 8px 30px 6px 30px !important;  height: 38px !important;  border-left: 1px #4c4a575c solid !important;font-weight: bold;"> BRANDS  </a>
            @php $brands = App\Brand::select('brands.name','brands.id')->join('sma_products','brands.id','=','sma_products.brand_id')->distinct()->get() @endphp
            <ul class="dropdown-menu fade-up">
              @foreach($brands as $brand)
                   <li><a class="dropdown-item" href="{{ route('BrandProductsList',$brand->id) }}"> <center>{{ ucwords($brand->name) }}</center></a></li>
              @endforeach
            </ul>
        </li>


          <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" 
          style="padding: 8px 30px 6px 30px !important;  height: 38px !important; ; border-left: 1px #4c4a575c solid !important; border-right: 1px #4c4a575c solid !important;font-weight: bold;"> ACCESSORIES  </a>
             @php $brands = App\AccessoryCategory::all() @endphp
            <ul class="dropdown-menu fade-up">
              @foreach($brands as $accessory)
                   <li><a class="dropdown-item" href="#"> <center>{{ ucwords($accessory->title) }}</center></a></li>
              @endforeach
            </ul>
          
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" 
          style="padding: 8px 70px 6px 70px !important;  height: 38px !important; ; border-left: 1px #4c4a575c solid !important;font-weight: bold;">Blog </a>
            <!-- <ul class="dropdown-menu fade-up">
            <li><a class="dropdown-item" href="#"> <center>LENOVO</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>HP </center></a></li>
            <li><a class="dropdown-item" href="#"> <center>DELL</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>APPLE</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>ACER</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>ASUS</center></a></li>
            
            </ul> -->
        </li>




        
        <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" 
          style="padding: 8px 70px 6px 70px !important;  height: 38px !important;  border-left: 1px #4c4a575c solid !important;font-weight: bold;"> Forums  </a>
            <!-- <ul class="dropdown-menu fade-up">
              <li><a class="dropdown-item" href="#"> <center>NuMetrex Fabric Chest Strap</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>JawBone UP</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>Samsung Gear 2</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>FitBit Flex</center></a></li>
           
            <li><a class="dropdown-item" href="#"> <center>Google Glass</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>GoQii</center></a></li>

            <li><a class="dropdown-item" href="#"> <center>Get Active Slim</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>LECHAL GPS Shoes</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>Fin Ring</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>Spotnsave Wristband</center></a></li>
           
            
            
            </ul> -->
        </li>



        
      

        





<li>
  <input type="search" id="myInput"  autocomplete="off"  onkeyup="myFunction()"  title="Type in a name" name="q"  class="searchTerm" placeholder="Search our Store" 
  style="background-position: right !important;outline: none;    width: 388px;margin-left: 3px;border: 1px #f8f7f7 solid;  height: 1px;  margin-top: 6px;background: url(images/ic_search_black_18dp.png) no-repeat scroll 7px 7px; ">




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
            margin-top: 4px;
        "> Price Calculator  </a>
           
        </li>
  </ul>
    </div>
  </nav>

  