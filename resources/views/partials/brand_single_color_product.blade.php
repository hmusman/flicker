 @foreach($products as $row)
     @php $img = 'storage/admin/images/pricecalculatorproduct/thumbnail/100_'.$row->image @endphp
    <div id="changecolorseletidOnMobile" style="width: 33%; height: 100%; background-color: White;  float: left;  ">

      <figure style="padding-top: 8px;">
        <center> <img  id="changecolor1" style="    width: 38%;" src="{{ asset($img) }}" alt="Trulli" style="height: 130px;"></center>
       
        <center>
          
          
          <p style="text-decoration: none; color: black !important;">{{ ucwords($row->name) }} x {{ $row->storage }}</p>
          
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



