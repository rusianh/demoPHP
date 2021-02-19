<?php

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}


if(isset($_GET['fname']) && isset($_GET['fpassword']))
    {    
            $userInfo = array("Tien|123|admin","MrA|4|user");
            $uname=$_GET['fname'];
            $upass=$_GET['fpassword'];
                                  
            $enableLogin=false;
            
            for($i=0;$i<count($userInfo);$i++)
            {
                $info=$userInfo[$i];
                $ui = explode("|", $info);
                $u=$ui[0];
                $p=$ui[1];
                $r=$ui[2];
                
                if(($uname==$u) && ($upass==$p))
                {
                    $enableLogin=true;
                }       
            }
          
            if($enableLogin)
            {                            
                redirect("http://localhost:8080/PhpProject1/product.php");
            }
            else
            {
                echo 'Access Denied';
            }

    }

?>

