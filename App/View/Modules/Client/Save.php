<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" sizes="512x512" href="/View/Assets/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="/View/Assets/CSS/Save.css">

        <title> Cadastro de Clientes </title>

    </head>

    <body>

        <form action="/client/save" method="post">

            <input type="hidden" name="id" id="id" inputmode="numeric" value="<?= $model->id ?>">

            <label for="nome"> Nome do Cliente: </label>
            <input type="text" name="nome" id="nome" value="<?= $model->nome ?>" required>

            <label for="sobrenome"> Sobrenome do Cliente: </label>
            <input type="text" name="sobrenome" id="sobrenome" value="<?= $model->sobrenome ?>" required>

            <label for="cpf"> CPF do Cliente: </label>
            <input type="text" name="cpf" id="cpf" inputmode="numeric" value="<?= $model->cpf ?>" required>

            <label for="email"> E-mail do Cliente: </label>
            <input type="email" name="email" id="email" inputmode="email" value="<?= $model->email ?>" required>

            <div>

                <button type="reset"> Limpar </button>

                <button type="submit"> Salvar </button>

            </div>

            <div>

                <a href="/"> Voltar </a>

                <a href="/client/list"> Listagem </a>

            </div>

        </form>
        
    </body>

</html>