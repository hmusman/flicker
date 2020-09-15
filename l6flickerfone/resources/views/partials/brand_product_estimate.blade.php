 <div class="row">
    @php $img = 'storage/'.$csproduct->image @endphp
    <div class="col-md-2" style=""><img src="{{ asset($img) }}" style="width: 100%;" /></div>
    <div class="col-md-6" style="background-color: white">
    
    
          <p style="width: 100%;width: 100%;
          font-size: 20px;
          color: black;
          font-weight: 700;">{{ ucwords($csproduct->name) }} ({{ $csproduct->color }} , {{ $csproduct->storage }})</p>


          <img style="height: 13px; margin-left: 10px; filter: invert(0.5);" src="{{ asset('storage/images/IphoneDetails/ic_mode_edit_black_18dp.png')}}">
          <font style="color: black;">Change Model</font>



          <hr/>



          <p style="width: 100%;width: 100%;
          font-size: 20px;
          color: black;">Lets Determined the Condition</p>




          <p style="width: 100%;width: 100%;
          font-size: 16px;
          color: black;">Does the Device Power On?</p>


          <div>
            <input id="toggle-on" name="toggle" type="radio">
          <label for="toggle-on">Yes</label>
          <input id="toggle-off" name="toggle" type="radio">
          <label for="toggle-off">No</label>

          </div>






          <p style="width: 100%;width: 100%;
          font-size: 16px;
          color: black;">Is the device fully Functional all parts of the screen light up correctly?</p>




          <div>
            <input id="toggle-on1" name="toggle1" type="radio">
          <label for="toggle-on1">Yes</label>
          <input id="toggle-off1" name="toggle1" type="radio">
          <label for="toggle-off1">No</label>

          </div>





          <p style="width: 100%;width: 100%;
          font-size: 16px;
          color: black;">Are the Front and Back Free of cracks?</p>




        <div>
          <input id="toggle-on2" name="toggle1" type="radio">
        <label for="toggle-on2">Yes</label>
        <input id="toggle-off2" name="toggle1" type="radio">
        <label for="toggle-off2">No</label>

        </div>



        <p style="width: 100%;width: 100%;
        font-size: 16px;
        color: black;">Whats the overall cosmatic condition?</p>




      <p style="width: 100%;width: 100%;
      font-size: 14px;
      color: rgb(73, 70, 70);">Scratches, scuffs, dents, bends etc.</p>






      <div style="height: 130px; width: 100%;">

      <div id="fourboxatmob" style="  margin-right: 10px; height: 100%;  width: 22%;float: left;background-color: white;color: blue;border: 1px blue solid;padding: 27px;">Looks like new</div>
      <div id="fourboxatmob" style=" margin-right: 10px; height: 100%; width: 22%;float: left;background-color: white;color: blue;border: 1px blue solid;padding: 27px;">Light signs of use</div>
      <div id="fourboxatmob" style=" margin-right: 10px; height: 100%; width: 22%;float: left;background-color: white;color: blue;border: 1px blue solid;padding: 27px;">Normal signs of use</div>
      <div id="fourboxatmob" style="  width: 22%;float: left; height: 100%;background-color: white;color: blue;border: 1px blue solid;padding: 27px;">Heavy signs of use or damage</div>

      </div>



    </div>
    <div class="col-md-4" style="">
    
    
    
      <div style="height: 20%; width: 100%; "></div>

      <div style="height: 70%; width: 100%; ">
      
        <div id="ourEstimateOnMob" style=" width: 98%; box-shadow:  0px 0px 5px black;">
        <div style="height: 20%; width: 100%; background-color: #f3f1f2; color: blue;
        padding-top: 17px;
        font-weight: 500;
        font-size: 20px;
     "><center>oue Estimate</center></div>
        <div style="height: 70%; width: 100%; ">
        
        <p style="color: black; width: 100%;    padding-top: 17px;
       " >
         <center style="color: black ;font-weight: 500; font-size: 20px;"> Poor Condition</center><br/>
      <center style="color: blue ;font-weight: 500; font-size: 20px;">  <sup>  PKR</sup><font style="    font-size: 6vw;"> 211</font>  </center>  </p>
        
        
        </div>
        <div style="height: 10%; width: 100%;background-color: #f3f1f2; ">
        
       <center> <p style="background-color: #4a88c2;
        width: 66%;
        padding: 10px;">Get your product listed</p></center>
        
        </div>
      </div>



      </div>

    <div style="height: 10%; width: 100%; "></div>
    
    </div>


  </div>