<?php
require_once 'dbconn.php';
$ornum = trim($_GET['rc']);
$getItems = $conn->query("SELECT rc.*, pays.* FROM receipt rc LEFT JOIN payment pays ON rc.ornum=pays.receipt_or WHERE rc.ornum='$ornum';");
require_once 'validate.php';
require 'name.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Receipt</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		.container {
			width: 300px;
			margin: 0 auto;
			border: 1px solid #ccc;
			padding: 10px;
		}
		.header {
			text-align: center;
			margin-bottom: 10px;
		}
		.header h1 {
			margin: 0;
			font-size: 24px;
			font-weight: bold;
			text-transform: uppercase;
		}
		.items {
  display: table;
  width: 100%;
  border-top: 1px solid #ccc;
  margin-top: 10px;
  padding-top: 10px;
}

.items h2 {
  margin-top: 0;
  font-size: 16px;
  font-weight: bold;
  display: table-cell;
  padding-right: 20px;
}

.item {
  display: table-row;
  margin-bottom: 5px;
}

.item > div {
  display: table-cell;
  padding: 5px;
  border-bottom: 1px solid #ccc;
}

.item .name {
  width: 50%;
}

.item .qty,
.item .price {
  text-align: right;
}

.total {
  margin-top: 20px;
  text-align: right;
  font-size: 18px;
  font-weight: bold;
}

.message {
margin-top: 20px;
font-size: 12px;
text-align: center;
color: #777;
}
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>Receipt</h1>
			<p>673 Quirino Highway</p>
			<p>San Bartolome, Novaliches, Quezon City</p>
			<p>09123456789</p>
            <p>Invoice: <?=$ornum?></p>
            <!-- <p>Date: <?=date("F m, Y")?></p> -->
            <p>Date: <?=date("F j, Y")?></p>
		</div>
		<div class="items">
      <h2>Items</h2>
      <h2>Quantity</h2>
      <h2>Subtotal</h2>
      <?php
          
          if($getItems->num_rows > 0)
          {
            while($itms = $getItems->fetch_assoc())
            {
              echo '
              <div class="item">
                <div class="name">'.$itms['productname'].'</div>
                <div class="qty">'.$itms['quantity'].'</div>
                <div class="price">₱'.$itms['subtotal'].'</div>
              </div>
              
              ';
              $discount = $itms['discount'];
              $payment = $itms['payment'];
              $pay_amount = $itms['pay_amount'];
              $guest_name = $itms['guest_name'];
              $cus_name = $itms['cus_name'];
              $pay_change = $itms['pay_change'];
              $productname = $itms['productname'];
              $totalwdiscount = $itms['totalwdiscount'];
              $totalWithDiscount = $pay_amount - ($pay_amount * $discount / 100);
              $totalFormatted = number_format($totalWithDiscount, 2);
            }
            
            echo '
              <div class="subtotal">
                <p>Subtotal: ₱'.$pay_amount.'</p>
              </div>
              
              <div class="tax">
                <p>Tax (12%): ₱'.($pay_amount*(12/100)).'</p>
              </div>
              <div class="total">
                <p>Total: ₱'.$pay_amount.'</p>
              </div>
              <div class="payment">
                <p>Payment: ₱'.$payment.'</p>
              </div>
              <div class="discount">
                <p>Discount: '.$discount.'%</p>
              </div>
              <div class="change">
                <p>Change: ₱'.$pay_change.'</p>
              </div>
              <div class="totalwdiscount">
                <p>Total w/ discount: ₱'.$totalFormatted.'</p>
              </div>
             



            ';
          }
      ?>
      
      <p>Cashier: <?php echo $name;?></p>
	</div>
  <img id="barcode" alt="Barcode" class="barcode">
<div class="preview-id-container"></div>
  <div class="message">
    <p>Thank you!</p>
    <p>Note: If you spend ₱1,500 or more, please go to our customer service counter for assistance with account creation.</p>
  </div>
  <script src="https://cdn.jsdelivr.net/jsbarcode/3.6.0/JsBarcode.all.min.js"></script>
  <script>
  const barcodeImg = document.getElementById("barcode");

  // Generate barcode based on the $ornum variable
  JsBarcode(barcodeImg, "<?php echo $ornum; ?>", {
    format: "code128",
    lineColor: "#000000",
    width: 2,
    height: 60,
    displayValue: false,
    background: null // set background to null for transparent barcode
  });
</script>
</body>
</html>