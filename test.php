<?php
    echo "<pre>";
    var_dump($_GET);
    echo "<?pre>";

if(isset($_GET["agree"]) == "on") {
    echo "ok";
} else {
        echo "error";
    }
echo '<h3>Your city is '.$_GET['city'].'</h3>';

?>