<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\QuoteRepository;

class QuotesController extends AbstractController
{
    public function quote(): Response
    {
        $quoteRepository = new QuoteRepository();

        $quote = $quoteRepository->find();

        return $this->render(
            'quotes/quote.html.twig',
            [
                'quote' => $quote->getText()
            ]
        );
    }
}