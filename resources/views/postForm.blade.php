<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form  method="post">
{{ @csrf_field() }}
<td><b>Tên của bạn: </b><input type="text" name= "hoten" ></td><br>
<td><b>Ngày sinh: </b> <input type="date"name="tuoi"></td><br>
<input type="submit" value="Gửi">
</form>
</body>
</html>
