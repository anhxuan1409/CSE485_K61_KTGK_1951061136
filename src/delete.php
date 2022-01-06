<?php
include('../config/config.php');
$sql = "DELETE FROM monhoc WHERE mamh='" . $_GET["mamh"] . "'";
if (mysqli_query($conn, $sql)) {
    Header('location: http://localhost/CSE485_K61_KTGK_1951061136/');
} else {
    Header('location: http://localhost/CSE485_K61_KTGK_1951061136/error.php');
}
mysqli_close($conn);

?>