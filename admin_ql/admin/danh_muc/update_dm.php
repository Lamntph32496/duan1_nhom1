<style>
  form {
    margin: 0 auto;
    width: 90%;
}

.row_center input {
    width: 100%;
    height: 30px;
    border-radius: 5px;
    margin-bottom: 10px;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
}

.row_btn {
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
}

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
				<img src="img/people.png">
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
							<a class="active" href="#">Update danh muc </a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

                <!-- <div> 
                    <a href="index.php?act=add_dm"><button type="button">Thêm mới</button> </a>
                </div> -->

			<div class="table-data">
				<div class="order">
					<!-- <div class="head">
						<h3>đơn hàng gần đây</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div> -->
					<form action="index.php?act=update_dm"  class="row" method="post">
                        <div class="row_header"><h2>Cập nhập danh muc</h22></div>
                        <div class="row_center">
                            <label for=""> id danh muc </label>
                            <input type="text" name="maloai">
                            <label for=""> Tên danh mục </label>
                            <input type="text" name="capnhap"
                                
                            <div class="row_btn">
                                <button class="add" type="submit">Cập nhâp</button>
                                <button style=" background: var(--orange);" class="reset" type="reset">Nhập lại</button>
                                <a href="index.php?act=list_dm">
                                    <button type="button" class="next">Danh sách</button>
                                </a>
                            </div>
                        </div>
                              </form>


				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->