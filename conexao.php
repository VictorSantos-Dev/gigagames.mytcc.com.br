

<?php
    define('HOST', '152.67.33.196');
    define('USUARIO', 'admin');
    define('SENHA', 'Trocar123&');
    define('DB', 'GIGA_GAMES');

    # Conecta com o servidor de banco de dados 
    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB);
    if (!$conexao) {
        die("Falha na Conexão: " . mysqli_connect_error());
    }

    # Use BD
    // mysql_select_db(DB);
    
    # Utf-enconde
    mysqli_set_charset($conexao, "utf8");

    $caminhoVirtual = 'http://www.gigagames.mytcc.com.br/'
?>




