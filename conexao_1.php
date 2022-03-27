<?php
          class Conexao{
                 private $servidor;
                 private $banco;
                 private $usuario;
                 private $senha;
                 
        
          public function __construct(){
                 $this->servidor = "fdb34.awardspace.net";
                 $this->banco = $this->usuario = "4041278_baudotesouro";
                 $this->senha = "senhadobd1";
        }
          
          public function Consultar($consulta_sql){
                 try{
                         $preview = $this->Conectar()->query($consulta_sql);
                        
                         $dados = $preview->fetchAll(PDO::FETCH_ASSOC);
                 }
                         catch(PDOException $e){
                                 echo"Erro na consulta".$e->getMessage();
                                 $dados = [];
                         }
                 finally{
                         return $dados;
                 }
          }
          
          public function Conectar(){
          try {
          
                  $conn = new PDO("mysql:host=$this->servidor;dbname=$this->banco", $this->usuario, $this->senha);
                  // Colocar o erro para exibição
                  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          }
                  catch(PDOException $e){
                          echo "Conexão mal sucedida".$e->getMessage();
                          $conn = NULL;
                  }
                  
          finally{
                  return $conn;
          }
	}
        }