<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $id_sua = $_REQUEST['id'];
        $msv_da = $_POST['msv_da'];
        $ten_da = $_POST['name_da'];
        $mt_da = $_POST['mt_da'];
        $gv_da = $_POST['gv_da'];
        $url_da = $_POST['link_da'];
        $conn = mysqli_connect("localhost","root","") or die("Kết nối thành công");
        $db = mysqli_select_db($conn,"qlda");
    //  $query="SELECT sv.MaSV,mh.TenMH,diem.Diem FROM sv INNER JOIN diem diem INNER JOIN mh WHERE sv.MaSV=diem.MaSV AND mh.MaMH=diem.MaMH AND mh.MaMH=1; ";
        $query="UPDATE doan SET MaSV='$msv_da',TenDa='$ten_da',MoTa='$mt_da',Gvhd='$gv_da',FileUrl='$url_da' WHERE doan.MaSV='$id_sua'";
        $data= mysqli_query($conn, $query);
        header("Location: Home.php");
        die();
        ?>
    </body>
</html>
