<footer style=" background-color: #dcdcdc;">


  <div class="row">
    <div class="col-md-5" style="    padding: 26px 10px 5px 26px !important;">
       <p class="fontUbantu" ><a href="#" style="text-decoration: none;color: #4f4a4b !important; font-weight: bold;"> ABOUT US</a> &nbsp;&nbsp;&nbsp;   <a href="#" style="text-decoration: none;color: #4f4a4b !important;font-weight: bold;"> CONTACT US</a>  &nbsp;&nbsp;&nbsp;      <a href="#" style="text-decoration: none;color: #4f4a4b !important;font-weight: bold;">SUPPORT</a></p>
       
     
     <p class="fontUbantu" style="color:#4f4a4b !important ;font-weight: 600;     font-size: 13px;">
       Online prices and selection generally match the prevailing ones in market, but may vary.<br/>
       Prices are subject to change.&copy; 2020 Flickerfone. All rights reserved.<br/>
       FLICKERFONE.COM and, the FLICKERFONE logo are trademarks of Shallbe Group. 
     </p>
     
     
     
     
  </div>
 
 
  <div class="col-md-1"></div>
 
 
  <div class="col-md-6" style="    padding: 42px 22px 5px 26px !important;" >
   
   
     <p class="fontUbantu" style="color:#4f4a4b !important ; text-transform: uppercase;font-weight: 600;     font-size: 13px;   text-align: right; ">
       We do not flood your inbox, join our social network instead. <a href="#fcb"><img style="    height: 15px; width: 17px;" src="{{ asset('storage/images/headerimg/download-removebg-preview.png') }}" /> </a>   <a href="#twiter"><img style="    height: 20px; width: 20px;" src="{{ asset('storage/images/headerimg/twitter-1722376-1466162-removebg-preview.png') }}"></a><br/>
       
     </p>
 
 
     <p class="fontUbantu" style="color:#4f4a4b !important ; text-transform: uppercase;font-weight: 600;     margin-right: 42px;    font-size: 13px;    text-align: right; ">
      IN SUPPORT OF <font style="    font-size: 33px;color: #c6ccd2;"> &empty;</font> <font style="margin-left: -35px;     "> SPAM </font>CONTRACT 
       
     </p>
   
  </div>
 
 
  </div>
   
</footer>
<script type="text/javascript">
  $(document).ready(function(){
        function fetch_products(query)
        {
          $.ajax({
              url:"{{ route('live_search.action') }}",
              type:"GET",
              data:{query:query},
              dataType:"json",
              success:function(data)
              {
                document.getElementById('myUL').style.display = 'block';
                $('#myUL').html(data.product_data);
              }
          });
        }

        $('#myInput').keyup(function(){
            var query = $(this).val();
            fetch_products(query);
        });
    });
  
</script>
 