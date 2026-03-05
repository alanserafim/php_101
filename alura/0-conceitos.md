## Operadores no PHP

## Operadores de atribuição

Os operadores de atribuição são usados para atribuir um valor a uma variável. O operador de atribuição básico é o = (sinal de igual). Por exemplo:

```php
$valor =  5;  // Atribui o valor 5 à variável chamada $valor  
$valor =  10; 
$valor += 15;  // Equivalente a $valor = $valor + 15, atribui o valor 25 à variável $valor 

```

## Operadores aritméticos

Os operadores aritméticos (ou operadores matemáticos) são usados para realizar operações matemáticas básicas. Alguns dos operadores matemáticos no PHP são:

    + (adição)
    - (subtração)
    * (multiplicação)
    / (divisão)
    % (resto da divisão)
    ** (potência)


## Operadores de comparação

Os operadores de comparação, como seu nome diz, são usados para comparar valores. Eles retornam um valor booleano (verdadeiro ou falso). Trabalharemos melhor com eles quando estivermos na aula de condicionais, em que vamos modificar o fluxo da aplicação dada alguma condição. Alguns operadores de comparação no PHP são:

    == (igual a)
    === (idêntico a)
    != (diferente de)
    <> (diferente de)
    !== (não idêntico a)
    > (maior que)
    >= (maior ou igual a)
    < (menor que)
    <= (menor ou igual a)


## Operadores Lógicos

Esses operadores são usados quando queremos verificar duas ou mais condições e/ou expressões na aplicação. Eles fazem a comparação de valores booleanos e retornam também um resultado booleano.

Os principais (mas não são os únicos) e mais comuns operadores lógicos no PHP são: 

    AND (&&), OR (||) e NOT (!).

O operador AND (&&), que traduzindo para o português seria E, é usado para verificar se duas condições são verdadeiras. Se ambas as condições forem verdadeiras, o resultado será verdadeiro. Caso contrário, o resultado será falso. Aqui está um exemplo:

```php
$a = true;
$b = false;
$comparacao = $a && $b;  // O resultado será o booleano *false*, já que $b é falso.
```

O operador OR (||), que traduzindo para o português seria OU, é usado para verificar se pelo menos uma das condições é verdadeira. Se pelo menos uma das condições for verdadeira, o resultado será verdadeiro. Caso contrário, o resultado será falso. 
Por exemplo:

```php
$a = true;
$b = false;
$comparacao = $a || $b; // O resultado será o booleano *true*, já que (pelo menos) o $a é verdadeiro.
```

O operador NOT (!) é usado para negar uma condição. Se a condição for verdadeira, o resultado será falso. Se a condição for falsa, o resultado será verdadeiro. Confira um exemplo:

```php
$a = true;
$negacao = !$a; // O resultado será *false*
```

## Operadores de incremento e decremento

Além dos operadores citados anteriormente, o operador de incremento é usado para aumentar o valor de uma variável em 1. Existem dois tipos de operadores de incremento: o operador de pré-incremento (++$variavel) e o operador de pós-incremento ($variavel++).

    O operador de pré-incremento (++$variavel) aumenta o valor da variável em 1 antes de usar a variável em uma expressão.

    Já o operador de pós-incremento ($variavel++) aumenta o valor da variável em 1 depois de usar a variável em uma expressão.

O mesmo serve para os operadores de decremento, que são usados para diminuir o valor de uma variável em 1. Os operadores são: pré-decremento (--$variavel) e pós-decremento ($variavel--).


## Trabalhando com strings

* O conteúdo entre aspas simples não é interpretado, é considerado texto.
* O conteúdo entre as duplas é interpretado, considerando variáveis e caracteres de escape
* Interpolação de strings pode ser feito entre aspas duplas ou adiconando um ponto entre as strings e variaveis


## Operador ternário

Além das estruturas de controle de fluxo que vimos até aqui (if/elseif/else, switch case e match), o PHP também possui um operador que nos permite tomar decisões que resultam em uma expressão: o operador ternário ?:.

Esse operador serve para avaliar determinada expressão, caso seja verdadeira, retornar uma segunda expressão e, caso seja falso, retornar uma terceira expressão. O uso de 3 possíveis expressões é o que dá nome a esse operador. Sua sintaxe é a seguinte:

```php
$resultado = $expressao1 ? $expressao2 : $expressao3;

```

Se $expressao1 for verdadeira (true), $resultado terá o valor de $expressão2. Caso contrário, $resultado terá o valor de $expressão3.

Esse operador não é tão simples de se entender no início, então, não se preocupe se não tiver ficado claro por enquanto. Conforme nós vamos avançando nos estudos, esse tipo de operador mais “complexo” vai fazer mais sentido.

## Condicionais

### If else
A sintaxe:

```php
$anoLancamento = 2025
if ($anoLancamento > 2022) {
    echo "\nEsse filme é um lançamento";
} elseif ($anoLancamento > 2020 && $anoLancamento <=2022){
    echo "\nEsse filme ainda é novo";
} else {
    echo "\nEsse filme é antigo";
}
```

### Switch Case

A sintaxe do switch case em PHP é a seguinte:

```php
switch (expressão) {
   case valor1:
      // código a ser executado se a expressão for igual a valor1
      break;
   case valor2:
      // código a ser executado se a expressão for igual a valor2
      break;
   case valor3:
      // código a ser executado se a expressão for igual a valor3
      break;
   ...
   default:
      // código a ser executado se a expressão não for igual a nenhum valor
      break;
}
```
Exemplo com valores:

```php
    <?php

    $dia = 3;

    switch ($dia) {
    case 1:
        $nomeDia = "domingo";
        break;
    case 2:
        $nomeDia = "segunda-feira";
        break;
    case 3:
        $nomeDia = "terça-feira";
        break;
    case 4:
        $nomeDia = "quarta-feira";
        break;
    case 5:
        $nomeDia = "quinta-feira";
        break;
    case 6:
        $nomeDia = "sexta-feira";
        break;
    case 7:
        $nomeDia = "sábado";
        break;
    default:
        $nomeDia = "Dia inválido";
        break;
    }

    echo "O dia $dia é $nomeDia";
```

## Laços de repetição

### For
Sintaxe:

```php
//Laço for
// for (inicialização, condição da repetição, incremento) {repetiçao}
for ($contador = 1; $contador < $argc; $contador++){
    $notas[] = (float) $argv[$contador];
}
```

### Foreach
Sintaxe:

```php

foreach ($notas as $nota){
        $somaDeNotas += $nota;
};

```

### while
Sintaxe:

```php
// laço while
$contadorWhile = 1;
while ($argv[$contador] != 0){ 
     $somaDeNotas += $argv[$contador];
}
```


### do while
Sintaxe: 

```php
// laço do while
do {
     $somaDeNotas += $argv[$contador];
} while ($argv[$contador] != 0);

```


## Arrays em PHP

### Sintaxe moderna

```php
$notasParaOFilme = [10, 8, 9, 7.5, 6.8];
```

### Sintaxe anterior

```php
$arrayAntigo = array(10,8,9,12, 5.3);
```

### Array Associativo

```php
// array associativo (também conhecido como mapa ou dicionário)
$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];
echo $filme['nome'];

```

## Manipulação de Arrays

Documentação do PHP com todas as funções de manipulação de arrays: 
https://www.php.net/manual/en/ref.array.php

Algumas funções de manipulação de arrays:


```php
$notas = [10, 8, 9, 7.5, 6.8];

//verifica o tipo e conteúdo da variável
var_dump($notas);
//Soma todos os valores
array_sum($notas)
//Ordena todos os valores
sort($notas);
//Verifica qual o valor mínimo 
min($notas);

```

## Funções

### Função sem retorno

Sintaxe:

```php
function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
        echo "\nEsse filme é um lançamento";
    } elseif ($$ano > 2020 && $$ano <=2022){
        echo "\nEsse filme ainda é novo";
    } else {
        echo "\nEsse filme é antigo";
    }
};
```

### Função com retorno

Sintaxe:

```php
function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
};

```
### Função recebendo uma variável por referência

É adicionado um "&" antes da variável.
Sintaxe:

```php
function exibeMensagemLancamento(int &$ano): void {
    if ($ano > 2022) {
        echo "\nEsse filme é um lançamento";
    } elseif ($$ano > 2020 && $$ano <=2022){
        echo "\nEsse filme ainda é novo";
    } else {
        echo "\nEsse filme é antigo";
    }
};
```


### Funções de Strings

Documentação: https://www.php.net/manual/en/ref.strings.php

Sintaxe:

```php
var_dump($filme['nome']);
//Descobrir posição de caracter
$posicaoDoisPontos = strpos($filme['nome'], ':');
var_dump($posicaoDoisPontos);

//recortar string
$primeiroNome = substr($filme['nome'], 0, $posicaoDoisPontos);
var_dump($primeiroNome);
```

### Funções de manipulação de arquivos
Documentação: https://www.php.net/manual/en/ref.filesystem.php



#### Exportando um json

```php
$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__.'/filme.json', $filmeComoStringJson);
```

#### Importando um json

```php

$caminhoArquivo = __DIR__.'/filme.json';
$conteudoArquivoFilme = file_get_contents($caminhoArquivo);
$filme = json_decode($conteudoArquivoFilme, true);
var_dump($filme);
```
#### Outras funções

* Ler somente uma linha usando a função `fgets`.
* Ler um número determinado de bytes do arquivo através de `fread`.
* Escrever em um arquivo usando `fwrite`.
* Navegar no arquivo para uma posição específica com `fseek`.

É importante ressaltar que essas funções podem ser utilizadas não somente em arquivos. Ao realizar file_get_contents('http://example.org'), por exemplo, realizamos uma requisição HTTP para o endereço passado por parâmetro. Isso é possível graças ao conceito de stream wrappers no PHP.
Documentação: https://www.php.net/manual/en/wrappers.php

### Função x

Sintaxe:

```php
*******
```

## Mensagens de Erro no PHP

Documentação: https://www.php.net/manual/en/errorfunc.constants.php