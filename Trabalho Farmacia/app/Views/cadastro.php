<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmácia</title>
</head>
<body>
    <form action="cadastrar" method="post" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
        <input type="radio" name="laboratorio" value="Aché">
        <label for="laboratorio">Aché</label>
        <input type="radio" name="laboratorio" value="Cimed">
        <label for="laboratorio">Cimed</label>
        <input type="radio" name="laboratorio" value="EMS">
        <label for="laboratorio">EMS</label>
        <input type="radio" name="laboratorio" value="Eurofarma">
        <label for="laboratorio">Eurofarma</label>
        <input type="radio" name="laboratorio" value="Neo Química">
        <label for="laboratorio">Neo Química</label>
        <label for="preco">Preço:</label>
        <input type="number" step="0.01" name="preco">
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>