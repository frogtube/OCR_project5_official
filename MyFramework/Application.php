<?php
/**
 * Created by PhpStorm.
 * User: ugo-fixe
 * Date: 03/10/2017
 * Time: 14:17
 */

namespace MyFramework;


use MyFramework\Router\Router;

class Application
{
    protected $name;
    protected $HTTPResponse;
    protected $HTTPRequest;

    public function __construct()
    {
        $this->name = '';
        $this->HTTPResponse = new HTTPRequest;
        $this->HTTPRequest = new HTTPResponse ;
    }

    public function getController()
    {
        $router = new Router($_GET['url']);
        $router->get('/', function() { echo 'Homepage'; });
        $router->get('/posts', function() { echo 'Tous les articles'; });
        $router->get('/posts/:slug', function($id) {
            ?>
            <form action="" method="post">
                <input  type="text" name="name">
                <button type="submit">Envoyer</button>
            </form>

            <?php
        });

        $router->post('/posts/:slug', function($id) { echo 'Poster pour l\'article ' . $id . print_r($_POST, true); });

        $router->run();
    }

    public function run() { echo '123'; }

    public function HTTPResponse()
    {
        return $this->HTTPResponse;
    }

    public function HTTPRequest()
    {
        return $this->HTTPRequest;
    }

    public function name()
    {
        return $this->name;
    }
}