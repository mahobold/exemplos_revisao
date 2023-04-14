<!DOCTYPE html>
<html>
    <body>
       
    <form action="exemplo_get.php" method="get">
        Nome: <input type="text" name="nome"><br>
        E-mail: <input type="text" name="email"><br> 
        <input type="submit">
    </form>

    <?php
    if (isset($_GET['nome']) && isset($_GET['email'])) {
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        echo "Olá, $nome! Seu endereço de e-mail é: $email.";
    } 

    ?>

    </body>
</html>