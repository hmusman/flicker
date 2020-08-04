@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->


@section('content')
	
	
    <div style="margin-top:20px;">

    </div>
        <div class="body-content" style="margin-bottom:30px; ">
            <div class="container">
                <div class="sign-in-page">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 sign-in" >
                            <h4 class="">Sign in</h4>
                            <p class="">Hello, Welcome to your account.</p>
                           
                            @error('loginError')
                            	<p class="alert alert-warning">{{ $message }}</p>
                            @enderror
                            
                            <form action="/LoginSession" class="register-form outer-top-xs"  method="post" accept-charset="utf-8">
                            	@csrf
                            <div class="form-group">
                                <label class="info-title"><label for="identity">Username/Email</label> <span>*</span></label>
                                <input type="text" name="login_email" id="username" class="form-control unicase-form-control text-input" value="{{ old('login_email') }}" required placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label class="info-title">Password <span>*</span></label>
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
                        <div class="col-md-6 col-sm-6 create-new-account">
                            <h4 class="checkout-subtitle">Create a new account</h4>
                            <p class="text title-tag-line">Create your new account.</p>

                            <div class="form-group outer-top-xs">
                                <label class="info-title new_lable">Select User Type <span>*</span></label><br/>
                                <select name="type" class="form-control unicase-form-control text-input" id="usertype">
                                    <option <?php if( old('type')=='buyer' ){ echo "selected=''"; }?> value="buyer">Indvidual Seller</option>
                                    <option <?php if( old('type')=='seller' ){ echo "selected=''"; }?> value="seller">Wholesale Seller</option>
                                </select>
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
	                                           		<p class="text-danger mt-5">{{ $message }}</p>
	                                           	@enderror
	                                        </div>
	                                    </div>
	                                    <div class="col-sm-6">
		                                    <div class="form-group form-user">
		                                        <label class="control-label font-ct" for="input-email"><label for="Company">Company</label></label>
		                                        <input type="text" name="buyer_company" value="{{ old('buyer_company') }}"  class="form-control " id="Company" />
		                                    	@error('buyer_company')
		                                       		<p class="text-danger mt-5">{{ $message }}</p>
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
		                                           		<p class="text-danger mt-5">{{ $message }}</p>
		                                           	@enderror
		                                    </div>
	                                    </div>
	                                    <div class="col-sm-6">
		                                    <div class="form-group form-user">
		                                        <label class="control-label font-ct" for="input-email"><label for="email">Email</label><span style="color: #a94442">*</span></label>
		                                        <input type="email" id="email" name="buyer_email" value="{{ old('buyer_email') }}" class="form-control" style="margin:0;"/>
		                                        	@error('buyer_email')
		                                           		<p class="text-danger mt-5">{{ $message }}</p>
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
		                                           		<p class="text-danger mt-5">{{ $message }}</p>
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
		                                           		<p class="text-danger mt-5">{{ $message }}</p>
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
		                                           		<p class="text-danger mt-5">{{ $message }}</p>
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
	                                           		<p class="text-danger mt-5">{{ $message }}</p>
	                                        @enderror
	                                    </div>

	                                    <div class="form-group col-md-6">
	                                        <label class="info-title">Name <span>*</span></label>
	                                        <input type="text" name="name" value="{{ old('name') }}"  class="form-control unicase-form-control text-input" id="full_name"/>
	                                        @error('name')
	                                           		<p class="text-danger mt-5">{{ $message }}</p>
	                                        @enderror
	                                    </div>
                                    </div>
                                    

                                    <div class="row">
                                    	<div class="form-group col-md-6">
	                                        <label class="info-title">Email <span>*</span></label>
	                                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control unicase-form-control text-input"/>
	                                        @error('email')
	                                           		<p class="text-danger mt-5">{{ $message }}</p>
	                                        @enderror
	                                    </div>


	                                    <div class="form-group col-md-6">
	                                        <label class="info-title">Phone <span>*</span></label>
	                                        <input type="text" name="phone" value="{{ old('phone') }}"  class="form-control unicase-form-control text-input" id="phone" />
	                                        @error('phone')
	                                           		<p class="text-danger mt-5">{{ $message }}</p>
	                                        @enderror
	                                    </div>
                                    </div>
                                    

                                    <div class="row">
                                    	 <div class="form-group col-md-6">
	                                        <label class="info-title">Shop name<span>*</span></label>
	                                        <input type="text" name="shop" value="{{ old('shop') }}"  class="form-control unicase-form-control text-input" id="code"  />
	                                        @error('shop')
	                                           		<p class="text-danger mt-5">{{ $message }}</p>
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
	                                           		<p class="text-danger mt-5">{{ $message }}</p>
	                                        	@enderror
	                                    </div>
                                    </div>
                                   

                                    <div class="row">
                                    	<div class="form-group col-md-6">
	                                        <label class="info-title">Password <span>*</span></label>
	                                        <input type="password" name="password" value="{{ old('password') }}"  class="form-control unicase-form-control text-input" id="password" />
	                                        @error('password')
	                                           		<p class="text-danger mt-5">{{ $message }}</p>
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
        </div>

@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
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
@endsection<!-- end footer -->