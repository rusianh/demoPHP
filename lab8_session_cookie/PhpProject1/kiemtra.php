<?php

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

if(isset($_POST['fname']) && isset($_POST['fpassword']))
    {    
            session_start();
            $userInfo = array("Tien|123|admin","MrA|4|user");
            $uname=$_POST['fname'];
            $upass=$_POST['fpassword'];
                                  
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
                    
                    $_SESSION["username"]=$u;
                    $_SESSION["enableLogin"]=$enableLogin;
                                        
                    $d=date("Y-m-d H:i:s");
                    
                    setcookie("lastacc", $d, time() + (86400 * 30), "/"); // 86400 = 1 day
                    setcookie("theme", "white", time() + (86400 * 30), "/"); // 86400 = 1 day
                }       
            }
          
            if($enableLogin)
            {                            
                redirect("http://aptech.com:83/demoPHP/lab8_session_cookie/PhpProject1/product.php");
            }
            else
            {
                echo 'Access Denied';
            }

    }

?>

