<?php 
function insert_sanpham($nhanhieu,$tensp,$giasp,$hinh,$motasp,$date_xx,$iddm){
    $sql= "INSERT INTO sanpham(nhan_hieu,tensp,anhsp,gia,mota,ngay_xuat_xuong,iddm) VALUES('$nhanhieu','$tensp','$hinh','$giasp','$motasp','$date_xx','$iddm')"; 
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="DELETE FROM sanpham WHERE id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham_home(){
    $sql="SELECT * FROM sanpham WHERE 1 ORDER BY id DESC LIMIT 0,9";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="SELECT * FROM sanpham WHERE 1 ORDER BY luotxem DESC LIMIT 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw="",$iddm=0){
    $sql="SELECT * FROM sanpham WHERE 1";
    if ($kyw!="") {
        $sql.=" and name like '%".$kyw."%'";
    }
    if ($iddm>0) {
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" ORDER BY id DESC";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function loadone_sanpham($id){
    $sql="SELECT * FROM sanpham WHERE id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}

function load_ten_dm($iddm){
    if ($iddm>0) {
        $sql="SELECT * FROM danhmuc WHERE id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
  
}

function load_sanpham_cungloai($id,$iddm){
    $sql="SELECT * FROM sanpham WHERE iddm=".$iddm." AND id <>".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id,$iddm,$tensp,$giasp,$motasp,$hinh)
{
    if($hinh != "")
        $sql = "UPDATE sanpham SET iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$motasp."', img='".$hinh."' WHERE id=".$id;
    else
        $sql = "UPDATE sanpham SET iddm='".$iddm."', name='".$tensp."',  price='".$giasp."', mota='".$motasp."' WHERE id=".$id;
     pdo_execute($sql);
    // var_dump($sql);
    // die;
}
?>