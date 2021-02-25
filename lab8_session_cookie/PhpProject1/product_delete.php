
<?php 
function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

$host="35.229.164.85";
$username="lvtien";
$password="Tien1234@";
$dbname="Test";
$port="3306";          

?>


<?php

?>

  
  <?php   
  
   $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                                             

   $para1=(int)htmlspecialchars($_GET["Id"]) ;
   
   $stmt = $conn->prepare("Delete from product where Id=:Id");    
   $stmt->bindParam(':Id', $para1);
   
   $stmt->execute();
   redirect("http://localhost:8087/PhpProject1/product_list.php");
 
 ?>