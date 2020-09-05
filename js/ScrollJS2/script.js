$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});













$(document).ready(function(){ 
    $(window).scroll2(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll2').fadeIn(); 
        } else { 
            $('#scroll2').fadeOut(); 
        } 
    }); 
    $('#scroll2').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});