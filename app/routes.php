<?php

$app->post('/', "App\Controller\PostsController:updateOne");

$app->post('/new', "App\Controller\PostsController:addOne");

?>
