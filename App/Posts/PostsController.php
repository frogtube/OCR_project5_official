<?php
/**
 * Created by PhpStorm.
 * User: ugo-fixe
 * Date: 05/10/2017
 * Time: 06:36
 */

namespace Posts;

use Model\PostsManager;
use MyFramework\Controller;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->viewPath = ROOT . '/App/Posts/Views/';
        $this->template = 'layout';
    }

    public function index()
    {
        $db = new PostsManager('mvc', 'root', '', 'localhost');
        $posts = $db->getList();
        // Compact function allows variables transfer
        $this->render('index', compact('posts'));
    }

    public function show()
    {
        $db = new PostsManager('mvc', 'root', '', 'localhost');
        $posts = $db->getUnique();
        // Compact function allows variables transfer
        $this->render('index', compact('posts'));
    }
}
