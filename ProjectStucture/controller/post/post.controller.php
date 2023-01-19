<?php

$heading = "Post Page";

$statement = $connection->prepare("select * from posts");
$statement->execute();
$posts = $statement->fetchAll();

require "views/partials/head.php"; 

require "views/partials/nav.php" ;

require "views/post/post.view.php" ;

require "views/partials/footer.php" ?>