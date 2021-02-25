<?php
session_start();

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}



?>




<?php
// remove all session variables
session_unset();
// destroy the session
session_destroy();

redirect("http://localhost:8087/PhpProject1/login.php");

?>