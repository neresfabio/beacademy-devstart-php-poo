## POO Classes

**Declarando** classes:Aluno; Professor; Curso; Disciplina

```php

<?php
declare(strict_types=1);

class Aluno {
    public $nome;
    public $sobrenome;
    public $cpf;
    public $media;
    public $telefone;
}
?>

<?php

declare(strict_types=1);

class Professor {
    public $nome;
    public $cpf;
    public $telefone;
    public $especialidade;
}
?>

<?php

declare(strict_types=1);

class Displina{
    public $nome;
    public $creditos;
    public $descricao;
}
?>

<?php
declare(strict_types=1);

class Curso{
    public $nome;
    public $cargaHoraria;
    public $descricao;
}
?>
```

## Atributo

## Encapsulamento

## Modificadores de acesso

## Construtores

***PHP 8**
```php
 // Novo método construtor no PHP8
    public function __construct
    (
        private string $nome,
        private string $descricao
    ){}
```

## Readonly
Esse método só funciona no PHP 8.1
Impossibilita reescrever.

## Heranças

## Sobre Escrita

## Herança Encadeada

## Abstract

## Final

## Métodos estáticos

## Polimorfismo e Interfaces

## Gerenciador de dependências - Composer - Introdução


## Download Composer
Para instalar localmente no diretório do projeto.
```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" // baixa o arquivo para o projeto
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" // Verifica se o compose foi baixado
```

```php
php composer-setup.php // Executa o compose e cria um arquivo na raiz do diretório
php -r "unlink('composer-setup.php');" // Inclui o arquivo

```
## namespace

## composer.json => "autoload"

```php
php composer.phar dump-autoload
```
```php
composer require dompdf/dompdf
```

## Problema de instalação do DOMPDF

## Arquitetura MVC - Introdução