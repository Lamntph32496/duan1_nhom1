<style>
    form {
            width: 80%;
           margin:0 auto;
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            border-radius:10px;
            padding: 8px;
            margin-bottom: 10px;
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
							<a class="active" href="#">thêm danh mục </a>
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
						<h3>đơn hàng gần đây</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
                    <form action="">
                        <label for=""> ID danh mục</label>
                        <input type="text" name="maloai" placeholder="Số tự động" disabled>
                    
                        <label for="">Tên danh mục</label>
                        <input type="text" value="" name="" id="" >

                        <div>
                        <button type="submit" >Thêm danh muc</button>
                        <button type="reset"  style="background: var(--orange);" >Nhập lại</button>
                        <a href="index.php?act=list_dm"> <button type="button" >Danh sách</button> </a>
                        <a href="index.php?act=sua_dm"> <button type="button" >Sửa danh mục</button> </a>
						</div>
                    </form>
			
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->