 <meta charset="UTF-8" />
<?php
  include('../condb.php');
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );
 

$postcode = $_POST['postcode'];
$order_id = $_POST['order_id'];
$order_status = $_POST['order_status'];

 
$sql ="UPDATE tbl_order SET	 
		postcode='$postcode',
		order_status='$order_status'
		WHERE order_id=$order_id
	 ";
			
		$result = mysqli_query($con, $sql);// or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($con);
//  echo $sql;
// exit();
	
		if($result){
			echo "<script>";
			echo "alert('เพิ่มเลขพัสดุเรียบร้อยแล้วครับ !');";
			echo "window.location ='index.php?order_id=$order_id&act=show-order'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_product.php'; ";
			echo "</script>";
		}
		


?>