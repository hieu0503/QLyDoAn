<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dk</title>
    </head>
    <body>
        <?php
        $msv_da = $_POST['id'];
        $name_da = $_POST['name'];
        $mt_da = $_POST['mt'];
        $gv_da = $_POST['gvhd'];
        $url_da = $_POST['url'];
        $conn = mysqli_connect("localhost","root","") or die("Kết nối thành công");
        $db = mysqli_select_db($conn,"qlda");
        $query="Select * from doan Where doan.MaSV= '$msv_da';";
        $data= mysqli_query($conn, $query);
        $tong = mysqli_num_rows($data);
        if(!$tong){
        $query1="INSERT INTO `doan` (`MaSV`, `TenDa`, `MoTa`, `Gvhd`, `FileUrl`) VALUES ('$msv_da', '$name_da', '$mt_da', '$gv_da', '$url_da');";
        $data1= mysqli_query($conn, $query1);
            header("location: Home.php");
        } else {
            echo "Mã sinh viên bị trùng";
        }
        ?>
        <form action="ipDa.php" style="margin-left: 900px; margin-top: 50px;">
            <div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Đăng kí lại</button>
            </div>
            </div>
        </form>
    </body>
</html>
