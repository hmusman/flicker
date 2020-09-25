
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
              <h4 class="header-title" style="color:black;">Add Your Device</h4>
              @if(Session::has('warningMsg'))
                <div class="alert alert-warning">{{ Session::get('warningMsg') }}</div>
              @endif
               @if(Session::has('msg'))
                <div class="alert alert-success">{{ Session::get('msg') }}</div>
              @endif

              <form action="{{ route('Product.store') }}" method="post" enctype="multipart/form-data">
                  @csrf

                  <div class="tab-content">
                      <div class="tab-pane active" id="detail">
                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label">Category</label>
                              <div class="col-md-10">
                                  <input type="hidden" name="user_id" value="{{ Session::get('user')->id }}">
                                  <input type="hidden" name="status" value="" id="status">
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
                              <label for="example-text-input" class="col-md-2 col-form-label">Model</label>
                              <div class="col-md-10">
                                  <input class="form-control" type="text" value="{{ old('model') }}" name="model" placeholder="Enter Model" id="example-text-input">
                                  @error('model')
                                      <p class="text-danger mt-3">{{ $message }}</p>
                                  @enderror
                              </div>
                          </div>

                           <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label">City</label>
                              <div class="col-md-10">
                                  <input class="form-control" type="text" value="{{ old('city') }}" name="city" placeholder="Enter City" id="example-text-input">
                                  @error('city')
                                      <p class="text-danger mt-3">{{ $message }}</p>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label">Phone</label>
                              <div class="col-md-10">
                                  <input class="form-control" type="text" value="{{ old('phone') }}" name="phone" placeholder="Enter Active Phone" id="example-text-input">
                                  @error('phone')
                                      <p class="text-danger mt-3">{{ $message }}</p>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label">Color</label>
                              <div class="col-md-10">
                                  <input class="form-control" type="text" value="{{ old('color') }}" name="color" placeholder="Enter Color" id="example-text-input">
                                  @error('color')
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

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label">PTA</label>
                              <div class="col-md-10">
                                 <select class="form-control " name="pta">
                                        <option disabled="" selected="">Select Status</option>
                                        <option value="approved">Approved</option>
                                        <option value="unapproved">Un Approved</option>
                                  </select>
                                  @error('pta')
                                      <p class="text-danger mt-3">{{ $message }}</p>
                                  @enderror
                              </div>
                          </div>





                          <!-- <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label"> Image 1</label>
                              <div class="col-md-3"> 
                                  <div class="fallback">
                                      <input name="image1" type="file">
                                      @error('image1')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror

                                      @error('invalidImage1')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror
                                  </div>
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label"> Image 2</label>
                              <div class="col-md-3"> 
                                  <div class="fallback">
                                      <input name="image2" type="file">
                                      @error('image2')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror

                                      @error('invalidImage2')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror
                                  </div>
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label"> Image 3</label>
                              <div class="col-md-3"> 
                                  <div class="fallback">
                                      <input name="image3" type="file">
                                      @error('image3')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror

                                      @error('invalidImage3')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror
                                  </div>
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label"> Image 4</label>
                              <div class="col-md-3"> 
                                  <div class="fallback">
                                      <input name="image4" type="file">
                                      @error('image4')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror

                                      @error('invalidImage4')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror
                                  </div>
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label"> Image 5</label>
                              <div class="col-md-3"> 
                                  <div class="fallback">
                                      <input name="image5" type="file">
                                      @error('image5')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror

                                      @error('invalidImage5')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror
                                  </div>
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label"> Image 6</label>
                              <div class="col-md-3"> 
                                  <div class="fallback">
                                      <input name="image6" type="file">
                                      @error('image6')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror

                                      @error('invalidImage6')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror
                                  </div>
                              </div>
                          </div>

                           <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label"> Image 7</label>
                              <div class="col-md-3"> 
                                  <div class="fallback">
                                      <input name="image7" type="file">
                                      @error('image7')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror

                                      @error('invalidImage7')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror
                                  </div>
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label"> Image 8</label>
                              <div class="col-md-3"> 
                                  <div class="fallback">
                                      <input name="image8" type="file">
                                      @error('image8')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror

                                      @error('invalidImage8')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror
                                  </div>
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label"> Image 9</label>
                              <div class="col-md-3"> 
                                  <div class="fallback">
                                      <input name="image9" type="file">
                                      @error('image9')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror

                                      @error('invalidImage9')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror
                                  </div>
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label"> Image 10</label>
                              <div class="col-md-3"> 
                                  <div class="fallback">
                                      <input name="image10" type="file">
                                      @error('image10')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror

                                      @error('invalidImage10')
                                          <p class="text-danger mt-3">{{ $message }}</p>
                                      @enderror
                                  </div>
                              </div>
                          </div> -->

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-4 col-form-label">Minor Dent / Scratch?</label>
                              <div class="col-md-8">
                                   <div>
                                      <input id="minor-on" class="minor" name="minor" type="radio" value="yes">
                                    <label for="minor-on" class="myLabel">Yes</label>
                                    <input id="minor-off" class="minor" name="minor" type="radio" value="no">
                                    <label for="minor-off" class="myLabel">No</label>

                                    </div>
                                    @error('minor')
                                      <p class="text-danger mt-3">{{ $message }}</p>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-4 col-form-label">Major Dent</label>
                              <div class="col-md-8">
                                  <div>
                                      <input id="major-on" class="major" name="major" type="radio" value="yes">
                                    <label for="major-on" class="myLabel">Yes</label>
                                    <input id="major-off" class="major" name="major" type="radio" value="no">
                                    <label for="major-off" class="myLabel">No</label>

                                  </div>
                                  @error('major')
                                      <p class="text-danger mt-3">{{ $message }}</p>
                                  @enderror
                              </div>
                          </div>


                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-4 col-form-label">Original Accessories Available</label>
                              <div class="col-md-8">
                                 <div>
                                    <input id="accessory-on" class="accessory" name="accessory" type="radio" value="yes">
                                  <label for="accessory-on" class="myLabel">Yes</label>
                                  <input id="accessory-off" class="accessory" name="accessory" type="radio" value="no">
                                  <label for="accessory-off" class="myLabel">No</label>
                                  </div>
                                  @error('accessory')
                                      <p class="text-danger mt-3">{{ $message }}</p>
                                  @enderror
                              </div>
                          </div>


                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-4 col-form-label">Screen Is Cracked</label>
                              <div class="col-md-8">
                                  <div>
                                    <input id="screen-on" class="screen" name="screen" type="radio" value="yes">
                                  <label for="screen-on" class="myLabel">Yes</label>
                                  <input id="screen-off" class="screen" name="screen" type="radio" value="no">
                                  <label for="screen-off" class="myLabel">No</label>

                                  </div>
                                  @error('screen')
                                      <p class="text-danger mt-3">{{ $message }}</p>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-4 col-form-label">Device Box Available</label>
                              <div class="col-md-8">
                                 <div>
                                      <input id="device-on" class="device" name="device" type="radio" value="yes">
                                    <label for="device-on" class="myLabel">Yes</label>
                                    <input id="device-off" name="device" class="device" type="radio" value="no">
                                    <label for="device-off" class="myLabel">No</label>

                                  </div>
                                  @error('device')
                                      <p class="text-danger mt-3">{{ $message }}</p>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="example-text-input" class="col-md-4 col-form-label">Device Battery Status</label>
                              <div class="col-md-8">
                                 <select class="form-control battery" name="battery">
                                    <option disabled="" selected="">Select Status</option>
                                    @for($i=1; $i<=10; $i++)
                                      <option value="{{ $i*10 }}">{{ $i*10 }} %</option>
                                    @endfor
                                  </select>
                                  @error('battery')
                                      <p class="text-danger mt-3">{{ $message }}</p>
                                  @enderror
                              </div>
                          </div>

                      </div> <!-- detail -->
                  </div>

               


                  <div class="card">
                  	<div class="card-body row">

                  		<div class="text-center mt-4 col-md-3" id="SetOnDesktop" >
                        <input type="file" name="image1" style="display:none;" id="imgInput1" onchange="fileChangeFun(this,$('#DropZonIcon1'),1);"/> 
                  			<div class="dropzone" id="DropZonIcon1">
                  				<div style="width:100%; height:100%;" onclick="fullWidthInputCall(1);" id="imgFullWidthDiv1"><img src="NewZoomerImages/ic_backup_black_48dp.png" />
                          <p style="color: grey;margin-top: 16px;font-size: 14px;width: 100%;">Please Select Your Photo</p>
                          </div>
                  			</div>
                      </div>
                      <div class="text-center mt-4 col-md-1"></div>
                  		<div class="text-center mt-4 col-md-3">
                        <input type="file" name="image2" style="display:none;" id="imgInput2" onchange="fileChangeFun(this,$('#DropZonIcon2'),2);"/> 
                  			<div class="dropzone" id="DropZonIcon2">
                          <div style="width:100%; height:100%;" onclick="fullWidthInputCall(2);" id="imgFullWidthDiv2"><img src="NewZoomerImages/ic_backup_black_48dp.png" /><p style="color: grey;margin-top: 16px;font-size: 14px;width: 100%;">Please Select Your Photo</p></div>
                        </div>
                      </div>
                       <div class="text-center mt-4 col-md-1"></div>
                  		<div class="text-center mt-4 col-md-3" >
                        <input type="file" name="image3" style="display:none;" id="imgInput3" onchange="fileChangeFun(this,$('#DropZonIcon3'),3);"/> 
                  			<div class="dropzone" id="DropZonIcon3">
                          <div style="width:100%; height:100%;" onclick="fullWidthInputCall(3);" id="imgFullWidthDiv3"><img src="NewZoomerImages/ic_backup_black_48dp.png" /><p style="color: grey;margin-top: 16px;font-size: 14px;width: 100%;">Please Select Your Photo</p></div>
                        </div>
                  		</div>
                  	</div>
                  </div>


                  <div class="card">
                  	<div class="card-body row">
                  		<div class="text-center mt-4 col-md-3 " id="SetOnDesktop">
                        <input type="file" name="image4" style="display:none;" id="imgInput4" onchange="fileChangeFun(this,$('#DropZonIcon4'),4);"/> 
                  			<div class="dropzone" id="DropZonIcon4">
                          <div style="width:100%; height:100%;" onclick="fullWidthInputCall(4);" id="imgFullWidthDiv4"><img src="NewZoomerImages/ic_backup_black_48dp.png" /><p style="color: grey;margin-top: 16px;font-size: 14px;width: 100%;">Please Select Your Photo</p></div>
                        </div>
                      </div>
                         <div class="text-center mt-4 col-md-1"></div>
                  		<div class="text-center mt-4 col-md-3">
                        <input type="file" name="image5" style="display:none;" id="imgInput5" onchange="fileChangeFun(this,$('#DropZonIcon5'),5);"/> 
                  			<div class="dropzone" id="DropZonIcon5">
                          <div style="width:100%; height:100%;" onclick="fullWidthInputCall(5);" id="imgFullWidthDiv5"> <input type="file" name="image5" style="display:none;" id="imgInput5" onchange="fileChangeFun(this,$('#DropZonIcon5'),5);"/> <img src="NewZoomerImages/ic_backup_black_48dp.png" /><p style="color: grey;margin-top: 16px;font-size: 14px;width: 100%;">Please Select Your Photo</p></div>
                        </div>
                      </div>
                      
                         <div class="text-center mt-4 col-md-1"></div>
                  		<div class="text-center mt-4 col-md-3" >
                        <input type="file" name="image6" style="display:none;" id="imgInput6" onchange="fileChangeFun(this,$('#DropZonIcon6'),6);"/> 
                  			<div class="dropzone" id="DropZonIcon6">
                          <div style="width:100%; height:100%;" onclick="fullWidthInputCall(6);" id="imgFullWidthDiv6"> <input type="file" name="image6" style="display:none;" id="imgInput6" onchange="fileChangeFun(this,$('#DropZonIcon6'),6);"/> <img src="NewZoomerImages/ic_backup_black_48dp.png" /><p style="color: grey;margin-top: 16px;font-size: 14px;width: 100%;">Please Select Your Photo</p></div>
                        </div>
                  		</div>
                  	</div>
                  </div>

                  
                  <div class="card">
                      <div class="card-body row">
                          <div class="text-center mt-4">
                              <button type="submit" onclick="estimate_fun();" class="btn btn-primary waves-effect waves-light">Save</button>
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
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() ==7)
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
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() ==7)
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