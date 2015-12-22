/*
    WIP, need to handle coupon code inputs and discounting of an item in the cart.
    Will probably need to use product.discount(config)

    Need to create:
    - data-coupon form
    - data-coupon-code text input field
*/

$(function() {
  $('[data-coupon]').on('submit', function(e) {
    e.preventDefault();
    var couponCode = $(this).find('[data-coupon-code]').val();
    $.post('assets/coupons.php', {'coupon': couponCode}, function(data) {
      data = JSON.parse(data);
      if (data.success) {
        // add discount for data.value here
      } else {
        alert(data.message);
      }
    }).fail(function() {
        alert('Server error, failed to check coupon.');
    });
  });
});
