$(function(){
/********************************************************
 *
 *  Color Switch Javascript code for Themes Forever
 *  Written by themesforever.com
 *  //// Can be removed in production ////
 *
 *******************************************************/

  /*
   *  Styles CSS
   */
  $('#block-switch').css({
    'background'  : '#FFF',
    'border-right': '1px solid #ccc',
    'left'        : '-180px',
    'position'    : 'fixed',
    'padding'     : '10px',
    'top'         : '20px',
    'width'       : '180px',
    'z-index'     : '1500'
  });

  $('#block-switch').fadeIn('fast');

  $('#block-switch span#gear').css({
    'background'    : '#FFF',
    'border-left'   : '1px solid #eee',
    'border-radius' : '0 5px 5px 0',
    'cursor'        : 'pointer',
    'display'       : 'block',
    'font-size'     : '26px',
    'height'        : '52px',
    'line-height'   : '52px',
    'padding'       : '0',
    'position'      : 'absolute',
    'text-align'    : 'center',
    'top'           : '0',
    'width'         : '52px',
    'right'         : '-52px'
  });

  $('#block-switch #block-color span').css({
    'border-radius' : '16px',
    'cursor'        : 'pointer',
    'display'       : 'block',
    'float'         : 'left',
    'height'        : '32px',
    'margin-right'  : '10px',
    'width'         : '32px'
  });

  $('#block-switch #block-color span.no-margin').css({'margin-right'  : '0' });

  $('#block-color span').each( function() {
    var background = $(this).data('color');
    console.log(background);
    $(this).css({ 'background'  : '#' + background });  
  });

  $('#block-color span').click(function(){
      var id = $(this).attr('id');
      $('#color-switch').attr('href', 'css/colors/enterprise-' + id + '.css');
  });

  var toggle = false;

  $('#gear').click(function(){

    if(toggle)
    {
      $('#block-switch').animate({ left: '-180px'}, 500);
      toggle = false;
    }
    else
    {
      $('#block-switch').animate({ left: 0}, 500);
      toggle = true;
    }

  });

});