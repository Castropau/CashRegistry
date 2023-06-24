<?php
include "dbconn.php";
 
$product = $_POST['product'];
 
$sql = "select * from product_sale where id=".$product;
$result = mysqli_query($conn,$sql);
while( $row = mysqli_fetch_array($result) ){
?>
<table class="modall" style="border:'0'; width:'100%'">
<tr>
    <td width="300"><img src="<?php echo $row['photo']; ?>">
    <td style="padding:20px;">
    <p>Product Code : <?php echo $row['productcode']; ?></p>
    <p>Product Name : <?php echo $row['productname']; ?></p>
    <p>Price : <?php echo $row['price']; ?></p>
    <?php if (strlen($row['category']) > 40) { ?>
        <p>About Item :</p>
        <p><?php echo preg_replace('/\s+/', ' ', wordwrap($row['category'], 40, " \n", true)); ?></p>
    <?php } else { ?>
        <p>About Item : <?php echo $row['category']; ?></p>
    <?php } ?>
    </td>
</tr>
</table>
 
<?php } ?>