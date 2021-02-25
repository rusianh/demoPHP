<?php

function redirect($url, $statusCode = 303) {
    header("Location: " .$url, true, $statusCode);
    exit();
}

// $name = $_POST['fname'];
// $password = $_POST['fpassword'];
#logic accept to login
function validate_user($name, $password){
if(isset($name) && isset($password)) {
    $user_info = array("vva1994|123|admin", "client|123|user");

    $enable_login = false;

    for($i = 0; $i < count($user_info); $i++) {
        $user = $user_info[$i];
        $user_spilit = explode("|", $user);
        $u = $user_spilit[0];
        $p = $user_spilit[1];
        $r = $user_spilit[2];

        if(($name == $u) && ($password == $p)) {
            $enable_login = true;
        }
    }
    
    if($enable_login) {
        redirect("http://aptech.com:83/demoPHP/lab06_practise/product.php");
    }
    else {
        echo("acces denied");
    }
}
}

function main() {
    $name = $_POST['fname'];
$password = $_POST['fpassword'];
    // validate_user($_POST['fname'], $_POST['fpassword']);
    validate_user($name, $password);
}

main();
?>