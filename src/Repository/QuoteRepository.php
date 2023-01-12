<?php

namespace App\Repository;

use App\Entity\Quote;

final class QuoteRepository
{
    public function find(): Quote
    {
        $quotes = file('quotes.txt'); // array de strings (cada una de las citas)
        $index = random_int(0, count($quotes) - 1);

        $quote = $quotes[$index]; // cita en la posición $number del array (string)

        return new Quote($quote);
    }
}
