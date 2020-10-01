@php $img1 = 'storage/admin/images/sellproduct/thumbnail/215_'.$row->img1 @endphp
@php $img2 = 'storage/admin/images/sellproduct/thumbnail/215_'.$row->img2 @endphp
@php $img3 = 'storage/admin/images/sellproduct/thumbnail/215_'.$row->img3 @endphp
<div style="width: 100%; margin-top: 30px; float: left;">
    <div style="width: 30%; float: left;">

        <div class="autoplayFeatures">
            <img src="{{ asset($img1) }}" alt="Trulli" >
            <img src="{{ asset($img2) }}" alt="Trulli">
            <img src="{{ asset($img3) }}" alt="Trulli">
        </div>
      
      </div>
      <div style="width: 70%; float: left;border-bottom: 1px #d8d5d5 solid;" >
      
      
        <p style="color: black">{{ ucwords($row->model) }}</p>
        <!-- <p style="color: #969494;">&#x2713;Collisimo&#x2713;2-4 Jours&#x2713;Guarntie 2 ans&#x2713; FR Plug</p> -->
      



        <div class="row">
          <div class="col-md-6"><font style="background-color: #f6ba10;  padding: 5px 10px 5px 10px;margin-right: 5px;">{{ $row->device_status }}</font></div>
          <div class="col-md-6"></div>
        </div>

        <div class="row">
          <div class="col-md-6">
         <p style="    position: relative;
            top: 43px;
            left: 25px;
            font-weight: 600; color: blue;
        ">  PKR</p>
        <p style="    color: blue;
            font-size: 48px;
            padding: 20px;
            font-weight: 700;"> {{ $row->price }}</p>
          </div>


          <div class="col-md-6">

            <div style="width: 50%; float: left; color: black;">
            <p>City:</p>
                <p>PTA STATUS:</p>
                    <p>Date Posted:</p>
            </div>
            <div style="width: 50%; float: left; color: black;">
            
              <p>{{ ucfirst($row->city) }}</p>
              <p>{{ ucfirst($row->pta) }}</p>
              <p>{{ date('d',strtotime($row->created_at)) }} {{ date('M',strtotime($row->created_at)) }} , {{ date('Y',strtotime($row->created_at)) }}</p>
            
            </div>
          </div>
        </div>

        <p style="    background-color: blue;
        width: 180px;
        padding: 9px;
        text-align: center;
        font-weight: 700;
        font-size: larger;">Contact</p>


      </div>

</div>


