@if($products->count()>0)
	@foreach($products as $product)
		@php $img = 'storage/admin/images/pricecalculatorproduct/thumbnail/130_'.$product->image @endphp
		<div class="BrandVersions " style="width: 20%;">
         	<a href="#getEstimatedmobile" type="button" onclick="BrandProductItem('{{ $product->id }}');" style="cursor: pointer;"> <figure style="padding-top: 5px;">
            <center> <img style="" src="{{ asset($img)}}" alt="Trulli" height="130"></center>
            <a  id="flip" href="javascript:void(0);" style="text-decoration: none;">
            
            <figcaption  style="     text-align: center; color: #2c2929 !important;   font-size: 14px; font-weight: 500;">{{ ucwords($product->name) }}</figcaption></a>
           </figure></a>
        </div>
	@endforeach
@else
	No Model Available
@endif