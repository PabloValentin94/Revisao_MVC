<?php

    namespace App\DAO;

    use App\DAO\DAO;

    use App\Model\ProductModel;

    class ProductDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(ProductModel $model) : void
        {

            $sql = "INSERT INTO Cliente(nome,estoque,preco) VALUES(?,?,?)";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);

            $stmt->bindValue(2, $model->estoque);

            $stmt->bindValue(3, $model->preco);

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

            return $stmt->fetchAll(DAO::FETCH_CLASS, "App\DAO\ProductModel");

        }

    }

?>