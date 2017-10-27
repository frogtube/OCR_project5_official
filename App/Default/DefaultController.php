<?php
/**
 * Created by PhpStorm.
 * User: ugo-fixe
 * Date: 11/10/2017
 * Time: 17:20
 */

namespace App;

class DefaultController
{
    public function home()
    {
        $homePath = ROOT . '/App/Default/Home.php';
        require $homePath;
    }
}