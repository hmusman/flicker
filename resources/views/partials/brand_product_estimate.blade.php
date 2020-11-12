 
 <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

 <style type="text/css"> .myLabel{ cursor: pointer !important;  } </style>

 <style>
   .btn-primary {
    color: #fff;
    background-color: #4a88c1 !important;
    border-color: #4a88c1 !important;
}

primary:focus {
    box-shadow: 0 0 0 0.2rem #4a88c1 !important;
}
 </style>

 <div class="row fontUbantu">
    @php $img = 'storage/admin/images/pricecalculatorproduct/thumbnail/190_'.$csproduct->image @endphp
    <div class="col-md-2" style=""><img src="{{ asset($img) }}" style="width: 100%;" /></div>
    <div class="col-md-6 fontUbantu" style="background-color: white">
    
          <input type="hidden" id="estimated_advice_price" value="{{ $csproduct->price }}">
          <p style="width: 100%;width: 100%;
          font-size: 20px;
          color: black;
          font-weight: 700;" class="fontUbantu">{{ ucwords($csproduct->name) }} ({{ $csproduct->color }} , {{ $csproduct->storage }})</p>


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
            <input id="minor-on" class="minor" name="minor" required="required" type="radio" value="{{ $csproduct->minor_dent_scratch }}">
          <label for="minor-on" class="myLabel">Yes</label>
          <input id="minor-off" class="minor" name="minor" required="required" type="radio" value="0">
          <label for="minor-off" class="myLabel">No</label>

<p class="minor_error" style="display:none;color: red;">*Must Filled Estimate Form</p>
          </div>

          <p style="width: 100%;width: 100%;
          font-size: 16px;
          color: black;">Major Dent / Scratch?</p>


          <div>
            <input id="major-on" class="major" name="major" required="required" type="radio" value="{{ $csproduct->major_dent_scratch }}">
          <label for="major-on" class="myLabel">Yes</label>
          <input id="major-off" class="major" name="major" required="required" type="radio" value="0">
          <label for="major-off" class="myLabel">No</label>

<p class="major_error" style="display:none;color: red;">*Must Filled Estimate Form</p>
          </div>


          <p style="width: 100%;width: 100%;margin-top: 15px;
          font-size: 16px;
          color: black;">Original Accessories Available?</p>


          <div>
            <input id="accessory-on" class="accessory" required="required" name="accessory" type="radio" value="0">
          <label for="accessory-on" class="myLabel">Yes</label>
          <input id="accessory-off" class="accessory" name="accessory" required="required" type="radio" value="{{ $csproduct->original_accessories_available }}">
          <label for="accessory-off" class="myLabel">No</label>

<p class="acc_error" style="display:none;color: red;">*Must Filled Estimate Form</p>
          </div>


          <p style="width: 100%;width: 100%;margin-top: 15px;
          font-size: 16px;
          color: black;">Screen is Cracked?</p>


          <div>
            <input id="screen-on" class="screen" name="screen" required="required" type="radio" value="{{ $csproduct->screen_is_cracked }}">
          <label for="screen-on" class="myLabel">Yes</label>
          <input id="screen-off" class="screen" name="screen" required="required" type="radio" value="0">
          <label for="screen-off" class="myLabel">No</label>

<p class="screen_error" style="display:none;color: red;">*Must Filled Estimate Form</p>
          </div>


          <p style="width: 100%;width: 100%; margin-top: 15px;
          font-size: 16px;
          color: black;">Device Box Available?</p>




          <div>
            <input id="device-on" class="device" name="device" required="required" type="radio" value="0">
          <label for="device-on" class="myLabel">Yes</label>
          <input id="device-off" name="device" class="device" required="required" type="radio" value="{{ $csproduct->device_box_available }}">
          <label for="device-off" class="myLabel">No</label>

<p class="box_error" style="display:none;color: red;">*Must Filled Estimate Form</p>
          </div>





          <p style="width: 100%;width: 100%; margin-top: 15px;
          font-size: 16px;
          color: black;">Battery Status?</p>
<p class="batt_error" style="display:none;color: red;">*Must Filled Estimate Form</p>

          <select class="form-control battery" name="battery" required="required" onchange='OtherPerc(this.value);'>
            <option disabled="" selected="">Select Status</option>
            @for($i=5; $i<=10; $i++)
              <option value="{{ $i*10 }}" @if(old('battery')==$i*10) selected @endif >{{ $i*10 }} %</option>
            @endfor

            <option value="others">Others</option>
          </select>




        <!-- <input type="text" name="color" id="color" /> -->
        <input class="form-control" type="number" name="" value="" placeholder="Enter Integer Value Ex 52 " id="otherInputField" style='display:none;
         margin-top:17px '>
        @error('battery')
            <p class="text-danger mt-3">{{ $message }}</p>
        @enderror
<!-- 
        <div>
          <input type="hidden" name="" id="device_battery_status" value="{{ $csproduct->device_battery_status }}">
          <select class="form-control battery">
            <option disabled="" selected="">Select Status</option>
            @for($i=5; $i<=10; $i++)
              <option value="{{ $i*10 }}">{{ $i*10 }} %</option>
            @endfor
          </select>

        </div> -->




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
        <div style="height: 20%; width: 100%; background-color: #f3f1f2; color: #4a88c1;
        padding-top: 17px;
        font-weight: 500;
        font-size: 20px;
     "><center>Our Estimate</center></div>
        <div style="height: 70%; width: 100%; ">
        
        <p style="color: black; width: 100%;    padding-top: 17px;
       " >
         <center style="color: black ;font-weight: 500; font-size: 20px;" id="grading"></center>
         <br/>
      <center style="color: #4a88c1 ;font-weight: 500; font-size: 20px;">  <sup>  PKR</sup><font style="font-size: 6vw;margin-left: 5px;" id="estimate_price"> 0</font>  </center>  </p>
        
        <input type="hidden" id="estimated_product_name" value="{{ $csproduct->name }}">
        <input type="hidden" id="estimated_product_color" value="{{ $csproduct->color }}">
        <input type="hidden" id="estimated_product_brand" value="{{ $csproduct->brand_id }}">
        <input type="hidden" id="estimated_phone_price" value="0">
        </div>
        <div style="height: 10%; width: 100%;background-color: #f3f1f2; ">
        
       <center> <a href="#" style="color: white !important;
    text-decoration: none;
"><p style="background-color: #4a88c2;
        width: 66%;
        

        padding: 10px; cursor: pointer;" onclick="ProductEstimateData();">Get your product listed</p></center>

        
        </div>
      </div>



      </div>

    <div style="height: 10%; width: 100%; "></div>
    
    </div>


  </div>

  <script type="text/javascript">
    function ProductEstimateData()
    {
      if($('#minor-on').is(':checked')){ var minor = "yes";} else if($('#minor-off').is(':checked')){ var minor ="no"; }
      if($('#major-on').is(':checked')){ var major = "yes";} else if($('#major-off').is(':checked')){ var major ="no"; }
      if($('#accessory-on').is(':checked')){ var accessory = "yes";} else if($('#accessory-off').is(':checked')){ var accessory ="no"; }
      if($('#screen-on').is(':checked')){ var screen = "yes";} else if($('#screen-off').is(':checked')){ var screen ="no"; }
      if($('#device-on').is(':checked')){ var device = "yes";} else if($('#device-off').is(':checked')){ var device ="no"; }
      var battery = $('.battery option:selected').val();
      var price = $('#estimated_phone_price').val();
      var name = $('#estimated_product_name').val();
      var brand = $('#estimated_product_brand').val();
      var color = $('#estimated_product_color').val();
      $.ajax({
        url:"{{ route('ProductEstimateData') }}",
        type:"get",
        data:{name:name,brand:brand,color:color,minor:minor,major:major,accessory:accessory,screen:screen,device:device,battery:battery,price:price},
        success:function(data){
          window.location=data;
        }
      });
    }

    function estimate_fun()
    {
    
      checingbtn($('#minor-on'),$('#minor-off'),'.minor_error');

       checingbtn($('#major-on'),$('#major-off'),'.major_error');
        checingbtn($('#accessory-on'),$('#accessory-off'),'.acc_error');
         checingbtn($('#screen-on'),$('#screen-off'),'.screen_error');
          checingbtn($('#device-on'),$('#device-off'),'.box_error');
           checingbtnBatt($('.battery'),'.batt_error');
          

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
          $('#estimated_phone_price').val(price - estimate_deduction);
          $('#grading').html(grading);        
        }
      }
    }

    
  $('#otherInputField').keyup(function(){
      var val = $(this).val();
      if(val<50)
      {
        if(!$('.save_btn').hasAttr('disabled'))
        {
          $('.save_btn').attr('disabled','disabled');
        }
      }
      else if(val>50)
      {
        $('.battery').append('<option value="'+val+'" selected >'+ val +' %</option>');
        document.getElementById('otherInputField').style.display='none';
        if($('.save_btn').hasAttr('disabled'))
        {
          $('.save_btn').removeAttr('disabled','');
        }
      }


  });



  function OtherPerc(val){
   var element=document.getElementById('otherInputField');
   if(val=='pick a color'||val=='others')
     element.style.display='block';
   else  
     element.style.display='none';
  }


 


     function checingbtn(id1, id2, err_msg){

  if(id1.is(':checked') || id2.is(':checked'))
   { 
    $(err_msg).css('display', 'none');
    
    } else
    { 
          $(err_msg).css('display', 'block');

     }

     }


       function checingbtnBatt(bat_id , err_msg){

  // if(bat_id.is(':checked') || bat_id.is(':checked'))

  if(bat_id.children("option:selected") && bat_id.children("option:selected").val() !== 'Select Status')
   { 
    $(err_msg).css('display', 'none');
    
    } else
    { 
          $(err_msg).css('display', 'block');

     }

     }
     
  </script>


