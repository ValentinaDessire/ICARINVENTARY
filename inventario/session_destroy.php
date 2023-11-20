<?php
session_start();

$destroy=session_destroy();
if ($destroy==true) {
    header("Location: index.php");
}

?>