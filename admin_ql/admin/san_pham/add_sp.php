<style>
    form {
        width: 80%;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }

    label {
        margin-bottom: 5px;
    }

    input {
        width: 100%;
        border-radius: 10px;
        padding: 8px;
        margin-bottom: 10px;
    }

    button {
        border: none;
        padding: 10px;
        margin-left: 20px;
        background: var(--blue);
        color: var(--light);
        border-radius: 20px;
    }
</style>
<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu'></i>
        <a href="#" class="nav-link">Categories</a>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Search...">
                <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
            </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden>
        <label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="notification">
            <i class='bx bxs-bell'></i>
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
                <h1>Quản lý sản phẩm</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Quản lý sản phẩm</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">thêm sản phẩm </a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn-download">
                <i class='bx bxs-cloud-download'></i>
                <span class="text">Download PDF</span>
            </a>
        </div>

        <div class="table-data">
            <div class="order">
                <form action="index.php?act=add_sp" class="row" method="post" enctype="multipart/form-data">
                    <div class="row_header">
                        <h1>Thêm mới loại hàng</h1>
                    </div>
                    <div class="row_center">

                        <!--        <input type="text" name="maloai" placeholder="Số tự động" disabled>-->
                        <br>
                        <!-- <label for=""> Danh mục </label>
                        <select name="iddm" id="">
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="' . $id . '">' . $name . '</option>';
                            } ?>
                        </select> -->
                        <br>
                        <br>
                        <label for=""> Tên điện thoại </label>
                        <input type="text" name="tensp">

                        <label for=""> Hãng điện thoại </label>
                        <input type="text" name="nhan_hieu">

                        <label for=""> Giá </label>
                        <input type="text" name="gia">

                        <label for=""> Hình ảnh </label>
                        <input type="file" name="anhsp">

                        <label for=""> Mô tả </label>
                        <br>
                        <textarea name="mota" id="mota" cols="30" rows="10"></textarea>
                        <br>
                        <br>
                        <label for="">Ngày xuất xưởng </label>
                        <input type="date" name="ngay_xuat_xuong">

                        <div class="row_btn">
                        <input type="submit" name="themmoi" value="Thêm mới">
                            <button style=" background: var(--orange);" class="reset" type="reset">Nhập lại</button>
                            <a href="index.php?act=list_sp"> <button type="button" class="next">Danh sách</button></a>
                            <!-- <a href="index.php?act=sua_sp"> <button type="button" class="next">Sửa sản phẩm</button></a> -->
                        </div>
                    </div>
                    <?php
                    if (isset($thongbao) && ($thongbao != ""))
                        echo $thongbao;
                    ?>
                </form>



            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->