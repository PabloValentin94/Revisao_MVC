<?php

    namespace App\Controller;

    use App\Controller\Controller;

    use App\Model\ClientModel;

    class ClientController extends Controller
    {

        public static function Index() : void
        {

            parent::Render("Client/Save");

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

        }

        public static function Remove() : void
        {

            $model = new ClientModel();

            $model->id = $_POST["id"];

            $model->Remove();

        }

        public static function List() : void
        {

            $model = new ClientModel();

            $model->List();

            parent::Render("Client/List", $model);

        }

    }

?>