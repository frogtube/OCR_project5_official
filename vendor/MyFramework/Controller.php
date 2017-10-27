<?php
/**
 * Created by PhpStorm.
 * User: ugo-fixe
 * Date: 04/10/2017
 * Time: 14:56
 */
namespace MyFramework;

class Controller
{
    protected $viewPath;
    protected $template;

    public function startTwig($viewPath, $view, $variables, $title)
    {
        $loader = new \Twig_Loader_Filesystem($viewPath);
        $twig = new \Twig_Environment($loader, [
            'cache' => false // ROOT . '/tmp' in production
        ]);

        echo $twig->render($view, array(
            'title' => $title,
            'posts' => $variables
        ));

    }

    public function notFound()
    {
        header('HTTP/1.0 404 Not Found');
        die('Page not found');
    }
}