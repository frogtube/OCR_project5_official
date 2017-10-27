<?php
/**
 * Created by PhpStorm.
 * User: ugo-fixe
 * Date: 13/10/2017
 * Time: 11:11
 */

namespace Appdefault;

use App\AppContainer;
use MyFramework\Controller;

class DefaultController extends Controller
{
    protected $viewPath = ROOT . '/App/AppDefault/views';

    public function home()
    {
        $this->startTwig($this->viewPath, 'home.twig', null, 'Home');
    }

    public function contact()
    {
        $this->startTwig($this->viewPath, 'home.twig', null, 'Blog');
        $container = new AppContainer(null);
        $container->getSwiftMailerService($firstname, $lastname, $email, $content);
    }
}
