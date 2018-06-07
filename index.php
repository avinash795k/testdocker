<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/', function (Request $request, Response $response, array $args) {
    //$name = $args['name'];
    $response->getBody()->write("Hi avinash kumar. I am feeling great");

    return $response;
});
$app->run();
