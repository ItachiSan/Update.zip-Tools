jQuery(function(){

	jQuery(".btn-slide").mouseover(function(){
		jQuery("#panel").slideToggle("slow");
		jQuery(this).toggleClass("active"); return false;
	});
	
	 
});
jQuery(document).ready(function(){

	jQuery(".btn-slide2").click(function(){
		jQuery("#panel2").slideToggle("slow");
		jQuery(this).toggleClass("active"); return false;
	});
	
	 
});
jQuery(document).ready(function(){

	jQuery(".btn-slide3").click(function(){
		jQuery("#panel3").slideToggle("slow");
		jQuery(this).toggleClass("active"); return false;
	});
	
	 
});

jQuery(document).ready(function(){

	jQuery(".btn-slide4").click(function(){
		jQuery("#panel4").slideToggle("slow");
		jQuery(this).toggleClass("active"); return false;
	});
	
	 
});
jQuery(document).ready(function(){

	jQuery(".home-post-wrap .delete").click(function(){
	  jQuery(this).parents(".home-post-wrap").animate({ opacity: "hide" }, "slow");
	});

});
jQuery(document).ready(function(){

	jQuery(".home-post-wrap .share").click(function(){
	  jQuery(this).next(".share-div").slideToggle("slow");
		jQuery(this).toggleClass("active"); return false;
	});

});

jQuery(document).ready(function(){

	jQuery(".post-wrapper .share").click(function(){
	  jQuery(this).next("div").slideToggle("slow");
		jQuery(this).toggleClass("active"); return false;
	});

});