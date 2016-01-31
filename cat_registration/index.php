<?php
require('../model/database.php');
require('../model/cats_db.php');
require('../model/breed_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'cat_registration';
    }
}

if ($action == 'cat_registration') {
    $breed = get_breed();
    include('cat_add_form.php');
}
else if ($action == 'add_cat') {
    $breed= filter_input(INPUT_POST, 'breed');
    $age = filter_input(INPUT_POST, 'age');
    $name = filter_input(INPUT_POST, 'name');
    $gender = filter_input(INPUT_POST, 'gender');
    if ($age == NULL || $name == NULL || $gender == NULL) {
        $error = "All fields are required. <a href='.'>Back</a>";
        include('../error/error.php');
    } else { 
        add_cat($breed, $age, $name, $gender);
            if ($name && $breed && $age) {
            $cat_final = get_cat_name($name, $breed, $age);
            if ( $gender == 'M' ) {
            $gender_message = 'male';
            } else if ( $gender == 'F') {
            $gender_message = 'female';
            }
            include('cat_final_form.php');
            }
        
    }
}
else if ($action == 'cat_edit_form') {
    $cat_id = filter_input(INPUT_POST, 'cat_id', 
            FILTER_VALIDATE_INT);
    $cat_edit = get_cats();
    include ('cat_edit_form.php');
}
else if ($action == 'edit_page') {
    $cat_id = filter_input(INPUT_POST, 'cat_id', 
            FILTER_VALIDATE_INT);
    $cat_info = get_cat_info($cat_id);
    include ('edit_page.php');

} else if ($action == 'edit_cat') {
    $cat_id = filter_input(INPUT_POST, 'cat_id', 
            FILTER_VALIDATE_INT);
    $breed = filter_input(INPUT_POST, 'breed');
    $name = filter_input(INPUT_POST, 'name');
    $age = filter_input(INPUT_POST, 'age');
    $gender = filter_input(INPUT_POST, 'gender'); 
        update_cat($cat_id, $breed, $name, $age, $gender);
        header("Location: .?action=cat_edit_form");
    
}
else if ($action == 'delete_cat') {
    $cat_id = filter_input(INPUT_POST, 'cat_id', 
            FILTER_VALIDATE_INT);
        delete_cat($cat_id);
        header("Location: .?action=cat_edit_form");
    }
?> 