<html>
    <body>
        <form method = "POST" action = "autorizacaocadastro.php">
        <label>Nome</label>
        <input type = "text" name="usuario"/><br>
        <label>Email</label>
        <input type = "email" name="email"/><br>
        <label>Senha</label>
        <input type = "password" name = "senha"/><br>
        <br/>
        <input type="submit" value="cadastrar"/>
        </form>

        <?php
        if(isset($_GET["erro"]) && $_GET["erro"]==1){

        ?>

        <div style="background-color: red;">A senha é menor que 8 caracteres</div>

        <?php
        }

        ?>
        

    </body>
</html>
