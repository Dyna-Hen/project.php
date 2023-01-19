<?php
// require '../../database/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['title']) and !empty($_POST['description'])) {
       
        $statement = $connection->prepare("insert into posts (title, description) values (:title, :description)");
        $statement->execute([
        ':title' => $_POST['title'],
        ':description' =>  $_POST['description']
    ]);
        
    header('location: /post');
    }
}

 require "../../views/partials/head.php";

 require "../../functions.php";

 require "../../views/partials/nav.php";

 require "../../views/post/create.view.php";

 require "../../views/partials/footer.php" ?>