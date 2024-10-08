<?php

    namespace App\Controller;

    use App\Model\ClientModel;

    class ClientController extends Controller
    {

        public static function Index() : void
        {

            $model = new ClientModel();

            if(isset($_GET["id"]))
            {

                $model = $model->Filter((int) $_GET["id"]);

            }

            parent::Render("Client/Save", $model);

        }

        public static function Save() : void
        {

            $model = new ClientModel();

            $model->id = $_POST["id"];

            $model->nome = $_POST["nome"];

            $model->sobrenome = $_POST["sobrenome"];

            $model->cpf = $_POST["cpf"];

            $model->email = $_POST["email"];

            $model->Save();

            header("Location: /");

        }

        public static function Remove() : void
        {

            $model = new ClientModel();

            $model->id = $_GET["id"];

            $model->Remove();

            header("Location: /client/list");

        }

        public static function List() : void
        {

            $model = new ClientModel();

            $model->List();

            parent::Render("Client/List", $model->data);

        }

    }

?>