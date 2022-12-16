<?php
session_start();
session_unset();
session_destroy();
header("Location:http://localhost/Assignment1/admin/");


?>
