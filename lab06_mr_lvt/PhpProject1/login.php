<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> Aptech | System Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.login-form {
    width: 340px;
    margin: 50px auto;
    font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 20px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>

</head>
<body>
<div class="login-form">
    <form action="/PhpProject1/kiemtra.php" method="post">
        <h2 class="text-center">Đăng nhập</h2>       
        <div class="form-group">
            <input type="text" name="fname" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="fpassword" class="form-control" placeholder="Password" required="required">
        </div>                      
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Truy Cập</button>
        </div>        
    </form>
    
</div>
</body>
</html>

