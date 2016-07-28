<?php
use Zend\Expressive\Application;
use Zend\Expressive\Twig\TwigRenderer;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\TemplatedErrorHandler;
use Zend\Expressive\Router;
use Zend\Expressive\Emitter;
use Zend\Diactoros\Response\SapiEmitter;
use Zend\ServiceManager\ServiceManager;

require 'vendor/autoload.php';

$config       = include 'config/templates.php';
$loader       = new Twig_Loader_Filesystem($config['templates']['paths']);
$twig         = new Twig_Environment($loader, $config['twig']);
$renderer     = new TwigRenderer($twig);
$finalHandler = new TemplatedErrorHandler($renderer, '404', '500');

$container = new ServiceManager();
$router    = new Router\FastRouteRouter();
$emitter   = new Emitter\EmitterStack();

$emitter->push(new SapiEmitter());

$app = new Application($router, $container, $finalHandler, $emitter);

$app->get('/', function($request, $response, $next) use ($twig) {
    return new HtmlResponse($twig->render('home.html'));
});
$app->pipe('/',function($error, $req, $resp, $next) {
    var_dump($error,$req,$resp,$next);
});

$app->pipeRoutingMiddleware();
$app->pipeDispatchMiddleware();


$app->run();
