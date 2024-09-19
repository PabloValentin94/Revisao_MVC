<?php

    namespace App\DAO;

    use App\Model\ProductModel;

    class ProductDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(ProductModel $model) : void
        {

            $sql = "INSERT INTO Produto(nome,estoque,preco) VALUES(?,?,?)";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);

            $stmt->bindValue(2, $model->estoque);

            $stmt->bindValue(3, $model->preco);

            $stmt->execute();

        }

        public function Update(ProductModel $model) : void
        {

            $sql = "UPDATE Produto SET nome = ?, estoque = ?, preco = ? WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);

            $stmt->bindValue(2, $model->estoque);

            $stmt->bindValue(3, $model->preco);

            $stmt->bindValue(4, $model->id);

            $stmt->execute();

        }

        public function Delete(int $id) : void
        {

            $parametro = [":filtro" => $id];

            $sql = "DELETE FROM Produto WHERE id = :filtro";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute($parametro);

        }

        public function Select() : array
        {

            $sql = "SELECT * FROM Produto";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\ProductModel");

        }

        public function Search(int $id) : ProductModel
        {

            $sql = "SELECT * FROM Produto WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

            return $stmt->fetchObject("App\Model\ProductModel");

        }

    }

?>