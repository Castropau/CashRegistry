 <?php

  // $guestName = $_POST['guest_name'];
  // $quantity = $_POST['quantity'];
  // $amount = $_POST['amount'];
  $ornum = $_POST['ornum'];
  $cart = $_POST['cart'];
  $paydata = $_POST['pay_data'];

  $servername = "sql985.main-hosting.eu";
  $username = "u839345553_sbit3g";
  $password = "sbit3gQCU";
  $dbname = "u839345553_SBIT3G";

  // $output = "";
  require_once 'dbconn.php';

  $stmt = $conn->prepare("INSERT INTO receipt (`ornum`, `prod_id`, `productname`, `quantity`, `subtotal`) VALUES (?, ?, ?, ?, ?)");
  $updateQty = $conn->prepare("UPDATE product_sale SET qty = qty-? WHERE id=?");
  
  foreach ($cart as $key) {
    $stmt->bind_param("sssss", $ornum, $key['productcode'], $key['name'], $key['qty'], $key['subtotal'], );
    $stmt->execute();
    $updateQty->bind_param("ii", $key['qty'], $key['id']);
    $updateQty->execute();
  }

  $payments = $conn->prepare("INSERT INTO payment (`receipt_or`, `discount`, `payment`, `pay_amount`, `guest_name`, `cus_name`, `pay_change`) VALUES (?, ?, ?, ?, ?, ?, ?)");
  $pdata = [];
  foreach ($paydata as $key) {
    $pdata[] = $key;
  
  }
  //   $payments->bind_param("sssssss", $ornum, $key['discount']0, $key['amount']1, $key['payamount']2, $key['name']3, $key['name']3, $key['paychange']4);
  $payments->bind_param("sssssss", $ornum, $pdata[0], $pdata[1], $pdata[2], $pdata[3], $pdata[4], $pdata[5]);
  $payments->execute();

  echo $ornum;
  $conn->close();
  ?>