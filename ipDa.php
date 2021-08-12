<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ADD</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    </head>
    <body>
        <form action="dk.php" method="POST" style=" padding:30px; width:400px; margin: auto; background: #ecf0f1; border-radius: 15px; margin-top: 10% ">
            <h5 style="padding-left: 40px">Nhập thông đồ án</h5>
            <div class="form-group">
                <label>Mã SV</label>
                <input type="text" class="form-control" name="id" id="id">
            </div>
            <div class="form-group">
                <label>Tên đồ án</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label>Miêu tả đồ án</label>
                <input type="text" class="form-control" name="mt" id="mt">
            </div>
            <div class="form-group">
                <label>Giáo viên hướng dẫn</label>
                <input type="text" class="form-control" name="gvhd" id="gvhd">
            </div>
            <div class="form-group">
                <label>Link URL</label>
                <input type="url" class="form-control" name="url" id="url">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </body>
</html>
