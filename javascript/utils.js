var $ = jQuery;

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });


  $('#js_searchbar_home').keyup(function(e){
    if(e.keyCode == 13) {
      // get me to the map page
      window.location = '/local-services/#'+e.currentTarget.value
    }
  })

  $('#js_searchbar_home').focus(function(e){
    e.currentTarget.value = "";
  })


});



