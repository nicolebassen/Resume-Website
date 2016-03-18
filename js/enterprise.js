$(function(){
/********************************************************
 *
 *  Custom Javascript code for Themes Forever
 *  Written by themesforever.com
 *
 *******************************************************/

  //  Section Experience / Education
  //  ---------------------------------------------------
  //  Collapse div .panel-body
  var resumeCollapse = function (){
    var education = $('#education .collapse');
    var experience = $('#experience .collapse');
    var ww = Math.max($(window).width(), window.innerWidth);

    //  If device is mobile < 768 (smartphones)
    if (ww < 768){
      education.collapse('show');
      experience.collapse('show');
    }
  };
  
  //  For use smartload function is neccesary debouncer.js
  //  Call resumeCollapse() when window is loaded.
  //$(window).smartload(function(){
    //resumeCollapse();
  //});
  
  //  For use smartresize function is neccesary debouncer.js
  //  Call resumeCollapse() when window is resized.
  //$(window).smartresize(function(){
    //resumeCollapse();
  //});

});