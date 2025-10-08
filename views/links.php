<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Links</title>
</head>
<body>
  <h1>Sugestão de como fazer redirecionamento de páginas. Façam o estilo como quiserem.</h1>

  <!-- Botão de sair -->
  <form action="/sistema/" method="POST"> <!-- Se for uma ação, método POST -->
    <!-- Esse input não aparece na tela mas é necessário para redirecionar, não precisa estilizar mas não apaguem. -->
    <input type="hidden" name="action" value="logout">
    <button>Sair</button>
  </form>

  <!-- Redirecionar para a página de adicionar produto -->
  <form action="/sistema/" method="GET"> <!-- Se for uma página, método GET -->
    <!-- Esse input não aparece na tela mas é necessário para redirecionar, não precisa estilizar mas não apaguem. -->
    <input type="hidden" name="page" value="adicionar">
    <button>Adicionar</button>
  </form>

  <!-- Redirecionar para a página de exibir produto especifico -->
  <form action="/sistema/" method="GET"> <!-- Se for uma página, método GET -->
    <!-- Esse input não aparece na tela mas é necessário para redirecionar, não precisa estilizar mas não apaguem. -->
    <input type="hidden" name="page" value="exibir">
    <button>Exibir</button>
  </form>

  <!-- Redirecionar para a página de listagem (Página inicial) -->
  <form action="/sistema/" method="GET"> <!-- Se for uma página, método GET -->
    <!-- Esse input não aparece na tela mas é necessário para redirecionar, não precisa estilizar mas não apaguem. -->
    <input type="hidden" name="page" value="listar">
    <button>Voltar</button>
  </form>
</body>
</html>
