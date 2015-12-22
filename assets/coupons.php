<?php
  // Array of active coupons
  $active_coupons = array(
    "REED666" => 5
  );
  // Only process POST requests.
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form field and remove whitespace.
    $coupon = strip_tags(trim($_POST["coupon"]));
    // Check if post contained coupon
    if (empty($coupon)) {
      http_response_code(200);
      $response = array('success' => false, 'message' => 'Coupon was empty.');
      echo json_encode($response);
      exit;
    }
    // Successful
    if (isset($active_coupons[$coupon])) {
      http_response_code(200);
      $value = $active_coupons[$coupon];
      $response = array('success' => true, 'value' => $value);
      echo json_encode($response);
      exit;
    } else {
      $response = array('success' => false, 'message' => 'Coupon invalid.');
      echo json_encode($response);
      exit;
    }
  } else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    $response = array('success' => false, 'message' => 'An error occurred.');
    echo json_encode($response);
  }
?>
