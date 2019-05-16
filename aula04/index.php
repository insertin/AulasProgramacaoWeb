<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Example Method Post/Get</title>
    </head>
    <body>
        <form name="cadastro" action="cadastro.php" method="get">
            <div>
                <label>Nome:</label>
                <input type="text" id="nome" />
            </div>
            <div>
                <label>Email:</label>
                <input type="email" id="email" />
            </div>
            <div>
                <label>Senha:</label>
                <input type="password" id="senha"/>
            </div>
            <div>
                <label>Observação:</label>
                <textarea id="observacao"></textarea>
            </div>
            <div>
                <input id="btEnviar" type="submit" value="Cadastrar" />
                
            </div>
        </form>

    </body>
</html>


