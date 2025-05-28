<?php
declare(strict_types=1);
namespace classes;

class Projeto{
    public $nome;
    public $dataCriacao;
    protected $tarefasPendentes;
    protected $tarefasIniciadas;
    protected $tarefasConcluidas;

    public function __construct(string $nome){
        $this->nome = $nome;
        $this->dataCriacao = date('Y-m-d');
        $this->tarefasPendentes = [];
        $this->tarefasIniciadas = [];
        $this->tarefasConcluidas = [];

        echo "Projeto ".$this->nome." criado em ".$this->dataCriacao."<br><br>";
    }

    public function criarTarefa(string $tipo, string $nome, string $descricao){
        switch(strtolower($tipo)){
            case "reuniao":
                $tarefa = new tarefaReuniao($tipo, $nome, $descricao, $this);
                $this->tarefasPendentes[] = $tarefa;
                return $tarefa;
            break;

            case "design":
                $tarefa = new tarefaDesign($tipo, $nome, $descricao, $this);
                $this->tarefasPendentes[] = $tarefa;
                return $tarefa;
            break;
            case "programacao":
                $tarefa = new tarefaProgramacao($tipo, $nome, $descricao, $this);
                $this->tarefasPendentes[] = $tarefa;
                return $tarefa;
            break;
        }
    }

    public function mostrarTarefas(){
        echo "Tarefas pendentes do projeto ".$this->nome.": <br>";
        if(empty($this->tarefasPendentes)){
            echo "- Sem tarefas pendentes registradas <br>";
        } else {
            foreach($this->tarefasPendentes as $pendentes){
                echo "- ".$pendentes->nome." (".$pendentes->tipo.") <br>";
            }    
        }
        
        echo "Tarefas iniciadas do projeto ".$this->nome.": <br>";
         if(empty($this->tarefasIniciadas)){
            echo "- Sem tarefas iniciadas registradas <br>";
        } else {
            foreach($this->tarefasIniciadas as $iniciadas){
                echo "- ".$iniciadas->nome." (".$iniciadas->tipo.") <br>";
            }    
        }
        
        echo "Tarefas concluidas do projeto ".$this->nome.": <br>";
         if(empty($this->tarefasConcluidas)){
            echo "- Sem tarefas concluidas registradas <br>";
        } else {
            foreach($this->tarefasConcluidas as $concluidas){
                echo "- ".$concluidas->nome." (".$concluidas->tipo.") <br>";
            }   
        }
        echo "<br>";
    }

    public function moverTarefasIniciadas($tarefa){
        $this->tarefasIniciadas[] = $tarefa;

        foreach($this->tarefasPendentes as $index => $pendentes){
            if($pendentes === $tarefa){
                unset($this->tarefasPendentes[$index]);
                $this->tarefasPendentes = array_values($this->tarefasPendentes);
            }
        }

        echo "Tarefa ".$tarefa->nome." iniciada no projeto ".$this->nome.".<br><br>"; 

    }

    public function moverTarefasConcluidas($tarefa){
        $this->tarefasConcluidas[] = $tarefa;

        foreach($this->tarefasIniciadas as $index => $iniciadas){
            if($iniciadas === $tarefa){
                unset($this->tarefasIniciadas[$index]);
                $this->tarefasIniciadas = array_values($this->tarefasIniciadas);
            }
        }

        echo "Tarefa ".$tarefa->nome." concluída no projeto ".$this->nome.".<br><br>"; 
    }
}