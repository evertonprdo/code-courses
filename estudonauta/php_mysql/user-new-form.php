<h1>Novo usuário</h1>
<form action="user-new.php" method="post">
    <table>
        <tr><td>Usuário <input type="text" name="usuario" id="usuario" size="10" maxlength="10">
        <tr><td>Nome <input type="text" name="nome" id="nome" size="30" maxlength="30">
        <tr><td>Tipo <select name="tipo" id="tipo">
            <option value="admin">Adminstrador do Sistema</option>
            <option value="editor" selected>Editor Autorizado</option>
        </select>
        <tr><td>Senha 1 <input type="password" name="senha1" id="senha1" size="10" maxlength="10">
        <tr><td>Senha 2 <input type="password" name="senha2" id="senha2" size="10" maxlength="10">
        <tr><td><input type="submit" value="Salvar">
    </table>
</form>