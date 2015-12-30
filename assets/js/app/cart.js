$(function() {
  // http://minicartjs.com/ init
  paypal.minicart.render();
  // Check for reset param
  if (window.location.search.indexOf('success') > -1) {
    paypal.minicart.reset();
  }
  
});
