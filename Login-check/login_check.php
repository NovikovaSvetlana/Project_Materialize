<?php
    echo "<pre>";
    var_dump($_POST);
    echo "<?pre>";

$data = include_once "login_check_array.php";
$_GLOBALS[count] = true;

foreach ($data as $arr) {
   $arrLength = count($data);
if ($_POST['login'] == $arr['login'] ) {
    if($_POST['password'] == $arr['password']) {
        echo "Registration is succesful";
        $_GLOBALS[count] = false;
        break;
    } else {
        echo "try to another password";
        $_GLOBALS[count] = false;
    }
} 
}

    if ($_GLOBALS[count] == true) {
         echo "There is no such login";
    }
    $count = true;
?>