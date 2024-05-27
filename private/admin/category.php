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
        <h1>Category Admin Panel</h1>
        <div class="card">
        <table class="datatable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Create Date</th>
                    <th>Update Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($allCategoryRows as $category) {  ?>

                <tr>
                    <td><?php echo $category['cat_name']; ?></td>
                    <td><?php echo $category['cat_description']; ?></td>
                    <td><?php echo $category['cat_status']; ?></td>
                    <td><?php echo $category['cat_create_date']; ?></td>
                    <td><?php echo $category['cat_update_date']; ?></td>
                    <td>
                    <a href="edit-category.php?editCatID=<?php echo $category['cat_token']; ?>">Edit</a> | 
                    <a href="category.php?catID=<?php echo $category['cat_token']; ?>" onclick="return confirm('Are you sure you want to delete this category?')">Delete</a>
                    </td>
                    
                </tr>
                <?php } ?>
            </tbody>
        </table>
</div><!--card-->
<div class="card">
        <div class="form-container">
            <h1>Add/Edit Category</h2>
            <form method="post" action="../adminDataProcessing.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
                
                <label for="status">Status:</label>
                <select id="status" name="status" required>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
                
                <button type="submit" name="addCategory">Submit</button>
            </form>
        </div>
</div><!--card-->
    </div>
</body>
</html>
