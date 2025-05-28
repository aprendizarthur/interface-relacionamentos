<?php
declare(strict_types=1);
namespace classes;

class Tarefa{
    protected $nome;

    public function __construct(string $nome){
        $this->nome = $nome;

        echo "Atividade criada";
    }
}