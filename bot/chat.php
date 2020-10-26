<?php
include "Bot.php";
$bot = new Bot;

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
        $optionsjava = ['2', 'java'];
        $optionsjs = ['3', 'javascript', 'js'];
        $optionsphp = ['4', 'php'];
        $optionspl = ['5', 'pl/sql', 'pl-sql', 'plsql', 'pl', 'sql'];
        $optionspy = ['6', 'python', 'py', 'pyton'];
        $outros = ['outras', 'outros', 'outro', 'outra'];
        if (in_array($msg, $generics)) {
            $botty->reply('Olá! <br>');
            $botty->reply('Escolha uma linguagem para começar! <br><br>
                        <b>1 - C <br>
                            2 - Java <br>
                            3 - JavaScript <br>
                            4 - PHP <br>
                            5 - PL/SQL <br>
                            6 - Python <br></b>');
        }   elseif (in_array($msg, $optionsc)) {
            $botty->reply($questions['opc']);
            $botty->reply($questions['outrosc']);
        }   elseif (in_array($msg, $optionsjava)) {
            $botty->reply($questions['opjava']);
            $botty->reply($questions['outrosjava']);
        }   elseif (in_array($msg, $optionsjs)) {
            $botty->reply($questions['opjs']);
            $botty->reply($questions['outrosjs']);
        }   elseif (in_array($msg, $optionsphp)) {
            $botty->reply($questions['opphp']);
            $botty->reply($questions['outrosphp']);
        }   elseif (in_array($msg, $optionspl)) {
            $botty->reply($questions['oppl']);
            $botty->reply($questions['outrospl']);
        }   elseif (in_array($msg, $optionspy)) {
            $botty->reply($questions['oppy']);
            $botty->reply($questions['outrospy']);
        }   elseif (in_array($msg, $outros)) {
            $botty->reply($questions['outros']);
        }   elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Desculpe, poderia digitar novamente? Não entendi...");
        }   else {
            $botty->reply($botty->ask($msg, $questions));
        }
    });
}
