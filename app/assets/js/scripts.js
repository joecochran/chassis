$('.popup').popup();
$('.ui.checkbox').checkbox();
$('#affixed-menu').waypoint('sticky', {offset: 50});
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-50
        }, 1000);
        return false;
      }
    }
  });
});
$('.override_checkbox').on('click', function(){
    var input = $('*[name="'+$(this).data('override')+'"]');
    var fallback = $('*[name="'+$(this).data('default')+'"]');
    if (input.attr('disabled')) {
        input.removeAttr('disabled');
    } else {
        if (input.is('textarea')){
            input.val(fallback.val());
        } else {
            input.val(fallback.val());
        }
        input.attr('disabled', 'disabled');
    }
});
$('.segment-collapse').click(function(event){
    event.preventDefault();
    $(this).find('.icon').toggleClass('hidden');
    $(this).parents('.segment').find('.collapsable').slideToggle();
});

$('.confirm-delete').on('click', function(event){
    event.preventDefault();
    var $deleteform = $(this).parent('form');
    $('.ui.delete.modal').modal('show');
    $('#noDelete').click(function(){
        $('.ui.delete.modal').modal();
    });
    $('#yesDelete').click(function(){
        $deleteform.submit();
    });
});
$('.ui.image.dimmable').dimmer({
    on: 'hover',
    closable: false
});
$('#post-banner .dimmer').on('click', function(event){
    $('#banner').trigger('click');
});
$( "body" ).click(function( event ) {
  console.log( "clicked: " + event.target.nodeName );
});
$('.trumbo').trumbowyg();
