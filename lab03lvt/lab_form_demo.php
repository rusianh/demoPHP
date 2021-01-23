<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Demo</title>
    <style>
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>NEW CUSTOMER INFORMATION FORM</h1>
    <form action="lab_submit_demo.php" method="post">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" value="" placeholder="First Name" required>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>