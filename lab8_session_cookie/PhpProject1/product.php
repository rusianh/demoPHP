<?php 

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

$error = array();
$data = array();


if (!empty($_POST['product_addnew']))
{
    
$data['fid'] = isset($_POST['fid']) ? $_POST['fid'] : '';
$data['fnameproduct'] = isset($_POST['fnameproduct']) ? $_POST['fnameproduct'] : '';
$data['fprice'] = isset($_POST['fprice']) ? $_POST['fprice'] : '';    
    
$fproduct = $_POST["fproduct"];
    
    if (empty($data['fid'])){
            $error['fid'] = 'Bạn chưa nhập ID';
        }

    if (empty($data['fnameproduct'])){
            $error['fname'] = 'Bạn chưa nhập Tên Sản phẩm';
        }

     if (empty($data['fprice'])){
            $error['fprice'] = 'Bạn chưa nhập Giá';
        }               
    

    if (!$error)
    {        
        echo 'ID sản phẩm là '. $data['fid'] . '<br/>';
        echo 'Tên sản phẩm là '. $data['fnameproduct'] . '<br/>';
        echo 'Giá sản phẩm là '. $data['fprice'] . '<br/>';
        echo 'Trạng thái sản phẩm là '. $fproduct . '<br/>';        
        
        $did=(int) $data['fid'];
        $dname=(string) $data['fnameproduct'];
        $dprice=(float) $data['fprice'];
        $dstatus=(string) $fproduct;
                
        $host="35.229.164.85";
        $username="lvtien";
        $password="Tien1234@";
        $dbname="Test";
        $port="3306";    
        
        
        
    
//         try {
                $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                                             
                                
                //$sql = "insert into product values($did,'$dname','$dprice','$dstatus');";
                
                $stmt = $conn->prepare("INSERT INTO Product (Id,Name,Price,Status) VALUES (:Id, :Name, :Price, :Status)");
                $stmt->bindParam(':Id', $did);
                $stmt->bindParam(':Name', $dname);
                $stmt->bindParam(':Price', $dprice);
                $stmt->bindParam(':Status', $dstatus);                               
                
                $stmt->execute();
                echo "New record created successfully";
                redirect("http://aptech.com:83/demoPHP/lab8_session_cookie/PhpProject1/product_list.php");

//                } catch (PDOException $e) {
//                echo 'PDO Exception: ' . $e->getMessage();
//                exit();
          }
        
        
       

        $conn = null;
        
    }
//}


   
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
    <form action="http://aptech.com:83/demoPHP/lab8_session_cookie/PhpProject1/product.php" method="post">
        <h2 class="text-center">Sản phẩm</h2>       
        <div class="form-group">
            <input type="text" name="fid" class="form-control" placeholder="ID" value="<?php echo isset($data['fid']) ? $data['fid'] : ''; ?>">            
            <?php echo isset($error['fid']) ? $error['fid'] : ''; ?>
        </div>
        <div class="form-group">
            <input type="text" name="fnameproduct" class="form-control" placeholder="Tên sản phẩm" value="<?php echo isset($data['fnameproduct']) ? $data['fnameproduct'] : ''; ?>">
            <?php echo isset($error['fname']) ? $error['fname'] : ''; ?>
        </div>                      
        
        <div class="form-group">
            <input type="text" name="fprice" class="form-control" placeholder="Giá" value="<?php echo isset($data['fprice']) ? $data['fprice'] : ''; ?>">
            <?php echo isset($error['fprice']) ? $error['fprice'] : ''; ?>
        </div>   
                
        <div class="form-group">
            <select name="fproduct" id="sproduct">
               <option <?php if (isset($fproduct) && $fproduct=="Hiện") echo "selected";?>>Hiện</option>
               <option <?php if (isset($fproduct) && $fproduct=="Ẩn") echo "selected";?>>Ẩn</option>        
            </select>
        </div>  
        
        <div class="form-group">            
            <input type="submit" name="product_addnew" class="btn btn-primary btn-block" value="Lưu Thông Tin"/>
        </div>        
        
        <div>
            <a href="/PhpProject1/product_list.php">Xem danh sách sản phẩm</a>
        </div>
    </form>
    
</div>
</body>
</html>

