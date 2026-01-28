<?php 

class Tarefa {
    private $id;
    private $id_status;
    private $tarefa;
    private $data_cadastro;
    
    //Metodo magico para recuperar os atributos
    public function __get($atributo) {
        return $this->$atributo;
    }

    //Metodo magico para atribuir um novo valor para o atributo
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
        return $this;
    }
}





?>