<?php 

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
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

    <h2>Danh sách sản phẩm </h2> 

<table width="80%">
  <tr>
    <th>ID</th>
    <th>ProductID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Status</th>
  </tr>
  
  <?php   
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                                             

    $stmt = $conn->prepare("Select * from product");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    $i=0;
   foreach($stmt->fetchAll() as $k=>$v)
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
        </tr>
  <?php
  }
  ?>
  
  
 
</table>
<div>
    <br/>
    <a href="/phpproject1/product.php">Quay trở lại </a>
</div>

</body>
</html>

