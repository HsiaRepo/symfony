<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{

    private array $messages = [
        "HI!",
        "Hello!",
        "Howdy!",
        "Hey there!"
    ];

    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return new Response(implode(', ', $this->messages));
    }

    #[Route('/messages/{id}')]
    public function showOne($id): Response
    {
        return new Response($this->messages[$id]);
    }
    
}