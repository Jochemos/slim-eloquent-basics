<?php

namespace App\Controller;

use App\Config;

use App\Model\Posts as Posts;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class PostsController {

    public function updateOne(Request $request, Response $response, array $args) {

      $post = Posts::where('id', '1')->get();

      $post->toQuery()->update([
          'author' => 'Lily',
      ]);

      $response->getBody()->write("$post");

      return $response;

    }

    public function addOne(Request $request, Response $response, array $args) {


      $newData = array(
        'author' => 'Harry',
        'body' => 'I am Harry.'
      );

      Posts::create($newData);

    }

}


?>
