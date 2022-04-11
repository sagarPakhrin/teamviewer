<?php
//
add_action('wp_ajax_nopriv_order_item', "gkopp_order_item");
add_action('wp_ajax_load_order_item', "gkopp_order_item");

function gkopp_order_item() {

  //  if ( !wp_verify_nonce( $_REQUEST['nonce'], "gkopp_order_item")) {
  //     exit("Please try again");
  //  }

   try {
     //code...
   $quantity = $_POST['quantity'];
   $full_name = $_POST['full_name'];
   $address = $_POST['address'];
   $phone_number = $_POST['phone_number'];
   $item = $_POST['item'];

    $to = get_option('admin_email');
    $subject = 'New Order from ' . $full_name;
    $message = "Full Name: " . $full_name . " Quantity: " . $quantity . " Item: " . $item . " Address: " . $address . " Phone Number" . $phone_number;

    wp_mail($to, $subject, $message );

    wp_send_json([
      'data' => [
        'sucess' => true
      ],
    ]);
  } catch(Exception $e) {
      wp_send_json_error($data = $e, $status_code = 400);
   }

}