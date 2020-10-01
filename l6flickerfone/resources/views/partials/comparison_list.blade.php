<div>
  <p style="background-color: white;color: black;padding: 7px;font-weight: 600;border-style: none;">DEVICES <button
     class="ButtonSearchOnMob"    id="srchbtnid" onclick="{{ $hide }}();" style="margin-left: 250px;
    background-color: #f8f7f7;
    color: black;
 
    font-weight: 600;
    border-style: none;">X</button></p>
</div>
<style>
  #styleOfCampSrch{
        margin-top: 5px;

  }

  #hoverstyle:hover{
  border-left: 2px red solid !important;
  
  }

    #hoverstyle:hover a{
 color: red !important;
  
  }


 #hoverstyle:hover #styleOfCampSrch{
     background: #f9f9f9 !important;
  }
  
</style>

@if($total>0)
  
  @foreach($product_list as $product)
    @php $img = 'storage/admin/images/product/thumbnail/100_'.$product->image @endphp
    
    <li onclick="singleProduct('{{ $product->id }}','{{ $hide }}');" style="cursor: pointer;width: 98%;margin-bottom: 5px;" id="hoverstyle">
          <div class="row" style="margin-top: 3px;" id="styleOfCampSrch">
            <div class="col-md-2">
              <div id="setwidthfirst" style="  ">
                <img src="{{ asset($img) }}"
                  style="height: 91px;  ">
              </div>
            </div>
            <div class="col-md-10">
              <div id="setwidthsecond" style="  ">
                <a type="button" style="margin-top: 20px;" onclick="singleProduct('{{ $product->id }}','{{ $hide }}');">{{ ucfirst($product->name) }}
                </a>
              </div>
            </div>
          </div>
  </li>
    
  @endforeach

@endif

