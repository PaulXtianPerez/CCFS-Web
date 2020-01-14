<?php
if(!$_POST['page']) die("0");

$page = (String)$_POST['page'];

if(file_exists($page.'.php'))
include($page.'.php');

else echo 'Page does not exist!';

 ?>
