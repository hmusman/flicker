
@if($product->variation_colors->count()>3)
  <style type="text/css">
    #apple1div{ height: 550px !important; }
  </style>

@endif

@if($product->variation_colors->count()>6)
  <style type="text/css">
    #apple1div{ height: 750px !important; }
  </style>
@endif

@if($product->variation_colors->count()>0)
  <p style="color: black; margin-left: 10px;">Select Color</p>
  <font style="color: black !important;"> &nbsp;&nbsp;&nbsp;White</font><img style="height: 13px; margin-left: 10px; filter: invert(0.5);" src="{{ asset('storage/images/IphoneDetails/ic_mode_edit_black_18dp.png')}}" />
  <input type="hidden" id="brand_product_id" value="{{ $product->id }}">
  <select id="phoneColors" onchange="phoneColors(this);"  class="placeholder">
    <option value="" selected class="placeholder" disabled>Select Color</option>
    @php $productColor = ''; @endphp
    @foreach($product->variation_colors as $color)
        @if($productColor != $color->color) <option value="{{ $color->color }}" >{{ ucwords($color->color) }}</option> @endif
        @php $productColor = $color->color; @endphp
    @endforeach
  </select>
@endif
<p  style=" margin-left: 10px;color: black;">Select your {{ ucwords($product->name) }}</p>


<div style="height: 250px;  width: 100%; ">
 <div id="changecolorseletidOnMobilefirst" style="width: 20%; height: 100%;  float: left; "></div>
 @if($product->variation_colors->count()>0)
    <div id="SingleProductBlock" style="width: 60%; float: left;"> 

        @foreach($product->variation_colors as $row)
            @php $img = 'storage/'.$product->image @endphp
            <div id="changecolorseletidOnMobile" style="width: 33%; height: 100%; background-color: White;  float: left;  ">

              <figure style="padding-top: 8px;">
                <center> <img  id="changecolor1" style="    width: 38%;" src="{{ asset($img) }}" alt="Trulli" style="width:100%"></center>
               
                <center>
                  
                  
                  <p style="text-decoration: none; color: black !important;">{{ ucwords($product->name) }} x {{ $row->storage }}</p>
                  
                  <div onclick="ColorStorageProduct('{{ $row->product_id }}','{{ $row->color }}','{{ $row->storage }}');">
                  <a    href="#getEstimatedmobile" style="text-decoration: none;">   <figcaption  id=""  style="background-color: #4a88c2;
                 text-align: center; width: 50%;
                 padding: 10px; color: white !important;
                 border-radius: 5px;
                 margin-top: 10px;  ">Get Estimate</figcaption></a>
                </div> 
                </center>
               </figure>
            </div>
        @endforeach

       
    </div>
    

 @endif

 <div id="changecolorseletidOnMobilelast" style="width: 20%; height: 100%;   float: left; "></div>
</div>