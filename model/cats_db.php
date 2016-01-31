<?php

function get_cats() {
    global $db;
    $query = 'SELECT * FROM cats
              ORDER BY cat_id';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}
function add_cat($breed, $age, $name, $gender) {
    global $db;
    $query = 'INSERT INTO cats
                 (cat_age, cat_name, cat_gender, breed)
              VALUES
                 (:age, :name, :gender, :breed)';
    $statement = $db->prepare($query);
    $statement->bindValue(':age', $age);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':gender', $gender);
    $statement->bindValue(':breed', $breed);
    $statement->execute();
    $statement->closeCursor();
}
function get_cat_name($name, $breed, $age) {
    global $db;
    $query = 'SELECT * FROM cats
              WHERE cat_name = :name
              AND breed = :breed
              AND cat_age = :age';
    $statement = $db->prepare($query);
    $statement->bindValue(":name", $name);
    $statement->bindValue(":breed", $breed);
    $statement->bindValue(":age", $age);
    $statement->execute();
    $cat_final = $statement->fetch();
    return $cat_final;
}
function delete_cat($cat_id) {
    global $db;
    $query = 'DELETE FROM cats
              WHERE cat_id = :cat_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':cat_id', $cat_id);
    $statement->execute();
    $statement->closeCursor();
}
function get_cat_info($cat_id) {
    global $db;
    $query = 'SELECT * FROM cats
              WHERE cat_id = :cat_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":cat_id", $cat_id);
    $statement->execute();
    $cat_info = $statement->fetch();
    $statement->closeCursor();
    return $cat_info;
}
function update_cat($cat_id, $breed, $name, $age, $gender) {
    global $db;
    $query = 'UPDATE cats
              SET cat_name = :name,
                cat_gender = :gender,
                cat_age = :age,
                breed = :breed
              WHERE cat_id = :cat_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':cat_id', $cat_id);
    $statement->bindValue(':breed', $breed);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':age', $age);
    $statement->bindValue(':gender', $gender);
    $statement->execute();
    $statement->closeCursor();
}
?>