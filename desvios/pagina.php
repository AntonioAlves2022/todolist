<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" name="dados" id="dados">
        <label for="">Nome</label>
        <input type="text" name="nome" id="nome">
        <button type="submit">Enviar</button>
    </form>

    <script>
        var formulario = Document.getElementByName("dados");
        formulario.onSubmit();
    </script>
</body>
</html>