(function(global, $) {

  var Notiser = function(text) {
    var result = new Notiser.init(text);
    return result;
  };

  // private variables
  var supportedStyles = ['basic', 'warning', 'success','info','danger'];
  var basicAge = 4000;

  Notiser.prototype = {

    validate : function() {
      // if user sets not supported style, setting style to basic
      if(supportedStyles.indexOf(this.style) === -1) {
        this.style = supportedStyles[0];
      }
    },

    // Setting style
    setStyle : function(style) {
      this.style = style;
      this.validate();
      return this;
    },

    // Setting text
    setText : function(text) {
      this.text = text || '';
      return this;
    },

    // Setting time how long notify is showing
    setAge : function(age) {
      this.age = age > 0 ? age : basicAge;
      return this;
    },

    show : function(selector) {
      var self = this;
      if(this.style =="success"){
        var notiserElement = $(document.createElement('div'))
        .addClass('notiser ' + this.style).append("<i class='fa fa-check-circle-o'></i> "+this.text);
      }else if(this.style =="info"){
        var notiserElement = $(document.createElement('div'))
        .addClass('notiser ' + this.style).append("<i class='fa fa-envelope-open-o'></i> "+this.text);
      }else if(this.style =="warning"){
        var notiserElement = $(document.createElement('div'))
        .addClass('notiser ' + this.style).append("<i class=' fa fa-exclamation-circle'></i> "+this.text);
      }else if(this.style =="danger"){
        var notiserElement = $(document.createElement('div'))
        .addClass('notiser ' + this.style).append("<i class=' fa fa-times-circle-o'></i> "+this.text);
      }else{
        var notiserElement = $(document.createElement('div'))
        .addClass('notiser ' + this.style).append(""+this.text);
      }
      
      // adding created div to first in notify list
      notiserElement.prependTo($(selector)).hide().slideDown();

      notiserElement.one('click', function() {
        self.fadeOutAndRemoveElement($(this));
      });

      this.clear(notiserElement)

      return this;
    },

    // clearing notify after timeout
    clear : function(element) {
      setTimeout(this.fadeOutAndRemoveElement, this.age, element);
    },

    // fading out element and removing element from dom
    fadeOutAndRemoveElement : function(element) {
      element.fadeOut(function() {
        this.remove();
      });
    }

  };

  Notiser.init = function(text) {
    this.text = text || '';
    this.style = 'basic';
    this.age = basicAge;
    this.validate();
  };

  Notiser.init.prototype = Notiser.prototype;

  global.notiser = global.$N = Notiser;

})(window, jQuery);
