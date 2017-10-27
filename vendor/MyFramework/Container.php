<?php
/**
 * Created by PhpStorm.
 * User: ugo-fixe
 * Date: 16/10/2017
 * Time: 08:10
 */

namespace MyFramework;


class Container
{
    protected $params;

    public function __construct(array $params)
    {
        $this->params = $params;
    }

}