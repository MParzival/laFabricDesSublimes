<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommandezController extends AbstractController
{
    /**
     * @Route("/commandez", name="app_commandez")
     */
    public function index()
    {
        return $this->render('commandez/index.html.twig', [
            'current_menu' => 'commandez',
        ]);
    }
}
