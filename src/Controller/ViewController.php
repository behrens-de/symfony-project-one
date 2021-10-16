<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    #[Route('/view', name: 'view')]
    public function index(): Response
    {
        $tag = date('l');

        $user = [
            'firstname' => 'Jan',
            'lastname' => 'Behrens',
            'age' => 37
        ];

        $a = ['apfel','birne','citrus'];

        return $this->render('view/index.html.twig', [
            'day' => $tag,
            'user' => $user,
            'a' => $a,

        ]);
    }
}
