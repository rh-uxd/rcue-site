jQuery( document ).ready(function() {
  jQuery('.sidebar .menu').affix({
    offset: {
      top: 0,
      bottom: function () {
        return (this.bottom = jQuery('#widget-footer').outerHeight(true)+30)
      }
    }
  });
  jQuery(".pf-example a").click(function( event ) {
    event.preventDefault();
  });
});