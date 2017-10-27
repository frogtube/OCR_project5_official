<?php
/**
 * Created by PhpStorm.
 * User: ugo-fixe
 * Date: 03/10/2017
 * Time: 18:09
 */

namespace MyFramework;


class HTTPResponse
{
    protected $page;

    public function addHeader($header)
    {
        header($header);
    }

    public function redirect($location)
    {
        header('Location: ' . $location);
        exit;
    }

    public function redirect404() {}

    public function send()
    {
        exit($this->page->getGeneratedPage());
    }

    public function setPage(Page $page)
    {
        $this->page = $page;
    }
    public function setCookie($name, $value = '', $expire = 0, $path = null, $domain = null, $secure = false, $httpOnly = true)
    {
        setCookie($name, $value, $expire, $path, $domain, $secure, $httpOnly);
    }
}