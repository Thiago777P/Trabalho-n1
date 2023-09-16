<html>
    <body>

    <form method="POST" action="autorizacaologin.php">
        <label>Usuario</label>
        <input type="text" name="usuario"/><br>
        <label>Senha</label>
        <input type="password" name="senha"/><br>
        <input type="submit"  value="entrar">

    </form>

    <?php

    if(isset($_GET["erro"]) && $_GET["erro"]==1){
        ?>
        <div style="background-color: red;">A senha possui menos de 8 caracteres</div>
        <?php
    } 

    ?>

    </body>
</html>