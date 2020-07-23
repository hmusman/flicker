<footer>
  <div class="bottom-footer py-md-4 py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3" style="border-right:1px solid #234a2f;height: 160px;">
          <ol id="footerol" style="list-style: none;">
            <li>
              <a href="index.html">
                <img style="     margin-left: -19px;  height: 56px;width: 252px; margin-top: 4px;" src="{{ asset('storage/images/logo-cropped-removebg-preview.png') }} "
                    onClick="location.href='/'" style="top: 0px;left: 0px;" id="logo" />
              </a>
            </li>
            <br>
              <li style="font-size:16px; padding:2px; margin-bottom: 2px">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <a href="tel:+ 1800 429 3553"> 1800 429 3553</a>
                <!-- <span style="padding-left:18px;">6am - 5pm PT Everyday</span> -->
              </li>
              <li style="font-size:16px; padding:2px; margin-bottom: 2px">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <a href="mailto: info@flickerflon.com"> info@flickerflon.com</a>
              </li>
              <li style="font-size:16px; padding:2px; margin-bottom: 2px">
                <i class="fa fa-clock-o " aria-hidden="true"></i> 
                  6am - 5pm PT Everyday

              </li>
            </ol>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3" style="border-right:1px solid #234a2f;height: 160px;">
            <ol style="list-style: none;">
              <li>
                <a href="" class="lia">
                  <h4>Related Products</h4>
                </a>
              </li>
              <li style="padding: 8px; margin-top: 16px;">
                <a href="ProductDetail" class="lia" >Apple iphone x Black</a>
              </li>
              <li style="padding: 8px;">
                <a href="ProductDetail" class="lia">Alcatel jabi Green 4 GB</a>
              </li>
              <li style="padding: 8px;">
                <a href="ProductDetail" class="lia">Apple VIVO Y15 Gold 16 GB</a>
              </li>
              <li style="padding: 8px;">
                <a href="ProductDetail" class="lia">HTC Play 2 Black 4 GB</a>
              </li>
              <!-- <div class="dropdown"><a href="#" class="dropbtn lia">Sitemap Pages</a><div class="dropdown-content"><ul><li><a href="#"><strong>Home</strong></a></li><li><a href="#"><strong>About</strong></a></li><ul><li><a href="#">Login/ Register</a></li><li><a href="#">About Us</a></li><li><a href="#">Contact Us</a></li><li><a href="#">Privacy Policy </a></li></ul><li><a href="#">Advertise With Us </a></li></ul></ul></div></div> -->
            </li>
          </ol>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3"  style="border-right:1px solid #234a2f;" >
          <ol style="list-style: none;">
            <li>
              <a href="https://flickerfone.com/page/about" class="lia">
                <h4>Services</h4>
              </a>
            </li>
            <li style="padding: 8px; margin-top: 16px;">
              <a href="https://flickerfone.com/page/privacy" class="lia" >New Phone</a>
            </li>
            <li style="padding: 8px;">
              <a href="https://flickerfone.com/page/advertise" class="lia">Sell Phone</a>
            </li>
            <li style="padding: 8px;">
              <a href="https://flickerfone.com/page/privacy" class="lia">Buy New</a>
            </li>
            <li style="padding: 8px;">
              <a href="https://flickerfone.com/page/advertise" class="lia">Price Calculator</a>
            </li>
            <!-- <div class="dropdown"><a href="#" class="dropbtn lia">Sitemap Pages</a><div class="dropdown-content"><ul><li><a href="#"><strong>Home</strong></a></li><li><a href="#"><strong>About</strong></a></li><ul><li><a href="#">Login/ Register</a></li><li><a href="#">About Us</a></li><li><a href="#">Contact Us</a></li><li><a href="#">Privacy Policy </a></li></ul><li><a href="#">Advertise With Us </a></li></ul></ul></div></div> -->
          </li>
        </ol>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <ul>
          <li style="margin-bottom:11px;">
            <h4>Connect With Us</h4>
          </li>
          <li>
            <form method="POST" action="https://flickerfone.com/main/send_message">
              <input type="hidden" name="token" value="be0da27be2172cf486c64fb550024f86" />
              <div class="form-group">
                <div class="input-group">
                  <input class="form-control" placeholder="Email Sign up for Special Offers" type="email" name="email">
                    <span class="input-group-btn">
                      <button class="btn subbtn" name="send_email" type="submit">Subscribe</button>
                    </span>
                  </div>
                </div>
              </form>
            </li>
            <li>
              <div class="social-icons">
                <ul style="    margin-top: -55px;">
                  <li>
                    <a href="https://www.facebook.com/Flickerfone-112327993492218/" class="facebook">
                      <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                      <span style="font-size:50px;color:#3D5498"></span>
                    </a>
                  </li>
                  <li>
                    <a href="https://youtube.com" class="youtube">
                      <i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i>
                      <span style="font-size:30px;color:#e60707"></span>
                    </a>
                  </li>
                  <li>
                    <a href="https://instagram.com/flickerfone?igshid=ajkqprd6rem5" class="instagram">
                      <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                      <span style="font-size:30px;color:#C03E46"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
          <p style="font-size: 13px;">We do NOT accept products that have been reported lost or stolen.

            <br/>
            <a href="LearnMore" style="color:#028f63;">Learn More</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

 <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
 <script src="{{ asset('js/bs.js') }}"></script>

 <script type="text/javascript" src="{{ asset('js/jquery.steps.js') }} "></script>

 <script type="text/javascript" src="{{ asset('js/jquery.steps.min.js') }} "></script>
<script type="text/javascript">

    var m = 'main', v = 'index', products = {}, filters = {}, shop_color, shop_grid, sorting;
 //   alert(m);
    console.log(m +'- '+ v);
    var cart = {"total_items":0,"total_unique_items":0,"contents":[],"total_item_tax":"PKR0","subtotal":"PKR0","total":"PKR0","shipping":"PKR0","order_tax":"PKR0","grand_total":"PKR0"};
   var site = {base_url: 'https://flickerfone.com/', site_url: 'https://flickerfone.com/', shop_url: 'https://flickerfone.com/shop/', csrf_token: 'token', csrf_token_value: 'be0da27be2172cf486c64fb550024f86', settings: {display_symbol: '1', symbol: 'PKR  ', decimals: 0, thousands_sep: ',', decimals_sep: '.', order_tax_rate: false, products_page: 0}}


   console.log(site);

    var lang = {};
    lang.page_info = 'Showing page _page_ of _total_';
    lang.cart_empty = 'Empty Cart';
    lang.item = 'Item';
    lang.items = 'Items';
    lang.unique = 'Unique';
    lang.total_items = 'Total Items';
    lang.total_unique_items = 'Total Unique Items';
    lang.tax = 'Tax';
    lang.shipping = 'Shipping';
    lang.total_w_o_tax = 'Total w/o Tax';
    lang.product_tax = 'Product Tax';
    lang.order_tax = 'Order Tax';
    lang.total = 'Total';
    lang.grand_total = 'Grand Total';
    lang.reset_pw = 'Forgot Password?';
    lang.type_email = 'Please type email address to reset the password.';
    lang.submit = 'Submit';
    lang.error = 'Error!';
    lang.add_address = 'Add Address';
    lang.update_address = 'Update Address';
    lang.fill_form = 'Please fill the form below';
    lang.already_have_max_addresses = 'You already have max address. Please edit any of them.';
    lang.send_email_title = 'Send us Email';
    lang.message_sent = 'Your message has been sent.';
</script>

<script type="text/javascript" src="{{ asset('js/Notiser.js') }} "></script>

<script type="text/javascript" src="{{ asset('js/libs.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/scripts.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/jquery.fixedbg.min.js') }} "></script>


<script type="text/javascript">
    </script>
<!-- <script src="index.html"></script> -->
<script type="text/javascript" src="{{ asset('js/owl-carousel/owl.carousel.js') }} "></script>


<script src="{{ asset('js/main.js') }} "></script>
<script src="{{ asset('js/select2.min.js') }} "></script>

<script src="{{ asset('js/common.js') }} "></script>

<script src="{{ asset('js/cloudzoom.js') }} "></script>
<script src="{{ asset('js/thumbelina.js') }} "></script>
<script src="{{ asset('js/jquery.amsify.suggestags.js') }} "></script>







<script type="text/javascript" src="{{ asset('js/slick.min.js') }} "></script>

<script>
    $(document).ready(function(){
      $('.select2').select2({
        width: 'resolve',
        theme: "classic"
    });

      $('.customer-logos').slick({
          slidesToShow: 7,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 1500,
          arrows: false,
          dots: false,
          pauseOnHover: false,
          responsive: [{
              breakpoint: 768,
              settings: {
                  slidesToShow: 4
              }
          }, {
              breakpoint: 520,
              settings: {
                  slidesToShow: 3
              }
          }]
      });
  });
</script>
<script type="text/javascript">
   $(".lazy").slick({
      lazyLoad: 'ondemand', // ondemand progressive anticipated
      infinite: true
    });
</script>
<script type="text/javascript">
        $('#theCarousel').carousel({
      interval: 2000
    });

    $('.multi-item-carousel .item').each(function(){
      var next = $(this).next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));

      if (next.next().length>0) {
        next.next().children(':first-child').clone().appendTo($(this));
      }
      else {
        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
      }
    });


  </script>
  <script type="text/javascript">
    $(document).on('ready', function() {

        $(".regular").slick({
          dots: false,
          infinite: true,
          slidesToShow: 4,
          slidesToScroll: 4,
          autoplay: true,
          autoplaySpeed: 2000,

            pauseOnHover: true,

          responsive: [
          {
              breakpoint: 1024,
              settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
              }
          },
          {
              breakpoint: 600,
              settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
              }
          },
          {
              breakpoint: 480,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
              }
          }

    ]


      });

      var $loading = $('#loading').hide();
                   //Attach the event handler to any element
     $(document)
       .ajaxStart(function () {
          //ajax request went so show the loading image
           $loading.show();
       })
     .ajaxStop(function () {
         //got response so hide the loading image
          $loading.hide();
      });
    });


    var btn = $('#button');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });

    btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop:0}, '300');
    });


    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });


</script>
<script src="../www.google.com/recaptcha/api.js"></script>



<script>
  function myFunction() {
      shoediv();
  
      var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUL");
      li = ul.getElementsByTagName("li");
      for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByTagName("a")[0];
          txtValue = a.textContent || a.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
              li[i].style.display = "";
          } else {
              li[i].style.display = "none";
          }
      }
  
      
  }
</script>
  
  
  
<script>
    function shoediv(){
       
        document.getElementById('myUL').style.display = 'block';

        document.getElementById('imgset').style.marginLeft = '338px';

    }

   

    function hideagain(){
        document.getElementById('myUL').style.display = 'none';
        document.getElementById('imgset').style.marginLeft = '0px';
    }
</script>



