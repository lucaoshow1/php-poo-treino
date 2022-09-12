<?php

spl_autoload_register(
    function (string $nomeCompletoDaClasse)
    {
        $caminhoArquivo = str_replace('Php\\Banco', 'src', $nomeCompletoDaClasse);
        $caminhoArquivo = str_replace('\\', '/', $caminhoArquivo);
        $caminhoArquivo .= '.php';

        if (file_exists($caminhoArquivo)){
            require_once $caminhoArquivo;
        }
    });