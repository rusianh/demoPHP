<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submit Demo</title>
    <style>
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>THANK YOU!</h1>
    <h2>Below is your submission</h2>
    <form action="">
        <label for="firstname">First Name:</label>
        <span><?php echo $_POST['firstname'] ?></span>
    </form>
</body>
</html>