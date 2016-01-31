<?php include '../view/header.php'; ?>
<main>
    <h2>Edit Your Cat</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($cat_edit as $cat) : ?>
            <tr>
                <td><?php echo $cat['cat_name']; ?></td>
                <td><?php echo $cat['cat_age']; ?></td>
                <td><?php echo $cat['cat_gender']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_cat">
                    <input type="hidden" name="cat_id"
                           value="<?php echo $cat['cat_id']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="edit_page">    
                    <input type="hidden" name="cat_id"
                           value="<?php echo $cat['cat_id']; ?>">
                    <input type="submit" value="Edit">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <p>
        <a href="../index.php">Home Page</a>
    </p>
</main>
<?php include '../view/footer.php'; ?>