<?php
declare(strict_types=1);
namespace classes;
use \interfaces\tarefa;

class tarefaProgramacao implements Tarefa{
    public $nome;
    public $descricao;
    public $tipo;
    public $projeto;

    public function __construct(string $tipo, string $nome, string $descricao, Projeto $projeto){
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->tipo = $tipo;
        $this->projeto = $projeto;

        echo "Tarefa " .$this->nome." (".$this->tipo.") - ".$this->descricao." criada para o projeto ".$projeto->nome.".<br><br>";
    }

    public function iniciarTarefa(){
        $this->projeto->moverTarefasIniciadas($this);
    }
    public function concluirTarefa(){
        $this->projeto->moverTarefasConcluidas($this);
    }
}