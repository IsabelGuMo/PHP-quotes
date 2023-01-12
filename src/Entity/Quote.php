<?php

namespace App\Entity;

// clase que representa una cita
final class Quote
{
    // texto de la frase
    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function getText(): string
    {
        return $this->text;
    }
}
