<?php

    // PHP:

    define("BASEDIR", str_replace("\\", "/", dirname(__FILE__, 2)) . "/");

    define("VIEWS", str_replace("\\", "/", dirname(__FILE__, 1)) . "/View/Modules/");

    // SQL:

    $_ENV["database"]["host"] = "localhost:3306";

    $_ENV["database"]["user"] = "root";

    $_ENV["database"]["password"] = "etecjau";

    $_ENV["database"]["db_name"] = "db_exemplo";

?>