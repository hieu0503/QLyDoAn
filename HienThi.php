<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hien Thị</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <style>
            td,th {
            border: 2px solid #f1f1f1;
        }
        </style>
    </head>
    <body>
        <?php
    $conn = mysqli_connect("localhost","root","") or die("Kết nối thành công");
    $db = mysqli_select_db($conn,"qlda");
    $id=$_POST['msv_tk'];
    $query="SELECT * FROM doan WHERE doan.MaSV='$id' ";
    $data= mysqli_query($conn, $query);
    $kq = mysqli_num_rows($data);
    if($kq == 0){
        $id= " ";
        $name="Không tìm thấy dữ liệu";
    } else {
        $stt = 1;
        while ($row= mysqli_fetch_object($data)) {
        $msvda_da[$stt]=$row->MaSV;
        $nameda_da[$stt]=$row->TenDa;
        $mtda_da[$stt]=$row->MoTa;
        $gvhd_da[$stt]=$row->Gvhd;
        $urlda_da[$stt]=$row->FileUrl;
        $stt++;
        }
       
    }
    ?>
        <header>
            <div>
                <img style="margin-left: 25%;" alt="Học viện Kỹ thuật mật mã" src="http://home.actvn.edu.vn/Upload/svda/hoc-vien-mat-ma.jpg" class="logoTop">
            </div>
        </header>
        <table class="table table-striped" style="margin: 5% auto; width: 90%; border: 1px black solid;">
  <thead>
    <tr>
      <th scope="col">Mã SV</th>
      <th scope="col">Tên đồ án</th>
      <th scope="col">Miêu tả đồ án</th>
      <th scope="col">Giáo viên hướng dẫn</th>
      <th scope="col">Link URL</th>
    </tr>
  </thead>
  <tbody>
      <?php
          for ($i = 1; $i < $stt; $i++){
      ?>
    <tr>
       <th scope="row"> <?php echo $msvda_da[$i]; ?></th>
      <td><?php echo $nameda_da[$i]; ?></td>
      <td><?php echo $mtda_da[$i]; ?></td>
      <td><?php echo $gvhd_da[$i]; ?></td>
      <td><a href="<?php echo $urlda_da[$i] ?>">Link đồ án</a></td>
    </tr>
          <?php          
            }
          ?>
  </tbody>
</table>
        <form action="Home.php" style="margin-left: 900px; margin-top: 50px;">
            <div>
                <div class="form-group">
                    <button style="width: 15%" type="submit" class="btn btn-primary">Home</button>
            </div>
            </div>
        </form>
    </body>
</html>

