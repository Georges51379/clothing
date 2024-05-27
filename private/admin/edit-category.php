<?php require_once "../adminDataProcessing.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Category Admin Panel</title>
    <?php include 'include/head.inc.php'; ?>
</head>
<body>
<?php include 'include/sidebar.inc.php'; ?>

<div class="content">
<h1>edit Category</h1>
        <div class="card">

        <form action="../adminDataProcessing.php" method="POST" class="edit-category-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php echo $specificCategoryRws['cat_name'];?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4" value="<?php echo $specificCategoryRws['cat_description']; ?>" required></textarea>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="Active" <?php if ($specificCategoryRws['cat_status'] == 'Active') echo 'selected'; ?>>Active</option>
                    <option value="Inactive" <?php if ($specificCategoryRws['cat_status'] == 'Inactive') echo 'selected'; ?>>Inactive</option>
                </select>
            </div>
            <input type="hidden" name="cat_token" value="<?php echo $specificCategoryRws['cat_token']; ?>">

            <button type="submit" name="editCategory">Submit</button>
</form>
        </div>

</div>
</body>
</html>