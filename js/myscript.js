$(function() {		//Loads Jscript when the page is fully loaded and prevent the vars from becoming global vars

  "use strict";		//Tells JScript to be careful when working , good practice to use it

  var topoffset = 50; //variable for menu height
  var slideqty = $('#home .item').length;
  var wheight = $(window).height(); //get the height of the window
  $('.fullheight').css('height', wheight); //set to window tallness 
  
  
  //Load with fade in transition
  
  $(document).ready(function() {
        $("body").css("display", "none");
        $("body").fadeIn(4000);
});


});