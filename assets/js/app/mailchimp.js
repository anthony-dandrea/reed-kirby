/*
$(function() {
  $('[data-mailchimp-form]').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
      type: $(this).attr('method'),
      url: $(this).attr('action'),
      data: $(this).serialize(),
      cache: false,
      dataType: 'json',
      contentType: 'application/json; charset=utf-8',
      error: function() {
        alert('There was an error connecting to the server. Please try again later.');
      },
      success: function(data) {
        if (data.result != 'success') {
          alert('There was an error with your submission. Please try again later.');
        } else {
          alert('Success!')
        }
      }
    });
  });
  // Fancy inputs
  // http://tympanus.net/Development/TextInputEffects/index2.html
  $('[data-mailchimp-form] input').on('blur', function() {
    if ($(this).val() !== '') {
      $(this).parent().addClass('input--filled');
    } else {
      $(this).parent().removeClass('input--filled');
    }
  });
});
*/
