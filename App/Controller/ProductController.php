<?php

    namespace App\Controller;

    use App\Controller\Controller;

    use App\Model\ProductModel;

    class ProductController extends Controller
    {

        public static function Index() : void
        {

            parent::Render("Product/Save");

        }

        public static function Save() : void
        {

            $model = new ProductModel();

            $model->id = $_POST["id"];

            $model->nome = $_POST["nome"];

            $model->estoque = $_POST["estoque"];

            $model->preco = $_POST["preco"];

            $model->Save();

        }

        public static function Remove() : void
        {

            $model = new ProductModel();

            $model->id = $_POST["id"];

            $model->Remove();

        }

        public static function List() : void
        {

            $model = new ProductModel();

            $model->List();

            parent::Render("Product/List", $model);

        }

    }

?>