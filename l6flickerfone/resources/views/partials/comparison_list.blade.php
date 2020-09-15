<div>
  <p style="background-color: white;color: black;padding: 7px;font-weight: 600;border-style: none;">DEVICES <button
     class="ButtonSearchOnMob"    id="srchbtnid" onclick="{{ $hide }}();" style="margin-left: 285px;
    background-color: #f8f7f7;
    color: black;
 
    font-weight: 600;
    border-style: none;">X</button></p>
</div>

@if($total>0)
	
	@foreach($product_list as $product)
		@php $img = 'storage/'.$product->image @endphp
		<li>
	        <div class="row">
	          <div class="col-md-2">
	            <div id="setwidthfirst" style="  ">
	              <img src="{{ asset($img) }}" style="  padding-left: 12px;  height: 91px;  ">
	            </div>
	          </div>
	          <div class="col-md-10">
	            <div id="setwidthsecond" style="  ">
	              <button type="button" onclick="singleProduct('{{ $product->id }}','{{ $hide }}');">{{ $product->name }}</button>
	            </div>
	          </div>
	        </div>
	    </li>

	@endforeach

@endif

