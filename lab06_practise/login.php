<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .login-form{
            width: 340px;
            margin: 50px auto;
            font-size: 15px;
        }
    </style>

</head>
<body>
    <div class="login-form">
        <form action="http://aptech.com:83/demoPHP/lab06_practise/validate.php" method="post">
            <h2>Đăng nhập</h2>
            <div>
                <input type="text" name="fname" class="" placeholder="Tên đăng nhập" required>
                <input type="password" name="fpassword" class="" placeholder="Password" required>
                <button>Đăng nhập</button>
            </div>
        </form>
    </div>
</body>
</html>