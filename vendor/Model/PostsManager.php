<?php
/**
 * Created by PhpStorm.
 * User: ugo-fixe
 * Date: 06/10/2017
 * Time: 15:14
 */

namespace Model;


use MyFramework\PDOFactory;

class PostsManager extends PDOFactory
{
    public function __construct($db_name, $db_username, $db_password, $db_host)
    {
        parent::__construct($db_name, $db_username, $db_password, $db_host);
    }

    public function getList()
    {
        $req = $this->getPDO()->query('SELECT * FROM articles');
        $data = $req->fetchAll(\PDO::FETCH_OBJ);
        return $data;
    }

    public function getUnique($id)
    {
        /*
        $req = $this->getPDO()->query('SELECT * FROM articles WHERE id = :id');
        $req->bindValue(':id', (int) $id, \PDO::PARAM_INT);

        $data = $req->fetchAll(\PDO::FETCH_OBJ);
        return $data;
        */
    }

}