<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" sizes="512x512" href="/View/Assets/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="/View/Assets/CSS/Save.css">

        <title> Cadastro de Produtos </title>

    </head>

    <body>

        <form action="/product/save" method="post">

            <input type="hidden" name="id" id="id" inputmode="numeric" value="<?= $model->id ?>">

            <label for="nome"> Nome do Produto: </label>
            <input type="text" name="nome" id="nome" value="<?= $model->nome ?>" required>

            <label for="estoque"> Quantidade Disponível<br>do Produto: </label>
            <input type="number" name="estoque" id="estoque" inputmode="numeric" value="<?= $model->estoque ?>" required>

            <label for="preco"> Preço do Produto: </label>
            <input type="text" name="preco" id="preco" inputmode="numeric" value="<?= $model->preco ?>" required>

            <div>

                <button type="reset"> Limpar </button>

                <button type="submit"> Salvar </button>

            </div>

            <div>

                <a href="/"> Voltar </a>

                <a href="/product/list"> Listagem </a>

            </div>

        </form>
        
    </body>

</html>