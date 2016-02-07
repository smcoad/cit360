<?php
function get_breed() {
    global $db;
    $query = 'SELECT * FROM breed
              ORDER BY breed_id';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_breed_name($breed_id) {
    global $db;
    $query = 'SELECT * FROM breed
              WHERE breed_id = :breed_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':breed_id', $breed_id);
    $statement->execute();    
    $breed = $statement->fetch();
    $statement->closeCursor();    
    $breed_name = $breed['breed_name'];
    return $breed_name;
}
