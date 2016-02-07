<?php include '../view/header.php'; ?>
<main>
    <form class="final_form">
            <h2>Your Cat</h2>
            <?php echo $cat_final['cat_name']?><br>
            <?php echo $gender_message ?><br>
            <?php echo $cat_final['breed']?><br>            
            age <?php echo $cat_final['cat_age']?> year(s).<br>
        </form>
    <div class="final_image">
    <img src="../images/<?php echo $cat_final['breed']; ?>.jpg"
                     alt="<?php echo $cat_final['breed']; ?>">
    </div>
    <div class="final_home_link">
    <a href=".?action=cat_edit_form">Edit</a><br>
    <a href="../index.php">Home Page</a>    
    </div>
</main>
<?php include '../view/footer.php'; ?>
