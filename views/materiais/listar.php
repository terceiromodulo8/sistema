<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista</title>
</head>
<body>
  <h1>Lista de materiais</h1>

  <form action="/sistema/" method="POST">
    <input type="hidden" name="acao" value="logout">
    <button>Sair</button>
  </form>

  <form action="/sistema/" method="GET">
    <input type="hidden" name="pagina" value="adicionar">
    <button>Adicionar</button>
  </form>

  <form action="/sistema/" method="GET">
    <input type="hidden" name="pagina" value="exibir">
    <button>Exibir</button>
  </form>
</body>
</html>
