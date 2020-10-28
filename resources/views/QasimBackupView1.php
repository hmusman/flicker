      <div id="view1">
              


	            <div class="row"  style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
	              <div class="col-md-2">
	               <font style="font-size: 20px;
	              
	               font-weight: 600; " class="colr"> NETWORK</font>
	              </div>
	              <div class="col-md-2" style="color: black; font-size: 20px" >Technology</div>
	              <div class="col-md-8 TableStyl" style="color: black; font-size: 20px">GSM / SDMA /HSPA / EVDO / LTE</div>
	            </div>



         


	            <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
	              	<div class="col-md-2"><font style="font-size: 24px;font-weight: 600; " class="colr"> LAUNCH</font></div>
	              	<div class="col-md-2" style="color: black; font-size: 20px" >
	              		@if($product->launch_announced !='')
		                	<p  style="border-bottom: 1px #efefef solid;     width: 118%;">Announced</p>
		                @endif
		                @if($product->launch_status !='')
		                	<p style="margin-top: -10px;"> Status</p>
		                @endif
	            	</div>
	              	<div class="col-md-8" style="color: black; font-size: 20px">
	                	@if($product->launch_announced !='')
	                		<p class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ date('Y',strtotime($product->launch_announced)) }},
							{{ date('F',strtotime($product->launch_announced)) }} {{ date('d',strtotime($product->launch_announced)) }} </p>
	                	@endif
	                	@if($product->launch_status !='')
	                 		<p class="TableStyl" style="margin-top: -10px;">{{ $product->launch_status }} </p>
	                 	@endif
	                 </div>
	            </div>





	            <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
	              <div class="col-md-2">
	               <font style="font-size: 24px;
	              
	               font-weight: 600; " class="colr"> BODY</font>
	              </div>
	              <div class="col-md-2" style="color: black; font-size: 20px" >
	                @if($product->body_dimension !='')
	                	<p  style="border-bottom: 1px #efefef solid;      width: 118%;">Dimensions</p>
	                @endif
	                @if($product->body_weight !='')
	                	<p  class="tblrowbottmstl"> Weight</p>
	                @endif
	                @if($product->body_build !='')
	                	<p class="tblrowbottmstl"> Build</p>
	                @endif
	                @if($product->body_sim !='')
	                	<p class="tblrowbottmstl"> SIM</p>
	                @endif

	              </div>
	              <div class="col-md-8" style="color: black; font-size: 20px">
	                @if($product->body_dimension !='')
	                	<p class="TableStyl"style="border-bottom: 1px #efefef solid;">{{ $product->body_dimension }}</p>
	                @endif
	                @if($product->body_weight !='')
	                	<p class="tblrowbottmstl2 TableStyl">{{ $product->body_weight }}</p>
	                @endif
	                 @if($product->body_build!='')
	                	<p class="tblrowbottmstl2 TableStyl">{{ $product->body_build }}</p>
	                @endif
	                 @if($product->body_sim !='')
	                	<p class="tblrowbottmstl2 TableStyl">{{ $product->body_sim }}</p>
	                @endif

	                </div>
                                
                </div>



                <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                  <div class="col-md-2">
                   <font style="font-size: 24px;
                  
                   font-weight: 600; " class="colr"> DISPLAY</font>
                  </div>
                  <div class="col-md-2" style="color: black; font-size: 20px" >
                    	@if($product->display_type !='')
                    		<p  style="border-bottom: 1px #efefef solid;      width: 118%;">Type</p>
                    	@endif
                    	@if($product->display_size !='')
                    		<p class="tblrowbottmstl" >Size</p>
                    	@endif
                    	@if($product->display_resolution !='')
                    		<p class="tblrowbottmstl" >Resolution</p>
                    	@endif
                    	@if($product->display_protection !='')
                    		<p class="tblrowbottmstl" >Protection</p>
                    	@endif
    
    
                  </div>
                  <div class="col-md-8" style="color: black; font-size: 20px">
                    	@if($product->display_type !='')
                    		<p class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ $product->display_type }}</p>
                    	@endif
                    	@if($product->display_size !='')
                    		<p class="tblrowbottmstl2 TableStyl">{{ $product->display_size }}</p>
                    	@endif
                    	@if($product->display_resolution !='')
                    		<p class="tblrowbottmstl2 TableStyl">{{ $product->display_resolution }}</p>
                    	@endif
                     	@if($product->display_protection !='')
                    		<p class="tblrowbottmstl2 TableStyl">{{ $product->display_protection }}</p>
                    	@endif
                    </div>
                   
                    
                    </div>

                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; " class="colr"> PLATEFORM</font>
                      </div>
                      <div class="col-md-2" style="color: black; font-size: 20px" >
                        @if($product->platform_os !='')
                        	<p  style="border-bottom: 1px #efefef solid;      width: 118%;">OS</p>
                        @endif
                        @if($product->platform_chipset !='')
                        	 <p class="tblrowbottmstl">Chipset</p>
                        @endif
                        @if($product->platform_cpu !='')
                        	 <p class="tblrowbottmstl">CPU</p>
                        @endif
                        @if($product->platform_gpu !='')
                        	 <p class="tblrowbottmstl">GPU</p>
                        @endif

        
        
                      </div>
                      	<div class="col-md-8" style="color: black; font-size: 20px">
	                        @if($product->platform_os !='')
	                        	<p class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ $product->platform_os }}</p>
	                        @endif
                        	@if($product->platform_chipset !='')
	                        	<p class="tblrowbottmstl2 TableStyl">{{ $product->platform_chipset }}</p>
	                        @endif
	                        @if($product->platform_cpu !='')
	                        	<p class="tblrowbottmstl2 TableStyl">{{ $product->platform_cpu }}</p>
	                        @endif
	                        @if($product->platform_gpu !='')
	                        	<p class="tblrowbottmstl2 TableStyl">{{ $product->platform_gpu }}</p>
	                        @endif
                       
                        </div>
                        
                        
                        
                        
                    </div>
                        
                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; " class="colr"> MEMORY</font>
                      </div>
                      	<div class="col-md-2" style="color: black; font-size: 20px" >
                        @if($product->memory_card_slot !='')
                        	<p  style="border-bottom: 1px #efefef solid;      width: 118%;">Card Slot</p>
                        @endif
                        @if($product->memory_ram !='')
                        	 <p class="tblrowbottmstl">Ram</p>
                        @endif
                        @if($product->memory_storage !='')
                        	 <p class="tblrowbottmstl">Storage</p>
                        @endif
        
                        </div>
                        <div class="col-md-8" style="color: black; font-size: 20px">
                        
                         	@if($product->memory_card_slot !='')
	                        	<p class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ $product->memory_card_slot }}</p>
	                        @endif
	                        @if($product->memory_ram !='')
	                        	<p class="tblrowbottmstl2 TableStyl">{{ $product->memory_ram }}</p>
	                        @endif
	                        @if($product->memory_storage !='')
	                        	<p class="tblrowbottmstl2 TableStyl">{{ $product->memory_storage }}</p>
	                        @endif
                        
                        </div>
                        
                    </div>
                        
                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; " class="colr"> MAIN CAMERA</font>
                      </div>
                      	<div class="col-md-2" style="color: black; font-size: 20px" >
	                      	@if($product->main_type !='' && $product->main_type_value !='')
	                      		 <p  style="border-bottom: 1px #efefef solid;width: 118%;">{{ ucwords($product->main_type) }}</p>
	                      	@endif
	                      	@if($product->main_feature !='')
	                      		 <p class="tblrowbottmstl">Features</p>
	                      	@endif
	                      	@if($product->main_video !='')
	                      		 <p class="tblrowbottmstl">Video</p>
	                      	@endif
                      	</div>
                      	<div class="col-md-8" style="color: black; font-size: 20px">
                        	@if($product->main_type !='' && $product->main_type_value !='')
                        		<p class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ $product->main_type_value }}</p>
                        	@endif
                        	@if($product->main_feature !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->main_feature }} </p>
                        	@endif
                        	@if($product->main_video !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->main_video }} </p>
                        	@endif
                        </div>
                    </div>
            
                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; " class="colr"> SELFIE CAMERA</font>
                      </div>
                      	<div class="col-md-2" style="color: black; font-size: 20px" >
	                      	@if($product->selfie_type !='' && $product->selfie_type_value !='')
	                      		 <p  style="border-bottom: 1px #efefef solid;width: 118%;">{{ ucwords($product->selfie_type) }}</p>
	                      	@endif
	                      	@if($product->selfie_feature !='')
	                      		 <p class="tblrowbottmstl">Features</p>
	                      	@endif
	                      	@if($product->selfie_video !='')
	                      		 <p class="tblrowbottmstl">Video</p>
	                      	@endif
                      	</div>
                      	<div class="col-md-8" style="color: black; font-size: 20px">
                        	@if($product->selfie_type !='' && $product->selfie_type_value !='')
                        		<p class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ $product->selfie_type_value }}</p>
                        	@endif
                        	@if($product->selfie_feature !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->selfie_feature }} </p>
                        	@endif
                        	@if($product->selfie_video !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->selfie_video }} </p>
                        	@endif
                        </div>
                    </div>

                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; " class="colr"> SOUND</font>
                      </div>
                      	<div class="col-md-2" style="color: black; font-size: 20px" >
	                      	@if($product->sound_loudspeaker !='')
	                      		 <p  style="border-bottom: 1px #efefef solid;width: 118%;">Loudspeaker</p>
	                      	@endif
	                      	@if($product->sound_jack !='')
	                      		 <p class="tblrowbottmstl">3.5 mm Jack</p>
	                      	@endif
	                      	@if($product->sound_mic!='')
	                      		 <p class="tblrowbottmstl">Mic</p>
	                      	@endif
                      	</div>
                      	<div class="col-md-8" style="color: black; font-size: 20px">
                        	@if($product->sound_loudspeaker !='')
                        		<p class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ $product->sound_loudspeaker }}</p>
                        	@endif
                        	@if($product->sound_jack !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->sound_jack }} </p>
                        	@endif
                        	@if($product->sound_mic !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->sound_mic }} </p>
                        	@endif
                        </div>
                    </div>

                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; " class="colr">COMMS</font>
                      </div>
                      	<div class="col-md-2" style="color: black; font-size: 20px" >
	                      	@if($product->comms_wlan !='')
	                      		 <p  style="border-bottom: 1px #efefef solid;width: 118%;">Wlan</p>
	                      	@endif
	                      	@if($product->comms_bluetooth !='')
	                      		 <p class="tblrowbottmstl">Bluetooth</p>
	                      	@endif
	                      	@if($product->comms_gps!='')
	                      		 <p class="tblrowbottmstl">GPS</p>
	                      	@endif
	                      	@if($product->comms_nfc!='')
	                      		 <p class="tblrowbottmstl">NFC</p>
	                      	@endif
                      	</div>
                      	<div class="col-md-8" style="color: black; font-size: 20px">
                        	@if($product->comms_wlan !='')
                        		<p class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ $product->comms_wlan }}</p>
                        	@endif
                        	@if($product->bluetooth !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->bluetooth }} </p>
                        	@endif
                        	@if($product->comms_gps !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->comms_gps }} </p>
                        	@endif
                        	@if($product->comms_nfc !='')
	                      		 <p class="tblrowbottmst2 TableStyl">{{ $product->comms_nfc }}</p>
	                      	@endif
                        </div>

                    </div>

                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; " class="colr">FEATURES</font>
                      </div>
                      	<div class="col-md-2" style="color: black; font-size: 20px" >
	                      	@if($product->feature_sensor !='')
	                      		 <p  style="border-bottom: 1px #efefef solid;width: 118%;">Sensor</p>
	                      	@endif
                      	</div>
                      	<div class="col-md-8" style="color: black; font-size: 20px">
                        	@if($product->feature_sensor !='')
                        		<p class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ $product->feature_sensor }}</p>
                        	@endif
                        </div>

                    </div>

                    <div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; " class="colr">BATTERY</font>
                      </div>
                      	<div class="col-md-2" style="color: black; font-size: 20px" >
	                      	@if($product->battery_status !='')
	                      		 <p  style="border-bottom: 1px #efefef solid;width: 118%;">Status</p>
	                      	@endif
	                      	@if($product->battery_talk_time !='')
	                      		<p class="tblrowbottmstl">Talk Time</p>
	                      	@endif
	                      	@if($product->battery_music!='')
	                      		 <p class="tblrowbottmstl">Music</p>
	                      	@endif
                      	</div>
                      	<div class="col-md-8" style="color: black; font-size: 20px">
                        	@if($product->battery_status !='')
                        		<p  class="TableStyl" style="border-bottom: 1px #efefef solid;">{{ $product->battery_status }}</p>
                        	@endif
                        	@if($product->battery_talk_time !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->battery_talk_time }} </p>
                        	@endif
                        	@if($product->battery_music !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->battery_music }} </p>
                        	@endif
                        </div>

                    </div>
                 	
                 	<div class="row" style="    background-color: #fafafa;   border-bottom: 5px #efefef solid;  ">
                      <div class="col-md-2">
                       <font style="font-size: 24px;
                      
                       font-weight: 600; " class="colr">MISC</font>
                      </div>
                      	<div class="col-md-2" style="color: black; font-size: 20px" >
                      		@if($product->variation_colors->count()>0)
	                      		 <p  style="border-bottom: 1px #efefef solid;width: 118%;">Colors</p>
	                      	@endif
	                      	@if($product->price !='')
	                      		 <p  style="border-bottom: 1px #efefef solid;width: 118%;">Price</p>
	                      	@endif
                      	</div>
                      	<div class="col-md-8" style="color: black; font-size: 20px">
                        	@if($product->variation_colors->count()>0)
                        		@php $colorName = ''; $count = $product->variation_colors->count(); $i=1; @endphp
                        		<p class="TableStyl" style="border-bottom: 1px #efefef solid;">
                        			@foreach($product->variation_colors as $color)
          								  		@php $i++; @endphp
          								  		@if($colorName !=$color->color)
          								  			{{ ucfirst($color->color)}} @if($count>$i) , @endif
          								  		@endif
          										@php $colorName = $color->color; @endphp
          								  	@endforeach

                        		</p>
                        	@endif
                        	@if($product->price !='')
                        		 <p class="tblrowbottmstl2 TableStyl">{{ $product->price }} </p>
                        	@endif
                        	
                        </div>

                    </div>

            </div>
