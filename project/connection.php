<?php
session_start();
$localhost = 'localhost';
$username = 'root';
$password = '';
$dbname = 'users_db';
$conn = new mysqli($localhost,$username,$password,$dbname);