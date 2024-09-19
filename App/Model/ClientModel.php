<?php

    namespace App\Model;

    use App\DAO\ClientDAO;

    class ClientModel extends Model
    {

        public $id = null;

        public $nome, $sobrenome, $cpf, $email;

        public function Save() : void
        {

            $dao = new ClientDAO();

            ($this->id == null) ? $dao->Insert($this) : $dao->Update($this);

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

        public function Filter(int $id) : ClientModel
        {

            $dao = new ClientDAO();

            $registro = $dao->Search($id);

            if($registro)
            {

                return $registro;

            }

            else
            {

                return new ClientModel();

            }

        }

    }

?>