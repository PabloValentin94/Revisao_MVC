<?php

    spl_autoload_register(function($classe) {

        $arquivo = BASEDIR . $classe . ".php";

        if(file_exists($arquivo))
        {

            require $arquivo;

        }

        else
        {

            exit("Arquivo não encontrado! Solicitação: " . $arquivo);

        }

    });

    /*
    
        Observação importante: o Autoload só deve ser implementado, caso as classes do ambiente
        estejam utilizando namespaces, pois, nesse caso, além do nome da classe, também será retornado
        pela função o namespace dessa classe, tornando o processo mais fácil de ser desenvolvido. Exemplos:

        Retorno da função sem o uso de namespace: ProductModel (Nome da classe).

        Retorno da função com o uso de namespace: App\Model\ProductModel (Namespace + Nome da classe).

    */

?>