<?php include('../config/config.php'); 
include('../template/header.php')
?>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                       <a href="http://localhost/CSE485_K61_KTGK_1951061136" style="color:#fff"><i class="fas fa-arrow-left"></i></a> <h2>Thêm</h2>
                </div>
            </div>
        <form method="post" action="../src/add.php">
            <div class="mb-3">
            <label for="Name" class="form-label">Tên Môn</label>
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
            <input type="submit" class="btn btn-primary" name='save' value="Submit">
        </form>
    </div>
</div>
<?php 
include('../template/footer.php')
?>
