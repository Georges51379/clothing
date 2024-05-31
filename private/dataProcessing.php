<?php
session_start();
require "db-connection.php";
$usr_email = "";
$errors = array();
error_reporting(0);

// get categories

$getWomenCategoryQuery = mysqli_query($con, "SELECT * FROM category WHERE cat_status = 'Active' AND cat_description = 'women'");
$womenCategoryRws = mysqli_fetch_array($getWomenCategoryQuery);
$womenCategory = $womenCategoryRws['cat_name'];

$getMenCategoryQuery = mysqli_query($con, "SELECT * FROM category WHERE cat_status = 'Active' AND cat_description = 'men'");
$menCategoryRws = mysqli_fetch_array($getMenCategoryQuery);
$menCategory = $menCategoryRws['cat_name'];
?>