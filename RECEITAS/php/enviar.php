<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cep = $_POST["cep"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];

    $arquivo = "
        <html>
            <p><b> Nome:</b>$nome</p>
            <p><b> Email:</b>$email</p>
            <p><b> CEP:</b>$cep</p>
            <p><b> Rua:</b>$rua</p>
            <p><b> Nº:</b>$numero</p>
            <p><b> Complemento:</b>$complemento</p>
            <p><b> Cidade:</b>$cidade</p>
            <p><b> UF:</b>$uf</p>
        </html>    
    ";

    $destino = "alvaroamorimjf@gmail.com";
    $assunto = "Novo Cadastro - Tia Jurema"

    $headers = "MIME-Version: 1.0\n";
    $headers = "Content-type: text/html; charset=iso8859-1\n";
    $headers = "From: $nome <$email>";


    mail($destino, $assunto, $arquivo, $headers);

    echo <"meta http-equivi= 'refresh' content='10;URL=../email.html'>";
?>