<?php
declare(strict_types=1);
require("vendor/autoload.php");
use classes\projeto;

//criando projetos
$projetoRedamil = new Projeto("Redamil");
$projetoPoupai = new Projeto("Poupai");

//criando tarefas
$tarefaReuniao = $projetoRedamil->criarTarefa("reuniao", "Reunião de apontamento", "Planejar operações da semana");
$tarefaDesign = $projetoRedamil->criarTarefa("design", "Planejar telas de login/cadastro", "Prototipagem");
$tarefaProgramacao = $projetoRedamil->criarTarefa("programacao", "Desenvolver login/cadastro", "Implementar funcionalidades");
$tarefaReuniao2 = $projetoPoupai->criarTarefa("reuniao", "Reunião de Sócios", "Encontro com investidores anjo");
$tarefaReuniao3 = $projetoPoupai->criarTarefa("reuniao", "Reunião de Sócios II", "Encontro com investidores anjo");
$tarefaReuniao4 = $projetoPoupai->criarTarefa("reuniao", "Reunião de Sócios III", "Encontro com investidores anjo");


//iniciando tarefas
$tarefaReuniao->iniciarTarefa();

//mostrando tarefas
$projetoRedamil->mostrarTarefas();
$projetoPoupai->mostrarTarefas();

//iniciando mais tarefas
$tarefaDesign->iniciarTarefa();
$tarefaProgramacao->iniciarTarefa();
$tarefaReuniao2->iniciarTarefa();
$tarefaReuniao3->iniciarTarefa();
$tarefaReuniao4->iniciarTarefa();

//mostrando tarefas
$projetoRedamil->mostrarTarefas();
$projetoPoupai->mostrarTarefas();

//concluindo tarefas
$tarefaReuniao->concluirTarefa();
$tarefaDesign->concluirTarefa();
$tarefaProgramacao->concluirTarefa();
$tarefaReuniao2->concluirTarefa();
$tarefaReuniao3->concluirTarefa();
$tarefaReuniao4->concluirTarefa();

//mostrando tarefas
$projetoRedamil->mostrarTarefas();
$projetoPoupai->mostrarTarefas();

