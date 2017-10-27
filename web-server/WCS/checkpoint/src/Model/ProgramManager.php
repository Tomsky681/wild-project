<?php

namespace Model;

use Model\Connexion;

/**
 * Class Item
 * @package Model
 */
class ProgramManager
{

    private $conn; //variable de connexion

    public function __construct()
    {
        $db = Connexion::getInstance();
        $this->conn = $db->getDbh();
    }


    /**
     *
     */
    public function chaine1()
    {
        $query = "SELECT SUM(audience) AS calc1 FROM `program` WHERE channel_id = 1";

        $chaine1 = $this->conn->query(
            $query, \PDO::FETCH_CLASS, Program::class)
            ->fetchAll();
        return $chaine1;
    }

        /**
     *
     */
    public function chaine2()
    {
        $query = "SELECT SUM(audience) AS calc1 FROM `program` WHERE channel_id = 2";

        $chaine2 = $this->conn->query(
            $query, \PDO::FETCH_CLASS, Program::class)
            ->fetchAll();
        return $chaine2;
    }


        /**
     *
     */
    public function chaine3()
    {
        $query = "SELECT SUM(audience) AS calc1 FROM `program` WHERE channel_id = 3";

        $chaine3 = $this->conn->query(
            $query, \PDO::FETCH_CLASS, Program::class)
            ->fetchAll();
        return $chaine3;
    }

            /**
     *
     */
    public function chaine4()
    {
        $query = "SELECT SUM(audience) AS calc1 FROM `program` WHERE channel_id = 4";

        $chaine4 = $this->conn->query(
            $query, \PDO::FETCH_CLASS, Program::class)
            ->fetchAll();
        return $chaine4;
    }

            /**
     *
     */
    public function chaine5()
    {
        $query = "SELECT SUM(audience) AS calc1 FROM `program` WHERE channel_id = 5";

        $chaine5 = $this->conn->query(
            $query, \PDO::FETCH_CLASS, Program::class)
            ->fetchAll();
        return $chaine5;
    }

            /**
     *
     */
    public function chaine6()
    {
        $query = "SELECT SUM(audience) AS calc1 FROM `program` WHERE channel_id = 6";

        $chaine6 = $this->conn->query(
            $query, \PDO::FETCH_CLASS, Program::class)
            ->fetchAll();
        return $chaine6;
    }



    /**
     *
     */
    public function find1()
    {
        $query = "SELECT * FROM program WHERE channel_id = 1 ORDER BY start ASC";

        $program1 = $this->conn->query(
            $query, \PDO::FETCH_CLASS, Program::class)
            ->fetchAll();
        return $program1;

    }

            /**
     *
     */
    public function find2()
    {
        $query = "SELECT * FROM program WHERE channel_id = 2 ORDER BY start ASC";

        $program2 = $this->conn->query(
            $query, \PDO::FETCH_CLASS, Program::class)
            ->fetchAll();
        return $program2;
    }


        /**
     *
     */
    public function find3()
    {
        $query = "SELECT * FROM program WHERE channel_id = 3 ORDER BY start ASC";

        $program3 = $this->conn->query(
            $query, \PDO::FETCH_CLASS, Program::class)
            ->fetchAll();
        return $program3;
    }

        /**
     *
     */
    public function find4()
    {
        $query = "SELECT * FROM program WHERE channel_id = 4 ORDER BY start ASC";

        $program4 = $this->conn->query(
            $query, \PDO::FETCH_CLASS, Program::class)
            ->fetchAll();
        return $program4;
    }


        /**
     *
     */
    public function find5()
    {
        $query = "SELECT * FROM program WHERE channel_id = 5 ORDER BY start ASC";

        $program5 = $this->conn->query(
            $query, \PDO::FETCH_CLASS, Program::class)
            ->fetchAll();
        return $program5;
    }

        /**
     *
     */
    public function find6()
    {
        $query = "SELECT * FROM program WHERE channel_id = 6 ORDER BY start ASC";

        $program6 = $this->conn->query(
            $query, \PDO::FETCH_CLASS, Program::class)
            ->fetchAll();
        return $program6;
    }



    /**
     * @param $id
     */
    public function findOne($id)
    {
        $statement = $this->conn->prepare('SELECT * FROM program WHERE id=:id');
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();
        $statement->setFetchMode(\PDO::FETCH_CLASS, Program::class);
        $program = $statement->fetch();

        return $program;
    }

    /**
     *
     */
    public function insert($data)
    {
        //TODO : Implements SQL INSERT request
    }

    /**
     *
     */
    public function delete($id)
    {
        //TODO : Implements SQL DELETE request
    }

    /**
     *
     */
    public function update($id)
    {
        //TODO : Implements SQL UPDATE request
    }
}
