// http://fancyapps.com/fancybox/
$(function() {
  // Check to see if linking to an actual image
  function imageCheck (href) {
    var imageTypes = ['.png', '.jpeg', '.jpg', '.gif'];
    return imageTypes.some(function(val, idx) {
      return href.indexOf(val) > -1;
    });
  }
  $('a').each(function(idx, val) {
    // if child image and links to another img
    if ($(this).find('img').length > 0 && imageCheck($(this).attr('href'))) {
      $(this).fancybox();
    }
  });
});
