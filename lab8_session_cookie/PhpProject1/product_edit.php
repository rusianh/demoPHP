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

$conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                                             

//$para1=(int)htmlspecialchars($_GET["Id"]) ;
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$x = parse_url($url);
$para1=explode("=",$x['query']);
$para1=(int) $para1[1];


$stmt = $conn->prepare("Select * from product where Id=:Id");
$stmt->bindParam(':Id', $para1);

$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$result=$stmt->fetchAll();  

$did=(int)$result[0]['Id'];     
$dname=(string) $result[0]['Name'];
$dprice=(float) $result[0]['Price'];     
$dstatus=(string) $result[0]['Status'];  

$conn = null;


if (!empty($_POST['product_update']))
{    
    $data['fnameproduct'] = isset($_POST['fnameproduct']) ? $_POST['fnameproduct'] : '';
    $data['fprice'] = isset($_POST['fprice']) ? $_POST['fprice'] : '';   
    $dstatus = $_POST["fproduct"];           
    
    try {
              $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                                             

              $stmt = $conn->prepare("UPDATE Product Set Name=:Name,Price=:Price,Status=:Status where Id=:Id");

              $stmt->bindParam(':Id', $did);
              $stmt->bindParam(':Name', $data['fnameproduct']);
              $stmt->bindParam(':Price', $data['fprice']);
              $stmt->bindParam(':Status', $dstatus);                               

              $stmt->execute();
              echo "Update successfully";
              redirect("http://localhost:8087/PhpProject1/product_list.php");

         } catch (PDOException $e) {
                  echo 'PDO Exception: ' . $e->getMessage();
                  exit();
         }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> Aptech | Product Add New</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.product-form {
    width: 340px;
    margin: 50px auto;
    font-size: 15px;
}
.product-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.product-form h2 {
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
<div class="product-form">
    
   
    <form action="/PhpProject1/product_edit.php?Id=<?php echo $did ?>" method="post">
        <h2 class="text-center">Cập nhật Sản phẩm</h2>                            
               
        
        <div class="form-group">
            <input type="text" name="fnameproduct" class="form-control" placeholder="Tên sản phẩm" value="<?php echo $dname ?>">            
        </div>                      
        
        <div class="form-group">
            <input type="text" name="fprice" class="form-control" placeholder="Giá" value="<?php echo $dprice ?>">            
        </div>   
                
        <div class="form-group">       
            <select name="fproduct" id="sproduct">          
               <option value="Hiện" <?php if($dstatus=="Hiện") echo 'selected="selected"'; ?>>Hiện</option>
               <option value="Ẩn" <?php if($dstatus=="Ẩn") echo 'selected="selected"'; ?>>Ẩn</option>
            </select>         
        </div>  
        
        <div class="form-group">            
            <input type="submit" name="product_update" class="btn btn-primary btn-block" value="Lưu Thông Tin"/>
        </div>       
               
        
        <div>
            <a href="/PhpProject1/product_list.php">Xem danh sách sản phẩm</a>
        </div>
    </form>
    
</div>
</body>
</html>
