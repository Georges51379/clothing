<?php
session_start();
require "db-connection.php";
$adm_email = "";
$errors = array();
error_reporting(0);

// CATEGORY SECTION

// get all categorries
$getAllCategoryQuery = mysqli_query($con, "SELECT * FROM category");
$allCategoryRows = mysqli_fetch_all($getAllCategoryQuery, MYSQLI_ASSOC);


// get specific category
$getSpecificCategoryQuery = mysqli_query($con, "SELECT * FROM category WHERE cat_token = '".$GET['category']."'");
$specificCategoryRws = mysqli_fetch_array($getSpecificCategoryQuery);

// add category
if(isset($_POST['addCategory'])){

    $name = $_POST['name'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $catToken = bin2hex(random_bytes(25));

    $insertCategoryQuery = mysqli_query($con, "INSERT INTO category (cat_token, cat_name, cat_description, cat_status) 
        VALUES ('$catToken', '$name', '$description', '$status')"); 

    header('location: admin/category.php');
    exit();
}

//delete category 
if(isset($_GET['catID'])){
    $categoryToken = $_GET['catID'];

    $deleteCategoryQuery = mysqli_query($con, "UPDATE category SET cat_status = 'Inactive' WHERE cat_token = '$categoryToken'");

    header('location: category.php');
    exit();
}


?>