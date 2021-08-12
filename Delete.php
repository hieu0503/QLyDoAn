<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Delete</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <form action="Xoa.php" method="POST" style="width:300px; background: #ecf0f1; border-radius: 15px; margin: auto; padding:30px; margin-top: 20%">
            <div class="form-group">
                <h5>Nhập mã sv muốn xóa</h5>
                    <input type="text" class="form-control" name="msv" id="msv">
            </div>
            <div class="form-group" style="padding-left: 60px">
                <button type="submit" class="btn btn-primary">Xác nhận xóa</button>
            </div>
        </form>
    </body>
</html>
