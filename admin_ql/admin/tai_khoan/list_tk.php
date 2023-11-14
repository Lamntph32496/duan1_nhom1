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
 </style><!-- CONTENT -->
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
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Quản lý tài khoản  </h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Quản lý tài khoản </a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">list tài khoản </a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

                <!-- <div> 
                    <a href="index.php?act=add_sp"><button type="button">Thêm mới sản phẩm </button> </a>
                </div> -->

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Danh sách tài khoản </h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<div class="row">
            <table class="ds_table">
                <tr>
                    <td></td>
                    <td>tên tài khoản  </td>
                    <td>Mật khẩu </td>
                    <td>Ngày lập </td>
                    <td>Email</td>
                    <td>Số điên thoại </td>
                    <td> chức năng </td>
                </tr>
            
                            <tr>
                                <td> <input type="checkbox" name="" id=""></td>
                                <td> nguyenvannhat123 </td>
                                <td>Nhat123@</td>
                                <td> 11/07/2023</td>
                                <td>nvn12301647@gmai.com </td>
                                <td> 0377231654</td>

                                <td >
                                <!-- <a href="' . $suasp . '">  <input type="button" value="sua"></a> -->
                                <a href="' . $xoasp . '">  <input type="button" value="xoa" onclick="alert('ban chắc chắc muôn xóa tk này')"></a>
                                </td>
                            </tr> 

                            <tr>
                                <td> <input type="checkbox" name="" id=""></td>
                                <td> linhtc43</td>
                                <td>faa </td>
                                <td> 12/06/2022</td>
                                <td>linhthuynguyen@gmail.com </td>
                                <td> 0528565511 </td>

                                <td >
                                <!-- <a href="' . $suasp . '">  <input type="button" value="sua"></a> -->
                                <a href="' . $xoasp . '">  <input type="button" value="xoa" onclick="alert('ban chắc chắc muôn xóa tk này')"></a>
                                </td>
                            </tr> 
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
                    </div>
                </main>
                <!-- MAIN -->
</section>
            <!-- CONTENT -->