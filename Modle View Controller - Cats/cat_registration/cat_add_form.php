<?php include '../view/header.php'; ?>
<main>
    <h2>Add Your Cat.</h2>
    <form action="index.php" method="post" id="cat_add_form">
        <input type="hidden" name="action" value="add_cat" >
        <label>Cats Name:</label><br>
        <input type="text" name="name" required/>
        <br>
        <br>
        <label>Age:</label><br>
        <input type="text" name="age" required/>
        <br>
        <br>
        <label>Gender:</label><br>
        <input type="radio" name="gender" value="M" required/>Male
        <br>
        <input type="radio" name="gender" value="F"/>Female
        <br>
        <br>
        <label>Breed:</label><br>
            <select name="breed">
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
        <input type="submit" value="Register Cat"/>
        <br>
    </form>
    <p>
        <a href="../index.php">Home Page</a>
    </p>
    
    
    
</main>
<?php include '../view/footer.php'; ?>
