<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmácia</title>
</head>
<body>
    <header>
        <form action="pesquisar" method="post">
            <input type="search" name="pesquisa">
            <select name="campo">
                <option value="nome">Nome</option>
                <option value="laboratorio">Laboratório</option>
            </select>
            <select name="ordem">
                <option value="preco">Preço</option>
                <option value="quantidade">Quantidade</option>
            </select>
            <button type="submit">Pesquisar</button>
        </form>
    </header>
    <div class="cadastro">
        <form action="cadastro" method="get">
            <button type="submit">Cadastrar Medicamento</button>
        </form>
    </div>
    <div class="medicamentos">
        <table>
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>Laboratório</td>
                    <td>Preço</td>
                    <td>Quantidade</td>
                </tr>
            </thead>
        <?php 
            for($i = 0; $i < count($dados); $i++){
                $medicamento = $dados[$i];
        ?>
            <tr>
                <td><?=$medicamento['nome']?></td>
                <td><?=$medicamento['laboratorio']?></td>
                <td><?=$medicamento['preco']?></td>
                <td><?=$medicamento['quantidade']?></td>
            </tr>
        <?php
            }
        ?>
        </table>
    </div>
</body>
</html>
