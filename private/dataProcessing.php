<?php
session_start();
require "db-connection.php";
$usr_email = "";
$subcategory = '';
$errors = array();
error_reporting(0);

// check for GET for category
if(isset($_GET['s'])){
    $subcategory = $_GET['s'];
}


// get categories
$getCategoryQuery = mysqli_query($con, "SELECT * FROM category WHERE cat_status = 'Active'");

?>