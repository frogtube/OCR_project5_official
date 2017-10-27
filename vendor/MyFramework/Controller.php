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

    public function render($view, $variables = [])
    {
        ob_start();
        // Allows variables transfer from PostsController (with compact function)
        extract($variables);
        require($this->viewPath . $view . '.php');
        $content = ob_get_clean();
        require($this->viewPath . 'Templates/' . $this->template . '.php');
    }

    public function notFound()
    {
        header('HTTP/1.0 404 Not Found');
        die('Page not found');
    }
}