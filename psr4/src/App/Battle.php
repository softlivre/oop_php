<?php

namespace App;

class Battle
{
    private $chars;

    public function __construct($fightTitle)
    {
        $this->fightTitle = $fightTitle;
    }

    public function addChar($char)
    {
        $this->chars[] = $char;
    }

    public function startBatle()
    {
        echo sprintf('%s Fight!' . PHP_EOL, $this->fightTitle);       
    }
}