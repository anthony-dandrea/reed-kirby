$(function() {
  $('[data-menu-btn]').on('click', function(e) {
    e.preventDefault();
    $('[data-menu]').slideToggle();
  })
});
