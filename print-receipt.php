<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html>
  <title>SBIT-3G</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<link rel="shortcut icon" href="Logo 2.svg" type="image/svg+xml">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
  background-color: white;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: skyblue;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D ;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: whitesmoke;
  color: black;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 100px;
  background-color: white;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
#myInput {
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 40%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  background-color: #99ccff;
  margin: 3px auto;
  transform: translate(40%);
  text-align: center;
}
::placeholder{
    color: black;
    font-family: "Sans-Serif";
    text-transform: uppercase;
    
}
.td:nth-child(even) {
     background-color: white;
}
.table-bordered{
     background-color: white;
    
}
.table-responsive{
    max-height: 85vh;
    max-width: 140vh;
   text-align: center;
    background-color: whitesmoke;
}
.table-bordered thead tr{
    position: sticky;
    top: -1px;
}
.button2 {
    background-color: #1a75ff;
    text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border: none;
  padding: 15px 70px;
  bottom: 50%;
    }
.social_media{
  position: absolute;
  
  left: 50%;
  top: 90%;
  height: 50px;
  transform: translateX(-50%);
  display: flex;
}
.person-icon {
  display: flex;
  align-items: center;
  padding: 10px;
  font-size: 20px;
}

.person-icon i {
  margin-right: 10px;
}
select#filter-select {
  padding: 8px 16px;
  font-size: 16px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
  margin-right: 16px;
}
select#filter-select option {
  font-size: 16px;
}
input#myInput {
  padding: 8px 16px;
  font-size: 16px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}
table#table-bordered {
  border-collapse: collapse;
  width: 100%;
  margin-top: 16px;
}

table#table-bordered th, table#table-bordered td {
  border: 1px solid #ddd;
  padding: 8px;
  
}
table#table-bordered th {
  background-color: #1a8cff;
  color: white;
  text-transform: uppercase;
}
button.productinfo {
  padding: 8px 16px;
  font-size: 16px;
  border: none;
  border-radius: 4px;
  background-color: #4CAF50;
  color: white;
}

button.productinfo:hover {
  background-color: #3e8e41;
}
.row{
    display: flex;
    margin-left: 50px;
align-items: center;
}
#filter-select {
 
  margin: 0 auto;
  text-align: center;
}
input[name="qty"] {
        width: 40px;
        height: 25px;
    }
    .cart {
  position: fixed;
  top: 0;
  left: 73%;
  width: 400px;
  height: 100%;
  background-color: #f2f2f2;
  padding: 10px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
  z-index: 1000;
  overflow: auto;
  
}

.cart h1 {
  margin-top: 0;
}

.cart-table {
  width: 100%;
}

.cart-buttons {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
  margin-right: 10px;
  margin-left: 10px;
}
#print {
  background-color: blue;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}
#print:hover {
  background-color: #6666ff;
}

#pay {
  background-color: #4CAF50;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}
#pay:hover {
  background-color: #3e8e41;
}
#clear-cart{
  background-color: #ff4d4d;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}
#clear-cart:hover{
  background-color: red;
}
.payment-methods {
  margin-bottom: 20px;
}

.payment-methods label {
  font-size: 14px;
  margin-right: 10px;
}
.payment-details {
  margin-bottom: 20px;
}

.payment-details label {
  font-size: 14px;
  margin-right: 10px;
}

.payment-details input[type="number"],
.payment-details input[type="text"] {
  width: 100px;
  margin-right: 10px;
  padding: 5px;
  border: 1px solid #ddd;
}

.payment-details input[readonly] {
  background-color: #eee;
  color: #555;
}
.search-bars input[readonly] {
  background-color: #eee;
  color: #555;
  border: 1px solid #ddd;
  width: 100px;
}
.popup {
position: fixed;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
background-color: white;
border: 1px solid black;
padding: 20px;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
}
table {

	margin-bottom: 20px;
}
.modall td{
	padding: 5px;
}
th, td {
	padding: 10px;
	border: 1px solid #ccc;
  border-spacing: 5px;
}
tfoot td {
	font-weight: bold;
  color: red;
}
.quantity-input {
  width: 60px;
}
.search-bar {
  display: flex;
  align-items: center;
}

.search-bar label {
  margin-right: 10px;
  font-weight: bold;
}
.customer input[type="search"] {
 
  border-radius: 5px;
  padding: 5px 10px;

  outline: none;
  
}
.search-bar input[type="search"] {
  border: 2px solid #ccc;
  border-radius: 5px;
  padding: 5px 10px;
  font-size: 16px;
  outline: none;
  width: 150px;
}

.search-bar input[type="search"]:focus {
  border-color: #007bff;
}
label{
  width: 75%;
}
</style>
</head>
<body>
  <div class="sidebar">
    <div class="date-time">
      <?php date_default_timezone_set('Etc/GMT+8');?>
      <p style='font-size: 16px; font-weight: bold; margin-bottom: 0; text-align: center;'><i class="far fa-calendar-alt"></i> <?php echo date('l, F j, Y'); ?></p>
      <p style='font-size: 16px; text-align: center;' id="clock"><?php echo date('h:i:s A'); ?></p>
    </div>
    <div class="person-icon">
      <i class="fa fa-user"></i>
      <?php echo $name;?>
    </div>
    <a href="homee.php"><i class="fa-solid fa-cash-register"></i> Cashier Registry</a>
    <a class="active" href="print-receipt.php">Replace Receipt</a>
    <div class="social_media">          
      <a href="logout.php"><i class="fa fa-sign-out"></i></a>        
    </div>
  </div>


  <div class="row">
  <div class="content">
  <div>
  </div><br>
    <div style="background-color:white; font-family: Calibri(body); width: 145vh;"class="col-md-12">
        <div style="width: 150%;"class="panel-body">
            <?php 
                include "dbconn.php";

                $query = "SELECT * FROM payment";
                $result = mysqli_query($conn,$query);
            ?>
            <div class="table-responsive">
            <table class="table table-bordered dt-tables" id="table-bordered">
              <thead>
                <tr style="background-color: #1a8cff; text-transform: uppercase;">
                  <!-- <th width="60">Photo</th> -->
                  <th>Receipt Number</th>
                  <th>Amount</th>
                  <th>Cash</th>
                  <th>Change</th>
                  <th>Total Amount w/ Discount</th>
                  <th>Customer</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php while($row = mysqli_fetch_assoc($result)){ 
                    $ornum = $row['receipt_or'];
                    $pay_amount = $row['pay_amount'];
                    $payment = $row['payment'];
                    $pay_change = $row['pay_change'];
                    $discount = $row['discount'];
                    $totalWithDiscount = $pay_amount - ($pay_amount * $discount / 100);
                    $totalFormatted = number_format($totalWithDiscount, 2);
                    
                    if(isset($row['guest_name']) && !empty($row['guest_name']))
                    {
                        $cus_name = $row['guest_name'];
                    }
                    else
                    {
                        $cus_name = $row['cus_name'];
                    }
                    $id = $row['pay_id'];
                  ?>
                  <tr class="td">
                    <td><?=$ornum?></td>
                    <td>₱ <?=$pay_amount?></td>
                    <td>₱ <?=$payment?></td>
                    <td>
                      <?=($pay_change>=0)?'<span>₱ '.$pay_change.'</span>':'<span class="badge" style="background:red">₱ '.$pay_change.'</span>'?>
                    </td>
                    <td>₱ <?=$totalFormatted?></td>
                    <td><?=$cus_name?></td>
                    <td>
                        <button data-id="<?=$ornum?>" class="btn btn-success print">
                            <i class="fas fa-print"></i>
                        </button>
                    </td>
                  </tr>
                  <?php } ?>
              </tbody>
            </table>
            <script>
              $(document).ready(function() {
                $("#table-bordered").on("click", ".print", function() {
                  const idid = $(this).data("id");
                  $.ajax({
                    url: "updateReceipt.php",
                    method: "POST",
                    data:
                    {
                      req_type:"print_receipt",
                      idid: idid
                    },
                    success:function(data, textStatus, jqXHR) {
                      var contentType = jqXHR.getResponseHeader('Content-Type');
                      if (contentType.indexOf('application/json') > -1) {
                        const modalForm = $("#myModal");
                        modalForm.find("#totalAmount").val(data['pay_amount']);
                        modalForm.find("#remainingBalance").val((data['pay_change']*-1));
                        modalForm.find("#cashRendered").val(data['payment']);
                        modalForm.find("#pay_id").val(data['pay_id']);
                        modalForm.modal('show');
                      } else {
                        if(data == "success")
                        {
                          const receiptUrl = "receipt.php?rc=" + idid;
                          const printWindow = window.open(receiptUrl, "PrintWindow", "toolbar=no,location=no,menubar=no,status=no,resizable=no,scrollbars=no,width=800,height=600");
                          $(printWindow).on('load', function() {
                            printWindow.print();
                          });
                        }
                      }
                    }
                  });
                });
              });
            </script>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Payment Settlement</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Payment Settlement</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="function.php" method="POST">
              <input type="hidden" name="pay_id" id="pay_id">
              <div class="form-group">
                <label for="totalAmount">Total Amount of Product</label>
                <input name="totalAmount" type="number" class="form-control" id="totalAmount" readonly>
              </div>
              <div class="form-group">
                <label for="cashRendered">Cash Rendered (previous)</label>
                <input name="cashRendered" type="number" class="form-control" id="cashRendered" readonly>
              </div>
              <div class="form-group">
                <label for="remainingBalance">Remaining Balance</label>
                <input name="remainingBalance" type="number" class="form-control" id="remainingBalance" readonly>
              </div>
              <div class="form-group">
                <label for="cash">Cash</label>
                <input name="cash" type="number" class="form-control" id="cash" placeholder="Enter cash amount">
              </div>
              <div class="form-group">
                <label for="change">Change</label>
                <input name="change" type="number" class="form-control" id="change" readonly>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- End Modal -->
</div>
<script>
  $(document).ready(function() {
    $(".dt-tables").DataTable();

    var form = $('form');
    // get the input elements
    var totalAmountInput = $('#totalAmount');
    var cashRenderedInput = $('#cashRendered');
    var remainingBalanceInput = $('#remainingBalance');
    var cashInput = $('#cash');
    var changeInput = $('#change');

    // calculate change and update the change input when the cash input value changes
    cashInput.on('input', function() {
      var totalAmount = parseFloat(totalAmountInput.val());
      var cashRendered = parseFloat(cashRenderedInput.val());
      var cash = parseFloat(cashInput.val());
      var totalCash = cashRendered + cash;
      var change = totalCash - totalAmount;
      changeInput.val(change.toFixed(2));
    });

    // validate the form before submitting
    form.on('submit', function(event) {
      // prevent the default form submission behavior
      event.preventDefault();
      
      // get the input values
      var totalAmount = parseFloat(totalAmountInput.val());
      var remainingBalance = parseFloat(remainingBalanceInput.val());
      var cashRendered = parseFloat(cashRenderedInput.val());
      var cash = parseFloat(cashInput.val());
      var change = parseFloat(changeInput.val());

      cash += cashRendered;
      // validate the input values
      if (isNaN(cash) || cash <= 0) {
        swal('Failed', 'Please enter a valid cash amount.', 'error');
        return;
      }
      if (cash < totalAmount) {
        swal('Failed', 'Cash amount should be greater than or equal to remaining balance.', 'warning');
        return;
      }
      if (change < 0) {
        alert('Change should be greater than or equal to zero.');
        return;
      }
      // perform the form submission
      // alert("all goods")
      form[0].submit();
    });
  });
  
</script>
</body>
</html>
