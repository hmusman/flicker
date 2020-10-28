

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

          // document.getElementById('imgset').style.marginLeft = '338px';

      }
  
     
  
      function hideagain(){
          document.getElementById('myUL').style.display = 'none';
          // document.getElementById('imgset').style.marginLeft = '0px';
      }

  
  