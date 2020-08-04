
@extends('admin.layouts.master_layout')
@section('title', 'Dashboard')
@section('extra-links')

@endsection
@section('content')

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

        <div class="page-content">

            <!-- Page-Title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title mb-1">Add FlickerFone User</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end page title end breadcrumb -->
            <style type="text/css"> .mt-0-5{ margin-top: 0.5rem!important;  } </style>
            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title">Add New User</h4>
                                    @if(Session::has('warningMsg'))
                                        <div class="alert alert-warning col-md-4">{{ Session::get('warningMsg') }}</div>
                                    @endif
                                    
                                    <div class="form-group" style="margin-top: 15px;">
                                        <label class="info-title new_lable">Select User Type <span>*</span></label><br/>
                                        <select name="type" class="form-control unicase-form-control text-input" id="usertype">
                                             <option selected="" disabled="">Select User Type</option>
                                            <option <?php if( old('type')=='buyer' ){ echo "selected=''"; }?> value="buyer">Indvidual Seller</option>
                                            <option <?php if( old('type')=='seller' ){ echo "selected=''"; }?> value="seller">Wholesale Seller</option>
                                        </select>
                                    </div>
                                    <div class="register_form" style="display: none;">
                                        <form action="{{ route('User.store') }}" class="register-form" role="form" method="post" accept-charset="utf-8">
                                            @csrf
                                            <input type="hidden" value="buyer" name="type" />
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group form-user">
                                                        <label class="control-label font-ct" for="input-email"><label for="name">Name</label><span style="color: #a94442">*</span></label>
                                                        <input type="text" name="buyer_name" value="{{ old('buyer_name') }}"  class="form-control" id="name" />
                                                        @error('buyer_name')
                                                            <p class="text-danger mt-0-5">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group form-user">
                                                        <label class="control-label font-ct" for="input-email"><label for="Company">Company</label></label>
                                                        <input type="text" name="buyer_company" value="{{ old('buyer_company') }}"  class="form-control " id="Company" />
                                                        @error('buyer_company')
                                                            <p class="text-danger mt-0-5">{{ $message }}</p>
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
                                                                <p class="text-danger mt-0-5">{{ $message }}</p>
                                                            @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group form-user">
                                                        <label class="control-label font-ct" for="input-email"><label for="email">Email</label><span style="color: #a94442">*</span></label>
                                                        <input type="email" id="email" name="buyer_email" value="{{ old('buyer_email') }}" class="form-control" style="margin:0;"/>
                                                            @error('buyer_email')
                                                                <p class="text-danger mt-0-5">{{ $message }}</p>
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
                                                                <p class="text-danger mt-0-5">{{ $message }}</p>
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
                                                                <p class="text-danger mt-0-5">{{ $message }}</p>
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

                                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Add User</button>
                                        </form>                            
                                    </div>


                                    <div class="create-new-account business_form" style="display: none;">
                                        <form action="{{ route('User.store') }}" class="register-form " role="form" method="post" accept-charset="utf-8">
                                            @csrf
                                            <input type="hidden" value="seller" name="type" />
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="info-title">Username <span>*</span></label>
                                                    <input type="text" name="username" value="{{ old('username') }}"  class="form-control unicase-form-control text-input" id="full_name"/>
                                                    @error('username')
                                                            <p class="text-danger mt-0-5">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label class="info-title">Name <span>*</span></label>
                                                    <input type="text" name="name" value="{{ old('name') }}"  class="form-control unicase-form-control text-input" id="full_name"/>
                                                    @error('name')
                                                            <p class="text-danger mt-0-5">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            

                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="info-title">Email <span>*</span></label>
                                                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control unicase-form-control text-input"/>
                                                    @error('email')
                                                            <p class="text-danger mt-0-5">{{ $message }}</p>
                                                    @enderror
                                                </div>


                                                <div class="form-group col-md-6">
                                                    <label class="info-title">Phone <span>*</span></label>
                                                    <input type="text" name="phone" value="{{ old('phone') }}"  class="form-control unicase-form-control text-input" id="phone" />
                                                    @error('phone')
                                                            <p class="text-danger mt-0-5">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            

                                            <div class="row">
                                                 <div class="form-group col-md-6">
                                                    <label class="info-title">Shop name<span>*</span></label>
                                                    <input type="text" name="shop" value="{{ old('shop') }}"  class="form-control unicase-form-control text-input" id="code"  />
                                                    @error('shop')
                                                            <p class="text-danger mt-0-5">{{ $message }}</p>
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
                                                        <p class="text-danger mt-0-5">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label class="info-title">Confirm Password <span>*</span></label>
                                                    <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"  class="form-control unicase-form-control text-input" id="password" />
                                                   
                                                </div>
                                            </div>
                                            

                                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button" >Add User</button>
                                        </form>                            
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div>
                <!-- end container-fluid -->
            </div> 
            <!-- end page-content-wrapper -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- End Page-content -->
@endsection
@section('extra-scripts')
<!-- apexcharts -->
<script src="{{url('public/Green/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<script src="{{url('public/Green/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script> 
<!-- ckeditor -->
<script src="{{asset('Green/assets/libs/ckeditor4/ckeditor.js')}}"></script>

<!-- Jq vector map -->
<script src="{{url('public/Green/assets/libs/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url('public/Green/assets/libs/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<script src="{{url('public/Green/assets/js/pages/dashboard.init.js')}}"></script>
<script type="text/javascript">
    CKEDITOR.replace('content');
    $(document).ready(function(){
        var type = $('#usertype option:selected').val();
        if(type=='buyer')
        {
            $('.business_form').css('display','none');
            $('.register_form').css('display','block');
        }
        else if(type=='seller')
        {
            $('.register_form').css('display','none');
            $('.business_form').css('display','block');
        }
    });

    $('#usertype').change(function(){
        var value = $('#usertype option:selected').val();
        if(value=='buyer')
        {
            $('.business_form').css('display','none');
            $('.register_form').css('display','block');
        }
        else if(value=='seller')
        {
            $('.register_form').css('display','none');
            $('.business_form').css('display','block');
        }
    });
</script>
@endsection