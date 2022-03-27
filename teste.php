<?php
        include "Computador.php";
        
        $novoCadastro = new Computador('AMD', 3, true, '2022-02-24 09:30:00');
        $novoCadastro->Cadastrar();
        
        $dados = Computador::Listar_todos();
        var_dumb($dados);
?>