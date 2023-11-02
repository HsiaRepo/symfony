<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{

    private array $messages = [
        "HI!",
        "Hello!",
        "Howdy!",
        "Hey there!"
    ];

    #[Route('/{limit?3}', name: 'app_index')]
    public function index(int $limit): Response
    {

        return $this->render('helloController/index.html.twig',
            [
                'messages' => array_slice($this->messages, 0, $limit)
            ]
        );
    }

    #[Route('/messages/{id<\d+>}', name: 'app_show_one')]
    public function showOne(int $id): Response
    {
        return $this->render(
            'helloController/show_one.html.twig',
            [
                'message' => $this->messages[$id]
            ]
        );
    }

}