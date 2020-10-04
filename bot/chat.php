<?php
include "Bot.php";
$bot = new Bot;
/*
$questions = [
    "php" => "É uma linguagem de programação Server Side",
    "linux" => "É um sistema operacional desenvolvido por Linus Torvald",
    "dns" => "O DNS (Domain Name System) é um sistema de gestão de nomes para computadores",
    "chatbot" => "É um programa de computador que tenta simular um ser humano na conversação com as pessoas",
    "qual seu nome" => "Meu nome é " . $bot->getName(),
];
*/
# Carregando de um arquivo JSON

$obj = json_decode(file_get_contents('regras.json'), True);
$questions = array();

foreach ($obj as $values) {
    foreach ($values as $key => $value) {
        $questions[$key] = $value;
    }
}


if (isset($_GET['msg'])) {
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;

        $generics = ['oi', 'oie', 'ola', 'olá', 'bom dia', 'boa tarde', 'boa noite', 'oii'];
        $optionsc = ['1', 'c'];
        $optionsj = ['2', 'java'];
        $optionsjs = ['3', 'javascript', 'js'];
        $optionsp = ['4', 'php'];
        $optionss = ['5', 'pl/sql', 'pl-sql', 'plsql', 'pl', 'sql'];
        $optionspy = ['6', 'python', 'py', 'pyton'];
        if (in_array($msg, $generics)) {
            $botty->reply('Olá! ');
            $botty->reply('Escolha uma linguagem para começar: <br>
                            1 - C <br>
                            2 - Java <br>
                            3 - JavaScript <br>
                            4 - PHP <br>
                            5 - PL/SQL <br>
                            6 - Python <br>');
        }   elseif (in_array($msg, $optionsc)) {
            $botty->reply($questions['opC']);
            $botty->reply($questions['helloC']);
        }   elseif (in_array($msg, $optionsj)) {
            $botty->reply($questions['opJ']);
            $botty->reply($questions['helloJ']);
        }   elseif (in_array($msg, $optionsjs)) {
            $botty->reply($questions['opJS']);
            $botty->reply($questions['helloJS']);
        }   elseif (in_array($msg, $optionsp)) {
            $botty->reply($questions['opP']);
            $botty->reply($questions['helloP']);
        }   elseif (in_array($msg, $optionss)) {
            $botty->reply($questions['opS']);
            $botty->reply($questions['helloS']);
        }   elseif (in_array($msg, $optionspy)) {
            $botty->reply($questions['opPY']);
            $botty->reply($questions['helloPY']);
        }   elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Desculpe, poderia digitar novamente? Não entendi...");
        }   else {
            $botty->reply($botty->ask($msg, $questions));
        }
    });
}
