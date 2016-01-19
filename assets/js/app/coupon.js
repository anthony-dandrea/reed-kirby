// Set coupon if not set
if (!localStorage.coupon) {
  localStorage.coupon = 0;
}
$(function() {
  // Check to see if there is a coupon enabled item in the cart
  function couponableItemCheck() {
    var cart = paypal.minicart.cart.items();
    return cart.some(function(v, i) {
      if (v._data.coupon_enabled) {
        return true;
      }
    });
  };

  $(document).on('click', '[data-coupon-submit]', function(e) {
    e.preventDefault();
    // Check coupon isn't already used
    if (localStorage.coupon != 0) {
      alert('Only one coupon per order.')
      return;
    }
    if (!couponableItemCheck()) {
      alert('No items in your cart qualify for coupons.');
      return;
    }
    var couponCode = $('[data-coupon]').val();
    $.post('/coupons', {'coupon': couponCode}, function(data) {
      data = JSON.parse(data);
      if (data.success) {
        var amount = parseFloat(data.value);
        $('[name="discount_amount_cart"]').val(amount);
        localStorage.coupon = amount;
        var newTotal = parseFloat($('#cart-total').text()) - amount;
        $('#cart-total').text(newTotal);
        // Update sidebar total
        $(document).trigger('click');
        $('[data-coupon-submit]').addClass('disabled').text('Coupon Already Used');
      } else {
        alert(data.message);
      }
    }).fail(function() {
        alert('Server error, failed to check coupon.');
    });
  });
});

// Make sure enter not pressed while focused on coupon input
$(window).keydown(function(e){
  if(e.keyCode == 13 && $('[data-coupon]').is(':focus')) {
    e.preventDefault();
    return false;
  }
});
