<div>
  <p style="background-color: white;color: black;padding: 7px;font-weight: 600;border-style: none;">DEVICES 
  
  <!-- <button
     class="ButtonSearchOnMob"    id="srchbtnid" onclick="usedHideAgain();" style="margin-left: 200px;


    background-color: #f8f7f7;
    color: black;
 
    font-weight: 600;
    border-style: none; outline: none; cursor: pointer;">X</button>
     -->
    
    
    </p>
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



@if($accessories_list->count() >0)
  
  @foreach($accessories_list as $product)
    @php $img = 'storage/admin/images/sellaccessory/thumbnail/100_'.$product->img @endphp
    

    <li id="hoverstyle" onclick="AccessoriesList();" style="cursor: pointer;width:100%;margin-bottom: 5px;">
          <div class="row" id="styleOfCampSrch">

            <div class="col-md-2">
              <div id="setwidthfirst" style="  ">
                <img src="{{ asset($img) }}"
                  style="height: 91px;  ">
              </div>
            </div>
            <div class="col-md-10">
              <div id="setwidthsecond" style="  ">
                <a type="button" style="color: #605d5d;">{{ ucwords($product->Accessorybrand->name) }}
                </a>
              </div>
            </div>
          </div>
  </li>
    
  @endforeach

@endif

