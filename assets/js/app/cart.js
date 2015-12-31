$(function() {
  // Render custom cart
  var myTemplate = $('#cart-template').text();
  paypal.minicart.render({
    template: myTemplate
  });
  // Check for reset param
  if (window.location.search.indexOf('success') > -1) {
    paypal.minicart.reset();
    localStorage.coupon = 0;
  }
  // Cart click
  $('[data-cart]').on('click', function(e) {
    e.stopPropagation();
    paypal.minicart.view.toggle();
  });
  // Check cart for changes
  function cartIconUpdate() {
    setTimeout(function() {
      // discount is global var for coupon
      var cart = paypal.minicart.cart.subtotal() - localStorage.coupon;
      if (cart<0) {
        cart = 0;
      }
      $('[data-cart-count]').text(cart);
    }, 100);
  }
  $(document).click(cartIconUpdate);
  cartIconUpdate();
});
