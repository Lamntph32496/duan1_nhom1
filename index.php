<?php
 include "header.php";
 if(isset($_GET['act'])){
  $act=$_GET['act'];

  switch ($act) {
        case 'login':
            include "tai_khoan/login.php";
            break;

        case 'register':
            include "tai_khoan/register.php";
            break;

         case 'viewcart':  
            include "cart/viewcart.php";
            break;

         case 'chitiet_sp':
            include "san_pham/chitiet_sp.php";
            break;
    default:
        # code...
        include "home.php";
        break;
  }
}else{
    include "home.php";
}
 include "footer.php";

?>
