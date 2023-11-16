<?php 
include "../model/pdo.php";
// include "../model/danhmuc.php";
include "../model/sanpham.php";
// include "../model/taikhoan.php";
// include "../model/cart.php";
// include "../model/binhluan.php";
include "header.php";
?>
<?php
    include "header.php";
    $act=$_GET['act']??'home';
    include "sidebar.php";

            switch ($act) {
                case 'list_dm':{ 
                    include"danh_muc/list_dm.php";
                    break;
                }
                case 'home':{
                    include "home.php";
                    break;
                }
                case 'add_dm':{
                    include "danh_muc/add_dm.php";
                    break;
                }
                case 'xoa_dm':{
                    include "danh_muc/list_dm";
                    break;
                }
                case 'sua_dm':{
                    include "danh_muc/update_dm.php";
                    break;
                }
                // case 'update_dm':{
                //    header ("location:update_dm");
                //     break;
                // }
                case 'list_sp':{
                    if (isset($_POST['listok'])&&($_POST['listok'])) {
                        $kyw=$_POST['kyw'];
                        $iddm=$_POST['iddm'];
                    }else{
                        $kyw='';
                        $iddm=0;
                    }
                    // $listdanhmuc=loadall_danhmuc();
                    $listsanpham=loadall_sanpham($kyw,$iddm);
                    include "san_pham/list_sp.php";
                    break;
                }
                case 'add_sp':{
                    if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                        $iddm=$_POST['iddm'];
                        $tensp=$_POST['tensp'];
                        $nhanhieu=$_POST['nhan_hieu'];
                        $giasp=$_POST['gia'];
                        $motasp=$_POST['mota'];
                        $date_xx=$_POST['ngay_xuat_xuong'];
                        $hinh=$_FILES['anhsp']['name'];
                        $target_dir="../upload/";
                        $target_file= $target_dir . basename($_FILES['anhsp']['name']);
                        if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          }
                        // $tensp=$_POST['tensp'];
                        insert_sanpham($nhanhieu,$tensp,$giasp,$hinh,$motasp,$date_xx,$iddm);
                        $thongbao="Thêm thành công";
                       }
                    //    $listdanhmuc=loadall_danhmuc();
                    include "san_pham/add_sp.php";
                    break;
                }
                case 'sua_sp':{
                    include "san_pham/update_sp.php";
                    break;
                }
                case 'xoa_sp':{
                    include "san_pham/list_sp.php";
                    break;
                }
                case 'ct_sp':{
                    include "san_pham/ct_sp.php";
                    break;
                }
                // case 'update_sp':{
                //     include "san_pham/update_sp.php";
                //     break;
                // }
                case 'list_tk':{
                    include "tai_khoan/list_tk.php";
                    break;
                }
                // case 'xoa_tk':{
                //     include "tai-khoan/list_tk.php";
                //     break;
                // }
                case 'list_dh':{
                    include "don_mua/list_dh.php";
                    break;
                }
                case'ct_dh':{
                    include "don_mua/ct_dh.php";
                    break;
                }
            }
    include "footer.php";

?>

