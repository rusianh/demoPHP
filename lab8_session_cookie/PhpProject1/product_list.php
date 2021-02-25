<?php 
session_start();

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

if (!isset($_SESSION['username']) || $_SESSION['username'] == '')
{
    redirect("http://localhost:8087/PhpProject1/login.php");
}





$host="35.229.164.85";
$username="lvtien";
$password="Tien1234@";
$dbname="Test";
$port="3306";          

?>


<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}


.white
{
  background-color: activecaption;
}
.dark
{
  background-color: bisque;  
}
</style>
</head>
<body class="<?php echo $_COOKIE["theme"] ?>">

    

<table align="center">
    <tr>
        <td colspan="4"> Xin Chào : <?php echo $_SESSION["username"] ?> | <a href="exit.php"> Thoát </a> 
        </td>
        <td>Lần truy cập cuối cùng : <?php echo $_COOKIE["lastacc"] ?></td>
        <td>Theme là : <?php echo $_COOKIE["theme"] ?></td>
    </tr>
    <tr>
        <td colspan="6"><h2>Danh sách sản phẩm </h2> </td>
    </tr>
    
  <tr>
    <th>ID</th>
    <th>ProductID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Status</th>
    <th>Hành động</th>
  </tr>
  
  <?php   
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                                             

    $stmt = $conn->prepare("Select * from product order by Id desc");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
   
  ?>

 <?php  
    $i=0;
    
    $result=$stmt->fetchAll();  
    
   foreach($result as $k=>$v)
   {
       global $i;
       $i++;
  ?>
       <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $v["Id"]; ?></td>
          <td><?php echo $v["Name"]; ?></td>
          <td><?php echo $v["Price"]; ?></td>
          <td><?php echo $v["Status"]; ?></td>                    
          
          <td><a href="/phpproject1/product_edit.php?Id=<?php echo $v["Id"]; ?>">Edit</a> | <a href="/phpproject1/product_delete.php?Id=<?php echo $v["Id"]; ?>"> Delete <a/></td>
        </tr>
  <?php
  }
  ?>
  
  <tr>
        <td style="text-align:right" colspan="6"> <a href="/phpproject1/product.php">Quay trở lại </a> </td>
    </tr>
 
</table>


</body>
</html>

