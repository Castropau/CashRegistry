<!DOCTYPE html>
<?php
require_once 'dbconn.php';
	require_once 'validate.php';
	require 'name.php';


  $orNum = "CLO-".str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);
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
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css" /> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<link rel="shortcut icon" href="Logo 2.svg" type="image/svg+xml">
<!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
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
  font-weight: bold;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D ;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: white;
  color: black;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 100px;
  background-color: white;
}
.col-md-12{
margin-left: 0%;
height: 100%;
width: 1210px;
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
    background-color: whitesmoke;
    
}
.table-responsive{
    max-height: 85vh;
    max-width: 90vh;
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
  border: 1px solid skyblue;
  padding: 8px;
  
}
table#table-bordered th {
  background-color: skyblue;
  color: black;
  text-transform: uppercase;
    text-align: center;

}
button.productinfo {
  padding: 8px 16px;
  font-size: 16px;
  border: none;
  border-radius: 4px;
  background-color: skyblue;
  color: white;
}

button.productinfo:hover {
  background-color: skyblue;
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
  left: 65%;
  width: 510px;
  height: 100%;
  background-color: white;
  padding: 10px;
  box-shadow: 0 5px 10px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
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
.discount input[readonly] {
  background-color: #eee;
  color: #555;
  border: 1px solid #ddd;
  width: 100px;
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
#search-barr {
    width: 200px;
    height: 30px;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
    outline: none;
  }
  
  
  #search-barr:focus {
    border-color: #007bff;
  }
  #searchResults{
    background-color: #cceeff;
    width: 70%;
    cursor: pointer;
  }
  </style>
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
  <a class="active" href="#home"><i class="fa-solid fa-cash-register"></i> Cashier Registry</a>
  <a href="print-receipt.php">Replace Receipt</a>
  <div class="social_media">          
    <a href="logout.php"><i class="fa fa-sign-out"></i></a>        
  </div>
</div>


  <div class="row">
  <div class="content">
  <!-- <div>
    <select id="filter-select">
      <option value="all">All</option>
      <option value="computerparts">Computer Parts</option>
      <option value="clothing">Clothing</option>
      <option value="departmentstore">Department Store</option>
      <option value="hardware">Hardware</option>
      
    </select>
   
  </div> -->
</br></br>
    <div style="background-color: white; font-family: Calibri(body); width: 95vh;"class="col-md-12">
        <div class="panel-body">
            <?php 
                $query = "select * from product_sale";
                $result = mysqli_query($conn,$query);
            ?>
            <div class="table-responsive">
                  
                    <thead>
                        <tr style="background-color: #1a8cff; text-transform: uppercase;">
                            <th width="60">Photo</th>
                            <th>Product Code</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Available</th>
                            <th>Price</th>
                            <th>Info</th>
                            <th><i class="fa-solid fa-cart-shopping"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    while($row = mysqli_fetch_array($result)){ 

                      ?>
                        
                        <tr class="td" data-pid="<?=$row['id']?>" data-pqty="<?=$row['qty']?>">
                            <td><img src="<?php echo $row['photo']; ?>" height="50" width="50"/></td>
                            <td><?php echo $row['productcode']; ?></td>
                            <td><?php echo $row['productname']; ?></td>
                            <td><?php echo $row['category']; ?></td>
                            <td><?php echo $row['qty']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><button data-id='<?php echo $row['id']; ?>' class="productinfo btn btn-success"><i class="fa-sharp fa-solid fa-circle-info"></i></button></td>
                            <td><button class="btn btn-success add-to-cart-btn" data-id="<?php echo $row['id']; ?>"><i class="fa-solid fa-cart-shopping"></i></button></td>
                        </tr>
                        
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="cart">
  <label for="">OR Number: </label>
  <input type="text" name="" id="or-number" value="<?=$orNum?>" readonly>
  <input type="text" id="search2" placeholder="Search Item">
    
  <table class="cart-table">
    <thead>
      <tr>
      <th>ID</th>
        <th>Product</th>
        <th>Category</th>
        <th>Price</th>
        
        <th>Quantity</th>
        <th>Subtotal</th>
        <th>Remove</th>
      </tr>
    </thead>
    <tbody class="tablee">
      
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3"><strong>Total Amount:</strong></td>
        <td colspan="4" id="total-price">₱0.00</td>

      </tr>
    </tfoot>
  </table>
  <div class="payment-details">
    <label for="change">Total Quantity:</label>
    <input type="text" id="totalqty" readonly>
  </div>
  <div class="discount">
  <label for="discount-code">Discount (%):</label>
<input type="number" id="discount-code" min="0" max="100" value="0">
<button id="apply-discount">Apply</button>
</div>
<!-- <div class="payment-methods">
    <label><input type="radio" name="payment-method" value="credit-card">Credit card</label>
    <label><input type="radio" name="payment-method" value="ewallet">E-Wallet</label>
    <label><input type="radio" name="payment-method" value="cash">Cash</label>
  </div> -->
  <!-- <label for="guest-name">Guest Name:</label>
<input type="text" id="guest-name" placeholder="Enter guest name...">
<button id="save-button">Save</button> -->
<div>
<input type="text" id="search1" placeholder="Guest Name" style="display: none;">
  <div id="searchResults"></div>
</div>
<div class="search-bars">
<div class="search-bar">
<label for="search-input">ID</label>
  <input type="text" id="search-input" placeholder="Search...">
  <button id="search-button">Find</button>
</div>
<div class="customer">
  <div class="customer-name">
    <div style="display: inline-block">
      <label for="first-name-search-input">First name</label>
      <input type="search" id="first-name-search-input" name="first-name-search" readonly>
    </div>
    <div style="display: inline-block">
      <label for="last-name-search-input">Last name</label>
      <input type="search" id="last-name-search-input" name="last-name-search" readonly>
    </div>
  </div>
</div>
  <div class="search-bars">
   <!-- <label for="balance-search-input">Balance:</label> 
    <input type="text" id="balance" readonly>
    <button id="apply-balance">Apply</button> -->
  </div>
</div>
  
<div class="payment-details">
  <label for="change">Total Discount:</label>
  <input type="text" id="discounts" readonly><br>
  <label for="payment-amount">Payment amount:</label>
  <input type="number" id="payment-amount" min="0" step="0.01"><br>
  <!-- <label for="payment-date">Payment date:</label>
  <input type="date" id="payment-date"><br> -->
  <label for="change">Change:</label>
  <input type="text" id="change" readonly><br>
  <label for="totalpay">Total payment:</label>
  <input type="text" id="totalpay" name="totalpay" readonly>
</div>
  <div class="cart-buttons">
    <button id="clear-cart">Clear</button>
    <button id="pay">Payment</button>
    <!-- <button id="print">Print</button> -->
  </div>
</div>
<script>
  $("#search2").on("input", function() {
var searchText = $(this).val().toLowerCase();
$(".tablee tr").each(function() {
var rowText = $(this).text().toLowerCase();
if (rowText.indexOf(searchText) === -1) {
$(this).hide();
} else {
$(this).show();
}
});
});
  </script>
<!-- <script>
 
document.getElementById("save-button").addEventListener("click", function() {
  
  var guestName = document.getElementById("guest-name").value;

  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      swal("Guest Name Saved!", "", "success");
    }
  };
  xhttp.open("POST", "save-guest.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("guest_name=" + guestName);
});
</script> -->

<!-- <script>

const searchInput = document.getElementById('search1');
const searchResults = document.getElementById('searchResults');


searchInput.addEventListener('keyup', () => {
  const searchQuery = searchInput.value.trim();
  
  if (searchQuery !== '') {
    
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'sear.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = () => {
      
      searchResults.innerHTML = xhr.responseText;
      
     
      const dropdownItems = searchResults.querySelectorAll('li');
      
     
      dropdownItems.forEach((item) => {
        item.addEventListener('click', () => {
          searchInput.value = item.textContent;
          searchResults.innerHTML = '';
        });
      });
    };
    xhr.send(`query=${searchQuery}`);
  } else {
    
    searchResults.innerHTML = '';
  }
});


document.addEventListener('click', (event) => {
  
  if (!event.target.matches('#search1') && !event.target.closest('#searchResults')) {
    searchResults.innerHTML = '';
  }
});
</script> -->
<!-- <script>
  document.getElementById("search1").addEventListener("keyup", function() {

  var query = this.value;
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "get_names.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("search_results").innerHTML = this.responseText;
    }
  };
  xhr.send("query=" + query);
});
  </script> -->

<script>
 $(document).ready(function() {
   

  $('#search-button').on('click', function() {
    var searchValue = $('#search-input').val();

    if (searchValue.length == 0) {
      swal('Error', 'Please enter a search username or ID.', 'error');
    } else if (searchValue.length >= 3) {
      $.ajax({
        url: 'search.php',
        method: 'POST',
        data: {
          'search': searchValue
        },
        success: function(response) {
        
          var customerData = JSON.parse(response);
          if (customerData.length > 0) {
            var foundMatch = false;
            customerData.forEach(function(customer) {
              if (customer.id.toLowerCase() == searchValue.toLowerCase() ||
                  customer.username.toLowerCase() == searchValue.toLowerCase()) {
                foundMatch = true;
                $('#first-name-search-input').val(customer.firstname);
                $('#last-name-search-input').val(customer.lastname);
              }
            });
            if (!foundMatch) {
              $('#first-name-search-input').val('');
              $('#last-name-search-input').val('');
              swal('Error', 'No customer found.', 'error');
            }
          } else {
            $('#first-name-search-input').val('');
            $('#last-name-search-input').val('');
            swal('Error', 'No customer found.', 'error');
          }
        },
        error: function(error) {
          console.log(error);
        }
      });
    } else {
      $('#first-name-search-input').val('');
      $('#last-name-search-input').val('');
      swal('Error', 'Search must be at least 3 characters long.', 'error');
    }
  });
});
  </script>
<?php




if (isset($_POST['submit'])) {
  
  $username_id = $_POST['username-search'];

 
  $sql = "SELECT * FROM customer WHERE username='$username_id' OR id='$username_id'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    
    while ($row = mysqli_fetch_assoc($result)) {
      $firstname = $row['firstname'];
      $lastname = $row['lastname'];
      echo "<script>
              window.onload = function() {
                document.getElementById('first-name-search-input').value = '$firstname';
                document.getElementById('last-name-search-input').value = '$lastname';
              }
            </script>";
    }
  } else {
   
    echo "<script>
            window.onload = function() {
              swal('Error', 'No customer found with the given username or ID.', 'error');
            }
          </script>";
  }
}
?> 
<script>
 
  var offset = <?php echo date('Z') ?>;
  

  setInterval(function() {
    var date = new Date();
    var localTime = date.getTime();
    var localOffset = date.getTimezoneOffset() * 136500;
    var utcTime = localTime + localOffset;
    var offsetTime = utcTime + (offset * 1000);
    var clockTime = new Date(offsetTime);
    document.getElementById("clock").innerHTML = clockTime.toLocaleTimeString([], {hour: 'numeric', minute: '2-digit', second: '2-digit', hour12: true});
  }, 1000);
</script>
<script>
 document.getElementById("clear-cart").addEventListener("click", function() {
  
  // var quantityInputs = document.getElementsByClassName("quantity-input");
  // for (var i = 0; i < quantityInputs.length; i++) {
  //   quantityInputs[i].value = 0;
  // }
  
  
  // var tableBody = document.querySelector("#cart-table tbody");
  // while (tableBody.firstChild) {
    
  //   location.reload();
  // }
  location.reload();
});
  </script>
<script>
document.getElementById('clear-cart').addEventListener('click', clearCart);

function clearCart() {
  const tbody = document.querySelector('.cart-table tbody');
  while (tbody.firstChild) {
    tbody.removeChild(tbody.firstChild);
  }
  document.getElementById('total-price').textContent = '₱0.00';
  document.getElementById('totalqty').value = '';
  document.getElementById('discount-code').value = '';
  document.getElementById('payment-amount').value = '';
  document.getElementById('change').value = '';
  document.getElementById('search-input').value = '';
  document.getElementById('first-name-search-input').value = '';
  document.getElementById('last-name-search-input').value = '';
  document.getElementById('balance').value = '';
  
  cart = [];
  

  const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
  addToCartButtons.forEach(button => button.disabled = false);

  const inputFields = document.querySelectorAll('input[type="text"]');
  inputFields.forEach(field => field.value = '');

  
  const radioButtons = document.querySelectorAll('input[type="radio"]');
  radioButtons.forEach(button => button.checked = false);
}

  </script>
<script>
  const applyDiscountBtn = document.querySelector("#apply-discount");
  applyDiscountBtn.addEventListener("click", applyDiscount);

  function applyDiscount() {
    const discountInput = document.querySelector("#discount-code");
    const paymentInput = document.querySelector("#payment-amount");
    const changeInput = document.querySelector("#change");
    var allprice = $("#total-price").text();
    allprice = allprice.replace("₱","");

    const discountPercent = discountInput.value;
    const paymentAmount = paymentInput.value;

    if (discountPercent >= 0 && discountPercent <= 100) {

      const discountAmount = allprice * (discountPercent / 100);//discount val
      const finalAmount = allprice - discountAmount;//total- dicount or discountd total
      const dc_amt = finalAmount >= 0 ? finalAmount.toFixed(2) : 0; 

      document.querySelector("#discounts").value = discountAmount.toFixed(2);

      //kapag may payment value
      if(paymentAmount > 0)
      {
        console.log("pay: "+ paymentAmount);
        var changees = paymentAmount-finalAmount;//ilalagay sa change
        if(changees<0)
        {
          changees = 0;
        }
        changeInput.value = "₱ " + changees.toFixed(2);
      }

    } else {
      alert("Please enter a valid discount and payment amount.");
    }
  }

  $("#pay").click(function() {
    console.log("ooops")
    var paymentAmount = Number($("#payment-amount").val());
    var totalPrice = Number($("#total-price").text().replace(/[^0-9.-]+/g,""));

    if (!totalPrice) {
      swal("Invalid", "Your cart is empty.", "error");
      return;
    }

    if (!paymentAmount) {
      swal("Invalid", "Please enter a payment amount.", "error");
      return;
    }

    var guestName = $("#search1").val();
    var usernameOrId = $("#search-input").val();

    // if (!guestName && !usernameOrId) {
    //   swal("Invalid", "Please enter a guest name or username/ID.", "error");
    //   return;
    // }

    // Check if payment has been made
    if (paymentAmount < totalPrice) {
      swal("Invalid", "Payment is not complete.", "error");
      return;
    }

    swal("Success", "Payment successful.", "success");


    const discountPercent = Number($("#discount-code").val());
    const discountAmount = totalPrice * (discountPercent / 100);
    const finalAmount = totalPrice - discountAmount;
    if (paymentAmount < finalAmount) {
      swal("Invalid payment amount", "The payment amount is not enough to cover the total.", "error");
      $("#change").val("₱" + 0); 
    } else if (discountPercent > 0 && finalAmount > 0 && paymentAmount >= finalAmount) {
      const change = calculateChange(paymentAmount, totalPrice, discountPercent);
      $("#change").val("₱" + change);
      swal({
        title: "Payment successful",
        text: "Thank you!",
        icon: "success",
        buttons: {
          print: "Print receipt",
          cancel: "Close",
        },
      })
      .then((value) => {
        if (value == "print") {
          var printContents = $("#receipt").html();
          $("body").html(printContents);
          window.print();
          location.reload();
        } else {
          location.reload();
        }
      });
    } else if (discountPercent === 0 && paymentAmount >= totalPrice) {
      const change = calculateChange(paymentAmount, totalPrice, discountPercent);
      $("#change").val("₱" + change);
      swal({
        title: "Payment successful",
        text: "Thank you!",
        icon: "success",
        buttons: {
          print: "Print receipt",
          cancel: "Close",
        },
      })
      .then((value) => {
        if (value == "print") {
          var printContents = $("#receipt").html();
          $("body").html(printContents);
          window.print();
          location.reload();
        } else {
          location.reload();
        }
      });
    } else {
      $("#change").val("");
      swal("Invalid payment amount", "Please enter a valid payment amount.", "error");
    }
  });

  $("#payment-amount").on("input", function() {
  var paymentAmount = Number($(this).val());
  var totalPrice = Number($("#total-price").text().replace(/[^0-9.-]+/g,""));
  const discountPercent = Number($("#discount-code").val());
  const discountAmount = totalPrice * (discountPercent / 100);
  $("#discounts").val(discountAmount.toFixed(2));
  const finalAmount = totalPrice - discountAmount;
  const totalPayment = finalAmount.toFixed(2);
  $("#totalpay").val("₱" + totalPayment);
  if (!totalPrice || paymentAmount < finalAmount) {
    $("#change").val("₱" + 0); 
  } else {
    var change = calculateChange(paymentAmount, totalPrice, discountPercent);
    $("#change").val("₱" + change);
  }
});

$("#apply-discount").on("click", function() {
  var totalPrice = Number($("#total-price").text().replace(/[^0-9.-]+/g,""));
  const discountPercent = Number($("#discount-code").val());
  const discountAmount = totalPrice * (discountPercent / 100);
  const finalAmount = totalPrice - discountAmount;
  const totalPayment = finalAmount.toFixed(2);
  $("#totalpay").val("₱" + totalPayment);
});

  $("#print").click(function() {
    var totalPrice = Number($("#total-price").text().replace(/[^0-9.-]+/g,""));
    if (!totalPrice) {
      swal("Invalid", "Your cart is empty.", "error");
      return;
    }
    var paymentAmount = Number($("#payment-amount").val());
    if (!paymentAmount) {
      swal("Invalid", "Please enter a payment amount before printing.", "error");
      return;
    }
    const discountPercent = Number($("#discount-code").val());
    const discountAmount = totalPrice * (discountPercent / 100);
    const finalAmount = totalPrice - discountAmount;
    if (paymentAmount < finalAmount) {
      swal("Invalid payment amount", "The payment amount is not enough to cover the total.", "error");
      return;
    }
    var printContents = $(".cart-table").html();

    $("body").html(printContents);
    window.print();
  });

  function calculateChange(paymentAmount, totalPrice, discountPercent) {
    const discountAmount = totalPrice * (discountPercent / 100);
    const finalAmount = totalPrice - discountAmount;
    return (paymentAmount - finalAmount).toFixed(2);
  }
</script>
<script>
$(document).ready(function() {

  var cart = [];
  var rowData=[];
    $("#table-bordered tr").slice(1).each(function() {
      var rowpid = $(this).data("pid");
      var rowQty = $(this).data("pqty");
      var rowObject = {
        id: rowpid,
        qty: rowQty
      };
      rowData.push(rowObject);
    });
   
  $(".add-to-cart-btn").click(function() {
    var product = $(this).data("id");
    var productInCart = false;
    $.each(cart, function(index, item) {
      if (item.id === product) {
        productInCart = true;
        return false;
      }
    });

    if (productInCart) {
     
      swal("Product already added", "This product is already in your basket.", "warning");
    } else {
      var id = $(this).closest("tr").find("td:eq(1)").text();
      var productName = $(this).closest("tr").find("td:eq(2)").text();
      var size = $(this).closest("tr").find("td:eq(3)").text();
      var productQty = $(this).closest("tr").find("input[name=qty]").val();
      var productPrice = $(this).closest("tr").find("td:eq(5)").text();
      var numericPrice = Number(productPrice.replace(/[^0-9.-]+/g,""));
      var subtotal = numericPrice * productQty;
      var item = {
        id: product,
        productcode: id,
        name: productName,
        size: size,
        qty: 0,
        price: numericPrice,
        subtotal: 0
      };
     

    
      cart.push(item);

   
      updateCartTable();
    }
  });

  
  $("#clear-cart").click(function() {
    
    cart = [];

   
    updateCartTable();

 
    $("#payment-amount").val("");
    $("#change").val("");
  });

  // function updateCartTable() {
  // 
  // }


  
  $("#clear-cart").click(function() {
    
    cart = [];

   
    updateCartTable();
  });

  // function updateCartTable() {
  
  // }

  $(".cart-table").on("click", ".remove-product-btn", function() {
    var index = $(this).closest("tr").index();
    cart.splice(index, 1);
    updateCartTable();
  });

  function updateCartTable() {
    
    $(".cart-table tbody").empty();
    var totalQty = 0;
    var totalPrice = 0;

    $.each(cart, function(index, item) {
      var rowHtml = "<tr>";
      rowHtml += "<td>" + item.productcode + "</td>";
      rowHtml += "<td>" + item.name + "</td>";
      rowHtml += "<td>" + item.size + "</td>";
      rowHtml += "<td>" + formatPrice(item.price) + "</td>";
      rowHtml += "<td><input type='number' class='quantity-input' min='1' value='" + item.qty + "' data-index='" + index + "'></td>";
      rowHtml += "<td class='subtotal'>" + formatPrice(item.subtotal) + "</td>";
      rowHtml += "<td><button class='remove-product-btn' data-index='" + index + "'><i class='fa-sharp fa-solid fa-circle-xmark'></i></button></td>";
      rowHtml += "</tr>";

      $(".cart-table tbody").append(rowHtml);

      totalQty += Number(item.qty);
      totalPrice += item.subtotal;
    });

    $("#pay").unbind().on("click", function() {
      
      console.log("taxable amount: " + (totalPrice+(totalPrice*(12/100))));
      var guestName = $("#search1").val();
      // var guestName = $("#guest-name").val();
      var paymentAmount = $("#payment-amount").val();
      const ornum = $("#or-number").val();
      var disc = $("#discount-code").val();
      var pchange = $("#change").val();
      var pamount = $("#total-price").text();
      var totalpay = $("#totalpay").text();
      var firstname = $("#first-name-search-input").val();
      var lastname = $("#last-name-search-input").val();
      disc = disc.replace("₱","");
      totalpay = totalpay.replace("₱","");
      pamount = pamount.replace("₱","");
      pchange = pchange.replace("₱","");
    //   if (!firstname && !lastname && !guestName) {
    //   swal("Invalid", "Please enter a guest name or username/ID.", "error");
    //   return;
    // }
      if (paymentAmount <= 0) {
        swal("Invalid payment amount", "Please enter a valid payment amount.", "error");
        return;
      }
      const dcamount = parseFloat($("#discounts").val());
      let globschange = (dcamount + parseFloat(paymentAmount)) - parseFloat(pamount);
      
      console.log(globschange + "|" + dcamount +"|"+paymentAmount+"|"+pamount)
      if ((disc == 0 || globschange < 0) && totalPrice > paymentAmount) {
        swal("Insufficient payment amount", "Please enter a payment amount that covers the total price.", "error");
        return;
      }
      // alert(guestName)
      // console.log(cart)
      const paymentData = {
        "discount": disc,
        "amount": paymentAmount,
        "payamount": pamount,
        "name": guestName,
        "cus_name": firstname + " " + lastname,
        "paychange": pchange,
        "totalwdiscount": totalpay
      };
      $.ajax({
        url: "save-guest-quantity.php",
        type: "POST",
        data: {
          cart:cart,
          pay_data: paymentData,
          ornum:ornum
        },
        success: function(response) {
          console.log(response);
          clearCart();
          $("#cart").html("Cart is empty");
          // swal("Payment successful!");
          swal({
            title: "Payment successful",
            text: "Thank you!",
            icon: "success",
            buttons: {
              print: "Print receipt",
              cancel: "Close",
            },
          })
          .then((value) => {
            if (value == "print") {
              var printWindow = window.open("receipt.php?rc="+response, "PrintWindow", "toolbar=no,location=no,menubar=no,status=no,resizable=no,scrollbars=no,width=800,height=600");
              printWindow.print();
              location.reload();
            } else {
              location.reload();
            }
          });
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
          swal("Payment failed. Please try again later.");
        }
      });
    });

    function clearCart() {

      cart = [];
      // updateCartCount();
    }
  
    function compareQuantityById(arr1, qty, id) {
      var obj1 = arr1.find(function(el) {
        return el.id === id;
      });
      if(qty > obj1)
      {
        console.log("sobra: " + obj1.qty + ' | ' + qty);
      }
      else{
        console.log("okay: " + obj1.qty + ' | ' + qty);
      }
      // var obj2 = arr2.find(function(el) {
      //   return el.id === id;
      // });
      // if (obj1 && obj2 && obj1.quantity > obj2.quantity) {
      //   console.log("Object " + id + " in array1 has more quantity than in array2.");
      // } else if (obj1 && obj2 && obj1.quantity < obj2.quantity) {
      //   console.log("Object " + id + " in array2 has more quantity than in array1.");
      // } else {
      //   console.log("Object " + id + " not found in one or both arrays.");
      // }
    }
    function findIndexById(arr, id) {
      return arr.findIndex(function(el) {
        return el.id === id;
      });
    }
    $(".quantity-input").on("change", function() {
      var index = $(this).data("index");
      var newQty = $(this).val();

      cart[index].qty = newQty;
      cart[index].subtotal = cart[index].price * newQty;
      const rownum = cart[index].id;
      // console.log(rownum);
      // console.log(rowData);
      
      var foundObject = rowData.find(function(obj) {
        return obj.id === rownum;
      });
      if(cart[index].qty > foundObject.qty)
      {
       
        // $(this).val(1);
        
        swal("Out of stock. Only "+foundObject.qty+" item/s can be bought", "", "warning");
        cart[index].qty = 0;
        cart[index].subtotal = 0;
        updateCartTable();
      }

     
    
      // rowData
      // if(cart[index].qty > =)
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      






      
      console.log(cart[index])
      // console.log(cart)
      updateCartTable();
    });

    $(".remove-product-btn").on("click", function() {
      var index = $(this).data("index");
      var removedItem = cart.splice(index, 1);
      updateCartTable();

      totalQty -= removedItem.qty;
    });

    // $(document).on("change", ".quantity-input", function() {
    //   var quantity = $(this).val();
    //   var price = $(this).closest("tr").find("td:eq(1)").text();
    //   var subtotal = formatPrice(Number(quantity) * parseFloat(price.replace(/[^0-9.-]+/g,"")));
    //   $(this).closest("tr").find(".subtotal").text(subtotal);
    //   calculateTotal();
    //   var total = calculateTotal();
    //   var finalAmount = formatPrice(total);
    //   $('#total-price').text(finalAmount);
    // });

    function calculateTotal() {
      var total = 0;
      $('.subtotal').each(function() {
        var subtotal = $(this).text();
        total += parseFloat(subtotal.replace(/[^0-9.-]+/g,""));
      });
      return total;
    }

    function formatPrice(price) {
      return "₱" + price.toFixed(2);
    }

    $("#total-price").text(formatPrice(totalPrice));
    $("#totalqty").val(totalQty);

  }

 
  function formatPrice(price) {
    return "₱" + price.toFixed(2);
  }
});
</script>
<script type="text/javascript">
$(document).ready(function(){  
      $('#table-bordered').DataTable();  
 }); 
</script>
<script type='text/javascript'>
            $(document).ready(function(){  
  $('#table-bordered').DataTable();  
  $(document).on('click', '.productinfo', function(){
    var product = $(this).data('id');
    $.ajax({
      url: 'details.php',
      type: 'post',
      data: {product: product},
      success: function(response){ 
        $('.modal-body').html(response); 
        $('#productModal').modal('show'); 
      }
    });
  });
});
</script>
<script type='text/javascript'>
            $(document).ready(function(){  
  $('#table-bordered').DataTable();  
  $(document).on('click', '.productinfo', function(){
    var product = $(this).data('id');
    $.ajax({
      url: 'details.php',
      type: 'post',
      data: {product: product},
      success: function(response){ 
        $('.modal-body').html(response); 
        $('#productModal').modal('show'); 
      }
    });
  });
});
</script>
            <div class="modal fade" id="productModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Product Details</h4>
                          <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          
                        </div>
                    </div>
                </div>
        </div>
</body>
</html>
