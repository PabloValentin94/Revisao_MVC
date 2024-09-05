<?php

    use App\Controller\
    {

        ClientController,
        ProductController

    };

    $url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    switch($url)
    {

        // Início:

        case "/":
            include(VIEWS . "Index.html");
        break;

        // Cliente:

        case "/client":
            ClientController::Index();
        break;

        case "/client/save":
            ClientController::Save();
        break;

        case "/client/remove":
            ClientController::Remove();
        break;

        case "/client/list":
            ClientController::List();
        break;

        // Produto:

        case "/product":
            ProductController::Index();
        break;

        case "/product/save":
            ProductController::Save();
        break;

        case "/product/remove":
            ProductController::Remove();
        break;

        case "/product/list":
            ProductController::List();
        break;

        // Página Inexistente:

        default:
            http_response_code(404);
            include(VIEWS . "Invalid.html");
        break;

    }

?>