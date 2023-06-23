<html>
<head><title>Formulário</title>
</head>
 <body>
    <h2>Cadastro</h2>
   <form action="cadastro.php">
      <label>CD_PESSOA:</label>
      <input type="text" name="CD_PESSOA" id="nome"><br>
      <label>NM_PESSOA:</label>
      <input type="text" name="NM_PESSOA" id="texto" ><br>
      <label>FL_SEXO:</label>
      <input type="radio" name="FL_SEXO" id="true" value="1">
      <label for="true">MASCULINO</label>
      <input type="radio" name="FL_SEXO" id="false" value="0">
      <label for="true">FEMININO</label><br>
      <label>FL_ATIVO:</label>
      <input type="radio" name="FL_ATIVO" id="true" value="1">
      <label for="true">ATIVO</label>
      <input type="radio" name="FL_ATIVO" id="false" value="0">
      <label for="true">NAO ATIVO</label><br>
      <label>NU_CPF:</label>
      <input type="text" name="NU_CPF" id="cpf" ><br>
      <label>NU_IDADE:</label>
      <input type="text" name="NU_IDADE" id="idade" ><br>
 <input type="submit" value="Enviar">
   </form>
 </body>
</html>