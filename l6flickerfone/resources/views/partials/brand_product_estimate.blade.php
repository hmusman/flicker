 <div class="row">
    @php $img = 'storage/admin/images/pricecalculatorproduct/thumbnail/190_'.$csproduct->image @endphp
    <div class="col-md-2" style=""><img src="{{ asset($img) }}" style="width: 100%;" /></div>
    <div class="col-md-6" style="background-color: white">
    
          <input type="hidden" id="estimated_advice_price" value="{{ $csproduct->price }}">
          <p style="width: 100%;width: 100%;
          font-size: 20px;
          color: black;
          font-weight: 700;">{{ ucwords($csproduct->name) }} ({{ $csproduct->color }} , {{ $csproduct->storage }})</p>


          <img style="height: 13px; margin-left: 10px; filter: invert(0.5);" src="{{ asset('storage/images/IphoneDetails/ic_mode_edit_black_18dp.png')}}">
          <font style="color: black;">Change Model</font>



          <hr/>



          <p style="width: 100%;width: 100%;    margin-top: 5px;
          font-size: 20px;
          color: black;">Lets Determined the Condition</p>




          <p style="width: 100%;width: 100%; margin-top: 15px;
          font-size: 16px;
          color: black;">Minor Dent / Scratch?</p>


          <div>
            <input id="minor-on" class="minor" name="minor" type="radio" value="{{ $csproduct->minor_dent_scratch }}">
          <label for="minor-on">Yes</label>
          <input id="minor-off" class="minor" name="minor" type="radio" value="0">
          <label for="minor-off">No</label>

          </div>

          <p style="width: 100%;width: 100%;
          font-size: 16px;
          color: black;">Major Dent / Scratch?</p>


          <div>
            <input id="major-on" class="major" name="major" type="radio" value="{{ $csproduct->major_dent_scratch }}">
          <label for="major-on">Yes</label>
          <input id="major-off" class="major" name="major" type="radio" value="0">
          <label for="major-off">No</label>

          </div>


          <p style="width: 100%;width: 100%;margin-top: 15px;
          font-size: 16px;
          color: black;">Original Accessories Available?</p>


          <div>
            <input id="accessory-on" class="accessory" name="accessory" type="radio" value="0">
          <label for="accessory-on">Yes</label>
          <input id="accessory-off" class="accessory" name="accessory" type="radio" value="{{ $csproduct->original_accessories_available }}">
          <label for="accessory-off">No</label>

          </div>


          <p style="width: 100%;width: 100%;margin-top: 15px;
          font-size: 16px;
          color: black;">Screen is Cracked?</p>


          <div>
            <input id="screen-on" class="screen" name="screen" type="radio" value="{{ $csproduct->screen_is_cracked }}">
          <label for="screen-on">Yes</label>
          <input id="screen-off" class="screen" name="screen" type="radio" value="0">
          <label for="screen-off">No</label>

          </div>


          <p style="width: 100%;width: 100%; margin-top: 15px;
          font-size: 16px;
          color: black;">Device Box Available?</p>




          <div>
            <input id="device-on" class="device" name="device" type="radio" value="0">
          <label for="device-on">Yes</label>
          <input id="device-off" name="device" class="device" type="radio" value="{{ $csproduct->device_box_available }}">
          <label for="device-off">No</label>

          </div>





          <p style="width: 100%;width: 100%; margin-top: 15px;
          font-size: 16px;
          color: black;">Battery Status?</p>




        <div>
          <input type="hidden" name="" id="device_battery_status" value="{{ $csproduct->device_battery_status }}">
          <select class="form-control battery">
            <option disabled="" selected="">Select Status</option>
            @for($i=1; $i<=10; $i++)
              <option value="{{ $i*10 }}">{{ $i*10 }} %</option>
            @endfor
          </select>

        </div>

        <button style="margin-top: 20px;" class="btn btn-primary" onclick="estimate_fun();" type="button">Submit</button>
<!-- 
        <p style="width: 100%;width: 100%;
        font-size: 16px;
        color: black;">Whats the overall cosmatic condition?</p>
 -->



     <!--  <p style="width: 100%;width: 100%;
      font-size: 14px;
      color: rgb(73, 70, 70);">Scratches, scuffs, dents, bends etc.</p>






      <div style="height: 130px; width: 100%;">

      <div id="fourboxatmob" style="  margin-right: 10px; height: 100%;  width: 22%;float: left;background-color: white;color: blue;border: 1px blue solid;padding: 27px;">Looks like new</div>
      <div id="fourboxatmob" style=" margin-right: 10px; height: 100%; width: 22%;float: left;background-color: white;color: blue;border: 1px blue solid;padding: 27px;">Light signs of use</div>
      <div id="fourboxatmob" style=" margin-right: 10px; height: 100%; width: 22%;float: left;background-color: white;color: blue;border: 1px blue solid;padding: 27px;">Normal signs of use</div>
      <div id="fourboxatmob" style="  width: 22%;float: left; height: 100%;background-color: white;color: blue;border: 1px blue solid;padding: 27px;">Heavy signs of use or damage</div>

      </div> -->



    </div>
    <div class="col-md-4" style="">
    
    
    
      <div style="height: 20%; width: 100%; "></div>

      <div style="height: 70%; width: 100%; ">
      
        <div id="ourEstimateOnMob" style=" width: 98%; box-shadow:  0px 0px 5px black;">
        <div style="height: 20%; width: 100%; background-color: #f3f1f2; color: blue;
        padding-top: 17px;
        font-weight: 500;
        font-size: 20px;
     "><center>Our Estimate</center></div>
        <div style="height: 70%; width: 100%; ">
        
        <p style="color: black; width: 100%;    padding-top: 17px;
       " >
         <center style="color: black ;font-weight: 500; font-size: 20px;" id="grading"></center>
         <br/>
      <center style="color: blue ;font-weight: 500; font-size: 20px;">  <sup>  PKR</sup><font style="font-size: 6vw;margin-left: 5px;" id="estimate_price"> 0</font>  </center>  </p>
        
        
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

  <script type="text/javascript">
    function estimate_fun()
    {
       var estimate_deduction =0;
       var grading = "";
       //Anything above or equal to 8

      // Scenario 1
      if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#device-on').is(":checked") && $('#screen-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      } 

      // Scenario 2
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#device-on').is(":checked") && $('#screen-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      } 

      // Scenario 3
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      } 

      // Scenario 4
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Excellent";
      } 

      // Scenario 5
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Good";
      } 

      // Scenario 6
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      } 

      // Scenario 7
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 8
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Good";
      } 

      // Scenario 9
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }  

      // Scenario 10
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      } 

      // Scenario 11
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 12
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Good";
      }

      // Scenario 13
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Good";
      }

      // Scenario 14
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 15
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Good";
      }

      // Scenario 16
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 17
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 18
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 19
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 20
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Good";
      }

      // Scenario 21
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 22
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 23
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 24
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 25
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Fair";
      }

      // Scenario 26
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=80)
      {
        grading = "Excellent";
      }


      // Anything above or equal to 7

      // Scenario 1
      if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#device-on').is(":checked") && $('#screen-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      } 

      // Scenario 2
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#device-on').is(":checked") && $('#screen-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      } 

      // Scenario 3
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      } 

      // Scenario 4
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Excellent";
      } 

      // Scenario 5
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Good";
      } 

      // Scenario 6
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      } 

      // Scenario 7
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 8
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Good";
      } 

      // Scenario 9
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }  

      // Scenario 10
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      } 

      // Scenario 11
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 12
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() ==70)
      {
        grading = "Fair";
      }

      // Scenario 13
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Good";
      }

      // Scenario 14
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 15
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Good";
      }

      // Scenario 16
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 17
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 18
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 19
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 20
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() ==7)
      {
        grading = "Fair";
      }

     // Scenario 21
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 22
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 23
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 24
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 25
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Fair";
      }

      // Scenario 26
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() >=70)
      {
        grading = "Excellent";
      }
      
      // Anything below to 6

      // Scenario 1
      if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#device-on').is(":checked") && $('#screen-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      } 

      // Scenario 2
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#device-on').is(":checked") && $('#screen-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      } 

      // Scenario 3
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      } 

      // Scenario 4
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Good";
      } 

      // Scenario 5
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      } 

      // Scenario 6
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      } 

      // Scenario 7
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 8
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      } 

      // Scenario 9
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }  

      // Scenario 10
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      } 

      // Scenario 11
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 12
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading="Fair";
      }

      // Scenario 13
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 14
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 15
      else if($('#minor-on').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 16
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 17
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 18
      else if($('#minor-on').is(":checked") && $('#major-on').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 19
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 20
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 21
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 22
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-off').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 23
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-off').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 24
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 25
      else if($('#minor-off').is(":checked") && $('#major-on').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-on').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Fair";
      }

      // Scenario 26
      else if($('#minor-off').is(":checked") && $('#major-off').is(":checked") && $('#accessory-on').is(":checked") && $('#screen-off').is(":checked") && $('#device-on').is(":checked") && $('.battery').children("option:selected").val() <=60)
      {
        grading = "Excellent";
      }
     
      if($('.minor').is(":checked")){
        estimate_deduction+=parseInt($(".minor:checked").val());
      }
      
      if($('.major').is(":checked"))
      {
        estimate_deduction+=parseInt($(".major:checked").val());
      }

      if($('.screen').is(":checked"))
      {
        estimate_deduction+=parseInt($(".screen:checked").val());
      }

      if($('.device').is(":checked"))
      {
        estimate_deduction+=parseInt($(".device:checked").val());
      }

      if($('.accessory').is(":checked"))
      {
        estimate_deduction+=parseInt($(".accessory:checked").val());
      }

      if($('.battery option:selected').val()<6)
      {
        
        estimate_deduction+=parseInt($("#device_battery_status").val());
       
      }
      var price = $('#estimated_advice_price').val();
      if($('.minor').is(":checked") && $('.major').is(":checked") && $('.screen').is(":checked") && $('.device').is(":checked") && $('.accessory').is(":checked"))
      {
        if($('.battery').children("option:selected").val() >0)
        {
          $('#estimate_price').html(price - estimate_deduction);
          $('#grading').html(grading);        
        }
      }
    }
  </script>