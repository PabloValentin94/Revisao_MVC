<?php

    namespace App\Model;

    use App\DAO\ProductDAO;

    class ProductModel extends Model
    {

        public $id = null;

        public $nome, $estoque, $preco;

        public function Save() : void
        {

            $dao = new ProductDAO();

            ($this->id == null) ? $dao->Insert($this) : $dao->Update($this);

        }

        public function Remove() : void
        {

            $dao = new ProductDAO();

            $dao->Delete($this->id);

        }

        public function List() : void
        {

            $dao = new ProductDAO();

            $this->data = $dao->Select();

            foreach($this->data as $registro)
            {

                $registro->preco = number_format($registro->preco, 2, ",", ".");

            }

        }

        public function Filter(int $id) : ProductModel
        {

            $dao = new ProductDAO();

            $registro = $dao->Search($id);

            if($registro)
            {

                $registro->preco = number_format($registro->preco, 2, ",", ".");
                
                return $registro;

            }

            else
            {

                return new ProductModel();

            }

        }

    }

?>