jQuery(function ModalWind() {
  
  jQuery('a[name=modal]').click(function (e) {
    jQuery('div' + jQuery(this).attr('href')).fadeIn(500);
    jQuery('body').append('<div id=\'mask\'></div>');
    jQuery('#mask').show().css({
      'filter': 'alpha(opacity=80)'
    });
    return false;
  });
  
});
jQuery('a.close').click(function () {
    jQuery(this).parent().fadeOut(100);
    jQuery('#mask').remove('#mask');
    return false;
  });


/*Выбор раздела из списка*/
jQuery(function SelforReplace() {
  jQuery('#partselect').change(function() {
    if(jQuery(this).children().eq(0).html())
          jQuery(this).children().eq(0).hide();
    var newtext=jQuery('#partselect option:selected').html();

    var razd=jQuery("#partselect option:selected").val();
       jQuery('#pickarticle input.part').val(razd);
return false;
    });
 });
/*Show*/
jQuery(function Show(event) {jQuery('a.show').click(function (e) {event.StopPropagation;jQuery(this).next().show();return false;}); 
});
/*Editor*/
jQuery(function Editor(event) {jQuery('.leftstend').click(function (event) {
event.StopPropagation;var edit=jQuery(this).children().eq(2).val();var ckeditor1=CKEDITOR.replace(edit);return false;
});
});
