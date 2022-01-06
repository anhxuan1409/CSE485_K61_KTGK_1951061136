<?php
include ('../controller/config.php');
if(isset($_POST['save']))
{	 
	 $ten = $_POST['ten'];
	 $stc = $_POST['stc'];
	 $lt = $_POST['lt'];
	 $bt = $_POST['bt'];
	 $thtn = $_POST['thtn'];
	 $th = $_POST['th'];

	 $sql = "INSERT INTO monhoc (ten_mh,sotinchi,sotiet_lt,sotiet_bt,sotiet_thtn,sogio_tuhoc)
	 VALUES ('$ten','$stc','$lt','$bt','$thtn','$th')";
	 if (mysqli_query($conn, $sql)) {
		Header('location: http://localhost/CSE485_K61_KTGK_1951061136/');
	 } else {
    Header('location: http://localhost/CSE485_K61_KTGK_1951061136/error.php');

	 }
	 mysqli_close($conn);
}
?>