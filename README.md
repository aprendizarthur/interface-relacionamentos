Exercício: Sistema de Gerenciamento de Tarefas
Descrição
Você deve criar um sistema para gerenciar tarefas em um projeto. Cada tarefa pode ser de diferentes tipos (por exemplo, Tarefa de Desenvolvimento, Tarefa de Design, Tarefa de Reunião), mas todas devem seguir um contrato comum definido por uma interface. Além disso, as tarefas estão associadas a um Projeto, demonstrando um relacionamento entre classes.

Requisitos
Crie uma interface chamada Tarefa que defina os seguintes métodos:
iniciar(): Inicia a tarefa e retorna uma string indicando que a tarefa foi iniciada.
concluir(): Conclui a tarefa e retorna uma string indicando que a tarefa foi concluída.
getDescricao(): Retorna a descrição da tarefa como string.
Crie pelo menos três classes que implementem a interface Tarefa:
TarefaDesenvolvimento: Representa uma tarefa de programação.
TarefaDesign: Representa uma tarefa de design gráfico.
TarefaReuniao: Representa uma tarefa de reunião.
Crie uma classe Projeto que:
Armazene uma lista de tarefas (relacionamento de composição).
Tenha métodos para adicionar tarefas e listar todas as tarefas com suas descrições.
Demonstre o uso do sistema criando instâncias de tarefas, adicionando-as a um projeto e chamando os métodos iniciar e concluir.
Dicas
Use uma propriedade na classe Projeto para armazenar as tarefas (pode ser um array).
Cada classe de tarefa deve implementar os métodos da interface de forma única, refletindo o tipo de tarefa.
O relacionamento entre Projeto e Tarefa é de composição (um projeto "contém" várias tarefas).