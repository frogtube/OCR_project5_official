<?php
/**
 * Created by PhpStorm.
 * User: ugo-fixe
 * Date: 03/10/2017
 * Time: 14:17
 */

namespace App;


use MyFramework\Router\Router;
use Post\PostController;
use App\Defaut\DefaultController;

class Application
{
    protected $name;

    public function __construct()
    {
        $this->name = '';
    }

    public function getController()
    {
        // Router Initialization
        $router = new Router($_GET['url']);

        // Homepage
        $router->get('/', function() {
            $controller = new DefaultController();
            $controller->home();
        });

        // Display the full list of articles
        $router->get('/posts', function() {
            $controller = new \Post\PostController();
            $controller->index();
        });

        // Display the selected article
        $router->get('/posts/:slug', function() {
            $controller = new PostController;
            $controller->show();
        });

        // Form for modifying an article
        $router->get('/posts/edit/:slug', function() {
            $controller = new PostController();
            $controller->update();
        });

        // Saving modifications of an article to database
        $router->post('/posts/edit/:slug', function() {
            $controller = new PostController;
            $controller->save();
        });

        // Form to create a new article
        $router->get('/new', function() {
            $controller = new PostController;
            $controller->create();
        });

        // Adding a new article to database
        $router->post('/new', function() {
            $controller = new PostController;
            $controller->add();
        });

        // Deleting an article from database
        $router->post('/posts/:slug', function() {
            $controller = new PostController;
            $controller->delete();
        });

        $router->run();
    }

    public function run() { $this->getController(); }

    public function name() { return $this->name; }
}