<style> 
        button {
            border:none;
            padding: 10px;
           margin-left:20px;
           background: var(--blue);
           color: var(--light);
           border-radius: 20px;
        }
		.thong_tin{
			display:flex;
			flex-direction:column ;
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
					<h1>Quản lý đơn hàng   </h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Quản lý đơn hàng  </a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">list đơn hàng </a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Danh sách sản phẩm </h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<div class="row">
            <table class="ds_table">
                <tr>
                    <th>Người Nhân </th>
                    <th>Tổng đơn hàng </th>
                    <th>Ngày Đặt hàng </th>
                    <th> Trạng thái Vận chuyển </th>
                    <th> chức năng </th>
                </tr>
				<tr>
					<td >
						<div class="thong_tin">
							<p>Name:Nguyễn Văn Nhất</p>
							<p>SDT:0377135</p>
							<p>Địa chỉ: Hưng yên</p>
						</div>
					</td> 
					
					<td style="color:red">18.500 VND</td>
					<td>10-1-2023</td>
					<td>thành công</td>
					<td>
						<a href="index.php?act=ct_dh"><input type="button" value="xem"></a>
					</td>
				</tr>
                           
                    

                            
            </table>
            <!-- <div class="row_btn02">
                <button class="seclect" type="button">Chọn tất cả</button>
                <button class="clean_select" type="button">Bỏ chọn tất cả</button>
                <button style=" background: var(--orange);
                         color: var(--light);" class="clean" type="button"> Xóa các mục đã chọn
                  </button>
            </div> -->
        </div>
                        </div>
                    </div>
                </main>
                <!-- MAIN -->
</section>
            <!-- CONTENT -->