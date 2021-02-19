<?php 

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
    <form action="/PhpProject1/product.php" method="post">
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
    </form>
    
</div>
</body>
</html>

