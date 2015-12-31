// Set coupon if not set
if (!localStorage.coupon) {
  localStorage.coupon = 0;
}
$(function() {
  $(document).on('click', '[data-coupon-submit]', function(e) {
    e.preventDefault();
    // Check coupon isn't already used
    if (localStorage.coupon != 0) {
      alert('Only one coupon per order.')
      return;
    }
    var couponCode = $('[data-coupon]').val();
    $.post('assets/coupons.php', {'coupon': couponCode}, function(data) {
      data = JSON.parse(data);
      console.log('coupon',data);
      if (data.success) {
        $('[name="discount_amount_cart"]').val(data.value);
        localStorage.coupon = data.value;
        var newTotal = parseFloat($('#cart-total').text()) - data.value;
        $('#cart-total').text(newTotal);
        $(document).trigger('click');
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
