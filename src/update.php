<?php
include ('../controller/config.php');
include('../template/header.php');

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE monhoc set tenmh='" . $_POST['ten'] . "', sotinchi='" . $_POST['stc'] . "', sotiet_lt='" . $_POST['lt'] . "' ,sotiet_bt='" . $_POST['bt'] . "',sotiet_thtn='" . $_POST['thtn'] . "',sogio_tuhoc='" . $_POST['th'] . "' WHERE bd_id='" . $_GET['bd_id'] . "'");
Header('location: http://localhost/CSE485_K61_KTGK_1951061136/');
}else {
}

?>
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                       <a href="http://localhost/CSE485_K61_KTGK_1951061136" style="color:#fff"><i class="fas fa-arrow-left"></i></a> <h2>Sửa</h2>
                </div>
            </div>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<?php $result = mysqli_query($conn,"SELECT * FROM monhoc WHERE mamh='" . $_GET['mamh'] . "'");
while($row = mysqli_fetch_array($result)) {

?>
            <div class="mb-3">
            <label for="rName" class="form-label">Tên Môn</label>
            <input type="text" class="form-control" id="ten" name='ten'>
            </div>
            <div class="mb-3">
            <label for="age" class="form-label">Số tín chỉ</label>
            <input type="number" class="form-control" id="stc" name="stc">
            </div>
            <div class="mb-3">
            <label for="bgrp" class="form-label">Số tiết lý thuyết</label>
            <input type="text" class="form-control" id="lt" name='lt'>
            </div>
            <div class="mb-3">
            <label for="bqnty" class="form-label">Số tiết bài tập</label>
            <input type="text" class="form-control" id="bt" name="bt" >
            </div>
            <div class="mb-3">
            <label for="date" class="form-label">Số tiết THTN</label>
            <input type="text" class="form-control" id="thtn" name="thtn" >
            </div>
            <div class="mb-3">
            <label for="phone" class="form-label">Số giờ tự học</label>
            <input type="text" class="form-control" id="th" name="th" >
            </div>
            <?php
				};
				?>
            <input type="submit" class="btn btn-primary" name='save' value="Submit">
        </form>	
    </div>
<?php 
include('../template/header.php')

?>