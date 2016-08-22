(function($){
  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = $("#navbar").outerHeight();

  function hasScrolled() {
    var st = $(this).scrollTop();

    if (Math.abs(lastScrollTop - st) <= delta) { return; }
    
    // If current position > last position AND scrolled past navbar...
    if (st > lastScrollTop && st > navbarHeight){
      // Scroll Down
      console.log('scrolled down');
      $("#navbar").removeClass("nav-down").addClass("nav-up");
    } else {
      console.log('scrolled up');
      // Scroll Up
      // If did not scroll past the document (possible on mac)...
      if(st + $(window).height() < $(document).height()) { 
        $("#navbar").removeClass("nav-up").addClass("nav-down");
      }
    }

    lastScrollTop = st;
  }


  // on scroll, let the interval function know the user has scrolled
  $(window).scroll(function(event){
    didScroll = true;
  });

  // run hasScrolled() and reset didScroll status
  setInterval(function() {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 250);


  // SMOOTH SCROLL FUNCTION
  $(function() {
    
    $('a[href*="#section"]:not([href="#"])').click(function() {
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

  });

  $('.carousel').carousel({
    interval: false
  });

})(jQuery);

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function menuToggle() {
  var x = document.getElementById("Topnav");
  if (x.className === "topnav") {
      x.className += " responsive";
  } else {
      x.className = "topnav";
  }
} 
