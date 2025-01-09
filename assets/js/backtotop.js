(function($) {
  'use strict';
  
  $(document).ready(function() {
    const $backToTop = $('.cd-top');
    const config = window.backtotopConfig || {};
    
    // Default-Werte aus der Konfiguration
    const offset = config.offset || 300;
    const offsetOpacity = config.offsetOpacity || 1200;
    const scrollDuration = config.scrollDuration || 700;
    
    // Check scroll position
    const checkScroll = () => {
      const scrollTop = $(window).scrollTop();
      
      if (scrollTop > offset) {
        $backToTop.addClass('cd-is-visible');
        
        if (scrollTop > offsetOpacity) {
          $backToTop.addClass('cd-fade-out');
        } else {
          $backToTop.removeClass('cd-fade-out');
        }
      } else {
        $backToTop.removeClass('cd-is-visible cd-fade-out');
      }
    };
    
    // Scroll events
    $(window)
      .on('scroll', checkScroll)
      .trigger('scroll'); // Initial check
    
    // Click event
    $backToTop.on('click', function(e) {
      e.preventDefault();
      $('body,html').animate({
        scrollTop: 0
      }, scrollDuration);
    });
  });
})(jQuery);