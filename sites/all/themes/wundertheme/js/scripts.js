;(function($) {

  /* Main navigation */
  Drupal.navigationDropdown = Drupal.navigationDropdown || {};

  Drupal.behaviors.navigationDropdown = {
    attach : function(context) {
      Drupal.navigationDropdown.navigation = $('.primary-navigation');
      Drupal.navigationDropdown.toggle = $('.navigation-toggle');

      Drupal.navigationDropdown.toggle.bind('click', function(e) {  
        // Prevent default link behavior.
        e.preventDefault();
        // Toggle selected class.
        $(this).toggleClass('selected');
        // Add slide effect.
        Drupal.navigationDropdown.navigation.slideToggle();
      });
    }
  };

})(jQuery);