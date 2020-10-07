<?php
class Bot
{
    private $name = "Oliver";

    public function getName()
    {
        return $this->name;
    }

    public function hears($message, callable $call)
    {
        $call(new Bot);
        return $message;
    }

    public function reply($response)
    {
        echo $response;
    }

    public function ask($question, array $questionDictionary)
    {
        $question = str_replace(' ', '', trim($question));          // Apagando todos os espaços em branco
        foreach ($questionDictionary as $questions => $value) {
            if ($question == $questions) {
                return $value;
            }
        }
    }
}
