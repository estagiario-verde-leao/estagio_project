<?php

namespace Source;

class SayHello
{
    //Declaração da variável (ou propriedade da classe SayHello) $property com visibilidade protectd.
    protected $property;

    //Declaração do método construtor da classe passando a variável, ou propriedade $property como parâmetro.
    public function __construct($property)
    {
        // Isso inicializa a propriedade $property da classe SayHello(), com o valor que for fornecido quando a classe for instanciada.
        $this->property = $property;
    }

    public function sayHello(): void
    {
        echo "A CLASSE CONCRETA SayHello() - PROPRIEDADES E MÉTODOS DE CLASSE" . PHP_EOL;
        echo "1 - CHAMADA DO  MÉTODO sayHello()" . PHP_EOL;
        echo "Olá " . $this->property . "!" . PHP_EOL;
    }

    /*  
     O destrutor está correto e não precisa receber parâmetros. 
     Em PHP, o método __destruct é chamado automaticamente quando um objeto é destruído, 
     e é uma boa prática usá-lo para liberar recursos ou realizar outras tarefas de limpeza.
     O método __destruct pode ser usado assim, sem parâmetros, para realizar ações 
     quando o objeto está sendo destruído: 
    */

    public function __destruct()
    {
        echo "2 - CHAMADA DO  MÉTODO __destruct() DA CLASSE SayHello()" . PHP_EOL;
    }
}
