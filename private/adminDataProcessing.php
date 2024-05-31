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


if (isset($_GET['editCatID'])) {
    $editCatID = $_GET['editCatID'];
    $getSpecificCategoryQuery = mysqli_query($con, "SELECT * FROM category WHERE cat_token = '$editCatID'");
    $specificCategoryRws = mysqli_fetch_array($getSpecificCategoryQuery);
}

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


// edit category
if (isset($_POST['editCategory'])) { // Use the correct POST name
    $name = $_POST['name'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $token = $_POST['cat_token'];
    $currentdate = date('Y-m-d');

    $editCategoryQuery = mysqli_query($con, "UPDATE category SET cat_name='$name', cat_description='$description', 
    cat_status='$status', cat_update_date='$currentdate' WHERE cat_token='$token'");

    if ($editCategoryQuery) {
        header('Location: admin/category.php'); // Redirect to the correct location
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($con); // Display an error if the query fails
    }
}

?>