<?php

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

if(isset($_GET['fname']) && isset($_GET['fpassword']))
    {
            $u=$_GET['fname'];
            $p=$_GET['fpassword'];

            if(($u=="vt") && ($p=="1"))
            {                            
                echo '<h1>'. 'Xin chào:' . $u .'</h1>';
            }
            else
            {
                redirect("http://google.com");
            }

    }

?>

