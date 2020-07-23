<div class="navbar-brand" style="position: relative;z-index: 10000">
    <a href="index.html">
      <img style="   height: 68px;width: 289px; margin-top: 4px;" src="{{ asset('storage/images/logo-cropped-removebg-preview.png') }}"
   onClick="location.href='/'" style="top: 0px;left: 0px;" id="logo" />
    </a>
</div>
<div class="headder-top d-md-flex header_bottom">
    <!-- nav -->
  <nav class="mainnav"  align="right">
    <span  id="menuoptions">
      <li style="list-style: none">
        <i class="fa fa-user"></i>
        @if(Session::has('user') && !empty(Session::get('user')))
          <a href="/Logout" align="right" class="" >LOGOUT</a>
        @else
          <a href="/Login" align="right" class="" >REGISTER / LOGIN</a>
        @endif
      </li>
        <!--
          <li style="color: #2a0430;border-bottom: 2px solid #2a0430;padding: 4px;"><a href="https://flickerfone.com/cart" ><i class="fa fa-shopping-cart" style="font-size:15px;color: #2a0430;" ></i><span class="count cart-total-items">0</span> items </a></li>
          -->
    </span>
    <span class="srchstyle"  id="menuoptions">
        <form action="https://flickerfone.com/new" id="qsearch">
          <div class="search">
            <input type="text" id="myInput"   onkeyup="myFunction()"  title="Type in a name" name="q"  class="searchTerm" placeholder="Search our Store">
              <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
              </button>
          </div>
          </form>
          <ul id="myUL" style="  display: none ;  height: 500px; background-color: rgb(214, 203, 203);">
            <div>
              <button onclick="hideagain();" style="background-color: white;color: black;padding: 7px;width: 39px;font-weight: 600;border-style: none;">X</button>
            </div>
            <li>
              <div class="row">
                <div class="col-md-12">
                  <div style="height: 200px; width:100%; border: 3px rgb(121, 123, 124) solid;     margin-right: 115px;">
                    <center>
                      <image src="{{ asset('storage/images/LiveSrchImages/images.png') }}" />
                    </center>
                    <a href="#">Redmi Note 8
        
                      <h6>PKR 30,000</h6>
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-md-12">
                  <div style="height: 200px; width:100%; border: 3px rgb(121, 123, 124) solid;    margin-right: 115px;">
                    <center>
                      <image src="{{ asset('storage/images/LiveSrchImages/download.png') }}" />
                    </center>
                    <a href="#">Redmi Note 9 Pro
                                
                      <h6>PKR 44,999</h6>
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-md-12">
                  <div style="height: 200px; width:100%; border: 3px rgb(121, 123, 124) solid;     margin-right: 115px;">
                    <center>
                      <image src="{{ asset('storage/images/LiveSrchImages/AppleBlack.jpg') }}" style="height: 130px; width: 130px; "  />
                    </center>
                    <a href="#">Apple iphone x 64 GB   
                                                        
                      <h6>PKR 144,999</h6>
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-md-12">
                  <div style="height: 200px; width:100%; border: 3px rgb(121, 123, 124) solid;     margin-right: 115px; ">
                    <center>
                      <image src="{{ asset('storage/images/LiveSrchImages/AlcatelGreen.jpg') }}" style="height: 130px; width: 130px; " />
                    </center>
                    <a href="#">Alcatel jabi=ong Green 4 GB  

                                                        
                      <h6>PKR 19,000</h6>
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-md-12">
                  <div style="height: 200px; width:100%; border: 3px rgb(121, 123, 124) solid;     margin-right: 115px; ">
                    <center>
                      <image src="{{ asset('storage/images/LiveSrchImages/AppleVivo16Gb.jpg') }}" style="height: 130px; width: 130px; " />
                    </center>
                    <a href="#">Apple VIVO Y15 Gold 16 GB    
                                                                                
                      <h6>PKR 25,999</h6>
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-md-12">
                  <div style="height: 200px; width:100%; border: 3px rgb(121, 123, 124) solid;   margin-right: 115px; ">
                    <center>
                      <image src="{{ asset('storage/images/LiveSrchImages/HTCPlayBlack.jpg') }}" style="height: 130px; width: 130px; " />
                    </center>
                    <a href="#">HTC Play 2 Black 4 GB  
                                                                                                        
                      <h6>PKR 25,800</h6>
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <!-- <div class="row" style="padding-right: 167px;"><div class="col-md-12" style="background-color: rgb(30, 219, 46);"><li><a href="#">Agnes</a></li></div></div> -->
          </ul>
    </span>
    <span   id="menuoptions" style="margin-right: 42px !important;">
      <ul id="qasimFont2" class="menu mt-2" style="     margin-top: 7px; ">
        <li    class="backcolor lis">
          <a href="/">Home</a>
        </li>
        <li class="backcolor1">
          <a href="BuyUsedMobilePhones">Buy</a>
        </li>
        <li class="backcolor1">
          <a href="NewMobilePhonePrices">New</a>
        </li>
        <li class="backcolor1">
          <a href="/Login">Sell</a>
        </li>
        <li class="backcolor1">
          <a href="PriceCalculator">Price Calulator</a>
        </li>
      </ul>
    </span>
      
  </nav>
      <!-- //nav -->
</div>