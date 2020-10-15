@if($opinions->count())
  @foreach($opinions as $row)
      <div class="row">
        <div   style=" height: 400px;  border: 1px #c4c0c0 solid;   margin-top: 17px;  background-color: #f0f0f0;   border-bottom: 5px #efefef solid; border-bottom: 1px #e3e2db solid;  width: 100%;">
        
          <div style="height: 20%; width: 100%; background-image: linear-gradient(to top right, #e5817a, #f0f0f0); ">
          
            <div  style="  width: 8% ;height: 100%;  float: left; text-align: center;"><p  id="Sresponsive" style="width: 100%;    font-size: 3.2vw;  color: white;   ">{{ strtoupper(substr($row->user->name,0,1)) }}</p> </div>
            <div style="  width: 92% ;height: 100%; background-color: #f0f0f0; float: left;">
            
              <div style="height: 60%; width: 100%;  color: black !important;">
              
                <div id="setSobercatOnMob" style="height: 100%; width: 20%;  float: left; color: black;    font-size: 2vw;    font-weight: 700;">
                  
                  
                  <div class="row">
                    <div class="col-md-8" style="margin-top: 7px;"><h5>{{ $row->user->name }}</h5></div>
                    <div class="col-md-4"><div style="height: 100%; width: 8%;  float: left;">
                    <!-- <img   style="width: 100%; height: auto;" src="{{ asset('storage/images/headerimg/ic_check_circle_black_18dp.png')}}" /> --></div>
                  </div>
                   </div>
                </div>
               
                <div id="settimepnMob" style="height: 100%; width: 35%;  float: right; font-size: 20px;  font-weight: 600;margin-top: 7px;"> 
                  <!-- <img   style="width: 100%; height: auto;" src="{{ asset('storage/images/headerimg/ic_query_builder_black_18dp.png')}}" /> 
                  20 Aug 2020 
                  <img style="width: 10%;"src="{{ asset('storage/images/headerimg/ic_room_black_18dp.png')}}" /> 
                  0Cp  -->
                  <div style="height: 100%; width: 10%; float: left;"><img class="changeClockHeihtOnMob"  style="width: 96%; height: 25px;" src="{{ asset('storage/images/headerimg/ic_query_builder_black_18dp.png')}}" /></div>

                  <div style="height: 100%; width: 60%; float: left;"><p id="aug20onmob" style="width: 100%; font-size: 1.5vw;margin-top: 2px;">{{ date('Y M  d',strtotime($row->created_at)) }}</p></div>

                  <!-- <div style="height: 100%; width: 10%; float: left;text-align: right; ">  <img class="LocOnMob" style="height:19px" src="{{ asset('storage/images/headerimg/ic_room_black_18dp.png')}}" /> </div> -->
                  <!-- <div style="height: 100%; width: 20%; float: left; text-align: left;"><p id="zeroCpOnMobile" style="width: 100%; font-size: 1.4vw;">0Cp</p></div> -->
                </div>
              </div>
            </div>
          </div>
          <div style="height: 70%; width: 100%; background-color: #81c5ec;">
          
            <div style="  width: 8% ;height: 100%;  float: left; text-align: center;background-color: white;">
              
              <!-- <p> <img style="width: 25%; height: auto;" src="{{ asset('storage/images/headerimg/ic_speaker_notes_black_18dp.png')}}"  /> 6</p> -->

            </div>
          
            <div style=" width: 92% ;height: 100%; background-color: #f7f7f7; float: left; overflow-y: scroll;">
            
              <div style="width: 100%;  color: black !important;">
              <p id="LoremResp" style="font-size: 1.1vw;  padding: 33px;  ">{{ $row->comment }}</p>
              </div>

              <div class="row">
                @if($row->replies->count() >0)
                  <h4>Opinion Replies</h4>
                  @foreach($row->replies as $opinion)
                    <div class="col-md-12" style="margin-top: 5px;">
                        <div class="row">
                          <div class="col-md-4">
                            <div  style="width: 20% ;float: left; background-image: linear-gradient(to top right, #e5817a, #f0f0f0);height: 42px;"><p  id="Sresponsive" style="width: 100%;font-size: 2vw;text-align: center;">{{ strtoupper(substr($opinion->user->name,0,1)) }}</p> </div>
                            &nbsp;&nbsp;&nbsp;{{ $opinion->user->name }}
                          </div> <!-- 30% user nae -->
                          <div class="col-md-8">
                              <p id="LoremResp" style="">{{ $opinion->reply }}</p>
                          </div>

                        </div>
                    </div>
                    
                  @endforeach
                @endif
                
              </div>

              <div style="width: 100%; background-color: #ffffff; ">
                <p class="BoldPara" style="    font-size: 1.4vw;
                font-weight: 500;">
                 
                </p>
              </div>
            </div>
          </div>
          <div style="height: 10%; width: 100%; background-color: white;">
          
            <div id="RatingMob" style="height: 100%; width: 30%;  float: left;"> 
          
            <div class="settRatingMob" style="height: 100%; width: 40%;  float: left;">
            <p id="RatingZero" style="width: 100%;font-size: 1.5vw; text-align: center;">Replies {{ $row->replies->count() }}</p> </div>
         
         
            <div style="height: 100%; width: 20%;  float: left;"> </div>
         
            <!-- <div style="height: 100%; width: 40%;  float: left;"> 
            
              <a href="#up" style="text-decoration: none;">  <img  style="width: 26%; height: auto;" src="{{ asset('storage/images/headerimg//ic_keyboard_arrow_up_black_18dp.png')}}" /> </a> | <a href="#down" style="text-decoration: none;">  <img  style="width: 26%; height: auto;" src="{{ asset('storage/images/headerimg/ic_keyboard_arrow_down_black_18dp.png')}}" /> </a>
            
            </div> -->
          
            
            </div>

            <div id="ReplyResp" style="height: 100%; width: 50%; float: left;"> </div>
            <div id="replybtnMobile" style="height: 100%; width: 13%;  float: left;"> <button href="" type="button" class="clickReply" onclick="clickReply('{{ $row->id }}');" data-id="{{ $row->id }}" style="text-decoration: none;    border: none;cursor: pointer;height: 38px;outline: none;"> <p id="replyomgresponsive" style="    font-size: 1.5vw;        "><img style="width: 26%; height: auto;" src="{{ asset('storage/images/headerimg//left-curve-arrow-pngrepo-com.png')}}" /> Reply</p></button> </div>
          
          </div>
      
        </div>

            <div class="row" id="ReplyBox{{ $row->id }}" style="display: none;    margin: 0px auto;margin-top: 20px;width: 80%;">
              <div class="col-md-12" style="background-color: #f0f0f0; border: 1px black solid " >
                  <h5 style="margin-top: 9px;">Post Your Reply</h5>
                  <!-- <div class="row"> 
                    <div class="col-md-6" ><p style="text-align:left">Not Logged In</p></div>
                     <div class="col-md-6" ><p  style="text-align:right"><button>LOGIN</button></p></div>
                  </div> -->
                <hr/>


                <form action="{{ route('OpinionReply') }}" method="post">
                    @csrf
                    <input type="hidden" class="user_id" name="user_id" value="@if(!empty(Session::get('user')->id)) {{Session::get('user')->id}} @endif">
                    <input type="hidden" name="opinion_id" value="{{ $row->id }}">
                    <label>Your nickname (optional)</label><br/>
                    <input type="text" id="uname" name="nick_name" tabindex="101" maxlength="20" autocomplete="off" style="width:100%">

                    <br/>
                    <br/>
                      <!-- <div class="row"> 
                        <div class="col-md-6" ><p style="text-align:left">&nbsp;</p></div>
                         <div class="col-md-6" ><p  style="text-align:right"><button>SignUp</button></p></div>
                      </div> -->

                    <label>Your Reply</label><br/>
                      <textarea name="reply" rows="4" cols="50" style="width:100%; border-color:#dfdfdf "  spellcheck="false"></textarea>
                      <div class="row"> 
                        <div class="col-md-6" ><p style="text-align:left" class="login_status">@if(empty(Session::get('user')->id)) You are not login please login first @endif</p></div>
                         <div class="col-md-6" >
                           
                          <p  style="text-align:right" class="submit_area">
                              @if(!empty(Session::get('user')->id))
                                   <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                              @else
                                  <button type="button" id="sample" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Login</button>
                                 <!--  <a href="/Login" class="btn btn-primary">Sign Up</a> -->
                              @endif
                           
                          </p>
                        </div>
                      </div>
                    </form>         

                </div>

            </div>

      </div>
  @endforeach
  
@else
  no opinion available
@endif