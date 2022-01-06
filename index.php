<?php include('controller/config.php'); 
include('template/header.php')
?>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div>
                    <div class="mt-5 d-flex align-items-center d-flex justify-content-center">
						<div><h2>Hệ thống quản lý đại học</h2></div>
							
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
            <div><a href="add.php" class="btn btn-danger ml-5">Thêm mới</a></div>	
                <thead>
                    <tr>
						<th>No.</th>
                        <th>Tên môn</th>
                        <th>Số tín chỉ</th>
						<th>Số tiết lý thuyết</th>
						<th>Số tiết bài tập</th>
						<th>Số tiết THTN</th>	
                        <th>Số giờ tự học</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM monhoc");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["mamh"]; ?>">
					<td><?php echo $i; ?></td>
					<td><?php echo $row["ten_mh"]; ?></td>
					<td><?php echo $row["sotinchi"]; ?></td>
					<td><?php echo $row["sotiet_lt"]; ?></td>
					<td><?php echo $row["sotiet_bt"]; ?></td>					
					<td><?php echo $row["sotiet_thtn"]; ?></td>
					<td><?php echo $row["sogio_tuhoc"]; ?></td>
					<td><a href="src/update.php?mamh=<?php echo $row["mamh"]; ?>">Sửa</a></td>
					<td><a href="src/delete.php?mamh=<?php echo $row["mamh"]; ?>">Xóa</a></td>

				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
<?php 
include('template/footer.php')
?>
                          		                            