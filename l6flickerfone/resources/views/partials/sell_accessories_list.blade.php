@if($accessories->count()>0)
    @foreach($accessories as $row)
      @php $img1 = 'storage/admin/images/sellaccessory/thumbnail/215_'.$row->img @endphp
      <div style="width: 100%; margin-top: 30px; float: left;">
          <div style="width: 30%; float: left;">

              <div class="autoplayFeatures">
                  <img src="{{ asset($img1) }}" alt="Trulli" >
              </div>
            
            </div>
            <div style="width: 70%; float: left;border-bottom: 1px #d8d5d5 solid;" >
            
            
              <p style="color: black">{{ ucwords($row->name) }}</p>

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
                  <p>Date Posted:</p>
                  </div>
                  <div style="width: 50%; float: left; color: black;">
                  
                    <p>{{ ucfirst($row->city) }}</p>
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
    @endforeach

    <div class="col-md-12">
        
        {!! $accessories->links() !!}

    </div>
@else
  
  <div class="col-md-12"><div class="alert alert-warning">No Records Found Please refine your filter!</div></div>

@endif





