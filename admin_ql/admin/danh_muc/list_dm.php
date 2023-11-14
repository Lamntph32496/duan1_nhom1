<style> 
        button {
            border:none;
            padding: 10px;
           margin-left:20px;
           background: var(--blue);
           color: var(--light);
           border-radius: 20px;
        }
</style>
<!-- CONTENT -->
<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/anhdt4.jpg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Quản lý danh mục </h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Quản lý danh mục </a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">list danh mục</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

                <div> 
                    <a href="index.php?act=add_dm"><button type="button">Thêm mới</button> </a>
                </div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>đơn hàng gần đây</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th> Chọn </th>
								<th>Số thứ tự </th>
								<th>Tên danh mục </th>
								<th>Hình ảnh danh mục </th>
								<th>Chức năng </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
                                <input type="checkbox" name="" id="">
								</td>
								<td>1</td>
								<td>Điện Thoại iphone 12pro</td>
								<td>
								<img src="img/anhdt8.jpg" alt="">
                                </td>
                                <td >
                                    <a href="' . $suadm . '">  <input type="button"  value="sua"></a>
                                    <a href="' . $xoadm . '">  <input type="button" value="xoa"></a>
                                  </td>
							</tr>

                            <tr>
								<td>
                                <input type="checkbox" name="" id="">
								</td>
								<td>2</td>
								<td>Điện Thoại samsung</td>
								<td>
                                    <img src="img/anhdt4.jpg" alt="">
                                </td>
                                <td >
                                    <a href="' . $suadm . '">  <input type="button"  value="sua"></a>
                                    <a href="' . $xoadm . '">  <input type="button" value="xoa"></a>
                                  </td>
							</tr>

                            <tr>
								<td>
                                <input type="checkbox" name="" id="">
								</td>
								<td>3</td>
								<td>Điện Thoại iphone 12pro</td>
								<td>
                                    <img src="img/anhdt8.jpg" alt="">
                                </td>
                                <td >
                                    <a href="' . $suadm . '">  <input type="button"  value="sua"></a>
                                    <a href="' . $xoadm . '">  <input type="button" value="xoa"></a>
                                  </td>
							</tr>
							
						</tbody>
					</table>
					<div class="row_btn02">
                <button class="seclect" type="button">Chọn tất cả</button>
                <button class="clean_select" type="button">Bỏ chọn tất cả</button>
                <button style=" background: var(--orange);
                         color: var(--light);" class="clean" type="button"> Xóa các mục đã chọn
                  </button>
            </div>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->