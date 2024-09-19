<?php

    namespace App\DAO;

    use App\Model\ClientModel;

    class ClientDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(ClientModel $model) : void
        {

            $sql = "INSERT INTO Cliente(nome,sobrenome,cpf,email) VALUES(?,?,?,?)";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);

            $stmt->bindValue(2, $model->sobrenome);

            $stmt->bindValue(3, $model->cpf);

            $stmt->bindValue(4, $model->email);

            $stmt->execute();

        }

        public function Update(ClientModel $model) : void
        {

            $sql = "UPDATE Cliente SET nome = ?, sobrenome = ?, cpf = ?, email = ? " .
                   "WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);

            $stmt->bindValue(2, $model->sobrenome);

            $stmt->bindValue(3, $model->cpf);

            $stmt->bindValue(4, $model->email);

            $stmt->bindValue(5, $model->id);

            $stmt->execute();

        }

        public function Delete(int $id) : void
        {

            $parametro = [":filtro" => $id];

            $sql = "DELETE FROM Cliente WHERE id = :filtro";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute($parametro);

        }

        public function Select() : array
        {

            $sql = "SELECT * FROM Cliente";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\ClientModel");

        }

        public function Search(int $id) : ClientModel
        {

            $sql = "SELECT * FROM Cliente WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

            return $stmt->fetchObject("App\Model\ClientModel");

        }

    }

?>