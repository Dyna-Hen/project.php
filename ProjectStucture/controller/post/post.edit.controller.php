<?php

require "database/database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['title']) and !empty($_POST['description'])) {
        $statement = $connection->prepare("update posts set title = :title, description = :description where id = :id");
        $statement->execute([
            ':title' => $_POST['title'],
            ':description' => $_POST['description'],
            ':id' => $_POST['id']

        ]);

        header('location: /post');
    }
}

require "views/partials/head.php";
// require "functions.php";
require "views/partials/nav.php";

    $id = $_GET["id"] ? $_GET["id"] : null;
    if (isset($id)):
       
       $statement = $connection->prepare('select * from posts where id = :id');
       $statement->execute([':id' => $id]);
       $post = $statement->fetch();


    require "views/post/edit.view.php";


    endif;
    require "views/partials/footer.php" 
?>