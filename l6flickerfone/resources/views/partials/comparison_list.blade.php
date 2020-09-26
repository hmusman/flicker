<div>
  <p style="background-color: white;color: black;padding: 7px;font-weight: 600;border-style: none;">DEVICES <button
     class="ButtonSearchOnMob"    id="srchbtnid" onclick="{{ $hide }}();" style="margin-left: 250px;
    background-color: #f8f7f7;
    color: black;
 
    font-weight: 600;
    border-style: none;">X</button></p>
</div>

@if($total>0)
	
	@foreach($product_list as $product)
		@php $img = 'storage/admin/images/product/thumbnail/100_'.$product->image @endphp
		
		<li onclick="singleProduct('{{ $product->id }}','{{ $hide }}');" style="cursor: pointer;border:1px solid;width: 98%;margin-left: 1%;margin-bottom: 5px;">
          <div class="row" style="margin-top: 3px;">
            <div class="col-md-2">
              <div id="setwidthfirst" style="  ">
                <img src="{{ asset($img) }}"
                  style="height: 91px;  ">
              </div>
            </div>
            <div class="col-md-10">
              <div id="setwidthsecond" style="  ">
                <a type="button" style="margin-top: 20px;" onclick="singleProduct('{{ $product->id }}','{{ $hide }}');">{{ $product->name }}
                </a>
              </div>
            </div>
          </div>
  </li>
		
	@endforeach

@endif

