<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document abc</title>
</head>
<body>
<form method="post">
  {{ @csrf_field() }}
     Tài Khoản: <input type="text" name="taikhoan">
     <br>
     Mật Khẩu: <input type="text" name="matkhau">
     <br>
    <button type="submit" >Gửi dữ liệu</button>
   
  </form>
</body>
</html>