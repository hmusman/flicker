 @if($products->count()>0)
    @foreach($products as $row)
      @php $img = 'storage/'.$row->image @endphp
      <div class="col-md-4" style="border-right: 1px #f2f2f2 solid;border-bottom: 1px #f2f2f2 solid;" >

           <center> <img src="{{ asset($img) }}" style="height: 215px;margin-top: 40px;" /></center>
           <center> <p style="
          
            text-transform: uppercase; font-weight: bold; color: black !important;">{{ ucwords($row->name) }}</p></center>
           <center> <p style="  margin-top: -17px !important;color: #b3b5be !important;">It is in your Pocket</p></center>

           <!-- <center> <del style="  color: #252629 !important;">PKR {{ $row->price }}</del></center> -->
           <center> <p style="  color: #db4f45 !important;">PKR {{ $row->price }}</p></center>
           <center><a href="{{ route('AdviceComparison',$row->id) }}"> <p style="text-transform: uppercase;  color: #b3b5be !important;">Add to compare</p></a></center>


      </div>
    @endforeach
  @else
    <div class="col-md-3"></div><div class="col-md-6" style="margin-top: 3%;margin-bottom: 1.5%;"><div class="alert alert-warning">No Product Available</div></div>
  @endif