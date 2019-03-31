jQuery(document).ready(function() {
   // Toggle menu button aria hidden atribute value
  jQuery.fn.toggleAttrVal = function(attr, val1, val2) {
    var test = jQuery(this).attr(attr);
    if ( test === val1) {
      jQuery(this).attr(attr, val2);
      return this;
    }
    if ( test === val2) {
      jQuery(this).attr(attr, val1);
      return this;
    }
    // default to val1 if neither
    jQuery(this).attr(attr, val1);
    return this;
  };

 
	jQuery(".menu-toggle").on("click", function(){
    
    jQuery('.navigation-bar__links').toggleAttrVal('aria-expanded', "true", "false");
    
	});

});