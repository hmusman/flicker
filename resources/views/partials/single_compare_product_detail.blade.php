@php $img = 'storage/admin/images/product/thumbnail/215_'.$product->image @endphp

  <!-- <div style="height: 310px !important; width: 100%;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <p class="mobTitleOnMob" style="    font-size: 22px;
              color: #868585;
              font-weight: bolder;">{{ ucwords($product->name) }}</p>


                 <center> <img id="imgOneMob" src="{{ asset($img) }}" style="height: 200px;" /></center>


          <p style="background-color: #6464e7;
              color: white;
              text-align: center;
              width: 100%;
              margin-top: 11px; ">PKR {{ $product->price }}</p>

        </div>
      </div>
    </div>
  </div> -->
  <div style="height: 310px !important; width: 100%;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <p class="mobTitleOnMob" style="    font-size: 22px;    height: 58px;
              color: #868585;
              font-weight: bolder;">{{ ucwords($product->name) }}</p>


                 <center> <img id="imgOneMob" src="{{ asset($img) }}" style="height: 200px;" /></center>


          <p style="background-color: #4a88c1;
              color: white;
              text-align: center;
              width: 100%;
              margin-top: 11px; ">PKR {{ $product->price }}</p>

        </div>
      </div>
    </div>
  </div>





  <div style="height: 800px;" id="TableFonSizeOnDeskTop">
   <div class="TopheightOnMob" style="height: 0px; width: 100%;"></div>
   <div class="Net1OnMob" style="width: 100%; height: 30px;    font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      border-bottom: 4px #eee solid; 
      height: 45px;
      padding-left: 5px;
      padding-top: 8px; ">GSM / HSPA / LTE
   </div>
   <div class="lanchSpcOn" style="height: 0px; width: 100%;"></div>
   <div class="Lannounced" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      border-bottom: 2px #eeeeee solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 38px;
      ">
      {{ date('Y',strtotime($product->launch_announced)) }},
      {{ date('F',strtotime($product->launch_announced)) }} {{ date('d',strtotime($product->launch_announced)) }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 45px;border-bottom: 5px #eeeeee solid;
      " class="StatusOnMob">
      {{ $product->launch_status }}
   </div>
   <div class="topDisplaySpconmob" style="height: 0px; width: 100%;"></div>
   <div class="DimensionsMob" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 43px;border-bottom: 1px #eeeeee solid;
      " class="StatusOnMob">
      {{ $product->body_dimension }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 42px;border-bottom: 1px #eeeeee solid;
      " class="bodyweight2">
      {{ $product->body_weight }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 42px;border-bottom: 1px #eeeeee solid;
      " class="builWeigt2">
      {{ $product->body_build }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 85px;border-bottom: 5px #eeeeee solid;
      " class="simweight2">
      {{ $product->body_sim }}
   </div>
   <div class="topDisplaySpconmob" style="height: 0px; width: 100%;"></div>
   <div class="DimensionsMob" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 65px;border-bottom: 1px #eeeeee solid;
      " class="StatusOnMob">
      {{ $product->display_type }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 57px;border-bottom: 1px #eeeeee solid;
      " class="DisplayType">
      {{ $product->display_size }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 56px;border-bottom: 1px #eeeeee solid;
      " class="DisplayReslution">
      {{ $product->display_resolution }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 102px;border-bottom: 5px #eeeeee solid;
      " class="ProtecOnMoble">
      {{ $product->display_protection }}
   </div>
   <div class="topPlateformSpconmob" style="height: 0px; width: 100%;"></div>
   <div class="DimensionsMob" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      " class="StatusOnMob">
      {{ $product->platform_os }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      " class="platefrmchips">
      {{ $product->platform_chipset }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 57px;border-bottom: 1px #eeeeee solid;
      " class="PlateuCpu">
      {{ $product->platform_cpu }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 45px;border-bottom: 5px #eeeeee solid;
      " class="chipGpuOnMibi">
      {{ $product->platform_gpu }}
   </div>
   <div class="topMemorSpconmob" style="height: 0px; width: 100%;"></div>
   <div class="DimensionsMob" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      " class="StatusOnMob">
      {{ $product->memory_card_slot }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 45px;border-bottom: 1px #eeeeee solid;border-bottom: 5px #eeeeee solid;
      " class="mem0ryInt">
      {{ $product->memory_storage }} {{ $product->memory_ram }} 
   </div>
   <div class="topMainCameraSpconmob" style="height: 0px; width: 100%;"></div>
   <div class="CameraTripple" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 107px;border-bottom: 1px #eeeeee solid;
      " >
      {{ $product->main_type_value }}
   </div>
   <div class="CameraFeature" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 55px;border-bottom: 1px #eeeeee solid;
      " >
      {{ $product->main_feature }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 75px;border-bottom: 1px #eeeeee solid;border-bottom: 5px #eeeeee solid;
      " class="TrpleVed" >
      {{ $product->main_video }}
   </div>
   <div class="topMainCameraSpconmob" style="height: 0px; width: 100%;"></div>
   <div class="CameraSinleNexxt" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      ">
      {{ $product->selfie_type_value }}
   </div>
   <div class="CameraSingleHdr" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      ">
      {{ $product->selfie_feature }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 65px;border-bottom: 1px #eeeeee solid;border-bottom: 5px #eeeeee solid;
      " class="selfivedo">
      {{ $product->selfie_video }}
   </div>
   <div class="AboveSoundbarSpce" style="height: 0px; width: 100%;"></div>
   <div class="SloudSpkrMob" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 60px;border-bottom: 1px #eeeeee solid;
      ">
      {{ $product->sound_loudspeaker }}
   </div>
   <div class="CameraSingleHdr" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      ">
      {{ $product->sound_jack }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 75px;border-bottom: 1px #eeeeee solid;border-bottom: 5px #eeeeee solid;
      " class="TrpleVed">
      {{ $product->sound_mic }}
   </div>
   <div class="topCommsfirstSpconmob" style="height: 0px; width: 100%;"></div>
   <div class="CommsWlanMob" style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 57px;border-bottom: 1px #eeeeee solid;
      " class="StatusOnMob">
      {{ $product->comms_wlan }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      " class="DisplayType commsblutoo">
      {{ $product->bluetooth }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 53px;border-bottom: 1px #eeeeee solid;
      " class="DisplayReslution">
      {{ $product->comms_gps }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      " class="commRadio">
      {{ $product->comms_nfc }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      " class="commRadioNext">
      
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 44px;border-bottom: 5px #eeeeee solid;
      " class="commRadioNext">
      {{ $product->comms_usb }}
   </div>
   <div class="topFeaturSensoronmob" style="height: 0px; width: 100%;"></div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 97px;border-bottom: 5px #eeeeee solid;
      " class="featreSenso">
      {{ $product->feature_sensor }}
   </div>
   <div class="topFeaturSensoronmob" style="height: 0px; width: 100%;"></div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 42px;border-bottom: 1px #eeeeee solid;
      " class="batteryTalkTime2">
      {{ $product->battery_status }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      " class="DBatteryChargingOne">
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 40px;border-bottom: 1px #eeeeee solid;
      " class="batteryTalkTime2">
      {{ $product->battery_talk_time }}
   </div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 45px;border-bottom: 5px #eeeeee solid;
      " class="batteryMuscMob">
      {{ $product->battery_music }} 
   </div>
   <div class="topFeaturSensoronmob" style="height: 0px; width: 100%;"></div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 41px;border-bottom: 5px #eeeeee solid;
      " class="">
      @if($product->variation_colors->count()>0)
      @php $colorName = ''; $count = $product->variation_colors->count(); $i=1; @endphp
      @foreach($product->variation_colors as $color)
      @php $i++; @endphp
      @if($colorName !=$color->color)
      {{ ucfirst($color->color)}} @if($count>$i) , @endif
      @endif
      @php $colorName = $color->color; @endphp
      @endforeach
      @endif
   </div>
   <div class="topFeaturSensoronmob" style="height: 0px; width: 100%;"></div>
   <div style="    width: 100%;
      font-size: 13px;
      background-color: #fafafa;
      border: 1px #ededed solid;
      padding-top: 8px;
      padding-left: 5px;
      height: 72px;border-bottom: 5px #eeeeee solid;
      " class="pricesotageTextOnMob">
      @if($product->variation_colors->count()>0)
      @php $colorName = ''; $count = $product->variation_colors->count(); $i=1; @endphp
      @foreach($product->variation_colors as $color)
      @php $i++; @endphp
      @if($colorName !=$color->color)
      PKR {{$color->price}} ({{ ucfirst($color->storage)}},{{$product->memory_ram}}) @if($count>$i) , @endif
      @endif
      @php $colorName = $color->color; @endphp
      @endforeach
      @endif
   </div>
</div>



</div>