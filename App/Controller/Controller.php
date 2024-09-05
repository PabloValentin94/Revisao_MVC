<?php

    namespace App\Controller;

    abstract class Controller
    {

        protected static function Render($view, $model = null) : void
        {

            $arquivo = VIEWS . $view . ".php";

            if(file_exists($arquivo))
            {

                require $arquivo;

            }

            else
            {
                
                exit("Arquivo não encontrado! Solicitação: " . $arquivo);

            }

        }

    }

?>