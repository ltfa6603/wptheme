
jQuery(document).ready(function() {
 jQuery(window).scroll(function(){
	 if(jQuery(this).scrollTop() >= 50 ){
		 jQuery('.site-header').addClass('scolled');
	 }else{
		jQuery('.site-header').removeClass('scolled'); 
	 };
 });
});



jQuery(document).ready(function(){

  jQuery('#accord > ul > li:has(ul)').addClass("has-sub");

  jQuery('#accord > ul > li > a').click(function() {
    var checkElement = jQuery(this).next();
    
    jQuery('#accord li').removeClass('active');
    jQuery(this).closest('li').addClass('active');	
    
    
    if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
      jQuery(this).closest('li').removeClass('active');
      checkElement.slideUp('normal');
    }
    
    if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
      jQuery('#accord ul ul:visible').slideUp('normal');
      checkElement.slideDown('normal');
    }
    
    if (checkElement.is('ul')) {
      return false;
    } else {
      return true;	
    }		
  });

});

function scroll_down(){
	//var divpos = jjQuery('#welcome_txt').offset().top
jQuery('body,html').animate({scrollTop: jQuery('#welcome_txt').offset().top - 50}, 1000);
}


jQuery(document).ready(function(){
 jQuery('.open_menu').click(function(){
       jQuery(this).css('display','none');
       jQuery('.closed_menu').css('display','block');
       jQuery('.menu_background').css({
       "transform": "translate(0, 0%)",
       "opacity":0.93,
       "width": 100+"%",
       "height": 100+"%",
       
});
       jQuery('.mobmenu').addClass('mobmenuactive');
   
   });
   
   
   
    jQuery('.closed_menu').click(function(){
        jQuery(this).css('display','none');
        jQuery('.open_menu').css('display','block');
       jQuery('.menu_background').css({
       "transform": "translate(0, -100%)",
       "opacity":0,
       "height": 1,
       
});
        
jQuery('.mobmenu').removeClass('mobmenuactive');
        jQuery('.mobmenu .hide_mobnav .sub-menu').slideUp();
        
   });   
}); 


jQuery(document).ready(function(){
    
    jQuery('#back-to-top').css("opacity",0);
    jQuery(window).scroll(function(){
        if(jQuery(this).scrollTop() > 600){
         jQuery('#back-to-top').css("opacity",1);   
        }else{
            jQuery('#back-to-top').css("opacity",0);
        }
        
    });
    
	jQuery('#back-to-top').click(function(){
	 jQuery('html, body').animate({scrollTop:0}, 'slow');
        return false;
		});
});