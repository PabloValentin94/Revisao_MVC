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

            $model->preco = str_replace(",", ".", $_POST["preco"]);

            $model->Save();

            header("Location: /");

        }

        public static function Remove() : void
        {

            $model = new ProductModel();

            $model->id = $_GET["id"];

            $model->Remove();

            header("Location: /product/list");

        }

        public static function List() : void
        {

            $model = new ProductModel();

            $model->List();

            parent::Render("Product/List", $model->data);

        }

    }

?>