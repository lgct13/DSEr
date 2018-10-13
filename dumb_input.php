<form method="POST" action="dumb_shell.php">
        <h2><p>Campo 1: texto que deve ser digitado para realizar a pesquisa.</p></h2>
        <h3><p>Exemplo: o usuário quer pesquisar sobre exemplos em sua página, logo ele digitará exemplo no campo de pesquisa. </h3></p>
        <p>&nbsp;</p>
        <h2><p>Campo 2: nome da página para qual o usuário será redirecionado quando realizar a pesquisa.</p></h2>
        <h3><p>Exemplo: se o usuário pesquisou sobre exemplos, então o mesmo será redirecionado para exemplo.php ou exemplo.html ou exemplo.htm... Fica ao seu critério de qual página corresponderia à pesquisa.</p></h3>
        <p><span style="color:red">Lembre-se sempre de colocar o formato da página: .php .htm ou .html...</span></p>
         Campo 1:<input type="text" name="titulo">
         Campo 2:<input type="text" name="pagina">
        <input type="submit" name="enviar" value="enviar">
    </form>
