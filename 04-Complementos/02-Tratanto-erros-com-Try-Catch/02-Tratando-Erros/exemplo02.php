<?php 
# nega os notices
error_reporting(E_ALL & ~E_NOTICE);
$name = $_GET['name'];
echo $name;