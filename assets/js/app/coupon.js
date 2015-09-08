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
        $.getJSON('assets/data.json', function(data) {
            var coupons = data.coupons,
                amount  = null,
                valid   = false;

            $.each(coupons, function(idx, val) {
                if (idx == couponCode) {
                    valid = true;
                    amount = val;
                    return false; // breaks out of loop
                }
            });

            if(valid) {
                // amount: value to discount
                // Add discount somehow
            } else {
                alert('Coupon is invalid.');
            }

        }).fail(function() {
            alert('Server error, failed to check coupon.');
        });
    });
});
