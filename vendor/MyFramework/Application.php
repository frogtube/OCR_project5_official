<?php
/**
 * Created by PhpStorm.
 * User: ugo-fixe
 * Date: 03/10/2017
 * Time: 14:17
 */

namespace MyFramework;

use Posts\PostsController;
use MyFramework\Router\Router;

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
            $homePath = ROOT . '/App/Home.php';
            require $homePath;
        });

        // Display the full list of articles
        $router->get('/posts', function() {
            $controller = new PostsController();
            $controller->index();
        });

        // Display the selected article
        $router->get('/posts/:slug', function() {
            $controller = new PostsController;
            $controller->show();
        });

        // Form for modifying an article
        $router->get('/posts/edit/:slug', function() {
            $controller = new PostsController;
            $controller->update();
        });

        // Saving modifications of an article to database
        $router->post('/posts/edit/:slug', function() {
            $controller = new PostsController;
            $controller->save();
        });

        // Form to create a new article
        $router->get('/new', function() {
            $controller = new PostsController;
            $controller->create();
        });

        // Adding a new article to database
        $router->post('/new', function() {
            $controller = new PostsController;
            $controller->add();
        });

        // Deleting an article from database
        $router->post('/posts/:slug', function() {
            $controller = new PostsController;
            $controller->delete();
        });

        $router->run();
    }

    public function run() { $this->getController(); }

    public function name() { return $this->name; }
}