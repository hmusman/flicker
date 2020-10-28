(function() {
  var script = document.createElement('script');
  script.src = 'https://www.googletagmanager.com/gtag/js?id=UA-48260255-1';
  document.head.appendChild(script);
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());
  gtag('config', 'UA-48260255-1');
})();











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

     $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });

 
    $('#theCarousel').carousel({
  interval: 2000
})

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
 
  
  
  
 
      function shoediv(){
         
          document.getElementById('myUL').style.display = 'block';

          document.getElementById('imgset').style.marginLeft = '338px';

      }
  
     
  
      function hideagain(){
          document.getElementById('myUL').style.display = 'none';
          document.getElementById('imgset').style.marginLeft = '0px';
      }
  
  
  










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
