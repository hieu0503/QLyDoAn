<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Xoa</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jQuery/2.1.3/jQuery.min.js"></script>
    </head>
    <body>
        <?php
        $conn = mysqli_connect("localhost","root","") or die("Kết nối thành công");
        $db = mysqli_select_db($conn,"qlda");
        $id=$_POST['msv'];
        $query="DELETE FROM doan WHERE doan.MaSV = '$id'";
        $data= mysqli_query($conn, $query);
        header("Location: Home.php");
        die();
        ?>
    </body>
</html>
