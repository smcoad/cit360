<?php include '../view/header.php'; ?>
<main>
    <h1>Edit <?php echo $cat_info['cat_name']; ?></h1>
    <form class="final_form" action="index.php" method="post" id="edit_page">
        <input type="hidden" name="action" value="edit_cat">
        <label>Cats Name:</label><br>
        <input type="text" name="name"  value="<?php echo $cat_info['cat_name']; ?>"/>
        <br>
        <br>
        <label>Age:</label><br>
        <input type="text" name="age" value="<?php echo $cat_info['cat_age']; ?>"/>
        <br>
        <br>
        <label>Gender:</label><br>
        <input type="radio" name="gender" value="M"/>Male
        <br>
        <input type="radio" name="gender" value="F"/>Female
        <br>
        <br>
        <label>Breed:</label><br>
            <input type="hidden" name="cat_id" value="<?php echo $cat_info['cat_id']; ?>">
            <select name="breed" >
                <option value="Persian">Persian</option>
                <option value="Exotic Shorthair Cat">Exotic Shorthair Cat</option>
                <option value="Maine Coon">Maine Coon</option>
                <option value="Ragdoll">Ragdoll</option>
                <option value="British Shorthair">British Shorthair</option>
                <option value="Abyssinian">Abyssinian</option>
                <option value="American Shorthair">American Shorthair</option>
                <option value="Sphynx">Sphynx</option>
                <option value="Siamese">Siamese</option>
                <option value="Bengal">Bengal</option>
            </select>
        <br>
        <br>
        <input type="submit" value="Save Edits"/>
        <br>
    </form>
    <div class="final_image">
    <img src="../images/<?php echo $cat_info['breed']; ?>.jpg"
                     alt="<?php echo $cat_info['breed']; ?>">
    </div>
    <div class="final_home_link">
    <a href=".?action=cat_edit_form">Back</a><br>
    <a href="../index.php">Home Page</a>    
    </div>

</main>
<?php include '../view/footer.php'; ?>