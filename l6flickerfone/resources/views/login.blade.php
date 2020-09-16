<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
  </head>
  <script src="{{ asset('js/jquery-2.1.3.min.js') }}" ></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' media="all">
  <link href="{{ asset('css/mystyle.css') }}" rel='stylesheet' type='text/css' media="all">

  
  <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>

  <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
  
  <link rel="stylesheet" href="{{ asset('js/ScrollJS2//style.css') }}">
  
  <style>
 
    
    #myInput {
      background-image: url('/css/searchicon.png');
      background-position: 10px 12px;
      background-repeat: no-repeat;
      width: 50%;
      font-size: 16px;
      padding: 12px 20px 12px 40px;
      border: 1px solid #ddd;
      margin-bottom: 12px;
    }
    
    #myUL {
      list-style-type: none;
      padding: 0;
      margin: 0;
   
    }
    
    #myUL li a {
      
      margin-top: -1px; /* Prevent double borders */
      
      padding: 12px;
      text-decoration: none;
      color: #605d5d;
    display: block;
    font-weight: 600;
    }
    
    /* #myUL li a:hover:not(.header) {
      background-color: #eee;
    } */
    </style>


<style>
 




/* .slick-dots li button:before{
  content: none !important;
} */

#slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-prev slick-arrow"]{
  margin-left: 23px !important;
    top: 81px;
    height: 67px !important;
    width: 22px !important;
    background-color: #5f5b54;



    background-image: url('{{ asset("storage/images/headerimg/ic_keyboard_arrow_left_white_18dp.png")}}') !important;
    background-position: center !important;
  
    background-repeat: no-repeat;
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
}


#slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]{
  right: 2px !important;
    top: 81px !important;
    height: 67px !important;
    width: 22px !important;
    background-color: #5f5b54;


    background-image: url('{{ asset("storage/images/headerimg/ic_keyboard_arrow_right_white_18dp.png")}}') !important;
    background-position: center !important;
  
    background-repeat: no-repeat;
    border-top-left-radius: 6px;
    border-bottom-left-radius: 6px;
}

.slick-prev {
    left: 0px !important;
    z-index: 10 !important;
}


ul[class="dropdown-menu fade-up"] >  li {
    display: block !important;
}

/* #bloghr::after{
  background: #e3e6e5!important;
  background: #1c1e1e!important;
    display: block;
    position: absolute;
    left: 0;
    width: 60%;
    height: 2px !important;
    content: '' !important;
    text-align: center;
    margin-left: 67px;
    margin-top: 24px !important;
} */
</style>










<style>
.dropdown-toggle::after {
content: none !important;
}

.navbar-nav > a{
  background-color: #0071e3 !important;
    padding: 5px 19px 5px 19px !important;
    margin-right: 21px !important;
    border-radius: 25px !important;   
    color: white !important;
 
}

ul[class="dropdown-menu fade-up"] > li::after{
  background: #e3e6e5!important;
  display: block;
    position: absolute;
   
    left: 0;
   width: 90%;
    height: 1px !important;
    content: '' !important;
    text-align: center;
    margin-left: 8px;
}


.col-md-4{
  padding-right: 0px !important;
  padding-left: 0px !important;
}

/* @media (min-width:500px){
  
 #seconNav{
   background-color: red !important;
 }
  } */
  @media (min-width:500px){
  
    #seconNav{
   background-color: rgb(238, 237, 237) !important;
 }


  }


  @media (max-width: 550px){
#navbarNavAltMarkup1{
  background-color: #e6e6e6 !important;
    z-index: 12 !important;
    margin-left: -12px !important;
    width: 100% !important;
}

input[id="myInput"]{
  width: 333px !important;
}

#prcCal{
  margin-left: -1px !important;
}
ul[id="myUL"]{
  width: 87% !important;
}


ul[class="dropdown-menu fade-up show"] > li{
  display: block !important;
}

    #reglogin{
      right: 81px !important;
    font-size: 13px !important;
      right: 91px !important;
    font-size: 10px !important;
    border-bottom: none !important;
    
    bottom: 21px !important;

      
    border-bottom: none !important;
 }
#logoFlickerflone{
  height: 48px !important;
    width: 181px !important;
    margin-left: -17px !important;
    font-size: 58px;
   

}

  }

</style>
<style type="text/css">

  /* ============ only desktop view ============ */
  @media all and (min-width: 992px) {
    .navbar .nav-item .dropdown-menu{  display:block; opacity: 0;  visibility: hidden; transition:.3s; margin-top:0;  }
    .navbar .nav-item:hover .nav-link{ color:  rgba(0,0,0,.5) }
    .navbar .dropdown-menu.fade-down{ top:80%; transform: rotateX(-75deg); transform-origin: 0% 0%; }
    .navbar .dropdown-menu.fade-up{ top:180%;  }
    .navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
  }	
  /* ============ desktop view .end// ============ */
  
  
  </style>






<style>

img[src="{{ asset('storage/images/logo Black-01.jpg') }}"]{
  height: 65px !important;
    /* top: -1px; */
    margin-top: -8px;
    margin-bottom: -8px;
}


div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
  margin-left: 21px;
}
  
@media (max-width: 550px){

#NewPhones{
  padding: 0px 10px 0px 10px !important;
}


}




@media (min-width: 280px) and (max-width: 319px) {

#extlrgwid{
  width: 103% !important;
}
div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
  top: 128px !important;
    
    width: 92% !important;
}

#slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]{
  right: -1px !important;
}


}

@media (min-width: 320px) and (max-width: 359px) {
  div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
    top: 148px !important;
    margin-left: 17px !important;
  }

  input[id="myInput"] {
    width: 293px !important;
}

button[id="srchbtnid"]{
  margin-left: 237px !important;
}
}


@media (min-width: 360px) and (max-width: 374px) {
  ul[class="slick-dots"]{
    margin-top: 9px !important;
  }


</style>


<style>
  @media (max-width: 550px){

    #resphrOnmob{
      margin-top: 10px !important;

}
}
</style>


<body>

  <a href="#" id="scroll" style="display: none;"><span></span></a>


  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="topNav"  >
    <a class="navbar-brand" href="#"><img  id="logoFlickerflone" src="{{ asset('storage/images/logo Black-01.jpg') }}"></a>
    <button style="background-color: white !important;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup, #navbarNavAltMarkup1" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <!-- <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">Buy</a>
        <a class="nav-item nav-link" href="#">Sell</a>
        <a class="nav-item nav-link " href="#">New</a> -->






        <span id="reglogin" style="    position: absolute;
        right: 46px;
        bottom: 25px;color: white !important; border-bottom: 1px white solid  "  href="login.html" align="right"    >
          <i class="fa fa-user" style="margin-top: 6px ; color: white; "></i>&nbsp;&nbsp;REGISTER / LOGIN</span>









      </div>
    </div>
  </nav>
  


  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="seconNav" style="    background-color: #f8f7f7 !important;
  height: 35px;
  border-top: 1px #4c4a575c solid !important;
  border-bottom: 1px #4c4a575c solid !important;">
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
          style="padding: 8px 30px 6px 30px !important;  height: 38px !important; ; border-left: 1px #4c4a575c solid !important;font-weight: bold;"> BRANDS  </a>
            <ul class="dropdown-menu fade-up">
              <li><a class="dropdown-item" href="#"> <center>APPLE</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>GOOGLE</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>HUAWIE</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>VIVO</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>OPPO</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>NOKIA</center></a></li>
            
            </ul>
        </li>



        
        <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" 
          style="padding: 8px 30px 6px 30px !important;  height: 38px !important; ; border-left: 1px #4c4a575c solid !important;font-weight: bold;"> TABLETS / PC </a>
            <ul class="dropdown-menu fade-up">
            <li><a class="dropdown-item" href="#"> <center>LENOVO</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>HP </center></a></li>
            <li><a class="dropdown-item" href="#"> <center>DELL</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>APPLE</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>ACER</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>ASUS</center></a></li>
            
            </ul>
        </li>




        
        <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" 
          style="padding: 8px 30px 6px 30px !important;  height: 38px !important; ; border-left: 1px #4c4a575c solid !important;font-weight: bold;"> WEAREABLES  </a>
            <ul class="dropdown-menu fade-up">
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
           
            
            
            </ul>
        </li>



        
        <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" 
          style="padding: 8px 30px 6px 30px !important;  height: 38px !important; ; border-left: 1px #4c4a575c solid !important; border-right: 1px #4c4a575c solid !important;font-weight: bold;"> ACCESSORIES  </a>
            <ul class="dropdown-menu fade-up">
            <li><a class="dropdown-item" href="#"> <center>Charger Cables & Docks</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>Mobile Covers & Cases</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>Power Banks</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>Other Accessories</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>Phone Stands</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>Screen Protectors</center></a></li>

            <li><a class="dropdown-item" href="#"> <center>Monopod & Selfie Sticks</a></li>
            <li><a class="dropdown-item" href="#"> <center>Phone Rings</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>VR Glasses</center></a></li>
            <li><a class="dropdown-item" href="#"> <center>Battery Packs</center></a></li>
            
            
            </ul>
        </li>

        





		<li>
		  <input type="search" id="myInput"  autocomplete="off"  onkeyup="myFunction()"  title="Type in a name" name="q"  class="searchTerm" placeholder="Search our Store" 
		  style="background-position: right !important;outline: none;    width: 388px;margin-left: 3px;border: 1px #f8f7f7 solid;  height: 1px;  margin-top: 6px;background: url(images/ic_search_black_18dp.png) no-repeat scroll 7px 7px; ">




		  <ul onblur="hideagain()" id="myUL" style="  background-color: white ;  box-shadow:  0 0 5px #000000;position:absolute  ;width: 29%;  overflow: scroll ; z-index: 20; ;display: none ;  height: 500px;">
		    <!-- <div>
		      <button id="srchbtnid" onclick="hideagain();" style="margin-left: 350px;background-color: white;color: black;padding: 7px;font-weight: 600;border-style: none;">X</button>
		    </div> -->

		    <div>
		     <p style="background-color: white;color: black;padding: 7px;font-weight: 600;border-style: none;">DEVICES  <button id="srchbtnid" onclick="hideagain();" style="margin-left: 269px;
		      background-color: #f8f7f7;
		      color: black;
		   
		      font-weight: 600;
		      border-style: none;">X</button></p>
		    </div>



		    <li>
		      <div class="row">
		        <div class="col-md-2">
		          <div id="setwidth" style="    height: 115px; width:100%;      margin-right: 115px;">
		            <img src="{{ asset('storage/images/LiveSrchImages/Apple_iPhone_12_5G_1.jpg') }}" style="  padding-left: 12px;  height: 91px;  ">
		             </div>
		        </div>
		        <div class="col-md-10">
		          <div id="setwidth" style="    height: 115px; width:100%;       margin-top: -15px; margin-left: 24px; margin-right: 115px;">  
		            <a href="#">Apple iPhone 12 Pro Max         
		            </a>
		          </div>
		        </div>
		      </div>
		    </li>




		    <li>
		      <div class="row">
		        <div class="col-md-2">
		          <div id="setwidth" style="    height: 115px; width:100%;      margin-right: 115px;">
		            <img src="{{ asset('storage/images/LiveSrchImages/852D3B1A-4511-EA95-7918-A7FAAAF29DE0.jpg') }}" style="     padding-left: 3px; height: 97px;  ">
		             </div>
		        </div>
		        <div class="col-md-10">
		          <div id="setwidth" style="    height: 115px; width:100%;       margin-top: -15px; margin-left: 24px; margin-right: 115px;">  
		            <a href="#">Redmi Note 9 Pro      
		            </a>
		          </div>
		        </div>
		      </div>
		    </li>




		    <li>
		      <div class="row">
		        <div class="col-md-2">
		          <div id="setwidth" style="    height: 115px; width:100%;      margin-right: 115px;">
		            <img src="{{ asset('storage/images/LiveSrchImages/303612.png') }}" style=" 
		            padding-left: 6px;
		            height: 106px;
		         ">
		             </div>
		        </div>
		        <div class="col-md-10">
		          <div id="setwidth" style="    height: 115px; width:100%;       margin-top: -15px; margin-left: 24px; margin-right: 115px;">  
		            <a href="#">Apple iphone x 64 GB     
		            </a>
		          </div>
		        </div>
		      </div>
		    </li>




		    <li>
		      <div class="row">
		        <div class="col-md-2">
		          <div id="setwidth" style="    height: 115px; width:100%;      margin-right: 115px;">
		            <img src="{{ asset('storage/images/LiveSrchImages/alcatel-3x-2019.jpg') }}" style="     padding-left: 12px;
		            height: 98px;
		            margin-top: 5px; ">
		             </div>
		        </div>
		        <div class="col-md-10">
		          <div id="setwidth" style="    height: 115px; width:100%;       margin-top: -15px; margin-left: 24px; margin-right: 115px;">  
		            <a href="#">Alcatel jabi=ong Green 4 GB     
		            </a>
		          </div>
		        </div>
		      </div>
		    </li>



		    <li>
		      <div class="row">
		        <div class="col-md-2">
		          <div id="setwidth" style="    height: 115px; width:100%;      margin-right: 115px;">
		            <img src="{{ asset('storage/images/LiveSrchImages/12-Gold-1-600x600.jpg') }}" style="  padding-left: 0px; height: 110px;  ">
		             </div>
		        </div>
		        <div class="col-md-10">
		          <div id="setwidth" style="    height: 115px; width:100%;       margin-top: -15px; margin-left: 24px; margin-right: 115px;">  
		            <a href="#">Apple VIVO Y15 Gold 16 GB      
		            </a>
		          </div>
		        </div>
		      </div>
		    </li>




		    <li>
		      <div class="row" style="margin-top: 9px;">
		        <div class="col-md-2">
		          <div id="setwidth" style="    height: 115px; width:100%;      margin-right: 115px;">
		            <img src="{{ asset('storage/images/LiveSrchImages/1560367_6.jpg') }}" style="     padding-left: 12px;
		            height: 92px;
		            width: 104px;
		            margin-left: 0px;  ">
		             </div>
		        </div>
		        <div class="col-md-10">
		          <div id="setwidth" style="    height: 115px; width:100%;       margin-top: -15px; margin-left: 24px; margin-right: 115px;">  
		            <a href="#">HTC Play 2 Black 4 GB      
		            </a>
		          </div>
		        </div>
		      </div>
		    </li>




		    <li>
		      <div class="row">
		        <div class="col-md-2">
		          <div id="setwidth" style="    height: 115px; width:100%;      margin-right: 115px;">
		            <img src="{{ asset('storage/images/LiveSrchImages/Apple_iPhone_12_5G_1.jpg') }}" style="  padding-left: 12px;  height: 91px;  ">
		             </div>
		        </div>
		        <div class="col-md-10">
		          <div id="setwidth" style="    height: 115px; width:100%;       margin-top: -15px; margin-left: 24px; margin-right: 115px;">  
		            <a href="#">HTC Play 2 Black 4 GB      
		            </a>
		          </div>
		        </div>
		      </div>
		    </li>

		  
		    <!-- <div class="row" style="padding-right: 167px;"><div class="col-md-12" style="background-color: rgb(30, 219, 46);"><li><a href="#">Agnes</a></li></div></div> -->
		  </ul>
		  

		  
		</li>




		<li class="nav-item dropdown">
		  <a class="nav-link  dropdown-toggle" id="prcCal" href="#" data-toggle="dropdown" 
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
	<style type="text/css">label{ color: black;  }</style>
   <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <div class="col-md-4 col-sm-6 sign-in" style="color: black;">
                    <h4 class="">Sign in</h4>
                    <p class="">Hello, Welcome to your account.</p>
                   
                    @error('loginError')
                    	<p class="alert alert-warning">{{ $message }}</p>
                    @enderror
                    
                    <form action="/LoginSession" class="register-form outer-top-xs"  method="post" accept-charset="utf-8">
                    	@csrf
                    <div class="form-group">
                        <label class="info-title">Username/Email</label>
                        <input type="text" name="login_email" id="username" class="form-control unicase-form-control text-input" value="{{ old('login_email') }}" required placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label class="info-title">Password</label>
                        <input type="password" id="password" name="login_password" class="form-control unicase-form-control text-input" placeholder="Password" value="{{ old('login_password') }}">
                    </div>
                   <!--  <div class="radio outer-xs">
                        <label>
                            <input style="width: 3% !important;" type="radio" value="1" name="remember_me"><span> Remember me                                </label>
                        <a href="#" class="forgot-password pull-right">Forgot your Password?</a>
                    </div> -->
                    <button type="submit" class="btn-upper btn subbtn checkout-page-button">Login</button>
                    </form>     
                  
                
					<!-- <br/>
					<br/><br/>
                  
                      <form action="/action_page.php">
                        <div class="row">
                          <h4 >Login with Social Media </h4>
                          <p class="">Hello, Welcome to your account.</p>
                    <br/><br/>
                          <div class="col">
                            <a href="#" class="fb btn" onmouseover="this.style.backgroundColor = '#2b4375'" ; >
                              <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                             </a>
                            <a href="#" class="twitter btn" onmouseover="this.style.backgroundColor = '#4c8cbd'" ;>
                              <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                            </a>
                            <a href="#" class="google btn" onmouseover="this.style.backgroundColor = '#ca4e3e'" ;>
                              <i class="fa fa-google fa-fw">
                              </i> Login with Google+
                            </a>
                          </div>
                    
                         
                          
                        </div>
                      </form> -->
                 
                  
                  
                  </div>
                <div class="col-md-8 col-sm-6 create-new-account" style="color: black;">
                    	<div class="row">
                    		<div class="col-md-12">
                    			<h4 class="checkout-subtitle">Create a new account</h4>
                    			<p class="text title-tag-line">Create your new account.</p>
                    		</div>
                    	</div>

                    	<div class="row">
                    		<div class="form-group col-md-12 outer-top-xs">
		                        <label class="info-title new_lable">Select User Type <span>*</span></label><br/>
		                        <select name="type" class="form-control unicase-form-control text-input" id="usertype">
		                            <option <?php if( old('type')=='buyer' ){ echo "selected=''"; }?> value="buyer">Indvidual Seller</option>
		                            <option <?php if( old('type')=='seller' ){ echo "selected=''"; }?> value="seller">Wholesale Seller</option>
		                        </select>
		                    </div>
                    	</div>
                    	@error('alreadyError')
                    		<p class="alert alert-warning">{{ $message }}</p>
                    	@enderror

                    	@error('success')
                    		<p class="alert alert-success">{{ $message }}</p>
                    	@enderror
                   
                    <div class="register_form">
                    	
                        <form action="/Register/Buyer" class="register-form outer-top-xs" role="form" method="post" accept-charset="utf-8">
                        	@csrf
                            <input type="hidden" value="buyer" name="type" />
                            <div class="row">
                            	<div class="col-sm-6">
                                    <div class="form-group form-user">
                                        <label class="control-label font-ct" for="input-email"><label for="name">Name</label><span style="color: #a94442">*</span></label>
                                        <input type="text" name="buyer_name" value="{{ old('buyer_name') }}"  class="form-control" id="name" />
                                       	@error('buyer_name')
                                       		<p class="text-danger mt-2">{{ $message }}</p>
                                       	@enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-user">
                                        <label class="control-label font-ct" for="input-email"><label for="Company">Company</label></label>
                                        <input type="text" name="buyer_company" value="{{ old('buyer_company') }}"  class="form-control " id="Company" />
                                    	@error('buyer_company')
                                       		<p class="text-danger mt-2">{{ $message }}</p>
                                       	@enderror
                                    </div>
                                </div>
                            </div>
                            

                            <div class="row">
                            	<div class="col-sm-6">
                                    <div class="form-group form-user">
                                        <label class="control-label font-ct" for="input-email"><label for="phone">Phone</label></label>
                                        <input type="text" name="buyer_phone" value="{{ old('buyer_phone') }}" maxlength="11"  class="form-control" id="phone" />
                                        	@error('buyer_phone')
                                           		<p class="text-danger mt-2">{{ $message }}</p>
                                           	@enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-user">
                                        <label class="control-label font-ct" for="input-email"><label for="email">Email</label><span style="color: #a94442">*</span></label>
                                        <input type="email" id="email" name="buyer_email" value="{{ old('buyer_email') }}" class="form-control" style="margin:0;"/>
                                        	@error('buyer_email')
                                           		<p class="text-danger mt-2">{{ $message }}</p>
                                           	@enderror
                                    </div>
                                </div>
                            </div>
                            

                            <div class="row">
                            	<div class="col-sm-6">
                                    <div class="form-group form-user">
                                        <label class="control-label font-ct" for="input-email"><label for="username">Username</label><span style="color: #a94442">*</span></label>
                                        <input type="text" name="buyer_username" value="{{ old('buyer_username') }}"  class="form-control " id="username" />
                                        	@error('buyer_username')
                                           		<p class="text-danger mt-2">{{ $message }}</p>
                                           	@enderror
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-user">
                                            <label class="control-label font-ct" for="input-text"><label for="city">City</label><span style="color: #a94442">*</span></label>

                                            <select name="buyer_city" class="form-control select3 unicase-form-control text-input" id="city">
												<option value="18 Hazari">18 Hazari</option>
												<option value="Abbotabad">Abbotabad</option>
												<option value="Abdul Hakim">Abdul Hakim</option>
												<option value="adda bun bosan">adda bun bosan</option>
												<option value="Alipur">Alipur</option>
												<option value="arif wala">arif wala</option>
												<option value="Attock">Attock</option>
												<option value="Baddin">Baddin</option>
												<option value="Badin">Badin</option>
												<option value="Bagh">Bagh</option>
												<option value="Bahawal Nagar">Bahawal Nagar</option>
												<option value="Bahawalpur">Bahawalpur</option>
												<option value="Balakot">Balakot</option>
												<option value="Bannu">Bannu</option>
												<option value="Basir pur">Basir pur</option>
												<option value="Bukkur">Bukkur</option>
												<option value="Burewala">Burewala</option>
												<option value="Chakwal">Chakwal</option>
												<option value="Chaman">Chaman</option>
												<option value="Channab Nagar">Channab Nagar</option>
												<option value="Charsadda">Charsadda</option>
												<option value="Chicha watni">Chicha watni</option>
												<option value="Chistian">Chistian</option>
												<option value="Dadu">Dadu</option>
												<option value="Daska">Daska</option>
												<option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
												<option value="Dera Ismail Khan">Dera Ismail Khan</option>
												<option value="Dinga">Dinga</option>
												<option value="Faisalabad">Faisalabad</option>
												<option value="faisalabad">faisalabad</option>
												<option value="Fort Abbass">Fort Abbass</option>
												<option value="Ghotki">Ghotki</option>
												<option value="Gujjar Khan">Gujjar Khan</option>
												<option value="Gujranwala">Gujranwala</option>
												<option value="Gujrat">Gujrat</option>
												<option value="Gwadar">Gwadar</option>
												<option value="Hafizabad">Hafizabad</option>
												<option value="Hangoo">Hangoo</option>
												<option value="Haripur">Haripur</option>
												<option value="Hasilpur">Hasilpur</option>
												<option value="Hyderabad">Hyderabad</option>
												<option value="Islamabad">Islamabad</option>
												<option value="Jacobabad">Jacobabad</option>
												<option value="Jaffarabad">Jaffarabad</option>
												<option value="Jalalpur Bhattian">Jalalpur Bhattian</option>
												<option value="jalalpur jattan">jalalpur jattan</option>
												<option value="Jamshoro">Jamshoro</option>
												<option value="Jauharabad">Jauharabad</option>
												<option value="Jhang">Jhang</option>
												<option value="Kahuta">Kahuta</option>
												<option value="kalllar Kahar">kalllar Kahar</option>
												<option value="Karachi">Karachi</option>
												<option value="Kasur">Kasur</option>
												<option value="Khairpur">Khairpur</option>
												<option value="Khanpur">Khanpur</option>
												<option value="Kharian">Kharian</option>
												<option value="Khuzdar">Khuzdar</option>
												<option value="Kot Addu">Kot Addu</option>
												<option value="Lahore">Lahore</option>
												<option value="LalaMusa">LalaMusa</option>
												<option value="Larkana">Larkana</option>
												<option value="Lasbela">Lasbela</option>
												<option value="Layyah">Layyah</option>
												<option value="Mansehra">Mansehra</option>
												<option value="Mardan">Mardan</option>
												<option value="Mehrab Kot">Mehrab Kot</option>
												<option value="Mehrab Pur">Mehrab Pur</option>
												<option value="Mianwali">Mianwali</option>
												<option value="Mirpur AJK">Mirpur AJK</option>
												<option value="Mirpur Khas">Mirpur Khas</option>
												<option value="Multan">Multan</option>
												<option value="Muridkey">Muridkey</option>
												<option value="Muzzafar Garh">Muzzafar Garh</option>
												<option value="Nankana Sahib">Nankana Sahib</option>
												<option value="NAROWAL">NAROWAL</option>
												<option value="Nasirabad">Nasirabad</option>
												<option value="Nawabshah">Nawabshah</option>
												<option value="Nowshera">Nowshera</option>
												<option value="Okara">Okara</option>
												<option value="Pak Pattan">Pak Pattan</option>
												<option value="Pattoki">Pattoki</option>
												<option value="Peshawar">Peshawar</option>
												<option value="Petaro">Petaro</option>
												<option value="Quetta">Quetta</option>
												<option value="Rahim Yar Khan">Rahim Yar Khan</option>
												<option value="Rajan Pur">Rajan Pur</option>
												<option value="Rawalpindi">Rawalpindi</option>
												<option value="Sahiwal">Sahiwal</option>
												<option value="Sangla hil">Sangla hil</option>
												<option value="Sargodha">Sargodha</option>
												<option value="shahdara">shahdara</option>
												<option value="Shahkot">Shahkot</option>
												<option value="Sheikhupura">Sheikhupura</option>
												<option value="Shikarpur">Shikarpur</option>
												<option value="Sialkot">Sialkot</option>
												<option value="Sibi">Sibi</option>
												<option value="Sukkur">Sukkur</option>
												<option value="Swabi">Swabi</option>
												<option value="Talagang">Talagang</option>
												<option value="Taunsa">Taunsa</option>
												<option value="Taxila">Taxila</option>
												<option value="Turbat">Turbat</option>
												<option value="Vehari">Vehari</option>
												<option value="Wah Cantt">Wah Cantt</option>
												<option value="Wazirabad">Wazirabad</option>
												<option value="Zhob">Zhob</option>
												</select>
													@error('buyer_city')
                                           		<p class="text-danger mt-2">{{ $message }}</p>
                                           	@enderror

                                        </div>
                                    </div>
                            </div>
                            

                            <div class="row">
                            	<div class="col-sm-6">
                                    <div class="form-group form-user">
                                        <label class="control-label font-ct" for="input-email"><label for="password">Password</label><span style="color: #a94442">*</span></label>
                                        <input type="password" name="buyer_password" value="{{ old('buyer_password') }}"  class="form-control" id="password" />
                                        	@error('buyer_password')
                                           		<p class="text-danger mt-2">{{ $message }}</p>
                                           	@enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group form-user">
                                        <label class="control-label font-ct" for="input-email"><label for="password_confirm">Confirm Password</label><span style="color: #a94442">*</span></label>
                                        <input type="password" name="buyer_password_confirmation" value="{{ old('buyer_password_confirmation') }}"  class="form-control" id="password_confirmation" />
                                       
                                    </div>
                            	</div>
                            </div>

                        	<button type="submit" class="btn-upper btn subbtn checkout-page-button">Sign Up</button>
                        </form>                            
                    </div>


                    <div class="create-new-account business_form" style="display: none;">
                        <form action="/Register/Seller" class="register-form outer-top-xs" role="form" method="post" accept-charset="utf-8">
                        	@csrf
                            <input type="hidden" value="seller" name="type" />
                            <div class="row">
                            	<div class="form-group col-md-6">
                                    <label class="info-title">Username <span>*</span></label>
                                    <input type="text" name="username" value="{{ old('username') }}"  class="form-control unicase-form-control text-input" id="full_name"/>
                                    @error('username')
                                       		<p class="text-danger mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="info-title">Name <span>*</span></label>
                                    <input type="text" name="name" value="{{ old('name') }}"  class="form-control unicase-form-control text-input" id="full_name"/>
                                    @error('name')
                                       		<p class="text-danger mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            

                            <div class="row">
                            	<div class="form-group col-md-6">
                                    <label class="info-title">Email <span>*</span></label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control unicase-form-control text-input"/>
                                    @error('email')
                                       		<p class="text-danger mt-2">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="form-group col-md-6">
                                    <label class="info-title">Phone <span>*</span></label>
                                    <input type="text" name="phone" value="{{ old('phone') }}"  class="form-control unicase-form-control text-input" id="phone" />
                                    @error('phone')
                                       		<p class="text-danger mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            

                            <div class="row">
                            	 <div class="form-group col-md-6">
                                    <label class="info-title">Shop name<span>*</span></label>
                                    <input type="text" name="shop" value="{{ old('shop') }}"  class="form-control unicase-form-control text-input" id="code"  />
                                    @error('shop')
                                       		<p class="text-danger mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="info-title">Shop City</label>
                                    <select name="city" class="form-control unicase-form-control text-input" id="category">
										<option value="18 Hazari">18 Hazari</option>
										<option value="Abbotabad">Abbotabad</option>
										<option value="Abdul Hakim">Abdul Hakim</option>
										<option value="adda bun bosan">adda bun bosan</option>
										<option value="Alipur">Alipur</option>
										<option value="arif wala">arif wala</option>
										<option value="Attock">Attock</option>
										<option value="Baddin">Baddin</option>
										<option value="Badin">Badin</option>
										<option value="Bagh">Bagh</option>
										<option value="Bahawal Nagar">Bahawal Nagar</option>
										<option value="Bahawalpur">Bahawalpur</option>
										<option value="Balakot">Balakot</option>
										<option value="Bannu">Bannu</option>
										<option value="Basir pur">Basir pur</option>
										<option value="Bukkur">Bukkur</option>
										<option value="Burewala">Burewala</option>
										<option value="Chakwal">Chakwal</option>
										<option value="Chaman">Chaman</option>
										<option value="Channab Nagar">Channab Nagar</option>
										<option value="Charsadda">Charsadda</option>
										<option value="Chicha watni">Chicha watni</option>
										<option value="Chistian">Chistian</option>
										<option value="Dadu">Dadu</option>
										<option value="Daska">Daska</option>
										<option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
										<option value="Dera Ismail Khan">Dera Ismail Khan</option>
										<option value="Dinga">Dinga</option>
										<option value="Faisalabad">Faisalabad</option>
										<option value="faisalabad">faisalabad</option>
										<option value="Fort Abbass">Fort Abbass</option>
										<option value="Ghotki">Ghotki</option>
										<option value="Gujjar Khan">Gujjar Khan</option>
										<option value="Gujranwala">Gujranwala</option>
										<option value="Gujrat">Gujrat</option>
										<option value="Gwadar">Gwadar</option>
										<option value="Hafizabad">Hafizabad</option>
										<option value="Hangoo">Hangoo</option>
										<option value="Haripur">Haripur</option>
										<option value="Hasilpur">Hasilpur</option>
										<option value="Hyderabad">Hyderabad</option>
										<option value="Islamabad">Islamabad</option>
										<option value="Jacobabad">Jacobabad</option>
										<option value="Jaffarabad">Jaffarabad</option>
										<option value="Jalalpur Bhattian">Jalalpur Bhattian</option>
										<option value="jalalpur jattan">jalalpur jattan</option>
										<option value="Jamshoro">Jamshoro</option>
										<option value="Jauharabad">Jauharabad</option>
										<option value="Jhang">Jhang</option>
										<option value="Kahuta">Kahuta</option>
										<option value="kalllar Kahar">kalllar Kahar</option>
										<option value="Karachi">Karachi</option>
										<option value="Kasur">Kasur</option>
										<option value="Khairpur">Khairpur</option>
										<option value="Khanpur">Khanpur</option>
										<option value="Kharian">Kharian</option>
										<option value="Khuzdar">Khuzdar</option>
										<option value="Kot Addu">Kot Addu</option>
										<option value="Lahore">Lahore</option>
										<option value="LalaMusa">LalaMusa</option>
										<option value="Larkana">Larkana</option>
										<option value="Lasbela">Lasbela</option>
										<option value="Layyah">Layyah</option>
										<option value="Mansehra">Mansehra</option>
										<option value="Mardan">Mardan</option>
										<option value="Mehrab Kot">Mehrab Kot</option>
										<option value="Mehrab Pur">Mehrab Pur</option>
										<option value="Mianwali">Mianwali</option>
										<option value="Mirpur AJK">Mirpur AJK</option>
										<option value="Mirpur Khas">Mirpur Khas</option>
										<option value="Multan">Multan</option>
										<option value="Muridkey">Muridkey</option>
										<option value="Muzzafar Garh">Muzzafar Garh</option>
										<option value="Nankana Sahib">Nankana Sahib</option>
										<option value="NAROWAL">NAROWAL</option>
										<option value="Nasirabad">Nasirabad</option>
										<option value="Nawabshah">Nawabshah</option>
										<option value="Nowshera">Nowshera</option>
										<option value="Okara">Okara</option>
										<option value="Pak Pattan">Pak Pattan</option>
										<option value="Pattoki">Pattoki</option>
										<option value="Peshawar">Peshawar</option>
										<option value="Petaro">Petaro</option>
										<option value="Quetta">Quetta</option>
										<option value="Rahim Yar Khan">Rahim Yar Khan</option>
										<option value="Rajan Pur">Rajan Pur</option>
										<option value="Rawalpindi">Rawalpindi</option>
										<option value="Sahiwal">Sahiwal</option>
										<option value="Sangla hil">Sangla hil</option>
										<option value="Sargodha">Sargodha</option>
										<option value="shahdara">shahdara</option>
										<option value="Shahkot">Shahkot</option>
										<option value="Sheikhupura">Sheikhupura</option>
										<option value="Shikarpur">Shikarpur</option>
										<option value="Sialkot">Sialkot</option>
										<option value="Sibi">Sibi</option>
										<option value="Sukkur">Sukkur</option>
										<option value="Swabi">Swabi</option>
										<option value="Talagang">Talagang</option>
										<option value="Taunsa">Taunsa</option>
										<option value="Taxila">Taxila</option>
										<option value="Turbat">Turbat</option>
										<option value="Vehari">Vehari</option>
										<option value="Wah Cantt">Wah Cantt</option>
										<option value="Wazirabad">Wazirabad</option>
										<option value="Zhob">Zhob</option>
										<option value="1">Clothing</option>
										<option value="2">Electronics</option>
										<option value="6">Health and Beauty</option>
										<option value="9">Home and Garden</option>
										<option value="5">Jewellery</option>
										<option value="7">Kids and Babies</option>
										<option value="3">Shoes</option>
										<option value="8">Sports</option>
										<option value="4">Watches</option>
										</select>
										@error('city')
                                       		<p class="text-danger mt-2">{{ $message }}</p>
                                    	@enderror
                                </div>
                            </div>
                           

                            <div class="row">
                            	<div class="form-group col-md-6">
                                    <label class="info-title">Password <span>*</span></label>
                                    <input type="password" name="password" value="{{ old('password') }}"  class="form-control unicase-form-control text-input" id="password" />
                                    @error('password')
                                       		<p class="text-danger mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="info-title">Confirm Password <span>*</span></label>
                                    <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"  class="form-control unicase-form-control text-input" id="password" />
                                   
                                </div>
                            </div>
                            

                        	<button type="submit" class="btn-upper btn btn-primary checkout-page-button" >Sign Up</button>
                        </form>                            
                    </div>


                </div>



            </div>
        </div>
    </div>

<footer style=" background-color: #dcdcdc;margin-top: 20px;">


 <div class="row">
   <div class="col-md-5" style="    padding: 26px 10px 5px 26px !important;">
  <p style="" ><a href="#" style="text-decoration: none;color: #4f4a4b !important; font-weight: bold;"> ABOUT US</a> &nbsp;&nbsp;&nbsp;   <a href="#" style="text-decoration: none;color: #4f4a4b !important;font-weight: bold;"> CONTACT US</a>  &nbsp;&nbsp;&nbsp;      <a href="#" style="text-decoration: none;color: #4f4a4b !important;font-weight: bold;">SUPPORT</a></p>
  

<p style="color:#4f4a4b !important ;font-weight: 600;     font-size: 13px;">
  Online prices and selection generally match the prevailing ones in market, but may vary.<br/>
  Prices are subject to change.&copy; 2020 Flickerfone. All rights reserved.<br/>
  FLICKERFONE.COM and, the FLICKERFONE logo are trademarks of Shallbe Group. 
</p>




</div>


<div class="col-md-1"></div>


   <div class="col-md-6" style="    padding: 42px 22px 5px 26px !important;" >
  
  
    <p style="color:#4f4a4b !important ; text-transform: uppercase;font-weight: 600;     font-size: 13px;   text-align: right; ">
      We do not flood your inbox, join our social network instead. <a href="#fcb"><img style="    height: 15px; width: 17px;" src="{{ asset('storage/images/headerimg/download-removebg-preview.png') }}" /> </a>   <a href="#twiter"><img style="    height: 20px; width: 20px;" src="{{ asset('storage/images/headerimg/twitter-1722376-1466162-removebg-preview.png') }}"></a><br/>
      
    </p>


    <p style="color:#4f4a4b !important ; text-transform: uppercase;font-weight: 600;     margin-right: 42px;    font-size: 13px;    text-align: right; ">
     IN SUPPORT OF <font style="    font-size: 33px;color: #c6ccd2;"> &empty;</font> <font style="margin-left: -35px;     "> SPAM </font>CONTRACT 
      
    </p>
  
  </div>


 </div>
  
</footer>	
<script>
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
 slidesToShow: 5,
 slidesToScroll: 1,
  autoplay: true,
 autoplaySpeed: 3000,



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






$(document).ready(function(){
        $('.autoplay').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  // autoplay: true,
  autoplaySpeed: 3000,


  dots: true,
 
  // variableWidth: true
});
});











</script>

  
<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
        
<script type="text/javascript" src="{{ asset('slick/jquery3.2.1.js') }}"></script>
  
<script type="text/javascript" src="{{ asset('slick/slick.js') }}"></script>
 




<!-- <script  src="js/jquery-2.1.3.min.js"></script> -->

<script  src="{{ asset('js/ScrollJS2/script.js') }}"></script>

	<script language="javascript">
        $(document).ready(function () {


        	if($('#usertype option:selected').val() == 'seller') 
        	{
                $('.business_form').show();
                $('.register_form').hide();
                $('.title-tag-line').html('Business Registration');
            } 
            else 
            {
                $('.business_form').hide();
                $('.register_form').show();
                $('.title-tag-line').html('Create your new account');
            }

            $('#usertype').change(function(){
                if($('#usertype').val() == 'seller') {
                    $('.business_form').show();
                    $('.register_form').hide();
                    $('.title-tag-line').html('Business Registration');
                } else {
                    $('.business_form').hide();
                    $('.register_form').show();
                    $('.title-tag-line').html('Create your new account');
                }
            });
        });
    </script>
</body>
</html>