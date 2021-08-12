<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sua</title>
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    </head>
    <body>
        <?php
        $conn = mysqli_connect("localhost","root","") or die("Kết nối thành công");
        $db = mysqli_select_db($conn,"qlda");
        $id=$_POST['msv_sua'];
        $query="SELECT * FROM doan WHERE doan.MaSV='$id' ";
        $data= mysqli_query($conn, $query);
        $kq = mysqli_num_rows($data);
        if($kq == 0){
            $nameda_da[0]="Không tìm thấy dữ liệu";
        } else {
            while ($row= mysqli_fetch_object($data)) {
            $msvda_da[0]=$row->MaSV;
            $nameda_da[0]=$row->TenDa;
            $mtda_da[0]=$row->MoTa;
            $gvhd_da[0]=$row->Gvhd;
            $urlda_da[0]=$row->FileUrl;
            }

        }
        ?>
        <form action="Load.php?id=<?php echo $id;?>" method="POST" style=" padding:30px; width:400px; margin: auto; background: #ecf0f1; border-radius: 15px; margin-top: 10% ">
            <h5 style="padding-left: 20px">Thông tin sinh viên chỉnh sửa</h5>
            <div class="form-group">
                <label>MSV</label>
                <input type="text" class="form-control" name="msv_da" id="msv_da" value="<?php echo $msvda_da[0] ;?>">
            </div>
            <div class="form-group">
                <label>Tên đồ án</label>
                <input type="text" class="form-control" name="name_da" id="name__da" value="<?php echo $nameda_da[0] ;?>">
            </div>
            <div class="form-group">
                <label>Miêu tả đồ án</label>
                <input type="text" class="form-control" name="mt_da" id="mt_da" value="<?php echo $mtda_da[0] ;?>">
            </div>
            <div class="form-group">
                <label>Giáo viên hướng dẫn</label>
                <input type="text" class="form-control" name="gv_da" id="gv_da" value="<?php echo $gvhd_da[0] ;?>">
            </div>
            <div class="form-group">
                <label>Link URL</label>
                <input type="url" class="form-control" name="link_da" id="link_da" value="<?php echo $urlda_da[0] ;?>">

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </body>
</html>
