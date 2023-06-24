<?php

if(isset($_POST['pay_id']) && !empty($_POST['pay_id']))
{
    include_once "dbconn.php";
    print_r($_POST);
    $pay_id = $_POST['pay_id'];
    $totalAmount = $_POST['totalAmount'];
    $cashRendered = $_POST['cashRendered'];
    $remainingBalance = $_POST['remainingBalance'];
    $cash = $_POST['cash'];
    $change = $_POST['change'];

    $sql = "SELECT * FROM payment WHERE pay_id='$pay_id'";
    $stmt = $conn->prepare("SELECT * FROM payment WHERE pay_id=?");
    $stmt->bind_param("i", $pay_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0)
    {
        $data = $result->fetch_assoc();
        //insert into payemnt history
        $sqlHist = "INSERT INTO payment_history(`pay_id`, `receipt_or`, `discount`, `payment`, `pay_amount`, `guest_name`, `cus_name`, `pay_change`, `date_order`) VALUES('$data[pay_id]','$data[receipt_or]','$data[discount]','$data[payment]','$data[pay_amount]','$data[guest_name]','$data[cus_name]','$data[pay_change]','$data[date_order]')";
        if(mysqli_query($conn,$sqlHist))
        {
            //update the payment details
            $cashTotal = ($cashRendered+$cash);
            $uptPay = $conn->prepare("UPDATE payment SET payment=?, pay_amount=?, pay_change=? WHERE pay_id=$data[pay_id]");
            $uptPay->bind_param("sss", $totalAmount, $cashTotal, $change);
            $uptPay->execute();
            if($uptPay->affected_rows > 0)
            {
                header("Location: print-receipt.php");
                exit();
            }
        }
    }
    header("Location: print-receipt.php");
    exit();
}
else{
    header("Location: print-receipt.php");
    exit();
}