<?php
    session_start(); # Deve ser a primeira linha do arquivo

    echo "Olá " . $_SESSION['cookie'];
    echo '<form action="logado.php" method="post"><input type="submit" value="Editar" name="editar" id="editar"></form>';

    $submit = $_POST['editar'];

    if($submit)
    {
        echo "<script>window.location.href='editar.php';</script>";
    }
?>