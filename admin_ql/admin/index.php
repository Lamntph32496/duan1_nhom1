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
                    include "san_pham/list_sp.php";
                    break;
                }
                case 'add_sp':{
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

