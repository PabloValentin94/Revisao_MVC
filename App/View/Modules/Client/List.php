<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" sizes="512x512" href="/View/Assets/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="/View/Assets/CSS/List.css">

        <title> Listagem de Clientes </title>

    </head>

    <body>

        <div>

            <table>
                
                <thead>

                    <tr>

                        <th> Nome Completo </th>

                        <th> Editar </th>

                        <th> Remover </th>
                    
                    </tr>

                </thead>

                <tbody>

                    <?php if(count($model) > 0): ?>

                        <?php foreach($model as $registro): ?>

                            <tr>

                                <td> <?= $registro->nome . " " . $registro->sobrenome ?> </td>

                                <td> <a href="/client?id=<?= $registro->id ?>"> <i class="bx bx-edit">  </i> </a> </td>

                                <td> <a href="/client/remove?id=<?= $registro->id ?>"> <i class="bx bx-trash">  </i> </a> </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>

                            <td> NULL </td>

                            <td> NULL </td>

                            <td> NULL </td>

                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

        <a href="/client"> Voltar </a>
        
    </body>

</html>