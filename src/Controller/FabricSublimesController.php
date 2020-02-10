<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FabricSublimesController extends AbstractController
{
    /**
     * @Route("/fabric/sublimes", name="app_fabricSublimes")
     */
    public function index()
    {
        return $this->render('fabric_sublimes/index.html.twig', [
            'current_menu' => 'fabric',
        ]);
    }
}
