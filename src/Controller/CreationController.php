<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreationController extends AbstractController
{
    /**
     * @Route("/creation", name="app_creation")
     */
    public function index()
    {
        return $this->render('creation/index.html.twig', [
            'current_menu' => 'creation',
        ]);
    }
}
