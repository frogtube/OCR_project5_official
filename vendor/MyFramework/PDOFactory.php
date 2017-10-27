<?php
/**
 * Created by PhpStorm.
 * User: ugo-fixe
 * Date: 06/10/2017
 * Time: 11:31
 */

namespace MyFramework;


class PDOFactory
{
    private $db_name;
    protected $db_username;
    protected $db_password;
    protected $db_host;
    protected $pdo;

    public function __construct($db_name, $db_username, $db_password, $db_host)
    {
        $this->db_name = $db_name;
        $this->db_username = $db_username;
        $this->db_password = $db_password;
        $this->db_host = $db_host;
    }

    // Connexion to database
    public function getPDO()
    {
        // Avoid multiple db connexion for multiple queries
        if ($this->pdo === null)
        {
            try
            {
                $pdo = new \PDO("mysql:dbname=$this->db_name;host=$this->db_host", $this->db_username, $this->db_password);
                $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $this->pdo = $pdo;
            }
            catch (\Exception $e)
            {
                die('Error : ' . $e->getMessage());
            }
        }
        return $this->pdo;
    }
}