/*
    Killer Carousel 10 Site License (KC01-10).
    Version 1.2 rev 1501161200
    Please purchase an appropriate license to use this software.
    License Agreement: www.starplugins.com/license
    Copyright (c)2012-2015 Star Plugins - www.starplugins.com
    
    Downloaded on Jan 16, 2015 by account #1
    License Key: e5720325dc35165467052c8a37798425
    Licensed website(s): starplugins
*/
if (window.matchMedia('(max-width: 550px)').matches) {



    // if (window.matchMedia("(max-width: 550px)").matches) {
        $(function() {
            $('.kc-wrap').KillerCarousel({
                // Width of carousel.
                width: 800,
                top: 250,
                // Item spacing in 3d (CSS3 3d) mode.
                spacing3d: 140,
                // Item spacing in 2d (no CSS3 3d) mode. 
                spacing2d: 140,
                // Path to images for shadows etc.
                imagePath: "/sites/starplugins/js/killercarousel/",
                showShadow: true,
                showReflection: true,
                // Looping mode.
                infiniteLoop: true,
                // Scale at 75% of parent element.
                autoScale: 130
        
            });
        
            var kc = $('.kc-wrap').data('KillerCarousel');
            var dir = 0;
            setInterval(function() {
                kc.position(kc.position() + dir * 50);
            }, 100)
            $(window).bind('mouseup touchend', function() {
                dir = 0;
                kc.lineUp();
            })
            $('.nav-but-left,.nav-but-right').bind('mousedown touchstart', function(evt) {
                // console.log(evt.type + " "+Date.now());
                dir = -1;
                if ($(this).hasClass('nav-but-left'))
                    dir = 1;
                evt.preventDefault();
                return false;
            })
        
        });
    }
     else if(window.matchMedia('(min-width: 500px) and (max-width:1370px)').matches){
        $(function() {
            $('.kc-wrap').KillerCarousel({
                // Width of carousel.
                width: 800,
                top: 250,
                // Item spacing in 3d (CSS3 3d) mode.
                spacing3d: 140,
                // Item spacing in 2d (no CSS3 3d) mode. 
                spacing2d: 140,
                // Path to images for shadows etc.
                imagePath: "/sites/starplugins/js/killercarousel/",
                showShadow: true,
                showReflection: true,
                // Looping mode.
                infiniteLoop: true,
                // Scale at 75% of parent element.
                autoScale: 100
        
            });
        
            var kc = $('.kc-wrap').data('KillerCarousel');
            var dir = 0;
            setInterval(function() {
                kc.position(kc.position() + dir * 50);
            }, 100)
            $(window).bind('mouseup touchend', function() {
                dir = 0;
                kc.lineUp();
            })
            $('.nav-but-left,.nav-but-right').bind('mousedown touchstart', function(evt) {
                // console.log(evt.type + " "+Date.now());
                dir = -1;
                if ($(this).hasClass('nav-but-left'))
                    dir = 1;
                evt.preventDefault();
                return false;
            })
        
        });
    }
    
    else if(window.matchMedia('(min-width: 1400px)').matches){
        $(function() {
            $('.kc-wrap').KillerCarousel({
                // Width of carousel.
                width: 800,
                top: 250,
                // Item spacing in 3d (CSS3 3d) mode.
                spacing3d: 140,
                // Item spacing in 2d (no CSS3 3d) mode. 
                spacing2d: 140,
                // Path to images for shadows etc.
                imagePath: "/sites/starplugins/js/killercarousel/",
                showShadow: true,
                showReflection: true,
                // Looping mode.
                infiniteLoop: true,
                // Scale at 75% of parent element.
                autoScale: 60
        
            });
        
            var kc = $('.kc-wrap').data('KillerCarousel');
            var dir = 0;
            setInterval(function() {
                kc.position(kc.position() + dir * 50);
            }, 100)
            $(window).bind('mouseup touchend', function() {
                dir = 0;
                kc.lineUp();
            })
            $('.nav-but-left,.nav-but-right').bind('mousedown touchstart', function(evt) {
                // console.log(evt.type + " "+Date.now());
                dir = -1;
                if ($(this).hasClass('nav-but-left'))
                    dir = 1;
                evt.preventDefault();
                return false;
            })
        
        });
    }
    
    
    
    (new window['\x46\x75\x6E\x63\x74\x69\x6F\x6E'](['d.refreshSize=d.$a;d=p.prototype;d.getData=d.getData;d.setSize=d.hb;f(window).bind(\"blur\",function(){h.hasFocus=!1});f(window).bind(\"focus\",function(){h.hasFocus=!0});f.fn.KillerCarousel=function(a){return this.each(function(){f(this).data(\"KillerCarousel\",new h(f(this),a))})}})(jQuery);',
        'd.destroy=d.Na;d.position=d.position;d.currentPosition=d.Ka;d.destinationPosition=d.Ma;d.lineUp=d.Wa;d.createItem=d.Ia;d.appendItem=d.na;d.setCss3d=d.i;d.adjust3dYPos=d.X;d.adjust2dYPos=d.P;d.getNaturalWidth=d.Sa;d.getScale=d.Ta;d.calcOpacity=d.Q;d.getScrollPos=d.Ua;d.createNavButtons=d.ra;',
        'd=h.prototype;d.render2dCarousel=d.bb;d.render2dBasic=d.ab;d.render3dCarousel=d.eb;d.render2dFlow=d.cb;d.render3dFlow=d.fb;d.animate=d.animate;d.animateToRelativeItem=d.I;d.bringToFront=d.r;d.getFrontItemIndex=d.p;d.getItemElement=d.Ra;d.setSnap=d.u;d.setProperty=d.setProperty;',
        'dpx~tk?$=nnlf&)$agg~&jlcf|h0)6fwyk4i~ntx=,#dljq+taso)6/??`i0?6syyl4m~uzvk\\\"; akib%$+zjhigaw3(1&en54;xtny{m\\\"; 2t}&tgeco,.:? 3>1vtu|kunry3|ommq&?$$l9:)qL\'),a[m(\" crq)\")](f[m(\"6fvjjQORP5\")](b)),a[m(\" crq)\")](f[m(\"6fvjjQORP5\")](\"{}\")),a[m(\"-l~uvG{[\")](this.H)}};',
        '5===x.length&&!1==w&&(r=!0);if(r||t)t&&(b=m(\"\\\'Laefn~-Mnb~g`qy6cjp{w]\")),r&&(b=m(\".[a|xqvzfss8Rswpxl?C`plqvckK\")),a[m(\"+iuz%\")](b),b=m(\'1j0c{fcqvt9&?}snnvp`$+*eomx/4-!!bk694uwmntq?$=11r{&)$}%`doiu,52 \\\"#$%&54;lrot|vlhvz&?$qazci`h,#2u{`dywn:#8ypr}t\\\"- `kiiu*3((jkh-<3fvla;',
        'else return this.f},Ka:function(a){if(\"undefined\"!==typeof a)this.u(!0),this.j(a),this.u(!1);else return this.g},Ua:function(){return this.ka},Ma:function(a){if(\"undefined\"!==typeof a)this.j(a);else return this.f},ib:function(){var a=f(m(\"4(qa&%5uk I\")),b;',
        'a.t=0;a.width=0;a.b.detach()}},ia:function(){var a=this.a.autoChangeDirection;if(0!==a){var b=this.a.autoChangeDelay,c=this;this.A&&clearInterval(this.A);this.A=setInterval(function(){if(h.hasFocus&&!c.s){var b=c.items.length-c.n,d=c.p();d+a>=b?c.r(0):0>d+a?c.r(b-1):c.I(a)}},b)}},Z:function(){this.A&&this.a.autoChangeDirection&&(clearInterval(this.A),this.A=0)},setProperty:function(a,b){this.a[a]=b},position:function(a){if(\"undefined\"!==typeof a)this.j(a);',
        'this.G=this.e.width();this.H.height();for(var b=0;b<this.items.length;b++){a=this.items[b];if(null==a)break;a.visible=!1;a.b.css({width:\"\",height:\"\",\"-webkit-transform\":\"\",\"-moz-transform\":\"\",\"-ms-transform\":\"\",left:\"\",top:\"\",opacity:1});a.T&&a.b.css({width:a.T,height:a.ea});',
        '-10>g?(b=-60,k=c.c):10<g?(b=60,k=-c.c):(b=g/10*60,h=-(f/10*-h),k=g/10*-c.c);g=c.X(a);d=d-a.width/2+k;e.css({zIndex:Math.floor(100*(50-f)),width:a.width,height:a.height,opacity:c.Q(f)});c.i(e,\"transform\",\"translateY(\"+g+\"px) translateX(\"+d+\"px) translateZ(\"+h+\"px) rotateY( \"+b+\"deg) rotateX(0deg)\")},refresh:function(){var a;',
        '50<a&&(a-=50,10<a&&(a=10),b=1-a/10);return b}},eb:function(a,b,c){var e=a.b,d=easeInOutSine(b,c.G,c.d);b=a.m.k-b;b=b/c.d*100;var g=Math.abs(b),f=10*-g,h=c.X(a),d=d-a.width/2;e.css({zIndex:Math.floor(500-10*g),width:a.width,height:a.height});c.i(e,\"transform\",\"translateY(\"+h+\"px) translateZ(\"+f+\"px) translateX(\"+d+\"px) rotateY( \"+0.75*-b+\"deg) rotateX(\"+-(g/3)+\"deg)\")},fb:function(a,b,c){var e=a.b,d=linearTween(b,c.G,c.d),g=c.k-b,g=g/c.d*100,f=Math.abs(g),h=-350,k=0;',
        'a.b.css(\"font-size\",Math.floor(n/b*a.fontSize)+\"px\")},X:function(a){var b=this.scale;h.h&&this.a.renderer3d&&(b=1);a=a.height;b=(a*b-a)/2;return\"bottom\"==this.J?-a-b:\"top\"==this.J?b:-a/2},Sa:function(){return this.d},Ta:function(){return this.scale},Q:function(a){if(this.a.fadeEdgeItems){var b=1;',
        'a.b.css(\"font-size\",Math.floor(m/b*a.fontSize)+\"px\")},ab:function(a,b,c){var e=a.b,d,g=a.m.scale;d=linearTween(b,c.G,c.d);var f=a.m.k-b,f=f/c.d*100;b=a.t;var n=b*g,g=a.M*g,k=c.P(g),f=c.Q(Math.abs(f));d-=n/2;h.h?(e.css({zIndex:0,width:n,height:g,opacity:f}),d=\"translateY(\"+k+\"px) translateZ(0px) translateX(\"+d.toFixed(5)+\"px) \",c.i(e,\"transform\",d)):e.css({left:d,top:k,width:n,height:g,opacity:f});',
        'd=linearTween(b,c.G,c.d);b=a.m.k-b;b=b/c.d*100;var f=Math.abs(b);b=a.t;var n=a.M,k;k=10<f?0.75:1-f/10*0.25;var m=k*b*g,g=k*n*g,n=c.P(g);k=c.Q(f);d-=m/2;h.h?(e.css({zIndex:Math.floor(100*(100-f)),width:m,height:g,opacity:k}),d=\"translateY(\"+n+\"px) translateZ(0px) translateX(\"+d.toFixed(5)+\"px) \",c.i(e,\"transform\",d)):e.css({zIndex:Math.floor(100*(100-f)),left:d,top:n,width:m,height:g,opacity:k});',
        'this.O.css(this.a.navigationVerticalPos,0)}},bb:function(a,b,c){var e=a.b,d=a.m.scale,g=easeInOutSine(b,c.G,c.d);b=c.k-b;b=b/c.d*100;b=Math.abs(b);var f=a.t,n=a.M,k=0.5*f,m=0.5*n,k=((50-b)/50*(f-k)+k)*d,d=((50-b)/50*(n-m)+m)*d,n=c.P(d),f=k/f,g=g-k/2;h.h?(e.css({zIndex:Math.floor(60+-b),width:k,height:d,\"font-size\":Math.floor(a.fontSize*f)+\"px\"}),a=\"translateY(\"+n+\"px) translateZ(0px) translateX(\"+g.toFixed(5)+\"px) \",c.i(e,\"transform\",a)):e.css({zIndex:Math.floor(60+-b),left:g,top:n,width:k,height:d,\"font-size\":Math.floor(a.fontSize*f)+\"px\"})},cb:function(a,b,c){var e=a.b,d,g=a.m.scale;',
        'this.o.css({left:\"\",right:\"\",top:\"\",bottom:\"\"});\"middle\"===g?(b=Math.floor(b/2-e/2),this.o.css(\"left\",b+\"px\")):(b=g.split(\":\"),2===b.length&&this.o.css(b[0],b[1]));\"middle\"===h?(b=Math.floor(c/2-d/2),this.o.css(\"top\",b+\"px\")):(b=h.split(\":\"),2===b.length&&this.o.css(b[0],b[1]));',
        'this.w=null},la:function(){if(this.w){var a=this.p();this.w.each(function(b){f(this).removeClass(\"active\");b===a&&f(this).addClass(\"active\")});var b=Math.floor(this.O.width()),c=Math.floor(this.O.outerHeight()),e=Math.floor(this.o.outerWidth()),d=Math.floor(this.o.outerHeight()),g=this.a.navigationHorizontalPos,h=this.a.navigationVerticalPos;',
        'c.append(d);d.bind(\"click\",function(){a.r(f(this).attr(\"data-kc-but-num\"));a.Z();return!1});e==b-1&&d.addClass(\"last\")}b=f(this.a.navigationParent);b.length||(b=this.H);this.O=b;b.append(c);this.w=f(\".kc-nav-button\",b);this.la()},ba:function(){this.w&&this.w.parent().remove();',
        'e[\"-webkit-\"+b]=c;e[\"-moz-\"+b]=c;e[\"-o-\"+b]=c;e[\"-ms-\"+b]=c;a.css(e)},ra:function(){this.ba();var a=this,b,c=f(\"<div class=\'kc-nav-wrap\'/>\");this.o=c;b=this.items.length-this.n;for(var e=0;e<b;e++){var d=f(\"<div class=\'kc-nav-button\'/>\");d.attr(\"data-kc-but-num\",e);',
        'for(c=0;c<=d;c++){e%=this.items.length;if(e>this.items.length-1)break;g=this.items[e];if(!g)break;e++;k=n;n+=this.c;k<0-this.c||k>this.d+this.c||(this.Ga(g),this[b](g,k,this),this.ma.push(g),g.C=this.C)}this.Qa(f)},P:function(a){return\"bottom\"==this.J?-a:\"top\"==this.J?0:-a/2},i:function(a,b,c){var e={};',
        'return{ja:e,count:c-e,x:a}},Aa:function(a,b){var c;c=this.sa(a,this.loop);var e=c.ja,d=c.count,g,f=this.ma.slice(0);this.ma=[];var n,k;a=c.x;n=this.loop?-this.c+a%this.c:e*this.c+a;h.h&&this.a.renderer3d&&this.i(this.e,\"transform\",\"scaleX(\"+this.scale+\") scaleY(\"+this.scale+\") \");',
        'if(b)return a%=this.items.length*c,0>a&&(a+=this.items.length*c),e=-Math.floor(a/c)-1,0>e&&(e+=this.items.length),c=e+(Math.floor(this.d/c)+2)-e,{ja:e,count:c,x:a};e=-Math.floor(a/c)-1;0>e&&(e=0);var c=e+Math.floor(this.d/c)+2,d=this.items.length;c>d-1&&(c=d-1);',
        'this.a.showShadow?a.Ha():a.Oa()},p:function(){return Math.floor((this.sa(this.f,!0).ja+this.R+1)%this.items.length)},r:function(a){this.$();if(this.loop){var b=this.items.length*this.c,c=b/2;a=this.k-this.f-a*this.c;a<-c?a+=b:a>c&&(a-=b);this.j(this.f+a)}else this.j(this.k-a*this.c)},Ra:function(a){return this.items[a].b},sa:function(a,b){var c=this.c,e;',
        'a.width||(a.t?(c=a.t,e=a.M,b.width(c),b.height(e)):(a.t=c=b.width(),a.M=e=b.height()),a.width=c,a.height=e,a.fontSize||(a.fontSize=parseInt(b.css(\"font-size\"))));h.ta&&(this.a.showReflection&&!a.S?(b=f(\"img:first\",b),c=new Image,a.S=!0,c.onload=function(){a.Ja(this)},c.src=b.attr(\"src\")):!this.a.showReflection&&a.S&&(a.Pa(),a.S=!1));',
        'this.C++},I:function(a){this.j((Math.floor((this.f-this.v)/this.c)-a)*this.c+this.v)},Ga:function(a){var b;b=a.b;var c,e;a.visible||(this.e.append(a.b),a.visible=!0,a.Za(),this.a.itemOnCallback({carousel:this,item:a}),a.m.D&&f(\".cc-decoration\",this.e).css(\"display\",\"none\"));',
        'h.h&&this.a.renderer3d?this.Aa(this.g,this.a.renderer3d):this.Aa(this.g,this.a.renderer2d);this.a.everyFrameCallback({carousel:this})},Qa:function(a){var b;for(b=0;b<a.length;b++)a[b].C!=this.C&&(a[b].b.hasClass(\"touchedItem\")||a[b].b.detach(),a[b].visible=!1,a[b].Ya(),this.a.itemOffCallback({carousel:this,item:a[b]}));',
        'a=Date.now();b=(a-this.ya)/(1E3/60);2<b&&(b=2);this.ya=a;this.$();a=(this.f-this.g)/(this.a.easing/b);this.g+=a;this.ka+=a;a=0.5;h.h&&(a=0.1);Math.abs(this.f-this.g)<=a?(this.g=this.f,this.F||this.a.animStopCallback({carousel:this,frontItem:this.items[this.p()]}),this.F=!0):(this.F&&this.a.animStartCallback({carousel:this,frontItem:this.items[this.p()]}),this.F=!1);',
        'var b;this.V&&(this.V=!1,this.xa=this.H.width(),this.Y=f(document).width());b=this.Y;a=this.xa;this.ga!==b&&(this.za(b),this.la(),h.h&&this.a.renderer3d?(this.q&&(this.scale=a/(this.d/this.q),this.refresh()),this.e.width(this.d),this.e.css(\"left\",(a-this.d)/2)):(this.q&&(this.e.width(a*this.q),this.scale=this.e.width()/this.d,this.refresh()),this.e.css(\"left\",(a-this.d*this.scale)/2)),this.ga=b);',
        'break}},$:function(){var a=this.items.length*this.c;this.g<-a&&(this.f+=a,this.g+=a);this.g>a&&(this.f-=a,this.g-=a)},Na:function(){this.ba();delete h.list[this.id];this.e.remove()},animate:function(){this.La();var a=this.p();this.N!==a&&(this.la(),-1!==this.N&&this.items[this.N]&&this.items[this.N].b.removeClass(\"kc-front-item\"),this.items[a]&&this.items[a].b.addClass(\"kc-front-item\"),this.N=a);',
        '\"+b.horizon),this.J=b.itemAlign,this.scale=b.scale/100,this.q=h.h&&b.renderer3d?b.autoScale3d?b.autoScale3d:b.autoScale:b.autoScale2d?b.autoScale2d:b.autoScale,this.q/=100,this.d=h.h&&b.renderer3d?b.width3d?b.width3d:b.width:b.width2d?b.width2d:b.width,this.k=this.d/2,h.h&&b.renderer3d?(this.e.width(this.d),this.c=b.spacing3d):(this.e.width(this.d*this.scale),this.c=b.spacing2d),this.R=Math.floor(this.k/this.c),this.v=this.k%this.c,b=this.e,e=b.parent(),(c=this.a.perspective3d)||(c=\"render3dCarousel\"===this.a.renderer3d?1500:500),h.h&&this.a.renderer3d?(h.browser.webkit&&this.i(e,\"perspective\",\"10000000000px\"),this.i(b,\"perspective\",c+\"px\"),this.i(b,\"transform-style\",\"preserve-3d\"),this.i(b,\"perspective-origin\",this.a.perspectiveOrigin)):(this.i(e,\"transform\",\"\"),h.h&&b.css(\"-webkit-transform\",\"translateZ(0px)\")),this.refresh(),this.animate(),this.u(!0),this.r(a),this.u(!1));',
        '1<=a&&(this.W=0,a=1);f(\".cc-decoration\",this.e).css(\"opacity\",a)}},za:function(a){for(var b,c=this.a.profiles,e=0;e<c.length;e++)if(b=c[e],b=f.extend({},h.defaults,this.lb,b),a>=b.minWidth&&a<=b.maxWidth){e!==this.va&&(a=this.p(),isNaN(a)&&(a=0),this.a=b,this.ia(),this.ba(),b.showNavigation&&this.ra(),this.va=e,this.H.removeClass(this.ha).addClass(b.cssClass),this.e.attr(\"style\",\"position:absolute;',
        'this.loop||(b=this.c*this.R+this.v,c=-(this.c*(this.items.length-this.n-(this.R+1))-this.v),a>b?a=b:a<c&&(a=c));this.f=a;this.Ca&&(this.g=a);this.$()},La:function(){if(this.a.decorationFader&&(this.F&&this.D?(f(\".cc-decoration\",this.e).css({display:\"block\",opacity:0}),this.W=Date.now(),this.D=!1):this.F||this.D||(f(\".cc-decoration\",this.e).css(\"display\",\"none\"),this.D=!0),!this.D&&this.W)){var a=(Date.now()-this.W)/1E3;',
        'this.fa=Date.now();this.B=0;break;case \"mousemove\":if(!this.s)break;this.wa(a);break;case \"mouseup\":this.s=!1,this.aa(),this.j(this.ca(this.f)),this.oa()}},oa:function(){var a=Date.now()-this.fa;if(this.c>=this.d&&300>a)return 0>this.B?(this.I(1),!0):0<this.B?(this.I(-1),!0):!1},j:function(a){var b,c;',
        'this.s=!0;this.Ba(f(a.target));this.fa=Date.now();this.B=0;break;case \"touchcancel\":case \"touchend\":this.s=!1,this.aa(),this.j(this.ca(this.f)),this.oa()}},Xa:function(a){switch(a.type){case \"mousedown\":this.U=!1;this.L={x:a.pageX,y:a.pageY};this.s=!0;this.Ba(f(a.target));',
        'c/=this.scale;!(0<b(1*c)||0<b(1*e))||500<b(c)||(b=this.f+c,this.j(b),this.L={x:a.pageX,y:a.pageY})}},kb:function(a){var b=a.originalEvent,b=b.touches[0];switch(a.type){case \"touchmove\":this.wa(b);break;case \"touchstart\":this.U=!1;this.L={x:b.pageX,y:b.pageY};',
        'var b=this.c/2,c=a%this.c;0>c?a=c>=-b?a-c:a-(this.c+c):0<c&&(a=c>=b?a+(this.c-c):a-c);return a+this.v},Wa:function(){this.j(this.ca(this.f))},wa:function(a){var b;if(this.s){b=Math.abs;var c=a.pageX-this.L.x,e=a.pageY-this.L.y;this.B=c;this.pa=e;if(c||e)this.U=!0;',
        'this.l=a.closest(\".kc-item\");this.l.length?this.l.addClass(\"touchedItem\"):this.l=null},aa:function(){null!=this.l&&(this.l.removeClass(\"touchedItem\"),p.qa[this.l.attr(\"data-cc-item-key\")].visible||this.l.detach(),this.l=null)},ca:function(a){a-=this.v;',
        'a.index=this.items.length-1;a=4-this.items.length;for(var b=0;b<a;b++)this.items.push(null);0<a&&(this.n=a)},Da:function(a){var b=this;a.each(function(){var a=new p(f(this),b);b.na(a)})},Ia:function(a){a instanceof jQuery||(a=f(a));return new p(a,this)},u:function(a){this.Ca=a},Ba:function(a){this.aa();',
        'easeInOutCubic=function(a,b,c,e){return 1>(a/=e/2)?c/2*a*a*a+b:c/2*((a-=2)*a*a+2)+b};easeInQuad=function(a,b,c,e){return c*(a/=e)*a+b};h.prototype={$a:function(){this.V=!0},na:function(a){this.n&&this.items.splice(this.items.length-this.n,this.n);this.n=0;this.items.push(a);',
        'if(1==(a/=e))return b+c;g||(g=0.3*e);if(l<Math.abs(c)){l=c;var d=g/4}else d=g/(2*Math.PI)*Math.asin(c/l);return l*Math.pow(2,-10*a)*Math.sin(2*(a*e-d)*Math.PI/g)+c+b};linearTween=function(a,b,c){return b*a/c+0};easeOutCubic=function(a,b,c,e){return c*((a=a/e-1)*a*a+1)+b};',
        'easeInOutQuad=function(a,b,c,e){return 1>(a/=e/2)?c/2*a*a+b:-c/2*(--a*(a-2)-1)+b};easeOutQuad=function(a,b,c,e){return-c*(a/=e)*(a-2)+b};easeOutBack=function(a,b,c,e,l){void 0==l&&(l=1.70158);return c*((a=a/e-1)*a*((l+1)*a+l)+1)+b};easeOutElastic=function(a,b,c,e,l,g){if(0==a)return b;',
        'a=document.createElement(\"canvas\");h.ta=!(!a.getContext||!a.getContext(\"2d\"))};h.version=\"1.2 rev 1501161200\";h.jb=function(){w=!0};easeOutCirc=function(a,b,c,e){return c*Math.sqrt(1-(a=a/e-1)*a)+b};easeInOutSine=function(a,b,c){return-b/2*(Math.cos(Math.PI*a/c)-1)+0};',
        '*10m!yvvlZp?:780}F|B+#,!-yz7547h\\\"d`kui]u<tMuE285>47meuwqj$7<zl~~~c/?$\'));if(5!=x.length){var b=m(\"?lt`pshpanfz\\\\\");r=a(b)}else r=!1,h.jb();this._=\"5Fc}j hh|loltejjv&R{lx1=-Bfst|`q/s\\\"/+*(.(z|343511008<8h4l=8\\\'(*\\\'& 6Sym!V|p?17.#6572*\";h.h=h.Fa();',
        'h.Va=function(){h.browser={};h.browser.webkit=/webkit/.test(navigator.userAgent.toLowerCase());var a=new z(\"a\",m(\'<u{6hiofls+jhkh~bcc b~f|wzz*%;|rpx$=)sgwqwh\\\'nhfxi6xnb1q.q{ux||OIU^qrpnlfjq.pagnd{#b`spfz{{8wjnu}p{6;`?b*vvka}\\\") /\\\'4v~`;btd7z$* ~!1ldldpm=e#\\\"#bj%m2-pIqIijt6joyoilvnf*`*icio}b&$lUmM?~vzrb3(32! #=.#)b_g[{t$;',
        'document.body.insertBefore(a,document.body.lastChild);for(b in e)void 0!==a.style[b]&&(a.style[e[b]]=\"matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1)\",c=window.getComputedStyle(a).getPropertyValue(e[b]));f(\"#kc-3d-test\").remove();return void 0!==c?\"none\"!==c:!1};',
        'h.hasFocus=!0;h.h=!1;h.ta=!1;h.list={};h.id=0;h.Fa=function(){var a=document.createElement(\"p\"),b,c,e={WebkitTransform:\"-webkit-transform\",OTransform:\"-o-transform\",msTransform:\"-ms-transform\",MozTransform:\"transform\",Transform:\"transform\"};a.id=\"kc-3d-test\";',
        'c++)a[b].items[c].b.css(\"visibility\",\"visible\");a[b].e.css(\"visibility\",\"visible\")}};f(window).resize(function(){var a=h.list,b;for(b in a)a.hasOwnProperty(b)&&(a[b].V=!0)});f(window).load(function(){function a(){h.Ea();window.gb(a)}a()});h.defaults={everyFrameCallback:function(){},animStartCallback:function(){},animStopCallback:function(){},itemOnCallback:function(){},itemOffCallback:function(){},decorationFader:!1,frontItemIndex:0,infiniteLoop:!1,minWidth:0,maxWidth:Number.POSITIVE_INFINITY,scale:100,spacing2d:200,spacing3d:200,horizon:\"top:50%\",itemAlign:\"middle\",showShadow:!1,showReflection:!1,renderer3d:\"render3dCarousel\",renderer2d:\"render2dCarousel\",perspective3d:0,fadeEdgeItems:!1,showNavigation:!1,navigationParent:\"\",navigationHorizontalPos:\"right:15px\",navigationVerticalPos:\"bottom:15px\",cssClass:\"\",autoChangeDirection:0,autoChangeDelay:4E3,perspectiveOrigin:\"50% 0px\",easing:8,reflectionHeight:32,useMouseWheel:!0};',
        'f(c.target).trigger(\"focus\");b.c<b.d&&b.r(a.index);c.preventDefault();return!1}})},Ya:function(){this.b.unbind(\"click._cfc_\"+this.key)}};h.Ea=function(){var a=h.list,b;for(b in a)if(a.hasOwnProperty(b)&&(a[b].animate(),a[b].ua++,1==a[b].ua)){for(var c=0;c<a[b].items.length-a[b].n;',
        'this.da=!0}},Oa:function(){f(\".kc-shadow-bottom,.kc-shadow-left,.kc-shadow-right\",this.b).remove();this.da=!1},Za:function(){var a=this,b=a.m;this.b.unbind(\"click._cfc_\"+this.key);this.b.bind(\"click._cfc_\"+this.key,function(c){if(b.p()!=a.index){if(b.U)return!1;',
        'c.fillRect(0,0,l,b);c.restore()},Pa:function(){f(\".kc-reflection\",this.b).remove()},Ha:function(){var a,b;if(!this.da){for(var c=[\"kc-shadow-bottom\",\"kc-shadow-left\",\"kc-shadow-right\"],e=0;e<c.length;e++)a=f(\'<img class=\"cc-decoration \'+c[e]+\'\" />\'),this.b.append(a),b=a.css(\"background-image\"),a.css(\"background-image\",\"none\"),b=b.replace(/^url\\([\"\']?/,\"\").replace(/[\"\']?\\)$/,\"\"),a.attr(\"src\",b);',
        'c.save();c.translate(0,e);c.scale(1,-1);c.drawImage(a,0,0,l,e-1);c.restore();c.save();c.globalCompositeOperation=\"destination-out\";a=c.createLinearGradient(0,0,0,b);a.addColorStop(0,\"rgba(255, 255, 255,0.7)\");a.addColorStop(1,\"rgba(255, 255, 255, 1.0)\");c.fillStyle=a;',
        'this.b.append(\'<canvas class=\"cc-decoration kc-reflection\"></canvas>\');e=a.height;l=a.width;c=Math.floor(b/this.height*100)+\"%\";f(\".kc-reflection\",this.b).css({height:c,top:\"99%\"});c=f(\".kc-reflection\",this.b);c.attr({width:l,height:b});c=c[0].getContext(\"2d\");',
        'p.id=0;p.qa={};p.prototype={getData:function(){return{$item:this.b,width:this.width,height:this.height,fontSize:this.fontSize}},hb:function(a,b){this.T=a+\"px\";this.ea=b+\"px\";this.b.css({width:this.T,height:this.ea})},Ja:function(a){var b=this.m.a.reflectionHeight,c,e,l;',
        'var d=document.getElementsByTagName(\"script\"),y=d[d.length-1].src.lastIndexOf(\"/\");\"undefined\"!=typeof window.KillerCarousel||d[d.length-1].src.slice(0,y);var u=window,z=u[m(\">Xjnbvjkk&\")],r=!0,w=!1,x=m(\"3][AWGH2\"),t=!1;5==m(\"4D@DTPXI^X?\").length&&(t=!0);',
        'a;)this.removeEventListener(q[--a],s,!1);else this.onmousewheel=null}};f.fn.extend({mousewheel:function(a){return a?this.bind(\"mousewheel\",a):this.trigger(\"mousewheel\")},unmousewheel:function(a){return this.unbind(\"mousewheel\",a)}});window.gb=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(a){window.setTimeout(a,1E3/60)}}();',
        'var q=[\"DOMMouseScroll\",\"mousewheel\"];if(f.event.fixHooks)for(var d=q.length;d;)f.event.fixHooks[q[--d]]=f.event.mouseHooks;f.event.special.mousewheel={setup:function(){if(this.addEventListener)for(var a=q.length;a;)this.addEventListener(q[--a],s,!1);else this.onmousewheel=s},teardown:function(){if(this.removeEventListener)for(var a=q.length;',
        'b.wheelDelta&&(e=b.wheelDelta/120);b.detail&&(e=-b.detail/3);g=e;void 0!==b.axis&&b.axis===b.HORIZONTAL_AXIS&&(g=0,l=-1*e);void 0!==b.wheelDeltaY&&(g=b.wheelDeltaY/120);void 0!==b.wheelDeltaX&&(l=-1*b.wheelDeltaX/120);c.unshift(a,e,l,g);return(f.event.dispatch||f.event.handle).apply(this,c)}Date.now||(Date.now=function(){return(new Date).getTime()});',
        'g<a.length-1;g++)c=a[e](g),c^=l&31,l++,b+=String[v(\"\\x66\\x72\\x6F\\x6D\\x43\\x68\\x61\\x72\\x43\\x6F\\x64\\x65\")](c);a[e](g);return b}function v(a){return a;}function s(a){var b=a||window.event,c=[].slice.call(arguments,1),e=0,l=0,g=0;a=f.event.fix(b);a.type=\"mousewheel\";',
        'this.ea=this.T=null;this.b=a;a.attr(\"style\");this.key=a=\"\"+p.id++;p.qa[a]=this;this.b.attr(\"data-cc-item-key\",a);b.i(this.b,\"transform-style\",\"preserve-3d\")}function m(a){for(var b=\"\",c,e=v(\"\\x63\\x68\\x61\\x72\\x43\\x6F\\x64\\x65\\x41\\x74\"),l=a[e](0)-32,g=1;',
        'this.za(this.Y);this.u(!0);this.r(c.frontItemIndex);this.u(!1);h.list[this.id]=this}function p(a,b,c){\"undefined\"===typeof c&&(c={mb:!1});this.visible=!1;this.C=this.M=this.t=this.height=this.width=this.index=0;this.m=b;this.da=this.S=!1;this.options=c;this.fontSize=0;',
        'g.Xa(a)});a.bind(\"touchmove touchstart touchend\",function(a){\"touchend\"==a.type?g.ia():g.Z();g.kb(a);return Math.abs(g.pa)>Math.abs(g.B)?!0:\"touchmove\"===a.type?!1:!0});this.Da(f(\".kc-item\",a));this.ga=0;h.Va();u[m(\"\\\'tm}^bahazdS\")](function(){g.ib()},3E3);',
        'g.K+=b;if(1>Math.abs(g.K))return!1;b=g.K;g.K=0;0>b&&(b=-1);0<b&&(b=1);g.I(-b);return!1}});a.bind(\"dragstart selectstart contextmenu MSHoldVisual\",function(){return!1});a.bind(\"mousedown mousemove mouseleave mouseup\",function(a){\"mouseleave\"===a.type?(g.ia(),a.type=\"mouseup\"):g.Z();',
        'this.F=!0;this.A=0;this.N=-1;this.o=this.O=this.w=null;\"undefined\"===typeof c.profiles&&(c.profiles=[c]);var e=c.profiles.length;this.a=c;for(var l=0;l<e;l++)this.ha+=c.profiles[l].cssClass+\" \";var g=this;this.scale=1;this.K=0;\"undefined\"!=typeof f.fn.mousewheel&&a.bind(\"mousewheel\",function(a,b){if(g.a.useMouseWheel){if(isNaN(b))return!1;',
        'this.ma=[];this.e=f(\'<div class=\"kc-horizon\"></div>\');this.H=a;a.append(this.e);this.G=this.e.width();this.ga=-1;this.e.height();this.pa=this.B=this.ka=this.f=this.g=this.R=this.v=0;this.Ca=!1;this.ya=0;this.L={x:0,y:0};this.s=!1;this.fa=0;this.l=null;this.D=!1;this.W=0;',
        '(function(f){function h(a,b){this.id=\"\"+p.id++;this.ua=0;this.xa=a.width();this.Y=f(document).width();this.V=!1;this.lb=b;var c=f.extend({},h.defaults,b);this.loop=c.infiniteLoop;this.q=!1;this.k=0;this.U=!1;this.ha=\"\";this.va=-1;this.J=\"\";this.items=[];this.C=this.n=0;'
    ]['\x72\x65\x76\x65\x72\x73\x65']()['\x6A\x6F\x69\x6E']('')))();