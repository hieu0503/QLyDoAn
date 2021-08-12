<!DOCTYPE html>

    <head>
        <meta charset="UTF-8">
        <title>Đồ Án</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <style>
        #menu li {
                color: #f1f1f1;
                display: inline-block;
                width: 220px;
                height: 60px;
                line-height: 60px;
                text-align: center;
            }
            #menu ul {
                background: #1F568B;
                list-style-type: none;
                overflow: hidden;
                width: 100%;
            }
            #menu a {
                text-decoration: none;
                color: #fff;
                display: block;
                font-size: 24px;
            }
            #menu a:hover {
                color: yellow;
            }
        td,th {
            border: 2px solid #f1f1f1;
        }
    </style>
    <body>
        <?php
    $conn = mysqli_connect("localhost","root","") or die("Kết nối thành công");
    $db = mysqli_select_db($conn,"qlda");
    //    $query="SELECT sv.MaSV,mh.TenMH,diem.Diem FROM sv INNER JOIN diem diem INNER JOIN mh WHERE sv.MaSV=diem.MaSV AND mh.MaMH=diem.MaMH AND mh.MaMH=1; ";
    $query="SELECT * FROM doan";
    $data= mysqli_query($conn, $query);
    $stt =1;
    while ($row= mysqli_fetch_object($data)) {
        $id_da[$stt]=$row->MaSV;
        $name_da[$stt]=$row->TenDa;
        $mt_da[$stt]=$row->MoTa;
        $gv_da[$stt]=$row->Gvhd;
        $file_da[$stt]=$row->FileUrl;
        $stt++;
    }
    ?>
        
        <header>
            <div>
                <img style="margin-left: 25%;" alt="Học viện Kỹ thuật mật mã" src="http://home.actvn.edu.vn/Upload/svda/hoc-vien-mat-ma.jpg" class="logoTop">
            </div>
        </header>
        <nav>
            <div id="menu">
                <div style="float:left; margin-left: 20%; padding: 10px;">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="ipDa.php">Add</a></li>
                        <li><a href="Delete.php">Delete</a></li>
                        <li><a href="Update.php">Update</a></li>
                        <li><a href="Search.php">Search</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <table class="table table-striped" style="width: 90%; margin: auto; border: 1px black solid;">
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
       <th scope="row"> <?php echo $id_da[$i]; ?></th>
      <td><?php echo $name_da[$i]; ?></td>
      <td><?php echo $mt_da[$i]; ?></td>
      <td><?php echo $gv_da[$i]; ?></td>
      <td><a href="<?php echo $file_da[$i] ?>">Link đồ án</a></td>
    </tr>
          <?php          
            }
          ?>
  </tbody>
</table>
    </body>

