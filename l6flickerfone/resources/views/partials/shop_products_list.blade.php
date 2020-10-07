 <style>
 #BorderStyle:nth-child(4), #BorderStyle:nth-child(7),  #BorderStyle:nth-child(10), 
 #BorderStyle:nth-child(13), #BorderStyle:nth-child(16), #BorderStyle:nth-child(19) {

border-right: none !important;


}


.addComp:hover{
  color: blue !important;
  
}
 </style>
 
 
 @if($products->count()>0)
    @foreach($products as $row)
      @php $img = 'storage/admin/images/product/thumbnail/215_'.$row->image @endphp
      <div class="col-md-4" id="BorderStyle" style="border-right: 1px #e3e0e0 solid;border-bottom: 1px #e3e0e0 solid;" >

           <a href="{{ route('ProductDetail',$row->id) }}"><center> <img src="{{ asset($img) }}" style="height: 215px;margin-top: 40px;" /></center>
           <center> <p style="
          
            text-transform: uppercase; font-weight: bold; color: black !important;">{{ ucwords($row->name) }}</p></center>
           <center> <p style="  margin-top: -17px !important;color: #b3b5be !important;">It is in your Pocket</p></center>

           <!-- <center> <del style="  color: #252629 !important;">PKR {{ $row->price }}</del></center> -->
           <center> <p style="  color: #db4f45 !important;">PKR {{ $row->price }}</p></center></a>
           <center><a href="{{ route('AdviceComparison',$row->id) }}"> <p class="addComp" style="text-transform: uppercase;  color: #b3b5be;">Add to compare</p></a></center>


      </div>
    @endforeach
    

      <div class="col-md-12" style="margin-top: 15px; margin-bottom: 10px;">
          {!! $products->links() !!}
      </div>
    
    
  @else
    <div class="col-md-3"></div><div class="col-md-6" style="margin-top: 3%;margin-bottom: 1.5%;"><div class="alert alert-warning"> No Product Available</div></div>
  @endif