(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-35559033-1', 'auto');
ga('send', 'pageview');

// ga('send', 'event', 'test_category', 'test_actiontype', 'test_event');

// Handle events with data-attrs
$(function() {
  $('[data-ga-event]').on('click', function() {
    var category = $(this).data('ga-category');
    var actionType = $(this).data('ga-action');
    var event = $(this).data('ga-event');
    ga('send', 'event', category, actionType, event);
  });
});
