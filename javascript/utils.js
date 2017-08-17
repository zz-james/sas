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



  $("a[uk-slidenav-previous]", ".slider-container").click(function(){$("a[uk-switcher-item='previous']", "#slider").trigger('click')})

  $("a[uk-slidenav-next]", ".slider-container").click(function(){$("a[uk-switcher-item='next']", "#slider").trigger('click')})

  // You can even add some setInteval() scripts to simulate autoplay
  // taskID = setInterval(function(){
  //   $("a[uk-switcher-item='next']", "#slider").trigger('click')
  // }, 10000)


});



