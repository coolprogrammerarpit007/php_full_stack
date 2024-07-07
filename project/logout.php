<?php 
require "functions.php";

// destroying the ssion
session_destroy();
session_unset();
session_regenerate_id();
header('Location: login.php');
die;