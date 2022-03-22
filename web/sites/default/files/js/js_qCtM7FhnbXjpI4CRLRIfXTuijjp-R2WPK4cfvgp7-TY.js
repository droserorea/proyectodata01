/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.drupalup_barrio = {
    attach: function (context, settings) {


    }
  };

})(jQuery, Drupal);
;
/**
 * @file
 * Custome.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.drupalup_barrio = {
    attach: function (context, settings) {
      $(document)
        .on('mouseover', '.square', function(e) {
          var self = $(this),
            headingContent = self.find('.heading').first().html();
          $('.squareIdent', self.closest('.squares')).html(headingContent);
        })
      ;

    }
  };

})(jQuery, Drupal);
;
