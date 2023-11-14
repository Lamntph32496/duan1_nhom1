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
					<h1>Quản lý sản phẩm  </h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Quản lý sản phẩm </a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Thông tin sản phẩm </a>
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
						<h3>Thông tin sản phẩm </h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<div class="row">
            <table class="ds_table">
                <tr>
                    <td>stt</td> 
                    <td> tên sản phẩm</td>    
                    <td>Màn hình</td>
                    <td>Chíp </td>
                    <td> Dung lượng Pin</td>
                    <td>Màu sắc</td>
                    <td>Face id</td>
                    <td>Mạng 5g</td>
                    <td> USB-C </td>
                </tr>
            
                            <tr>
                                <td>1 </td>
                                <td> iPhone 12pro </td>
                                <td>6.2 inch LCD </td>
                                <td> A17</td>
                                <td> 4500 mAh</td>
                                <td>Xanh đen </td>
                                <td> có </td>
                                <td > có  </td>
                                <td > có  </td>
                            </tr> 
                            
            </table>
            <div class="row_btn02">
            <a href="index.php?act=list_sp"> <button type="button" class="next">Danh sách</button></a>
            </div>
        </div>
                        </div>
                    </div>
                </main>
                <!-- MAIN -->
</section>
            <!-- CONTENT -->