<?php
error_reporting(0); 
$session_i = $_SESSION['cliente'];

if($session_i == null || $session_i == "" ) {
    include("../nav/nav.php");
} else {
    include("../nav/nav_s.php");
}

?>