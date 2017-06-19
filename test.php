<?php

setcookie("test_cookie", "test", time() + 3600, '/');
$tt = $_COOKIE['test_cookie'];



echo $tt;



?>