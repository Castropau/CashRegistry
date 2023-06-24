<?php

require_once 'dbconn.php';


if (isset($_POST['search'])) {
  $searchValue = $_POST['search'];
  $sql = "SELECT * FROM customer WHERE id LIKE '%".$searchValue."%' OR id LIKE '%".$searchValue."%'";
  $result = mysqli_query($conn, $sql);
  $customerData = array();
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $customerData[] = array(
        'id' => $row['id'],
        'username' => $row['id'],
        'firstname' => $row['firstname'],
        'lastname' => $row['lastname']
      );
    }
  }
 
  echo json_encode($customerData);
}
?>