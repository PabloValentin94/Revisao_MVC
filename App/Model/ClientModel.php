<?php

    namespace App\Model;

    use App\Model\Model;

    use App\DAO\ClientDAO;

    class ClientModel extends Model
    {

        public $id = null;

        public $nome, $sobrenome, $cpf, $email;

        public function Save() : void
        {

            $dao = new ClientDAO();

            $dao->Insert($this);

        }

        public function Remove() : void
        {

            $dao = new ClientDAO();

            $dao->Delete($this->id);

        }

        public function List() : void
        {

            $dao = new ClientDAO();

            $this->data = $dao->Select();

        }

    }

?>