
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

  <link href="{{ asset('css/dropzone.css') }}" rel='stylesheet' type='text/css' media="all">

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
  /* /////////////////////////////slick css//////////////////////////////////// */
  
.slick-prev:before {
    content: '' !important;
}

.slick-next:before {
    content: '' !important;
}

.slick-next:before {
    color: none;
}
button[class="slick-next slick-arrow"], button[class="slick-prev slick-arrow"] {
  display: block !important;
}


div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-prev slick-arrow"]::before {
color: #6263637a !important;
display: none !important;
}
div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]::before {
color: #6263637a !important;
}

div[class="autoplay slick-initialized slick-slider slick-dotted"] >  ul[class="slick-dots"]{
  position: absolute;
    top: 151px;

    height: 220px !important;
    width: 93%;
    margin-left: 20px;
    border-bottom: 1px black solid;
    border-right: 1px black solid;
    border-left: 1px black solid;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
}

div[class="autoplayFeatures slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
 display: none !important;
}
.slick-dotted.slick-slider{
  margin-bottom: -10px !important;
}



a[class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10"]{
  background-color: #101115;
    padding: 5px 19px 5px 19px;
    margin-right: 21px;
    border-radius: 25px;
    /* margin-bottom: 10px; */
    margin: 5px 0px 10px 10px;
}



#slickBtnFor > div[class="autoplayFeatures slick-initialized slick-slider slick-dotted"] > button[class="slick-prev slick-arrow"]{
  background-image: url('{{ asset("storage/images/headerimg/ic_keyboard_arrow_left_black_18dp.png")}}');
  border-radius: 50%;
  height: 38px;
    background-repeat: no-repeat;
    width: 100px;
}
#slickBtnFor > div[class="autoplayFeatures slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]{
  background-image: url('{{ asset("storage/images/headerimg/ic_keyboard_arrow_right_black_18dp.png")}}');
  border-radius: 50%;
  height: 38px;
    background-repeat: no-repeat;
    width: 26px;
}

button[id="slick-slide-control10"]::before{
 
  height: 38px;
    background-repeat: no-repeat;
    width: 26px;

    content: url('{{ asset("storage/images/ShopPage/Counting-1.png")}}') !important;
}



button[id="slick-slide-control11"]::before{
 
 height: 38px;
   background-repeat: no-repeat;
   width: 26px;

   content: url('{{ asset("storage/images/ShopPage/Counting-2.png")}}') !important;
}




button[id="slick-slide-control12"]::before{
 
 height: 38px;
   background-repeat: no-repeat;
   width: 26px;

   content: url('{{ asset("storage/images/ShopPage/Counting-3.png")}}') !important;
}



button[id="slick-slide-control13"]::before{
 
 height: 38px;
   background-repeat: no-repeat;
   width: 26px;

   content: url('{{ asset("storage/images/ShopPage/Counting-4.png")}}') !important;
}



button[id="slick-slide-control14"]::before{
 
 height: 38px;
   background-repeat: no-repeat;
   width: 26px;

   content: url('{{ asset("storage/images/ShopPage/Counting-5.png")}}') !important;
}




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


  #slickblogimg{
    width: 283px !important;
  }

  div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
    top: 163px !important;
    width: 93.6% !important;
    right: 0px !important;
  }
}
@media (min-width: 375px) and (max-width: 410px) {

div[class="thumb"]{
  position: relative !important;
    right: 20px !important;
}
div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
  top: 181px !important;
    width: 93.5% !important;
    margin-left: 3px !important;
}


#slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-prev slick-arrow"]{
  margin-left: 0px !important;
}



#slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]{
  right: 20px !important;
}



}
@media (min-width: 411px) and (max-width: 449px){
  div[class="thumb"]{
    right: 20px !important;
    position: relative !important;
  }


  div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
    width: 95.1% !important;
    margin-left: 2px !important;
  }


  #slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-prev slick-arrow"]{
    margin-left: 0px !important;
  }

  #slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]{
    right: 16px !important;
  }

  div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
    top: 199px !important;
  }
}
@media (min-width: 450px) and (max-width: 499px){
 
  div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
    top: 220px !important;
  }


  div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
    width: 96.1% !important;
  }

  #extlrgwid{
    width: 98% !important;
  }

  div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
    width: 94.8% !important;
  }

}

@media (min-width: 500px) and (max-width: 767px){
 
div[class="slick-slide slick-current slick-active"]{
  width: 395px !important; 
}

#slickBtnFortopBlog > div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]{
  right: 15px !important
}


div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
  top: 234px !important;
}
div[class="autoplay slick-initialized slick-slider slick-dotted"]{
  margin-left: -34px !important;
}

div[class="slick-slide slick-current slick-active"]{
  width: 425px !important;
}



}
@media (min-width: 768px) and (max-width: 1023px) {
  .thumb{
    width: 107% !important;
  }

  div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
    top: 113px !important;
    height: 420px !important;
    width: 84% !important;
    margin-left: 23px  !important;
  }
}



@media (min-width: 1024px)  and (max-width: 1050px){
  .thumb{
    width: 103% !important;
  }


  div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"]{
    top: 114px !important;
    height: 319px !important;
    width: 89% !important;
    margin-left: 23px !important;
  }
}
/* @media (max-width: 411px){
  ul[class="slick-dots"]{
    margin-top: 9px !important;
  }


  #slickblogimg {
    width: 336px !important;
}

div[class="autoplay slick-initialized slick-slider slick-dotted"] > ul[class="slick-dots"] {
   
    top: 179px !important;
  
    width: 93% !important;
}
} */
</style>


<style>
  @media (max-width: 550px){

    #resphrOnmob{
      margin-top: 10px !important;

}
}
</style>

<style>
  input[type="radio"] {
  display: none;
}

.myLabel {
padding: 10px 20px;
background-color: white;
border: thin solid black;
border-radius: 10px;
margin:5px;
display: inline-block;
color: black;
}

input[type="radio"]:checked + label {
  background-color: rgb(74 136 194);
  cursor: default;
  color: #E6E6E6;
  border: thin solid white;
}










@media (min-width:500px){
  #SetOnDesktop{
    margin-left: 42px !important;
  }
    }



#DropZonIcon1,
#DropZonIcon2,
#DropZonIcon3,
#DropZonIcon4,
#DropZonIcon5,
#DropZonIcon6{
  height: 195px !important;
}


</style>
<body>

  <a href="#" id="scroll" style="display: none;"><span></span></a>
  @include('includes.header');

  <div class="container">
      <div class="card">
          <div class="card-body">
            <style type="text/css">
              label{ color: black; }
            </style>
              <h4 class="header-title" style="color:black;">Add Your Accessory</h4>
              @if(Session::has('warningMsg'))
                <div class="alert alert-warning">{{ Session::get('warningMsg') }}</div>
              @endif
               @if(Session::has('msg'))
                <div class="alert alert-success">{{ Session::get('msg') }}</div>
              @endif

              <form action="{{ route('Sell.Accessory.store') }}" method="post" enctype="multipart/form-data">
                  @csrf

                  <div class="tab-content">
                      <div class="tab-pane active" id="detail">
                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label">Category</label>
                              <div class="col-md-10">
                                  <input type="hidden" name="user_id" value=" @if(!empty(Session::get('user'))) {{ Session::get('user')->id }} @endif">
                                  <select class="form-control" name="category">
                                      <option selected="" disabled="">Select Category</option>
                                      @foreach($categories as $category)
                                           <option <?php if(old('category')==$category->id){ echo "selected=''"; } ?>  value="{{ $category->id }}">{{ ucfirst($category->title) }}</option>
                                      @endforeach
                                  </select>
                                  @error('category')
                                      <p class="text-danger mt-3">{{ $message }}</p>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label">Brand</label>
                              <div class="col-md-10">
                                  <select class="form-control" name="brand">
                                      <option selected="" disabled="">Select Brand</option>
                                      @foreach($brands as $brand)
                                           <option <?php if(old('brand')==$brand->id){ echo "selected=''"; } ?>  value="{{ $brand->id }}">{{ ucfirst($brand->name) }}</option>
                                      @endforeach
                                  </select>
                                  @error('brand')
                                      <p class="text-danger mt-3">{{ $message }}</p>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                              <div class="col-md-10">
                                  <input class="form-control" type="text" value="{{ old('name') }}" name="name" placeholder="Enter Name" id="example-text-input">
                                  @error('name')
                                      <p class="text-danger mt-3">{{ $message }}</p>
                                  @enderror
                              </div>
                          </div>

                           <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label">City</label>
                              <div class="col-md-10">
                                  <select class="form-control" name="city">  
                                      <option selected="" disabled="">Select City</option> 
                                      <option class="option" value="Abbottabad">Abbottabad</option>
                                      <option class="option" value="Adezai">Adezai</option>
                                      <option class="option" value="Ali Bandar">Ali Bandar</option>
                                      <option class="option" value="Amir Chah">Amir Chah</option>
                                      <option class="option" value="Attock">Attock</option>
                                      <option class="option" value="Ayubia">Ayubia</option>
                                      <option class="option" value="Bahawalpur">Bahawalpur</option>
                                      <option class="option" value="Baden">Baden</option>
                                      <option class="option" value="Bagh">Bagh</option>
                                      <option class="option" value="Bahawalnagar">Bahawalnagar</option>
                                      <option class="option" value="Burewala">Burewala</option>
                                      <option class="option" value="Banda Daud Shah">Banda Daud Shah</option>
                                      <option class="option" value="Bannu district|Bannu">Bannu</option>
                                      <option class="option" value="Batagram">Batagram</option>
                                      <option class="option" value="Bazdar">Bazdar</option>
                                      <option class="option" value="Bela">Bela</option>
                                      <option class="option" value="Bellpat">Bellpat</option>
                                      <option class="option" value="Bhag">Bhag</option>
                                      <option class="option" value="Bhakkar">Bhakkar</option>
                                      <option class="option" value="Bhalwal">Bhalwal</option>
                                      <option class="option" value="Bhimber">Bhimber</option>
                                      <option class="option" value="Birote">Birote</option>
                                      <option class="option" value="Buner">Buner</option>
                                      <option class="option" value="Burj">Burj</option>
                                      <option class="option" value="Chiniot">Chiniot</option>
                                      <option class="option" value="Chachro">Chachro</option>
                                      <option class="option" value="Chagai">Chagai</option>
                                      <option class="option" value="Chah Sandan">Chah Sandan</option>
                                      <option class="option" value="Chailianwala">Chailianwala</option>
                                      <option class="option" value="Chakdara">Chakdara</option>
                                      <option class="option" value="Chakku">Chakku</option>
                                      <option class="option" value="Chakwal">Chakwal</option>
                                      <option class="option" value="Chaman">Chaman</option>
                                      <option class="option" value="Charsadda">Charsadda</option>
                                      <option class="option" value="Chhatr">Chhatr</option>
                                      <option class="option" value="Chichawatni">Chichawatni</option>
                                      <option class="option" value="Chitral">Chitral</option>
                                      <option class="option" value="Dadu">Dadu</option>
                                      <option class="option" value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                      <option class="option" value="Dera Ismail Khan">Dera Ismail Khan</option>
                                       <option class="option" value="Dalbandin">Dalbandin</option>
                                      <option class="option" value="Dargai">Dargai</option>
                                      <option class="option" value="Darya Khan">Darya Khan</option>
                                      <option class="option" value="Daska">Daska</option>
                                      <option class="option" value="Dera Bugti">Dera Bugti</option>
                                      <option class="option" value="Dhana Sar">Dhana Sar</option>
                                      <option class="option" value="Digri">Digri</option>
                                      <option class="option" value="Dina City|Dina">Dina</option>
                                      <option class="option" value="Dinga">Dinga</option>
                                      <option class="option" value="Diplo, Pakistan|Diplo">Diplo</option>
                                      <option class="option" value="Diwana">Diwana</option>
                                      <option class="option" value="Dokri">Dokri</option>
                                      <option class="option" value="Drosh">Drosh</option>
                                      <option class="option" value="Duki">Duki</option>
                                      <option class="option" value="Dushi">Dushi</option>
                                      <option class="option" value="Duzab">Duzab</option>
                                      <option class="option" value="Faisalabad">Faisalabad</option>
                                      <option class="option" value="Fateh Jang">Fateh Jang</option>
                                      <option class="option" value="Ghotki">Ghotki</option>
                                      <option class="option" value="Gwadar">Gwadar</option>
                                      <option class="option" value="Gujranwala">Gujranwala</option>
                                      <option class="option" value="Gujrat">Gujrat</option>
                                      <option class="option" value="Gadra">Gadra</option>
                                      <option class="option" value="Gajar">Gajar</option>
                                      <option class="option" value="Gandava">Gandava</option>
                                      <option class="option" value="Garhi Khairo">Garhi Khairo</option>
                                      <option class="option" value="Garruck">Garruck</option>
                                      <option class="option" value="Ghakhar Mandi">Ghakhar Mandi</option>
                                      <option class="option" value="Ghanian">Ghanian</option>
                                      <option class="option" value="Ghauspur">Ghauspur</option>
                                      <option class="option" value="Ghazluna">Ghazluna</option>
                                      <option class="option" value="Girdan">Girdan</option>
                                      <option class="option" value="Gulistan">Gulistan</option>
                                      <option class="option" value="Gwash">Gwash</option>
                                      <option class="option" value="Hyderabad">Hyderabad</option>
                                      <option class="option" value="Hala">Hala</option>
                                      <option class="option" value="Haripur">Haripur</option>
                                      <option class="option" value="Hab Chauki">Hab Chauki</option>
                                      <option class="option" value="Hafizabad">Hafizabad</option>
                                      <option class="option" value="Hameedabad">Hameedabad</option>
                                      <option class="option" value="Hangu">Hangu</option>
                                      <option class="option" value="Harnai">Harnai</option>
                                      <option class="option" value="Hasilpur">Hasilpur</option>
                                      <option class="option" value="Haveli Lakha">Haveli Lakha</option>
                                      <option class="option" value="Hinglaj">Hinglaj</option>
                                      <option class="option" value="Hoshab">Hoshab</option>
                                      <option class="option" value="Islamabad">Islamabad</option>
                                      <option class="option" value="Islamkot">Islamkot</option>
                                      <option class="option" value="Ispikan">Ispikan</option>
                                      <option class="option" value="Jacobabad">Jacobabad</option>
                                      <option class="option" value="Jamshoro">Jamshoro</option>
                                      <option class="option" value="Jhang">Jhang</option>
                                      <option class="option" value="Jhelum">Jhelum</option>
                                      <option class="option" value="Jamesabad">Jamesabad</option>
                                      <option class="option" value="Jampur">Jampur</option>
                                      <option class="option" value="Janghar">Janghar</option>
                                      <option class="option" value="Jati, Jati(Mughalbhin)">Jati</option>
                                      <option class="option" value="Jauharabad">Jauharabad</option>
                                      <option class="option" value="Jhal">Jhal</option>
                                      <option class="option" value="Jhal Jhao">Jhal Jhao</option>
                                      <option class="option" value="Jhatpat">Jhatpat</option>
                                      <option class="option" value="Jhudo">Jhudo</option>
                                      <option class="option" value="Jiwani">Jiwani</option>
                                      <option class="option" value="Jungshahi">Jungshahi</option>
                                      <option class="option" value="Karachi">Karachi</option>
                                      <option class="option" value="Kotri">Kotri</option>
                                      <option class="option" value="Kalam">Kalam</option>
                                      <option class="option" value="Kalandi">Kalandi</option>
                                      <option class="option" value="Kalat">Kalat</option>
                                      <option class="option" value="Kamalia">Kamalia</option>
                                      <option class="option" value="Kamararod">Kamararod</option>
                                      <option class="option" value="Kamber">Kamber</option>
                                      <option class="option" value="Kamokey">Kamokey</option>
                                      <option class="option" value="Kanak">Kanak</option>
                                      <option class="option" value="Kandi">Kandi</option>
                                      <option class="option" value="Kandiaro">Kandiaro</option>
                                      <option class="option" value="Kanpur">Kanpur</option>
                                      <option class="option" value="Kapip">Kapip</option>
                                      <option class="option" value="Kappar">Kappar</option>
                                      <option class="option" value="Karak City">Karak City</option>
                                      <option class="option" value="Karodi">Karodi</option>
                                      <option class="option" value="Kashmor">Kashmor</option>
                                      <option class="option" value="Kasur">Kasur</option>
                                      <option class="option" value="Katuri">Katuri</option>
                                      <option class="option" value="Keti Bandar">Keti Bandar</option>
                                      <option class="option" value="Khairpur">Khairpur</option>
                                      <option class="option" value="Khanaspur">Khanaspur</option>
                                      <option class="option" value="Khanewal">Khanewal</option>
                                      <option class="option" value="Kharan">Kharan</option>
                                      <option class="option" value="kharian">kharian</option>
                                      <option class="option" value="Khokhropur">Khokhropur</option>
                                      <option class="option" value="Khora">Khora</option>
                                      <option class="option" value="Khushab">Khushab</option>
                                      <option class="option" value="Khuzdar">Khuzdar</option>
                                      <option class="option" value="Kikki">Kikki</option>
                                      <option class="option" value="Klupro">Klupro</option>
                                      <option class="option" value="Kohan">Kohan</option>
                                      <option class="option" value="Kohat">Kohat</option>
                                      <option class="option" value="Kohistan">Kohistan</option>
                                      <option class="option" value="Kohlu">Kohlu</option>
                                      <option class="option" value="Korak">Korak</option>
                                      <option class="option" value="Korangi">Korangi</option>
                                      <option class="option" value="Kot Sarae">Kot Sarae</option>
                                      <option class="option" value="Kotli">Kotli</option>
                                      <option class="option" value="Lahore">Lahore</option>
                                      <option class="option" value="Larkana">Larkana</option>
                                      <option class="option" value="Lahri">Lahri</option>
                                      <option class="option" value="Lakki Marwat">Lakki Marwat</option>
                                      <option class="option" value="Lasbela">Lasbela</option>
                                      <option class="option" value="Latamber">Latamber</option>
                                      <option class="option" value="Layyah">Layyah</option>
                                      <option class="option" value="Leiah">Leiah</option>
                                      <option class="option" value="Liari">Liari</option>
                                      <option class="option" value="Lodhran">Lodhran</option>
                                      <option class="option" value="Loralai">Loralai</option>
                                      <option class="option" value="Lower Dir">Lower Dir</option>
                                      <option class="option" value="Shadan Lund">Shadan Lund</option>
                                      <option class="option" value="Multan">Multan</option>
                                      <option class="option" value="Mandi Bahauddin">Mandi Bahauddin</option>
                                      <option class="option" value="Mansehra">Mansehra</option>
                                      <option class="option" value="Mian Chanu">Mian Chanu</option>
                                      <option class="option" value="Mirpur">Mirpur</option>
                                      <option class="option" value="Moro, Pakistan|Moro">Moro</option>
                                      <option class="option" value="Mardan">Mardan</option>
                                      <option class="option" value="Mach">Mach</option>
                                      <option class="option" value="Madyan">Madyan</option>
                                      <option class="option" value="Malakand">Malakand</option>
                                      <option class="option" value="Mand">Mand</option>
                                      <option class="option" value="Manguchar">Manguchar</option>
                                      <option class="option" value="Mashki Chah">Mashki Chah</option>
                                      <option class="option" value="Maslti">Maslti</option>
                                      <option class="option" value="Mastuj">Mastuj</option>
                                      <option class="option" value="Mastung">Mastung</option>
                                      <option class="option" value="Mathi">Mathi</option>
                                      <option class="option" value="Matiari">Matiari</option>
                                      <option class="option" value="Mehar">Mehar</option>
                                      <option class="option" value="Mekhtar">Mekhtar</option>
                                      <option class="option" value="Merui">Merui</option>
                                      <option class="option" value="Mianwali">Mianwali</option>
                                      <option class="option" value="Mianez">Mianez</option>
                                      <option class="option" value="Mirpur Batoro">Mirpur Batoro</option>
                                      <option class="option" value="Mirpur Khas">Mirpur Khas</option>
                                      <option class="option" value="Mirpur Sakro">Mirpur Sakro</option>
                                      <option class="option" value="Mithi">Mithi</option>
                                      <option class="option" value="Mongora">Mongora</option>
                                      <option class="option" value="Murgha Kibzai">Murgha Kibzai</option>
                                      <option class="option" value="Muridke">Muridke</option>
                                      <option class="option" value="Musa Khel Bazar">Musa Khel Bazar</option>
                                      <option class="option" value="Muzaffar Garh">Muzaffar Garh</option>
                                      <option class="option" value="Muzaffarabad">Muzaffarabad</option>
                                      <option class="option" value="Nawabshah">Nawabshah</option>
                                      <option class="option" value="Nazimabad">Nazimabad</option>
                                      <option class="option" value="Nowshera">Nowshera</option>
                                      <option class="option" value="Nagar Parkar">Nagar Parkar</option>
                                      <option class="option" value="Nagha Kalat">Nagha Kalat</option>
                                      <option class="option" value="Nal">Nal</option>
                                      <option class="option" value="Naokot">Naokot</option>
                                      <option class="option" value="Nasirabad">Nasirabad</option>
                                      <option class="option" value="Nauroz Kalat">Nauroz Kalat</option>
                                      <option class="option" value="Naushara">Naushara</option>
                                      <option class="option" value="Nur Gamma">Nur Gamma</option>
                                      <option class="option" value="Nushki">Nushki</option>
                                      <option class="option" value="Nuttal">Nuttal</option>
                                      <option class="option" value="Okara">Okara</option>
                                      <option class="option" value="Ormara">Ormara</option>
                                      <option class="option" value="Peshawar">Peshawar</option>
                                      <option class="option" value="Panjgur">Panjgur</option>
                                      <option class="option" value="Pasni City">Pasni City</option>
                                      <option class="option" value="Paharpur">Paharpur</option>
                                      <option class="option" value="Palantuk">Palantuk</option>
                                      <option class="option" value="Pendoo">Pendoo</option>
                                      <option class="option" value="Piharak">Piharak</option>
                                      <option class="option" value="Pirmahal">Pirmahal</option>
                                      <option class="option" value="Pishin">Pishin</option>
                                      <option class="option" value="Plandri">Plandri</option>
                                      <option class="option" value="Pokran">Pokran</option>
                                      <option class="option" value="Pounch">Pounch</option>
                                      <option class="option" value="Quetta">Quetta</option>
                                      <option class="option" value="Qambar">Qambar</option>
                                      <option class="option" value="Qamruddin Karez">Qamruddin Karez</option>
                                      <option class="option" value="Qazi Ahmad">Qazi Ahmad</option>
                                      <option class="option" value="Qila Abdullah">Qila Abdullah</option>
                                      <option class="option" value="Qila Ladgasht">Qila Ladgasht</option>
                                      <option class="option" value="Qila Safed">Qila Safed</option>
                                      <option class="option" value="Qila Saifullah">Qila Saifullah</option>
                                      <option class="option" value="Rawalpindi">Rawalpindi</option>
                                      <option class="option" value="Rabwah">Rabwah</option>
                                      <option class="option" value="Rahim Yar Khan">Rahim Yar Khan</option>
                                      <option class="option" value="Rajan Pur">Rajan Pur</option>
                                      <option class="option" value="Rakhni">Rakhni</option>
                                      <option class="option" value="Ranipur">Ranipur</option>
                                      <option class="option" value="Ratodero">Ratodero</option>
                                      <option class="option" value="Rawalakot">Rawalakot</option>
                                      <option class="option" value="Renala Khurd">Renala Khurd</option>
                                      <option class="option" value="Robat Thana">Robat Thana</option>
                                      <option class="option" value="Rodkhan">Rodkhan</option>
                                      <option class="option" value="Rohri">Rohri</option>
                                      <option class="option" value="Sialkot">Sialkot</option>
                                      <option class="option" value="Sadiqabad">Sadiqabad</option>
                                      <option class="option" value="Safdar Abad- (Dhaban Singh)">Safdar Abad</option>
                                      <option class="option" value="Sahiwal">Sahiwal</option>
                                      <option class="option" value="Saidu Sharif">Saidu Sharif</option>
                                      <option class="option" value="Saindak">Saindak</option>
                                      <option class="option" value="Sakrand">Sakrand</option>
                                      <option class="option" value="Sanjawi">Sanjawi</option>
                                      <option class="option" value="Sargodha">Sargodha</option>
                                      <option class="option" value="Saruna">Saruna</option>
                                      <option class="option" value="Shabaz Kalat">Shabaz Kalat</option>
                                      <option class="option" value="Shadadkhot">Shadadkhot</option>
                                      <option class="option" value="Shahbandar">Shahbandar</option>
                                      <option class="option" value="Shahpur">Shahpur</option>
                                      <option class="option" value="Shahpur Chakar">Shahpur Chakar</option>
                                      <option class="option" value="Shakargarh">Shakargarh</option>
                                      <option class="option" value="Shangla">Shangla</option>
                                      <option class="option" value="Sharam Jogizai">Sharam Jogizai</option>
                                      <option class="option" value="Sheikhupura">Sheikhupura</option>
                                      <option class="option" value="Shikarpur">Shikarpur</option>
                                      <option class="option" value="Shingar">Shingar</option>
                                      <option class="option" value="Shorap">Shorap</option>
                                      <option class="option" value="Sibi">Sibi</option>
                                      <option class="option" value="Sohawa">Sohawa</option>
                                      <option class="option" value="Sonmiani">Sonmiani</option>
                                      <option class="option" value="Sooianwala">Sooianwala</option>
                                      <option class="option" value="Spezand">Spezand</option>
                                      <option class="option" value="Spintangi">Spintangi</option>
                                      <option class="option" value="Sui">Sui</option>
                                      <option class="option" value="Sujawal">Sujawal</option>
                                      <option class="option" value="Sukkur">Sukkur</option>
                                      <option class="option" value="Suntsar">Suntsar</option>
                                      <option class="option" value="Surab">Surab</option>
                                      <option class="option" value="Swabi">Swabi</option>
                                      <option class="option" value="Swat">Swat</option>
                                      <option class="option" value="Tando Adam">Tando Adam</option>
                                      <option class="option" value="Tando Bago">Tando Bago</option>
                                      <option class="option" value="Tangi">Tangi</option>
                                      <option class="option" value="Tank City">Tank City</option>
                                      <option class="option" value="Tar Ahamd Rind">Tar Ahamd Rind</option>
                                      <option class="option" value="Thalo">Thalo</option>
                                      <option class="option" value="Thatta">Thatta</option>
                                      <option class="option" value="Toba Tek Singh">Toba Tek Singh</option>
                                      <option class="option" value="Tordher">Tordher</option>
                                      <option class="option" value="Tujal">Tujal</option>
                                      <option class="option" value="Tump">Tump</option>
                                      <option class="option" value="Turbat">Turbat</option>
                                      <option class="option" value="Umarao">Umarao</option>
                                      <option class="option" value="Umarkot">Umarkot</option>
                                      <option class="option" value="Upper Dir">Upper Dir</option>
                                      <option class="option" value="Uthal">Uthal</option>
                                      <option class="option" value="Vehari">Vehari</option>
                                      <option class="option" value="Veirwaro">Veirwaro</option>
                                      <option class="option" value="Vitakri">Vitakri</option>
                                      <option class="option" value="Wadh">Wadh</option>
                                      <option class="option" value="Wah Cantt">Wah Cantt</option>
                                      <option class="option" value="Warah">Warah</option>
                                      <option class="option" value="Washap">Washap</option>
                                      <option class="option" value="Wasjuk">Wasjuk</option>
                                      <option class="option" value="Wazirabad">Wazirabad</option>
                                      <option class="option" value="Yakmach">Yakmach</option>
                                      <option class="option" value="Zhob">Zhob</option>
                                      <option class="option" value="Other">Other</option>                                       
                                  </select>
                                  @error('city')
                                      <p class="text-danger mt-3">{{ $message }}</p>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label">Phone</label>
                              <div class="col-md-10">
                                  <input class="form-control" type="text" value="{{ old('phone') }}" name="phone" placeholder="Enter Phone Number" id="example-text-input">
                                  @error('phone')
                                      <p class="text-danger mt-3">{{ $message }}</p>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label">Price</label>
                              <div class="col-md-10">
                                  <input class="form-control" type="number" value="{{ old('price') }}" name="price" placeholder="Enter Price" id="example-text-input">
                                  @error('price')
                                      <p class="text-danger mt-3">{{ $message }}</p>
                                  @enderror
                              </div>
                          </div>

                      </div> <!-- detail -->
                  </div>

               


                  <div class="card">
                  	<div class="card-body row">

                  		<div class="text-center mt-4 col-md-3" id="SetOnDesktop" >
                        <input type="file" name="img" style="display:none;" id="imgInput1" onchange="fileChangeFun(this,$('#DropZonIcon1'),1);"/> 
                  			<div class="dropzone" id="DropZonIcon1">
                  				<div style="width:100%; height:100%;" onclick="fullWidthInputCall(1);" id="imgFullWidthDiv1"><img src="NewZoomerImages/ic_backup_black_48dp.png" />
                          <p style="color: grey;margin-top: 16px;font-size: 14px;width: 100%;">Please Select Your Photo</p>
                          </div>
                  			</div>
                      </div>
                  	</div>
                  </div>

                  <div class="card">
                      <div class="card-body row">
                          <div class="text-center mt-4">
                              <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                          </div>
                      </div>
                  </div>
              </form>




         

          </div>
      </div>
  
  </div>

@include('includes.footer')


</body>


<!-- 
<script src="js/jquery-slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script> -->
  
 <script type="text/javascript">

      // var DropZonIcon1 = document.getElementById('DropZonIcon1');
      // DropZonIcon1.innerHTML += '<img id="uploadimg1" src="NewZoomerImages/ic_backup_black_48dp.png" />';

      // var DropZonIcon2 = document.getElementById('DropZonIcon2');
      // DropZonIcon2.innerHTML += '<img id="uploadimg2" src="NewZoomerImages/ic_backup_black_48dp.png" />';

      // var DropZonIcon3 = document.getElementById('DropZonIcon3');
      // DropZonIcon3.innerHTML += '<img id="uploadimg3" src="NewZoomerImages/ic_backup_black_48dp.png" />';

      // var DropZonIcon4 = document.getElementById('DropZonIcon4');
      // DropZonIcon4.innerHTML += '<img id="uploadimg4" src="NewZoomerImages/ic_backup_black_48dp.png" />';

      // var DropZonIcon5 = document.getElementById('DropZonIcon5');
      // DropZonIcon5.innerHTML += '<img id="uploadimg5" src="NewZoomerImages/ic_backup_black_48dp.png" />';

      // var DropZonIcon6 = document.getElementById('DropZonIcon6');
      // DropZonIcon6.innerHTML += '<img id="uploadimg6" src="NewZoomerImages/ic_backup_black_48dp.png" />';
      


      function filePreview(input,div,num) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  div.html('');
                  div.html('<div style="height:100%; width:100%;"><button type="button" onclick="imgInputBtn('+num+')" style="    position: absolute;border: none;outline: none;top: 22px;color:red;">X</button><img src="'+e.target.result+'" class="img-thumbnail" style="height:150px;"/></div>');
              };
              reader.readAsDataURL(input.files[0]);
          }
      }

      function fileChangeFun(input,div,num)
      {
         filePreview(input,div,num);
      }

      // $('#imgInput1').change(function(){
      //     filePreview(this,$('#DropZonIcon1'),1);
      // });

      function imgInputBtn(num)
      {
        var vhtml = '<div style="width:100%; height:100%;" onclick="fullWidthInputCall('+num+')" id="imgFullWidthDiv'+num+'"><img src="NewZoomerImages/ic_backup_black_48dp.png" /><p style="color: grey;margin-top: 16px;font-size: 14px;width: 100%;">Please Select Your Photo</p></div>';
        $('#DropZonIcon'+num).html(vhtml);
      }

      function fullWidthInputCall(num)
      {
        $('#imgInput'+num)[0].click();
      }
      

    function estimate_fun()
    {
       var estimate_deduction =0;
       var grading = "";
       //Anything above or equal to 8

      // Scenario 1
      if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#device-on').is(":checked") && $('#screen-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      } 

      // Scenario 2
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#device-on').is(":checked") && $('#screen-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      } 

      // Scenario 3
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      } 

      // Scenario 4
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Excellent";
      } 

      // Scenario 5
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Good";
      } 

      // Scenario 6
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      } 

      // Scenario 7
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 8
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Good";
      } 

      // Scenario 9
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }  

      // Scenario 10
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      } 

      // Scenario 11
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 12
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Good";
      }

      // Scenario 13
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Good";
      }

      // Scenario 14
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 15
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Good";
      }

      // Scenario 16
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 17
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 18
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 19
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 20
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Good";
      }

      // Scenario 21
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 22
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 23
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 24
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 25
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 26
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Excellent";
      }


      // Anything above or equal to 7

      // Scenario 1
      if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#device-on').is(":checked") && $('#screen-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      } 

      // Scenario 2
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#device-on').is(":checked") && $('#screen-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      } 

      // Scenario 3
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      } 

      // Scenario 4
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Excellent";
      } 

      // Scenario 5
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Good";
      } 

      // Scenario 6
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      } 

      // Scenario 7
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 8
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Good";
      } 

      // Scenario 9
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }  

      // Scenario 10
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      } 

      // Scenario 11
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 12
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() ==70)
      {
        grading = "Fair";
      }

      // Scenario 13
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Good";
      }

      // Scenario 14
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 15
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Good";
      }

      // Scenario 16
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 17
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 18
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 19
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 20
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() ==70)
      {
        grading = "Fair";
      }

     // Scenario 21
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 22
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 23
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 24
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 25
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 26
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Excellent";
      }
      
      // Anything below to 6

      // Scenario 1
      if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#device-on').is(":checked") && $('#screen-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      } 

      // Scenario 2
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#device-on').is(":checked") && $('#screen-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      } 

      // Scenario 3
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      } 

      // Scenario 4
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Good";
      } 

      // Scenario 5
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      } 

      // Scenario 6
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      } 

      // Scenario 7
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 8
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      } 

      // Scenario 9
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }  

      // Scenario 10
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      } 

      // Scenario 11
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 12
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading="Fair";
      }

      // Scenario 13
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 14
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 15
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 16
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 17
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 18
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 19
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 20
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 21
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 22
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 23
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 24
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 25
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 26
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Excellent";
      }
     
      if($('.minor').is(":checked")){
        estimate_deduction+=parseInt($(".minor:checked").val());
      }
      
      if($('.major').is(":checked"))
      {
        estimate_deduction+=parseInt($(".major:checked").val());
      }

      if($('.screen').is(":checked"))
      {
        estimate_deduction+=parseInt($(".screen:checked").val());
      }

      if($('.device').is(":checked"))
      {
        estimate_deduction+=parseInt($(".device:checked").val());
      }

      if($('.accessory').is(":checked"))
      {
        estimate_deduction+=parseInt($(".accessory:checked").val());
      }

      if($('.battery option:selected').val()<6)
      {
        
        estimate_deduction+=parseInt($("#device_battery_status").val());
       
      }
      var price = $('#estimated_advice_price').val();
      if($('.minor').is(":checked") && $('.major').is(":checked") && $('.screen').is(":checked") && $('.device').is(":checked") && $('.accessory').is(":checked"))
      {
        if($('.battery').children("option:selected").val() >0)
        {
          $('#status').val(grading);        
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
 

  
<!-- <script type="text/javascript" src="{{ asset('js/dropzone.js') }}"></script> -->


<!-- <script  src="js/jquery-2.1.3.min.js"></script> -->

<script  src="{{ asset('js/ScrollJS2/script.js') }}"></script>



<script>






// function removeImg(){
 
//  document.getElementById("uploadimg").style.display="none"
// }



// setTimeout(function() { your_func(); }, 5000);

function myRemoveFun(id)
{
  setTimeout(
      function() {
  document.getElementById(id).style.display="none"
      }, 5000);
}


// function removeImg1() {
//   setTimeout(
//     function() {
// document.getElementById("uploadimg1").style.display="none"
//     }, 5000);
// }

// function removeImg6() {
//   setTimeout(
//     function() {
// document.getElementById("uploadimg6").style.display="none"
//     }, 5000);
// }

// function removeImg2() {
//   setTimeout(
//     function() {
// document.getElementById("uploadimg2").style.display="none"
//     }, 5000);
// }


// function removeImg3() {
//   setTimeout(
//     function() {
// document.getElementById("uploadimg3").style.display="none"
//     }, 5000);
// }


// function removeImg4() {
//   setTimeout(
//     function() {
// document.getElementById("uploadimg4").style.display="none"
//     }, 5000);
// }


// function removeImg5() {
//   setTimeout(
//     function() {
// document.getElementById("uploadimg5").style.display="none"
//     }, 5000);
// }
</script>
 

</html>