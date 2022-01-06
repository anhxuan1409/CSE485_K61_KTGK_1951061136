<?php
include 'database.php';

if(isset($_POST['save']))
{	 
    $ten = $_POST['ten'];
    $stc = $_POST['stc'];
    $lt = $_POST['lt'];
    $bt = $_POST['bt'];
    $thtn = $_POST['thtn'];
    $th = $_POST['th'];

    $sql = "INSERT INTO monhoc (ten_mh,sotinchi,sotiet_lt,sotiet_bt,sotiet_thtn,sogio_tuhoc) VALUES ('$ten','$stc','$lt','$bt','$thtn','$th')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}


if(count($_POST)>0){
	if($_POST['type']==1){
        $ten = $_POST['ten'];
        $stc = $_POST['stc'];
        $lt = $_POST['lt'];
        $bt = $_POST['bt'];
        $thtn = $_POST['thtn'];
        $th = $_POST['th'];

        $sql = "INSERT INTO monhoc (ten_mh,sotinchi,sotiet_lt,sotiet_bt,sotiet_thtn,sogio_tuhoc) VALUES ('$ten','$stc','$lt','$bt','$thtn','$th')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
  
    if(count($_POST)>0){
        if($_POST['type']==2){
            $ten = $_POST['ten'];
            $stc = $_POST['stc'];
            $lt = $_POST['lt'];
            $bt = $_POST['bt'];
            $thtn = $_POST['thtn'];
            $th = $_POST['th'];

            $sql = "UPDATE 'crud' SET 'ten_mh'='$ten','sotinchi'='$stc','sotiet_lt'='$lt','sotiet_bt'='$bt','sotiet_thtn'='$thtn','sogio_tuhoc'='$th'";
            if (mysqli_query($conn, $sql)) {
                echo json_encode(array("statusCode"=>200));
            } 
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
}

?>