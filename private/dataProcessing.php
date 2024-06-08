<?php
session_start();
require "db-connection.php";
$usr_email = "";
$errors = array();
error_reporting(0);

// get categories

$getCategoryQuery = mysqli_query($con, "SELECT * FROM category WHERE cat_status = 'Active'");

?>