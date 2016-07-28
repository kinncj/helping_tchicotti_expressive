<?php
use Zend\Expressive\AppFactory;
use Zend\Expressive\Twig\TwigRenderer;
use Zend\Diactoros\Response\HtmlResponse;
try {
    chdir(dirname(__DIR__));

    require 'vendor/autoload.php';

    $loader = new Twig_Loader_Array(include 'config/templates.php');
    $twig = new Twig_Environment($loader);

    $app = AppFactory::create();

    $renderer = new TwigRenderer($twig);

    $app->get('/', function($request, $response, $next) use ($renderer) {
        // $response->getBody()->write('Hello World');
        // return $response;

        return new HtmlResponse($renderer->render('app:home'));
    });
    $app->pipe('/',function($error, $req, $resp, $next) {
        var_dump($error,$req,$resp,$next);
    });

    $app->pipeRoutingMiddleware();
    $app->pipeDispatchMiddleware();


    $app->run();
} catch (Exception $e) {
    print_r($e);
}
